<?php

namespace AppBundle\Exception;


class ApiException extends \Exception
{
    public function __construct($message = "", $code = 0, $previous = null)
    {
        // Force http code to not be 0 for get real error message.
        if ($code == 0) {
            $code = 500;
        }

        parent::__construct($message, $code , $previous);
    }
}