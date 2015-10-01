<?php

namespace TroisWA\BackBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function contactAction()
    {

//    return new Response(' ok ');

        return $this->render("TroisWABackBundle:Main:contact.html.twig");
    }



}
