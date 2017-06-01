<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_2fbfba2b16da1b25ae3c9bb36928db86a005afef40a8fcbfa7884d45345a3036 extends Twig_Template
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
<div class=\"connexion_box request-password\">
    ";
        // line 7
        echo "    ";
        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"back_link-pillshaped\">
        <div class=\"ic-leftarrow\"></div>
        <div class=\"backlink\">Retour</div>
    </a>
    <span class=\"ic-lock\"></span>
    <span class=\"roundedsquare\"></span>
    <h3 class=\"connexion_box-style-title\">
        <span>Connexion</span><br />
        Mot de passe perdu
    </h3>
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => ($context["token"] ?? null))), "attr" => array("class" => "fos_user_resetting_reset", "novalidate" => "novalidate")));
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("placeholder" => "Mot de passe"), "label_attr" => array("class" => "ic-lock2 text-hide")));
        // line 28
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("placeholder" => "Confirmez le mot de passe"), "label_attr" => array("class" => "ic-lock2 text-hide")));
        // line 33
        echo "
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    <input type=\"submit\" value=\"Validez\" class=\"btn btn-pink g-recaptcha\" data-sitekey=\"6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI\" data-callback='onSubmit' />
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 36,  58 => 34,  55 => 33,  53 => 29,  50 => 28,  48 => 24,  44 => 23,  30 => 13,  28 => 7,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:reset_content.html.twig", "/var/www/html/bio/app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
