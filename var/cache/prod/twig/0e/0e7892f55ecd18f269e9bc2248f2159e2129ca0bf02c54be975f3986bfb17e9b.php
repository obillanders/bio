<?php

/* SonataMediaBundle:Extra:pixlr_exit.html.twig */
class __TwigTemplate_dfc07aede2c11f23028e91b9d805a3663dee44864ba5e617bb7debc810b58c69 extends Twig_Template
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
        // line 11
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
    </head>

    <body>
        <script type=\"text/javascript\">
            if (window.parent && \"undefined\" !== window.parent.closeModal) {
                window.parent.closeModal();
            }
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Extra:pixlr_exit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Extra:pixlr_exit.html.twig", "/var/www/html/bio/vendor/sonata-project/media-bundle/Resources/views/Extra/pixlr_exit.html.twig");
    }
}
