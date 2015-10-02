<?php

namespace TroisWA\BackBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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




}
