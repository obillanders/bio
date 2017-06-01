<?php

/* :Block:user_block.html.twig */
class __TwigTemplate_e8bdb163e0ba20a2d2b9dc82360f1a1e4ae64a464a78a917fd83569fb2c7faec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 5
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 6
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_logout");
            // line 7
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 8
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-right\">
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["_logout_uri"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, ($context["_logout_text"] ?? null), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
    }

    public function getTemplateName()
    {
        return ":Block:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 4,  23 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Block:user_block.html.twig", "/var/www/html/bio/app/Resources/views/Block/user_block.html.twig");
    }
}
