<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_def9fb582c3804fdd15459b6760b1cc7bbf6420de52cb656511f3c79c5a8eace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_217c0f105fa2b6536abefc6cf372385b9431e198b415591aa76e3361851b4f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217c0f105fa2b6536abefc6cf372385b9431e198b415591aa76e3361851b4f6f->enter($__internal_217c0f105fa2b6536abefc6cf372385b9431e198b415591aa76e3361851b4f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ee1bcb8cc1d3125fc0d37a0636c363bdcb042c7efa84ac33ccd7d18ffaf5dde0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1bcb8cc1d3125fc0d37a0636c363bdcb042c7efa84ac33ccd7d18ffaf5dde0->enter($__internal_ee1bcb8cc1d3125fc0d37a0636c363bdcb042c7efa84ac33ccd7d18ffaf5dde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_217c0f105fa2b6536abefc6cf372385b9431e198b415591aa76e3361851b4f6f->leave($__internal_217c0f105fa2b6536abefc6cf372385b9431e198b415591aa76e3361851b4f6f_prof);

        
        $__internal_ee1bcb8cc1d3125fc0d37a0636c363bdcb042c7efa84ac33ccd7d18ffaf5dde0->leave($__internal_ee1bcb8cc1d3125fc0d37a0636c363bdcb042c7efa84ac33ccd7d18ffaf5dde0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19d326f8aac8584317dc89c7d8175a542cdebd9737ec82539afbc17d7ae97675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d326f8aac8584317dc89c7d8175a542cdebd9737ec82539afbc17d7ae97675->enter($__internal_19d326f8aac8584317dc89c7d8175a542cdebd9737ec82539afbc17d7ae97675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_66d764e18899ac26a2e604b8b140207daae97ff42cc7f3067690e5128b0bd7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d764e18899ac26a2e604b8b140207daae97ff42cc7f3067690e5128b0bd7a5->enter($__internal_66d764e18899ac26a2e604b8b140207daae97ff42cc7f3067690e5128b0bd7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_66d764e18899ac26a2e604b8b140207daae97ff42cc7f3067690e5128b0bd7a5->leave($__internal_66d764e18899ac26a2e604b8b140207daae97ff42cc7f3067690e5128b0bd7a5_prof);

        
        $__internal_19d326f8aac8584317dc89c7d8175a542cdebd9737ec82539afbc17d7ae97675->leave($__internal_19d326f8aac8584317dc89c7d8175a542cdebd9737ec82539afbc17d7ae97675_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c329b07c6e7249ebd8fe42aa7df5c3f219156931996d2bfe2594e7206b979fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c329b07c6e7249ebd8fe42aa7df5c3f219156931996d2bfe2594e7206b979fa->enter($__internal_8c329b07c6e7249ebd8fe42aa7df5c3f219156931996d2bfe2594e7206b979fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_21a6097afc9dae5fa4c2ff8174854138732b5f56599af07a3a492322704965b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a6097afc9dae5fa4c2ff8174854138732b5f56599af07a3a492322704965b2->enter($__internal_21a6097afc9dae5fa4c2ff8174854138732b5f56599af07a3a492322704965b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21a6097afc9dae5fa4c2ff8174854138732b5f56599af07a3a492322704965b2->leave($__internal_21a6097afc9dae5fa4c2ff8174854138732b5f56599af07a3a492322704965b2_prof);

        
        $__internal_8c329b07c6e7249ebd8fe42aa7df5c3f219156931996d2bfe2594e7206b979fa->leave($__internal_8c329b07c6e7249ebd8fe42aa7df5c3f219156931996d2bfe2594e7206b979fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_220fe8bac80c4d0730ff792251572288ac3cde6b0cb4cee16989ebbaafeb5d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220fe8bac80c4d0730ff792251572288ac3cde6b0cb4cee16989ebbaafeb5d8c->enter($__internal_220fe8bac80c4d0730ff792251572288ac3cde6b0cb4cee16989ebbaafeb5d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4bbfde5b7398ee3992c035c8b3469b26779277c24d8829c810857fcdacd100f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbfde5b7398ee3992c035c8b3469b26779277c24d8829c810857fcdacd100f4->enter($__internal_4bbfde5b7398ee3992c035c8b3469b26779277c24d8829c810857fcdacd100f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4bbfde5b7398ee3992c035c8b3469b26779277c24d8829c810857fcdacd100f4->leave($__internal_4bbfde5b7398ee3992c035c8b3469b26779277c24d8829c810857fcdacd100f4_prof);

        
        $__internal_220fe8bac80c4d0730ff792251572288ac3cde6b0cb4cee16989ebbaafeb5d8c->leave($__internal_220fe8bac80c4d0730ff792251572288ac3cde6b0cb4cee16989ebbaafeb5d8c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/bio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
