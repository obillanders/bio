<?php

namespace Test\AppBundle\Entity;

use AppBundle\Entity\Pharmacien;
use AppBundle\Entity\Officine;
use AppBundle\Entity\OfficinePharmacien;
use Liip\FunctionalTestBundle\Test\WebTestCase;

// @TODO test
class OfficinePharmacienTest extends WebTestCase
{
    /* @var ArrayTransformerInterface */
    private $serializer;

    public function setUp()
    {
        $this->serializer = $this->getContainer()->get('serializer');
    }

    public function testDeserializeFromArray()
    {
        $data = array(
            'NRIDLIEN' => '23332064146240',
            'NRIDOFF' => '10000000021116',
            'NRIDINT' => '23276164136240',
            'INTPRINC' => '10000000000000',
            'DATEDEB' => '21/06/2006',
            'DATEFIN' => '09/07/2009',
            'EMAIL' => 'link@mail.com',
            'TEL' => '0601020304',
            'SUPPR' => '0'
        );

        $officinePharmacien = $this->serializer->fromArray($data, OfficinePharmacien::class);

        $this->assertInternalType('int', $officinePharmacien->getNridLien());
        $this->assertEquals(23332064146240, $officinePharmacien->getNridLien());

        $this->assertInstanceOf(Officine::class, $officinePharmacien->getOfficine());
        $this->assertEquals(10000000021116, $officinePharmacien->getOfficine()->getNridPharmacie());

        $this->assertInstanceOf(Pharmacien::class, $officinePharmacien->getPharmacien());
        $this->assertEquals(23276164136240, $officinePharmacien->getPharmacien()->getNridInterlocuteur());

        $this->assertInternalType('int', $officinePharmacien->getInterlocuteurPrincipal());
        $this->assertEquals(10000000000000, $officinePharmacien->getInterlocuteurPrincipal());

        $this->assertInstanceOf(\DateTime::class, $officinePharmacien->getDateEntree());
        $expectedDate = new \DateTime('2006-06-21');
        $this->assertEquals($expectedDate, new \DateTime($officinePharmacien->getDateEntree()->format('Y-m-d')));

        $this->assertInstanceOf(\DateTime::class, $officinePharmacien->getDateSortie());
        $expectedDate = new \DateTime('2009-07-09');
        $this->assertEquals($expectedDate, new \DateTime($officinePharmacien->getDateSortie()->format('Y-m-d')));

        $this->assertInternalType('string', $officinePharmacien->getEmailPro());
        $this->assertEquals('link@mail.com', $officinePharmacien->getEmailPro());

        $this->assertInternalType('string', $officinePharmacien->getTelephone());
        $this->assertEquals('0601020304', $officinePharmacien->getTelephone());

        $this->assertInternalType('boolean', $officinePharmacien->isDeleted());
        $this->assertEquals(false, $officinePharmacien->isDeleted());
    }
}
