<?php

namespace Test\AppBundle\Import;


use AppBundle\Import\CustomCsvEncoder;
use Liip\FunctionalTestBundle\Test\WebTestCase;
use Symfony\Component\Serializer\Encoder\CsvEncoder;

class CustomCsvEncoderTest extends \PHPUnit_Framework_TestCase
{

    /* @var CustomCsvEncoder */
    private $csvEncoder;

    public function setUp()
    {
        $this->csvEncoder = new CustomCsvEncoder();
    }

    public function testDecode_ok()
    {
        $content = <<<EOT
NRID;NOM
29020681215538;PHARMACIE OLIVETTI
28404648664848;PHARMACIE DE LA FONTAINE
EOT;
        $result = $this->csvEncoder->decode($content, 'csv');

        $this->assertNotNull($result);
        $this->assertInternalType('array', $result);
        $this->assertEquals(2, count($result));

        $row1 = $result[0];
        $this->assertTrue(isset($row1['NRID']));
        $this->assertEquals('29020681215538', $row1['NRID']);
        $this->assertTrue(isset($row1['NOM']));
        $this->assertEquals('PHARMACIE OLIVETTI', $row1['NOM']);

        $row2 = $result[1];
        $this->assertTrue(isset($row2['NRID']));
        $this->assertEquals('28404648664848', $row2['NRID']);
        $this->assertTrue(isset($row2['NOM']));
        $this->assertEquals('PHARMACIE DE LA FONTAINE', $row2['NOM']);
    }

    public function testDecode_empty()
    {
        $content = <<<EOT
NRID;NOM
EOT;
        $result = $this->csvEncoder->decode($content, 'csv');

        $this->assertNotNull($result);
        $this->assertInternalType('array',$result);
        $this->assertEquals(0, count($result));
    }

    public function testDecode_tooMuchSemicolons()
    {
        $content = <<<EOT
NRID;NOM
29020681215538;PHARMACIE;OLIVETTI
28404648664848;PHARMACIE DE LA FONTAINE
EOT;
        $result = $this->csvEncoder->decode($content, 'csv');

        $this->assertNotNull($result);
        $this->assertInternalType('array',$result);
        $this->assertEquals(1, count($result));

        $errors = $this->csvEncoder->getErrors();
        $this->assertEquals(1, count($errors));
        $this->assertTrue(isset($errors['29020681215538']));
        $this->assertEquals('Too much semicolons in row', $errors['29020681215538']);
    }
}