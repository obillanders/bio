<?php

/* SonataFormatterBundle:Form:ckeditor.html.twig */
class __TwigTemplate_4bd8a8fe125adca7e11bda1f3a0e29cc5fa1eb58fcdba238c21eef58c3ac2428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ckeditor_plugins"] ?? null));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 2
            echo "\t";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ckeditor_templates"] ?? null));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 6
            echo "\t";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderTemplate($context["template_name"], $context["template"]);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget(($context["ckeditor_field_id"] ?? null), ($context["ckeditor_configuration"] ?? null), array("input_sync" => true));
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Form:ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  51 => 9,  48 => 8,  39 => 6,  35 => 5,  32 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Form:ckeditor.html.twig", "/var/www/html/bio/vendor/sonata-project/formatter-bundle/Resources/views/Form/ckeditor.html.twig");
    }
}
