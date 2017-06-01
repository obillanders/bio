<?php

namespace AppBundle\Model;

use Doctrine\ORM\EntityManager;

class EntityManagerResult
{
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';

    const ACTION_UNCHANGE = 'unchange';
    const ACTION_CREATE = 'create';
    const ACTION_UPDATE = 'update';
    const ACTION_DELETE = 'delete';

    private $status = null;
    private $actionType;
    private $entity;
    private $em;
    private $entityIdentifier;
    private $entityIdentifierValue;
    private $errors = [];
    private $summaryErrors;

    public function __construct(EntityManager $em, $entity)
    {
        $this->em = $em;
        $this->entity = $entity;
        $this->entityIdentifier = $em->getClassMetadata(get_class($entity))->getSingleIdentifierFieldName();
        $this->entityIdentifierValue = call_user_func(array($entity, 'get' . ucfirst($this->entityIdentifier)));
    }

    /**
     * @return string
     */
    private function detectActionType()
    {
        // @TODO : performance problem with computeChangeSets. Find alternative
        /*$this->em->getUnitOfWork()->computeChangeSets();
        $changeset = $this->em->getUnitOfWork()->getEntityChangeset($this->entity);

        if (empty($changeset)) {
            return self::ACTION_UNCHANGE;
        }

        if (isset($changeset[$this->entityIdentifier])) {
            return self::ACTION_CREATE;
        }

        return self::ACTION_UPDATE;*/
        if ($this->em->getUnitOfWork()->isScheduledForInsert($this->entity)) {
            return self::ACTION_CREATE;
        } else {
            return self::ACTION_UPDATE;
        }
    }

    /**
     * @return mixed
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param null $actionType
     */
    public function setActionType($actionType = null)
    {
        $this->actionType = $actionType ? $actionType : $this->detectActionType();
    }

    /**
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * @return mixed
     */
    public function getChangeset()
    {
        return  $this->changeset;
    }

    /**
     * @param $isSuccess
     */
    public function setStatus($isSuccess)
    {
        $this->status = ($isSuccess) ? self::STATUS_SUCCESS : self::STATUS_FAILED;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return  $this->status == self::STATUS_SUCCESS;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param bool
     */
    public function hasErrors()
    {
        return (count($this->errors) > 0);
    }

    /**
     * @param \Symfony\Component\Validator\ConstraintViolationList $errors
     */
    public function setErrors($errors)
    {
        if (!is_array($errors)) {
            $errors = iterator_to_array($errors);
        }

        $this->errors = $errors;
        $this->summaryErrors = $this->generateSummaryError($errors);
    }

    private function generateSummaryError($errors)
    {
        $summaryErrors = array_map(function ($error) {
            if ($error instanceof \Symfony\Component\Validator\ConstraintViolationInterface) {
                $classReflection = new \ReflectionClass($error->getRoot());
                $shortNameClass = $classReflection->getShortName();
                return "{$shortNameClass}[{$this->entityIdentifierValue}]->{$error->getPropertyPath()} = {$error->getInvalidValue()} - {$error->getMessage()}";
            }

            return $error->getMessage();

        }, $errors);


         return implode(' \n\r ', $summaryErrors);
    }

    public function getSummaryErrors()
    {
        return $this->summaryErrors;
    }
}