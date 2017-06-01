<?php

/* :Pharmacien:pharmacien_services_patients.html.twig */
class __TwigTemplate_9b8ecf2e9a589e834c218e5552b1188a05f74d56b13a61c4807a8ff489e5bbe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", ":Pharmacien:pharmacien_services_patients.html.twig", 1);
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
            <div class=\"ic-actus2 h1-col\"></div>
            <div class=\"h1-col\">
                <span class=\"h1-txt\">Espace Pharmacien - Service clients</span>
            </div>
        </h1>
    </div>

    <div class=\"breadcrumb\">
        <a href=\"#\">Accueil</a>
        <a href=\"#\">Mes programmes et formations</a>
        <span>Loremipsum</span>
    </div>

    <div class=\"editorial-content\">
        <div class=\"chapeau\">
            Style d’introduction, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <h2>
            <span class=\"surtitre\">Style de surtitre</span>
            Eiusmod tempor incididunt ut labore et dolore
            <span class=\"soustitre\">Mis à jour le Mardi 15 avril 2017</span>
        </h2>
        <p>
            Magna aliqua. Ut enim ad minim veniam, quis nostrud dolorem ipsum quia dolor laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo <strong>inventore veritatis</strong> et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            <a href=\"#\">Lien hypertexte</a>
        </p>
        <h3>Titre h3</h3>
        <h4>Titre h4</h4>
        <h5>Titre h5</h5>
        <h6>Titre h6</h6>
        <ul>
            <li>Magna aliqua. Ut enim ad minim veniam</li>
            <li>Magna aliqua. Ut enim ad minim veniam</li>
            <li>Magna aliqua. Ut enim ad minim veniam</li>
            <li>Magna aliqua. Ut enim ad minim veniam</li>
            <li>Magna aliqua. Ut enim ad minim veniam</li>
        </ul>
        <ol>
            <li>Magna aliqua. Ut enim ad minim veniam</li>
            <li>Magna aliqua. Ut enim ad minim veniam</li>
            <li>Magna aliqua. Ut enim ad minim veniam</li>
            <li>Magna aliqua. Ut enim ad minim veniam</li>
            <li>Magna aliqua. Ut enim ad minim veniam</li>
        </ol>
        <table>
            <thead>
                <tr>
                    <th>Magna aliqua</th>
                    <th>Magna aliqua</th>
                    <th>Magna aliqua</th>
                    <th>Magna aliqua</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"odd\">
                    <td>Magna aliqua</td>
                    <td>Magna aliqua</td>
                    <td>Magna aliqua</td>
                    <td>Magna aliqua</td>
                </tr>
                <tr class=\"even\">
                    <td>Magna aliqua</td>
                    <td>Magna aliqua</td>
                    <td>Magna aliqua</td>
                    <td>Magna aliqua</td>
                </tr>
                <tr class=\"odd\">
                    <td>Magna aliqua</td>
                    <td>Magna aliqua</td>
                    <td>Magna aliqua</td>
                    <td>Magna aliqua</td>
                </tr>
            </tbody>
        </table>
        <img src=\"http://placehold.it/900x400\" class=\"img-responsive\">
        <h3>Bloc citation :</h3>
        <blockquote>
            Magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non p
        </blockquote>


    </div>
";
    }

    public function getTemplateName()
    {
        return ":Pharmacien:pharmacien_services_patients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Pharmacien:pharmacien_services_patients.html.twig", "/var/www/html/bio/app/Resources/views/Pharmacien/pharmacien_services_patients.html.twig");
    }
}
