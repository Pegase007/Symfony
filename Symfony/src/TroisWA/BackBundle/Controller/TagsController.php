<?php

namespace TroisWA\BackBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{



    public function renderAllTagsAction()
    {

        $em=$this->getDoctrine()->getManager();
        $tags=$em->getRepository("TroisWABackBundle:Tags")->findAll();

        return $this->render("TroisWABackBundle:Tags/render:renderTags.html.twig",["tags"=>$tags]);


    }


}