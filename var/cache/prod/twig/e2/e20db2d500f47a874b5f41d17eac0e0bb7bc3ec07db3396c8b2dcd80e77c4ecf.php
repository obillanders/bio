<?php

/* :default:officine-selector.html.twig */
class __TwigTemplate_ef5177343d9e44313dec0dfa8095313b447a671e79b9c9acd93df4670bcd3cdd extends Twig_Template
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
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pharmacien_change_current_officine");
        echo "\" id=\"formSelectOfficine\">
    <select id=\"hdr-usr_box-listofficines\" name=\"officeSelector\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listOfficines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["officine"]) {
            // line 4
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["officine"], "nridPharmacie", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["officine"], "nridPharmacie", array()) == $this->getAttribute(($context["currentOfficine"] ?? null), "nridPharmacie", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["officine"], "nomPharmacie", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['officine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </select>
</form>

";
    }

    public function getTemplateName()
    {
        return ":default:officine-selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  29 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:officine-selector.html.twig", "/var/www/html/bio/app/Resources/views/default/officine-selector.html.twig");
    }
}
