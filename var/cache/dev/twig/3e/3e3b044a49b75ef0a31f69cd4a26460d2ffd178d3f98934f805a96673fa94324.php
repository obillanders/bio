<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0be865cf1cab3dcdd0483c5033f17076f1620da0d53cded623d6f256927793a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2aa7eb57c90a2cef54c8d3355757aa8231970f5733a8d8934ea470eb66ffc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2aa7eb57c90a2cef54c8d3355757aa8231970f5733a8d8934ea470eb66ffc1b->enter($__internal_c2aa7eb57c90a2cef54c8d3355757aa8231970f5733a8d8934ea470eb66ffc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bddd4bf4f8e0ea9216e23a9d1da08053541e019efb354e5a8172465614a752d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bddd4bf4f8e0ea9216e23a9d1da08053541e019efb354e5a8172465614a752d1->enter($__internal_bddd4bf4f8e0ea9216e23a9d1da08053541e019efb354e5a8172465614a752d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2aa7eb57c90a2cef54c8d3355757aa8231970f5733a8d8934ea470eb66ffc1b->leave($__internal_c2aa7eb57c90a2cef54c8d3355757aa8231970f5733a8d8934ea470eb66ffc1b_prof);

        
        $__internal_bddd4bf4f8e0ea9216e23a9d1da08053541e019efb354e5a8172465614a752d1->leave($__internal_bddd4bf4f8e0ea9216e23a9d1da08053541e019efb354e5a8172465614a752d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7b9af9a5b49bff2e4f5a5cb0e994a5df1428b2cfa15cef766dc58bc319883853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9af9a5b49bff2e4f5a5cb0e994a5df1428b2cfa15cef766dc58bc319883853->enter($__internal_7b9af9a5b49bff2e4f5a5cb0e994a5df1428b2cfa15cef766dc58bc319883853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_efac29a22220d34f1b35f5f9926ed74a2b1ffcd750197f1b6caf5088db6c0225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efac29a22220d34f1b35f5f9926ed74a2b1ffcd750197f1b6caf5088db6c0225->enter($__internal_efac29a22220d34f1b35f5f9926ed74a2b1ffcd750197f1b6caf5088db6c0225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_efac29a22220d34f1b35f5f9926ed74a2b1ffcd750197f1b6caf5088db6c0225->leave($__internal_efac29a22220d34f1b35f5f9926ed74a2b1ffcd750197f1b6caf5088db6c0225_prof);

        
        $__internal_7b9af9a5b49bff2e4f5a5cb0e994a5df1428b2cfa15cef766dc58bc319883853->leave($__internal_7b9af9a5b49bff2e4f5a5cb0e994a5df1428b2cfa15cef766dc58bc319883853_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/bio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
