<?php

/* :Pharmacien:pharmacien_engagements.html.twig */
class __TwigTemplate_7d2a847bb66195d628249e447a9b14e3829220d1573fd7a0705f30d0f0f80ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", ":Pharmacien:pharmacien_engagements.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'titre' => array($this, 'block_titre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Espace Pharmacien - Engagements</h1>
";
    }

    public function getTemplateName()
    {
        return ":Pharmacien:pharmacien_engagements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Pharmacien:pharmacien_engagements.html.twig", "/var/www/html/bio/app/Resources/views/Pharmacien/pharmacien_engagements.html.twig");
    }
}
