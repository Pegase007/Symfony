<?php

namespace TroisWA\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="TroisWA\BackBundle\Repository\ImageRepository")
 */
class Image
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
     * @ORM\Column(name="path", type="string", length=100)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="string", length=100)
     */
    private $caption;

    private $file;

    public function upload(){


        $nameImage=$this->file->getClientOriginalName();

        $this->file->move(

            __DIR__.$this->getRootWebDir(),$nameImage);

        $this->caption=$nameImage;
        $this->path=$nameImage;
//        die("ok");



    }

    public function webPath()
    {

        return $this->getRootWebDir()."/".$this->path;

    }

    private function getRootWebDir()
    {
        return "uploads/categories";

    }


    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
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
     * Set path
     *
     * @param string $path
     *
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set caption
     *
     * @param string $caption
     *
     * @return Image
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }
}

