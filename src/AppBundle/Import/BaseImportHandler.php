<?php

namespace AppBundle\Import;

/**
 * Class BaseImportHandler
 * @package AppBundle\Import
 */
abstract class BaseImportHandler implements ImportHandlerInterface
{
    protected $errors = array();

    /**
     * BaseImportHandler constructor.
     */
    function __construct()
    {

    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}