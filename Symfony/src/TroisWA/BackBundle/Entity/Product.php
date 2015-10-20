<?php

namespace TroisWA\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 *
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="TroisWA\BackBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var integer
     *
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\Length(
     *    min = 2,
     *    minMessage = "Your first name must be at least {{ limit }} characters long",
     *)
     * @Assert\NotBlank() (message="Must not be empty")
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var string
     *
     * * @Assert\Length(
     *      max = 500,
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters",
     *
     * )
     *
     * @ORM\Column(name="description", type="text",nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @Assert\Regex(
     *     pattern="/^[0-9]{1,}(.)?[0-9]{1,2}$/",
     *     message="The value {{ value }} is not a valid price."
     * )
     *
     * @Assert\NotBlank() (message="Must not be empty")
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $dateCreated;


    /**
     * @var integer
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     *
     * @Assert\NotBlank() (message="Must not be empty")
     *
     * @ORM\Column(name="quantity", type="integer",options={"default"=1})
     */

    private $quantity;

    /**
     * @var text
     *
     * @Assert\Regex(
     *     pattern="/^(REF-)[0-9]{1,}$/",
     *     message="The value {{ value }} is not a valid reference."
     * )
     *
     * @Assert\NotBlank() (message="Must not be empty")
     * @ORM\Column(name="reference", type="text")
     */
    private $reference;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activate", type="boolean")
     */
    private $activate;


    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="SET NULL")
     * @Assert\NotBlank() (message="Must not be empty")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="Brand")
     * @ORM\JoinColumn(name="brand_id",referencedColumnName="id", nullable=false)
     * @Assert\NotBlank() (message="Must not be empty")
     *
     */
    private $brand;

    /**
     * @ORM\OneToMany(targetEntity="Comments", mappedBy="product", cascade={"remove"})
     */
    private $comments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     *
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Product
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Product
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set activate
     *
     * @param boolean $activate
     *
     * @return Product
     */
    public function setActivate($activate)
    {
        $this->activate = $activate;

        return $this;
    }

    /**
     * Get activate
     *
     * @return boolean
     */
    public function getActivate()
    {
        return $this->activate;
    }

    /**
     * Set category
     *
     * @param \TroisWA\BackBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\TroisWA\BackBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \TroisWA\BackBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set brand
     *
     * @param \TroisWA\BackBundle\Entity\Brand $brand
     *
     * @return Product
     */
    public function setBrand(\TroisWA\BackBundle\Entity\Brand $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \TroisWA\BackBundle\Entity\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Add comment
     *
     * @param \TroisWA\BackBundle\Entity\Comments $comment
     *
     * @return Product
     */
    public function addComment(\TroisWA\BackBundle\Entity\Comments $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \TroisWA\BackBundle\Entity\Comments $comment
     */
    public function removeComment(\TroisWA\BackBundle\Entity\Comments $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}
