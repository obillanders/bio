<?php

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_fb5e2941a782c3f14c4211ecd69481091f94997ae14e2e07ff731625be8ff96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataMediaBundle:MediaAdmin:list.html.twig", 12);
        $this->blocks = array(
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["tree"] = $this;
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_list_table($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["datagrid"] ?? null), "values", array(), "any", false, true), "category", array(), "array", false, true), "value", array(), "array", true, true)) {
            // line 42
            echo "        <div class=\"col-xs-6 col-md-3\">
            ";
            // line 43
            echo $context["tree"]->getnavigate_child(array(0 => ($context["root_category"] ?? null)), ($context["admin"] ?? null), true, $this->getAttribute($this->getAttribute($this->getAttribute(($context["datagrid"] ?? null), "values", array()), "category", array(), "array"), "value", array(), "array"), 1);
            echo "
        </div>
        <div class=\"col-xs-12 col-md-9 no-padding\">
            ";
            // line 46
            $this->displayParentBlock("list_table", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 49
            echo "        ";
            $this->displayParentBlock("list_table", $context, $blocks);
            echo "
    ";
        }
    }

    // line 16
    public function getnavigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__current_category_id__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "current_category_id" => $__current_category_id__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "    ";
            $context["tree"] = $this;
            // line 18
            echo "
    ";
            // line 19
            if ((($context["root"] ?? null) && (twig_length_filter($this->env, ($context["collection"] ?? null)) == 0))) {
                // line 20
                echo "        <div>
            <p class=\"bg-warning\">";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("warning_no_category", array(), $this->getAttribute(($context["admin"] ?? null), "translationdomain", array())), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            // line 24
            echo "    <ul";
            if (($context["root"] ?? null)) {
                echo " class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"";
            }
            echo ">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                if ( !(null === $context["element"])) {
                    // line 26
                    echo "            <li>
                <div class=\"sonata-tree__item";
                    // line 27
                    if (($this->getAttribute($context["element"], "id", array()) == ($context["current_category_id"] ?? null))) {
                        echo " is-active";
                    }
                    echo "\"";
                    if ((($context["depth"] ?? null) < 2)) {
                        echo " data-treeview-toggled";
                    }
                    echo ">
                    ";
                    // line 28
                    if (($this->getAttribute($context["element"], "parent", array()) || ($context["root"] ?? null))) {
                        echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                    }
                    // line 29
                    echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array()), array("category" => $this->getAttribute($context["element"], "id", array())))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                    echo "</a>
                </div>

                ";
                    // line 32
                    if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                        // line 33
                        echo "                    ";
                        echo $context["tree"]->getnavigate_child($this->getAttribute($context["element"], "children", array()), ($context["admin"] ?? null), false, ($context["current_category_id"] ?? null), (($context["depth"] ?? null) + 1));
                        echo "
                ";
                    }
                    // line 35
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";
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
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  139 => 35,  133 => 33,  131 => 32,  122 => 29,  118 => 28,  108 => 27,  105 => 26,  100 => 25,  93 => 24,  87 => 21,  84 => 20,  82 => 19,  79 => 18,  76 => 17,  60 => 16,  52 => 49,  46 => 46,  40 => 43,  37 => 42,  34 => 41,  31 => 40,  27 => 12,  25 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:MediaAdmin:list.html.twig", "/var/www/html/bio/vendor/sonata-project/media-bundle/Resources/views/MediaAdmin/list.html.twig");
    }
}
