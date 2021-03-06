<?php

namespace AppBundle\Repository;

/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository   extends \Doctrine\ORM\EntityRepository
{
    public function getLastNews($nbNews)
    {
        $query = $this->createQueryBuilder('n')
            ->select('n')
            ->leftJoin('n.image', 'i')
            ->addSelect('i')
            ->where('n.draft = 0')
            ->orderBy('n.updatedAt','DESC')
            ->getQuery();

        $result = $query->setMaxResults($nbNews)->getResult();
        return $result;
    }
}
