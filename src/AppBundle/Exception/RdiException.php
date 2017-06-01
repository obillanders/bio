<?php

namespace AppBundle\Exception;

use AppBundle\Entity\Rdi;

class RdiException extends \Exception
{
    protected $type;
    protected $rdi;

    /**
     * RdiException constructor.
     * @param $type
     */
    public function __construct($type, Rdi $rdi, $message = "", $code = 0, \Exception $previous = null)
    {
        $this->type = $type;
        $this->rdi = $rdi;
        parent::__construct($message = "", $code = 0, $previous = null);
    }


    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return Rdi
     */
    public function getRdi()
    {
        return $this->rdi;
    }

    /**
     * @param Rdi $rdi
     */
    public function setRdi($rdi)
    {
        $this->rdi = $rdi;
    }


}