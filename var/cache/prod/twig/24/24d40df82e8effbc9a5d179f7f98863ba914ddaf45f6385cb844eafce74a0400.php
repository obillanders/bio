<?php

/* SonataClassificationBundle:Block:base_block_collections.html.twig */
class __TwigTemplate_62554fc91cf8d77721386b7883361514938b8826b7f617060841fcafe7ad0152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'collection_link' => array($this, 'block_collection_link'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataClassificationBundle:Block:base_block_collections.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"panel panel-default panel-collection-list\">
        ";
        // line 16
        if ( !twig_test_empty($this->getAttribute(($context["settings"] ?? null), "title", array()))) {
            // line 17
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-inpanel\"></i> ";
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
        if (twig_length_filter($this->env, ($context["collections"] ?? null))) {
            // line 24
            echo "                <ul class=\"nav nav-pills nav-stacked\">
                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 26
                echo "                        <li";
                echo (((($context["collection"] ?? null) && ($this->getAttribute(($context["collection"] ?? null), "id", array()) == $this->getAttribute($context["col"], "id", array())))) ? (" class=\"active\"") : (""));
                echo ">
                            ";
                // line 27
                $this->displayBlock('collection_link', $context, $blocks);
                // line 30
                echo "                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </ul>
            ";
        } else {
            // line 34
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_collections_found", array(), "SonataClassificationBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 36
        echo "        </div>
    </div>
";
    }

    // line 27
    public function block_collection_link($context, array $blocks = array())
    {
        // line 28
        echo "                                ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["col"] ?? null), "name", array()), "html", null, true);
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:Block:base_block_collections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  109 => 27,  103 => 36,  97 => 34,  93 => 32,  78 => 30,  76 => 27,  71 => 26,  54 => 25,  51 => 24,  49 => 23,  45 => 21,  39 => 18,  36 => 17,  34 => 16,  31 => 15,  28 => 14,  19 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataClassificationBundle:Block:base_block_collections.html.twig", "/var/www/html/bio/vendor/sonata-project/classification-bundle/Resources/views/Block/base_block_collections.html.twig");
    }
}
