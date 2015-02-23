<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Acme\StoreBundle\Entity\Product;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $naam;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="categorie")
     */
    private $producten;
    
    function __construct() {
      $this->producten = new ArrayCollection();
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
     * Set name
     *
     * @param string $naam
     * @return Categorie
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
     * Add products
     *
     * @param \Acme\StoreBundle\Entity\Product $products
     * @return Categorie
     */
    public function addProduct($products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \Acme\StoreBundle\Entity\Product $products
     */
    public function removeProduct($products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducten()
    {
        return $this->producten;
    }

    /**
     * Add producten
     *
     * @param \Acme\StoreBundle\Entity\Product $producten
     * @return Categorie
     */
    public function addProducten(\Acme\StoreBundle\Entity\Product $producten)
    {
        $this->producten[] = $producten;

        return $this;
    }

    /**
     * Remove producten
     *
     * @param \Acme\StoreBundle\Entity\Product $producten
     */
    public function removeProducten(\Acme\StoreBundle\Entity\Product $producten)
    {
        $this->producten->removeElement($producten);
    }
}
