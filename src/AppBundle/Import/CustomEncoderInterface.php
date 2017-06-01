<?php

namespace AppBundle\Import;

use Symfony\Component\Serializer\Encoder\DecoderInterface;

/**
 * Interface CustomEncoderInterface
 * @package AppBundle\Import
 */
interface CustomEncoderInterface extends DecoderInterface
{
    /**
     * @return array
     */
    public function getErrors();
}