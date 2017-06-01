<?php

namespace AppBundle\Import;

/**
 * Class ImportHandlerInterface
 * @package AppBundle\Import
 */
interface ImportHandlerInterface
{
    /**
     * @param $file
     * @param $className
     * @return array
     */
    public function deserialize($file, $className, $encoding);

    /**
     * @return array
     */
    public function getErrors();
}