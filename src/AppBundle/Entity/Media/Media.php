<?php

namespace AppBundle\Entity\Media;

use Sonata\MediaBundle\Entity\BaseMedia as BaseMedia;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Media
 *
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="media_media")
 */
class Media extends BaseMedia
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
