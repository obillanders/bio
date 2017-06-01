<?php

namespace AppBundle\Service;


use AppBundle\Entity\User;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Mailer\MailerInterface;
use FOS\UserBundle\Util\TokenGeneratorInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class UserPasswordHelper
{
    protected $eventDispatcher;
    protected $tokenGenerator;
    protected $ttlConfig;

    /**
     * UserPasswordHelper constructor.
     *
     * @param $eventDispatcher
     * @param $tokenGenerator
     * @param $userMailer
     */
    public function __construct(EventDispatcherInterface $eventDispatcher, TokenGeneratorInterface $tokenGenerator, $ttlConfig)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->tokenGenerator  = $tokenGenerator;
        $this->ttlConfig       = $ttlConfig;
    }

    /**
     * @param User $user
     *
     * @return User
     */
    public function resetUserPassword(User $user)
    {
        $ttl = $this->ttlConfig;
        if ($ttl && !$user->isPasswordRequestNonExpired($ttl)) {
            return $user;
        }

        if (null === $user->getConfirmationToken()) {
            $user->setConfirmationToken($this->tokenGenerator->generateToken());
        }

        /* Dispatch confirm event */
        $event = new UserEvent($user);
        $this->eventDispatcher->dispatch('app.resetting.confirm', $event);

        $user->setPasswordRequestedAt(new \DateTime());

        return $user;
    }
}