<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Pharmacien;
use AppBundle\Entity\User;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByPharmacien(Pharmacien $pharmacien)
    {
        $qb = $this->createQueryBuilder("u");

        $qb->leftJoin("u.pharmacien", "p")
           ->where("p = :pharmacien");

        $qb->setParameter('pharmacien', $pharmacien);

        return $qb->getQuery()->getOneOrNullResult();
    }
}
