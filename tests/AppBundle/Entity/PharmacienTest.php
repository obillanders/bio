<?php

namespace Test\AppBundle\Entity;

use AppBundle\Entity\Pharmacien;
use AppBundle\Entity\Officine;
use JMS\Serializer\ArrayTransformerInterface;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class PharmacienTest extends WebTestCase
{
    /* @var ArrayTransformerInterface */
    private $serializer;

    public function setUp()
    {
        $this->serializer = $this->getContainer()->get('serializer');
    }

    public function testDeserializeFromArray() {
        $data = array(
            'NRID' => '24105048337644',
            'NOM' => 'FABRE',
            'PRENOM' => 'Julien',
            'SEXE' => 'M',
            'CIVILITE' => 'Monsieur',
            'TITULAIR' => 'Titulaire',
            'DATENAIS' => '14/04/1950',
            'EMAIL' => 'pharmacien@mail.com',
            'TEL' => '0601020304',
            'RPPS' => '10000743749',
            'SUPPR' => '0'
        );

        $pharmacien = $this->serializer->fromArray($data, Pharmacien::class);

        $this->assertInternalType('int', $pharmacien->getNridInterlocuteur());
        $this->assertEquals(24105048337644, $pharmacien->getNridInterlocuteur());

        $this->assertInternalType('string', $pharmacien->getNom());
        $this->assertEquals('FABRE', $pharmacien->getNom());

        $this->assertInternalType('string', $pharmacien->getPrenom());
        $this->assertEquals('Julien', $pharmacien->getPrenom());

        $this->assertInternalType('string', $pharmacien->getSexe());
        $this->assertEquals('M', $pharmacien->getSexe());

        $this->assertInternalType('string', $pharmacien->getCivilite());
        $this->assertEquals('Monsieur', $pharmacien->getCivilite());

        $this->assertInternalType('string', $pharmacien->getTitulaire());
        $this->assertEquals('Titulaire', $pharmacien->getTitulaire());

        $this->assertInstanceOf(\DateTime::class, $pharmacien->getDateNaissance());
        $expectedDate = new \DateTime('1950-04-14');
        $this->assertEquals($expectedDate, new \DateTime($pharmacien->getDateNaissance()->format('Y-m-d')));

        $this->assertInternalType('string', $pharmacien->getEmail());
        $this->assertEquals('pharmacien@mail.com', $pharmacien->getEmail());

        $this->assertInternalType('string', $pharmacien->getTelephoneMobile());
        $this->assertEquals('0601020304', $pharmacien->getTelephoneMobile());

        $this->assertInternalType('string', $pharmacien->getNumeroRpps());
        $this->assertEquals('10000743749', $pharmacien->getNumeroRpps());

        $this->assertInternalType('boolean', $pharmacien->isDeleted());
        $this->assertEquals(false, $pharmacien->isDeleted());
    }
}