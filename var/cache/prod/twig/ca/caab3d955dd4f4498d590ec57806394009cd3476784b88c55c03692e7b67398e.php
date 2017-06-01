<?php

/* :Admin/actions:list__action_connect_as.html.twig */
class __TwigTemplate_cade33effaee83b9f431a72e9756a94ca69ba721c810e8bb1d24bf0e74c76e7a extends Twig_Template
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
        if (($context["object"] ?? null)) {
            // line 2
            echo "    <a class=\"btn btn-primary btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateObjectUrl", array(0 => "connectAs", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
            echo "\">Se connecter en tant que ...</a>
";
        }
    }

    public function getTemplateName()
    {
        return ":Admin/actions:list__action_connect_as.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Admin/actions:list__action_connect_as.html.twig", "/var/www/html/bio/app/Resources/views/Admin/actions/list__action_connect_as.html.twig");
    }
}
