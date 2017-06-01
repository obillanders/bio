<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Entity\Media\Media;
use RedCode\TreeBundle\Admin\AbstractTreeAdmin;


class FaqAdmin extends AbstractTreeAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->with('Content', array('class' => 'col-md-9'))
            ->add('title', TextType::class)
            ->add('response')
            ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('response')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Faq
            ? $object->getTitle()
            : 'Faq';
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('response')
        ;
    }

}