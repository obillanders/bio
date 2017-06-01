<?php

/* SonataMediaBundle:Block:block_feature_media.html.twig */
class __TwigTemplate_d1e9d9f0b2c14afbf816efe2890b9281f94a86eb8da343a17fd238d55072b4b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_feature_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "
    <div class=\"sonata-media-block-feature-media-container\">

        <div class=\"sonata-media-block-feature-media-container-";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "orientation", array()), "html", null, true);
        echo "\">
            ";
        // line 18
        if ((($context["media"] ?? null) && $this->getAttribute(($context["settings"] ?? null), "format", array()))) {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media(($context["media"] ?? null), $this->getAttribute(($context["settings"] ?? null), "format", array()), array());
            // line 20
            echo "            ";
        } else {
            // line 21
            echo "                ";
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </div>

        ";
        // line 25
        if ($this->getAttribute(($context["settings"] ?? null), "title", array())) {
            // line 26
            echo "            <h3 class=\"sonata-media-block-feature-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "title", array()), "html", null, true);
            echo "</h3>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-media-block-feature-media-content\">
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "content", array()), "html", null, true);
        echo "
        </div>

        <div style=\"clear: both\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_feature_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  64 => 28,  58 => 26,  56 => 25,  52 => 23,  49 => 22,  47 => 21,  44 => 20,  41 => 19,  39 => 18,  35 => 17,  30 => 14,  27 => 13,  18 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Block:block_feature_media.html.twig", "/var/www/html/bio/vendor/sonata-project/media-bundle/Resources/views/Block/block_feature_media.html.twig");
    }
}
