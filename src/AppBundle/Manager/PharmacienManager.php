<?php

namespace AppBundle\Manager;

use AppBundle\Manager\BaseEntityManager;


class PharmacienManager extends BaseEntityManager
{

    public function findByEmail($email)
    {
        return $this->findBy(array('email' => $email));
    }

}