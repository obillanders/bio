<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_77dcb927ba32c67f55401d739ffe32af5f94692895ce31da5cf64a631ce52b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => "Form/fields.html.twig"));
        // line 4
        echo "
<div class=\"register_box-form\">

    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"back_link-pillshaped\">
        <div class=\"ic-leftarrow\"></div>
        <div class=\"backlink\">Retour</div>
    </a>

    <h3 class=\"connexion_box-style-title connexion_box-style-title-noic\">
        <span class=\"connexion_box-style-title-txt\">
            <span class=\"mobile-border\">Inscription</span>
        </span>
    </h3>

    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register", "id" => "fos_user_registration_register", "novalidate" => "novalidate")));
        echo "

        <span class=\"register_box-form-step\">1</span>

        <fieldset>
            <legend>Vous</legend>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstname", array()), 'row', array("attr" => array("placeholder" => "Nom"), "label_attr" => array("class" => "ic-userlog text-hide")));
        // line 28
        echo "

            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastname", array()), 'row', array("attr" => array("placeholder" => "Prénom"), "label_attr" => array("class" => "ic-userlog text-hide")));
        // line 34
        echo "

            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("placeholder" => "E-mail"), "label_attr" => array("class" => "ic-mail text-hide")));
        // line 40
        echo "

        </fieldset>

        <fieldset>
            <legend class=\"register_box-form-legend\">Votre officine</legend>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "officineName", array()), 'row', array("attr" => array("placeholder" => "Nom"), "label_attr" => array("class" => "ic-home text-hide")));
        // line 50
        echo "

            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "officineCity", array()), 'row', array("attr" => array("placeholder" => "Ville"), "label_attr" => array("class" => "ic-city text-hide")));
        // line 56
        echo "

            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "officinePhone", array()), 'row', array("attr" => array("placeholder" => "Téléphone"), "label_attr" => array("class" => "ic-phone text-hide")));
        // line 62
        echo "
        </fieldset>

        <fieldset class=\"registration-form-validation\">
           <div class=\"form-group\">
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgu", array()), 'widget');
        echo "
                <p class=\"validation-conditions\">
                    J’accepte <a href=\"#\">les conditions générales
                    d’utilisation du site</a> et j’atteste être
                    un professionnel de santé
                </p>
               ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgu", array()), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "offres", array()), 'widget');
        echo "
                <p class=\"validation-conditions\">
                    Je souhaite recevoir des offres de services ou des informations promotionnelles de la part de Biogaran.
                </p>
            </div>
            <div class=\"recaptcha-container\">
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "recaptcha", array()), 'widget');
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "recaptcha", array()), 'errors');
        echo "
            </div>

        </fieldset>
        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

        <div>
            <input type=\"submit\" value=\"Validez\" class=\"btn btn-pink\" />
        </div>
        <div class=\"required-legend\">
            * champs obligatoires
        </div>
    ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    <div class=\"register_box-form-step_container\">
        <div class=\"register_box-form-step_col\">
            <span class=\"register_box-form-step\">2</span>
        </div>
        <div class=\"register_box-form-step_col\">
            <p>
                <span>Recevez vos identifiants</span>
                suite à l’appel d’un conseiller clientèle
            </p>
        </div>
    </div>

    <div class=\"register_box-form-step_container\">
        <div class=\"register_box-form-step_col\">
            <span class=\"register_box-form-step\">3</span>
        </div>
        <div class=\"register_box-form-step_col\">
            <p>
                <span>Connectez-vous pour profiter de tous</span>
                les avantages du site pro Biogaran
            </p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 95,  130 => 87,  123 => 83,  119 => 82,  110 => 76,  104 => 73,  95 => 67,  88 => 62,  86 => 58,  82 => 56,  80 => 52,  76 => 50,  74 => 46,  66 => 40,  64 => 36,  60 => 34,  58 => 30,  54 => 28,  52 => 24,  43 => 18,  29 => 7,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/html/bio/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
