<?php

namespace Test\AppBundle\Import {

    use AppBundle\Import\CustomCsvEncoder;
    use AppBundle\Import\ImportCsvHandler;
    use JMS\Serializer\ArrayTransformerInterface;
    use Symfony\Component\Serializer\Encoder\CsvEncoder;

    class ImportCsvHandlerTest extends \PHPUnit_Framework_TestCase
    {
        private $csvEncoderMock;
        private $normalizerMock;
        private $importCsvHandler;

        public function setUp()
        {
            $this->csvEncoderMock = \Phake::mock(CustomCsvEncoder::class);
            $this->normalizerMock = \Phake::mock(ArrayTransformerInterface::class);

            $this->importCsvHandler = new ImportCsvHandler($this->csvEncoderMock, $this->normalizerMock);
        }

        public function testDeserialize_ok()
        {
            $dataArrayMock = array(
                array("id" => "foo"),
                array("id" => "bar"),
            );

            $objectMock0 = new \stdClass();
            $objectMock0->id = "foo";
            $objectMock1 = new \stdClass();
            $objectMock1->id = "bar";

            \Phake::when($this->csvEncoderMock)
                ->decode('content csv', 'csv')
                ->thenReturn($dataArrayMock);
            \Phake::when($this->normalizerMock)
                ->fromArray($dataArrayMock[0], 'EntityClass')
                ->thenReturn($objectMock0);
            \Phake::when($this->normalizerMock)
                ->fromArray($dataArrayMock[1], 'EntityClass')
                ->thenReturn($objectMock1);

            $entities = $this->importCsvHandler->deserialize('path/to/existing/file.csv', 'EntityClass');

            \Phake::verify($this->csvEncoderMock)->decode('content csv', 'csv');
            \Phake::inOrder(
                \Phake::verify($this->normalizerMock)->fromArray($dataArrayMock[0], 'EntityClass'),
                \Phake::verify($this->normalizerMock)->fromArray($dataArrayMock[1], 'EntityClass')
            );

            $this->assertEquals(array($objectMock0, $objectMock1), $entities);
        }

        public function testDeserialize_error()
        {
            $dataArrayMock = array(
                array("id" => "error", "field1" => "data1", "field2" => "data2")
            );

            $objectMock0 = new \stdClass();
            $objectMock0->id = "error";
            $objectMock0->field1 = "data1";
            $objectMock0->field2 = "data2";

            \Phake::when($this->csvEncoderMock)
                ->decode('content csv', 'csv')
                ->thenReturn($dataArrayMock);
            \Phake::when($this->normalizerMock)
                ->fromArray($dataArrayMock[0], 'EntityClass')
                ->thenThrow(new \Exception('Normalize error'));

            $entities = $this->importCsvHandler->deserialize('path/to/existing/file.csv', 'EntityClass');

            \Phake::verify($this->csvEncoderMock)->decode('content csv', 'csv');
            \Phake::inOrder(
                \Phake::verify($this->normalizerMock)->fromArray($dataArrayMock[0], 'EntityClass')
            );

            $this->assertEquals(0, count($entities));
            $errors = $this->importCsvHandler->getErrors();
            $this->assertEquals(1, count($errors));
            $this->assertTrue(isset($errors['error']));
            $this->assertEquals('Normalize error', $errors['error']);
        }
    }

}

namespace AppBundle\Import {
    function file_get_contents ($filename) {
        if ($filename == "path/to/existing/file.csv") {
            return 'content csv';
        }

        return \file_get_contents($filename);
    }
}
