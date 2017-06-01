<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ProfilController extends Controller
{
    public function profilAction(Request $request)
    {
        $user = $this->getUser();
        $officinesPharmacien = $this->get('app.officine_selector')->getAll($user);

        return $this->render(':Pharmacien:pharmacien_profil.html.twig', array(
            'user' => $user,
            'listOfficines' => $officinesPharmacien
        ));
    }
}
