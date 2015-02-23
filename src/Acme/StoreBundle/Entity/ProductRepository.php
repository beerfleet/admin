<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository {

  public function vindAlleSorteerNaam() {
    return $this->getEntityManager()->createQuery(
                    'SELECT p FROM AcmeStoreBundle:Product p ORDER BY p.naam ASC')->getResult();
  }

  public function vindProdJoinCategorie() {
    $id = 11;
    $query = $this->getEntityManager()->createQuery(
                    'SELECT p, c FROM AcmeStoreBundle:Product p '
                    . 'JOIN p.categorie c '
                    . 'WHERE p.id = :id')->setParameter('id', $id);

    try {
      return $query->getSingleResult();
    } catch (Exception $ex) {
      return null;
    }
  }

}
