<?php

namespace AppBundle\Service;


class ManagerLocator
{
    private $managers;

    public function __construct()
    {
        $this->managers = array();
    }

    public function addManager($manager, $entity)
    {
        $this->managers[$entity] = $manager;
    }

    public function getEntityManager($entity)
    {
        if (!isset($this->managers[$entity])) {
            throw new \Exception(sprintf('Service Manager not found for entity %s', $entity));
        }

        return  $this->managers[$entity];
    }
}