<?php


namespace TroisWA\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller
{

    public function indexAction()

    {

        $em = $this->getDoctrine()->getManager();

        $products=$em->getRepository("TroisWABackBundle:Product")
            ->findSixProducts();



        return $this->render("TroisWAFrontBundle:Home:main.html.twig",["products"=>$products]);



    }




}