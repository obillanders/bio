<?php

namespace Tests\AppBundle\Model;

use AppBundle\Entity\Pharmacien;
use AppBundle\Model\EntityManagerResult;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Doctrine\ORM\UnitOfWork;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Doctrine\ORM\EntityManager;

class EntityManagerResultTest extends \PHPUnit_Framework_TestCase
{
    private $emMock;
    private $entityMock;

    public function setUp()
    {
        $this->emMock = \Phake::mock(EntityManager::class);
        $this->entityMock = \Phake::mock(Pharmacien::class);
    }

    public function testConstruct()
    {
        \Phake::when($this->entityMock)
            ->getNridInterlocuteur()
            ->thenReturn('2154789');

        $classMetaDataMock = \Phake::mock(ClassMetadataInfo::class);
        \Phake::when($classMetaDataMock)
              ->getSingleIdentifierFieldName
              ->thenReturn('nridInterlocuteur');

        \Phake::when($this->emMock)
            ->getClassMetadata
            ->thenReturn($classMetaDataMock);

        $unitOfWorkMock = \Phake::mock(UnitOfWork::class);
        \Phake::when($this->emMock)
              ->getUnitOfWork()
              ->thenReturn($unitOfWorkMock);


        $result = new EntityManagerResult($this->emMock, $this->entityMock);

        return $result;
    }

    public function testSetErrors()
    {
        $result = $this->testConstruct();

        $iteratorAggregate = \Phake::mock(ConstraintViolationListInterface::class);
        $result->setErrors($iteratorAggregate);
    }
}