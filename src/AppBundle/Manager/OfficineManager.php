<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Pharmacien;
use AppBundle\Manager\BaseEntityManager;

/**
 * Class OfficineManager
 * @package AppBundle\Manager
 */
class OfficineManager extends BaseEntityManager
{
    public function findByPharmacien(Pharmacien $pharmacien, $limit = null)
    {
        return $this->getRepository()->findByPharmacien($pharmacien, $limit);
    }

    public function findFirstByPharmacien(Pharmacien $pharmacien)
    {
        return $this->getRepository()->findFirstByPharmacien($pharmacien);
    }
}