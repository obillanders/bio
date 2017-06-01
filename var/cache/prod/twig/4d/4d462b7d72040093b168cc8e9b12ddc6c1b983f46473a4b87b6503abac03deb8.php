<?php

/* :Menu:knp_menu.html.twig */
class __TwigTemplate_4d263d34fbbf0d20538ddff0b62e3c84950ec45f8196866f2a657f83f485307a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", ":Menu:knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? null), "childrenAttributes", array());
        // line 19
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? null), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 24
            echo "        ";
            $context["knp_menu"] = $this;
            // line 25
            echo "        ";
            if ( !(null === $this->getAttribute(($context["item"] ?? null), "parent", array()))) {
                // line 26
                echo "            <div class=\"mm-ssmenu\">
                <span class=\"ic-cross mm-ssmenu-close\"></span>
                <div class=\"mm-ssmenu-inside\">
                    <div class=\"mm-ssmenu-inside-header\">
                        ";
                // line 30
                if ($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method")) {
                    // line 31
                    echo "                            <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "html", null, true);
                    echo "\"></div>
                        ";
                }
                // line 33
                echo "                        ";
                $this->displayBlock("label", $context, $blocks);
                echo "
                    </div>
        ";
            }
            // line 36
            echo "                <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? null));
            echo ">
                    ";
            // line 37
            $this->displayBlock("children", $context, $blocks);
            echo "
                </ul>
        ";
            // line 39
            if ( !(null === $this->getAttribute(($context["item"] ?? null), "parent", array()))) {
                // line 40
                echo "                </div>
            </div>
        ";
            }
            // line 43
            echo "    ";
        }
    }

    // line 46
    public function block_children($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        // line 48
        echo "    ";
        $context["currentOptions"] = ($context["options"] ?? null);
        // line 49
        echo "    ";
        $context["currentItem"] = ($context["item"] ?? null);
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        if ( !(null === $this->getAttribute(($context["options"] ?? null), "depth", array()))) {
            // line 52
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? null), "depth", array()) - 1)));
            // line 53
            echo "    ";
        }
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        if (( !(null === $this->getAttribute(($context["options"] ?? null), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? null), "matchingDepth", array()) > 0))) {
            // line 56
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? null), "matchingDepth", array()) - 1)));
            // line 57
            echo "    ";
        }
        // line 58
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
            // line 59
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
        // line 61
        echo "    ";
        // line 62
        echo "    ";
        $context["item"] = ($context["currentItem"] ?? null);
        // line 63
        echo "    ";
        $context["options"] = ($context["currentOptions"] ?? null);
    }

    // line 66
    public function block_item($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? null), "displayed", array())) {
            // line 68
            echo "        ";
            // line 69
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 70
            if ($this->getAttribute(($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method")) {
                // line 71
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 72
($context["matcher"] ?? null), "isAncestor", array(0 => ($context["item"] ?? null), 1 => $this->getAttribute(($context["options"] ?? null), "matchingDepth", array())), "method")) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "ancestorClass", array())));
            }
            // line 75
            if ($this->getAttribute(($context["item"] ?? null), "actsLikeFirst", array())) {
                // line 76
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "firstClass", array())));
            }
            // line 78
            if ($this->getAttribute(($context["item"] ?? null), "actsLikeLast", array())) {
                // line 79
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "lastClass", array())));
            }
            // line 81
            echo "
        ";
            // line 83
            echo "        ";
            if (($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? null), "depth", array()) === 0))) {
                // line 84
                echo "            ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? null), "branch_class", array())) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
                    // line 85
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "branch_class", array())));
                    // line 86
                    echo "            ";
                }
                // line 87
                echo "        ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? null), "leaf_class", array()))) {
                // line 88
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "leaf_class", array())));
            }
            // line 91
            $context["attributes"] = $this->getAttribute(($context["item"] ?? null), "attributes", array());
            // line 92
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 93
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
            }
            // line 95
            echo "        ";
            // line 96
            echo "        ";
            $context["knp_menu"] = $this;
            // line 97
            echo "        <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? null));
            echo ">";
            // line 98
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method") || $this->getAttribute(($context["options"] ?? null), "currentAsLink", array())))) {
                // line 99
                echo "                ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 101
                echo "                ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 103
            echo "            ";
            // line 104
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 105
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? null), "level", array()))));
            // line 106
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? null), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")));
            // line 107
            echo "            ";
            $this->displayBlock("list", $context, $blocks);
            echo "
        </li>
    ";
        }
    }

    // line 112
    public function block_linkElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        // line 113
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? null), "linkAttributes", array()));
        echo ">
        ";
        // line 114
        if (($this->getAttribute($this->getAttribute(($context["item"] ?? null), "parent", array()), "name", array()) == "root")) {
            // line 115
            echo "            <div class='mm-root-link-inside'>
                ";
            // line 116
            if ($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method")) {
                // line 117
                echo "                    <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 119
            echo "
        ";
        }
        // line 121
        echo "            <div class=\"mm-link-txt\">
                ";
        // line 122
        $this->displayBlock("label", $context, $blocks);
        echo "
            </div>
        ";
        // line 124
        if (($this->getAttribute($this->getAttribute(($context["item"] ?? null), "parent", array()), "name", array()) == "root")) {
            // line 125
            echo "            </div>
        ";
        }
        // line 127
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["item"] ?? null), "parent", array()), "name", array()) != "root")) {
            // line 128
            echo "            <div class=\"ic-plus\"></div>
        ";
        }
        // line 130
        echo "    </a>
";
    }

    // line 133
    public function block_spanElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? null), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 135
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute(($context["options"] ?? null), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? null), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "label", array()), "html", null, true);
        }
    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
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
        return ":Menu:knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 6,  377 => 5,  372 => 4,  360 => 3,  350 => 135,  339 => 133,  334 => 130,  330 => 128,  327 => 127,  323 => 125,  321 => 124,  316 => 122,  313 => 121,  309 => 119,  303 => 117,  301 => 116,  298 => 115,  296 => 114,  289 => 113,  285 => 112,  276 => 107,  274 => 106,  272 => 105,  270 => 104,  268 => 103,  264 => 101,  260 => 99,  258 => 98,  254 => 97,  251 => 96,  249 => 95,  246 => 93,  244 => 92,  242 => 91,  239 => 88,  236 => 87,  233 => 86,  231 => 85,  228 => 84,  225 => 83,  222 => 81,  219 => 79,  217 => 78,  214 => 76,  212 => 75,  209 => 73,  207 => 72,  205 => 71,  203 => 70,  201 => 69,  199 => 68,  196 => 67,  193 => 66,  188 => 63,  185 => 62,  183 => 61,  166 => 59,  148 => 58,  145 => 57,  142 => 56,  139 => 55,  137 => 54,  134 => 53,  131 => 52,  128 => 51,  126 => 50,  123 => 49,  120 => 48,  118 => 47,  115 => 46,  110 => 43,  105 => 40,  103 => 39,  98 => 37,  93 => 36,  86 => 33,  80 => 31,  78 => 30,  72 => 26,  69 => 25,  66 => 24,  63 => 23,  60 => 22,  55 => 19,  52 => 18,  49 => 17,  41 => 13,  38 => 12,  35 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Menu:knp_menu.html.twig", "/var/www/html/bio/app/Resources/views/Menu/knp_menu.html.twig");
    }
}
