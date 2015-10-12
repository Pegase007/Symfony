<?php

namespace TroisWA\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="TroisWA\BackBundle\Entity\CategoryRepository")
 */
class Category
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
     * @Assert\Length(
     *    min = 2,
     *    minMessage = "Your title must be at least {{ limit }} characters long",
     *)
     * @Assert\NotBlank() (message="Must not be empty")
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var string
     *
     * @Assert\Regex("/^(?!.*category).*$/")
     *
     * @ORM\Column(name="description", type="text")
     *
     */
    private $description;

    /**
     * @var integer
     *
     * @Assert\GreaterThan(
     *     value = 0
     * )
     * @Assert\NotBlank() (message="Must not be empty")
     * @ORM\Column(name="position", type="smallint")
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activate", type="boolean")
     */
    private $activate;



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
     * @return Category
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
     * @return Category
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
     * Set position
     *
     * @param integer $position
     *
     * @return Category
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set activate
     *
     * @param boolean $activate
     *
     * @return Category
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
     * @Assert\Callback
     */

    public function isValide(ExecutionContextInterface $context)
    {


//        if (!ucfirst($this->getTitle())) {
        if (!preg_match('/^[A-Z]/', $this->getTitle())) {

            $context->buildViolation('The title must start with a capital letter')
                ->atPath('title')
                ->addViolation();


        }
    }

        /**
         * @Assert\True (message="La position est 1 alors le titre dois etre egal à Accueil")
         */

        public function isContentValide()
        {

            if ($this->getPosition()===1 && $this->getTitle()!="Accueil"){

                return false;

            } else{

                return true;


            }
        }

}
