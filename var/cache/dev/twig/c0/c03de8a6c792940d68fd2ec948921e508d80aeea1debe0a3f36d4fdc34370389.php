<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_e0070094d8c8c95ddc94dd1902bca1d4986e136e096312263330d60875483f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_7cb6cbfcbda20e5905e9e51f89c101666f6c18b1d298840bbef0eabc8d4524b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb6cbfcbda20e5905e9e51f89c101666f6c18b1d298840bbef0eabc8d4524b3->enter($__internal_7cb6cbfcbda20e5905e9e51f89c101666f6c18b1d298840bbef0eabc8d4524b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_bd86c73898bd5120d626258b14a6a2ac7fc00b82dc67ad13eff9b860325ba775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd86c73898bd5120d626258b14a6a2ac7fc00b82dc67ad13eff9b860325ba775->enter($__internal_bd86c73898bd5120d626258b14a6a2ac7fc00b82dc67ad13eff9b860325ba775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb6cbfcbda20e5905e9e51f89c101666f6c18b1d298840bbef0eabc8d4524b3->leave($__internal_7cb6cbfcbda20e5905e9e51f89c101666f6c18b1d298840bbef0eabc8d4524b3_prof);

        
        $__internal_bd86c73898bd5120d626258b14a6a2ac7fc00b82dc67ad13eff9b860325ba775->leave($__internal_bd86c73898bd5120d626258b14a6a2ac7fc00b82dc67ad13eff9b860325ba775_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8532cb36229481d5520681015e182c108cb0803931cebd488a288caa8fa67d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8532cb36229481d5520681015e182c108cb0803931cebd488a288caa8fa67d13->enter($__internal_8532cb36229481d5520681015e182c108cb0803931cebd488a288caa8fa67d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b9a01e3e30cce11067bcbc70522583d4b449efb16b48ac3a66bc322e5881f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9a01e3e30cce11067bcbc70522583d4b449efb16b48ac3a66bc322e5881f2c->enter($__internal_6b9a01e3e30cce11067bcbc70522583d4b449efb16b48ac3a66bc322e5881f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_6b9a01e3e30cce11067bcbc70522583d4b449efb16b48ac3a66bc322e5881f2c->leave($__internal_6b9a01e3e30cce11067bcbc70522583d4b449efb16b48ac3a66bc322e5881f2c_prof);

        
        $__internal_8532cb36229481d5520681015e182c108cb0803931cebd488a288caa8fa67d13->leave($__internal_8532cb36229481d5520681015e182c108cb0803931cebd488a288caa8fa67d13_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cc4aebc8958fe2273818cae1116243bcc05e7f79005466fb0aa2ea80c4e8c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc4aebc8958fe2273818cae1116243bcc05e7f79005466fb0aa2ea80c4e8c6c->enter($__internal_6cc4aebc8958fe2273818cae1116243bcc05e7f79005466fb0aa2ea80c4e8c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_147ff62b59edba42e5bdbd5a44389f52bb31724345061c453474d990c842f73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147ff62b59edba42e5bdbd5a44389f52bb31724345061c453474d990c842f73e->enter($__internal_147ff62b59edba42e5bdbd5a44389f52bb31724345061c453474d990c842f73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "youtube_homepage", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_replace_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "pathInfo", array()), "/"), "/", "-"), "html", null, true);
        echo "\">

                ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 68
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_147ff62b59edba42e5bdbd5a44389f52bb31724345061c453474d990c842f73e->leave($__internal_147ff62b59edba42e5bdbd5a44389f52bb31724345061c453474d990c842f73e_prof);

        
        $__internal_6cc4aebc8958fe2273818cae1116243bcc05e7f79005466fb0aa2ea80c4e8c6c->leave($__internal_6cc4aebc8958fe2273818cae1116243bcc05e7f79005466fb0aa2ea80c4e8c6c_prof);

    }

    // line 79
    public function block_prehome_right_content($context, array $blocks = array())
    {
        $__internal_258e39314ee7284b2c1b1d0b2477bd271c01b6417156adeedd237bdcd09f4a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258e39314ee7284b2c1b1d0b2477bd271c01b6417156adeedd237bdcd09f4a13->enter($__internal_258e39314ee7284b2c1b1d0b2477bd271c01b6417156adeedd237bdcd09f4a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prehome_right_content"));

        $__internal_a1150cda59fa7a05b72db900843001f306e51a2b17ab4c0d280dee1108139e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1150cda59fa7a05b72db900843001f306e51a2b17ab4c0d280dee1108139e5e->enter($__internal_a1150cda59fa7a05b72db900843001f306e51a2b17ab4c0d280dee1108139e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prehome_right_content"));

        
        $__internal_a1150cda59fa7a05b72db900843001f306e51a2b17ab4c0d280dee1108139e5e->leave($__internal_a1150cda59fa7a05b72db900843001f306e51a2b17ab4c0d280dee1108139e5e_prof);

        
        $__internal_258e39314ee7284b2c1b1d0b2477bd271c01b6417156adeedd237bdcd09f4a13->leave($__internal_258e39314ee7284b2c1b1d0b2477bd271c01b6417156adeedd237bdcd09f4a13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 79,  201 => 101,  185 => 87,  176 => 80,  174 => 79,  171 => 78,  168 => 77,  161 => 75,  152 => 72,  147 => 71,  143 => 70,  140 => 69,  135 => 68,  133 => 67,  128 => 65,  116 => 56,  74 => 16,  56 => 15,  53 => 14,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    {#<div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
          </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}
</div>#}

    {% block fos_user_content %}
        <div class=\"ph-left-col\">
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
            <a href=\"{{ app_config.youtube_homepage }}\" class=\"ph-videolink\" data-lity>
                <div class=\"ph-videolink-inside\">
                    <span class=\"ic-play\"></span>
                    <span class=\"ph-videolink-txt\">Découvrez la vidéo</span>
                </div>
            </a>
        </div>

        <div class=\"ph-right-col\">
            <div class=\"ph-right-col-scrollbox {{ app.request.pathInfo|trim('/')|replace('/', '-') }}\">

                {% if app.request.hasPreviousSession %}
                    {% for type, messages in app.session.flashbag.all() %}
                        <div class=\"flash-msg\">
                            {% for message in messages %}
                                <div class=\"flash-{{ type }}\">
                                    {{ message }}
                                </div>
                            {% endfor %}
                        </div>
                    {% endfor %}
                {% endif %}

                {% block prehome_right_content %}{% endblock %}
            </div>
        </div>

        <footer class=\"ph-footer clearfix\">
            <div class=\"ph-right-col-footer\">
                <ul>
                    <li>
                        <a href=\"{{ path('app_contact') }}\">Contact</a>
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
        {# </div>#}
    {% endblock fos_user_content %}
{% endblock body %}

", "FOSUserBundle::layout.html.twig", "/var/www/html/bio/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
