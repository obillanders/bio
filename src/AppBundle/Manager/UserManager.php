<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Officine;
use AppBundle\Entity\Pharmacien;
use AppBundle\Entity\User;
use AppBundle\Repository\UserRepository;
use AppBundle\Service\UserPasswordHelper;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Util\CanonicalFieldsUpdater;
use FOS\UserBundle\Util\PasswordUpdaterInterface;

class UserManager extends \FOS\UserBundle\Doctrine\UserManager
{
    protected $passwordHelper;

    public function __construct(
        UserPasswordHelper $passwordHelper,
        PasswordUpdaterInterface $passwordUpdater,
        CanonicalFieldsUpdater $canonicalFieldsUpdater,
        ObjectManager $om,
        $class
    ) {
        $this->passwordHelper = $passwordHelper;
        parent::__construct($passwordUpdater, $canonicalFieldsUpdater, $om, $class);
    }

    public function alterNewUser(User $user, $role)
    {
        $user->setEnabled(false);
        $user->setRoles(array($role));

        $this->updateUser($user);
    }

    public function activatePharmacien(User $user, Pharmacien $pharmacien)
    {
        $user->setEnabled(true);
        $user->setPharmacien($pharmacien);
        $user = $this->passwordHelper->resetUserPassword($user);
        $this->updateUser($user);
    }

    public function denyUser(User $user)
    {
        $user->setEnabled(false);
        $this->updateUser($user);
    }

    public function setAccessStandardPharmacien(User $user)
    {
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_OFFICINE_OWNER'));
        $this->updateUser($user);
    }

    public function setAccessFullPharmacien(User $user)
    {
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_OFFICINE_OWNER_CERTIFY'));
        $this->updateUser($user);
    }

    public function getPmP(User $user)
    {
        $pharmacien = $user->getPharmacien();
    }

    public function setCurrentOfficine(User $user, Officine $officine)
    {
        $user->setCurrentOfficine($officine);
        $this->updateUser($user);

    }

    /**
     * Find User connected to target pharmacien.
     *
     * @param Pharmacien $pharmacien
     *
     * @return mixed
     */
    public function findByPharmacien(Pharmacien $pharmacien)
    {
        return $this->getRepository()->findByPharmacien($pharmacien);
    }
}