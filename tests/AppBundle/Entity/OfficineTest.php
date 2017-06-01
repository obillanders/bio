<?php

namespace Test\AppBundle\Entity;

use AppBundle\Entity\Pharmacien;
use AppBundle\Entity\Officine;
use JMS\Serializer\ArrayTransformerInterface;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class OfficineTest extends WebTestCase
{
    /* @var ArrayTransformerInterface */
    private $serializer;

    public function setUp()
    {
        $this->serializer = $this->getContainer()->get('serializer');
    }

    public function testDeserializeFromArray() {
        $data = array(
            'NRID' => '29020681215538',
            'NOM' => 'PHARMACIE OLIVETTI',
            'CIP' => '0002281036',
            'ADR' => '79 rue du landy',
            'CP' => '93300',
            'VILLE' => 'AUBERVILLIERS',
            'SEGMENT' => 'HC',
            'EMAIL' => 'pharmacieolivetti@gmail.com',
            'TEL' => '01 48 33 61 28',
            'PMP' => 'FOFANA Mamadou',
            'TELPMP' => '06 78 33 43 81',
            'GRPTNRID' => '21414872642442',
            'GRPTNOM' => 'PARIS - PHARMA',
            'DPSNRID' => '25798194170046',
            'DPSNOM' => 'CSP',
            'SUPPR' => '0',
            'CANAL' => 'Papier'
        );

        /* @var Officine */
        $officine = $this->serializer->fromArray($data, Officine::class);

        $this->assertInternalType('int', $officine->getNridPharmacie());
        $this->assertEquals(29020681215538, $officine->getNridPharmacie());

        $this->assertInternalType('string', $officine->getNomPharmacie());
        $this->assertEquals('PHARMACIE OLIVETTI', $officine->getNomPharmacie());

        $this->assertInternalType('string', $officine->getCip());
        $this->assertEquals('0002281036', $officine->getCip());

        $this->assertInternalType('string', $officine->getAdresse());
        $this->assertEquals('79 rue du landy', $officine->getAdresse());

        $this->assertInternalType('string', $officine->getCodePostal());
        $this->assertEquals('93300', $officine->getCodePostal());

        $this->assertInternalType('string', $officine->getLocalite());
        $this->assertEquals('AUBERVILLIERS', $officine->getLocalite());

        $this->assertInternalType('string', $officine->getSegment());
        $this->assertEquals('HC', $officine->getSegment());

        $this->assertInternalType('string', $officine->getEmail());
        $this->assertEquals('pharmacieolivetti@gmail.com', $officine->getEmail());

        $this->assertInternalType('string', $officine->getTelephoneFixe());
        $this->assertEquals('01 48 33 61 28', $officine->getTelephoneFixe());

        $this->assertInternalType('string', $officine->getPmp());
        $this->assertEquals('FOFANA Mamadou', $officine->getPmp());

        $this->assertInternalType('string', $officine->getTelephonePmp());
        $this->assertEquals('06 78 33 43 81', $officine->getTelephonePmp());

        $this->assertInternalType('int', $officine->getNridGroupement());
        $this->assertEquals(21414872642442, $officine->getNridGroupement());

        $this->assertInternalType('string', $officine->getNomGroupement());
        $this->assertEquals('PARIS - PHARMA', $officine->getNomGroupement());

        $this->assertInternalType('int', $officine->getNridDepositaire());
        $this->assertEquals(25798194170046, $officine->getNridDepositaire());

        $this->assertInternalType('string', $officine->getNomDepositaire());
        $this->assertEquals('CSP', $officine->getNomDepositaire());

        $this->assertInternalType('string', $officine->getCanalContrat());
        $this->assertEquals('Papier', $officine->getCanalContrat());

        $this->assertInternalType('boolean', $officine->isDeleted());
        $this->assertEquals(false, $officine->isDeleted());
    }
}