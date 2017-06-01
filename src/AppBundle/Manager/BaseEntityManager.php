<?php

namespace AppBundle\Manager;

use AppBundle\Model\BatchBuilder;
use AppBundle\Model\EntityManagerResult;
use AppBundle\Service\ManagerTools;
use Sonata\CoreBundle\Model\BaseEntityManager as SonataEntityManger;
use Psr\Log\LoggerInterface;
use AppBundle\Model\EntityManagerBatchResult;

/**
 * Class BaseEntityManager
 * @package AppBundle\Manager
 *
 * @TODO : test batch and batchReplace
 */
abstract class BaseEntityManager extends SonataEntityManger implements EntityManagerInterface
{
    protected $validator;
    protected $logger;
    protected $entityIdentifiers;
    protected $eventDispatcher;
    protected $resultFactory;

    /**
     * BaseEntityManager constructor.
     *
     * @param string $class
     * @param ManagerTools $managerTools
     */
    public function __construct($class, ManagerTools $managerTools)
    {
        parent::__construct($class, $managerTools->getRegistry());
        $this->validator = $managerTools->getValidator();
        $this->logger = $managerTools->getLogger();
        $this->validator = $managerTools->getValidator();
        $this->eventDispatcher = $managerTools->getEventDispatcher();
        $this->resultFactory = $managerTools->getResultFactory();
        $this->entityIdentifiers = $this->getEntityManager()->getClassMetadata($class)->getIdentifierFieldNames();
    }

    public function getId($entity) {
        $meta = $this->getEntityManager()->getClassMetadata($this->class);
        $identifier = $meta->getSingleIdentifierFieldName();
        $reflection = new \ReflectionProperty($this->class, $identifier);
        $reflection->setAccessible(true);
        return $reflection->getValue($entity);
    }

    /**
     * Improve save method of sonata. detect changeset and change set type before even flush.
     *
     * @param object $entity
     * @param bool $andFlush
     *
     * @return array
     */
    public function save($entity, $type = 'Default', $andFlush = true)
    {
        $em = $this->getEntityManager();

        $errors = $this->validator->validate($entity, null, (array) $type);
        if (count($errors) > 0) {
            $result =  $this->resultFactory->createEntityResult($em, $entity, $errors);
            $this->logger->error($result->getSummaryErrors());
            return $result;
        }

        $entity = $em->merge($entity);
        parent::save($entity, false);
        $result = $this->resultFactory->createEntityResult($em, $entity);
        if ($andFlush) {
            $errorFlush = $this->flush();
            if ($errorFlush) {
                $result->setErrors(array($errorFlush));
            }
        }

        return $result;
    }

    /**
     * @param object $entity
     * @param bool $andFlush
     *
     * @return EntityManagerResult
     */
    public function delete($entity, $andFlush = true)
    {
        $em = $this->getEntityManager();
        $entity = $em->merge($entity);

        parent::delete($entity, false);
        if ($andFlush) {
            $this->flush();
        }

        return $this->resultFactory->createDeleteEntityResult($em, $entity);
    }

    /**
     * @param array $entities
     * @param int $batchSize
     * @param bool $autoRetry
     * @param string $type
     * @return EntityManagerBatchResult
     * @throws \Exception
     */
    public function batchReplace($entities, $batchSize = 100, $autoRetry = false, $type = 'Default')
    {
        $this->logger->info(sprintf("Replace all entities %s per batch of %s", $this->class, $batchSize));

        if (!method_exists($this->getClass(), 'setDeleted')) {
            throw new \Exception('Entity '.$this->getClass().' must contains method setDeleted');
        }

        array_map(function($entity) {
            $entity->setDeleted(false);
        }, $entities);

        $dbEntities = $this->findAll();
        $onlyDbEntities = array_udiff($dbEntities, $entities, function($entity1, $entity2) {
            return $this->getId($entity1) - $this->getId($entity2);
        });
        array_map(function($entity) {
            $entity->setDeleted(true);
        }, $onlyDbEntities);

        $this->logger->info(sprintf("%s entities to save and %s entities to delete", count($entities), count($onlyDbEntities)));

        $batchEntities = array_merge($entities, $onlyDbEntities);

        return $this->batch($batchEntities, $batchSize, $autoRetry, true, $type);
    }

    /**
     * @param array $entities
     * @param int $batchSize
     * @param boolean $autoRetry
     * @param boolean $delete
     * @param string $type
     * @return EntityManagerBatchResult
     */
    public function batch($entities, $batchSize = 100, $autoRetry = false, $delete = true, $type = 'Default')
    {
        $this->logger->info(sprintf("Start persisting %s entities %s per batch of %s", count($entities), $this->class, $batchSize));

        $em = $this->getEntityManager();

        $batchBuilder = new BatchBuilder($entities);
        $batches = $batchBuilder->build($batchSize);

        $results = array();
        foreach ($batches as $n => $entities) {
            $this->logger->info(sprintf("Start batch %s/%s of %s entities %s", $n + 1, count($batches), count($entities), $this->class));

            $batchResults = $this->persistBatchEntities($entities, $type, $delete, false);

            $errorFlush = $this->flush();
            $em->clear($this->class);

            if ($errorFlush) {

                $this->logger->info(sprintf("Error(s) detected during flush of batch %s/%s", $n + 1, count($batches)));

                if ($autoRetry && $batchSize > 1) {
                    $this->logger->info(sprintf("Auto retry batch %s/%s, flush one by one %s entities", $n + 1, count($batches), count($entities)));
                    $batchResults = $this->persistBatchEntities($entities, $type, $delete, true);
                } else {
                    $this->setFlushErrorOnResults($batchResults, $errorFlush);
                }
            }

            $results = array_merge($results, $batchResults);
        }

        return $this->resultFactory->createBatchResult($results);
    }

    private function persistBatchEntities($entities, $type, $delete, $andFlush)
    {
        $results = array();
        foreach ($entities as $entity) {
            if (method_exists($entity, 'isDeleted') && $entity->isDeleted() && $delete) {
                $results[] = $this->delete($entity, $andFlush);
            } else {
                $results[] = $this->save($entity, $type, $andFlush);
            }
        }
        return $results;
    }

    /**
     * @param $results
     * @param $errorFlush
     * @return mixed
     */
    private function setFlushErrorOnResults($results, $errorFlush)
    {
        foreach ($results as &$result) {
            $result->setErrors(array($errorFlush));
        }
    }

    /**
     * @return mixed
     */
    private function flush()
    {
        $em = $this->getEntityManager();
        $em->getConnection()->beginTransaction();

        try {
            $em->flush();
            $em->getConnection()->commit();
        } catch (\Exception $exception) {
            $em->getConnection()->rollBack();
            $this->registry->resetManager();
            $this->logger->error($exception->getMessage());

            return $exception;
        }
    }

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}