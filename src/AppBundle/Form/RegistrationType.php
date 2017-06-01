<?php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue as RecaptchaTrue;

class RegistrationType extends AbstractType
{
    private $blankMsg = "Ce champ ne peut pas être vide";
    private $minMsg = "La valeur saisie est trop courte";
    private $maxMsg = "La valeur saisie est trop longue";
    private $mailMsg = "Le mail saisi n'est pas valide";
    private $cguMsg = "Vous devez accepter les CGU";
    private $captchaMsg = "Veuillez cocher la case ci-dessus";

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('username')
            ->remove('plainPassword')
            ->add('firstname', TextType::class, array(
                'mapped' => false,
                'constraints' => array(
                    new NotBlank(array(
                        'message' => $this->blankMsg,
                        'groups' => array('AppRegistration')
                    )),
                    new Length(array(
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => $this->minMsg,
                        'maxMessage' => $this->maxMsg,
                        'groups' => array('AppRegistration')
                    ))
                )
            ))
            ->add('lastname', TextType::class, array(
                'mapped' => false,
                'constraints' => array(
                    new NotBlank(array(
                        'message' => $this->blankMsg,
                        'groups' => array('AppRegistration')
                    )),
                    new Length(array(
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => $this->minMsg,
                        'maxMessage' => $this->maxMsg,
                        'groups' => array('AppRegistration')
                    ))
                )
            ))
            ->add('email', EmailType::class, array(
                'constraints' => array(
                    new NotBlank(array(
                        'message' => $this->blankMsg,
                        'groups' => array('AppRegistration')
                    )),
                    new Length(array(
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => $this->minMsg,
                        'maxMessage' => $this->maxMsg,
                        'groups' => array('AppRegistration')
                    )),
                    new Email(array(
                        'message' => $this->mailMsg,
                        'groups' => array('AppRegistration')
                    ))
                )
            ))
            ->add('officineCity', TextType::class, array(
                'mapped' => false,
                'constraints' => array(
                    new NotBlank(array(
                        'message' => $this->blankMsg,
                        'groups' => array('AppRegistration')
                    )),
                    new Length(array(
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => $this->minMsg,
                        'maxMessage' => $this->maxMsg,
                        'groups' => array('AppRegistration')
                    ))
                )
            ))
            ->add('officineName', TextType::class, array(
                'mapped' => false,
                'constraints' => array(
                    new NotBlank(array(
                        'message' => $this->blankMsg,
                        'groups' => array('AppRegistration')
                    )),
                    new Length(array(
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => $this->minMsg,
                        'maxMessage' => $this->maxMsg,
                        'groups' => array('AppRegistration')
                    ))
                )
            ))
            ->add('officinePhone', TextType::class, array(
                'mapped' => false,
                'constraints' => array(
                    new NotBlank(array(
                        'message' => $this->blankMsg,
                        'groups' => array('AppRegistration')
                    )),
                    new Length(array(
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => $this->minMsg,
                        'maxMessage' => $this->maxMsg,
                        'groups' => array('AppRegistration')
                    ))
                )
            ))
            ->add('cgu', CheckboxType::class, array(
                'mapped' => false,
                'constraints' => array(
                    new IsTrue(array(
                        'message' => $this->cguMsg,
                        'groups' => array('AppRegistration')
                    ))
                )
            ))
            ->add('offres', CheckboxType::class)
            ->add('recaptcha', EWZRecaptchaType::class, array(
                'attr'        => array(
                    'options' => array(
                        'theme' => 'light',
                        'type'  => 'image',
                        'size'  => 'compact'
                    )
                ),
                'mapped'      => false,
                'constraints' => array(
                    new RecaptchaTrue(array(
                        'message' => $this->captchaMsg,
                        'groups' => array('AppRegistration')
                    ))
                )
            ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}
