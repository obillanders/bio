<?php

/* :Rdi:rdi_report_new_user.html.twig */
class __TwigTemplate_99dac9209d3c88ba18d20f39b7217997b44d0be41c107ae98446c02d5fcdc405 extends Twig_Template
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
        // line 1
        echo "Merci de prendre en compte l'inscription de cet utilisateur :

Nom Officine : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "officineName", array()), "html", null, true);
        echo "
Ville Officine : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "officineCity", array()), "html", null, true);
        echo "
Téléphone Officine : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "officinePhone", array()), "html", null, true);
        echo "

Nom Interlocuteur : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "lastname", array()), "html", null, true);
        echo "
Prénom Interlocuteur : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "firstname", array()), "html", null, true);
        echo "
Email/Login Interlocuteur : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "email", array()), "html", null, true);
        echo "
Opt-In : ";
        // line 10
        echo (($this->getAttribute(($context["report"] ?? null), "offres", array(), "any", true, true)) ? ("oui") : ("non"));
    }

    public function getTemplateName()
    {
        return ":Rdi:rdi_report_new_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Rdi:rdi_report_new_user.html.twig", "/var/www/html/bio/app/Resources/views/Rdi/rdi_report_new_user.html.twig");
    }
}
