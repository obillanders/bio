<?php

/* SonataFormatterBundle:Ckeditor:browser.html.twig */
class __TwigTemplate_73baee9019d8e06c73d43209c65ab4509f2e39926bc394ce9fe27b9e8996454c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle::empty_layout.html.twig", "SonataFormatterBundle:Ckeditor:browser.html.twig", 12);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'preview' => array($this, 'block_preview'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_footer' => array($this, 'block_list_footer'),
            'pager_results' => array($this, 'block_pager_results'),
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["ckParameters"] = array("CKEditor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"));
        // line 47
        $context["tree"] = $this;
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            padding: 20px 15px;
        }
        .wrapper {
            background: #ecf0f5 !important;
        }
    </style>

";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(function () {
            \$(\".select\").click(function (e) {
                e.preventDefault();
                window.opener.CKEDITOR.tools.callFunction(";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \$(this).attr(\"href\"));
                window.close();
            });
        });
    </script>
";
    }

    // line 45
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 70
    public function block_list_table($context, array $blocks = array())
    {
        // line 71
        echo "    <div class=\"col-xs-6 col-md-3\">
        ";
        // line 72
        if ( !(null === ($context["root_category"] ?? null))) {
            // line 73
            echo "            ";
            echo $context["tree"]->getnavigate_child(array(0 => ($context["root_category"] ?? null)), ($context["admin"] ?? null), true, $this->getAttribute($this->getAttribute($this->getAttribute(($context["datagrid"] ?? null), "values", array()), "category", array(), "array"), "value", array(), "array"), 1);
            echo "
        ";
        }
        // line 75
        echo "    </div>

    <div class=\"col-xs-12 col-md-9\">
        <div class=\"box box-primary\">
            <div class=\"box-body ";
        // line 79
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => ($context["admin"] ?? null))));
        echo "

                ";
        // line 82
        $this->displayBlock('list_header', $context, $blocks);
        // line 83
        echo "
                ";
        // line 84
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            // line 85
            echo "                    <table class=\"table table-bordered table-striped\">
                        ";
            // line 86
            $this->displayBlock('table_header', $context, $blocks);
            // line 114
            echo "
                        ";
            // line 115
            $this->displayBlock('table_body', $context, $blocks);
            // line 139
            echo "
                        ";
            // line 140
            $this->displayBlock('table_footer', $context, $blocks);
            // line 142
            echo "                    </table>
                ";
        } else {
            // line 144
            echo "                    <div class=\"callout callout-info\">
                        ";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 148
        echo "
                ";
        // line 149
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => ($context["admin"] ?? null))));
        echo "
            </div>
            ";
        // line 151
        $this->displayBlock('list_footer', $context, $blocks);
        // line 220
        echo "        </div>
    </div>
";
    }

    // line 82
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 86
    public function block_table_header($context, array $blocks = array())
    {
        // line 87
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 90
            echo "                                        ";
            if ((($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch") || ($this->getAttribute($context["field_description"], "name", array()) == "_action"))) {
                // line 91
                echo "                                            ";
                // line 92
                echo "                                        ";
            } else {
                // line 93
                echo "                                            ";
                $context["sortable"] = false;
                // line 94
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 95
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 96
                    echo "                                                ";
                    $context["sort_parameters"] = twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute(($context["admin"] ?? null), "datagrid", array())), "method"), ($context["ckParameters"] ?? null));
                    // line 97
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute(($context["sort_parameters"] ?? null), "filter", array()), "_sort_by", array())));
                    // line 98
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 99
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 100
                    echo "                                            ";
                }
                // line 101
                echo "
                                            ";
                // line 102
                ob_start();
                // line 103
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if (($context["sortable"] ?? null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? null), "html", null, true);
                }
                echo "\">
                                                    ";
                // line 104
                if (($context["sortable"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => ($context["sort_parameters"] ?? null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 105
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array())), "method"), "html", null, true);
                echo "
                                                        ";
                // line 106
                if (($context["sortable"] ?? null)) {
                    echo "</a>";
                }
                // line 107
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 109
                echo "                                        ";
            }
            // line 110
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 115
    public function block_table_body($context, array $blocks = array())
    {
        // line 116
        echo "                            <tbody>
                                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 118
            echo "                                    <tr>
                                        <td colspan=\"";
            // line 119
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "list", array()), "elements", array())) - 1), "html", null, true);
            echo "\">
                                            <div>
                                                <a href=\"";
            // line 121
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($context["object"], "reference");
            echo "\" class=\"select\" style=\"float: left; margin-right: 6px;\">";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail($context["object"], "admin", array("width" => 75, "height" => 60));
            echo "</a>

                                                <strong><a href=\"";
            // line 123
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($context["object"], "reference");
            echo "\" class=\"select\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "name", array()), "html", null, true);
            echo "</a></strong> <br />
                                                ";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["object"], "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
            if ($this->getAttribute($context["object"], "width", array())) {
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "width", array()), "html", null, true);
                if ($this->getAttribute($context["object"], "height", array())) {
                    echo "x";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "height", array()), "html", null, true);
                }
                echo "px";
            }
            // line 125
            echo "
                                                ";
            // line 126
            if ((twig_length_filter($this->env, $this->getAttribute(($context["formats"] ?? null), $this->getAttribute($context["object"], "id", array()), array(), "array")) > 0)) {
                // line 127
                echo "                                                    - ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.formats", array(), "SonataMediaBundle"), "html", null, true);
                echo ":
                                                    ";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["formats"] ?? null), $this->getAttribute($context["object"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["name"] => $context["format"]) {
                    // line 129
                    echo "                                                        <a href=\"";
                    echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($context["object"], $context["name"]);
                    echo "\" class=\"select\">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</a> ";
                    if ($this->getAttribute($context["format"], "width", array())) {
                        echo "(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "width", array()), "html", null, true);
                        if ($this->getAttribute($context["format"], "height", array())) {
                            echo "x";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "height", array()), "html", null, true);
                        }
                        echo "px)";
                    }
                    // line 130
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                                                ";
            }
            // line 132
            echo "                                                <br />
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                            </tbody>
                        ";
    }

    // line 140
    public function block_table_footer($context, array $blocks = array())
    {
        // line 141
        echo "                        ";
    }

    // line 151
    public function block_list_footer($context, array $blocks = array())
    {
        // line 152
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            // line 153
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 155
            if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array())) {
                // line 156
                echo "                                <div class=\"pull-right\">
                                    ";
                // line 157
                $this->displayBlock('pager_results', $context, $blocks);
                // line 179
                echo "                                </div>

                                ";
                // line 181
                $this->displayBlock('pager_links', $context, $blocks);
                // line 215
                echo "                            ";
            }
            // line 216
            echo "                        </div>
                    </div>
                ";
        }
        // line 219
        echo "            ";
    }

    // line 157
    public function block_pager_results($context, array $blocks = array())
    {
        // line 158
        echo "                                        ";
        $this->displayBlock('num_pages', $context, $blocks);
        // line 162
        echo "
                                        ";
        // line 163
        $this->displayBlock('num_results', $context, $blocks);
        // line 167
        echo "
                                        ";
        // line 168
        $this->displayBlock('max_per_page', $context, $blocks);
        // line 178
        echo "                                    ";
    }

    // line 158
    public function block_num_pages($context, array $blocks = array())
    {
        // line 159
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
                                            &nbsp;-&nbsp;
                                        ";
    }

    // line 163
    public function block_num_results($context, array $blocks = array())
    {
        // line 164
        echo "                                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 165
        echo "                                            &nbsp;-&nbsp;
                                        ";
    }

    // line 168
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 169
        echo "                                            <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
                                            <select class=\"per-page small\" id=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
                                                ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 172
            echo "                                                    <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("filter" => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "values", array()), array("_per_page" => $context["per_page"]))), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
            echo "\">
                                                        ";
            // line 173
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
                                                    </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                            </select>
                                        ";
    }

    // line 181
    public function block_pager_links($context, array $blocks = array())
    {
        // line 182
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 183
            echo "                                        <hr/>
                                        <div class=\"text-center\">
                                            <ul class=\"pagination\">
                                                ";
            // line 186
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()) > 2)) {
                // line 187
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? null), "datagrid", array()), 1 => 1), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&laquo;</a></li>
                                                ";
            }
            // line 189
            echo "
                                                ";
            // line 190
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "previouspage", array()))) {
                // line 191
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? null), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "previouspage", array())), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                                ";
            }
            // line 193
            echo "
                                                ";
            // line 195
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "getLinks", array(0 => $this->getAttribute(($context["admin_pool"] ?? null), "getOption", array(0 => "pager_links"), "method")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 196
                echo "                                                    ";
                if (($context["page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()))) {
                    // line 197
                    echo "                                                        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? null), "datagrid", array()), 1 => $context["page"]), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                                    ";
                } else {
                    // line 199
                    echo "                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? null), "datagrid", array()), 1 => $context["page"]), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                                    ";
                }
                // line 201
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "
                                                ";
            // line 203
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nextpage", array()))) {
                // line 204
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? null), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nextpage", array())), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                                ";
            }
            // line 206
            echo "
                                                ";
            // line 207
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "lastpage", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "lastpage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nextpage", array())))) {
                // line 208
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? null), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "pager", array()), "lastpage", array())), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&raquo;</a></li>
                                                ";
            }
            // line 210
            echo "                                            </ul>
                                        </div>

                                    ";
        }
        // line 214
        echo "                                ";
    }

    // line 224
    public function block_list_filters_actions($context, array $blocks = array())
    {
        // line 225
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "filters", array()))) {
            // line 226
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                    <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-filter\"></i>
                        ";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                    </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 236
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                    <i class=\"fa ";
                    // line 238
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "                </ul>
            </li>
        </ul>
    ";
        }
    }

    // line 248
    public function block_list_filters($context, array $blocks = array())
    {
        // line 249
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "filters", array())) {
            // line 250
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => $this->getAttribute(($context["admin"] ?? null), "getTemplate", array(0 => "filter"), "method")));
            // line 251
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 252
            echo (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 255
            echo ((($this->getAttribute(($context["admin"] ?? null), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 256
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 261
                echo "                                    <div class=\"form-group\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 262
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 263
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 265
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 266
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 268
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => ($context["attr"] ?? null)));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 272
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 288
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 289
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\"></i> ";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn\" href=\"";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("filters" => "reset"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 297
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                <div class=\"form-group\">
                                    <a href=\"#\" data-toggle=\"advanced-filter\">
                                        <i class=\"fa fa-cogs\"></i>
                                        ";
            // line 304
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>
                            </div>
                        </div>

                        ";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_merge($this->getAttribute(($context["admin"] ?? null), "persistentParameters", array()), ($context["ckParameters"] ?? null)));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 311
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 48
    public function getnavigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__current_category__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "current_category" => $__current_category__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 49
            echo "    ";
            if ((($context["root"] ?? null) && (twig_length_filter($this->env, ($context["collection"] ?? null)) == 0))) {
                // line 50
                echo "        <div>
            <p class=\"bg-warning\">";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "trans", array(0 => "warning_no_category", 1 => array(), 2 => $this->getAttribute(($context["admin"] ?? null), "translationdomain", array())), "method"), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            // line 54
            echo "    <ul";
            if (($context["root"] ?? null)) {
                echo " class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"";
            }
            echo ">
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 56
                echo "            <li>
                <div class=\"sonata-tree__item";
                // line 57
                if (($this->getAttribute($context["element"], "id", array()) == ($context["current_category"] ?? null))) {
                    echo " is-active";
                }
                echo "\"";
                if ((($context["depth"] ?? null) < 2)) {
                    echo " data-treeview-toggled";
                }
                echo ">
                    ";
                // line 58
                if (($this->getAttribute($context["element"], "parent", array()) || ($context["root"] ?? null))) {
                    echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                }
                // line 59
                echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array()), array("category" => $this->getAttribute($context["element"], "id", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                echo "</a>
                </div>

                ";
                // line 62
                if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                    // line 63
                    echo "                    ";
                    echo $this->getAttribute($this, "navigate_child", array(0 => $this->getAttribute($context["element"], "children", array()), 1 => ($context["admin"] ?? null), 2 => false, 3 => ($context["current_category"] ?? null), 4 => (($context["depth"] ?? null) + 1)), "method");
                    echo "
                ";
                }
                // line 65
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
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
        return "SonataFormatterBundle:Ckeditor:browser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  908 => 67,  901 => 65,  895 => 63,  893 => 62,  884 => 59,  880 => 58,  870 => 57,  867 => 56,  863 => 55,  856 => 54,  850 => 51,  847 => 50,  844 => 49,  828 => 48,  819 => 313,  808 => 311,  804 => 310,  795 => 304,  785 => 297,  781 => 296,  775 => 293,  767 => 289,  765 => 288,  759 => 284,  742 => 277,  734 => 272,  727 => 268,  723 => 266,  720 => 265,  712 => 263,  710 => 262,  695 => 261,  691 => 260,  684 => 256,  678 => 255,  670 => 252,  667 => 251,  664 => 250,  661 => 249,  658 => 248,  650 => 242,  637 => 238,  629 => 237,  626 => 236,  621 => 235,  614 => 231,  607 => 226,  605 => 225,  602 => 224,  598 => 214,  592 => 210,  584 => 208,  582 => 207,  579 => 206,  571 => 204,  569 => 203,  566 => 202,  560 => 201,  552 => 199,  544 => 197,  541 => 196,  536 => 195,  533 => 193,  525 => 191,  523 => 190,  520 => 189,  512 => 187,  510 => 186,  505 => 183,  502 => 182,  499 => 181,  494 => 176,  485 => 173,  476 => 172,  472 => 171,  468 => 170,  461 => 169,  458 => 168,  453 => 165,  450 => 164,  447 => 163,  437 => 159,  434 => 158,  430 => 178,  428 => 168,  425 => 167,  423 => 163,  420 => 162,  417 => 158,  414 => 157,  410 => 219,  405 => 216,  402 => 215,  400 => 181,  396 => 179,  394 => 157,  391 => 156,  389 => 155,  385 => 153,  382 => 152,  379 => 151,  375 => 141,  372 => 140,  367 => 137,  357 => 132,  354 => 131,  348 => 130,  333 => 129,  329 => 128,  324 => 127,  322 => 126,  319 => 125,  308 => 124,  302 => 123,  295 => 121,  290 => 119,  287 => 118,  283 => 117,  280 => 116,  277 => 115,  271 => 111,  265 => 110,  262 => 109,  258 => 107,  254 => 106,  249 => 105,  243 => 104,  231 => 103,  229 => 102,  226 => 101,  223 => 100,  220 => 99,  217 => 98,  214 => 97,  211 => 96,  208 => 95,  205 => 94,  202 => 93,  199 => 92,  197 => 91,  194 => 90,  190 => 89,  186 => 87,  183 => 86,  178 => 82,  172 => 220,  170 => 151,  165 => 149,  162 => 148,  156 => 145,  153 => 144,  149 => 142,  147 => 140,  144 => 139,  142 => 115,  139 => 114,  137 => 86,  134 => 85,  132 => 84,  129 => 83,  127 => 82,  122 => 80,  116 => 79,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  96 => 70,  91 => 45,  81 => 37,  71 => 31,  68 => 30,  51 => 17,  48 => 16,  44 => 12,  42 => 47,  40 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Ckeditor:browser.html.twig", "/var/www/html/bio/vendor/sonata-project/formatter-bundle/Resources/views/Ckeditor/browser.html.twig");
    }
}
