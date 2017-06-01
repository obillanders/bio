<?php

/* :default:header.html.twig */
class __TwigTemplate_26bfca7e8e1d19a4690d355851079399ca386ce9e837992407523e33d223c3fa extends Twig_Template
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
        echo "<header class=\"clearfix\">
    <div class=\"hdr-menu_toggle ic-menu\"></div>
    <div class=\"hdr-profile_toggle ic-userlog\"></div>
    ";
        // line 4
        if (array_key_exists("isHome", $context)) {
            // line 5
            echo "        <h1 class=\"hdr-logo text-hide\">Biogaran.pro Espace officine</h1>
    ";
        } else {
            // line 7
            echo "        <div class=\"hdr-logo text-hide\">Biogaran.pro Espace officine</div>
    ";
        }
        // line 9
        echo "    <ul class=\"hdr-user_box clearfix\">
        ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "            <li class=\"hdr-usr_box-logout-mobile-header\">
                <div class=\"ic-userlog\"></div>
                <div class=\"logout-mobile-header-txt\">Mon Profil</div>
                <div class=\"ic-cross logout-mobile-header-ic\"></div>
            </li>
            <li class=\"hdr-usr_box-hello\">
                Bonjour, <span>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "pharmacien", array()), "civilite", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "pharmacien", array()), "nom", array()), "html", null, true);
            echo "</span>
            </li>
            <li class=\"hdr-usr_box-profile\">
                <a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_profil");
            echo "\">Mon profil</a>
            </li>

            <li class=\"hdr-usr_box-select\">
                ";
            // line 24
            echo $this->env->getExtension('AppBundle\Twig\OfficineSelectorExtension')->renderOfficineSelector($this->env, $this->getAttribute(($context["app"] ?? null), "user", array()));
            echo "
            </li>

            ";
            // line 27
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
                // line 28
                echo "                <li class=\"hdr-usr_box-profile\">
                    <a href=\"";
                // line 29
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_pharmacien_list", array("_connect_as" => "_exit"));
                echo "\">Redevenir admin</a>
                </li>
            ";
            }
            // line 32
            echo "
            <li class=\"hdr-usr_box-logout \">
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    <span class=\"ic-logout\"></span>
                    <span class=\"logout-mobile-txt hc-block-footerlink\">Déconnexion</span>
                </a>
            </li>
        ";
        } else {
            // line 40
            echo "            <li class=\"hdr-user_box-login\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
        ";
        }
        // line 42
        echo "    </ul>
</header>
";
    }

    public function getTemplateName()
    {
        return ":default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  92 => 40,  83 => 34,  79 => 32,  73 => 29,  70 => 28,  68 => 27,  62 => 24,  55 => 20,  47 => 17,  39 => 11,  37 => 10,  34 => 9,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:header.html.twig", "/var/www/html/bio/app/Resources/views/default/header.html.twig");
    }
}
