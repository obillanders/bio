<?php

namespace AppBundle\Controller;

use AppBundle\Form\ContactType;
use AppBundle\Model\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends Controller
{
    public function contactAction(Request $request)
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $this->get('app.mailer')->sendContactMessage($contact);

            $this->addFlash(
                'notice',
                'Votre message a bien été envoyé, un conseiller vous recontactera dans les plus brefs délais'
            );

            return $this->redirectToRoute('app_contact');
        }

        return $this->render(':Form:contact.html.twig', array('form' => $form->createView()
        ));
    }
}
