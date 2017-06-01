<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Pharmacien;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;


class PharmacienAdmin extends AbstractAdmin
{
    public function createQuery($context = 'list')
    {
        $query = parent::createQuery($context);

        $query
            ->innerJoin('AppBundle\Entity\User', 'u', \Doctrine\ORM\Query\Expr\Join::WITH, 'o.nridInterlocuteur = u.pharmacien')
        ;

        return $query;

    }

    public function toString($object)
    {
        return $object instanceof Pharmacien
            ? $object->getNom()
            : 'Pharmacien';
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nridInterlocuteur')
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('numeroRpps')
            ->add('user.username')
            ->add('_action', null, array(
                    'actions' => array(
                        'connectAs' => array(
                            'template' => ':Admin/actions:list__action_connect_as.html.twig'
                        ),
                    )
                )
            )
        ;
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->clearExcept(array('list', 'show'));
        $collection->add('connectAs', $this->getRouterIdParameter() . '/connectas');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nridInterlocuteur')
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('numeroRpps')
            ->add('user.username')
        ;
    }
}
