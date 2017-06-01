<?php

/* SonataClassificationBundle:Block:base_block_tags.html.twig */
class __TwigTemplate_51e8d2e8c62fab445698369ccf2f9d703f029e97eadbeedc6479eb880f02c3dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'tag_link' => array($this, 'block_tag_link'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataClassificationBundle:Block:base_block_tags.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"panel panel-default panel-tag-list\">
        ";
        // line 16
        if ( !twig_test_empty($this->getAttribute(($context["settings"] ?? null), "title", array()))) {
            // line 17
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-tags\"></i> ";
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
        if (twig_length_filter($this->env, ($context["tags"] ?? null))) {
            // line 24
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 25
                echo "                    ";
                $this->displayBlock('tag_link', $context, $blocks);
                // line 28
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            ";
        } else {
            // line 30
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_tags_found", array(), "SonataClassificationBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 32
        echo "        </div>
    </div>
";
    }

    // line 25
    public function block_tag_link($context, array $blocks = array())
    {
        // line 26
        echo "                        <span class=\"label label-default\"><i class=\"fa fa-tag\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["t"] ?? null), "name", array()), "html", null, true);
        echo "</span>
                    ";
    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:Block:base_block_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  101 => 25,  95 => 32,  89 => 30,  86 => 29,  72 => 28,  69 => 25,  51 => 24,  49 => 23,  45 => 21,  39 => 18,  36 => 17,  34 => 16,  31 => 15,  28 => 14,  19 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataClassificationBundle:Block:base_block_tags.html.twig", "/var/www/html/bio/vendor/sonata-project/classification-bundle/Resources/views/Block/base_block_tags.html.twig");
    }
}
