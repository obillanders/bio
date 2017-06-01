<?php

namespace Tests\AppBundle\Service;

use AppBundle\Service\ResultFactory;
use Doctrine\ORM\EntityManager;

class ResultFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateEntityResult()
    {
        $emMock = \Phake::mock(EntityManager::class);

        $resultFactory = new ResultFactory();
        //$resultFactory->createEntityResult($emMock, new \stdClass());
    }
}