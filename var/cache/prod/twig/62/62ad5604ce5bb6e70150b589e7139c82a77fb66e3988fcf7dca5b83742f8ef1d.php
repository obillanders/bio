<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_a080075a207de239c6294165e291639441b4e77d4aa58c326e4a2198f2557878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'prehome_right_content' => array($this, 'block_prehome_right_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_prehome_right_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "
    <div class=\"connexion_box request-password\">
        <span class=\"ic-lock\"></span>
        <span class=\"roundedsquare\"></span>
        <h3 class=\"connexion_box-style-title\">
            <span>Connexion</span><br />
            Mot de passe perdu
        </h3>

        <p class=\"cb-info\">
            Un email a été envoyé. Il contient un lien afin de changer votre mot de passe.<br />
            Si vous n'avez pas reçu d'email, vérifiez dans votre dossier de spam.
        </p>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-pink\">Retour</a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/bio/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
