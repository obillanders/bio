<?php

/* EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig */
class __TwigTemplate_a76ab2d35b91f50d16e62ec7ace1bbe20319d012263606e6e5ead9781a214090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ewz_recaptcha_widget' => array($this, 'block_ewz_recaptcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ewz_recaptcha_widget', $context, $blocks);
        // line 53
        echo "
";
    }

    // line 1
    public function block_ewz_recaptcha_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "ewz_recaptcha_enabled", array())) {
            // line 4
            echo "        ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "ewz_recaptcha_ajax", array())) {
                // line 5
                echo "            <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "url_challenge", array()), "html", null, true);
                echo "\"";
                // line 6
                if (($this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array(), "any", false, true), "defer", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array()), "defer", array()))) {
                    echo " defer";
                }
                // line 7
                if (($this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array(), "any", false, true), "async", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array()), "async", array()))) {
                    echo " async";
                }
                // line 8
                echo "></script>
            <div class=\"g-recaptcha\" data-theme=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array()), "theme", array()), "html", null, true);
                echo "\" data-size=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array()), "size", array()), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array()), "type", array()), "html", null, true);
                echo "\" data-sitekey=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "public_key", array()), "html", null, true);
                echo "\"";
                // line 10
                if ($this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array(), "any", false, true), "callback", array(), "any", true, true)) {
                    echo " data-callback=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array()), "callback", array()), "html", null, true);
                    echo "\"";
                }
                // line 11
                if ($this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array(), "any", false, true), "expiredCallback", array(), "any", true, true)) {
                    echo " data-expired-callback=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array()), "expiredCallback", array()), "html", null, true);
                    echo "\"";
                }
                // line 12
                echo "></div>
            <noscript>
                <div style=\"width: 302px; height: 352px;\">
                    <div style=\"width: 302px; height: 352px; position: relative;\">
                        <div style=\"width: 302px; height: 352px; position: absolute;\">
                            <iframe src=\"https://www.google.com/recaptcha/api/fallback?k=";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "public_key", array()), "html", null, true);
                echo "\"
                                    frameborder=\"0\" scrolling=\"no\"
                                    style=\"width: 302px; height:352px; border-style: none;\"
                            >
                            </iframe>
                        </div>
                        <div style=\"width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;\">
                            <textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\"
                                      class=\"g-recaptcha-response\"
                                      style=\"width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0; padding: 0; resize: none;\"
                            >
                            </textarea>
                        </div>
                    </div>
                </div>
            </noscript>
        ";
            } else {
                // line 34
                echo "            <div id=\"ewz_recaptcha_div\"></div>

            <script type=\"text/javascript\">
            (function() {
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onload = function() {
                    Recaptcha.create('";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "public_key", array()), "html", null, true);
                echo "', 'ewz_recaptcha_div', ";
                echo twig_jsonencode_filter((($this->getAttribute(($context["attr"] ?? null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "options", array()), array())) : (array())));
                echo ");
                };
                script.src = '";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "url_api", array()), "html", null, true);
                echo "';
                ";
                // line 44
                if (($this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array(), "any", false, true), "defer", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array()), "defer", array()))) {
                    echo "script.defer = true;";
                }
                // line 45
                echo "                ";
                if (($this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array(), "any", false, true), "async", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["attr"] ?? null), "options", array()), "async", array()))) {
                    echo "script.async = true;";
                }
                // line 46
                echo "                document.getElementsByTagName('head')[0].appendChild(script);
            })();
            </script>
        ";
            }
            // line 50
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  130 => 46,  125 => 45,  121 => 44,  117 => 43,  110 => 41,  101 => 34,  81 => 17,  74 => 12,  68 => 11,  62 => 10,  53 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  30 => 2,  27 => 1,  22 => 53,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig", "/var/www/html/bio/vendor/excelwebzone/recaptcha-bundle/src/Resources/views/Form/ewz_recaptcha_widget.html.twig");
    }
}
