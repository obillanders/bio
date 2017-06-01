<?php

/* SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig */
class __TwigTemplate_2830ca9982c011fda2bd661447b76f0a2d82df3e01579601dff687126d3b53fa extends Twig_Template
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
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? null), "sidemenu", array(0 => ($context["action"] ?? null)), "method"), array("currentClass" => "active"), "list");
        echo "
<div class=\"btn-group\">
    <a type=\"button\" class=\"navbar-btn btn ";
        // line 3
        if ((($context["mode"] ?? null) == "list")) {
            echo "btn-info active";
        } else {
            echo "btn-default";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "list", 1 => array("filter" => array("context" => array("value" => ((array_key_exists("current_category", $context)) ? ((($this->getAttribute($this->getAttribute(($context["current_category"] ?? null), "context", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["current_category"] ?? null), "context", array(), "any", false, true), "id", array()), "")) : (""))) : ("")))))), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-list\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classification.list_mode", array(), "SonataClassificationBundle"), "html", null, true);
        echo "
    </a>
    <a type=\"button\" class=\"navbar-btn btn ";
        // line 6
        if ((($context["mode"] ?? null) == "tree")) {
            echo "btn-info active";
        } else {
            echo "btn-default";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "tree"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-sitemap\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classification.tree_mode", array(), "SonataClassificationBundle"), "html", null, true);
        echo "
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  39 => 6,  34 => 4,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig", "/var/www/html/bio/vendor/sonata-project/classification-bundle/Resources/views/CategoryAdmin/list_tab_menu.html.twig");
    }
}
