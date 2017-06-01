<?php

namespace AppBundle\EventListener;

use AppBundle\Service\DisableUser;
use AppBundle\Service\SetUserRole;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvent;
use FOS\UserBundle\Mailer\MailerInterface;

class MailListener
{
    protected $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Event trigger when api ask for reset user password.
     *
     * @param UserEvent $event
     */
    public function onUserPasswordResetted(UserEvent $event)
    {
        $user = $event->getUser();
        $this->mailer->sendResettingEmailMessage($user);
    }
}
