<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;
use AppBundle\Import\Traits\ImportableTrait;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContratRepository")
 */
class Contrat
{
    use ImportableTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="nrid_contrat", type="bigint", unique=true)
     * @ORM\Id
     * @Assert\Type("int")
     * @JMS\SerializedName("NRIDCT")
     */
    private $nridContrat;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Officine")
     * @ORM\JoinColumn(name="nrid_pharmacie", referencedColumnName="nrid_pharmacie")
     * @JMS\SerializedName("NRIDOFF")
     * @JMS\Type("NRIDOfficine")
     */
    private $officine;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=30, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=30)
     * @JMS\SerializedName("REF")
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("MODELE")
     */
    private $modele;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     * @Assert\DateTime()
     * @JMS\SerializedName("DATEDEB")
     * @JMS\Type("DateTime<'d/m/Y'>")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     * @Assert\DateTime()
     * @JMS\SerializedName("DATEFIN")
     * @JMS\Type("DateTime<'d/m/Y'>")
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="montant_ttc", type="bigint", nullable=true)
     * @Assert\Type("int")
     * @JMS\SerializedName("MONTANT")
     */
    private $montantTtc;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_facture", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("NUMFAC")
     */
    private $numeroFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_facture", type="datetime", nullable=true)
     * @Assert\DateTime()
     * @JMS\SerializedName("DATEFAC")
     * @JMS\Type("DateTime<'d/m/Y'>")
     */
    private $dateFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="renvoi_contrat", type="datetime", nullable=true)
     * @Assert\DateTime()
     */
    private $renvoiContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="canal", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("CANAL")
     */
    private $canal;

    /**
     * @var string
     *
     * @ORM\Column(name="url_contrat_a_signer", type="text", nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=500)
     * @JMS\SerializedName("URL")
     */
    private $urlContratASigner;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_courant", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     * @JMS\SerializedName("STATUT")
     */
    private $statutCourant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_statut", type="datetime", nullable=true)
     * @Assert\DateTime()
     * @JMS\SerializedName("DATSTATU")
     * @JMS\Type("DateTime<'d/m/Y'>")
     */
    private $dateStatut;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nridContrat
     *
     * @param integer $nridContrat
     *
     * @return Contrat
     */
    public function setNridContrat($nridContrat)
    {
        $this->nridContrat = $nridContrat;

        return $this;
    }

    /**
     * Get nridContrat
     *
     * @return int
     */
    public function getNridContrat()
    {
        return $this->nridContrat;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Contrat
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return Contrat
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Contrat
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Contrat
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set montantTtc
     *
     * @param integer $montantTtc
     *
     * @return Contrat
     */
    public function setMontantTtc($montantTtc)
    {
        $this->montantTtc = $montantTtc;

        return $this;
    }

    /**
     * Get montantTtc
     *
     * @return int
     */
    public function getMontantTtc()
    {
        return $this->montantTtc;
    }

    /**
     * Set numeroFacture
     *
     * @param string $numeroFacture
     *
     * @return Contrat
     */
    public function setNumeroFacture($numeroFacture)
    {
        $this->numeroFacture = $numeroFacture;

        return $this;
    }

    /**
     * Get numeroFacture
     *
     * @return string
     */
    public function getNumeroFacture()
    {
        return $this->numeroFacture;
    }

    /**
     * Set dateFacture
     *
     * @param \DateTime $dateFacture
     *
     * @return Contrat
     */
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    /**
     * Get dateFacture
     *
     * @return \DateTime
     */
    public function getDateFacture()
    {
        return $this->dateFacture;
    }

    /**
     * Set renvoiContrat
     *
     * @param \DateTime $renvoiContrat
     *
     * @return Contrat
     */
    public function setRenvoiContrat($renvoiContrat)
    {
        $this->renvoiContrat = $renvoiContrat;

        return $this;
    }

    /**
     * Get renvoiContrat
     *
     * @return \DateTime
     */
    public function getRenvoiContrat()
    {
        return $this->renvoiContrat;
    }

    /**
     * Set canal
     *
     * @param string $canal
     *
     * @return Contrat
     */
    public function setCanal($canal)
    {
        $this->canal = $canal;

        return $this;
    }

    /**
     * Get canal
     *
     * @return string
     */
    public function getCanal()
    {
        return $this->canal;
    }

    /**
     * Set urlContratASigner
     *
     * @param string $urlContratASigner
     *
     * @return Contrat
     */
    public function setUrlContratASigner($urlContratASigner)
    {
        $this->urlContratASigner = $urlContratASigner;

        return $this;
    }

    /**
     * Get urlContratASigner
     *
     * @return string
     */
    public function getUrlContratASigner()
    {
        return $this->urlContratASigner;
    }

    /**
     * Set statutCourant
     *
     * @param string $statutCourant
     *
     * @return Contrat
     */
    public function setStatutCourant($statutCourant)
    {
        $this->statutCourant = $statutCourant;

        return $this;
    }

    /**
     * Get statutCourant
     *
     * @return string
     */
    public function getStatutCourant()
    {
        return $this->statutCourant;
    }

    /**
     * Set dateStatut
     *
     * @param \DateTime $dateStatut
     *
     * @return Contrat
     */
    public function setDateStatut($dateStatut)
    {
        $this->dateStatut = $dateStatut;

        return $this;
    }

    /**
     * Get dateStatut
     *
     * @return \DateTime
     */
    public function getDateStatut()
    {
        return $this->dateStatut;
    }

    /**
     * Set officine
     *
     * @param \AppBundle\Entity\Officine $officine
     *
     * @return OfficinePharmacien
     */
    public function setOfficine(\AppBundle\Entity\Officine $officine)
    {
        $this->officine = $officine;

        return $this;
    }

    /**
     * Get officine
     *
     * @return \AppBundle\Entity\Officine
     */
    public function getOfficine()
    {
        return $this->officine;
    }
}
