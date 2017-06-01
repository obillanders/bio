<?php

namespace AppBundle\Import;

use JMS\Serializer\ArrayTransformerInterface;
use Symfony\Component\Serializer\Encoder\CsvEncoder;

/**
 * Class ImportCsvHandler
 * @package AppBundle\Import
 *
 * @TODO test deserialize : cas ou les donnees vides sont converties a null
 */
class ImportCsvHandler extends BaseImportHandler implements ImportHandlerInterface
{
    private $csvEncoder;
    private $normalizer;

    /**
     * ImportCsvHandler constructor.
     * @param CustomCsvEncoder $csvEncoder
     * @param ArrayTransformerInterface $normalizer
     */
    function __construct(CustomCsvEncoder $csvEncoder,  ArrayTransformerInterface $normalizer)
    {
        parent::__construct();
        $this->csvEncoder = $csvEncoder;
        $this->normalizer = $normalizer;
    }

    /**
     * {@inheritdoc}
     */
    public function deserialize($csvFile, $className, $encoding)
    {
        $csvContent = file_get_contents($csvFile);

        $csvContent = mb_convert_encoding($csvContent, 'UTF-8', $encoding);

        $dataEntities = $this->csvEncoder->decode($csvContent, 'csv');
        $this->errors = $this->csvEncoder->getErrors();

        $entities = array();
        foreach ($dataEntities as $dataEntity) {
            $dataEntity = array_filter($dataEntity, function($value) {
                return $value !== '';
            });
            try {
                $entities[] = $this->normalizer->fromArray($dataEntity, $className);
            } catch(\Exception $e) {
                $keys = array_keys($dataEntity);
                $this->errors[$dataEntity[$keys[0]]] = $e->getMessage();
            }
        }

        return $entities;
    }
}