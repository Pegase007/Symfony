<?php

namespace TroisWA\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;


/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="TroisWA\BackBundle\Repository\ImageRepository")
 * @ORM\HasLifecycleCallbacks
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


    /**
     *
     *
     * @Assert\Image(
     *     allowLandscape = true,
     *     allowPortrait = true,
     *
     *     maxSize = "2000k",
     *     mimeTypes = {"image/jpeg", "image/png","image/gif"},
     *     mimeTypesMessage = "Please upload a valid image jpeg,png or gif format"

     * )
     *
     */
    private $file;

    // propriété permettant de sauvegarde l'ancien nom de l'image (lorsqu'on fait une édition)
    private $oldName;


    private $thumbnails =
        [
            'thumb-small' => [100,100],
            'thumb-medium' => [400,400],
            'thumb-large' => [800,800],
        ];


    /**
     *
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     *
     */
    public function upload()
    {

        if (null == $this->file)
        {
            return;
        }

        //Upload image

//        $nameImage = uniqid("", true).'-'.$this->file->getClientOriginalName();
        $nameImage = str_replace('.', '', uniqid("", true)) . '.' . $this->file->guessExtension();
//      $nameImage=$this->file->getClientOriginalName();

//        die(dump($nameImage));
        $this->file->move(

            __DIR__ . "/../../../../web/" . $this->getRootWebDir(), $nameImage);


        $this->path = $nameImage;

        //Creation des thumbnails
        $imagine=new\Imagine\Gd\Imagine();
        $imagineOpen = $imagine->open( __DIR__ . "/../../../../web/" . $this->getRootWebDir().'/'.$nameImage);
        $mode1    = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
        $mode2    = \Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;

        foreach($this->thumbnails as $key=>$value){
        $imagineOpen->thumbnail(new \Imagine\Image\Box($value[0],$value[1]), $mode2)
                                 ->save(__DIR__.'/../../../../web/'.$this->getRootWebDir().'/'.$key.'-'.$nameImage);
}
        // Fin de creation des thumbnails


        // Suppression de l'ancienne image
        if (!empty($this->oldName)) {
//           code de la suppression

            if(file_exists( __DIR__ . "/../../../../web/" . $this->getRootWebDir().'/'.$this->oldName))
            {


                unlink( __DIR__ . "/../../../../web/" . $this->getRootWebDir().'/'.$this->oldName);

            }


            foreach($this->thumbnails as $nameThumb => $size)
            {
                if (file_exists(__DIR__.'/../../../../web/'.$this->getRootWebDir().'/'.$nameThumb.'-'.$this->oldName))
                {
                    unlink(__DIR__.'/../../../../web/'.$this->getRootWebDir().'/'.$nameThumb.'-'.$this->oldName);
                }
            }
        }
    }
    /**
     *
     * Méthode permettant d'éviter d'avoir l'objet proxy dans la méthode removeImage()
     * J'ai ainsi réellement l'objet image accessible dans la méthode removeImage()
     *
     * @ORM\PreRemove
     */
    public function preRemoveImage()
    {

    }

    /**
     * @ORM\PostRemove
     */
    public function removeImage()
    {

        if(file_exists( __DIR__ . "/../../../../web/" . $this->getRootWebDir().'/'.$this->path))
        {


            unlink( __DIR__ . "/../../../../web/" . $this->getRootWebDir().'/'.$this->path);

        }

        foreach($this->thumbnails as $nameThumb => $size)
        {
            if (file_exists(__DIR__.'/../../../../web/'.$this->getRootWebDir().'/'.$nameThumb.'-'.$this->path))
            {
                unlink(__DIR__.'/../../../../web/'.$this->getRootWebDir().'/'.$nameThumb.'-'.$this->path);
            }
        }

    }



    public function webPath($size = null)
    {

        if( $size != null){

            if(file_exists($this->getRootWebDir()."/".$size."-".$this->path))
            {
            return $this->getRootWebDir()."/".$size."-".$this->path;
            }
            elseif( file_exists($this->getRootObjWebDir()."/".$size."-".$this->path))
            {
                return $this->getRootObjWebDir()."/".$size."-".$this->path;


            }
            else{
                return" http://placehold.it/100x100";
            }
        }
        else{

        return $this->getRootWebDir()."/".$this->path;
        }
    }

    private function getRootWebDir()
    {
        return "uploads/categories";

    }

    private function getRootObjWebDir()
    {
        return "uploads/products";

    }

    /**
     * @Assert\Callback
     */

    public function isValide(ExecutionContextInterface $context)
    {

//        if (!ucfirst($this->getTitle())) {
        if ($this->file !=null && $this->caption==null)  {

            $context->buildViolation('You must insert a caption')
                ->atPath('caption')
                ->addViolation();


        }
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


        // Si j'ai déjà un nom (édition), je sauvegarde celui-ci dans une propriété oldName
        if (null != $this->path)
        {
            $this->oldName = $this->path;

            //On effectue une modification fictive pour obliger doctrine à
            // croire qu'il y a eu une modif et donc faire la mise à jour de mon objet image

            $this->path = " bob ";
        }

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
     * @return array
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    /**
     * @param array $thumbnails
     */
    public function setThumbnails($thumbnails)
    {
        $this->thumbnails = $thumbnails;
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
