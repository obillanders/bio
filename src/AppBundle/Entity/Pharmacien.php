<?php

namespace AppBundle\Entity;

use AppBundle\Import\Traits\ImportableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\OfficinePharmacien;

/**
 * Pharmacien
 *
 * @ORM\Table(name="pharmacien")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PharmacienRepository")
 * @JMS\ExclusionPolicy("none")
 */
class Pharmacien
{
    use ImportableTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="nrid_interlocuteur", type="bigint")
     * @ORM\Id
     * @Assert\Type("int")
     * @JMS\SerializedName("NRID")
     */
    private $nridInterlocuteur;

    /**
     * @ORM\OneToMany(targetEntity="OfficinePharmacien", mappedBy="pharmacien")
     */
    private $pharmacienOfficines;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("NOM")
     */
    public $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("PRENOM")
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("SEXE")
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("CIVILITE")
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="titulaire", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("TITULAIR")
     */
    private $titulaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     * @Assert\DateTime()
     * @JMS\SerializedName("DATENAIS")
     * @JMS\Type("DateTime<'d/m/Y'>")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=30)
     * @JMS\SerializedName("EMAIL")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_mobile", type="string", length=30, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=30)
     * @JMS\SerializedName("TEL")
     */
    private $telephoneMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_rpps", type="string", length=20, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=20)
     * @JMS\SerializedName("RPPS")
     */
    private $numeroRpps;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User", mappedBy="pharmacien")
     */
    private $user;

    /**
     * Pharmacien constructor.
     */
    public function __construct()
    {
        $this->pharmacienOfficines = new ArrayCollection();
    }

    /**
     * Set nridInterlocuteur
     *
     * @param integer $nridInterlocuteur
     *
     * @return Pharmacien
     */
    public function setNridInterlocuteur($nridInterlocuteur)
    {
        $this->nridInterlocuteur = $nridInterlocuteur;

        return $this;
    }

    /**
     * Get nridInterlocuteur
     *
     * @return int
     */
    public function getNridInterlocuteur()
    {
        return $this->nridInterlocuteur;
    }

    public function getCurrentPharmacienOfficines()
    {
        $dateNow = new \DateTime();

        $newerCriteria = Criteria::create()
            ->where(Criteria::expr()->lt("dateEntree", $dateNow))
            ->andWhere(Criteria::expr()->gt("dateSortie", $dateNow))
        ;

        return $this->pharmacienOfficines->matching($newerCriteria);
    }

    /**
     * @return mixed
     */
    public function getPharmacienOfficines()
    {
        return $this->pharmacienOfficines;
    }

    /**
     * @param mixed $pharmacienOfficines
     */
    public function setPharmacienOfficines($pharmacienOfficines)
    {
        $this->pharmacienOfficines = $pharmacienOfficines;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Pharmacien
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Pharmacien
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Pharmacien
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     *
     * @return Pharmacien
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set titulaire
     *
     * @param string $titulaire
     *
     * @return Pharmacien
     */
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    /**
     * Get titulaire
     *
     * @return string
     */
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Pharmacien
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Pharmacien
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephoneMobile
     *
     * @param string $telephoneMobile
     *
     * @return Pharmacien
     */
    public function setTelephoneMobile($telephoneMobile)
    {
        $this->telephoneMobile = $telephoneMobile;

        return $this;
    }

    /**
     * Get telephoneMobile
     *
     * @return string
     */
    public function getTelephoneMobile()
    {
        return $this->telephoneMobile;
    }

    /**
     * Set numeroRpps
     *
     * @param string $numeroRpps
     *
     * @return Pharmacien
     */
    public function setNumeroRpps($numeroRpps)
    {
        $this->numeroRpps = $numeroRpps;

        return $this;
    }

    /**
     * Get numeroRpps
     *
     * @return string
     */
    public function getNumeroRpps()
    {
        return $this->numeroRpps;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    public function __toString() {
        return get_class($this).'['.$this->getNridInterlocuteur().']';
    }
}
