<?php

/* :Pharmacien:pharmacien_formations.html.twig */
class __TwigTemplate_569ac22fb25cfe01e113e4aa057c8ecc0c1368538e5a05c12c68c9bd3a17f7ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", ":Pharmacien:pharmacien_formations.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"h1-container\">
        <h1>
            <div class=\"ic-actus2 h1-col\"></div>
            <div class=\"h1-col\">
                <span class=\"h1-txt\">Mes programmes & formations</span>
            </div>
        </h1>
    </div>

    <div class=\"editorial-content\">
        Lorem ipsum...

    </div>
";
    }

    public function getTemplateName()
    {
        return ":Pharmacien:pharmacien_formations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Pharmacien:pharmacien_formations.html.twig", "/var/www/html/bio/app/Resources/views/Pharmacien/pharmacien_formations.html.twig");
    }
}
