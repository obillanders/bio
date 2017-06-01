<?php

/* GuzzleBundle::debug.html.twig */
class __TwigTemplate_deff9593f753f387ad848dba8f5aa7dd35d6d19c899fd5fedebe6f677c14df5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "GuzzleBundle::debug.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50e80bba8098d57ede4568050a22681e9d8bc066650a56a2dcdef99f16dad717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e80bba8098d57ede4568050a22681e9d8bc066650a56a2dcdef99f16dad717->enter($__internal_50e80bba8098d57ede4568050a22681e9d8bc066650a56a2dcdef99f16dad717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GuzzleBundle::debug.html.twig"));

        $__internal_b4c3f45bcd0d253d1432ee6f1eee79b342d077d65af179d81c0ba8f5aa877815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c3f45bcd0d253d1432ee6f1eee79b342d077d65af179d81c0ba8f5aa877815->enter($__internal_b4c3f45bcd0d253d1432ee6f1eee79b342d077d65af179d81c0ba8f5aa877815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GuzzleBundle::debug.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e80bba8098d57ede4568050a22681e9d8bc066650a56a2dcdef99f16dad717->leave($__internal_50e80bba8098d57ede4568050a22681e9d8bc066650a56a2dcdef99f16dad717_prof);

        
        $__internal_b4c3f45bcd0d253d1432ee6f1eee79b342d077d65af179d81c0ba8f5aa877815->leave($__internal_b4c3f45bcd0d253d1432ee6f1eee79b342d077d65af179d81c0ba8f5aa877815_prof);

    }

    // line 4
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74650722343478f6c33564c502a348bfb039c869407bca0faca9560dcde8966c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74650722343478f6c33564c502a348bfb039c869407bca0faca9560dcde8966c->enter($__internal_74650722343478f6c33564c502a348bfb039c869407bca0faca9560dcde8966c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6baeac700e55fabd50a8ad0701d2154cbbc3fe8a9616fc5e711f0c3e1d614a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6baeac700e55fabd50a8ad0701d2154cbbc3fe8a9616fc5e711f0c3e1d614a53->enter($__internal_6baeac700e55fabd50a8ad0701d2154cbbc3fe8a9616fc5e711f0c3e1d614a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 5
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "callCount", array())) {
            // line 6
            echo "        ";
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "errorCount", array())) {
                // line 7
                echo "            ";
                $context["color"] = "red";
                // line 8
                echo "        ";
            } else {
                // line 9
                echo "            ";
                $context["color"] = "green";
                // line 10
                echo "        ";
            }
            // line 11
            echo "
        ";
            // line 12
            ob_start();
            // line 13
            echo "            ";
            echo twig_include($this->env, $context, "@Guzzle/Icons/logo.svg.twig");
            echo "
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 14
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo "\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 18
            echo "
        ";
            // line 19
            ob_start();
            // line 20
            echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>API Calls</b>
                <span>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                ";
            // line 28
            if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()) > 1)) {
                // line 29
                echo "                    <span>";
                echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array())), "html", null, true);
                echo " s</span>
                ";
            } else {
                // line 31
                echo "                    <span>";
                echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
                echo " ms</span>
                ";
            }
            // line 33
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 35
            echo "
        ";
            // line 36
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "GuzzleBundle::debug.html.twig", 36)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")))));
            // line 37
            echo "    ";
        }
        
        $__internal_6baeac700e55fabd50a8ad0701d2154cbbc3fe8a9616fc5e711f0c3e1d614a53->leave($__internal_6baeac700e55fabd50a8ad0701d2154cbbc3fe8a9616fc5e711f0c3e1d614a53_prof);

        
        $__internal_74650722343478f6c33564c502a348bfb039c869407bca0faca9560dcde8966c->leave($__internal_74650722343478f6c33564c502a348bfb039c869407bca0faca9560dcde8966c_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de7807ccf17f0136208636dde260b1ea310133383414259ede5b4a8036086bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7807ccf17f0136208636dde260b1ea310133383414259ede5b4a8036086bf1->enter($__internal_de7807ccf17f0136208636dde260b1ea310133383414259ede5b4a8036086bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a8a2099b9a0211dd7185219a6e69c647ac37b47c7d747ac315e6f6bea2cc6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8a2099b9a0211dd7185219a6e69c647ac37b47c7d747ac315e6f6bea2cc6a8->enter($__internal_4a8a2099b9a0211dd7185219a6e69c647ac37b47c7d747ac315e6f6bea2cc6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "
    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 45
        echo twig_include($this->env, $context, "@Guzzle/Icons/logo.svg.twig");
        echo "
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_4a8a2099b9a0211dd7185219a6e69c647ac37b47c7d747ac315e6f6bea2cc6a8->leave($__internal_4a8a2099b9a0211dd7185219a6e69c647ac37b47c7d747ac315e6f6bea2cc6a8_prof);

        
        $__internal_de7807ccf17f0136208636dde260b1ea310133383414259ede5b4a8036086bf1->leave($__internal_de7807ccf17f0136208636dde260b1ea310133383414259ede5b4a8036086bf1_prof);

    }

    // line 55
    public function block_head($context, array $blocks = array())
    {
        $__internal_27deef692ae8c999af0a3a4e5dc9735eb4e0f0f1dcc01e38210ec65a02d75de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27deef692ae8c999af0a3a4e5dc9735eb4e0f0f1dcc01e38210ec65a02d75de7->enter($__internal_27deef692ae8c999af0a3a4e5dc9735eb4e0f0f1dcc01e38210ec65a02d75de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c627de1d1049d2f94007aa2cf00fa7809c988ea2740446409d650fb0f6264f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c627de1d1049d2f94007aa2cf00fa7809c988ea2740446409d650fb0f6264f6->enter($__internal_2c627de1d1049d2f94007aa2cf00fa7809c988ea2740446409d650fb0f6264f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 56
        echo "
    ";
        // line 57
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/guzzle/css/main.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/guzzle/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2c627de1d1049d2f94007aa2cf00fa7809c988ea2740446409d650fb0f6264f6->leave($__internal_2c627de1d1049d2f94007aa2cf00fa7809c988ea2740446409d650fb0f6264f6_prof);

        
        $__internal_27deef692ae8c999af0a3a4e5dc9735eb4e0f0f1dcc01e38210ec65a02d75de7->leave($__internal_27deef692ae8c999af0a3a4e5dc9735eb4e0f0f1dcc01e38210ec65a02d75de7_prof);

    }

    // line 63
    public function block_panel($context, array $blocks = array())
    {
        $__internal_686387f79dc3c5fa5ab27d800e3abea912697342ca85979ba5b27396e0f59be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686387f79dc3c5fa5ab27d800e3abea912697342ca85979ba5b27396e0f59be2->enter($__internal_686387f79dc3c5fa5ab27d800e3abea912697342ca85979ba5b27396e0f59be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_da1798a158ef466fb5789f357eed370a09bdbc97c17dd8e3520a774539fc1b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1798a158ef466fb5789f357eed370a09bdbc97c17dd8e3520a774539fc1b9e->enter($__internal_da1798a158ef466fb5789f357eed370a09bdbc97c17dd8e3520a774539fc1b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 64
        echo "
    <h2>Logs</h2>

    ";
        // line 67
        $this->loadTemplate("GuzzleBundle::profiler.html.twig", "GuzzleBundle::debug.html.twig", 67)->display(array_merge($context, array("collector" => ($context["collector"] ?? $this->getContext($context, "collector")))));
        
        $__internal_da1798a158ef466fb5789f357eed370a09bdbc97c17dd8e3520a774539fc1b9e->leave($__internal_da1798a158ef466fb5789f357eed370a09bdbc97c17dd8e3520a774539fc1b9e_prof);

        
        $__internal_686387f79dc3c5fa5ab27d800e3abea912697342ca85979ba5b27396e0f59be2->leave($__internal_686387f79dc3c5fa5ab27d800e3abea912697342ca85979ba5b27396e0f59be2_prof);

    }

    public function getTemplateName()
    {
        return "GuzzleBundle::debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 67,  219 => 64,  210 => 63,  198 => 60,  194 => 59,  189 => 57,  186 => 56,  177 => 55,  163 => 49,  156 => 45,  151 => 42,  142 => 41,  131 => 37,  129 => 36,  126 => 35,  122 => 33,  116 => 31,  110 => 29,  108 => 28,  100 => 23,  95 => 20,  93 => 19,  90 => 18,  84 => 15,  80 => 14,  75 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  52 => 5,  43 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"WebProfilerBundle:Profiler:layout.html.twig\" %}


{% block toolbar %}
    {% if collector.callCount %}
        {% if collector.errorCount %}
            {% set color = 'red' %}
        {% else %}
            {% set color = 'green' %}
        {% endif %}

        {% set icon %}
            {{ include(\"@Guzzle/Icons/logo.svg.twig\") }}
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ color }}\">
                {{ collector.callCount }}
            </span>
        {% endset %}

        {% set text %}

            <div class=\"sf-toolbar-info-piece\">
                <b>API Calls</b>
                <span>{{ collector.callCount }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                {% if collector.totalTime > 1.0 %}
                    <span>{{ '%0.2f'|format(collector.totalTime) }} s</span>
                {% else %}
                    <span>{{ '%0.0f'|format(collector.totalTime * 1000) }} ms</span>
                {% endif %}
            </div>
        {% endset %}

        {% include \"WebProfilerBundle:Profiler:toolbar_item.html.twig\" with { \"link\": profiler_url } %}
    {% endif %}
{% endblock %}


{% block menu %}

    <span class=\"label\">
        <span class=\"icon\">
            {{ include(\"@Guzzle/Icons/logo.svg.twig\") }}
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>{{ collector.callCount }}</span>
        </span>
    </span>
{% endblock %}


{% block head %}

    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/guzzle/css/main.css') }}\" />
    <script src=\"{{ asset('bundles/guzzle/js/jquery.min.js') }}\"></script>
{% endblock %}

{% block panel %}

    <h2>Logs</h2>

    {% include 'GuzzleBundle::profiler.html.twig' with { 'collector': collector } %}
{% endblock %}
", "GuzzleBundle::debug.html.twig", "/var/www/html/bio/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle/Resources/views/debug.html.twig");
    }
}
