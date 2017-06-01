<?php

/* :Mail:rdi.html.twig */
class __TwigTemplate_2ce31a06cb24a874f690527cfcaef0166a130076295c84f98d1105d185dfa5c1 extends Twig_Template
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
        echo "ID : ";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "<br />
DTCREAT : ";
        // line 2
        echo twig_escape_filter($this->env, ($context["dtCreat"] ?? null), "html", null, true);
        echo "<br />
CREAT_BY : ";
        // line 3
        echo twig_escape_filter($this->env, ($context["creatBy"] ?? null), "html", null, true);
        echo "<br />
ENT_ID : ";
        // line 4
        echo twig_escape_filter($this->env, ($context["entId"] ?? null), "html", null, true);
        echo "<br />
THEME : ";
        // line 5
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "<br />
MOTIF : ";
        // line 6
        echo twig_escape_filter($this->env, ($context["motif"] ?? null), "html", null, true);
        echo "<br />
MEDIA : ";
        // line 7
        echo twig_escape_filter($this->env, ($context["media"] ?? null), "html", null, true);
        echo "<br />
REPORT : ";
        // line 8
        echo nl2br(twig_escape_filter($this->env, ($context["report"] ?? null), "html", null, true));
        echo "<br />
CONTACT : ";
        // line 9
        echo twig_escape_filter($this->env, ($context["contact"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return ":Mail:rdi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Mail:rdi.html.twig", "/var/www/html/bio/app/Resources/views/Mail/rdi.html.twig");
    }
}
