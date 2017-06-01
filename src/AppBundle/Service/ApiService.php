<?php

namespace AppBundle\Service;

use AppBundle\Entity\Rdi;
use AppBundle\Entity\User;
use AppBundle\Manager\PharmacienManager;
use AppBundle\Manager\RdiManager;
use AppBundle\Manager\UserManager;
use AppBundle\Model\Api\PharmacienChangeAccess;
use AppBundle\Model\Api\PharmacienRegister;
use AppBundle\Model\Api\PharmacienValidate;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AppBundle\Repository\UserRepository;


class ApiService
{

    protected $pharmacienManager;
    protected $userManager;
    protected $rdiManager;
    protected static $erreur = array(
        'activateNridNotFound' => '103',
        'activateIdRdiNotFound' => '104',
        'activatePharmacienAlreadyActivated' => '105',
        'activateemailAlreadyLinked' => '106',
        'registerNridNotFound' => '203',
        'changeAccessNridNotFound' => '302');


    public function __construct(PharmacienManager $pharmacienManager, UserManager $userManager, RdiManager $rdiManager)
    {
        $this->pharmacienManager = $pharmacienManager;
        $this->userManager = $userManager;
        $this->rdiManager = $rdiManager;
    }


    public function activateUser(PharmacienValidate $pharmacienValidate)
    {
        $nrid = $pharmacienValidate->getNrid();
        $pharmacien = $this->findPharmacienByNrid($nrid, self::$erreur['activateNridNotFound']);

        $idRdi = $pharmacienValidate->getIdRdi();
        $shortIdRdi = Rdi::generateShortRdiId($idRdi);
        $rdi = $this->rdiManager->find($shortIdRdi);
        if(null == $rdi){
            throw new \Exception('ID RDI '.$rdi.' non trouvé', self::$erreur['activateIdRdiNotFound']);
        }

        $userId = $rdi->getExtraData()['user'];
        $user = $this->userManager->findUserBy(array('id' => $userId));
        if($user->isEnabled()){
            throw new \Exception('conflit pharmacien '.$nrid.' déjà enregistré', self::$erreur['activatePharmacienAlreadyActivated']);
        }

        $userPharmacien = $this->userManager->findUserBy(array('pharmacien' => $nrid));
        if(!null == $userPharmacien){
            throw new \Exception('conflit email ' . $user->getEmail() . ' déjà lié à un autre nrid ' . $nrid, self::$erreur['activateemailAlreadyLinked']);
        }

        $this->userManager->activatePharmacien($user, $pharmacien);

        return $user;
    }

    public function registerUser(PharmacienRegister $pharmacienRegister)
    {
        $nrid = $pharmacienRegister->getNrid();
        $pharmacien = $this->findPharmacienByNrid($nrid, self::$erreur['registerNridNotFound']);

        //find user by Pharmacien
        $user = new User;
        if($this->userManager->findUserBy(array('Pharmacien' => $pharmacien))){
            throw new NotFoundHttpException('User already exist');
        }

    }

    public function changeAccessUser(PharmacienChangeAccess $pharmacienChangeAccess)
    {
        $nrid = $pharmacienChangeAccess->getNrid();
        $pharmacien = $this->findPharmacienByNrid($nrid, self::$erreur['changeAccessNridNotFound']);

        $access = $pharmacienChangeAccess->getAccess();

        $user = $this->userManager->findUserBy(array('pharmacien'=> $pharmacien));
        if(null == $user){
            throw new NotFoundHttpException('User not found');
        }

        if($access == 'DENIED') {
            $this->userManager->denyUser($user);
        }elseif ($access == 'STANDARD') {
            $this->userManager->setAccessStandardPharmacien($user);
        }elseif ($access == 'FULL') {
            $this->userManager->setAccessFullPharmacien($user);
        }

        return $user;
    }

    protected function findPharmacienByNrid($nrid, $codeErreur)
    {
        $pharmacien = $this->pharmacienManager->find($nrid);

        if (null == $pharmacien){
            throw new \Exception('nrid '.$nrid.' non trouvé', $codeErreur);
        }

        return $pharmacien;
    }

}