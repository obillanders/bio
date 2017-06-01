<?php

namespace AppBundle\Model\Api;

use Symfony\Component\Validator\Constraints as Assert;



class PharmacienValidate
{
    /**
     * @var integer
     *
     * @Assert\NotBlank()
     * @Assert\Regex(pattern="/^[\d+]{15}$/", message="nrid {{ value }} non valide", payload={"statusCode": 101})
     */
    protected $nrid;

    /**
     * @var integer
     * 
     * @Assert\NotBlank()
     * @Assert\Regex(pattern="/^(9999)[\d+]{10}$/", message="ID RDI {{ value }} non valide", payload={"statusCode": 102})
     */
    protected $idRdi;

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
    public function getIdRdi()
    {
        return $this->idRdi;
    }

    /**
     * @param mixed $idRdi
     */
    public function setIdRdi($idRdi)
    {
        $this->idRdi = $idRdi;
    }


}