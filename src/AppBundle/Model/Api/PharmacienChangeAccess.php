<?php

namespace AppBundle\Model\Api;

use Symfony\Component\Validator\Constraints as Assert;


class PharmacienChangeAccess
{
    /**
     * @var integer
     *
     * @Assert\NotBlank()
     * @Assert\Regex(pattern="/^[\d+]{15}$/", message="nrid {{ value }} non valide", payload={"statusCode": 301})
     */
    protected $nrid;

    /**
     * @Assert\NotBlank()
     * @Assert\Choice(choices = {"DENIED", "STANDARD", "FULL"}, message = "access {{ access }} non valide", payload={"statusCode": 303})
     */
    protected $access;

    /**
     * @return mixed
     */
    public function getNrid()
    {
        return $this->nrid;
    }

    /**
     * @param mixed $nrid
     */
    public function setNrid($nrid)
    {
        $this->nrid = $nrid;
    }

    /**
     * @return mixed
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @param mixed $access
     */
    public function setAccess($access)
    {
        $this->access = $access;
    }


}