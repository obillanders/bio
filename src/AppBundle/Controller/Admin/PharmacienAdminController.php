<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Pharmacien;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PharmacienAdminController extends Controller
{
    /**
     * Allow admin user log as pharmacien user.
     *
     * @return RedirectResponse
     */
    public function connectAsAction()
    {
        $object = $this->admin->getSubject();
        if (!$object instanceof Pharmacien) {
            throw $this->createNotFoundException("This pharmacien has no user account related to");
        }

        $user = $this->get('app.manager.user')->findByPharmacien($object);
        if (!$user) {
            throw $this->createNotFoundException("User not found for this pharmacien");
        }

        $this->addFlash('sonata_flash_success', 'Connected successfully');

        return new RedirectResponse($this->generateUrl('pharmacien_homepage', array(
            '_connect_as' => $user->getUsername(),
        )));
    }
}