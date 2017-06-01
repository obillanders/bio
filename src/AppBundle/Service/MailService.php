<?php
/**
 * Created by PhpStorm.
 * User: bpicharles
 * Date: 16/05/2017
 * Time: 11:31
 */

namespace AppBundle\Service;


use AppBundle\Model\Contact;
use FOS\UserBundle\Mailer\TwigSwiftMailer;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class MailService extends TwigSwiftMailer
{
    public function __construct(
        \Swift_Mailer $mailer,
        UrlGeneratorInterface $router,
        \Twig_Environment $twig,
        array $parameters,
        array $appParameters
    ) {
        $parameters = array_merge_recursive($parameters, $appParameters);

        parent::__construct($mailer, $router, $twig, $parameters);
    }

    public function sendContactMessage(Contact $contact)
    {
        $fromEmail = $contact->getEmail();
        $toEmail = $this->parameters['to_email']['contact'];

        $this->sendMessage(':Mail:contact.html.twig', array(
            'contact' => $contact,
        ), $fromEmail, $toEmail, true);

        // done in override sendMessage for now, but won't be anymore if more data need in confrmation mail like sender mail.
        // $this->sendConfirmationMailSendedMessage($fromEmail);
    }

    public function sendConfirmationMailSendedMessage($toEmail)
    {
        $fromEmail = $this->parameters['from_email']['noreply'];

        $this->sendMessage(':Mail:confirmation_mail.html.twig', array(), $fromEmail, $toEmail);
    }

    /**
     * Override of TwigSwiftMailer->sendMessage() for add possibility to send confirmation message to from_email.
     *
     * @param string $templateName
     * @param array $context
     * @param array $fromEmail
     * @param string $toEmail
     * @param bool $sendConfirmationMessage
     */
    public function sendMessage($templateName, $context, $fromEmail, $toEmail, $sendConfirmationMessage = false)
    {
        parent::sendMessage($templateName, $context, $fromEmail, $toEmail);

        if ($sendConfirmationMessage) {
            $this->sendConfirmationMailSendedMessage($fromEmail);
        }
    }
}
