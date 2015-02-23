<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Acme\StoreBundle\Entity\Categorie;

/**
 * @ORM\Entity(repositoryClass="Acme\StoreBundle\Entity\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product {

  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=100)
   */
  private $naam;

  /**
   * @ORM\Column(type="integer")
   */
  private $prijs;

  /**
   * @ORM\Column(type="text")
   */
  private $omschrijving;

  /**
   * @ORM\ManyToOne(targetEntity="categorie", inversedBy="producten", cascade={"persist"})
   * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
   */
  private $categorie;

    /**
     * Set id
     *
     * @param integer $id
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set naam
     *
     * @param string $naam
     * @return Product
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string 
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set prijs
     *
     * @param integer $prijs
     * @return Product
     */
    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;

        return $this;
    }

    /**
     * Get prijs
     *
     * @return integer 
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     * @return Product
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string 
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Set categorie
     *
     * @param Categorie $categorie
     * @return Product
     */
    public function setCategorie(Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
