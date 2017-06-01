<?php

namespace AppBundle\Service;

use Doctrine\Common\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ManagerTools
{
    private $validator;
    private $logger;
    private $eventDispatcher;
    protected $resultFactory;

    public function __construct(ManagerRegistry $registry, ResultFactory $resultFactory, ValidatorInterface $validator, LoggerInterface $logger, EventDispatcherInterface $eventDispatcher)
    {
        $this->validator = $validator;
        $this->logger = $logger;
        $this->eventDispatcher = $eventDispatcher;
        $this->registry = $registry;
        $this->resultFactory = $resultFactory;
    }

    public function getValidator()
    {
        return $this->validator;
    }

    public function getLogger()
    {
        return $this->logger;
    }

    public function getEventDispatcher()
    {
        return $this->eventDispatcher;
    }

    public function getRegistry()
    {
        return $this->registry;
    }

    public function getResultFactory()
    {
        return $this->resultFactory;
    }
}