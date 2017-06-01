<?php

namespace AppBundle\Manager;

use AppBundle\Entity\ImportLog;
use AppBundle\Manager\BaseEntityManager;
use AppBundle\Model\EntityManagerBatchResult;
use AppBundle\Model\Timer;

/**
 * Class ImportLogManager
 * @package AppBundle\Manager
 */
class ImportLogManager extends BaseEntityManager
{
    /**
     * @param $className
     * @param EntityManagerBatchResult $batchResult
     * @param array $deserializeErrors
     * @param Timer $timer
     * @return ImportLog
     */
    public function log($className, EntityManagerBatchResult $batchResult, array $deserializeErrors, Timer $timer)
    {
        $importLog = $this->create();

        $class = new \ReflectionClass($className);
        $importLog->setClassName($class->getShortName());

        $nbFail = $batchResult->getNbFailed() + count($deserializeErrors);
        $nbTotal = $batchResult->getNbCreate() + $batchResult->getNbUpdate() + $batchResult->getNbUnchange() + $batchResult->getNbDelete() + $nbFail;
        $importLog->setNbTotal($nbTotal);
        $importLog->setNbCreate($batchResult->getNbCreate());
        $importLog->setNbUpdate($batchResult->getNbUpdate());
        $importLog->setNbUnchange($batchResult->getNbUnchange());
        $importLog->setNbDelete($batchResult->getNbDelete());
        $importLog->setNbFail($nbFail);

        $failEntitiesSummary = array_map(function($failEntitySummary) {
            return $failEntitySummary['summaryErrors'];
        }, $batchResult->getEntitiesFailed());

        $classReflection = new \ReflectionClass($className);
        $shortNameClass = $classReflection->getShortName();
        foreach ($deserializeErrors as $id => $message) {
            $failEntitiesSummary[] = $shortNameClass.'['.$id.'] = '.$message;
        }
        $importLog->setErrors(implode('\r\n', $failEntitiesSummary));

        $importLog->setDateStart($timer->getStart());
        $importLog->setDateEnd($timer->getEnd());
        $importLog->setDuration($timer->getDuration());

        $this->save($importLog);

        return $importLog;
    }
}