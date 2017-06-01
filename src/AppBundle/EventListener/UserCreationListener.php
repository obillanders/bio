<?php

namespace AppBundle\EventListener;

use AppBundle\Manager\RdiManager;
use AppBundle\Service\DisableUser;
use AppBundle\Service\SetUserRole;
use FOS\UserBundle\Doctrine\UserManager;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvent;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\Request;


class UserCreationListener
{
    protected $disableUser;
    protected $setUserRole;
    protected $role;
    protected $userManager;
    protected $rdiManager;
    protected $router;
    protected $session;

    public function __construct($role, UserManager $userManager, RdiManager $rdiManager, Router $router, Session $session)
    {
        $this->role = $role;
        $this->userManager = $userManager;
        $this->rdiManager = $rdiManager;
        $this->router = $router;
        $this->session = $session;
    }

    public function onNewUser(FilterUserResponseEvent $event)
    {
        // disable user and set his role
        $this->userManager->alterNewUser($event->getUser(), $this->role);

        $request = $event->getRequest();
        $isSuccess = $this->rdiManager->sendRdiRegistrationUser($event->getUser(), $request->get('fos_user_registration_form'));
        if ($isSuccess) {
            $this->session->getFlashBag()->add('success', 'Infos bien enregistrées');
        } else {
            $this->session->getFlashBag()->add('danger', 'Erreur, try again');
        }

        $response = $event->getResponse();
        $response->setTargetUrl($this->router->generate('fos_user_registration_register'));
    }
}