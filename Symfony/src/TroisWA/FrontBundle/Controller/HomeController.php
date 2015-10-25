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

        $latestProducts=$em->getRepository("TroisWABackBundle:Product")
            ->latestProducts();


        $lastComs=$em->getRepository("TroisWABackBundle:Comments")
            ->lastComs();


        return $this->render("TroisWAFrontBundle:Home:main.html.twig",["products"=>$products,"latestProducts"=>$latestProducts,"lastComs"=>$lastComs]);



    }

    public function registerAction()
    {

        return $this->render("TroisWAFrontBundle:Home:register.html.twig");


    }

    public function contactAction()
    {

        return $this->render("TroisWAFrontBundle:Home:contact.html.twig");

    }

    public function aboutAction()
    {

        return $this->render("TroisWAFrontBundle:Home:about.html.twig");

    }


    public function renderAllCategoryAction()
    {


        $em=$this->getDoctrine()->getManager();

        $categories=$em->getRepository("TroisWABackBundle:Category")
            ->catProducts();


        return $this->render("TroisWAFrontBundle:Home/render:renderCat.html.twig",["categories"=>$categories]);

    }





}