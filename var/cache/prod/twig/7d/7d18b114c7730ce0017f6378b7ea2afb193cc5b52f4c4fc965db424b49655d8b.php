<?php

/* :default:footer.html.twig */
class __TwigTemplate_fff65ce4ba30e1651275241541db247ec7e2af627446d0dc066eeb874d046cb3 extends Twig_Template
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
        echo "<footer>
    <div class=\"ftr-upper clearfix\">
        <div class=\"ftr-mobile-col\">
            <div class=\"ftr-col\">
                <h4 class=\"ftr-h4\">Suivez Biogaran</h4>
                <ul class=\"ftr-social\">
                    <li><a href=\"\" class=\"ic-facebook\" target=\"_blank\"></a></li>
                    <li><a href=\"\" class=\"ic-twitter\" target=\"_blank\"></a></li>
                    <li><a href=\"\" class=\"ic-youtube\" target=\"_blank\"></a></li>
                </ul>
                <h4 class=\"ftr-h4\"><a href=\"\">Mentions légales</a></h4>
            </div>
            <div class=\"ftr-col\">
                <h4 class=\"ftr-h4\">Contact Biogaran.pro</h4>
                <a href=\"\">Espace Hôpital</a>
            </div>
        </div>
        <div class=\"ftr-mobile-col\">
            <div class=\"ftr-col\">
                <h4 class=\"ftr-h4\">Tous nos sites</h4>
                <a href=\"http://www.aveclesgeneriquesyapasdehic.fr/\" target=\"_blank\">Avec les génériques y’a pas de hic</a>
                <a href=\"http://www.biogaran.fr/\" target=\"_blank\">Biogaran.fr</a>
                <a href=\"http://www.ilparaitquelapilule.fr/\" target=\"_blank\">#ilparaîtquelapilule</a>
            </div>
            <div class=\"ftr-col\">
                <a href=\"http://www.medimaux.fr/\" target=\"_blank\">Médimaux</a>
                <a href=\"http://www.mieuxdansmonassietteaveclecancer.fr/\" target=\"_blank\">Mieux dans mon assiette  avec le cancer</a>
                <a href=\"http://monurgencepilule.fr/\" target=\"_blank\">Mon Urgence Pilule</a>
                <a href=\"http://www.kelmed.fr/\" target=\"_blank\">Kelmed</a>
            </div>
            <div class=\"ftr-col\">
                <div class=\"ftr-pharmacovigilance\">
                    <p class=\"ftr-pharmacovigilance-titre\">
                        Pharmacovigilance
                    </p>
                    <a href=\"\" class=\"ftr-pharmacovigilance-link\">Signaler un effet indésirable</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"ftr-lower\">
        © Copyright 2017  Biogaran - Date de dernière mise à jour : 09/03/2017      PO : xx/xxxx/xxx
    </div>
    <div class=\"ftr-pink\">chaque jour, agir pour la santé.</div>
</footer>";
    }

    public function getTemplateName()
    {
        return ":default:footer.html.twig";
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
        return new Twig_Source("", ":default:footer.html.twig", "/var/www/html/bio/app/Resources/views/default/footer.html.twig");
    }
}
