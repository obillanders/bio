<?php

/* ::base.html.twig */
class __TwigTemplate_0ec6ae34561effc4095bec75c2fef3d07eb1864689af6c7cf9162b60e951b7a9 extends Twig_Template
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
        echo twig_escape_filter($this->env, ((array_key_exists("isHome", $context)) ? (($context["isHome"] ?? null)) : ((twig_replace_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "pathInfo", array()), "/"), "/", "-") . " page"))), "html", null, true);
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
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 17
    public function block_page_description($context, array $blocks = array())
    {
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 29
    public function block_master_specif_stylesheet($context, array $blocks = array())
    {
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendors.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
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
        return array (  141 => 46,  136 => 45,  133 => 44,  128 => 43,  123 => 29,  116 => 26,  113 => 25,  108 => 17,  102 => 16,  96 => 48,  93 => 44,  91 => 43,  78 => 33,  73 => 31,  70 => 30,  68 => 29,  65 => 28,  63 => 25,  57 => 22,  53 => 21,  46 => 17,  42 => 16,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/var/www/html/bio/app/Resources/views/base.html.twig");
    }
}
