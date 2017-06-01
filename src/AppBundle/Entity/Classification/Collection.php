<?php

namespace AppBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseCollection as BaseCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ClassCollection
 *
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="classification_collection")
 */
class Collection extends BaseCollection
{
    /**
     * @var int $id
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
