<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportLog
 *
 * @ORM\Table(name="import_log")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImportLogRepository")
 *
 * @TODO add fileName
 */
class ImportLog
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $className;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duration", type="time", nullable=true)
     */
    private $duration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStart", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnd", type="datetime", nullable=true)
     */
    private $dateEnd;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_total", type="integer", nullable=true)
     */
    private $nbTotal;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_create", type="integer", nullable=true)
     */
    private $nbCreate;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_update", type="integer", nullable=true)
     */
    private $nbUpdate;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_unchange", type="integer", nullable=true)
     */
    private $nbUnchange;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_delete", type="integer", nullable=true)
     */
    private $nbDelete;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_fail", type="integer", nullable=true)
     */
    private $nbFail;

    /**
     * @var int
     *
     * @ORM\Column(name="errors", type="text", nullable=true)
     */
    private $errors;


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
     * Set className
     *
     * @param string $className
     *
     * @return ImportLog
     */
    public function setClassName($className)
    {
        $this->className = $className;

        return $this;
    }

    /**
     * Get className
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Set duration
     *
     * @param \DateTime $duration
     *
     * @return ImportLog
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return ImportLog
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return ImportLog
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set nbTotal
     *
     * @param integer $nbTotal
     *
     * @return ImportLog
     */
    public function setNbTotal($nbTotal)
    {
        $this->nbTotal = $nbTotal;

        return $this;
    }

    /**
     * Get nbTotal
     *
     * @return int
     */
    public function getNbTotal()
    {
        return $this->nbTotal;
    }

    /**
     * Set nbCreate
     *
     * @param integer $nbCreate
     *
     * @return ImportLog
     */
    public function setNbCreate($nbCreate)
    {
        $this->nbCreate = $nbCreate;

        return $this;
    }

    /**
     * Get nbCreated
     *
     * @return int
     */
    public function getNbCreate()
    {
        return $this->nbCreate;
    }

    /**
     * Set nbUpdate
     *
     * @param integer $nbUpdate
     *
     * @return ImportLog
     */
    public function setNbUpdate($nbUpdate)
    {
        $this->nbUpdate = $nbUpdate;

        return $this;
    }

    /**
     * Get nbUpdate
     *
     * @return int
     */
    public function getNbUpdate()
    {
        return $this->nbUpdate;
    }

    /**
     * Set nbUnchange
     *
     * @param integer $nbUnchange
     *
     * @return ImportLog
     */
    public function setNbUnchange($nbUnchange)
    {
        $this->nbUnchange = $nbUnchange;

        return $this;
    }

    /**
     * Get nbUnchange
     *
     * @return int
     */
    public function getNbUnchange()
    {
        return $this->nbUnchange;
    }

    /**
     * Set nbDelete
     *
     * @param integer $nbDelete
     *
     * @return ImportLog
     */
    public function setNbDelete($nbDelete)
    {
        $this->nbDelete = $nbDelete;

        return $this;
    }

    /**
     * Get nbDelete
     *
     * @return int
     */
    public function getNbDelete()
    {
        return $this->nbDelete;
    }


    /**
     * @return int
     */
    public function getNbFail()
    {
        return $this->nbFail;
    }

    /**
     * @param int $nbFail
     */
    public function setNbFail($nbFail)
    {
        $this->nbFail = $nbFail;
    }

    /**
     * @return int
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param int $errors
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function __toString()
    {
        $duration = $this->duration->format('H:i:s');
        $string = sprintf('%s %s imported in time %s (%s created, %s updated, %s unchanged, %s deleted, %s failed)',
            $this->nbTotal, $this->className, $duration, $this->nbCreate, $this->nbUpdate, $this->nbUnchange, $this->nbDelete, $this->nbFail);
        return $string;
    }
}

