<?php

namespace AppBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseContext as BaseContext;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Context
 *
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="classification_context")
 */
class Context extends BaseContext
{
    /**
     * @var int $id
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue(strategy="NONE")
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
