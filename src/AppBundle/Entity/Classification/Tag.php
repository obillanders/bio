<?php

namespace AppBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseTag as BaseTag;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Tag
 *
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="classification_tag")
 */
class Tag extends BaseTag
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
