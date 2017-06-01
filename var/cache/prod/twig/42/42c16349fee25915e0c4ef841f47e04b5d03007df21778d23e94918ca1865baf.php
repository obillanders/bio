<?php

/* :Form:contact.html.twig */
class __TwigTemplate_652ccc9b10e3fbcf9877dbb1f329d11f2346b5ccdea024c0c7ad6b6743de291f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":Form:contact.html.twig", 1);
        $this->blocks = array(
            'prehome_right_content' => array($this, 'block_prehome_right_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => "Form/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_prehome_right_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"register_box-form\">

    <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"back_link-pillshaped\">
        <div class=\"ic-leftarrow\"></div>
        <div class=\"backlink\">Retour</div>
    </a>

    <h3 class=\"connexion_box-style-title connexion_box-style-title-noic\">
        <span class=\"connexion_box-style-title-txt\">
            <span class=\"mobile-border\">Contact</span>
        </span>
    </h3>

    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("class" => "contact-form", "id" => "", "novalidate" => "novalidate")));
        echo "

        <fieldset>
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "civility", array()), 'row', array("label_attr" => array("class" => "ic-userlog")));
        // line 25
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("attr" => array("placeholder" => "Nom"), "label_attr" => array("class" => "ic-userlog")));
        // line 30
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstname", array()), 'row', array("attr" => array("placeholder" => "Prénom"), "label_attr" => array("class" => "ic-userlog")));
        // line 35
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("placeholder" => "E-mail"), "label_attr" => array("class" => "ic-mail")));
        // line 40
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'row', array("attr" => array("placeholder" => "Téléphone"), "label_attr" => array("class" => "ic-phone")));
        // line 45
        echo "
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'row', array("attr" => array("placeholder" => "Adresse"), "label_attr" => array("class" => "ic-city")));
        // line 50
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "city", array()), 'row', array("attr" => array("placeholder" => "Ville"), "label_attr" => array("class" => "ic-city")));
        // line 55
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zip", array()), 'row', array("attr" => array("placeholder" => "Code Postal"), "label_attr" => array("class" => "ic-city")));
        // line 60
        echo "
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", array()), 'row', array("attr" => array("placeholder" => "Votre message"), "label_attr" => array("class" => "invisible")));
        // line 65
        echo "

            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </fieldset>
        <div class=\"required-legend\">
            * champs obligatoires
        </div>
        <p class=\"form-mentions\">
            Les informations recueillies font l'objet d'un traitement informatique destiné à répondre à votre demande. Le destinataire des données est BIOGARAN. Conformément à la loi \"Informatique et Libertés\" du 6 janvier 1978, vous bénéficiez d'un droit d'accès et de rectification aux informations qui vous concernent. Si vous souhaitez exercer ce droit et obtenir communication des informations vous concernant, veuillez vous adresser à : BIOGARAN - 15, boulevard Charles de Gaulle - 92707 Colombes Cedex.
        </p>
    <div>
        <input type=\"submit\" value=\"Validez\" class=\"btn btn-pink\" />
    </div>

    ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return ":Form:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 79,  104 => 67,  100 => 65,  98 => 61,  95 => 60,  93 => 56,  90 => 55,  88 => 51,  85 => 50,  83 => 46,  80 => 45,  78 => 41,  75 => 40,  73 => 36,  70 => 35,  68 => 31,  65 => 30,  63 => 26,  60 => 25,  58 => 22,  52 => 19,  38 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Form:contact.html.twig", "/var/www/html/bio/app/Resources/views/Form/contact.html.twig");
    }
}
