<?php

namespace AppBundle\Model;

use AppBundle\Model\Traits\CivilityTrait;
use Symfony\Component\Validator\Constraints as Assert;


class Contact
{
    use CivilityTrait;

    /**
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     */
    private $firstname;

    /**
     * @Assert\Email(
     *     message = "email non valide",
     *     checkMX = true
     *     )
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     */
    private $email;

    /**
     * @Assert\Regex("/[\d+]$/", message="Le numéro de téléphone n'est pas valide")
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     */
    private $phone;

    /**
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     */
    private $address;

    /**
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     */
    private $city;

    /**
     * @Assert\Regex("/^[\d+]{5}$/", message="Le code postal n'est pas valide")
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     */
    private $zip;

    /**
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     */
    private $message;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $nom
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $prenom
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $telephone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $adresse
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $ville
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $code_postal
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
}
