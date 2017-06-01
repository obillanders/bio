<?php

/* SonataFormatterBundle:Ckeditor:upload.html.twig */
class __TwigTemplate_6c15c2420b9f65b65d4f3465cf75c47a83d0b1c5a1fac75a786669fc4dffdd1c extends Twig_Template
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
        // line 1
        echo "<script>window.parent.CKEDITOR.tools.callFunction(";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \"";
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path(($context["object"] ?? null), twig_escape_filter($this->env, "reference", "js"));
        echo "\");</script>
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Ckeditor:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Ckeditor:upload.html.twig", "/var/www/html/bio/vendor/sonata-project/formatter-bundle/Resources/views/Ckeditor/upload.html.twig");
    }
}
