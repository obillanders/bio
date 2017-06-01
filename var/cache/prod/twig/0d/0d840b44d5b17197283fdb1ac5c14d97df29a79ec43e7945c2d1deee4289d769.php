<?php

/* SonataMediaBundle:Provider:view_vimeo.html.twig */
class __TwigTemplate_ca1eb06560038dd10b679d96a1b910bc7b56d8167e242ebd9887fd6056d4f3d7 extends Twig_Template
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
        // line 11
        echo "

<iframe
    id=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "id", array()), "html", null, true);
        echo "\"
    src=\"//player.vimeo.com/video/";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["media"] ?? null), "providerreference", array()), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "src", array()), "html", null, true);
        echo "\"
    width=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "width", array()), "html", null, true);
        echo "\"
    height=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "height", array()), "html", null, true);
        echo "\"
    frameborder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "frameborder", array()), "html", null, true);
        echo "\"
    ";
        // line 19
        if ( !twig_test_empty($this->getAttribute(($context["options"] ?? null), "class", array()))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "class", array()), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "    ";
        if ($this->getAttribute(($context["options"] ?? null), "allow_fullscreen", array())) {
            echo "allowfullscreen mozallowfullscreen webkitallowfullscreen";
        }
        echo ">
</iframe>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_vimeo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  46 => 19,  42 => 18,  38 => 17,  34 => 16,  28 => 15,  24 => 14,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Provider:view_vimeo.html.twig", "/var/www/html/bio/vendor/sonata-project/media-bundle/Resources/views/Provider/view_vimeo.html.twig");
    }
}
