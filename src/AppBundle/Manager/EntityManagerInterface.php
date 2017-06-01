<?php

namespace AppBundle\Manager;

use Psr\Log\LoggerInterface;

interface EntityManagerInterface
{
    public function  batch($entities);
    public function  setLogger(LoggerInterface $logger);
}