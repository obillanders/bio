<?php

namespace AppBundle\Model\Api;

use Symfony\Component\Validator\Constraints as Assert;

class PharmacienRegister
{
    /**
     * @var integer
     *
     * @Assert\NotBlank()
     * @Assert\Regex("/^[\d+]{15}$/", message="nrid {{ value }} non valide", payload={"statusCode": 201})
     */
    protected $nrid;

    /**
     * @var email
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "email {{ value }} non valide",
     *     checkMX = true,
     *     payload={"statusCode": 202})
     */
    protected $email;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $idRdi
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
}