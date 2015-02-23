<?php

namespace jvb\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

  public function indexAction($name) {
    return $this->render('jvbAdminBundle:Default:index.html.twig', ['name' => $name]);
  }

}
