<?php

namespace AppBundle\Entity;

use AppBundle\Import\Traits\ImportableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\OfficinePharmacien;

/**
 * Officine
 *
 * @ORM\Table(name="officine")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OfficineRepository")
 */
class Officine
{
    use ImportableTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="nrid_pharmacie", type="bigint", unique=true)
     * @ORM\Id
     * @Assert\Type("int")
     * @JMS\SerializedName("NRID")
     */
    private $nridPharmacie;

    /**
     * @ORM\OneToMany(targetEntity="OfficinePharmacien", mappedBy="officine")
     */
    private $officinePharmaciens;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pharmacie", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("NOM")
     */
    private $nomPharmacie;

    /**
     * @var string
     *
     * @ORM\Column(name="cip_officine", type="string", length=30, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=30)
     * @JMS\SerializedName("CIP")
     */
    private $cip;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("ADR")
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="code_postal", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("CP")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("VILLE")
     */
    private $localite;

    /**
     * @var string
     *
     * @ORM\Column(name="segment", type="string", length=30, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=30)
     * @JMS\SerializedName("SEGMENT")
     */
    private $segment;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=250)
     * @JMS\SerializedName("EMAIL")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_fixe", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("TEL")
     */
        private $telephoneFixe;

    /**
     * @var string
     *
     * @ORM\Column(name="pmp", type="string", length=30, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=30)
     * @JMS\SerializedName("PMP")
     */
    private $pmp;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_pmp", type="string", length=30, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=30)
     * @JMS\SerializedName("TELPMP")
     */
    private $telephonePmp;

    /**
     * @var int
     *
     * @ORM\Column(name="nrid_groupement", type="bigint", nullable=true)
     * @Assert\Type("int")
     * @JMS\SerializedName("GRPTNRID")
     */
    private $nridGroupement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_groupement", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("GRPTNOM")
     */
    private $nomGroupement;

    /**
     * @var string
     *
     * @ORM\Column(name="nrid_depositaire", type="bigint", nullable=true)
     * @Assert\Type("int")
     * @JMS\SerializedName("DPSNRID")
     */
    private $nridDepositaire;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_depositaire", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("DPSNOM")
     */
    private $nomDepositaire;

    /**
     * @var string
     *
     * @ORM\Column(name="canal_contrat", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("CANAL")
     */
    private $canalContrat;

    /**
     * Officine constructor.
     *
     * @param $officinePharmaciens
     */
    public function __construct()
    {
        $this->officinePharmaciens = new ArrayCollection();
    }

    /**
     * Set nridPharmacie
     *
     * @param integer $nridPharmacie
     *
     * @return Officine
     */
    public function setNridPharmacie($nridPharmacie)
    {
        $this->nridPharmacie = $nridPharmacie;

        return $this;
    }

    /**
     * Get nridPharmacie
     *
     * @return int
     */
    public function getNridPharmacie()
    {
        return $this->nridPharmacie;
    }

    /**
     * @return mixed
     */
    public function getOfficinePharmaciens()
    {
        return $this->officinePharmaciens;
    }

    /**
     * @param mixed $officinePharmaciens
     */
    public function setOfficinePharmaciens($officinePharmaciens)
    {
        $this->officinePharmaciens = $officinePharmaciens;
    }

    /**
     * Set nridGroupement
     *
     * @param integer $nridGroupement
     *
     * @return Officine
     */
    public function setNridGroupement($nridGroupement)
    {
        $this->nridGroupement = $nridGroupement;

        return $this;
    }

    /**
     * Get nridGroupement
     *
     * @return int
     */
    public function getNridGroupement()
    {
        return $this->nridGroupement;
    }

    /**
     * Set nomGroupement
     *
     * @param string $nomGroupement
     *
     * @return Officine
     */
    public function setNomGroupement($nomGroupement)
    {
        $this->nomGroupement = $nomGroupement;

        return $this;
    }

    /**
     * Get nomGroupement
     *
     * @return string
     */
    public function getNomGroupement()
    {
        return $this->nomGroupement;
    }

    /**
     * Set pmp
     *
     * @param string $pmp
     *
     * @return Officine
     */
    public function setPmp($pmp)
    {
        $this->pmp = $pmp;

        return $this;
    }

    /**
     * Get pmp
     *
     * @return string
     */
    public function getPmp()
    {
        return $this->pmp;
    }

    /**
     * Set telephonePmp
     *
     * @param string $telephonePmp
     *
     * @return Officine
     */
    public function setTelephonePmp($telephonePmp)
    {
        $this->telephonePmp = $telephonePmp;

        return $this;
    }

    /**
     * Get telephonePmp
     *
     * @return string
     */
        public function getTelephonePmp()
    {
        return $this->telephonePmp;
    }

    /**
     * Set nomPharmacie
     *
     * @param string $nomPharmacie
     *
     * @return Officine
     */
    public function setNomPharmacie($nomPharmacie)
    {
        $this->nomPharmacie = $nomPharmacie;

        return $this;
    }

    /**
     * Get nomPharmacie
     *
     * @return string
     */
    public function getNomPharmacie()
    {
        return $this->nomPharmacie;
    }

    /**
     * Set nridDepositaire
     *
     * @param string $nridDepositaire
     *
     * @return Officine
     */
    public function setNridDepositaire($nridDepositaire)
    {
        $this->nridDepositaire = $nridDepositaire;

        return $this;
    }

    /**
     * Get nridDepositaire
     *
     * @return int
     */
    public function getNridDepositaire()
    {
        return $this->nridDepositaire;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Officine
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
     * Set telephoneFixe
     *
     * @param string $telephoneFixe
     *
     * @return Officine
     */
    public function setTelephoneFixe($telephoneFixe)
    {
        $this->telephoneFixe = $telephoneFixe;

        return $this;
    }

    /**
     * Get telephoneFixe
     *
     * @return string
     */
    public function getTelephoneFixe()
    {
        return $this->telephoneFixe;
    }

    /**
     * Set cip
     *
     * @param string $cip
     *
     * @return Officine
     */
    public function setCip($cip)
    {
        $this->cip = $cip;

        return $this;
    }

    /**
     * Get cip
     *
     * @return string
     */
    public function getCip()
    {
        return $this->cip;
    }

    /**
     * Set nomDepositaire
     *
     * @param string $nomDepositaire
     *
     * @return Officine
     */
    public function setNomDepositaire($nomDepositaire)
    {
        $this->nomDepositaire = $nomDepositaire;

        return $this;
    }

    /**
     * Get nomDepositaire
     *
     * @return string
     */
    public function getNomDepositaire()
    {
        return $this->nomDepositaire;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Officine
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Officine
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set localite
     *
     * @param string $localite
     *
     * @return Officine
     */
    public function setLocalite($localite)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return string
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set segment
     *
     * @param string $segment
     *
     * @return Officine
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment
     *
     * @return string
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Set canalContrat
     *
     * @param string $canalContrat
     *
     * @return Officine
     */
    public function setCanalContrat($canalContrat)
    {
        $this->canalContrat = $canalContrat;

        return $this;
    }

    /**
     * Get canalContrat
     *
     * @return string
     */
    public function getCanalContrat()
    {
        return $this->canalContrat;
    }

    public function __toString() {
        return get_class($this).'['.$this->getNridPharmacie().']';
    }
}

