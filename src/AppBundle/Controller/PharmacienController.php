<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Officine;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Filesystem\Filesystem;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class PharmacienController extends Controller
{
    public function homepageAction(Request $request)
    {
        $isHome = 'home';

        //Get News
        $listNews = $this->get('app.manager.news')->getLastNews('4');

        $currentOfficine = $this->getUser()->getCurrentOfficine();
        $pmp = array('name' => $currentOfficine->getPmp(), 'tel' => $currentOfficine->getTelephonePmp());

        return $this->render(':Pharmacien:pharmacien_index.html.twig', array(
            'listNews' => $listNews,
            'pmp' => $pmp,
            'isHome' => $isHome
        ));
    }

    public function setCurrentOfficineAction(Request $request)
    {
        $officineId = $request->get('officeSelector');
        $officine = $this->get('app.manager.officine')->find($officineId);
        if(null == $officine){
            throw $this->createNotFoundException();
        }
        $user = $this->getUser();

        $this->get('app.manager.user')->setCurrentOfficine($user, $officine);

        return $this->redirect($request->headers->get('referer'));
    }

    public function engagementsAction()
    {
        return $this->render(':Pharmacien:pharmacien_engagements.html.twig');
    }

    public function catalogueAction()
    {
        return $this->render(':Pharmacien:pharmacien_catalogue.html.twig');
    }

    public function formationsAction()
    {
        return $this->render(':Pharmacien:pharmacien_formations.html.twig');
    }

    public function servicesLigneAction()
    {
        return $this->render(':Pharmacien:pharmacien_services_ligne.html.twig');
    }

    public function servicesPatientsAction()
    {
        return $this->render(':Pharmacien:pharmacien_services_patients.html.twig');
    }
}
