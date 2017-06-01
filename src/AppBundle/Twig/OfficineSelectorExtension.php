<?php

namespace AppBundle\Twig;

use AppBundle\Entity\User;
use AppBundle\Service\OfficineSelectorService;
use Symfony\Component\Form\FormFactory;

class OfficineSelectorExtension extends \Twig_Extension
{

    protected $officineSelectorService;

    public function __construct(OfficineSelectorService $officineSelectorService)
    {
        $this->officineSelectorService = $officineSelectorService;
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('officine_selector', [$this, 'renderOfficineSelector'], [
                'needs_environment' => true,
                'is_safe' => ['html']
            ])
        ];
    }

    public function renderOfficineSelector(\Twig_Environment $environment, User $user)
    {
        $officines = $this->officineSelectorService->getAll($user);
        $currentOfficine = $user->getCurrentOfficine();
        return $environment->render(':default:officine-selector.html.twig', array(
            'listOfficines' => $officines,
            'currentOfficine' => $currentOfficine
        ));
    }


}