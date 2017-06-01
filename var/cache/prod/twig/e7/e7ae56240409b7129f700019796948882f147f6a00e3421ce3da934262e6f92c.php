<?php

/* SonataMediaBundle:Block:block_media.html.twig */
class __TwigTemplate_a1433e980caf97d712e8da91463672036f99e3d75b9eb07870b1413f533cf281 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ($this->getAttribute(($context["settings"] ?? null), "title", array())) {
            // line 15
            echo "        <h3 class=\"sonata-media-block-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "title", array()), "html", null, true);
            echo "</h3>
    ";
        }
        // line 17
        echo "
    <div class=\"sonata-media-block-media-container\">
        ";
        // line 19
        if ((($context["media"] ?? null) && $this->getAttribute(($context["settings"] ?? null), "format", array()))) {
            // line 20
            echo "            ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media(($context["media"] ?? null), $this->getAttribute(($context["settings"] ?? null), "format", array()), array());
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "            ";
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  53 => 23,  51 => 22,  48 => 21,  45 => 20,  43 => 19,  39 => 17,  33 => 15,  30 => 14,  27 => 13,  18 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Block:block_media.html.twig", "/var/www/html/bio/vendor/sonata-project/media-bundle/Resources/views/Block/block_media.html.twig");
    }
}
