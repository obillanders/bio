<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig */
class __TwigTemplate_52830b711303bedf424e5e45449506f7c7a944e95afc5a77b9bd7e394849fa40 extends Twig_Template
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
        // line 11
        echo "<script type=\"text/javascript\">
    jQuery('div#field_container_";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .sonata-ba-tabs').sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> div',
        stop: apply_position_value_";
        // line 16
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "
    });

    function apply_position_value_";
        // line 19
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "() {
        // update the input value position
        jQuery('div#field_container_";
        // line 21
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .sonata-ba-tabs .sonata-ba-field-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "sortable", array()), "html", null, true);
        echo "').each(function(index, element) {
            // remove the sortable handler and put it back
            var parent = jQuery(element).closest('.nav-tabs-custom');
            var tabs = parent.find('> .nav-tabs');
            jQuery('.sonata-ba-sortable-handler', tabs).remove();
            \$('<li class=\"sonata-ba-sortable-handler pull-right\"></li>')
                    .prepend('<span class=\"ui-icon ui-icon-grip-solid-horizontal\"></span>')
                    .appendTo(tabs);
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_";
        // line 32
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .sonata-ba-tabs .sonata-ba-field-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "sortable", array()), "html", null, true);
        echo " input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-";
        // line 38
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').bind('sonata.add_element', function() {
        apply_position_value_";
        // line 39
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "();
        jQuery('div#field_container_";
        // line 40
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .sonata-ba-tabs').sortable('refresh');
    });

    apply_position_value_";
        // line 43
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "();
</script>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 43,  79 => 40,  75 => 39,  71 => 38,  58 => 32,  40 => 21,  35 => 19,  29 => 16,  22 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig", "/var/www/html/bio/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig");
    }
}
