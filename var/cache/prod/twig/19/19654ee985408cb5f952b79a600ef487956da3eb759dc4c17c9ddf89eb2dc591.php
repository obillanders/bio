<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_3e08287cdad9b13abe8644ee927081a697ced7ff2eeb689f2da77843bd99d714 extends Twig_Template
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
        // line 2
        echo "
<div class=\"connexion_box request-password\">

    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"back_link-pillshaped\">
        <div class=\"ic-leftarrow\"></div>
        <div class=\"backlink\">Retour</div>
    </a>

    <span class=\"roundedsquare\"></span>

    <h3 class=\"connexion_box-style-title\">
        <span class=\"connexion_box-style-title-txt\">
            <span class=\"mobile-border\">Connexion</span>
        </span>
        <span class=\"ic-lock\" id=\"mobile-connexion\"></span>
        Mot de passe perdu
    </h3>

    <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" novalidate='novalidate'>
        <p class=\"cb-info\">Veuillez saisir votre adresse e-mail pour obtenir un nouveau mot de passe.</p>
        <div class=\"form-group\">
            <input type=\"text\" placeholder=\"E-mail\" id=\"username\" name=\"username\" required=\"required\" />
            <label for=\"username\" class=\"text-hide ic-userlog\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
        <input type=\"submit\" value=\"Envoyer la demande\" class=\"btn btn-blue\" />
    </form>
    <p class=\"cb-info\">
        En cas de difficulté de connexion,<br />
        contactez notre service client au <a href=\"tel:0 811 907 917\" class=\"numero-tel\">0 811 907 917</a><br />
        <span>(prix appel local)</span>
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 24,  42 => 20,  24 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/bio/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
