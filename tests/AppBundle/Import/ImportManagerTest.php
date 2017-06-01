<?php

namespace Test\AppBundle\Import;

use AppBundle\Import\ImportHandlerInterface;
use AppBundle\Import\ImportManager;
use AppBundle\Manager\EntityManagerInterface;
use AppBundle\Manager\ImportLogManager;
use AppBundle\Model\EntityManagerBatchResult;
use AppBundle\Service\ManagerLocator;
use Psr\Log\LoggerInterface;

class ImportManagerTest extends \PHPUnit_Framework_TestCase
{
    private $managerLocatorMock;
    private $loggerMock;
    private $bddLoggerMock;

    /**
     * @var ImportManager
     */
    private $importManager;

    public function setUp()
    {
        $this->managerLocatorMock = \Phake::mock(ManagerLocator::class);
        $this->loggerMock = \Phake::mock(LoggerInterface::class);
        $this->bddLoggerMock = \Phake::mock(ImportLogManager::class);

        $this->importManager = new ImportManager($this->managerLocatorMock, $this->loggerMock, $this->bddLoggerMock);
    }

    public function testAddImportHandler()
    {
        $reflection = new \ReflectionProperty(ImportManager::class, 'handlers');
        $reflection->setAccessible(true);

        $importHandlerMock = \Phake::mock(ImportHandlerInterface::class);
        $this->importManager->addImportHandler($importHandlerMock, 'handlerName');

        $this->assertArrayHasKey('handlerName', $reflection->getValue($this->importManager));
    }

    public function testGetImportHandlerWithNonExistantHandler()
    {
        $this->expectException(\Exception::class);

        $this->importManager->getImportHandler('nonExistantHandlerName');

    }

    public function testGetImportHandlerWithExistantHandler()
    {
        $importHandlerMock = \Phake::mock(ImportHandlerInterface::class);
        $this->importManager->addImportHandler($importHandlerMock, 'existantHandlerName');

        $handler = $this->importManager->getImportHandler('existantHandlerName');

        $this->assertEquals($importHandlerMock, $handler);
    }

    /*public function testImport()
    {
        $patchOfTheFile = '/path/of/the/file.txt';
        $entityClass = 'EntityClass';
        $handlerName = 'existantHandlerName';
        $entities = [
            new \StdClass()
        ];
        $batchSize = 5;

        $importHandlerMock = \Phake::mock(ImportHandlerInterface::class);
        \Phake::when($importHandlerMock)
            ->deserialize($patchOfTheFile, $entityClass)
            ->thenReturn($entities);

        $emMock = \Phake::mock(EntityManagerInterface::class);
        \Phake::when($this->managerLocatorMock)
            ->getEntityManager($entityClass)
            ->thenReturn($emMock);

        $batchResultMock = \Phake::mock(EntityManagerBatchResult::class);
        \Phake::when($emMock)
            ->batch($entities, $batchSize)
            ->thenReturn($batchResultMock);

        $this->importManager->addImportHandler($importHandlerMock, $handlerName);
        $resultBatch = $this->importManager->import($patchOfTheFile, $entityClass, $handlerName, 'DIFF_WITH_DELETE', $batchSize);

        $this->assertInstanceOf(EntityManagerBatchResult::class, $resultBatch);

        \Phake::verify($importHandlerMock)->deserialize($patchOfTheFile, $entityClass);
        \Phake::verify($this->loggerMock, \Phake::times(2))->info;
        \Phake::verify($this->managerLocatorMock)->getEntityManager($entityClass);
        \Phake::verify($emMock)->setLogger($this->loggerMock);
        \Phake::verify($emMock)->batch($entities, $batchSize);
        \Phake::verify($this->bddLoggerMock)->log($batchResultMock, \Phake::ignoreRemaining());

        $this->assertEquals($batchResultMock, $resultBatch);
    }*/
}