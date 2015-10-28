<?php

namespace TroisWA\BackBundle\Listener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class Maintenance
{

    private $twig;

    private $maintenance;

    private $environnement;

    public function __construct($twig, $maintenance, $environnement)
    {
        $this->twig = $twig;
        $this->maintenance = $maintenance;
        $this->environnement = $environnement;
    }

    public function miseEnMaintenance(GetResponseEvent $event)
    {

//        die(var_dump($this->maintenance, $this->environnement));

        $contenuHTML = $this->twig->render('TroisWABackBundle:Other:maintenance.html.twig');
//
//        die(dump($contenuHTML));

//        le if() permet de mettre seulement l'environnement prod en maintenance
        if ($this->maintenance && $this->environnement == 'prod')
        {
            $event->setResponse(new Response($contenuHTML, 503)); // contenu et code maintenance
            $event->stopPropagation();
        }
    }


}