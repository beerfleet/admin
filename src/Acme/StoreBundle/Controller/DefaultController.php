<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

  public function createAction() {
    $repository = $this->getDoctrine()->getRepository('AcmeStoreBundle:Categorie');
    $categorie = $repository->find(2);

    $product = new Product();
    $product->setNaam('Foe streep 2');
    $product->setPrijs('1899');
    $product->setOmschrijving('streep categorie');

    $product->setCategorie($categorie);

    $em = $this->getDoctrine()->getManager();
    $em->persist($product);
    $em->flush();

    return new Response("Product gecreeerd met id " . $product->getId()
            . ' en categorie ' . $product->getCategorie()->getNaam());
  }

  //TODO: JAKKE render met twig
  public function toonAction() {
    $id = 1;
    $product = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Product')
            ->find($id);

    if (!$product) {
      throw $this->createNotFoundException('Geen product gevonden met id ' . $id);
    }
    $categorieNaam = $product->getCategorie()->getNaam();

    return new Response('Product met id ' . $product->getId()
            . ' heeft als naam: ' . $product->getNaam()
            . ' heeft als categorie ' . $categorieNaam);
  }
  
  public function vind_joinAction() {
    $product = $this->getDoctrine()->getRepository('AcmeStoreBundle:Product')->vindProdJoinCategorie();
    $categorie = $product->getCategorie();
    $producten[] = $product;
    return $this->render('AcmeStoreBundle:Default:toon_alle.html.twig', array('producten' => $producten));
  }
  
  public function sorteer_naamAction() {
    $em = $this->getDoctrine()->getManager();
    $producten = $em->getRepository('AcmeStoreBundle:Product')->vindAlleSorteerNaam();
    return $this->render('AcmeStoreBundle:Default:toon_alle.html.twig', array('producten' => $producten));
  }
  
  public function toon_productAction() {
    $id = 3;
    $categorie = $this->getDoctrine()->getRepository('AcmeStoreBundle:Categorie')->find($id);
    $producten = $categorie->getProducten();
    return $this->render('AcmeStoreBundle:Default:toon_alle.html.twig', array('producten' => $producten));
  }

  public function toon_alleAction() {
    $repository = $this->getDoctrine()->getRepository('AcmeStoreBundle:Product');
    $producten = $repository->findAll();

    return $this->render('AcmeStoreBundle:Default:toon_alle.html.twig', array('producten' => $producten));
  }

  public function testAction() {
    return new Response("ACTIE GETEST OK ");
  }

  public function updateAction() {
    $id = 4;
    $em = $this->getDoctrine()->getManager();
    $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);

    if (!$product) {
      throw $this->createNotFoundException('Product id ' . $id . ' niet gevonden.');
    }

    $product->setNaam('Chile Con Carnage.');
    $em->flush();

    return $this->redirect($this->generateUrl('toon_alle'));
  }

}
