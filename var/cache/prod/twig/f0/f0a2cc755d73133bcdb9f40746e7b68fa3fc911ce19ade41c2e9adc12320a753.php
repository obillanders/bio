<?php

/* GuzzleBundle::debug.html.twig */
class __TwigTemplate_1d547ac7d88649b1e79092cc369dc2f80db70184f90fc2750450bcced9b7b21f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_toolbar($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "callCount", array())) {
            // line 6
            echo "        ";
            if ($this->getAttribute(($context["collector"] ?? null), "errorCount", array())) {
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
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "callCount", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "callCount", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                ";
            // line 28
            if (($this->getAttribute(($context["collector"] ?? null), "totalTime", array()) > 1)) {
                // line 29
                echo "                    <span>";
                echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute(($context["collector"] ?? null), "totalTime", array())), "html", null, true);
                echo " s</span>
                ";
            } else {
                // line 31
                echo "                    <span>";
                echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute(($context["collector"] ?? null), "totalTime", array()) * 1000)), "html", null, true);
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
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "GuzzleBundle::debug.html.twig", 36)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? null))));
            // line 37
            echo "    ";
        }
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "callCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 55
    public function block_head($context, array $blocks = array())
    {
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
    }

    // line 63
    public function block_panel($context, array $blocks = array())
    {
        // line 64
        echo "
    <h2>Logs</h2>

    ";
        // line 67
        $this->loadTemplate("GuzzleBundle::profiler.html.twig", "GuzzleBundle::debug.html.twig", 67)->display(array_merge($context, array("collector" => ($context["collector"] ?? null))));
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
        return array (  170 => 67,  165 => 64,  162 => 63,  156 => 60,  152 => 59,  147 => 57,  144 => 56,  141 => 55,  133 => 49,  126 => 45,  121 => 42,  118 => 41,  113 => 37,  111 => 36,  108 => 35,  104 => 33,  98 => 31,  92 => 29,  90 => 28,  82 => 23,  77 => 20,  75 => 19,  72 => 18,  66 => 15,  62 => 14,  57 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GuzzleBundle::debug.html.twig", "/var/www/html/bio/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle/Resources/views/debug.html.twig");
    }
}
