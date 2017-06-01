<?php

namespace tests\AppBundle\Manager;


use AppBundle\Entity\ImportLog;
use AppBundle\Entity\Officine;
use AppBundle\Manager\ImportLogManager;
use AppBundle\Model\EntityManagerBatchResult;
use AppBundle\Model\Timer;
use AppBundle\Service\ManagerTools;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Faker\Provider\DateTime;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ImportLogManagerTest extends \PHPUnit_Framework_TestCase
{
    protected $managerToolsMock;
    protected $emMock;

    public function setUp()
    {
        $classMetadataMock = \Phake::mock(ClassMetadataInfo::class);
        \Phake::when($classMetadataMock)
            ->getSingleIdentifierFieldName()
            ->thenReturn('id');

        $this->emMock = \Phake::mock(EntityManager::class);
        \Phake::when($this->emMock)
            ->getClassMetadata(ImportLog::class)
            ->thenReturn($classMetadataMock);
        \Phake::when($this->emMock)
            ->merge
            ->thenReturnCallback(function ($entity) {
                return $entity;
            });

        $managerRegistryMock = \Phake::mock(RegistryInterface::class);
        \Phake::when($managerRegistryMock)
            ->getManagerForClass(ImportLog::class)
            ->thenReturn($this->emMock);

        $this->managerToolsMock = \Phake::mock(ManagerTools::class);
        \Phake::when($this->managerToolsMock)
            ->getRegistry
            ->thenReturn($managerRegistryMock);
    }

    public function testLog()
    {
        // Given
        $importLog = new ImportLog();

        $importLogManagerMock = \Phake::partialMock(ImportLogManager::class, ImportLog::class, $this->managerToolsMock);

        \Phake::when($importLogManagerMock)
            ->create()
            ->thenReturn($importLog);

        \Phake::when($importLogManagerMock)
            ->save($importLog)
            ->thenReturn(null);

        $batchResultMock = \Phake::mock(EntityManagerBatchResult::class);
        \Phake::when($batchResultMock)->getNbCreate()->thenReturn(3);
        \Phake::when($batchResultMock)->getNbUpdate()->thenReturn(5);
        \Phake::when($batchResultMock)->getNbUnchange()->thenReturn(25);
        \Phake::when($batchResultMock)->getNbDelete()->thenReturn(3);
        \Phake::when($batchResultMock)->getNbFailed()->thenReturn(2);
        \Phake::when($batchResultMock)->getEntitiesFailed()->thenReturn(array(
            array('summaryErrors' => 'EntityMock[1001]->field1 = error on field 1'),
            array('summaryErrors' => 'EntityMock[1002]->field1 = error on field 1')
        ));

        $deserializeErrors = array(
            1003 => 'error in row'
        );

        $timerMock = \Phake::mock(Timer::class);
        $start = new \DateTime('2017-05-01T01:29:35');
        $end = new \DateTime('2017-05-01T01:29:39');
        \Phake::when($timerMock)->getStart()->thenReturn($start);
        \Phake::when($timerMock)->getEnd()->thenReturn($end);
        \Phake::when($timerMock)->getDuration()->thenReturn($end->getTimestamp() - $start->getTimestamp());

        // When
        $importLogManagerMock->log(EntityMock::class, $batchResultMock, $deserializeErrors, $timerMock);

        // Then
        $this->assertEquals('EntityMock', $importLog->getClassName());
        $this->assertEquals(39, $importLog->getNbTotal());
        $this->assertEquals(3, $importLog->getNbCreate());
        $this->assertEquals(5, $importLog->getNbUpdate());
        $this->assertEquals(25, $importLog->getNbUnchange());
        $this->assertEquals(3, $importLog->getNbDelete());
        $this->assertEquals(3, $importLog->getNbFail());
        $this->assertEquals($start, $importLog->getDateStart());
        $this->assertEquals($end, $importLog->getDateEnd());
        $this->assertEquals(4, $importLog->getDuration());
        $errorsSummary = 'EntityMock[1001]->field1 = error on field 1\r\nEntityMock[1002]->field1 = error on field 1\r\nEntityMock[1003] = error in row';
        $this->assertEquals($errorsSummary, $importLog->getErrors());
    }
}
