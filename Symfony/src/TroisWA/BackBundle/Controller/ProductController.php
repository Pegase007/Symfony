<?php

namespace TroisWA\BackBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TroisWA\BackBundle\Entity\Product;

class ProductController extends Controller
{

    public function productAction($id)
    {


//    return new Response(' ok ');

        return $this->render("TroisWABackBundle:Product:product.html.twig",["id"=>$id]);

    }


    public function indexAction()
    {


//    return new Response(' ok ');

        return $this->render("TroisWABackBundle:Product:index.html.twig");

    }

    public function customAction()
    {


//    return new Response(' ok ');

        return $this->render("TroisWABackBundle:Product:product-custom.html.twig");

    }

    public function addAction(Request $request)
    {

        $product=new Product();

//        Donner une valeur
//        $product->setTitle("hello");

        $formProduct = $this->createFormBuilder($product)
                                ->add("title","text")
                                ->add("description","textarea")
                                ->add("price","number")
                                ->add("submit","submit")
                                ->getForm();



        $formProduct->handleRequest($request);

        if($formProduct->isValid())
        {

        $em=$this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();


            $this->get("session")->getFlashBag()
                ->add("success_contact","Le message à bien été envoyé");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
            return $this->redirectToRoute("trois_wa_back_product_add");

        }



//    return new Response(' ok ');

        return $this->render("TroisWABackBundle:Product:add.html.twig",["formProduct"=> $formProduct->createView()]);

    }


}
