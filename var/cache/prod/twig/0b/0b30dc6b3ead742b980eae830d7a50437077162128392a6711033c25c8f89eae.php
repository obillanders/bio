<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_ac2481d3099d2134a5e6943a20abdd026c6bc25c7211bfb9e972fc0d3da005e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_description"] ?? null), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "row_align", array(), "any", true, true)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array()), "row_align", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), null)) : (null));
        // line 14
        echo "
    ";
        // line 15
        if (((($this->getAttribute($this->getAttribute(        // line 16
($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) &&         // line 17
($context["route"] ?? null)) && $this->getAttribute(        // line 18
($context["admin"] ?? null), "hasRoute", array(0 => ($context["route"] ?? null)), "method")) && $this->getAttribute(        // line 19
($context["admin"] ?? null), "hasAccess", array(0 => ($context["route"] ?? null), 1 => ((twig_in_filter(($context["route"] ?? null), array(0 => "show", 1 => "edit"))) ? (($context["object"] ?? null)) : (null))), "method"))) {
            // line 21
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateObjectUrl", array(0 => ($context["route"] ?? null), 1 => ($context["object"] ?? null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 22
            $this->displayBlock('field', $context, $blocks);
            // line 35
            echo "</a>
    ";
        } else {
            // line 37
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? null), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? null)), "method"));
            // line 38
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? null), "type", array()));
            // line 39
            echo "
        ";
            // line 40
            if ((($context["isEditable"] ?? null) && ($context["xEditableType"] ?? null))) {
                // line 41
                echo "            ";
                $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_set_object_field_value", twig_array_merge((($this->getAttribute(                // line 43
($context["admin"] ?? null), "getPersistentParameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["admin"] ?? null), "getPersistentParameters", array()), array())) : (array())), array("context" => "list", "field" => $this->getAttribute(                // line 45
($context["field_description"] ?? null), "name", array()), "objectId" => $this->getAttribute(                // line 46
($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "code" => $this->getAttribute(                // line 47
($context["admin"] ?? null), "code", array(0 => ($context["object"] ?? null)), "method"))));
                // line 50
                echo "
            ";
                // line 51
                if ((($this->getAttribute(($context["field_description"] ?? null), "type", array()) == "date") &&  !twig_test_empty(($context["value"] ?? null)))) {
                    // line 52
                    echo "                ";
                    $context["data_value"] = $this->getAttribute(($context["value"] ?? null), "format", array(0 => "Y-m-d"), "method");
                    // line 53
                    echo "            ";
                } elseif ((($this->getAttribute(($context["field_description"] ?? null), "type", array()) == "boolean") && twig_test_empty(($context["value"] ?? null)))) {
                    // line 54
                    echo "                ";
                    $context["data_value"] = 0;
                    // line 55
                    echo "            ";
                } else {
                    // line 56
                    echo "                ";
                    $context["data_value"] = ($context["value"] ?? null);
                    // line 57
                    echo "            ";
                }
                // line 58
                echo "
            <span ";
                // line 59
                $this->displayBlock('field_span_attributes', $context, $blocks);
                // line 64
                echo ">
                ";
                // line 65
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 68
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 70
            echo "    ";
        }
        // line 71
        echo "</td>
";
    }

    // line 22
    public function block_field($context, array $blocks = array())
    {
        // line 23
        echo "                ";
        ob_start();
        // line 24
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) {
            // line 25
            echo "                    ";
            $context["collapse"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array()), "collapse", array());
            // line 26
            echo "                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                          data-readmore-more=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                          data-readmore-less=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
                ";
        }
        // line 33
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 34
        echo "            ";
    }

    // line 59
    public function block_field_span_attributes($context, array $blocks = array())
    {
        echo "class=\"x-editable\"
                  data-type=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["xEditableType"] ?? null), "html", null, true);
        echo "\"
                  data-value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["data_value"] ?? null), "html", null, true);
        echo "\"
                  data-title=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["field_description"] ?? null), "label", array()), array(), $this->getAttribute(($context["field_description"] ?? null), "translationDomain", array())), "html", null, true);
        echo "\"
                  data-pk=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "\"
                  data-url=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 64,  186 => 63,  182 => 62,  178 => 61,  174 => 60,  169 => 59,  165 => 34,  162 => 33,  156 => 31,  149 => 29,  145 => 28,  141 => 27,  138 => 26,  135 => 25,  132 => 24,  129 => 23,  126 => 22,  121 => 71,  118 => 70,  112 => 68,  106 => 65,  103 => 64,  101 => 59,  98 => 58,  95 => 57,  92 => 56,  89 => 55,  86 => 54,  83 => 53,  80 => 52,  78 => 51,  75 => 50,  73 => 47,  72 => 46,  71 => 45,  70 => 43,  68 => 41,  66 => 40,  63 => 39,  60 => 38,  57 => 37,  53 => 35,  51 => 22,  47 => 21,  45 => 19,  44 => 18,  43 => 17,  42 => 16,  41 => 15,  38 => 14,  36 => 13,  24 => 12,  21 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:base_list_field.html.twig", "/var/www/html/bio/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_field.html.twig");
    }
}
