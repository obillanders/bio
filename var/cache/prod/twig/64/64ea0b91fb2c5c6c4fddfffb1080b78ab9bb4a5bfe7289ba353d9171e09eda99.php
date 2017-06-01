<?php

/* :default:index.html.twig */
class __TwigTemplate_dc1b6aaa604844bd92b09d746b65cbfa34ed183100fe8702fddb2f3de9b7112a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"mm-overlay\"></div>
    <div class=\"container-fluid\">
        ";
        // line 6
        $this->loadTemplate(":default:header.html.twig", ":default:index.html.twig", 6)->display($context);
        // line 7
        echo "
        <nav class=\"main_menu\">
            <div class=\"mm-toggle\">
                <div class=\"mm-toggle-ic ic-cross\"></div>
                <div class=\"mm-toggle-txt\">Menu</div>
            </div>

            ";
        // line 14
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("nridInterlocuteur", array("allow_safe_labels" => true, "template" => ":Menu:knp_menu.html.twig"));
        echo "
        </nav>
        <div class=\"main-content clearfix\">
            ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "        </div>
        ";
        // line 19
        $this->loadTemplate(":default:footer.html.twig", ":default:index.html.twig", 19)->display($context);
        // line 20
        echo "    </div>

";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  60 => 20,  58 => 19,  55 => 18,  53 => 17,  47 => 14,  38 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/var/www/html/bio/app/Resources/views/default/index.html.twig");
    }
}
