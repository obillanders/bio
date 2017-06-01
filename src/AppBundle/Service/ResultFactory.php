<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Model\EntityManagerBatchResult;
use AppBundle\Model\EntityManagerResult;

class ResultFactory
{
    /**
     * @param EntityManager $em
     * @param $entity
     * @param null $errors
     *
     * @return EntityManagerResult
     */
    public function createEntityResult(EntityManager $em, $entity, $errors = null)
    {
        $result = new EntityManagerResult($em, $entity);
        if ($errors) {
            $result->setErrors($errors);
        } else {
            $result->setActionType();
        }

        return $result;
    }

    /**
     * @param EntityManager $em
     * @param $entity
     * @param null $errors
     *
     * @return EntityManagerResult
     */
    public function createDeleteEntityResult(EntityManager $em, $entity, $errors = null)
    {
        $result = new EntityManagerResult($em, $entity);
        if ($errors) {
            $result->setErrors($errors);
        } else {
            $result->setActionType(EntityManagerResult::ACTION_DELETE);
        }

        return $result;
    }

    /**
     * @param $results
     * @param $nbBatches
     *
     * @return EntityManagerBatchResult
     */
    public function createBatchResult($results)
    {
        return new EntityManagerBatchResult($results);
    }
}