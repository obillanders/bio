<?php

/* SonataClassificationBundle:Block:base_block_categories.html.twig */
class __TwigTemplate_dec2c5f23ad332827c33ba753dce85b904543de5f3816a4f01ed1541fb4d4cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'link_category' => array($this, 'block_link_category'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataClassificationBundle:Block:base_block_categories.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"panel panel-default panel-category-list\">
        ";
        // line 16
        if ( !twig_test_empty($this->getAttribute(($context["settings"] ?? null), "title", array()))) {
            // line 17
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-folder-open-o\"></i> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "title", array()), "html", null, true);
            echo "</h4>
            </div>
        ";
        }
        // line 21
        echo "
        <div class=\"panel-body\">
            ";
        // line 23
        if (twig_length_filter($this->env, $this->getAttribute(($context["root"] ?? null), "children", array()))) {
            // line 24
            echo "                <ul class=\"nav nav-pills nav-stacked\">
                    ";
            // line 25
            $context["item"] = ($context["root"] ?? null);
            // line 26
            echo "                    ";
            $context["active"] = ($context["category"] ?? null);
            // line 27
            echo "                    ";
            $this->displayBlock("children", $context, $blocks);
            echo "
                </ul>
            ";
        } else {
            // line 30
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_categories_found", array(), "SonataClassificationBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 32
        echo "        </div>
    </div>
";
    }

    // line 44
    public function block_list($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", array()))) {
            // line 46
            echo "        <ul>
            ";
            // line 47
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
    }

    // line 52
    public function block_children($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        $context["currentItem"] = ($context["item"] ?? null);
        // line 55
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? null), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        $context["item"] = ($context["currentItem"] ?? null);
    }

    // line 62
    public function block_item($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        $context["classes"] = array();
        // line 65
        if ((($context["active"] ?? null) && ($this->getAttribute(($context["active"] ?? null), "id", array()) == $this->getAttribute(($context["item"] ?? null), "id", array())))) {
            // line 66
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "active"));
        }
        // line 68
        if ($this->getAttribute(($context["loop"] ?? null), "first", array())) {
            // line 69
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "first"));
        }
        // line 71
        if ($this->getAttribute(($context["loop"] ?? null), "last", array())) {
            // line 72
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "last"));
        }
        // line 75
        $context["attributes"] = array();
        // line 76
        if ( !twig_test_empty(($context["classes"] ?? null))) {
            // line 77
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
        }
        // line 79
        echo "    <li";
        echo $this->getAttribute($this, "attributes", array(0 => ($context["attributes"] ?? null)), "method");
        echo ">
        ";
        // line 80
        $this->displayBlock("link_category", $context, $blocks);
        echo "
        ";
        // line 82
        echo "        ";
        $this->displayBlock("list", $context, $blocks);
        echo "
    </li>
";
    }

    // line 86
    public function block_link_category($context, array $blocks = array())
    {
        $this->displayBlock("label", $context, $blocks);
    }

    // line 88
    public function block_label($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "name", array()), "html", null, true);
    }

    // line 36
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 37
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 38
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 39
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:Block:base_block_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 39,  224 => 38,  219 => 37,  207 => 36,  201 => 88,  195 => 86,  187 => 82,  183 => 80,  178 => 79,  175 => 77,  173 => 76,  171 => 75,  168 => 72,  166 => 71,  163 => 69,  161 => 68,  158 => 66,  156 => 65,  154 => 64,  152 => 63,  149 => 62,  144 => 59,  142 => 58,  125 => 56,  107 => 55,  104 => 54,  102 => 53,  99 => 52,  91 => 47,  88 => 46,  85 => 45,  82 => 44,  76 => 32,  70 => 30,  63 => 27,  60 => 26,  58 => 25,  55 => 24,  53 => 23,  49 => 21,  43 => 18,  40 => 17,  38 => 16,  35 => 15,  32 => 14,  23 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataClassificationBundle:Block:base_block_categories.html.twig", "/var/www/html/bio/vendor/sonata-project/classification-bundle/Resources/views/Block/base_block_categories.html.twig");
    }
}
