<?php

namespace AppBundle\Log;

use Symfony\Bridge\Monolog\Logger;

class ImportLogger extends Logger
{
    public function addRecord($level, $message, array $context = array())
    {
        $message = '[Import] ' . (string) $message;
        parent::addRecord($level, $message, $context);
    }
}