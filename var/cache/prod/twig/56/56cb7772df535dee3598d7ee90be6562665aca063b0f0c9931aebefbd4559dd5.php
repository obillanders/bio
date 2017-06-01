<?php

/* SonataMediaBundle:Form:media_widgets.html.twig */
class __TwigTemplate_22d2968f2e8c26bd83d64f77d307fbf01ae908437f9d6601f693a90139bcf989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_media_type_widget' => array($this, 'block_sonata_media_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_media_type_widget', $context, $blocks);
    }

    public function block_sonata_media_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            ";
        // line 4
        if (( !twig_test_empty(($context["value"] ?? null)) && $this->getAttribute(($context["value"] ?? null), "providerReference", array()))) {
            // line 5
            echo "                ";
            if ((array_key_exists("sonata_admin_enabled", $context) && ($context["sonata_admin_enabled"] ?? null))) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "admin", array()), "getConfigurationPool", array(), "method"), "adminByAdminCode", array(0 => "sonata.media.admin.media"), "method"), "generateObjectUrl", array(0 => "edit", 1 => ($context["value"] ?? null)), "method"), "html", null, true);
                echo "\">
                        <strong>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "name", array()), "html", null, true);
                echo "</strong>
                    </a>
                ";
            } else {
                // line 10
                echo "                    <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "name", array()), "html", null, true);
                echo "</strong>
                ";
            }
            // line 12
            echo "            ";
        } else {
            // line 13
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_linked_media", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong>
            ";
        }
        // line 15
        echo "        </div>

        <div class=\"col-md-3 pull-left\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_headline_information", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></div>
        <div class=\"col-md-2 pull-left\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_media", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            ";
        // line 22
        if (( !twig_test_empty(($context["value"] ?? null)) && $this->getAttribute(($context["value"] ?? null), "providerReference", array()))) {
            // line 23
            echo "                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    ";
            // line 24
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail(($context["value"] ?? null), "admin", array("class" => "img-polaroid media-object"));
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatamedia/grey.png"), "html", null, true);
            echo "\" class=\"img-polaroid media-object\" style=\"width: 85px; height: 85px\"/>
                </div>
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"col-md-3 pull-left\">
            ";
        // line 33
        if (( !twig_test_empty(($context["value"] ?? null)) && $this->getAttribute(($context["value"] ?? null), "providerReference", array()))) {
            // line 34
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_label_type", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["value"] ?? null), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
                <br />
                <strong>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_label_context", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["value"] ?? null), "context", array()), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 38
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_label_type", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "provider", array(), "array"), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
                <br />
                <strong>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_label_context", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "context", array(), "array"), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
            ";
        }
        // line 42
        echo "        </div>
        <div class=\"col-md-2 pull-left\">
            ";
        // line 44
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Form:media_widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  132 => 42,  125 => 40,  117 => 38,  110 => 36,  102 => 34,  100 => 33,  96 => 31,  90 => 28,  87 => 27,  83 => 25,  81 => 24,  78 => 23,  76 => 22,  69 => 18,  65 => 17,  61 => 15,  55 => 13,  52 => 12,  46 => 10,  40 => 7,  35 => 6,  32 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Form:media_widgets.html.twig", "/var/www/html/bio/vendor/sonata-project/media-bundle/Resources/views/Form/media_widgets.html.twig");
    }
}
