<?php

/* :Mail:confirmation_mail.html.twig */
class __TwigTemplate_9c98e47235c98856507ce388c91e4d0ca7532fbcdd446c2b93b2094e2fc6eb30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Mail:base_email.html.twig", ":Mail:confirmation_mail.html.twig", 1);
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
        echo "Confirmation de message";
    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        // line 11
        echo "
    ";
    }

    // line 15
    public function block_mail_content($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        // line 17
        echo "        Bonjour,

        Votre message a bien été transmit. vous serez contactez sous peu.

        Bonne journée.
    ";
    }

    public function getTemplateName()
    {
        return ":Mail:confirmation_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  47 => 15,  42 => 11,  40 => 10,  37 => 9,  33 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Mail:confirmation_mail.html.twig", "/var/www/html/bio/app/Resources/views/Mail/confirmation_mail.html.twig");
    }
}
