<?php

/* :Mail:base_email.html.twig */
class __TwigTemplate_4e131d7fc98a4b0feb9f5e8ec342efce19b33a9f14d242d578cc2143f81078b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
            'mail_content' => array($this, 'block_mail_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body_text', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
    }

    // line 4
    public function block_body_text($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body_html($context, array $blocks = array())
    {
        // line 8
        echo "    <table cellpadding=0 cellspacing=0 border=0 width=\"600\" align=\"center\" bgcolor=\"#ffffff\" style=\"width:600px;\">
        <tr>
            <td colspan=3>
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mail/email_header1_600x73.gif")), "html", null, true);
        echo "\" alt=\"Biogaran.pro espace officine\" style=\"display:block;\">
            </td>
        </tr>
        <tr>
            <td colspan=3>
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mail/email_header2_600x48.gif")), "html", null, true);
        echo "\" alt=\"Biogaran.pro espace officine\" style=\"display:block;\">
            </td>
        </tr>
        <tr>
            <td style=\"font-family: Arial, sans-serif;font-size: 25px;font-weight: normal;text-align: center;color:#ffffff;background-color: #50b6fc;padding-right:85px;padding-left:85px;padding-bottom:50px;\" colspan=3>
                Loremipsum dolor
                sit amet consectetur estum
            </td>
        </tr>
        <tr>
            <td style=\"font-family: Arial, sans-serif;font-size: 14px;padding-top:50px;padding-bottom:50px;padding-right:55px;padding-left:55px;background-color: #ffffff;color:#858d93;\" bgcolor=\"#ffffff\" colspan=3>
                ";
        // line 27
        $this->displayBlock('mail_content', $context, $blocks);
        // line 28
        echo "            </td>
        </tr>
        <tr>
            <td bgcolor=\"#ffffff\" style=\"background-color: #ffffff;\" colspan=3>
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mail/email_block1_600x103.gif")), "html", null, true);
        echo "\" alt=\"Service client\" style=\"display:block;\">
            </td>
        </tr>
        <tr>
            <td bgcolor=\"#ffffff\" style=\"background-color: #ffffff;width:184px;\" width=\"184\">
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mail/email_block2_184x48.gif")), "html", null, true);
        echo "\" alt=\"Service client\" style=\"display:block;\" colspan=3>
            </td>
            <td bgcolor=\"#f3f6fd\" style=\"font-family: arial, sans-serif;font-size: 12px;color:#b2bac2;background-color: #f3f6fd;width:331px;\" width=\"331\">
                Service Clients Biogaran : 0 811 907 917 (prix appel local)<br>
                ou visitez notre espace clients sur le site.
            </td>
            <td bgcolor=\"#ffffff\" style=\"background-color: #ffffff;width:85px;\" width=\"85\">
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mail/email_block3_85x48.gif")), "html", null, true);
        echo "\" alt=\"Service client\" style=\"display:block;\" colspan=3>
            </td>
        </tr>
        <tr>
            <td bgcolor=\"#ffffff\" style=\"background-color: #ffffff;\" colspan=3>
                <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mail/email_block4_600x15.gif")), "html", null, true);
        echo "\" alt=\"Service client\" style=\"display:block;\">
            </td>
        </tr>
        <tr>
            <td bgcolor=\"#ffffff\" style=\"background-color: #ffffff;\" colspan=3>
                <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mail/email_footer_600x188.gif")), "html", null, true);
        echo "\" alt=\"Biogaran, chaque jour, agir pour la santé\" style=\"display:block;\">
            </td>
        </tr>
        <tr>
            <td align=\"center\" style=\"font-family: arial, sans-serif;font-size: 13px;color:#b2bac2;background-color: #ffffff;text-align:center;padding-bottom:40px;padding-right:30px;padding-left:30px;\" colspan=3 bgcolor=\"#ffffff\">
                15, boulevard Charles de Gaulle - 92707 COLOMBES Cedex - Tel. : 0811 907 917<br>
                Société par Actions Simplifiée au capital de 4 000 000 €<br>
                B 405 113 598 RCS Nanterre.
            </td>
        </tr>

    </table>
";
    }

    // line 27
    public function block_mail_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":Mail:base_email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 27,  119 => 54,  111 => 49,  103 => 44,  93 => 37,  85 => 32,  79 => 28,  77 => 27,  63 => 16,  55 => 11,  50 => 8,  47 => 7,  42 => 4,  37 => 1,  33 => 7,  30 => 6,  28 => 4,  25 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Mail:base_email.html.twig", "/var/www/html/bio/app/Resources/views/Mail/base_email.html.twig");
    }
}
