<?php

/* SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_4d08ec16a34b1e53724273b7a82c4a2f09cf801cdc80953df9534cff17b7b6c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_model_autocomplete_ajax_request_parameters' => array($this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "
    <input type=\"text\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input\" value=\"\"";
        // line 14
        if ((array_key_exists("read_only", $context) && ($context["read_only"] ?? null))) {
            echo " readonly=\"readonly\"";
        }
        // line 15
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 16
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 17
        echo "    />

    <div id=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_hidden_inputs_wrap\">
        ";
        // line 20
        if (($context["multiple"] ?? null)) {
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 22
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
                    echo "[]\"";
                    if (($context["disabled"] ?? null)) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 25
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\"";
            if (($context["disabled"] ?? null)) {
                echo " disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["value"] ?? null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["value"] ?? null), 0, array(), "array"), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 27
        echo "</div>

    <script>
        (function (\$) {
            var autocompleteInput = \$('#";
        // line 31
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input');
            autocompleteInput.select2({";
        // line 33
        $context["allowClearPlaceholder"] = ((( !($context["multiple"] ?? null) &&  !($context["required"] ?? null))) ? (" ") : (""));
        // line 34
        echo "placeholder: '";
        echo twig_escape_filter($this->env, ((($context["placeholder"] ?? null)) ? (($context["placeholder"] ?? null)) : (($context["allowClearPlaceholder"] ?? null))), "html", null, true);
        echo "', // allowClear needs placeholder to work properly
                allowClear: ";
        // line 35
        echo ((($context["required"] ?? null)) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 36
        echo ((($context["disabled"] ?? null)) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 37
        echo ((((array_key_exists("read_only", $context) && ($context["read_only"] ?? null)) || ($this->getAttribute(($context["attr"] ?? null), "readonly", array(), "any", true, true) && $this->getAttribute(($context["attr"] ?? null), "readonly", array())))) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 38
        echo twig_escape_filter($this->env, ($context["minimum_input_length"] ?? null), "html", null, true);
        echo ",
                multiple: ";
        // line 39
        echo ((($context["multiple"] ?? null)) ? ("true") : ("false"));
        echo ",
                width: '";
        // line 40
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo "',
                dropdownAutoWidth: ";
        // line 41
        echo ((($context["dropdown_auto_width"] ?? null)) ? ("true") : ("false"));
        echo ",
                containerCssClass: '";
        // line 42
        echo twig_escape_filter($this->env, (($context["container_css_class"] ?? null) . " form-control"), "html", null, true);
        echo "',
                dropdownCssClass: '";
        // line 43
        echo twig_escape_filter($this->env, ($context["dropdown_css_class"] ?? null), "html", null, true);
        echo "',
                initSelection : function (element, callback) {
                    callback(element.val());
                },
                ajax: {
                    url:  '";
        // line 48
        echo twig_escape_filter($this->env, ((($context["url"] ?? null)) ? (($context["url"] ?? null)) : (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["route"] ?? null), "name", array()), (($this->getAttribute(($context["route"] ?? null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["route"] ?? null), "parameters", array()), array())) : (array()))), "js"))), "html", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: ";
        // line 50
        echo twig_escape_filter($this->env, ($context["quiet_millis"] ?? null), "html", null, true);
        echo ",
                    cache: ";
        // line 51
        echo ((($context["cache"] ?? null)) ? ("true") : ("false"));
        echo ",
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        ";
        // line 53
        $this->displayBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
        // line 93
        echo "                    },
                    results: function (data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data.items, more: data.more};
                    }
                },
                formatResult: function (item) {
                    return ";
        // line 100
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
                },
                formatSelection: function (item) {
                    return ";
        // line 103
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            });

            autocompleteInput.on('change', function(e) {

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
        // line 116
        if (($context["multiple"] ?? null)) {
            // line 117
            echo "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
            // line 124
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
        } else {
            // line 127
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden').val('');";
        }
        // line 129
        echo "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
        // line 137
        if (($context["multiple"] ?? null)) {
            // line 138
            echo "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
            // line 145
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[]\" value=\"'+el.id+'\" />');
                        }";
        } else {
            // line 148
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
        }
        // line 150
        echo "                }
            });

            // Initialise the autocomplete
            var data = [];";
        // line 156
        if ( !twig_test_empty(($context["value"] ?? null))) {
            // line 157
            echo "data =";
            if (($context["multiple"] ?? null)) {
                echo "[";
            }
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 159
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        echo ", ";
                    }
                    // line 160
                    echo "{id: '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["val"], "js"), "html", null, true);
                    echo "', label:'";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["value"] ?? null), "_labels", array(), "array"), $context["idx"], array(), "array"), "js"), "html", null, true);
                    echo "'}";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            if (($context["multiple"] ?? null)) {
                echo "]";
            }
            echo ";
            ";
        }
        // line 165
        echo "if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$('#";
        // line 170
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input').closest('form').submit(function()
            {
                \$('#";
        // line 172
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input').remove();
                return true;
            });
        })(jQuery);
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_sonata_type_model_autocomplete_ajax_request_parameters($context, array $blocks = array())
    {
        // line 54
        echo "                        return {
                                //search term
                                '";
        // line 56
        echo twig_escape_filter($this->env, ($context["req_param_name_search"] ?? null), "html", null, true);
        echo "': term,

                                // page size
                                '";
        // line 59
        echo twig_escape_filter($this->env, ($context["req_param_name_items_per_page"] ?? null), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, ($context["items_per_page"] ?? null), "html", null, true);
        echo ",

                                // page number
                                '";
        // line 62
        echo twig_escape_filter($this->env, ($context["req_param_name_page_number"] ?? null), "html", null, true);
        echo "': page,

                                // admin
                                ";
        // line 65
        if ( !(null === $this->getAttribute(($context["sonata_admin"] ?? null), "admin", array()))) {
            // line 66
            echo "                                    'uniqid': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "admin", array()), "uniqid", array()), "html", null, true);
            echo "',
                                    'admin_code': '";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "admin", array()), "code", array()), "html", null, true);
            echo "',
                                ";
        } elseif (        // line 68
($context["admin_code"] ?? null)) {
            // line 69
            echo "                                    'admin_code':  '";
            echo twig_escape_filter($this->env, ($context["admin_code"] ?? null), "html", null, true);
            echo "',
                                ";
        }
        // line 71
        echo "
                                 // subclass
                                ";
        // line 73
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) {
            // line 74
            echo "                                    'subclass': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "subclass"), "method"), "html", null, true);
            echo "',
                                ";
        }
        // line 76
        echo "
                                ";
        // line 77
        if ((($context["context"] ?? null) == "filter")) {
            // line 78
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["full_name"] ?? null), array("filter[" => "", "][value]" => "", "__" => ".")), "html", null, true);
            echo "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 81
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "'
                                ";
        }
        // line 83
        echo "
                                // other parameters
                                ";
        // line 85
        if ( !twig_test_empty(($context["req_params"] ?? null))) {
            echo ",";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["req_params"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 87
                echo "'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["key"], "js"), "html", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["value"], "js"), "html", null, true);
                echo "'";
                // line 88
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 91
        echo "                        };
                        ";
    }

    // line 100
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        echo "'<div class=\"";
        echo twig_escape_filter($this->env, ($context["dropdown_item_css_class"] ?? null), "html", null, true);
        echo "\">'+item.label+'<\\/div>'";
    }

    // line 103
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        echo "item.label";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 103,  443 => 100,  438 => 91,  421 => 88,  415 => 87,  398 => 86,  395 => 85,  391 => 83,  385 => 81,  378 => 78,  376 => 77,  373 => 76,  367 => 74,  365 => 73,  361 => 71,  355 => 69,  353 => 68,  349 => 67,  344 => 66,  342 => 65,  336 => 62,  328 => 59,  322 => 56,  318 => 54,  315 => 53,  304 => 172,  299 => 170,  292 => 165,  285 => 162,  271 => 160,  267 => 159,  256 => 158,  251 => 157,  249 => 156,  243 => 150,  238 => 148,  231 => 145,  222 => 138,  220 => 137,  210 => 129,  205 => 127,  200 => 124,  191 => 117,  189 => 116,  173 => 103,  167 => 100,  158 => 93,  156 => 53,  151 => 51,  147 => 50,  142 => 48,  134 => 43,  130 => 42,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  97 => 34,  95 => 33,  91 => 31,  85 => 27,  73 => 25,  57 => 22,  52 => 21,  50 => 20,  46 => 19,  42 => 17,  38 => 16,  34 => 15,  30 => 14,  27 => 13,  24 => 12,  22 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", "/var/www/html/bio/vendor/sonata-project/admin-bundle/Resources/views/Form/Type/sonata_type_model_autocomplete.html.twig");
    }
}
