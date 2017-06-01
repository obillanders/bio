<?php

namespace AppBundle\Service;

use AppBundle\Manager\OfficineManager;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\User;

class OfficineSelectorService
{

    protected $officineManager;
    protected $session;

    public function __construct(OfficineManager $officineManager, Session $session)
    {
        $this->officineManager = $officineManager;
        $this->session = $session;
    }

    public function getAll(User $user)
    {
        return $this->officineManager->findByPharmacien($user->getPharmacien());
    }

    public function getDefaultOfficine(User $user)
    {
        return $this->officineManager->findFirstByPharmacien($user->getPharmacien());
    }

    public function getOfficine()
    {
        if ($this->session->has('nridPharmacie')) {
            return $this->session->get('nridPharmacie');
        }

        return null;
    }

}