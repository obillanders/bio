<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_683e11a8e381da94843c72a769f3e72f05576d3095ee05e6b91d03efe70e157e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_63e4f2b977bac2576b7c5f66e3bf31a29cd6be00bd5a5a738ad02bc853acbd26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e4f2b977bac2576b7c5f66e3bf31a29cd6be00bd5a5a738ad02bc853acbd26->enter($__internal_63e4f2b977bac2576b7c5f66e3bf31a29cd6be00bd5a5a738ad02bc853acbd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_c6a2e13256e59357e06e73f876df378d39bb306797c2d636c45efa290aa81aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a2e13256e59357e06e73f876df378d39bb306797c2d636c45efa290aa81aa5->enter($__internal_c6a2e13256e59357e06e73f876df378d39bb306797c2d636c45efa290aa81aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e4f2b977bac2576b7c5f66e3bf31a29cd6be00bd5a5a738ad02bc853acbd26->leave($__internal_63e4f2b977bac2576b7c5f66e3bf31a29cd6be00bd5a5a738ad02bc853acbd26_prof);

        
        $__internal_c6a2e13256e59357e06e73f876df378d39bb306797c2d636c45efa290aa81aa5->leave($__internal_c6a2e13256e59357e06e73f876df378d39bb306797c2d636c45efa290aa81aa5_prof);

    }

    // line 3
    public function block_prehome_right_content($context, array $blocks = array())
    {
        $__internal_6b90f8dddcff13870fc277a542d3a5fad7bf6abb32b32bc006de6668400ca9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b90f8dddcff13870fc277a542d3a5fad7bf6abb32b32bc006de6668400ca9a4->enter($__internal_6b90f8dddcff13870fc277a542d3a5fad7bf6abb32b32bc006de6668400ca9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prehome_right_content"));

        $__internal_b2b1ec1761463a999186db033ed7722b559e0df373d2561aba288451b72d83b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b1ec1761463a999186db033ed7722b559e0df373d2561aba288451b72d83b9->enter($__internal_b2b1ec1761463a999186db033ed7722b559e0df373d2561aba288451b72d83b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prehome_right_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b2b1ec1761463a999186db033ed7722b559e0df373d2561aba288451b72d83b9->leave($__internal_b2b1ec1761463a999186db033ed7722b559e0df373d2561aba288451b72d83b9_prof);

        
        $__internal_6b90f8dddcff13870fc277a542d3a5fad7bf6abb32b32bc006de6668400ca9a4->leave($__internal_6b90f8dddcff13870fc277a542d3a5fad7bf6abb32b32bc006de6668400ca9a4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block prehome_right_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock %}

", "@FOSUser/Security/login.html.twig", "/var/www/html/bio/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
