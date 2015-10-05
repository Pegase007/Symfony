<?php

namespace TroisWA\BackBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{


    public function adminAction()
    {


        return $this->render("TroisWABackBundle:Main:admin.html.twig");
    }


    public function contactAction()
    {

//    return new Response(' ok ');

        return $this->render("TroisWABackBundle:Main:contact.html.twig");
    }

    public function aboutAction()
    {

//    return new Response(' ok ');
        $products = [
            [
                "id" => 1,
                "title" => "Mon premier produit",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('+2days'),
                "prix" => 10
            ],
            [
                "id" => 2,
                "title" => "Mon deuxième produit",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now +1year'),
                "prix" => 20
            ],
            [
                "id" => 3,
                "title" => "Mon troisième produit",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now+2months'),
                "prix" => 30
            ],
            [
                "id" => 4,
                "title" => "",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now'),
                "prix" => 410
            ],

        ];
        $prenom="Thais";
        $nom="DE BRITO";

        return $this->render("TroisWABackBundle:Main:about.html.twig",["products"=> $products,
                                                                        "prenom"=>$prenom,
                                                                        "nom"=>$nom]);
    }


    public function clientAction($prenom,$nom){


        return $this->render("TroisWABackBundle:Main:client.html.twig",["prenom"=>$prenom, "nom"=>$nom]);


    }




}
