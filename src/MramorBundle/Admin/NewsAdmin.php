<?php
/**
 * Created by PhpStorm.
 * User: N1
 * Date: 10.10.16
 * Time: 10:18
 */

namespace MramorBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class NewsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->with('Content', array('class' => 'col-md-9'))
                        ->add('text', 'textarea')
                   ->end()
                   ->with('Col', array('class' => 'col-md-3'))
                        ->add('title', 'text')
                   ->end()
            ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id')->add('title');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
                   ->addIdentifier('title');
    }
}