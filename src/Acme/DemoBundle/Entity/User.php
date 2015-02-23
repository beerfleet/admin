<?php

namespace Acme\DemoBundle\Entity;

/**
 * User entity
 *
 * @author jan van biervliet
 */
class User {

  private $id;
  private $firstname;
  private $lastname;
  /**
   * @var \Doctrine\Common\Collections\Collection
   */
  private $posts;

  /**
   * Constructor
   */
  public function __construct() {
    $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
  }

  function getId() {
    return $this->id;
  }

  function getFirstname() {
    return $this->firstname;
  }

  function getLastname() {
    return $this->lastname;
  }

  function setId($id) {
    $this->id = $id;
  }

  function setFirstname($firstname) {
    $this->firstname = $firstname;
  }

  function setLastname($lastname) {
    $this->lastname = $lastname;
  }

  /**
   * Add posts
   *
   * @param \Acme\DemoBundle\Entity\Post $posts
   * @return User
   */
  public function addPost(\Acme\DemoBundle\Entity\Post $posts) {
    $this->posts[] = $posts;

    return $this;
  }

  /**
   * Remove posts
   *
   * @param \Acme\DemoBundle\Entity\Post $posts
   */
  public function removePost(\Acme\DemoBundle\Entity\Post $posts) {
    $this->posts->removeElement($posts);
  }

  /**
   * Get posts
   *
   * @return \Doctrine\Common\Collections\Collection 
   */
  public function getPosts() {
    return $this->posts;
  }
  
  public function __toString() {
    return $this->firstname . " " . $this->lastname;
  }

}
