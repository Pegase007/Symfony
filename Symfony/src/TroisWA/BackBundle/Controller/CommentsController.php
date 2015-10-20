<?php

namespace TroisWA\BackBundle\Controller;


use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TroisWA\BackBundle\Entity\Category;
use TroisWA\BackBundle\Entity\Comments;
use TroisWA\BackBundle\Form\CommentsType;
use TroisWA\BackBundle\Repository\CategoryRepository;
use TroisWA\BackBundle\Entity\Product;
use TroisWA\BackBundle\Form\ProductType;

class CommentsController extends Controller
{


    public function activateAction($id,$action, Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $comments = $em->getRepository('TroisWABackBundle:Comments')->find($id);


        if($action == "activate")
        {

            $comments->setActivate(1);





        }
        else
        {
            $comments->setActivate(0);

        }

        $em->persist($comments);
        $em->flush();

        if ($request->isXmlHttpRequest())
        {
            return new JsonResponse([]);
        }

        return $this->redirectToRoute("trois_wa_back_product");





    }

//
    public function deleteAction($id,$prodId)
    {

//        die(dump($id));

        $em=$this->getDoctrine()->getManager();
        $comment=$em->getRepository("TroisWABackBundle:Comments")->find($id);

//        die(dump($comment));

        if(!$comment)
        {
            throw $this->createNotFoundException("Unable to find Comment to delete");

        }

        $em->remove($comment);
        $em->flush();

        return $this->redirect($this->generateUrl("trois_wa_back_product", ['id'=>$prodId]));



    }


}