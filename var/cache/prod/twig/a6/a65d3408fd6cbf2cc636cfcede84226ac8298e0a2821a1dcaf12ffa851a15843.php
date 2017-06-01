<?php

/* RedCodeTreeBundle:CRUD:tree.html.twig */
class __TwigTemplate_c52ab27c552f3ee52ffb4657029ca93b345091d8d7bb9922646f56451b75c230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'list_table' => array($this, 'block_list_table'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($context["base_template"] ?? null), "RedCodeTreeBundle:CRUD:tree.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/redcodetree/css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/redcodetree/js/jstree.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('#jstree_div')
                .jstree({
                    'core': {
                        'data': {
                            'url': '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redcode_tree_data", array("_sonata_admin" => ($context["_sonata_admin"] ?? null))), "html", null, true);
        echo "&operation=get_node',
                            'data': function(node) {
                                return {'id': node.id === '#' ? null : node.id};
                            }
                        },
                        'check_callback': function(o, n, p, i, m) {
                            return true;
                        },
                        'themes': {
                            'responsive': false,
                            'variant': 'small',
                            'stripes': true
                        }
                    },
                    'contextmenu': {
                        'items': function(node) {
                            var tmp = \$.jstree.defaults.contextmenu.items();
                            delete tmp.ccp;
                            tmp.edit = {
                                label: \"Edit\",
                                action: function(menu, data) {
                                    var tree = \$('#jstree_div').jstree(true);
                                    var selectedNodes = tree.get_selected(true);
                                    var id = selectedNodes[0].id
                                    var editUrl = '";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "edit", 1 => array("id" => "{id}")), "method"), "html", null, true);
        echo "'.replace(encodeURI('{id}'), id);

                                    return start_field_dialog_form_edit_tree(editUrl, \$('#jstree_div'));
                                }
                            };
                            return tmp;
                        }
                    },
                    'types': {
                        'default': {'icon': 'fa fa-folder fa-fw'},
                        'file': {'valid_children': [], 'icon': 'fa fa-file fa-fw'}
                    },
                    'unique': {
                        'duplicate': function(name, counter) {
                            return name + ' ' + counter;
                        }
                    },
                    'plugins': ['state', 'dnd', 'types', 'contextmenu', 'unique']
                })
                .on('delete_node.jstree', function(e, data) {
                    \$.get('";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redcode_tree_data", array("_sonata_admin" => ($context["_sonata_admin"] ?? null))), "html", null, true);
        echo "&operation=delete_node', {'id': data.node.id})
                        .fail(function() {
                            data.instance.refresh();
                        });
                })
                .on('create_node.jstree', function(e, data) {
                    \$.get('";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redcode_tree_data", array("_sonata_admin" => ($context["_sonata_admin"] ?? null))), "html", null, true);
        echo "&operation=create_node', {
                        'type': data.node.type,
                        'parent_id': data.parent,
                        'text': data.node.text
                    })
                        .done(function(d) {
                            data.instance.set_id(data.node, d.id);
                        })
                        .fail(function() {
                            data.instance.refresh();
                        });
                })
                .on('rename_node.jstree', function(e, data) {
                    \$.get('";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redcode_tree_data", array("_sonata_admin" => ($context["_sonata_admin"] ?? null))), "html", null, true);
        echo "&operation=rename_node', {
                        'id': data.node.id,
                        'text': data.text
                    })
                        .done(function(d) {
                            data.instance.set_text(data.node, d.text);
                        })
                        .fail(function() {
                            data.instance.refresh();
                        });
                })
                .on('move_node.jstree', function(e, data) {
                    \$.get('";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redcode_tree_data", array("_sonata_admin" => ($context["_sonata_admin"] ?? null))), "html", null, true);
        echo "&operation=move_node', {
                        'id': data.node.id,
                        'parent_id': data.parent,
                        'position': data.position
                    })
                        .done(function(d) {
                        })
                        .fail(function() {
                            data.instance.refresh();
                        });
                });
        });
    </script>
";
    }

    // line 107
    public function block_list_table($context, array $blocks = array())
    {
        // line 108
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div id=\"jstree_div\"></div>
    </div>
    ";
        // line 111
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig", "RedCodeTreeBundle:CRUD:tree.html.twig", 111)->display(array_merge($context, array("id" => "tree")));
        // line 112
        echo "    ";
        $this->loadTemplate("RedCodeTreeBundle:CRUD:modal_edit_association_script.html.twig", "RedCodeTreeBundle:CRUD:tree.html.twig", 112)->display(array_merge($context, array("id" => "tree", "admin" => ($context["admin"] ?? null))));
    }

    // line 115
    public function block_list_filters_actions($context, array $blocks = array())
    {
        // line 116
        echo "    &nbsp;
";
    }

    // line 119
    public function block_list_filters($context, array $blocks = array())
    {
        // line 120
        echo "
";
    }

    public function getTemplateName()
    {
        return "RedCodeTreeBundle:CRUD:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 120,  194 => 119,  189 => 116,  186 => 115,  181 => 112,  179 => 111,  174 => 108,  171 => 107,  153 => 92,  138 => 80,  122 => 67,  113 => 61,  90 => 41,  63 => 17,  53 => 10,  48 => 9,  45 => 8,  39 => 5,  34 => 4,  31 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "RedCodeTreeBundle:CRUD:tree.html.twig", "/var/www/html/bio/app/Resources/RedCodeTreeBundle/views/CRUD/tree.html.twig");
    }
}
