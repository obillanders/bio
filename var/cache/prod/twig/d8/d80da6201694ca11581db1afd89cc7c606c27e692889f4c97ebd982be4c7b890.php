<?php

/* RedCodeTreeBundle:CRUD:modal_edit_association_script.html.twig */
class __TwigTemplate_18b92ac53e3659950b9a44e15c35188a91894d8ef6f430b70425ef5d80a5cc1a extends Twig_Template
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
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_dialog_form_edit_";
        // line 26
        echo ($context["id"] ?? null);
        echo " = function(link) {
        initialize_popup_";
        // line 27
        echo ($context["id"] ?? null);
        echo "();

        var a = jQuery(this);

        field_dialog_content_";
        // line 31
        echo ($context["id"] ?? null);
        echo ".html('');

        Admin.log('[";
        // line 33
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: link,
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 41
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_edit] ajax success', field_dialog_";
        echo ($context["id"] ?? null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 44
        echo ($context["id"] ?? null);
        echo ".html(html);
                field_dialog_title_";
        // line 45
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["admin"] ?? null), "label", array()), array(), $this->getAttribute(($context["admin"] ?? null), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 47
        echo ($context["id"] ?? null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 51
        echo ($context["id"] ?? null);
        echo ").on('click', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
                jQuery('form', field_dialog_";
        // line 52
        echo ($context["id"] ?? null);
        echo ").on('submit', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 55
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 57
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 63
        echo ($context["id"] ?? null);
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            Admin.log('[";
        // line 69
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] element is an anchor, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 76
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 78
        echo ($context["id"] ?? null);
        echo "();
        var url, type;
        if (this.nodeName == 'FORM') {
            url  = element.attr('action');
            type = element.attr('method');
        } else if (this.nodeName == 'A') {
            url  = element.attr('href');
            type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 92
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        };

        var form = jQuery(this);

        Admin.log('[";
        // line 102
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 110
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 115
        echo ($context["id"] ?? null);
        echo ".modal('hide');

                    \$('#jstree_div').jstree('set_text', data.objectId, data.objectName);
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 122
        echo ($context["id"] ?? null);
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 124
        echo ($context["id"] ?? null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 127
        echo ($context["id"] ?? null);
        echo ").submit(field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 134
        echo ($context["id"] ?? null);
        echo "         = false;
    var field_dialog_content_";
        // line 135
        echo ($context["id"] ?? null);
        echo " = false;
    var field_dialog_title_";
        // line 136
        echo ($context["id"] ?? null);
        echo "   = false;

    function initialize_popup_";
        // line 138
        echo ($context["id"] ?? null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 140
        echo ($context["id"] ?? null);
        echo ") {
            field_dialog_";
        // line 141
        echo ($context["id"] ?? null);
        echo "         = jQuery(\"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");
            field_dialog_content_";
        // line 142
        echo ($context["id"] ?? null);
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");
            field_dialog_title_";
        // line 143
        echo ($context["id"] ?? null);
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 146
        echo ($context["id"] ?? null);
        echo ");

            Admin.log('[";
        // line 148
        echo ($context["id"] ?? null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 155
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_edit_";
        // line 157
        echo ($context["id"] ?? null);
        echo "(link) {

        initialize_popup_";
        // line 159
        echo ($context["id"] ?? null);
        echo "();

        field_dialog_form_edit_";
        // line 161
        echo ($context["id"] ?? null);
        echo "(link);

        return false;
    }

    if (field_dialog_";
        // line 166
        echo ($context["id"] ?? null);
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 167
        echo ($context["id"] ?? null);
        echo ");
    }
</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "RedCodeTreeBundle:CRUD:modal_edit_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 167,  297 => 166,  289 => 161,  284 => 159,  279 => 157,  275 => 155,  268 => 148,  263 => 146,  255 => 143,  249 => 142,  243 => 141,  239 => 140,  234 => 138,  229 => 136,  225 => 135,  221 => 134,  209 => 127,  203 => 124,  198 => 122,  188 => 115,  180 => 110,  169 => 102,  156 => 92,  139 => 78,  134 => 76,  124 => 69,  115 => 63,  106 => 57,  101 => 55,  93 => 52,  87 => 51,  80 => 47,  73 => 45,  69 => 44,  61 => 41,  50 => 33,  45 => 31,  38 => 27,  34 => 26,  26 => 20,  23 => 18,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "RedCodeTreeBundle:CRUD:modal_edit_association_script.html.twig", "/var/www/html/bio/vendor/redcode/tree-bundle/RedCode/TreeBundle/Resources/views/CRUD/modal_edit_association_script.html.twig");
    }
}
