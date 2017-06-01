<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0a2dd9084c4a5740296329cf35dd4418100066f79d74d31a0bde21a2c1ebeb44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57daacbb3f431b22881592a351140b9f1e3a8a434ad843aebeabbbcc028f6f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57daacbb3f431b22881592a351140b9f1e3a8a434ad843aebeabbbcc028f6f78->enter($__internal_57daacbb3f431b22881592a351140b9f1e3a8a434ad843aebeabbbcc028f6f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0aef90ad452f5b3842a5def08823f1b129344ac79fce83d7bd2f7ea23ee4d90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aef90ad452f5b3842a5def08823f1b129344ac79fce83d7bd2f7ea23ee4d90a->enter($__internal_0aef90ad452f5b3842a5def08823f1b129344ac79fce83d7bd2f7ea23ee4d90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57daacbb3f431b22881592a351140b9f1e3a8a434ad843aebeabbbcc028f6f78->leave($__internal_57daacbb3f431b22881592a351140b9f1e3a8a434ad843aebeabbbcc028f6f78_prof);

        
        $__internal_0aef90ad452f5b3842a5def08823f1b129344ac79fce83d7bd2f7ea23ee4d90a->leave($__internal_0aef90ad452f5b3842a5def08823f1b129344ac79fce83d7bd2f7ea23ee4d90a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bbb7cf301caddba5b9326b460c055ee216adeb3d74e5eca537112cf84a7297c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bbb7cf301caddba5b9326b460c055ee216adeb3d74e5eca537112cf84a7297c->enter($__internal_0bbb7cf301caddba5b9326b460c055ee216adeb3d74e5eca537112cf84a7297c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7237afca93d82df15b4757b0f4c73335f68b1fec5fe943274607ba22a7adb864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7237afca93d82df15b4757b0f4c73335f68b1fec5fe943274607ba22a7adb864->enter($__internal_7237afca93d82df15b4757b0f4c73335f68b1fec5fe943274607ba22a7adb864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7237afca93d82df15b4757b0f4c73335f68b1fec5fe943274607ba22a7adb864->leave($__internal_7237afca93d82df15b4757b0f4c73335f68b1fec5fe943274607ba22a7adb864_prof);

        
        $__internal_0bbb7cf301caddba5b9326b460c055ee216adeb3d74e5eca537112cf84a7297c->leave($__internal_0bbb7cf301caddba5b9326b460c055ee216adeb3d74e5eca537112cf84a7297c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5593a5096a1b3098442ead22eb77d802d1bfe54d17064c989fd9080fdaf49712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5593a5096a1b3098442ead22eb77d802d1bfe54d17064c989fd9080fdaf49712->enter($__internal_5593a5096a1b3098442ead22eb77d802d1bfe54d17064c989fd9080fdaf49712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f74256338130b627a37e72d329dd91af7ab2ab96010cd2d5c9b712b70a70071e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74256338130b627a37e72d329dd91af7ab2ab96010cd2d5c9b712b70a70071e->enter($__internal_f74256338130b627a37e72d329dd91af7ab2ab96010cd2d5c9b712b70a70071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f74256338130b627a37e72d329dd91af7ab2ab96010cd2d5c9b712b70a70071e->leave($__internal_f74256338130b627a37e72d329dd91af7ab2ab96010cd2d5c9b712b70a70071e_prof);

        
        $__internal_5593a5096a1b3098442ead22eb77d802d1bfe54d17064c989fd9080fdaf49712->leave($__internal_5593a5096a1b3098442ead22eb77d802d1bfe54d17064c989fd9080fdaf49712_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ceb2808bf0801a9a8627c5d32c37f9ff7002548f15411f46eb94c3b56531f03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb2808bf0801a9a8627c5d32c37f9ff7002548f15411f46eb94c3b56531f03d->enter($__internal_ceb2808bf0801a9a8627c5d32c37f9ff7002548f15411f46eb94c3b56531f03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_196c96c98235f4c9f9490a2375d15c5c1e8057abd4de9c4b18d2518af719d20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196c96c98235f4c9f9490a2375d15c5c1e8057abd4de9c4b18d2518af719d20d->enter($__internal_196c96c98235f4c9f9490a2375d15c5c1e8057abd4de9c4b18d2518af719d20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_196c96c98235f4c9f9490a2375d15c5c1e8057abd4de9c4b18d2518af719d20d->leave($__internal_196c96c98235f4c9f9490a2375d15c5c1e8057abd4de9c4b18d2518af719d20d_prof);

        
        $__internal_ceb2808bf0801a9a8627c5d32c37f9ff7002548f15411f46eb94c3b56531f03d->leave($__internal_ceb2808bf0801a9a8627c5d32c37f9ff7002548f15411f46eb94c3b56531f03d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/bio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
