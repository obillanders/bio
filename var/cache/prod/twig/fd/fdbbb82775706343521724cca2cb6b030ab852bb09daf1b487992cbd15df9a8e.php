<?php

/* GuzzleBundle:Icons:logo.svg.twig */
class __TwigTemplate_b77a03165af6cae29ebf7ef9ff42ccde8adc55302984ad78d7724f3eb0a179bc extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\"
     width=\"24px\" height=\"28px\" viewBox=\"0 0 97 97\" enable-background=\"new 0 0 24 28\" xml:space=\"preserve\">
            <path stroke=\"null\" id=\"svg_4\" fill=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "iconColor", array()), "html", null, true);
        echo "\"
                  d=\"m35.75,27.512177c0,1.16868 -0.945,2.078196 -2.148,2.078196l-22.477,0c-1.211,0 -2.148,-0.909517 -2.148,-2.078196l0,-18.536535c0,-1.16868 0.938,-2.078196 2.148,-2.078196l22.477,0c1.203,0 2.148,0.909517 2.148,2.078196l0,18.536535zm26.203,2.367677c-2.844,-0.611234 -3.875,-2.040055 -3.875,-3.354454l0,-4.790121c0,0 1.891,0.412705 2.344,0.527128c0.922,0.23667 1.508,1.619526 1.531,2.827325c0.031,1.206821 0,4.790121 0,4.790121zm5.726,29.102575c0,-0.045965 -0.789,-5.883497 -0.789,-5.883497l0,-26.954942c0,-2.88796 -0.969,-5.234121 -2.969,-7.204741l-12.765,-12.423214c-0.883,0 -3.32,2.376479 -3.32,2.376479c0,0.863552 6.336,7.014035 6.336,7.014035l-0.188,10.459441c0,3.71337 3.086,6.723577 6.898,6.723577l1.711,0.022493l-0.609,19.987849l0.852,6.853648l3.836,20.224519c0.141,3.285017 -2.93,5.240967 -5.352,5.240967c-2.242,0 -4.844,-1.811209 -4.844,-4.148569l0.047,-35.443763c0,-4.308957 -3.578,-7.808151 -7.984,-7.808151c0,0 -7.664,0 -7.703,0c0.539,-0.030317 0.562,-23.211254 0.562,-28.132424c0,-0.580917 0,-0.909517 0,-0.909517c0,-4.194534 -3.5,-7.609622 -7.797,-7.609622l-22.476,0c-4.297,0 -7.797,3.415088 -7.797,7.609622l0,80.338676l38.07,0.619058l0.039,-46.934968l7.188,0c1.648,0 2.992,1.314398 2.992,2.926101l0,35.344988c0,4.745134 4.531,8.901527 9.703,8.901527c4.883,0 10.352,-3.797476 10.352,-8.901527c-0.086,-1.177482 -3.993,-22.288046 -3.993,-22.288046z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "GuzzleBundle:Icons:logo.svg.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GuzzleBundle:Icons:logo.svg.twig", "/var/www/html/bio/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle/Resources/views/Icons/logo.svg.twig");
    }
}
