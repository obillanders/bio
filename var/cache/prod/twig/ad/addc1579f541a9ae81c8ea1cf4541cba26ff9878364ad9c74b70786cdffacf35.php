<?php

/* :Rdi:rdi_report_maj_digit.html.twig */
class __TwigTemplate_24c96e013ac39cb48426280487cc60706abc70c0d40d0c3533d48d216ed8b0ef extends Twig_Template
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

Canal contrat : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "officineName", array()), "html", null, true);
        echo "
Email prestation : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "officineCity", array()), "html", null, true);
        echo "
Téléphone prestation : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["report"] ?? null), "officinePhone", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return ":Rdi:rdi_report_maj_digit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Rdi:rdi_report_maj_digit.html.twig", "/var/www/html/bio/app/Resources/views/Rdi/rdi_report_maj_digit.html.twig");
    }
}
