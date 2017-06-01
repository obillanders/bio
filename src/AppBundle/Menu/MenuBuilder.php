<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;

class MenuBuilder
{
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root', array(
            'childrenAttributes' => array(
                'class' => 'nav navbar-nav'
            )
        ));

        $menu->addChild('Acccueil', array('route' => 'app'));
        $menu->addChild('Espace admin', array('route' => 'sonata_admin_dashboard'));
        $menu->addChild('Espace Pharmacien', array('route' => 'pharmacien_homepage'));

        return $menu;
    }

    public function createPharmacienMenu(array $options)
    {
        $menu = $this->factory->createItem('root', array(
            'childrenAttributes' => array(
                'class' => 'mm-root'
            )

        ));

        $menu->addChild('accueil', array(
            'label' => '<span>Accueil</span>',
            'route' => 'pharmacien_homepage',
            'attributes' => array('class' => 'mm-accueil'),
            'linkAttributes' => array('class' => 'mm-root-link'),
            'extras' => array('safe_label' => true, 'icon' => 'ic-home2')
        ));

        $menu->addChild('engagements', array(
            'label' => 'Nos <span>engagements</span>',
            'route' => 'pharmacien_engagements',
            'attributes' => array('class' => 'mm-engagements'),
            'linkAttributes' => array('class' => 'mm-root-link'),
            'extras' => array('safe_label' => true, 'icon' => 'ic-hands')
        ));
            $menu['engagements']->addChild('fab_fr', array(
                'label' => 'Fabrication française',
                'route' => 'pharmacien_homepage'
            ));
            $menu['engagements']->addChild('couverture_repertoire', array(
                'label' => 'Couverture du répertoire',
                'route' => 'pharmacien_homepage'
            ));
            $menu['engagements']->addChild('dispo_produits', array(
                'label' => 'Disponibilité produits',
                'route' => 'pharmacien_homepage'
            ));
            $menu['engagements']->addChild('augmentation_taux', array(
                'label' => 'Augmentation des taux de substitution',
                'route' => 'pharmacien_homepage'
            ));
            $menu['engagements']->addChild('accompagnement_patient', array(
                'label' => 'Accompagnement patients',
                'route' => 'pharmacien_homepage'
            ));
            $menu['engagements']->addChild('satisfaction client', array(
                'label' => 'Satisfaction clients',
                'route' => 'pharmacien_homepage'
            ));

        $menu->addChild('catalogue', array(
            'label' => 'Notre <span>e-catalogue</span>',
            'route' => 'pharmacien_catalogue',
            'attributes' => array('class' => 'mm-catalogue'),
            'linkAttributes' => array('class' => 'mm-root-link'),
            'extras' => array('safe_label' => true, 'icon' => 'ic-medbottle')
        ));

        $menu->addChild('formations', array(
            'label' => 'Mes <span>programmes & formations</span>',
            'route' => 'pharmacien_formations',
            'attributes' => array('class' => 'mm-formations'),
            'linkAttributes' => array('class' => 'mm-root-link'),
            'extras' => array('safe_label' => true, 'icon' => 'ic-formation')
        ));

        $menu->addChild('services_ligne', array(
            'label' => 'Mes <span>services en ligne</span>',
            'route' => 'pharmacien_services_ligne',
            'attributes' => array('class' => 'mm-services_ligne'),
            'linkAttributes' => array('class' => 'mm-root-link'),
            'extras' => array('safe_label' => true, 'icon' => 'ic-fatarrow')
        ));
            $menu['services_ligne']->addChild('databusiness', array(
                'label' => 'Data business',
                'route' => 'pharmacien_homepage'
            ));
            $menu['services_ligne']->addChild('contrats', array(
                'label' => 'Contrats',
                'route' => 'pharmacien_homepage'
            ));
            $menu['services_ligne']->addChild('faq', array(
                'label' => 'Service Client (FAQ)',
                'route' => 'pharmacien_homepage'
            ));
            $menu['services_ligne']->addChild('outils', array(
                'label' => "Outils d'équivalence et brochures",
                'route' => 'pharmacien_homepage'
            ));
            $menu['services_ligne']->addChild('pharmacovigilance', array(
                'label' => "Pharmacovigilance",
                'route' => 'pharmacien_homepage'
            ));

        $menu->addChild('services_patients', array(
            'label' => 'Les <span>services patients</span>',
            'route' => 'pharmacien_services_patients',
            'attributes' => array('class' => 'mm-services_patients'),
            'linkAttributes' => array('class' => 'mm-root-link'),
            'extras' => array('safe_label' => true, 'icon' => 'ic-services')
        ));

        return $menu;
    }
}