<?php

namespace AppBundle\Controller;

use AppBundle\Form\ContactType;
use AppBundle\Model\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AppController extends Controller
{
    protected $newsManager;

    public function indexAction(Request $request)
    {
        $isHome = 'prehome';

        return $this->redirectToRoute('fos_user_security_login');
        //return $this->render(':default:homepage.html.twig');
    }

}
