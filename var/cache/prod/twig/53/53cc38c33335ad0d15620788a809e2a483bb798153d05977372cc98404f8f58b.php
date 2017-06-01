<?php

/* :Rdi:rdi_report_maj_info.html.twig */
class __TwigTemplate_e94bfe42140a92f50755e49a885687a8944c5e3b403de5cddc7e3c6cadf9e1aa extends Twig_Template
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
        echo "Merci de prendre en compte les modifications suivantes :

Civilité : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "civilite", array()), "html", null, true);
        echo "
Nom : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "lastname", array()), "html", null, true);
        echo "
Prénom : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "firstname", array()), "html", null, true);
        echo "
Téléphone : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "phone", array()), "html", null, true);
        echo "
Email/Login Interlocuteur : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "email", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return ":Rdi:rdi_report_maj_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Rdi:rdi_report_maj_info.html.twig", "/var/www/html/bio/app/Resources/views/Rdi/rdi_report_maj_info.html.twig");
    }
}
