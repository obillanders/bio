<?php

/* @EWZRecaptcha/Form/ewz_recaptcha_widget.html.php */
class __TwigTemplate_d38219fc3f2370834e6af1fe792e3948353a887eaf5d2e0c505c53af5f20a2b7 extends Twig_Template
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
        echo "<?php if (\$ewz_recaptcha_enabled): ?>
    <?php if (!\$ewz_recaptcha_ajax): ?>
        <script type=\"text/javascript\" src=\"<?php echo \$url_challenge ?>\"
            <?php if (isset(\$attr['options']['defer']) && \$attr['options']['defer']): ?> defer<?php endif ?>
            <?php if (isset(\$attr['options']['async']) && \$attr['options']['async']): ?> async<?php endif ?>
        ></script>
        <div class=\"g-recaptcha\" data-theme=\"<?php echo \$attr['options']['theme'] ?>\" data-size=\"<?php echo \$attr['options']['size'] ?>\" data-type=\"<?php echo \$attr['options']['type'] ?>\" data-sitekey=\"<?php echo \$public_key ?>\"
            <?php if (isset(\$attr['options']['callback'])): ?>data-callback=\"<?php echo \$attr['options']['callback'] ?>\"<?php endif ?>
            <?php if (isset(\$attr['options']['expiredCallback'])): ?>data-expired-callback=\"<?php echo \$attr['options']['expiredCallback'] ?>\"<?php endif ?>
        ></div>
        <noscript>
            <div style=\"width: 302px; height: 352px;\">
                <div style=\"width: 302px; height: 352px; position: relative;\">
                    <div style=\"width: 302px; height: 352px; position: absolute;\">
                        <iframe src=\"https://www.google.com/recaptcha/api/fallback?k=<?php echo \$public_key ?>\"
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
    <?php else: ?>
        <div id=\"ewz_recaptcha_div\"></div>

        <script type=\"text/javascript\">
        (function() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.onload = function() {
                Recaptcha.create('<?php echo \$public_key ?>', 'ewz_recaptcha_div', <?php echo json_encode(\$attr['options']) ?>);
            };
            script.src = '<?php echo \$url_api ?>';
            <?php if (isset(\$attr['options']['defer']) && \$attr['options']['defer']): ?>script.defer = true;<?php endif ?>
            <?php if (isset(\$attr['options']['async']) && \$attr['options']['async']): ?>script.async = true;<?php endif ?>
            document.getElementsByTagName('head')[0].appendChild(script);
        })();
        </script>
    <?php endif ?>
<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.php", "/var/www/html/bio/vendor/excelwebzone/recaptcha-bundle/src/Resources/views/Form/ewz_recaptcha_widget.html.php");
    }
}
