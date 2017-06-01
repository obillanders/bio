<?php

/* FOSUserBundle:Email:resetting_email.txt.twig */
class __TwigTemplate_e7159e6bf00645dfd99ebe0c9fe46b763eda0d9d8af8bb0b0ef5672226e73baf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Mail:base_email.html.twig", "FOSUserBundle:Email:resetting_email.txt.twig", 1);
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

    // line 5
    public function block_subject($context, array $blocks = array())
    {
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? null), "username", array())), "FOSUserBundle");
    }

    // line 11
    public function block_body_text($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? null), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)), "FOSUserBundle");
        echo "
    ";
    }

    // line 17
    public function block_mail_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        // line 19
        echo "
        Hello ";
        // line 20
        echo $this->getAttribute(($context["user"] ?? null), "username", array());
        echo " !<br><br>

        <a href=\"";
        // line 22
        echo ($context["confirmationUrl"] ?? null);
        echo "\" target=\"_blank\" style=\"color:#2b7db5;\">Cliquez sur ce lien pour réinitialiser votre mot de passe</a><br><br>

        ";
        // line 25
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Email:resetting_email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  62 => 22,  57 => 20,  54 => 19,  52 => 18,  49 => 17,  42 => 13,  40 => 12,  37 => 11,  33 => 7,  30 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Email:resetting_email.txt.twig", "/var/www/html/bio/app/Resources/FOSUserBundle/views/Email/resetting_email.txt.twig");
    }
}
