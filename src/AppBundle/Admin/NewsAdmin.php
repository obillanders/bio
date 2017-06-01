<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Entity\Media\Media;


class NewsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {


//        $helpImage = '';
//
//        if($this->hasParentFieldDescription()) { // this Admin is embedded
//            // $getter will be something like 'getlogoImage'
//            $getter = 'get' . $this->getParentFieldDescription()->getFieldName();
//
//            // get hold of the parent object
//            $parent = $this->getParentFieldDescription()->getAdmin()->getSubject();
//            if ($parent) {
//                $image = $parent->$getter();
//            } else {
//                $image = null;
//            }
//        } else {
//            $image = $this->getSubject();
//        }
//
//        // use $fileFieldOptions so we can add other options to the field
//        $fileFieldOptions = array('required' => false);
//        if ($image && ($webPath = $image->getWebPath())) {
//            // add a 'help' option containing the preview's img tag
//            $helpImage = '<img src="'.$webPath.'" class="admin-preview" />';
//        }



        $formMapper
            ->with('Content', array('class' => 'col-md-9'))
            ->add('title', TextType::class)
            ->add('draft')
            ->add('image', 'sonata_media_type', [
                'data_class'    => Media::class,
                'provider'      => 'sonata.media.provider.image',
                'context'       => 'default',
                'required'      => false,
            ])
            ->add('body', 'sonata_simple_formatter_type',array('format' => 'richhtml','attr' => array('class' => 'ckeditor')))
            ->end()
            ->with('Meta data',array('class' => 'col-md-3'))
            ->add('category', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\Category',
                'property' => 'name',
            ))
            ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('category.name')
            ->add('draft')
        ;
    }

    public function toString($object)
    {
        return $object instanceof News
            ? $object->getTitle()
            : 'News'; // shown in the breadcrumb on the create view
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('category', null, array(), 'entity', array(
                'class'    => 'AppBundle\Entity\Category',
                'choice_label' => 'name', // In Symfony2: 'property' => 'name'
            ))
        ;
    }

}