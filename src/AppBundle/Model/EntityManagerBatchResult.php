<?php

namespace AppBundle\Model;

class EntityManagerBatchResult
{
    private $nbUpdate = 0;
    private $nbCreate = 0;
    private $nbUnchange = 0;
    private $nbDelete = 0;
    private $nbFailed = 0;
    private $entitiesFails = array();

    public function __construct($results)
    {
        foreach ($results as $result) {
            /* @var \AppBundle\Model\EntityManagerResult $result  */
            if ($result->hasErrors()) {
                $this->errorResult($result);
            } else {
                $this->successResult($result);
            }
        }
    }

    /**
     * @param $result
     */
    private function successResult($result)
    {
        switch ($result->getActionType())
        {
            case EntityManagerResult::ACTION_CREATE:
                $this->nbCreate ++;
                break;
            case EntityManagerResult::ACTION_UPDATE:
                $this->nbUpdate ++;
                break;
             case EntityManagerResult::ACTION_UNCHANGE:
                $this->nbUnchange ++;
                break;
             case EntityManagerResult::ACTION_DELETE:
                $this->nbDelete ++;
                break;

        }
    }

    /**
     * @param $result
     * @param null $globalError
     */
    private function errorResult($result, $globalError = null)
    {
        $this->nbFailed ++;

        $entityError = [
            'entity' => $result->getEntity(),
            //'errors' => $result->getErrors(),
        ];
        $entityError['summaryErrors'] = !is_null($globalError ) ? $globalError  : $result->getSummaryErrors();

        $this->entitiesFails[] = $entityError;
    }

    /**
     * @return int
     */
    public function getNbUnchange()
    {
        return $this->nbUnchange;
    }

    /**
     * @return int
     */
    public function getNbCreate()
    {
        return $this->nbCreate;
    }

    /**
     * @return int
     */
    public function getNbUpdate()
    {
        return $this->nbUpdate;
    }

    /**
     * @return int
     */
    public function getNbDelete()
    {
        return $this->nbDelete;
    }

    /**
     * @return int
     */
    public function getNbFailed()
    {
        return $this->nbFailed;
    }

    public function getEntitiesFailed()
    {
        return $this->entitiesFails;
    }
}