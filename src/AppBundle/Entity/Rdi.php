<?php

namespace AppBundle\Entity;

use JMS\Serializer\Annotation as JMS;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Rdi
 *
 * @ORM\Table(name="rdi")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RdiRepository")
 */
class Rdi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMS\SerializedName("ID")
     * @JMS\Accessor(getter="getId")
     * @Assert\Length(max=15)
     */
    private $id;

    /**
     * @var mixed
     *
     * @ORM\Column(name="extra_data", type="array", nullable=true)
     * @JMS\Exclude
     */
    private $extraData;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtcreat", type="datetime")
     * @Gedmo\Timestampable(on="create")
     * @JMS\SerializedName("DTCREAT")
     * @Assert\DateTime()
     */
    private $dtcreat;

    /**
     * @var string
     *
     * @ORM\Column(name="creat_by", type="string", length=255)
     * @JMS\SerializedName("CREAT_BY")
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $creatBy;

    /**
     * @var int
     *
     * @ORM\Column(name="ent_id", type="bigint", nullable=true)
     * @JMS\SerializedName("ENT_ID")
     * @Assert\Type("int")
     */
    private $entId;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255)
     * @JMS\SerializedName("THEME")
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=255)
     * @JMS\SerializedName("MOTIF")
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $motif;

    /**
     * @var string
     *
     * @ORM\Column(name="report", type="text")
     * @JMS\SerializedName("REPORT")
     * @Assert\Type("string")
     * @Assert\Length(max=2000)
     */
    private $report;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255, nullable=true)
     * @JMS\SerializedName("CONTACT")
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text", nullable=true)
     * @JMS\Exclude
     * @Assert\Type("string")
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="code_return", type="integer", nullable=true)
     * @JMS\Exclude
     * @Assert\Type("int")
     */
    private $codeReturn;

    /**
     * @var string
     * @ORM\Column(name="media", type="string", length=255)
     * @JMS\SerializedName("MEDIA")
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $media;

    /**
     * @var string
     * @ORM\Column(name="origine", type="string", length=255)
     * @JMS\SerializedName("ORIGINE")
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $origine;

    /**
     * @var string
     *
     * @ORM\Column(name="message_return", type="text", nullable=true)
     * @JMS\Exclude
     * @Assert\Type("string")
     */
    private $messageReturn;

    /**
     * Rdi constructor.
     */
    public function __construct()
    {
        $this->dtcreat = new \DateTime();
        $this->creatBy = 'SITE_PRO';
        $this->media = 'Internet';
        $this->origine = 'Site Pro';
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return self::generateLongRdiId($this->id);
    }

    /**
     * @return mixed
     */
    public function getExtraData()
    {
        return $this->extraData;
    }

    /**
     * @param mixed $extraData
     */
    public function setExtraData($extraData)
    {
        $this->extraData = $extraData;
    }


    /**
     * Set dtcreat
     *
     * @param \DateTime $dtcreat
     *
     * @return Rdi
     */
    public function setDtcreat($dtcreat)
    {
        $this->dtcreat = $dtcreat;

        return $this;
    }

    /**
     * Get dtcreat
     *
     * @return \DateTime
     */
    public function getDtcreat()
    {
        return $this->dtcreat;
    }

    /**
     * Set entId
     *
     * @param integer $entId
     *
     * @return Rdi
     */
    public function setEntId($entId)
    {
        $this->entId = $entId;

        return $this;
    }

    /**
     * Get entId
     *
     * @return int
     */
    public function getEntId()
    {
        return $this->entId;
    }

    /**
     * Set motif
     *
     * @param string $motif
     *
     * @return Rdi
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set report
     *
     * @param string $report
     *
     * @return Rdi
     */
    public function setReport($report)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return string
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Rdi
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return string
     */
    public function getCreatBy()
    {
        return $this->creatBy;
    }

    /**
     * @param string $creatBy
     */
    public function setCreatBy($creatBy)
    {
        $this->creatBy = $creatBy;
    }

    /**
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCodeReturn()
    {
        return $this->codeReturn;
    }

    /**
     * @param mixed $codeReturn
     */
    public function setCodeReturn($codeReturn)
    {
        $this->codeReturn = $codeReturn;
    }

    /**
     * @return mixed
     */
    public function getMessageReturn()
    {
        return $this->messageReturn;
    }

    /**
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param string $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

    /**
     * @return string
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * @param string $origine
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;
    }

    /**
     * @param mixed $messageReturn
     */
    public function setMessageReturn($messageReturn)
    {
        $this->messageReturn = $messageReturn;
    }

    public static function generateLongRdiId($id)
    {
        $nbZero = 10 - strlen($id);

        return (int) '9999' . str_pad('', $nbZero, '0') . $id;
    }

    public static function generateShortRdiId($id)
    {
        $re = '/^(99990*)([\d]+)/';
        preg_match_all($re, $id, $matches, PREG_SET_ORDER, 0);

        if (!$matches) {
            throw new \Exception("ShortRdi pattern not match", 500);
        }

        return $matches[0][2];
    }
}

