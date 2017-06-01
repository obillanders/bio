<?php

namespace Test\AppBundle\Entity;

use AppBundle\Entity\Contrat;
use AppBundle\Entity\Officine;
use Liip\FunctionalTestBundle\Test\WebTestCase;


class ContratTest extends WebTestCase
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
            'NRIDOFF' => '24771252232252',
            'NRIDCT' => '110000379760235',
            'REF' => '17C32264450M1',
            'MODELE' => 'Fin de contrat',
            'DATEDEB' => '01/03/2017',
            'DATEFIN' => '01/04/2017',
            'NUMFAC' => 'F-1000',
            'DATEFAC' => '15/03/2017',
            'CANAL' => 'Digital',
            'URL' => 'www.123mailings.com/BIO/dsign_launch.cfm?9NXBXRZN83L_89DRY4P1A',
            'STATUT' => 'Envoyé',
            'DATSTATU' => '10/03/2017',
            'MONTANT' => '3800',
            'SUPPR' => '0'
        );

        $contrat = $this->serializer->fromArray($data, Contrat::class);

        $this->assertInternalType('int', $contrat->getNridContrat());
        $this->assertEquals(110000379760235, $contrat->getNridContrat());

        $this->assertInstanceOf(Officine::class, $contrat->getOfficine());
        $this->assertEquals(24771252232252, $contrat->getOfficine()->getNridPharmacie());

        $this->assertInternalType('string', $contrat->getReference());
        $this->assertEquals('17C32264450M1', $contrat->getReference());

        $this->assertInternalType('string', $contrat->getModele());
        $this->assertEquals('Fin de contrat', $contrat->getModele());

        $this->assertInstanceOf(\DateTime::class, $contrat->getDateDebut());
        $expectedDate = new \DateTime('2017-03-01');
        $this->assertEquals($expectedDate, new \DateTime($contrat->getDateDebut()->format('Y-m-d')));

        $this->assertInstanceOf(\DateTime::class, $contrat->getDateFin());
        $expectedDate = new \DateTime('2017-04-01');
        $this->assertEquals($expectedDate, new \DateTime($contrat->getDateFin()->format('Y-m-d')));

        $this->assertInternalType('string', $contrat->getNumeroFacture());
        $this->assertEquals('F-1000', $contrat->getNumeroFacture());

        $this->assertInstanceOf(\DateTime::class, $contrat->getDateFacture());
        $expectedDate = new \DateTime('2017-03-15');
        $this->assertEquals($expectedDate, new \DateTime($contrat->getDateFacture()->format('Y-m-d')));

        $this->assertInternalType('string', $contrat->getCanal());
        $this->assertEquals('Digital', $contrat->getCanal());

        $this->assertInternalType('string', $contrat->getUrlContratASigner());
        $this->assertEquals('www.123mailings.com/BIO/dsign_launch.cfm?9NXBXRZN83L_89DRY4P1A', $contrat->getUrlContratASigner());

        $this->assertInternalType('string', $contrat->getStatutCourant());
        $this->assertEquals('Envoyé', $contrat->getStatutCourant());

        $this->assertInstanceOf(\DateTime::class, $contrat->getDateStatut());
        $expectedDate = new \DateTime('2017-03-10');
        $this->assertEquals($expectedDate, new \DateTime($contrat->getDateStatut()->format('Y-m-d')));

        $this->assertInternalType('int', $contrat->getMontantTtc());
        $this->assertEquals(3800, $contrat->getMontantTtc());

        $this->assertInternalType('boolean', $contrat->isDeleted());
        $this->assertEquals(false, $contrat->isDeleted());
    }
}
