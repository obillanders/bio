<?php

namespace AppBundle\Admin\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Filesystem\Filesystem;

class AdminController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render(':Admin:admin_index.html.twig');
    }
}
