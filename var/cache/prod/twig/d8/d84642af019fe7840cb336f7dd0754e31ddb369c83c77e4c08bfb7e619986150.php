<?php

/* SonataClassificationBundle:CategoryAdmin:list.html.twig */
class __TwigTemplate_7b292cbd77063540738113445b6602ff36d4b665830ee2ed0c4be4f3a3c2e086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataClassificationBundle:CategoryAdmin:list.html.twig", 12);
        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->loadTemplate("SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig", "SonataClassificationBundle:CategoryAdmin:list.html.twig", 15)->display(array("mode" => "list", "action" =>         // line 17
($context["action"] ?? null), "admin" =>         // line 18
($context["admin"] ?? null)));
    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:CategoryAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 18,  33 => 17,  31 => 15,  28 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataClassificationBundle:CategoryAdmin:list.html.twig", "/var/www/html/bio/vendor/sonata-project/classification-bundle/Resources/views/CategoryAdmin/list.html.twig");
    }
}
