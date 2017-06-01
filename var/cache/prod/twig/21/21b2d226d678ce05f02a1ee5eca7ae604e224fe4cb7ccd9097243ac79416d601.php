<?php

/* :Pharmacien:pharmacien_index.html.twig */
class __TwigTemplate_091d57cd641b05cb71e75b341ea091c67c33b573bca70243ed31d51509bb96dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", ":Pharmacien:pharmacien_index.html.twig", 1);
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
        echo "    ";
        // line 11
        echo "
    <div class=\"hc-col hc-col-1\">
        ";
        // line 13
        if (twig_length_filter($this->env, ($context["listNews"] ?? null))) {
            // line 14
            echo "            <div class=\"hc-block hc-block-actus\">
                <div class=\"hc-block-roundedsquare\"></div>
                <div class=\"hc-block-header\">
                    <h2 class=\"hc-block-title\">Les <span>actualités</span></h2>
                </div>
                <ul>
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listNews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 21
                echo "                        <li>
                            <a href=\"#TODO\" class=\"media\">
                                <aside class=\"media-left\">
                                    <div class=\"media-left-inside\">
                                        <img src=\"";
                // line 25
                echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($this->getAttribute($context["news"], "image", array()), "small");
                echo "\" alt=\"\"/>
                                    </div>
                                </aside>
                                <div class=\"media-body\">
                                    <p>";
                // line 29
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["news"], "title", array()), 70, true), "html", null, true);
                echo "</p>
                                    <span>Posté le ";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["news"], "updatedAt", array()), "date", array()), "d F à G\\hi"), "html", null, true);
                echo "</span>
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"hc-block-news-more\">+</div>
                                </div>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </ul>
                <a href=\"\" class=\"hc-block-footerlink\">
                    Toutes les actus
                </a>
            </div>
        ";
        }
        // line 44
        echo "
        <div class=\"hc-block hc-block-typeimg hc-block-ecata\">
            <div class=\"hc-block-typeimg-leftcol\">
                <div class=\"hc-block-header\">
                    <div class=\"ic-medbottle\"></div>
                    <h2 class=\"hc-block-title\">Notre <span>e-catalogue</span></h2>
                </div>
                <div class=\"hc-block-content\">
                    <p class=\"hc-block-content-top\">
                        Accédez aux fiches complètes de plus
                        de 800 spécialités.
                    </p>
                    <p class=\"hc-block-content-sep\"></p>
                    <p class=\"hc-block-content-bottom\">
                        Exclusivités, nouveautés, ruptures...
                    </p>
                </div>
            </div>
            <div class=\"hc-block-typeimg-rightcol\">
                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/e-catalogue.png"), "html", null, true);
        echo "\" alt=\"\">
                <a href=\"\" class=\"hc-block-footerlink\">
                    Commander
                </a>
            </div>
        </div>

        <div class=\"hc-block hc-block-remis\">
            <div class=\"hc-block-roundedsquare\"></div>
            <div class=\"hc-block-header\">
                <div class=\"ic-remis\"></div>
                <h2 class=\"hc-block-title\">Les Remis <span>pharmacien</span></h2>
            </div>
            <div class=\"hc-block-content\">
                <p class=\"hc-block-content-top-alone\">
                    Profitez d’outils pratiques qui facilitent votre quotidien.
                </p>
                <div class=\"hc-block-content-sep\"></div>
                <p class=\"hc-block-content-bottom-alone\">
                    Brochures patients, outils
                    d’équivalence...
                </p>
            </div>
            <a href=\"\" class=\"hc-block-footerlink\">
                Accéder
            </a>
        </div>
    </div>
    <div class=\"hc-col hc-col-2\">
        <div class=\"hc-block hc-block-indicateurs\">
            <div class=\"hc-block-roundedsquare\"></div>
            <div class=\"hc-block-header\">
                <div class=\"ic-graph\"></div>
                <h2 class=\"hc-block-title\">Mes indicateurs <span>de performance</span></h2>
            </div>
            <div class=\"hc-block-indicateurs-content\">
                <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/indicateurs.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
            </div>
            <a href=\"\" class=\"hc-block-footerlink\">
                Accéder
            </a>
        </div>

        <div class=\"hc-block hc-block-contrats\">
            <div class=\"hc-block-roundedsquare\"></div>
            <div class=\"hc-block-header\">
                <div class=\"ic-contrats\"></div>
                <h2 class=\"hc-block-title\">Gestion de <span>mes contrats</span></h2>
            </div>
            <div class=\"hc-block-content\">
                <p class=\"hc-block-content-top-alone\">
                    Retrouvez tous vos contrats
                    de prestation dans un même espace.
                </p>
                <p class=\"hc-block-content-sep\"></p>
                <div class=\"hc-bloc-contrats-bulle\">
                    <span>1</span>
                </div>
                <p class=\"hc-block-content-bottom\">
                    Contrat en attente de signature
                </p>
            </div>
            <a href=\"\" class=\"hc-block-footerlink\">
                Tous mes contrats
            </a>
        </div>

        <div class=\"hc-block hc-block-typeimg hc-block-srv_patients clearfix\">
            <div class=\"hc-block-typeimg-leftcol\">
                <div class=\"hc-block-header\">
                    <div class=\"ic-services\"></div>
                    <h2 class=\"hc-block-title\">Les services <span>patients</span></h2>
                </div>
                <div class=\"hc-block-content\">
                    <p class=\"hc-block-content-top\">
                        Des services pour vous
                        aider à accompagner vos patients.
                    </p>
                    <p class=\"hc-block-content-sep\"></p>
                    <p class=\"hc-block-content-bottom\">
                        Kelmed®, Médimaux, Mon Urgence Pilule...
                    </p>
                </div>
            </div>
            <div class=\"hc-block-typeimg-rightcol\">
                <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/srv_patients.png"), "html", null, true);
        echo "\" alt=\"\">
                <a href=\"\" class=\"hc-block-footerlink\">
                    Accéder
                </a>
            </div>
        </div>
    </div>

    <div class=\"hc-col hc-col-3\">
        ";
        // line 157
        if (twig_length_filter($this->env, $this->getAttribute(($context["pmp"] ?? null), "name", array()))) {
            // line 158
            echo "            <div class=\"hc-block hc-block-delegue\">
                <div class=\"hc-block-roundedsquare\"></div>
                <div class=\"hc-block-header\">
                    <div class=\"ic-delegue\"></div>
                    <h2 class=\"hc-block-title\">Mon <span>délégué</span></h2>
                </div>
                <div class=\"hc-block-content\">
                    <p class=\"hc-block-content-top hc-block-delegue-name\">";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pmp"] ?? null), "name", array()), "html", null, true);
            echo "</p>
                    <p class=\"hc-block-delegue-tel\">
                        <span class=\"ic-phone\"></span>
                        <a href=\"tel:";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pmp"] ?? null), "tel", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pmp"] ?? null), "tel", array()), "html", null, true);
            echo "</a>
                    </p>
                </div>
            </div>
        ";
        } else {
            // line 173
            echo "            <div class=\"hc-block hc-block-scli-pb clearfix\">
                <h2 class=\"hc-block-title\">
                    Vous rencontrez un problème
                    <span>avec votre compte client ?</span>
                </h2>
                <div class=\"hc-block-scli-pb-container\">
                    <p class=\"hc-block-scli-txt\">
                        Contactez votre service client :
                    </p>
                    <a href=\"tel:";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? null), "scli_number", array()), "html", null, true);
            echo "\" class=\"hc-block-scli-nb\"><span class=\"ic-phone\"></span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? null), "scli_number", array()), "html", null, true);
            echo "</a>
                </div>
                <p class=\"hc-block-scli-note\">
                    Prix d'un appel local
                </p>
            </div>
        ";
        }
        // line 189
        echo "        <div class=\"hc-block hc-block-scli-pb clearfix\">
            <h2 class=\"hc-block-title\">
                Vous rencontrez un problème
                <span>avec votre compte clent ?</span>
            </h2>
            <div class=\"hc-block-scli-pb-container\">
                <p class=\"hc-block-scli-txt\">
                    Contactez votre service client :
                </p>
                <a href=\"tel:";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? null), "scli_number", array()), "html", null, true);
        echo "\" class=\"hc-block-scli-nb\"><span class=\"ic-phone\"></span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? null), "scli_number", array()), "html", null, true);
        echo "</a>
            </div>
            <p class=\"hc-block-scli-note\">
                Prix d'un appel local
            </p>
        </div>

        <div class=\"hc-block hc-block-scli clearfix\">
            <div class=\"hc-block-scli-mobile-col\">
                <h2 class=\"hc-block-title\">
                    Mon service client <span>en ligne</span>
                </h2>
                <div class=\"ic-scli\"></div>
            </div>
            <div class=\"hc-block-scli-mobile-col\">
                <p class=\"hc-block-scli-txt\">paramétrage PML,
                    calibrage PDA, levées de
                    ruptures ...</p>
            </div>
            <a href=\"\" class=\"hc-block-footerlink\">
                Une question ?
            </a>
        </div>

        <div class=\"hc-block hc-block-formations\">
            <div class=\"hc-block-roundedsquare\"></div>
            <div class=\"hc-block-header\">
                <div class=\"ic-formation\"></div>
                <h2 class=\"hc-block-title\">Mes programmes <span>et formations</span></h2>
            </div>
            <div class=\"hc-block-content\">
                <p class=\"hc-block-content-top\">
                    Renforcez votre expertise
                    et votre rôle de conseil.
                </p>
                <div class=\"hc-block-content-sep\"></div>
                <p class=\"hc-block-content-bottom\">
                    Pathologies, rentabilité de
                    l’officine, accompagnement ...
                </p>
            </div>
            <a href=\"\" class=\"hc-block-footerlink\">
                Accéder
            </a>
        </div>

        <div class=\"hc-block hc-block-satisfaction\">
            <h2 class=\"hc-block-title\">Satisfaction pharmacien</h2>
            <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/stars.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
            <p class=\"hc-block-satisfaction-note\">4,8</p>
            <p class=\"hc-block-satisfaction-content\">
                L'expert du marché français,<br/>le laboratoire préféré des pharmaciens.
            </p>
            <a href=\"\" class=\"hc-block-footerlink\">
                Nos engagements
            </a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return ":Pharmacien:pharmacien_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 246,  275 => 198,  264 => 189,  252 => 182,  241 => 173,  231 => 168,  225 => 165,  216 => 158,  214 => 157,  202 => 148,  150 => 99,  111 => 63,  90 => 44,  82 => 38,  68 => 30,  64 => 29,  57 => 25,  51 => 21,  47 => 20,  39 => 14,  37 => 13,  33 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Pharmacien:pharmacien_index.html.twig", "/var/www/html/bio/app/Resources/views/Pharmacien/pharmacien_index.html.twig");
    }
}
