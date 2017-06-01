<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_d2bf559f46785ca29cdefef1ec4aae1b04b2856e78b888e374c49af1bd9cc9aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'prehome_right_content' => array($this, 'block_prehome_right_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 16
        echo "        <div class=\"ph-left-col\">
            <div class=\"header-mobile clearfix\">
                <h1 class=\"text-hide ph-h1-mobile\">Biogaran.pro Espace officine</h1>
                <a href=\"#mobile-connexion\" class=\"ph-connexion_link-mobile\">Connexion <span class=\"ic-userlog\"></span></a>
            </div>
            <h1 class=\"text-hide ph-h1\">Biogaran.pro Espace officine</h1>
            <h2 class=\"ph-h2\">La plateforme <span>connectée</span> aux<br/>
                nouvelles attentes de votre métier</h2>

            <div class=\"ph-blocs\">
                <div class=\"ph-blocs-row\">
                    <div class=\"ph-bloc ph-bloc-actus\">
                        <div class=\"ph-blocs-innertable\">
                            <div class=\"ph-bloc-ic ic-actus\"></div>
                            <div class=\"ph-bloc-txt\">Les <span><strong>actualités</strong></span></div>
                        </div>
                    </div>
                    <div class=\"ph-bloc ph-bloc-services\">
                        <div class=\"ph-blocs-innertable\">
                            <div class=\"ph-bloc-ic ic-services\"></div>
                            <div class=\"ph-bloc-txt\">Vos <span><strong>services patients</strong></span></div>
                        </div>
                    </div>
                </div>

                <div class=\"ph-blocs-row\">
                    <div class=\"ph-bloc ph-bloc-indicateurs\">
                        <div class=\"ph-blocs-innertable\">
                            <div class=\"ph-bloc-ic ic-graph\"></div>
                            <div class=\"ph-bloc-txt\">Vos <strong>indicateurs <span>et contrats</span></strong></div>
                        </div>
                    </div>
                    <div class=\"ph-bloc ph-bloc-ecat\">
                        <div class=\"ph-blocs-innertable\">
                            <div class=\"ph-bloc-ic ic-medbottle\"></div>
                            <div class=\"ph-bloc-txt\">Notre <span><strong>e-catalogue</strong></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? null), "youtube_homepage", array()), "html", null, true);
        echo "\" class=\"ph-videolink\" data-lity>
                <div class=\"ph-videolink-inside\">
                    <span class=\"ic-play\"></span>
                    <span class=\"ph-videolink-txt\">Découvrez la vidéo</span>
                </div>
            </a>
        </div>

        <div class=\"ph-right-col\">
            <div class=\"ph-right-col-scrollbox ";
        // line 65
        echo twig_escape_filter($this->env, twig_replace_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "pathInfo", array()), "/"), "/", "-"), "html", null, true);
        echo "\">

                ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "hasPreviousSession", array())) {
            // line 68
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 69
                echo "                        <div class=\"flash-msg\">
                            ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 71
                    echo "                                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                    ";
                    // line 72
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                ";
        }
        // line 78
        echo "
                ";
        // line 79
        $this->displayBlock('prehome_right_content', $context, $blocks);
        // line 80
        echo "            </div>
        </div>

        <footer class=\"ph-footer clearfix\">
            <div class=\"ph-right-col-footer\">
                <ul>
                    <li>
                        <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_contact");
        echo "\">Contact</a>
                    </li>
                    <li>
                        <a href=\"#\">Mentions légales</a>
                    </li>
                    <li>
                        <p>Mise à jour le xx/xx</p>
                    </li>
                </ul>
            </div>
            <div class=\"ph-left-col-footer ftr-pink\">chaque jour, agir pour la santé.</div>

        </footer>
        ";
        // line 101
        echo "    ";
    }

    // line 79
    public function block_prehome_right_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 79,  171 => 101,  155 => 87,  146 => 80,  144 => 79,  141 => 78,  138 => 77,  131 => 75,  122 => 72,  117 => 71,  113 => 70,  110 => 69,  105 => 68,  103 => 67,  98 => 65,  86 => 56,  44 => 16,  38 => 15,  35 => 14,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/layout.html.twig", "/var/www/html/bio/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
