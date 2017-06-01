<?php

/* SonataMediaBundle:MediaAdmin:inner_row_media.html.twig */
class __TwigTemplate_05fd9b4881d7c8e045fbad6f13b4199d2f431e44f0f6ae9920c70518df2375e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig", "SonataMediaBundle:MediaAdmin:inner_row_media.html.twig", 12);
        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_row($context, array $blocks = array())
    {
        // line 15
        echo "
    <div class=\"col-sm-12\">
        <div class=\"pull-left\">
            ";
        // line 18
        if (($this->getAttribute(($context["admin"] ?? null), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? null)), "method") && $this->getAttribute(($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method"))) {
            // line 19
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier(($context["object"] ?? null)))), "method"), "html", null, true);
            echo "\" style=\"float: left; margin-right: 6px;\">";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail(($context["object"] ?? null), "admin", array("width" => 90));
            echo "</a>
            ";
        } else {
            // line 21
            echo "                ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail(($context["object"] ?? null), "admin", array("height" => 90));
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </div>
        <span class=\"badge pull-right\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["object"] ?? null), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>
        ";
        // line 25
        if (($this->getAttribute(($context["admin"] ?? null), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? null)), "method") && $this->getAttribute(($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method"))) {
            // line 26
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier(($context["object"] ?? null)))), "method"), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["object"] ?? null), "name", array()), "html", null, true);
            echo "</strong></a>
        ";
        } else {
            // line 28
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["object"] ?? null), "name", array()), "html", null, true);
            echo "</strong>
        ";
        }
        // line 30
        echo "

        <br />
        ";
        // line 33
        if ($this->getAttribute(($context["object"] ?? null), "width", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["object"] ?? null), "width", array()), "html", null, true);
            if ($this->getAttribute(($context["object"] ?? null), "height", array())) {
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["object"] ?? null), "height", array()), "html", null, true);
            }
            echo "px";
        }
        // line 34
        echo "        ";
        if (($this->getAttribute(($context["object"] ?? null), "length", array()) > 0)) {
            // line 35
            echo "            (";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["object"] ?? null), "length", array()), "html", null, true);
            echo ")
        ";
        }
        // line 37
        echo "
        <br />

        ";
        // line 40
        if ( !twig_test_empty($this->getAttribute(($context["object"] ?? null), "authorname", array()))) {
            // line 41
            echo "           ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["object"] ?? null), "authorname", array()), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "
        ";
        // line 44
        if (( !twig_test_empty($this->getAttribute(($context["object"] ?? null), "copyright", array())) &&  !twig_test_empty($this->getAttribute(($context["object"] ?? null), "authorname", array())))) {
            // line 45
            echo "            ~
        ";
        }
        // line 47
        echo "
        ";
        // line 48
        if ( !twig_test_empty($this->getAttribute(($context["object"] ?? null), "copyright", array()))) {
            // line 49
            echo "            &copy; ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["object"] ?? null), "copyright", array()), "html", null, true);
            echo "
        ";
        }
        // line 51
        echo "
        ";
        // line 53
        echo "        ";
        // line 54
        echo "        ";
        // line 55
        echo "            ";
        // line 56
        echo "        ";
        // line 57
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:inner_row_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 57,  141 => 56,  139 => 55,  137 => 54,  135 => 53,  132 => 51,  126 => 49,  124 => 48,  121 => 47,  117 => 45,  115 => 44,  112 => 43,  106 => 41,  104 => 40,  99 => 37,  93 => 35,  90 => 34,  80 => 33,  75 => 30,  69 => 28,  61 => 26,  59 => 25,  55 => 24,  52 => 23,  49 => 22,  46 => 21,  38 => 19,  36 => 18,  31 => 15,  28 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:MediaAdmin:inner_row_media.html.twig", "/var/www/html/bio/vendor/sonata-project/media-bundle/Resources/views/MediaAdmin/inner_row_media.html.twig");
    }
}
