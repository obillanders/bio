<?php

/* :Form:fields.html.twig */
class __TwigTemplate_997912b71bf4f790eb40edb5019131b6499f2ea3c00fdd744340a1ccac13fced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", ":Form:fields.html.twig", 1);
        $this->blocks = array(
            'base_row' => array($this, 'block_base_row'),
            'text_row' => array($this, 'block_text_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((twig_test_empty(($context["attr"] ?? null)) ||  !$this->getAttribute(($context["attr"] ?? null), "placeholder", array(), "any", true, true))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("placeholder" => ($context["name"] ?? null)));
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ((twig_test_empty(($context["label_attr"] ?? null)) ||  !$this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true))) {
            // line 9
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => "ic-roundedsquare"));
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    <div class=\"form-group ";
        // line 12
        if ( !twig_test_empty(($context["errors"] ?? null))) {
            echo "field-error";
        }
        echo "\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
        ";
        // line 14
        if (($context["required"] ?? null)) {
            echo "<span class=\"required \">*</span>";
        }
        // line 15
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(        // line 16
($context["form"] ?? null), 'label', array("label_attr" => array("class" => ("text-hide " . $this->getAttribute(        // line 18
($context["label_attr"] ?? null), "class", array())))));
        // line 19
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    </div>
";
    }

    // line 24
    public function block_text_row($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->displayBlock("base_row", $context, $blocks);
        echo "
";
    }

    // line 28
    public function block_choice_row($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        if (( !($context["expanded"] ?? null) &&  !($context["multiple"] ?? null))) {
            // line 30
            echo "        ";
            $this->displayBlock("base_row", $context, $blocks);
            echo "
    ";
        }
    }

    // line 34
    public function block_form_errors($context, array $blocks = array())
    {
        // line 35
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 36
            echo "<ul class=\"field-error-content\">";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 38
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return ":Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 40,  121 => 38,  117 => 37,  115 => 36,  113 => 35,  110 => 34,  102 => 30,  99 => 29,  96 => 28,  89 => 25,  86 => 24,  79 => 20,  76 => 19,  74 => 18,  73 => 16,  71 => 15,  67 => 14,  63 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  40 => 6,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Form:fields.html.twig", "/var/www/html/bio/app/Resources/views/Form/fields.html.twig");
    }
}
