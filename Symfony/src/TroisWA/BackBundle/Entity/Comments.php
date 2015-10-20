<?php

namespace TroisWA\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use TroisWA\BackBundle\Validator\StopSwearWords;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="TroisWA\BackBundle\Repository\CommentsRepository")
 */
class Comments
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
     * @StopSwearWords(message="redefinition du message")
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @Assert\Length(
     *    min = 2,
     *    minMessage = "Your first name must be at least {{ limit }} characters long",
     *)
     *
     * @Assert\NotBlank() (message="Must not be empty")
     *
     * @ORM\Column(name="author", type="string", length=100)
     */
    private $author;

    /**
     * @var \DateTime
     *
     * @Assert\NotBlank() (message="Must not be empty")
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $dateCreated;

    /**
     * @var integer
     *
     * @Assert\Range(
     *      min = 0,
     *      max = 5,
     *      maxMessage = "The higher mark must be 5"
     * )
     *
     * @ORM\Column(name="mark", type="integer")
     */
    private $mark;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activate", type="boolean")
     */
    private $activate;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="comments")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false)
     */
    private $product;



    public function __construct()
    {
        $this->dateCreated= new \DateTime("now");
        $this->activate=false;


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
     * Set content
     *
     * @param string $content
     *
     * @return Comments
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Comments
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
     * Set mark
     *
     * @param integer $mark
     *
     * @return Comments
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return integer
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set activate
     *
     * @param boolean $activate
     *
     * @return Comments
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
     * Set product
     *
     * @param \TroisWA\BackBundle\Entity\Product $product
     *
     * @return Comments
     */
    public function setProduct(\TroisWA\BackBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \TroisWA\BackBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Comments
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
