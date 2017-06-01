<?php

namespace tests\AppBundle\Manager;

use AppBundle\Entity\Rdi;
use AppBundle\Exception\RdiException;
use AppBundle\Manager\RdiManager;
use AppBundle\Rdi\RdiHandlerInterface;
use AppBundle\Service\ManagerTools;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Symfony\Bridge\Doctrine\RegistryInterface;

class RdiManagerTest extends \PHPUnit_Framework_TestCase
{
    protected $rdiManager;
    protected $managerToolsMock;
    protected $emMock;
    protected $entity;
    protected $handlerApi;
    protected $handlerMail;

    public function setUp() {
        $classMetadataMock = \Phake::mock(ClassMetadataInfo::class);
        \Phake::when($classMetadataMock)
            ->getSingleIdentifierFieldName()
            ->thenReturn('id');

        $this->emMock = \Phake::mock(EntityManager::class);
        \Phake::when($this->emMock)
            ->getClassMetadata(Rdi::class)
            ->thenReturn($classMetadataMock);
        \Phake::when($this->emMock)
            ->merge
            ->thenReturnCallback(function ($entity){ return $entity; });

        $mangerRegistryMock = \Phake::mock(RegistryInterface::class);
        \Phake::when($mangerRegistryMock)
            ->getManagerForClass(Rdi::class)
            ->thenReturn($this->emMock);

        $this->managerToolsMock = \Phake::mock(ManagerTools::class);
        \Phake::when($this->managerToolsMock)
            ->getRegistry
            ->thenReturn($mangerRegistryMock);

        $rdiConfig = array('send_type' => array('api'), 'main_handler' => 'api', 'send_from' => 'admin@proconnect.com', 'send_to' => 'test@test.com');
        $twigMock = \Phake::mock(\Twig_Environment::class);

        $this->rdiManager = \Phake::partialMock(RdiManager::class, Rdi::class, $this->managerToolsMock, $rdiConfig, $twigMock);

        $resultMock = \Phake::mock(EntityManagerResult::class);
        \Phake::when($this->rdiManager)
            ->save
            ->thenReturn($resultMock);

        $this->handlerApi = \Phake::mock(RdiHandlerInterface::class);
    }

    public function testAddRdiHandler()
    {
        $reflection = new \ReflectionProperty(RdiManager::class, 'handlers');
        $reflection->setAccessible(true);

        $this->rdiManager->addRdiHandler($this->handlerApi, 'api');
        $this->assertArrayHasKey('api', $reflection->getValue($this->rdiManager));
    }

    public function testSendRdiWithNoHandler()
    {
        $this->expectException(\Exception::class);

        $rdiMock = \Phake::mock(Rdi::class);

        $this->rdiManager->sendRdi($rdiMock);
    }

    public function testSendRdi()
    {
        $rdiMock = \Phake::mock(Rdi::class);
        \Phake::when($rdiMock)
            ->getCodeReturn
            ->thenReturn('200');
        \Phake::when($rdiMock)
            ->getMessageReturn
            ->thenReturn('Rdi ok');

        \Phake::when($this->handlerApi)
            ->handle($rdiMock)
            ->thenReturn($rdiMock);

        $this->rdiManager->addRdiHandler($this->handlerApi, 'api');
        $success = $this->rdiManager->sendRdi($rdiMock);

        \Phake::verify($rdiMock)->setStatus;
        \Phake::verify($rdiMock)->setCodeReturn('200');
        \Phake::verify($rdiMock)->setMessageReturn('Rdi ok');

        \Phake::verify($this->rdiManager)->save($rdiMock);
        $this->assertEquals($success, true);
    }

    public function testSendRdiWhenHandlerReturnException()
    {
        $rdiMock = \Phake::mock(Rdi::class);
        \Phake::when($rdiMock)
            ->getCodeReturn
            ->thenReturn('400');
        \Phake::when($rdiMock)
            ->getMessageReturn
            ->thenReturn('Rdi not ok');

        $rdiExceptionMock = \Phake::mock(RdiException::class);
        \Phake::when($rdiExceptionMock)
            ->getRdi
            ->thenReturn($rdiMock);

        \Phake::when($this->handlerApi)
            ->handle($rdiMock)
            ->thenThrow($rdiExceptionMock);

        $this->rdiManager->addRdiHandler($this->handlerApi, 'api');
        $success = $this->rdiManager->sendRdi($rdiMock);

        \Phake::verify($rdiMock)->setStatus;
        \Phake::verify($rdiMock)->setCodeReturn('400');
        \Phake::verify($rdiMock)->setMessageReturn('Rdi not ok');

        \Phake::verify($this->rdiManager)->save($rdiMock);
        $this->assertEquals($success, false);
    }
}