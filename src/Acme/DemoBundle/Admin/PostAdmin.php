<?php

namespace Acme\DemoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Sonata Admin: PostAdmin
 *
 * @author jan van biervliet
 */
class PostAdmin extends Admin {

// Fields to be shown on create/edit forms
  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
        ->add('title', 'text', ['label' => 'Post title'])
        ->add('author', 'entity', ['class' => 'Acme\DemoBundle\Entity\User'])
        ->add('body'); // if no type is specified, SonataAdminBundle tries to guess it
  }

  // Fields to be shown on filter forms
  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
        ->add('title')
        ->add('user')
    ;
  }

  // Fields to be shown on lists
  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
        ->addIdentifier('title')
        ->add('slug')
        ->add('user')
    ;
  }

}
