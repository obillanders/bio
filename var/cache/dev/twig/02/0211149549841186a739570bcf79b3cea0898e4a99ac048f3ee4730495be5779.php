<?php

/* ::base.html.twig */
class __TwigTemplate_05f3aca3cd4fbf41736aed3ac7cea733873b46be3de44c4207fab4c187340b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_description' => array($this, 'block_page_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'master_specif_stylesheet' => array($this, 'block_master_specif_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e73e9018cf2492307c8fa65a30257faf2a1f9704cfd20a9dccc495c4d67e4ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73e9018cf2492307c8fa65a30257faf2a1f9704cfd20a9dccc495c4d67e4ad4->enter($__internal_e73e9018cf2492307c8fa65a30257faf2a1f9704cfd20a9dccc495c4d67e4ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9d360652cad8993d5d1f0c72269d84c6336f405e74e7bcc9e7d7bb3e8efc970e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d360652cad8993d5d1f0c72269d84c6336f405e74e7bcc9e7d7bb3e8efc970e->enter($__internal_9d360652cad8993d5d1f0c72269d84c6336f405e74e7bcc9e7d7bb3e8efc970e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class=\"ie ie6\" lang=\"fr\"> <![endif]-->
<!--[if IE 7 ]>
<html class=\"ie ie7\" lang=\"fr\"> <![endif]-->
<!--[if IE 8 ]>
<html class=\"ie ie8\" lang=\"fr\"> <![endif]-->
<!--[if IE 9 ]>
<html class=\"ie ie9\" lang=\"fr\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"fr-FR\">
<!--<![endif]-->
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 17
        $this->displayBlock('page_description', $context, $blocks);
        echo "\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>

        <!--[if lt IE 9]>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fallback/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fallback/respond-1-4-2.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        <script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js\"></script>
        ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        <!--Specif css-->
        ";
        // line 29
        $this->displayBlock('master_specif_stylesheet', $context, $blocks);
        // line 30
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("isHome", $context)) ? (($context["isHome"] ?? $this->getContext($context, "isHome"))) : ((twig_replace_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "pathInfo", array()), "/"), "/", "-") . " page"))), "html", null, true);
        echo "\">
    <script>
        WebFont.load({
            custom: {
                families: ['bentonsans-ultracondensed, bentonsans-book']
            },
            timeout: 10000
        });
    </script>

        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
</html>
";
        
        $__internal_e73e9018cf2492307c8fa65a30257faf2a1f9704cfd20a9dccc495c4d67e4ad4->leave($__internal_e73e9018cf2492307c8fa65a30257faf2a1f9704cfd20a9dccc495c4d67e4ad4_prof);

        
        $__internal_9d360652cad8993d5d1f0c72269d84c6336f405e74e7bcc9e7d7bb3e8efc970e->leave($__internal_9d360652cad8993d5d1f0c72269d84c6336f405e74e7bcc9e7d7bb3e8efc970e_prof);

    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfd69eed12825a74effcc2273b6d95575235f7725baaa95b2a1e26896db08139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd69eed12825a74effcc2273b6d95575235f7725baaa95b2a1e26896db08139->enter($__internal_cfd69eed12825a74effcc2273b6d95575235f7725baaa95b2a1e26896db08139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed9e6799bfccc6b336da9efb3e0d779c274ea19bf1832918d877e201bddfb218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9e6799bfccc6b336da9efb3e0d779c274ea19bf1832918d877e201bddfb218->enter($__internal_ed9e6799bfccc6b336da9efb3e0d779c274ea19bf1832918d877e201bddfb218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ed9e6799bfccc6b336da9efb3e0d779c274ea19bf1832918d877e201bddfb218->leave($__internal_ed9e6799bfccc6b336da9efb3e0d779c274ea19bf1832918d877e201bddfb218_prof);

        
        $__internal_cfd69eed12825a74effcc2273b6d95575235f7725baaa95b2a1e26896db08139->leave($__internal_cfd69eed12825a74effcc2273b6d95575235f7725baaa95b2a1e26896db08139_prof);

    }

    // line 17
    public function block_page_description($context, array $blocks = array())
    {
        $__internal_8df3fbe5dfadd7bca0bdf2fa21d48e6f7f83df538dc5a4cb5f89a71e17838812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df3fbe5dfadd7bca0bdf2fa21d48e6f7f83df538dc5a4cb5f89a71e17838812->enter($__internal_8df3fbe5dfadd7bca0bdf2fa21d48e6f7f83df538dc5a4cb5f89a71e17838812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_description"));

        $__internal_9ee63c109add74cfb5406a4e6e5e3e5f66366e8abb9df2d3c422820760c4d609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee63c109add74cfb5406a4e6e5e3e5f66366e8abb9df2d3c422820760c4d609->enter($__internal_9ee63c109add74cfb5406a4e6e5e3e5f66366e8abb9df2d3c422820760c4d609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_description"));

        
        $__internal_9ee63c109add74cfb5406a4e6e5e3e5f66366e8abb9df2d3c422820760c4d609->leave($__internal_9ee63c109add74cfb5406a4e6e5e3e5f66366e8abb9df2d3c422820760c4d609_prof);

        
        $__internal_8df3fbe5dfadd7bca0bdf2fa21d48e6f7f83df538dc5a4cb5f89a71e17838812->leave($__internal_8df3fbe5dfadd7bca0bdf2fa21d48e6f7f83df538dc5a4cb5f89a71e17838812_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9338725fdb82d8357141d0974553c0aef0ed15adf50d11230b7dbc87a183bb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9338725fdb82d8357141d0974553c0aef0ed15adf50d11230b7dbc87a183bb21->enter($__internal_9338725fdb82d8357141d0974553c0aef0ed15adf50d11230b7dbc87a183bb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c0b4cdf7ac60fc2eda39d3d5cba8dd38f29e2ad61d19a7adf600aee90c46004c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b4cdf7ac60fc2eda39d3d5cba8dd38f29e2ad61d19a7adf600aee90c46004c->enter($__internal_c0b4cdf7ac60fc2eda39d3d5cba8dd38f29e2ad61d19a7adf600aee90c46004c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_c0b4cdf7ac60fc2eda39d3d5cba8dd38f29e2ad61d19a7adf600aee90c46004c->leave($__internal_c0b4cdf7ac60fc2eda39d3d5cba8dd38f29e2ad61d19a7adf600aee90c46004c_prof);

        
        $__internal_9338725fdb82d8357141d0974553c0aef0ed15adf50d11230b7dbc87a183bb21->leave($__internal_9338725fdb82d8357141d0974553c0aef0ed15adf50d11230b7dbc87a183bb21_prof);

    }

    // line 29
    public function block_master_specif_stylesheet($context, array $blocks = array())
    {
        $__internal_34f0f7de1f0d2cf833dd3a943eb61d301c34fcefa00995b63c831ee4047cc1ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f0f7de1f0d2cf833dd3a943eb61d301c34fcefa00995b63c831ee4047cc1ad->enter($__internal_34f0f7de1f0d2cf833dd3a943eb61d301c34fcefa00995b63c831ee4047cc1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "master_specif_stylesheet"));

        $__internal_736214756cd99a0e389a64569515a1fb5ce8ad876ee9021dfc3b2d886458fd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736214756cd99a0e389a64569515a1fb5ce8ad876ee9021dfc3b2d886458fd9f->enter($__internal_736214756cd99a0e389a64569515a1fb5ce8ad876ee9021dfc3b2d886458fd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "master_specif_stylesheet"));

        
        $__internal_736214756cd99a0e389a64569515a1fb5ce8ad876ee9021dfc3b2d886458fd9f->leave($__internal_736214756cd99a0e389a64569515a1fb5ce8ad876ee9021dfc3b2d886458fd9f_prof);

        
        $__internal_34f0f7de1f0d2cf833dd3a943eb61d301c34fcefa00995b63c831ee4047cc1ad->leave($__internal_34f0f7de1f0d2cf833dd3a943eb61d301c34fcefa00995b63c831ee4047cc1ad_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae455a970efe9bb7e4877646d6314f12571626a20c11363ff9156131d8cc65be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae455a970efe9bb7e4877646d6314f12571626a20c11363ff9156131d8cc65be->enter($__internal_ae455a970efe9bb7e4877646d6314f12571626a20c11363ff9156131d8cc65be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8dd17ed31778c5d4a9ff8435a11eaea5e7bf7290726bf1ff3a18431a5b451a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dd17ed31778c5d4a9ff8435a11eaea5e7bf7290726bf1ff3a18431a5b451a9->enter($__internal_f8dd17ed31778c5d4a9ff8435a11eaea5e7bf7290726bf1ff3a18431a5b451a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f8dd17ed31778c5d4a9ff8435a11eaea5e7bf7290726bf1ff3a18431a5b451a9->leave($__internal_f8dd17ed31778c5d4a9ff8435a11eaea5e7bf7290726bf1ff3a18431a5b451a9_prof);

        
        $__internal_ae455a970efe9bb7e4877646d6314f12571626a20c11363ff9156131d8cc65be->leave($__internal_ae455a970efe9bb7e4877646d6314f12571626a20c11363ff9156131d8cc65be_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebe6f730aab6d5641c9a722879736eb49d82b3ba5c146ad1351002e3f45f6dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe6f730aab6d5641c9a722879736eb49d82b3ba5c146ad1351002e3f45f6dbf->enter($__internal_ebe6f730aab6d5641c9a722879736eb49d82b3ba5c146ad1351002e3f45f6dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6dbe5be285647cf450567ad177c3ada0182a685eb0a7a7effdd0f41bf266e6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbe5be285647cf450567ad177c3ada0182a685eb0a7a7effdd0f41bf266e6dc->enter($__internal_6dbe5be285647cf450567ad177c3ada0182a685eb0a7a7effdd0f41bf266e6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendors.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6dbe5be285647cf450567ad177c3ada0182a685eb0a7a7effdd0f41bf266e6dc->leave($__internal_6dbe5be285647cf450567ad177c3ada0182a685eb0a7a7effdd0f41bf266e6dc_prof);

        
        $__internal_ebe6f730aab6d5641c9a722879736eb49d82b3ba5c146ad1351002e3f45f6dbf->leave($__internal_ebe6f730aab6d5641c9a722879736eb49d82b3ba5c146ad1351002e3f45f6dbf_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 46,  214 => 45,  205 => 44,  188 => 43,  171 => 29,  158 => 26,  149 => 25,  132 => 17,  114 => 16,  102 => 48,  99 => 44,  97 => 43,  84 => 33,  79 => 31,  76 => 30,  74 => 29,  71 => 28,  69 => 25,  63 => 22,  59 => 21,  52 => 17,  48 => 16,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class=\"ie ie6\" lang=\"fr\"> <![endif]-->
<!--[if IE 7 ]>
<html class=\"ie ie7\" lang=\"fr\"> <![endif]-->
<!--[if IE 8 ]>
<html class=\"ie ie8\" lang=\"fr\"> <![endif]-->
<!--[if IE 9 ]>
<html class=\"ie ie9\" lang=\"fr\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"fr-FR\">
<!--<![endif]-->
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <meta name=\"description\" content=\"{% block page_description %}{% endblock %}\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>

        <!--[if lt IE 9]>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/fallback/html5shiv.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/fallback/respond-1-4-2.min.js') }}\"></script>
        <![endif]-->
        <script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js\"></script>
        {% block stylesheets %}
            <link href=\"{{ asset('assets/css/main.css') }}\" rel=\"stylesheet\">
        {% endblock %}
        <!--Specif css-->
        {% block master_specif_stylesheet %}{% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/favicon.ico') }}\" />
    </head>
    <body class=\"{{ isHome is defined ? isHome : app.request.pathInfo|trim('/')|replace('/', '-')~\" page\" }}\">
    <script>
        WebFont.load({
            custom: {
                families: ['bentonsans-ultracondensed, bentonsans-book']
            },
            timeout: 10000
        });
    </script>

        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('assets/js/vendors.js') }}\"></script>
            <script src=\"{{ asset('assets/js/scripts.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/bio/app/Resources/views/base.html.twig");
    }
}
