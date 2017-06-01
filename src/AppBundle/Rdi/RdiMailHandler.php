<?php

namespace AppBundle\Rdi;

use AppBundle\Entity\Rdi;
use AppBundle\Exception\RdiException;

class RdiMailHandler implements RdiHandlerInterface
{
    private $twig;
    private $mailer;
    private $rdiConfig;

    /**
     * RdiMailHandler constructor.
     * @param $twig
     */
    public function __construct(\Twig_Environment $twig, \Swift_Mailer $mailer, $rdiConfig)
    {
        $this->twig = $twig;
        $this->mailer = $mailer;
        $this->rdiConfig = $rdiConfig;
    }

    /**
     * @param Rdi $rdi
     */
    public function handle(Rdi $rdi)
    {
        $messageBody = $this->twig->render(
            ':Mail:rdi.html.twig',
            array(
                'id' => $rdi->getId(),
                'dtCreat' => date_format($rdi->getDtcreat(), 'd m Y'),
                'creatBy' => $rdi->getCreatBy(),
                'entId' => $rdi->getEntId(),
                'theme' => $rdi->getTheme(),
                'motif' => $rdi->getMotif(),
                'media' => $rdi->getMedia(),
                'report' => $rdi->getReport(),
                'contact' => $rdi->getContact()
            )
        );

        $message = \Swift_Message::newInstance()
            ->setSubject($rdi->getId() . ' ' . $rdi->getTheme() . ' ' . $rdi->getMotif())
            ->setFrom($this->rdiConfig['send_from'])
            ->setTo($this->rdiConfig['send_to'])
            ->setBody($messageBody, 'text/html');

        try {
            $this->mailer->send($message);
            $rdi->setCodeReturn(200);
            $rdi->setMessageReturn("Email envoyé");
            return $rdi;
        } catch (\Exception $e) {
            $rdi->setCodeReturn($e->getCode());
            $rdi->setMessageReturn($e->getMessage());
            throw new RdiException('Mail', $rdi, $e->getMessage(), $e->getCode());
        }
    }
}