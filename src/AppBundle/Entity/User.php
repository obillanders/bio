<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();

        $randomPassword = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(25 / strlen($x)))), 1, 25);
        $this->plainPassword = $randomPassword;
    }

    /**
     * @var int56
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Pharmacien", fetch="EAGER")
     * @ORM\JoinColumn(referencedColumnName="nrid_interlocuteur")
     */
    protected $pharmacien;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Officine", fetch="EAGER")
     * @ORM\JoinColumn(name="current_officine", referencedColumnName="nrid_pharmacie")
     */
    protected $currentOfficine;

    /**
     * @var boolean
     * @ORM\Column(name="offres", type="boolean")
     */
    protected $offres = false;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setEmail($email)
    {
        parent::setEmail($email);
        $this->setUsername($email);

        return $this;
    }

    public function setUsername($username)
    {
        $this->username = $this->email;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPharmacien()
    {
        return !is_null($this->pharmacien);
    }

    /**
     * @return Pharmacien|null
     */
    public function getPharmacien()
    {
        return $this->pharmacien;
    }

    /**
     * @param mixed $pharmacien
     */
    public function setPharmacien(Pharmacien $pharmacien)
    {
        $this->pharmacien = $pharmacien;
    }

    /**
     * @return mixed
     */
    public function getCurrentOfficine()
    {
        return $this->currentOfficine;
    }

    /**
     * @param mixed $currentOfficine
     */
    public function setCurrentOfficine($currentOfficine)
    {
        $this->currentOfficine = $currentOfficine;
    }

    /**
     * @return bool
     */
    public function isOffres()
    {
        return $this->offres;
    }

    /**
     * @param bool $offres
     */
    public function setOffres($offres)
    {
        $this->offres = $offres;
    }


}

