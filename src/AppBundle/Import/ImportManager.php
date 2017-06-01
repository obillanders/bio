<?php

namespace AppBundle\Import;

use AppBundle\Entity\ImportLog;
use AppBundle\Manager\ImportLogManager;
use AppBundle\Model\Timer;
use AppBundle\Service\ManagerLocator;
use \Psr\Log\LoggerInterface;

/**
 * Class ImportManager
 * @package AppBundle\Import
 *
 * @TODO test import
 */
class ImportManager
{
    private $handlers;
    private $managerLocator;
    private $logger;
    private $importLogManager;

    /**
     * ImportManager constructor.
     *
     * @param ManagerLocator $managerLocator
     * @param LoggerInterface $logger
     * @param ImportLogManager $importLogManager
     */
    function __construct(ManagerLocator $managerLocator, LoggerInterface $logger, ImportLogManager $importLogManager)
    {
        $this->handlers = array();
        $this->logger = $logger;
        $this->importLogManager = $importLogManager;
        $this->managerLocator = $managerLocator;
    }

    /**
     * @param ImportHandlerInterface $importHandler
     * @param $handlerName
     */
    public function addImportHandler(ImportHandlerInterface $importHandler, $handlerName)
    {
        $this->handlers[$handlerName] = $importHandler;
    }

    /**
     * @param $handlerName
     * @return mixed
     * @throws \Exception
     */
    public function getImportHandler($handlerName)
    {
        if (!isset($this->handlers[$handlerName])) {
            throw new \Exception(sprintf("Import handler %s don't exist", $handlerName));
        }

        return $this->handlers[$handlerName];
    }

    /**
     * @param $file
     * @param $className
     * @param $importType
     * @param $importMode
     * @param $batchSize
     * @return ImportLog
     * @throws \Exception
     */
    public function import($file, $className, $importType, $importMode, $batchSize, $encoding)
    {
        $this->logger->info(sprintf('Import file %s transformed in %s (type=%s, mode=%s, batchSize=%s)', basename($file), $className, $importType, $importMode, $batchSize));

        $timer = new Timer();

        $importHandler = $this->getImportHandler($importType);
        $entities = $importHandler->deserialize($file, $className, $encoding);

        foreach ($importHandler->getErrors() as $nrid => $error) {
            $this->logger->error(sprintf('%s[%s] = %s', $className, $nrid, $error));
        }

        $this->logger->info(sprintf('%s entities %s deserialized from file %s, %s error(s) found', count($entities), $className, basename($file), count($importHandler->getErrors())));

        /** @var EntityManagerInterface $em */
        $em = $this->managerLocator->getEntityManager($className);
        $em->setLogger($this->logger); // Override default logger by import logger

        switch ($importMode) {
            case ImportMode::DIFF_WITH_DELETE:
                $resultBatch = $em->batch($entities, $batchSize, true, true);
                break;

            case ImportMode::DIFF_WITHOUT_DELETE:
                $resultBatch = $em->batch($entities, $batchSize, true, false);
                break;

            case ImportMode::REPLACE_ALL:
                $resultBatch = $em->batchReplace($entities, $batchSize, true);
                break;

            default:
                throw new \Exception('Import mode "'.$importMode.'" not supported');
        }

        $timer->end();

        $importLog = $this->importLogManager->log($className, $resultBatch, $importHandler->getErrors(), $timer);

        $this->logger->info(sprintf('Import finished : %s', $importLog));

        return $importLog;
    }
}