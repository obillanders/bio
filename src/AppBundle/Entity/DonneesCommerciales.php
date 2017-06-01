<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * DonneesCommerciales
 *
 * @ORM\Table(name="donnees_commerciales")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DonneesCommercialesRepository")
 */
class DonneesCommerciales
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Officine")
     * @ORM\JoinColumn(referencedColumnName="nrid_pharmacie")
     */
    private $nridPharmacie;

    /**
     * @var string
     *
     * @ORM\Column(name="objectif", type="string", length=15, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=15)
     */
    private $objectif;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_annuel_r", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulAnnuelR;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_r_q1", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulRQ1;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_r_q2", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulRQ2;

    /**
     * @var bool
     *
     * @ORM\Column(name="cumul_r_q3", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulRQ3;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_direct_annuel_r", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulDirectAnnuelR;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_direct_r_q1", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulDirectRQ1;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_direct_r_q2", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulDirectRQ2;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_direct_r_q3", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulDirectRQ3;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_grossiste_annuel_r", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulGrossisteAnnuelR;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_grossiste_r_q1", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulGrossisteRQ1;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_grossiste_r_q2", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulGrossisteRQ2;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_grossiste_r_q3", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulGrossisteRQ3;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_annuel_nr", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulAnnuelNr;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_nr_q1", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulNrQ1;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_nr_q2", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulNrQ2;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_nr_q3", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulNrQ3;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_direct_annuel_nr", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulDirectAnnuelNr;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_direct_nr_q1", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulDirectNrQ1;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_direct_nr_q2", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulDirectNrQ2;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_direct_nr_q3", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulDirectNrQ3;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_grossiste_annuel_nr", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulGrossisteAnnuelNr;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_grossiste_nr_q1", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulGrossisteNrQ1;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_grossiste_nr_q2", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulGrossisteNrQ2;

    /**
     * @var int
     *
     * @ORM\Column(name="cumul_grossiste_nr_q3", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $cumulGrossisteNrQ3;

    /**
     * @var int
     *
     * @ORM\Column(name="ca_conseil", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $caConseil;

    /**
     * @var int
     *
     * @ORM\Column(name="montant_total_ht_gps", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $montantTotalHtGps;

    /**
     * @var int
     *
     * @ORM\Column(name="prestations_facturees_a_date", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $prestationsFactureesADate;

    /**
     * @var int
     *
     * @ORM\Column(name="montant_ht_rdp", type="bigint", nullable=true)
     * @Assert\Type("int")
     */
    private $montantHtRdp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_paiement_rdp", type="datetime", nullable=true)
     * @Assert\DateTime()
     */
    private $datePaiementRdp;


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
     * Set objectif
     *
     * @param string $objectif
     *
     * @return DonneesCommerciales
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get objectif
     *
     * @return string
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set cumulAnnuelR
     *
     * @param integer $cumulAnnuelR
     *
     * @return DonneesCommerciales
     */
    public function setCumulAnnuelR($cumulAnnuelR)
    {
        $this->cumulAnnuelR = $cumulAnnuelR;

        return $this;
    }

    /**
     * Get cumulAnnuelR
     *
     * @return int
     */
    public function getCumulAnnuelR()
    {
        return $this->cumulAnnuelR;
    }

    /**
     * Set cumulRQ1
     *
     * @param integer $cumulRQ1
     *
     * @return DonneesCommerciales
     */
    public function setCumulRQ1($cumulRQ1)
    {
        $this->cumulRQ1 = $cumulRQ1;

        return $this;
    }

    /**
     * Get cumulRQ1
     *
     * @return int
     */
    public function getCumulRQ1()
    {
        return $this->cumulRQ1;
    }

    /**
     * Set cumulRQ2
     *
     * @param integer $cumulRQ2
     *
     * @return DonneesCommerciales
     */
    public function setCumulRQ2($cumulRQ2)
    {
        $this->cumulRQ2 = $cumulRQ2;

        return $this;
    }

    /**
     * Get cumulRQ2
     *
     * @return int
     */
    public function getCumulRQ2()
    {
        return $this->cumulRQ2;
    }

    /**
     * Set cumulRQ3
     *
     * @param boolean $cumulRQ3
     *
     * @return DonneesCommerciales
     */
    public function setCumulRQ3($cumulRQ3)
    {
        $this->cumulRQ3 = $cumulRQ3;

        return $this;
    }

    /**
     * Get cumulRQ3
     *
     * @return bool
     */
    public function getCumulRQ3()
    {
        return $this->cumulRQ3;
    }

    /**
     * Set cumulDirectAnnuelR
     *
     * @param integer $cumulDirectAnnuelR
     *
     * @return DonneesCommerciales
     */
    public function setCumulDirectAnnuelR($cumulDirectAnnuelR)
    {
        $this->cumulDirectAnnuelR = $cumulDirectAnnuelR;

        return $this;
    }

    /**
     * Get cumulDirectAnnuelR
     *
     * @return int
     */
    public function getCumulDirectAnnuelR()
    {
        return $this->cumulDirectAnnuelR;
    }

    /**
     * Set cumulDirectRQ1
     *
     * @param integer $cumulDirectRQ1
     *
     * @return DonneesCommerciales
     */
    public function setCumulDirectRQ1($cumulDirectRQ1)
    {
        $this->cumulDirectRQ1 = $cumulDirectRQ1;

        return $this;
    }

    /**
     * Get cumulDirectRQ1
     *
     * @return int
     */
    public function getCumulDirectRQ1()
    {
        return $this->cumulDirectRQ1;
    }

    /**
     * Set cumulDirectRQ2
     *
     * @param integer $cumulDirectRQ2
     *
     * @return DonneesCommerciales
     */
    public function setCumulDirectRQ2($cumulDirectRQ2)
    {
        $this->cumulDirectRQ2 = $cumulDirectRQ2;

        return $this;
    }

    /**
     * Get cumulDirectRQ2
     *
     * @return int
     */
    public function getCumulDirectRQ2()
    {
        return $this->cumulDirectRQ2;
    }

    /**
     * Set cumulDirectRQ3
     *
     * @param integer $cumulDirectRQ3
     *
     * @return DonneesCommerciales
     */
    public function setCumulDirectRQ3($cumulDirectRQ3)
    {
        $this->cumulDirectRQ3 = $cumulDirectRQ3;

        return $this;
    }

    /**
     * Get cumulDirectRQ3
     *
     * @return int
     */
    public function getCumulDirectRQ3()
    {
        return $this->cumulDirectRQ3;
    }

    /**
     * Set cumulGrossisteAnnuelR
     *
     * @param integer $cumulGrossisteAnnuelR
     *
     * @return DonneesCommerciales
     */
    public function setCumulGrossisteAnnuelR($cumulGrossisteAnnuelR)
    {
        $this->cumulGrossisteAnnuelR = $cumulGrossisteAnnuelR;

        return $this;
    }

    /**
     * Get cumulGrossisteAnnuelR
     *
     * @return int
     */
    public function getCumulGrossisteAnnuelR()
    {
        return $this->cumulGrossisteAnnuelR;
    }

    /**
     * Set cumulGrossisteRQ1
     *
     * @param integer $cumulGrossisteRQ1
     *
     * @return DonneesCommerciales
     */
    public function setCumulGrossisteRQ1($cumulGrossisteRQ1)
    {
        $this->cumulGrossisteRQ1 = $cumulGrossisteRQ1;

        return $this;
    }

    /**
     * Get cumulGrossisteRQ1
     *
     * @return int
     */
    public function getCumulGrossisteRQ1()
    {
        return $this->cumulGrossisteRQ1;
    }

    /**
     * Set cumulGrossisteRQ2
     *
     * @param integer $cumulGrossisteRQ2
     *
     * @return DonneesCommerciales
     */
    public function setCumulGrossisteRQ2($cumulGrossisteRQ2)
    {
        $this->cumulGrossisteRQ2 = $cumulGrossisteRQ2;

        return $this;
    }

    /**
     * Get cumulGrossisteRQ2
     *
     * @return int
     */
    public function getCumulGrossisteRQ2()
    {
        return $this->cumulGrossisteRQ2;
    }

    /**
     * Set cumulGrossisteRQ3
     *
     * @param integer $cumulGrossisteRQ3
     *
     * @return DonneesCommerciales
     */
    public function setCumulGrossisteRQ3($cumulGrossisteRQ3)
    {
        $this->cumulGrossisteRQ3 = $cumulGrossisteRQ3;

        return $this;
    }

    /**
     * Get cumulGrossisteRQ3
     *
     * @return int
     */
    public function getCumulGrossisteRQ3()
    {
        return $this->cumulGrossisteRQ3;
    }

    /**
     * Set cumulAnnuelNr
     *
     * @param integer $cumulAnnuelNr
     *
     * @return DonneesCommerciales
     */
    public function setCumulAnnuelNr($cumulAnnuelNr)
    {
        $this->cumulAnnuelNr = $cumulAnnuelNr;

        return $this;
    }

    /**
     * Get cumulAnnuelNr
     *
     * @return int
     */
    public function getCumulAnnuelNr()
    {
        return $this->cumulAnnuelNr;
    }

    /**
     * Set cumulNrQ1
     *
     * @param integer $cumulNrQ1
     *
     * @return DonneesCommerciales
     */
    public function setCumulNrQ1($cumulNrQ1)
    {
        $this->cumulNrQ1 = $cumulNrQ1;

        return $this;
    }

    /**
     * Get cumulNrQ1
     *
     * @return int
     */
    public function getCumulNrQ1()
    {
        return $this->cumulNrQ1;
    }

    /**
     * Set cumulNrQ2
     *
     * @param integer $cumulNrQ2
     *
     * @return DonneesCommerciales
     */
    public function setCumulNrQ2($cumulNrQ2)
    {
        $this->cumulNrQ2 = $cumulNrQ2;

        return $this;
    }

    /**
     * Get cumulNrQ2
     *
     * @return int
     */
    public function getCumulNrQ2()
    {
        return $this->cumulNrQ2;
    }

    /**
     * Set cumulNrQ3
     *
     * @param integer $cumulNrQ3
     *
     * @return DonneesCommerciales
     */
    public function setCumulNrQ3($cumulNrQ3)
    {
        $this->cumulNrQ3 = $cumulNrQ3;

        return $this;
    }

    /**
     * Get cumulNrQ3
     *
     * @return int
     */
    public function getCumulNrQ3()
    {
        return $this->cumulNrQ3;
    }

    /**
     * Set cumulDirectAnnuelNr
     *
     * @param integer $cumulDirectAnnuelNr
     *
     * @return DonneesCommerciales
     */
    public function setCumulDirectAnnuelNr($cumulDirectAnnuelNr)
    {
        $this->cumulDirectAnnuelNr = $cumulDirectAnnuelNr;

        return $this;
    }

    /**
     * Get cumulDirectAnnuelNr
     *
     * @return int
     */
    public function getCumulDirectAnnuelNr()
    {
        return $this->cumulDirectAnnuelNr;
    }

    /**
     * Set cumulDirectNrQ1
     *
     * @param integer $cumulDirectNrQ1
     *
     * @return DonneesCommerciales
     */
    public function setCumulDirectNrQ1($cumulDirectNrQ1)
    {
        $this->cumulDirectNrQ1 = $cumulDirectNrQ1;

        return $this;
    }

    /**
     * Get cumulDirectNrQ1
     *
     * @return int
     */
    public function getCumulDirectNrQ1()
    {
        return $this->cumulDirectNrQ1;
    }

    /**
     * Set cumulDirectNrQ2
     *
     * @param integer $cumulDirectNrQ2
     *
     * @return DonneesCommerciales
     */
    public function setCumulDirectNrQ2($cumulDirectNrQ2)
    {
        $this->cumulDirectNrQ2 = $cumulDirectNrQ2;

        return $this;
    }

    /**
     * Get cumulDirectNrQ2
     *
     * @return int
     */
    public function getCumulDirectNrQ2()
    {
        return $this->cumulDirectNrQ2;
    }

    /**
     * Set cumulDirectNrQ3
     *
     * @param integer $cumulDirectNrQ3
     *
     * @return DonneesCommerciales
     */
    public function setCumulDirectNrQ3($cumulDirectNrQ3)
    {
        $this->cumulDirectNrQ3 = $cumulDirectNrQ3;

        return $this;
    }

    /**
     * Get cumulDirectNrQ3
     *
     * @return int
     */
    public function getCumulDirectNrQ3()
    {
        return $this->cumulDirectNrQ3;
    }

    /**
     * Set cumulGrossisteAnnuelNr
     *
     * @param integer $cumulGrossisteAnnuelNr
     *
     * @return DonneesCommerciales
     */
    public function setCumulGrossisteAnnuelNr($cumulGrossisteAnnuelNr)
    {
        $this->cumulGrossisteAnnuelNr = $cumulGrossisteAnnuelNr;

        return $this;
    }

    /**
     * Get cumulGrossisteAnnuelNr
     *
     * @return int
     */
    public function getCumulGrossisteAnnuelNr()
    {
        return $this->cumulGrossisteAnnuelNr;
    }

    /**
     * Set cumulGrossisteNrQ1
     *
     * @param integer $cumulGrossisteNrQ1
     *
     * @return DonneesCommerciales
     */
    public function setCumulGrossisteNrQ1($cumulGrossisteNrQ1)
    {
        $this->cumulGrossisteNrQ1 = $cumulGrossisteNrQ1;

        return $this;
    }

    /**
     * Get cumulGrossisteNrQ1
     *
     * @return int
     */
    public function getCumulGrossisteNrQ1()
    {
        return $this->cumulGrossisteNrQ1;
    }

    /**
     * Set cumulGrossisteNrQ2
     *
     * @param integer $cumulGrossisteNrQ2
     *
     * @return DonneesCommerciales
     */
    public function setCumulGrossisteNrQ2($cumulGrossisteNrQ2)
    {
        $this->cumulGrossisteNrQ2 = $cumulGrossisteNrQ2;

        return $this;
    }

    /**
     * Get cumulGrossisteNrQ2
     *
     * @return int
     */
    public function getCumulGrossisteNrQ2()
    {
        return $this->cumulGrossisteNrQ2;
    }

    /**
     * Set cumulGrossisteNrQ3
     *
     * @param integer $cumulGrossisteNrQ3
     *
     * @return DonneesCommerciales
     */
    public function setCumulGrossisteNrQ3($cumulGrossisteNrQ3)
    {
        $this->cumulGrossisteNrQ3 = $cumulGrossisteNrQ3;

        return $this;
    }

    /**
     * Get cumulGrossisteNrQ3
     *
     * @return int
     */
    public function getCumulGrossisteNrQ3()
    {
        return $this->cumulGrossisteNrQ3;
    }

    /**
     * Set caConseil
     *
     * @param integer $caConseil
     *
     * @return DonneesCommerciales
     */
    public function setCaConseil($caConseil)
    {
        $this->caConseil = $caConseil;

        return $this;
    }

    /**
     * Get caConseil
     *
     * @return int
     */
    public function getCaConseil()
    {
        return $this->caConseil;
    }

    /**
     * Set montantTotalHtGps
     *
     * @param integer $montantTotalHtGps
     *
     * @return DonneesCommerciales
     */
    public function setMontantTotalHtGps($montantTotalHtGps)
    {
        $this->montantTotalHtGps = $montantTotalHtGps;

        return $this;
    }

    /**
     * Get montantTotalHtGps
     *
     * @return int
     */
    public function getMontantTotalHtGps()
    {
        return $this->montantTotalHtGps;
    }

    /**
     * Set prestationsFactureesADate
     *
     * @param integer $prestationsFactureesADate
     *
     * @return DonneesCommerciales
     */
    public function setPrestationsFactureesADate($prestationsFactureesADate)
    {
        $this->prestationsFactureesADate = $prestationsFactureesADate;

        return $this;
    }

    /**
     * Get prestationsFactureesADate
     *
     * @return int
     */
    public function getPrestationsFactureesADate()
    {
        return $this->prestationsFactureesADate;
    }

    /**
     * Set montantHtRdp
     *
     * @param integer $montantHtRdp
     *
     * @return DonneesCommerciales
     */
    public function setMontantHtRdp($montantHtRdp)
    {
        $this->montantHtRdp = $montantHtRdp;

        return $this;
    }

    /**
     * Get montantHtRdp
     *
     * @return int
     */
    public function getMontantHtRdp()
    {
        return $this->montantHtRdp;
    }

    /**
     * Set datePaiementRdp
     *
     * @param \DateTime $datePaiementRdp
     *
     * @return DonneesCommerciales
     */
    public function setDatePaiementRdp($datePaiementRdp)
    {
        $this->datePaiementRdp = $datePaiementRdp;

        return $this;
    }

    /**
     * Get datePaiementRdp
     *
     * @return \DateTime
     */
    public function getDatePaiementRdp()
    {
        return $this->datePaiementRdp;
    }

    /**
     * Set nridPharmacie
     *
     * @param \AppBundle\Entity\Officine $nridPharmacie
     *
     * @return DonneesCommerciales
     */
    public function setNridPharmacie(\AppBundle\Entity\Officine $nridPharmacie = null)
    {
        $this->nridPharmacie = $nridPharmacie;

        return $this;
    }

    /**
     * Get nridPharmacie
     *
     * @return \AppBundle\Entity\Officine
     */
    public function getNridPharmacie()
    {
        return $this->nridPharmacie;
    }
}
