<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;
use AppBundle\Import\Traits\ImportableTrait;

/**
 * OfficinePharmacien
 *
 * @ORM\Table(name="officine_pharmacien", indexes={@ORM\Index(name="nrid_pharmacie_interlocuteur", columns={"nrid_pharmacie", "nrid_interlocuteur"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OfficinePharmacienRepository")
 * @JMS\ExclusionPolicy("none")
 */
class OfficinePharmacien
{
    use ImportableTrait;

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="nrid_lien", type="bigint")
     * @Assert\Type("int")
     * @JMS\SerializedName("NRIDLIEN")
     */
    private $nridLien;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Officine", inversedBy="officinePharmaciens", fetch="EAGER")
     * @ORM\JoinColumn(name="nrid_pharmacie", referencedColumnName="nrid_pharmacie")
     * @JMS\SerializedName("NRIDOFF")
     * @JMS\Type("NRIDOfficine")
     */
    private $officine;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pharmacien", inversedBy="pharmacienOfficines", fetch="EAGER")
     * @ORM\JoinColumn(name="nrid_interlocuteur", referencedColumnName="nrid_interlocuteur")
     * @JMS\SerializedName("NRIDINT")
     * @JMS\Type("NRIDPharmacien")
     */
    private $pharmacien;

    /**
     * @var int
     *
     * @ORM\Column(name="interlocuteur_principal", type="bigint", nullable=true)
     * @Assert\Type("int")
     * @JMS\SerializedName("INTPRINC")
     */
    private $interlocuteurPrincipal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entree", type="date", nullable=true)
     * @Assert\DateTime()
     * @JMS\Type("DateTime<'d/m/Y'>")
     * @JMS\SerializedName("DATEDEB")
     */
    private $dateEntree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sortie", type="date", nullable=true)
     * @Assert\DateTime()
     * @JMS\Type("DateTime<'d/m/Y'>")
     * @JMS\SerializedName("DATEFIN")
     */
    private $dateSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="email_pro", type="string", length=250, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=250)
     * @JMS\SerializedName("EMAIL")
     */
    private $emailPro;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=30, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=30)
     * @JMS\SerializedName("TEL")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=50, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=50)
     */
    private $fonction;

    /**
     * Set nridLien
     *
     * @param integer $nridLien
     *
     * @return OfficinePharmacien
     */
    public function setNridLien($nridLien)
    {
        $this->nridLien = $nridLien;

        return $this;
    }

    /**
     * Get nridLien
     *
     * @return int
     */
    public function getNridLien()
    {
        return $this->nridLien;
    }

    /**
     * Set nridDepositaire
     *
     * @param integer $interlocuteurPrincipal
     *
     * @return OfficinePharmacien
     */
    public function setInterlocuteurPrincipal($interlocuteurPrincipal)
    {
        $this->interlocuteurPrincipal = $interlocuteurPrincipal;

        return $this;
    }

    /**
     * Get nridDepositaire
     *
     * @return int
     */
    public function getInterlocuteurPrincipal()
    {
        return $this->interlocuteurPrincipal;
    }

    /**
     * Set dateEntree
     *
     * @param \DateTime $dateEntree
     *
     * @return OfficinePharmacien
     */
    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    /**
     * Get dateEntree
     *
     * @return \DateTime
     */
    public function getDateEntree()
    {
        return $this->dateEntree;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     *
     * @return OfficinePharmacien
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set emailPro
     *
     * @param string $emailPro
     *
     * @return OfficinePharmacien
     */
    public function setEmailPro($emailPro)
    {
        $this->emailPro = $emailPro;

        return $this;
    }

    /**
     * Get emailPro
     *
     * @return string
     */
    public function getEmailPro()
    {
        return $this->emailPro;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return OfficinePharmacien
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set telephoneFixe
     *
     * @param string $telephone
     *
     * @return OfficinePharmacien
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephoneFixe
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return OfficinePharmacien
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
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

    /**
     * Set pharmacien
     *
     * @param \AppBundle\Entity\Pharmacien $pharmacien
     *
     * @return OfficinePharmacien
     */
    public function setPharmacien(\AppBundle\Entity\Pharmacien $pharmacien)
    {
        $this->pharmacien = $pharmacien;

        return $this;
    }

    /**
     * Get pharmacien
     *
     * @return \AppBundle\Entity\Pharmacien
     */
    public function getPharmacien()
    {
        return $this->pharmacien;
    }
}
