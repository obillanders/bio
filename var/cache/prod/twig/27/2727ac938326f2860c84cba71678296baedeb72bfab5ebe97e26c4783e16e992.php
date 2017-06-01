<?php

/* SonataMediaBundle:Block:block_gallery_list.html.twig */
class __TwigTemplate_60f927f11b791860c70bc535e5c0950ca989c3c70b4eaa613f6e7908069fe544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_gallery_list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"panel panel-default panel-gallery-list\">
        ";
        // line 5
        if ( !twig_test_empty($this->getAttribute(($context["settings"] ?? null), "title", array()))) {
            // line 6
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-globe\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "title", array()), "html", null, true);
            echo "</h4>
            </div>
        ";
        }
        // line 10
        echo "
        <div class=\"panel-body\">
            <div class=\"list-group\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pager"] ?? null), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 14
            echo "                    ";
            if ((($this->getAttribute(($context["settings"] ?? null), "mode", array()) == "admin") && array_key_exists("sonata_admin", $context))) {
                // line 15
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? null), "url", array(0 => "sonata.media.admin.gallery", 1 => "edit", 2 => array("id" => $this->getAttribute($context["gallery"], "id", array()), "context" => $this->getAttribute($context["gallery"], "context", array()))), "method"), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 16
                if ($this->getAttribute($context["gallery"], "enabled", array())) {
                    // line 17
                    echo "                                <span class=\"label label-success pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_gallery_enabled", array(), "SonataMediaBundle"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 19
                    echo "                                <span class=\"label label-danger pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_gallery_disabled", array(), "SonataMediaBundle"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 21
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 24
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_media_gallery_view", array("id" => $this->getAttribute($context["gallery"], "id", array()))), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 28
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "                    <span class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_galleries_found", array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>

            ";
        // line 33
        if ((($this->getAttribute(($context["settings"] ?? null), "mode", array()) == "admin") && array_key_exists("sonata_admin", $context))) {
            // line 34
            echo "                ";
            if ($this->getAttribute(($context["settings"] ?? null), "context", array())) {
                // line 35
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? null), "url", array(0 => "sonata.media.admin.gallery", 1 => "list", 2 => array("context" => $this->getAttribute(($context["settings"] ?? null), "context", array()))), "method"), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view_all_galleries", array(), "SonataMediaBundle"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 38
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? null), "url", array(0 => "sonata.media.admin.gallery", 1 => "list"), "method"), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view_all_galleries", array(), "SonataMediaBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 41
            echo "            ";
        }
        // line 42
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_gallery_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 42,  135 => 41,  126 => 38,  117 => 35,  114 => 34,  112 => 33,  108 => 31,  99 => 29,  94 => 28,  88 => 25,  83 => 24,  76 => 21,  70 => 19,  64 => 17,  62 => 16,  57 => 15,  54 => 14,  49 => 13,  44 => 10,  38 => 7,  35 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Block:block_gallery_list.html.twig", "/var/www/html/bio/vendor/sonata-project/media-bundle/Resources/views/Block/block_gallery_list.html.twig");
    }
}
