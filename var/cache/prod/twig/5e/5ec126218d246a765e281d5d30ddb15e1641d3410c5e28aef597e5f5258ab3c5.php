<?php

/* SonataMediaBundle:Gallery:view.html.twig */
class __TwigTemplate_1eb5ff8f3cea913bd3649ed45984c9581fdb83a26fc42608579ad812df80e132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        // token for sonata_template_box, however the box is disabled
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 19
        echo "
<h1>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "name", array()), "html", null, true);
        echo "</h1>

<div class=\"sonata-media-gallery-media-list\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["gallery"] ?? null), "GalleryHasMedias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["galleryHasMedia"]) {
            // line 24
            echo "        <div class=\"media sonata-media-gallery-media-item\">
            <a class=\"pull-left sonata-media-gallery-media-item-link\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_media_view", array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier($this->getAttribute($context["galleryHasMedia"], "media", array())))), "html", null, true);
            echo "\">
                ";
            // line 26
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail($this->getAttribute($context["galleryHasMedia"], "media", array()), $this->getAttribute(($context["gallery"] ?? null), "defaultFormat", array()), array("class" => "media-object"));
            // line 27
            echo "            </a>
            <div class=\"media-body\">
                <h4 class=\"media-heading\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["galleryHasMedia"], "media", array()), "name", array()), "html", null, true);
            echo "</h4>
                <p>";
            // line 30
            echo $this->getAttribute($this->getAttribute($context["galleryHasMedia"], "media", array()), "description", array());
            echo "</p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryHasMedia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
    }

    // line 14
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => "gallery_view", "gallery" => ($context["gallery"] ?? null), "current_uri" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Gallery:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  78 => 15,  75 => 14,  70 => 34,  60 => 30,  56 => 29,  52 => 27,  50 => 26,  46 => 25,  43 => 24,  39 => 23,  33 => 20,  30 => 19,  28 => 14,  25 => 13,  23 => 12,  20 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Gallery:view.html.twig", "/var/www/html/bio/vendor/sonata-project/media-bundle/Resources/views/Gallery/view.html.twig");
    }
}
