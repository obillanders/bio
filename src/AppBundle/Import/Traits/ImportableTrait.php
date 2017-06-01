<?php

namespace AppBundle\Import\Traits;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ImportableTrait
 * @package AppBundle\Import\Traits
 */
trait ImportableTrait
{
    /**
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     * @JMS\SerializedName("SUPPR")
     * @JMS\Type("boolean")
     */
    protected $deleted = false;

    /**
     * @return mixed
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param mixed $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
}