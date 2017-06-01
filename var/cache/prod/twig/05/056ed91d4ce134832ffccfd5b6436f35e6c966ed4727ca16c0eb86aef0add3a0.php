<?php

/* :Mail:contact.html.twig */
class __TwigTemplate_84d095339675fd9935eeda52f0d66d81095237ef18ddd51cfe554dac0f67cc26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Mail:base_email.html.twig", ":Mail:contact.html.twig", 1);
        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'mail_content' => array($this, 'block_mail_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Mail:base_email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        // line 5
        echo "Nouveau contact";
    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        // line 11
        echo "        Salut test
    ";
    }

    // line 15
    public function block_mail_content($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        // line 17
        echo "        <table>
            <tr>
                <td>Civilité</td>
                <td>";
        // line 20
        echo $this->getAttribute(($context["contact"] ?? null), "civilityLabel", array());
        echo "</td>
            </tr>
            <tr>
                <td>Nom</td>
                <td>";
        // line 24
        echo $this->getAttribute(($context["contact"] ?? null), "name", array());
        echo "</td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td>";
        // line 28
        echo $this->getAttribute(($context["contact"] ?? null), "firstname", array());
        echo "</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>";
        // line 32
        echo $this->getAttribute(($context["contact"] ?? null), "email", array());
        echo "</td>
            </tr>
            <tr>
                <td>Téléphone</td>
                <td>";
        // line 36
        echo $this->getAttribute(($context["contact"] ?? null), "phone", array());
        echo "</td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td>";
        // line 40
        echo $this->getAttribute(($context["contact"] ?? null), "address", array());
        echo "</td>
            </tr>
            <tr>
                <td>Ville</td>
                <td>";
        // line 44
        echo $this->getAttribute(($context["contact"] ?? null), "city", array());
        echo "</td>
            </tr>
            <tr>
                <td>Code postale</td>
                <td>";
        // line 48
        echo $this->getAttribute(($context["contact"] ?? null), "zip", array());
        echo "</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>";
        // line 52
        echo $this->getAttribute(($context["contact"] ?? null), "message", array());
        echo "</td>
            </tr>
        </table>
    ";
    }

    public function getTemplateName()
    {
        return ":Mail:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 52,  106 => 48,  99 => 44,  92 => 40,  85 => 36,  78 => 32,  71 => 28,  64 => 24,  57 => 20,  52 => 17,  50 => 16,  47 => 15,  42 => 11,  40 => 10,  37 => 9,  33 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Mail:contact.html.twig", "/var/www/html/bio/app/Resources/views/Mail/contact.html.twig");
    }
}
