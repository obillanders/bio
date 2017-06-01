<?php

namespace AppBundle\Manager;

use AppBundle\Entity\User;
use AppBundle\Entity\Rdi;
use AppBundle\Rdi\RdiHandlerInterface;
use AppBundle\Service\ManagerTools;
use AppBundle\Exception\RdiException;

class RdiManager extends BaseEntityManager
{
    private $handlers;
    private $rdiConfig;
    private $twig;

    /**
     * RdiManager constructor.
     * @param $sendTypes
     */
    public function __construct($class, ManagerTools $managerTools, $rdiConfig, \Twig_Environment $twig)
    {
        $this->rdiConfig = $rdiConfig;
        $this->twig = $twig;
        parent::__construct($class, $managerTools);
    }

    public function addRdiHandler(RdiHandlerInterface $handler, $handlerName)
    {
        $this->handlers[$handlerName] = $handler;
    }

    public function sendRdiUpdateUser($someForm)
    {
        /* @TODO : finish method implementation
         * $rdi = new Rdi();
         *
         * $report = $this->twig->render(
         * ':Rdi:rdi_report_maj_digit.html.twig',
         * array(
         * 'report' => $someForm,
         * )
         * );
         *
         * $rdi->setId();
         * $rdi->setEntId(null);
         * $rdi->setMotif('Modification d'un interlocuteur');
         * $rdi->setTheme('Gestion des interlocuteurs Officine');
         * $rdi->setReport($report);
         * $rdi->setContact();
         *
         * $this->sendRdi($rdi);*/
    }

    public function sendRdiUpdateOfficine($someForm)
    {
        /* @TODO : finish method implementation
         * $rdi = new Rdi();
         *
         * $report = $this->twig->render(
         * ':Rdi:rdi_report_maj_digit.html.twig',
         * array(
         * 'report' => $someForm,
         * )
         * );
         *
         * $rdi->setId();
         * $rdi->setEntId(null);
         * $rdi->setMotif('Modification officine');
         * $rdi->setTheme('Gestion Fiche Client');
         * $rdi->setReport($report);
         * $rdi->setContact();
         *
         * $this->sendRdi($rdi);*/
    }

    public function sendRdiSubscribeDigitalContract($someForm)
    {
        /* @TODO : finish method implementation
         * $rdi = new Rdi();
         *
         * $report = $this->twig->render(
         * ':Rdi:rdi_report_maj_info.html.twig',
         * array(
         * 'report' => $someForm,
         * )
         * );
         *
         * $rdi->setId();
         * $rdi->setEntId(null);
         * $rdi->setMotif('Changement de l'option Digital');
         * $rdi->setTheme('Gestion Fiche Client');
         * $rdi->setReport($report);
         * $rdi->setContact();
         *
         * $this->sendRdi($rdi);*/
    }

    /**
     * @param User $user
     * @param $userForm
     *
     * @return mixed
     */
    public function sendRdiRegistrationUser(User $user, $userForm)
    {
        $rdi = $this->create();

        $report = $this->twig->render(
            ':Rdi:rdi_report_new_user.html.twig',
            array(
                'report' => $userForm,
            )
        );

        $rdi->setEntId(null);
        $rdi->setMotif('Inscription');
        $rdi->setTheme('Gestion des interlocuteurs Officine');
        $rdi->setReport($report);
        $rdi->setContact(null);

        $rdi->setExtraData(array(
            'user' => $user->getId()
        ));
        return $this->sendRdi($rdi);
    }

    /**
     * @param Rdi $rdi
     *
     * @return mixed
     */
    public function sendRdi(Rdi $rdi)
    {
        $rdiResult = $this->save($rdi);
        if ($rdiResult->hasErrors()) {
            // Probleme lors de la validation ou lors du flush
        }
        $rdi = $rdiResult->getEntity();

        $sendTypes = $this->rdiConfig["send_type"];
        $rdiSends = array();
        foreach ($sendTypes as $handlerName) {
            $rdiSends[$handlerName] = $this->handleRdi($rdi, $handlerName);
        }

        $status = array_map(function ($rdiSend) {
            return $rdiSend['status'];
        }, $rdiSends);
        $rdi->setStatus(serialize($status));

        $mainRdiSend = $this->getMainRdiSend($rdiSends);
        $rdi->setCodeReturn($mainRdiSend['codeReturn']);
        $rdi->setMessageReturn($mainRdiSend['messageReturn']);

        $this->save($rdi);

        return $mainRdiSend['success'];
    }

    /**
     * @param Rdi $rdi
     * @param string $handlerName
     *
     * @return array
     * @throws \Exception
     */
    private function handleRdi(Rdi $rdi, $handlerName)
    {
        $handler = $this->handlers[$handlerName];
        if (!$handler) {
            throw new \Exception("Handler ${handlerName} not found");
        }

        try {
            $rdi = $handler->handle($rdi);
            $handlerSuccess = true;
        } catch (RdiException $e) {
            $rdi = $e->getRdi();
            $handlerSuccess = false;
        }

        return array(
            'success' => $handlerSuccess,
            'status' => $rdi->getCodeReturn() . ' : ' . $rdi->getMessageReturn(),
            'codeReturn' => $rdi->getCodeReturn(),
            'messageReturn' => $rdi->getMessageReturn(),
        );
    }

    /**
     * @param array $rdiSends
     *
     * @return array
     */
    private function getMainRdiSend($rdiSends)
    {
        $mainHandlerName = $this->rdiConfig["main_handler"];

        return $rdiSends[$mainHandlerName];
    }
}