<?php

namespace AppBundle\Security;

use AppBundle\Entity\OfficinePharmacien;
use AppBundle\Manager\OfficineManager;
use AppBundle\Manager\UserManager;
use AppBundle\Service\OfficineSelectorService;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class SuccessHandler implements AuthenticationSuccessHandlerInterface
{

    private $router;
    private $officineSelectorService;
    private $userManager;

    public function __construct(UrlGeneratorInterface $router, OfficineSelectorService $officineSelectorService, UserManager $userManager)
    {
        $this->router = $router;
        $this->officineSelectorService = $officineSelectorService;
        $this->userManager = $userManager;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        $roles = $token->getUser()->getRoles();

        $basePath = $request->getSession()->get('_security.' . $token->getProviderKey() . '.target_path');

        if (null != $basePath) {
            return new RedirectResponse($basePath);
        }

        if (in_array('ROLE_ADMIN', $roles)) {
            return $this->redirectToRoute('sonata_admin_dashboard');
        }

        if (in_array('ROLE_OFFICINE_OWNER', $roles)) {

            $officine = $this->officineSelectorService->getDefaultOfficine($token->getUser());

            if (empty($officine)) {
                return $this->redirectToRoute('fos_user_security_logout');
            }

            if(null == $token->getUser()->getCurrentOfficine()){

                $this->userManager->setCurrentOfficine($token->getUser(),$officine);
            }

            return $this->redirectToRoute('pharmacien_homepage');

        }

        return $this->redirectToRoute('app');
    }

    private function redirectToRoute($routeName)
    {
        return new RedirectResponse($this->router->generate($routeName));
    }
}