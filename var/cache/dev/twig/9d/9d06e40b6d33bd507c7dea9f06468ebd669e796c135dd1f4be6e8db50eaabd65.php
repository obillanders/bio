<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_30568d63eb084d33b2232b10db06e6c23692269e2a4116334cc5dc93ece569b7 extends Twig_Template
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
        $__internal_160e517587433b366a74e0ecccd6a4b38a2548d2117aded9f237492274f92b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160e517587433b366a74e0ecccd6a4b38a2548d2117aded9f237492274f92b9f->enter($__internal_160e517587433b366a74e0ecccd6a4b38a2548d2117aded9f237492274f92b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_d0245eb97da1e5439e0cbdd11049b37ed2f41fe4f3628b97a268174ecb528f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0245eb97da1e5439e0cbdd11049b37ed2f41fe4f3628b97a268174ecb528f8e->enter($__internal_d0245eb97da1e5439e0cbdd11049b37ed2f41fe4f3628b97a268174ecb528f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<div class=\"connexion_box\">
    ";
        // line 7
        echo "    ";
        // line 8
        echo "    <span class=\"roundedsquare\"></span>
    <h3 class=\"connexion_box-style-title\">
        <span class=\"connexion_box-style-title-txt\">
            <span class=\"mobile-border\">Connexion</span>
        </span>
        <span class=\"ic-lock\" id=\"mobile-connexion\"></span>
        Accédez à votre<br />espace personnalisé
    </h3>

    ";
        // line 17
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 18
            echo "        <div class=\"field-error-content\">Vos paramètres de connexion sont incorrects</div>
    ";
        }
        // line 20
        echo "
    <form action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" novalidate='novalidate'>
        ";
        // line 22
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 23
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 25
        echo "        <div class=\"form-group\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"E-mail\" />
            <label for=\"username\" class=\"text-hide ic-userlog\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"form-group\">
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" />
            <label for=\"password\" class=\"text-hide ic-lock2\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"s'identifier\" class=\"btn btn-blue\" />
    </form>
    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"cb-oubli-pw\"><span class=\"ic-question\"></span>Mot de passe oublié ?</a>
    <p class=\"cb-info\">
        En cas de difficulté de connexion,<br />
        contactez notre service client au <span class=\"numero-tel\">0 811 907 917</span><br />
        <span>(prix appel local)</span>
    </p>
</div>

<div class=\"register-box\">
    <span class=\"ic-roundedsquare\"></span>
    <h3 class=\"connexion_box-style-title connexion_box-style-title-noic\">
        <span class=\"connexion_box-style-title-txt\">
            <span class=\"mobile-border\">Inscription</span>
        </span>
        Créez votre<br />espace personnalisé
    </h3>
    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-pink\">S'inscrire</a>
</div>



";
        
        $__internal_160e517587433b366a74e0ecccd6a4b38a2548d2117aded9f237492274f92b9f->leave($__internal_160e517587433b366a74e0ecccd6a4b38a2548d2117aded9f237492274f92b9f_prof);

        
        $__internal_d0245eb97da1e5439e0cbdd11049b37ed2f41fe4f3628b97a268174ecb528f8e->leave($__internal_d0245eb97da1e5439e0cbdd11049b37ed2f41fe4f3628b97a268174ecb528f8e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 52,  85 => 36,  77 => 31,  70 => 27,  66 => 26,  63 => 25,  57 => 23,  55 => 22,  51 => 21,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"connexion_box\">
    {#<h3 class=\"connexion_box-style-title-mobile\">
        <span>Connexion</span>
    </h3>#}
    {#<span class=\"ic-lock\" id=\"mobile-connexion\"></span>#}
    <span class=\"roundedsquare\"></span>
    <h3 class=\"connexion_box-style-title\">
        <span class=\"connexion_box-style-title-txt\">
            <span class=\"mobile-border\">Connexion</span>
        </span>
        <span class=\"ic-lock\" id=\"mobile-connexion\"></span>
        Accédez à votre<br />espace personnalisé
    </h3>

    {% if error %}
        <div class=\"field-error-content\">Vos paramètres de connexion sont incorrects</div>
    {% endif %}

    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" novalidate='novalidate'>
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}
        <div class=\"form-group\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"E-mail\" />
            <label for=\"username\" class=\"text-hide ic-userlog\">{{ 'security.login.username'|trans }}</label>
        </div>
        <div class=\"form-group\">
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" />
            <label for=\"password\" class=\"text-hide ic-lock2\">{{ 'security.login.password'|trans }}</label>
        </div>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"s'identifier\" class=\"btn btn-blue\" />
    </form>
    <a href=\"{{ path('fos_user_resetting_request') }}\" class=\"cb-oubli-pw\"><span class=\"ic-question\"></span>Mot de passe oublié ?</a>
    <p class=\"cb-info\">
        En cas de difficulté de connexion,<br />
        contactez notre service client au <span class=\"numero-tel\">0 811 907 917</span><br />
        <span>(prix appel local)</span>
    </p>
</div>

<div class=\"register-box\">
    <span class=\"ic-roundedsquare\"></span>
    <h3 class=\"connexion_box-style-title connexion_box-style-title-noic\">
        <span class=\"connexion_box-style-title-txt\">
            <span class=\"mobile-border\">Inscription</span>
        </span>
        Créez votre<br />espace personnalisé
    </h3>
    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-pink\">S'inscrire</a>
</div>



", "@FOSUser/Security/login_content.html.twig", "/var/www/html/bio/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
