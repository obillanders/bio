<?php

namespace AppBundle\Entity\Media;

use Sonata\MediaBundle\Entity\BaseGallery as BaseGallery;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Gallery
 *
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="media_gallery")
 */
class Gallery extends BaseGallery
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
