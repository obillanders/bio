<?php

namespace AppBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseCategory as BaseCategory;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Category
 *
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="classification_category")
 */
class Category extends BaseCategory
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
