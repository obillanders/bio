<?php

namespace AppBundle\Model;


class BatchBuilder
{
    private $entities;
    private $nbEntities;

    public function __construct($entities)
    {
        $this->entities = $entities;
        $this->nbEntities = count($entities);
    }

    public function build($nbEntityByBatch)
    {
        $batch = array();
        $batches = array();

        $i = 1;
        foreach ($this->entities as $entity) {
            $batch[] = $entity;
            if (($i % $nbEntityByBatch) === 0) {
                $batches[] = $batch;
                $batch = array();
            }
            $i++;
        }

        if (!empty($batch)) {
            $batches[] = $batch;
        }

        return $batches;
    }
}