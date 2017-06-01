<?php

namespace AppBundle\Manager;

use AppBundle\Manager\BaseEntityManager;
use AppBundle\Repository\NewsRepository;

class NewsManager extends BaseEntityManager
{
        public function getLastNews($nbNews)
    {
        return $this->getRepository()->getLastNews($nbNews);
    }
}