<?php

/* :Pharmacien:pharmacien_services_ligne.html.twig */
class __TwigTemplate_3a488e9fa7d0fb69837c2c42c44f07bad5ed1d2bf5d8f86938bbd94cbd0d96df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", ":Pharmacien:pharmacien_services_ligne.html.twig", 1);
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
        echo "    <h1>Espace Pharmacien - Produits</h1>
";
    }

    public function getTemplateName()
    {
        return ":Pharmacien:pharmacien_services_ligne.html.twig";
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
        return new Twig_Source("", ":Pharmacien:pharmacien_services_ligne.html.twig", "/var/www/html/bio/app/Resources/views/Pharmacien/pharmacien_services_ligne.html.twig");
    }
}
