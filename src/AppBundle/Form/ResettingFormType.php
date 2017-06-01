<?php

namespace AppBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ResettingFormType extends AbstractType
{
    private $blankPwd = "Veuillez saisir un mot de passe";
    private $pwdMismatch = "Les mots de passe saisis ne correspondent pas";
    private $minMsg = "Le mot de passe saisi est trop court";
    private $maxMsg = "Le mot de passe saisi est trop long";

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
            'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
            'options' => array('translation_domain' => 'FOSUserBundle'),
            'first_options' => array('label' => 'form.new_password'),
            'second_options' => array('label' => 'form.new_password_confirmation'),
            'invalid_message' => $this->pwdMismatch,
            'constraints' => array(
                new NotBlank(array(
                    'message' => $this->blankPwd,
                    'groups' => array('AppResetting')
                )),
                new Length(array(
                    'min' => 2,
                    'max' => 50,
                    'minMessage' => $this->minMsg,
                    'maxMessage' => $this->maxMsg,
                    'groups' => array('AppResetting')
                ))
            )
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ResettingFormType';
    }

    public function getName(){
        return 'app_resetting_form';
    }
}