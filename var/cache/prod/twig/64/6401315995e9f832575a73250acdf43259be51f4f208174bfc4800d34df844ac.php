<?php

/* :Pharmacien:pharmacien_profil.html.twig */
class __TwigTemplate_8a1c26fbba3ff8e3ef95e06a9340493ce4c6790c335a7cf034380aaa15b6c010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", ":Pharmacien:pharmacien_profil.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"h1-container\">
        <h1>
            <div class=\"ic-userprofile h1-col\"></div>
            <div class=\"h1-col\">
                <span class=\"h1-txt\">Mon profil</span>
                <span class=\"h1-soustitre\">Gestion des identifiants, mots de passe, préférences de communications...</span>
                <span class=\"h1-soustitre\">Modifiez depuis cet espace toutes les informations relatives à votre compte.</span>
            </div>
        </h1>
    </div>

    <div>
        <div class=\"hc-col hc-col-1\">
            <div class=\"hc-block profil-block-mon_compte\">
                <div class=\"hc-block-header\">
                    <div class=\"ic-userprofile\"></div>
                    <h2 class=\"hc-block-title\">Mon <span>compte</span></h2>
                </div>
                <div class=\"hc-block-content\">
                    <ul>
                        <li class=\"profil-block-mon_compte-nom\">
                            <span>Prénom</span>
                            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "pharmacien", array()), "prenom", array()), "html", null, true);
        echo "
                        </li>
                        <li class=\"profil-block-mon_compte-prenom\">
                            <span>Nom</span>
                            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "pharmacien", array()), "nom", array()), "html", null, true);
        echo "
                        </li>
                        <li class=\"profil-block-mon_compte-email\">
                            <span>Email</span>
                            ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
        echo "
                        </li>
                        <li class=\"profil-block-mon_compte-optin\">
                            <input type=\"checkbox\" name=\"optin\" value=\"\" ";
        // line 37
        if (($this->getAttribute(($context["user"] ?? null), "offres", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo " /> <span>Je souhaite recevoir les dernières informations de la part de Biogaran</span>
                        </li>
                    </ul>
                </div>
                <a href=\"\" class=\"hc-block-footerlink\">
                    Modifier mes infos
                </a>
            </div>

            <div class=\"hc-block profile-block-change_password\">
                <div class=\"hc-block-header\">
                    <div class=\"ic-lock3\"></div>
                    <h2 class=\"hc-block-title\">Mon <span>mot de passe</span></h2>
                </div>
                <div class=\"hc-block-content\">
                    contenu
                    ";
        // line 61
        echo "                </div>
                <a href=\"\" class=\"hc-block-footerlink\">
                    Modifier mon mot de passe
                </a>
            </div>
        </div>

        <div class=\"hc-col hc-col-1\">
            <div class=\"hc-block profile-block-officines\">
                <div class=\"hc-block-header\">
                    <div class=\"ic-cross2\"></div>
                    <h2 class=\"hc-block-title\">Mes <span>officines</span></h2>
                </div>
                <div class=\"hc-block-content\">
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listOfficines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["officine"]) {
            // line 76
            echo "                        <div class=\"profile-block-officines-detail\">
                            <div class=\"pb-officines-header\">
                                <div class=\"pb-officines-header-ic ic-city\"></div>
                                <div class=\"pb-officines-header-txt\">
                                    ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["officine"], "nomPharmacie", array()), "html", null, true);
            echo "
                                </div>
                            </div>
                            <div class=\"pb-officines-content-line\">
                                <div class=\"pb-officines-content-ic ic-pointer\"></div>
                                <div class=\"pb-officines-content-txt\">
                                    ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["officine"], "localite", array()), "html", null, true);
            echo "
                                </div>
                            </div>
                            <div class=\"pb-officines-content-line\">
                                <div class=\"pb-officines-content-ic ic-phone\"></div>
                                <div class=\"pb-officines-content-txt\">
                                    ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["officine"], "telephoneFixe", array()), "html", null, true);
            echo "
                                </div>
                            </div>
                            <div class=\"pb-officines-footer\">
                                <div class=\"pb-officines-footer-leftcol\">
                                    <div class=\"pb-officines-footer-ic ic-userlog\"></div>
                                    <div class=\"pb-officines-footer-txt\">
                                        Mon <span>délégué</span>
                                    </div>
                                </div>
                                ";
            // line 102
            if (twig_length_filter($this->env, $this->getAttribute($context["officine"], "pmp", array()))) {
                // line 103
                echo "                                    <div class=\"pb-officines-footer-rightcol\">
                                        <div class=\"pb-officines-footer-nom_pmp\">
                                            ";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["officine"], "pmp", array()), "html", null, true);
                echo "
                                        </div>
                                        <div class=\"pb-officines-footer-nb_pmp\">
                                            <span class=\"ic-phone\"></span>
                                            <a href=\"tel:";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["officine"], "telephonePmp", array()), "html", null, true);
                echo "\">
                                                ";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["officine"], "telephonePmp", array()), "html", null, true);
                echo "
                                            </a>
                                        </div>
                                    </div>
                                ";
            }
            // line 115
            echo "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['officine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                </div>
                <a href=\"\" class=\"hc-block-footerlink\">
                    Modifier
                </a>
            </div>
        </div>

        <div class=\"hc-col hc-col-1\">
            <div class=\"hc-block hc-block-scli clearfix\">
                <div class=\"hc-block-scli-mobile-col\">
                    <h2 class=\"hc-block-title\">
                        Besoin d'aide ?
                    </h2>
                    <div class=\"ic-scli\"></div>
                </div>
                <div class=\"hc-block-scli-mobile-col\">
                    <p class=\"hc-block-scli-txt\">
                        <span>Consultez le service client en ligne</span>
                    </p>
                </div>
                <a href=\"\" class=\"hc-block-footerlink\">
                    Une question ?
                </a>
            </div>
            <div class=\"hc-block hc-block-scli-pb clearfix\">
                <h2 class=\"hc-block-title\">
                    Vous rencontrez un problème
                    <span>avec votre compte client ?</span>
                </h2>
                <div class=\"hc-block-scli-pb-container\">
                    <p class=\"hc-block-scli-txt\">
                        Contactez votre service client :
                    </p>
                    <a href=\"tel:";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? null), "scli_number", array()), "html", null, true);
        echo "\" class=\"hc-block-scli-nb\"><span class=\"ic-phone\"></span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? null), "scli_number", array()), "html", null, true);
        echo "</a>
                </div>
                <p class=\"hc-block-scli-note\">
                    Prix d'un appel local
                </p>
            </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return ":Pharmacien:pharmacien_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 151,  186 => 118,  178 => 115,  170 => 110,  166 => 109,  159 => 105,  155 => 103,  153 => 102,  140 => 92,  131 => 86,  122 => 80,  116 => 76,  112 => 75,  96 => 61,  75 => 37,  69 => 34,  62 => 30,  55 => 26,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Pharmacien:pharmacien_profil.html.twig", "/var/www/html/bio/app/Resources/views/Pharmacien/pharmacien_profil.html.twig");
    }
}
