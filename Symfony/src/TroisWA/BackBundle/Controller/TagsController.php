<?php

namespace TroisWA\BackBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TroisWA\BackBundle\Entity\Tags;
use TroisWA\BackBundle\Form\TagsType;

class TagsController extends Controller
{



    public function renderAllTagsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $tags=$em->getRepository("TroisWABackBundle:Tags")->findAll();



        return $this->render("TroisWABackBundle:Tags/render:renderTags.html.twig",["tags"=>$tags]);


    }


    public function addAction(Request $request)
    {


        $tags = new Tags();


        $formTags = $this->createForm(new TagsType(), $tags);

//            ->add("submit", "submit");

        $formTags->handleRequest($request);

        if ($formTags->isValid()) {
//die(dump($tags));

            $em = $this->getDoctrine()->getManager();
//

            $em->persist($tags);
            $em->flush();

            $this->get("session")->getFlashBag()
                ->add("success", "Le message à bien été envoyé");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
            return $this->redirectToRoute("trois_wa_back_tags_add");


        }
        return $this->render("TroisWABackBundle:Tags:add.html.twig", ["formTags" => $formTags->createView()]);


    }

    public function indexAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
//

        $tags=$em->getRepository("TroisWABackBundle:Tags")
            ->findAll();



        return $this->render("TroisWABackBundle:Tags:index.html.twig",["tags"=>$tags]);

    }




}