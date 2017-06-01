<?php

namespace AppBundle\Entity\Media;

use Sonata\MediaBundle\Entity\BaseGalleryHasMedia as BaseGalleryHasMedia;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class GalleryHasMedia
 *
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="media_gallery_media")
 */
class GalleryHasMedia extends BaseGalleryHasMedia
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
