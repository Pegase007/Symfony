<?php

namespace TroisWA\BackBundle\Controller;



use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{


    public function adminAction()
    {


        return $this->render("TroisWABackBundle:Main:admin.html.twig");
    }


    public function contactAction(Request $request)
    {

//    return new Response(' ok ');
        $formContact=$this->createFormBuilder()
                        ->add("firstname","text")
                        ->add("lastname","text")
                        ->add("username","text")
                        ->add("email","email")
                        ->add("content","textarea")
//                        ->add("send","submit")
                        ->getForm();

        if("POST"==$request->getMethod())
        {
//            exit(dump($request->request->all()));
            $formContact->bind($request);
            if($formContact->isValid())
            {
                $data=$formContact->getData();
//                exit(dump($data));
                $message = \Swift_Message::newInstance()
                    ->setSubject('Hello Email')
                    ->setFrom('ipad.tdb@gmail.com')
                    ->setTo('ipad.tdb@gmail.com')
                    ->setBody(
                        $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                            'TroisWABackBundle:Emails:contact.html.twig',
                            array('data'=>$data)
                        ),
                        'text/html'
                    );

                $this->get('mailer')->send($message);
                $this->get("session")->getFlashBag()
                    ->add("success_contact","Le mail à bien été envoyé");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
                return $this->redirectToRoute("trois_wa_back_contact");


            }

        }
        return $this->render("TroisWABackBundle:Main:contact.html.twig",array("formContact"=> $formContact->createView()));
    }


    public function feedbackAction(Request $request)
    {


//    return new Response(' ok ');
        $formContact=$this->createFormBuilder()
            ->add("page","url")
            ->add('bugstatus','choice', array(
                'choices'  => array('empty' => 'Empty page', 'bob' => 'Bob'),
                'required' => true,
            ))

            ->add("firstname","text")
            ->add("email","email")
            ->add("date", 'date', array(
                'input'  => 'datetime',
                'widget' => 'choice',
                'years' => range(date('Y') -1, date('Y'))))


            ->add("send","submit")
            ->getForm();


        if("POST"==$request->getMethod())
        {

            $formContact->bind($request);
            if($formContact->isValid())
            {
                $data=$formContact->getData();
//                exit(dump($data));
                $message = \Swift_Message::newInstance()
                    ->setSubject('Hello Email')
                    ->setFrom('ipad.tdb@gmail.com')
                    ->setTo('ipad.tdb@gmail.com')
                    ->setBody(
                        $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                            'TroisWABackBundle:Emails:feedback.html.twig',
                            array('data'=>$data)
                        ),
                        'text/html'
                    );

                $this->get('mailer')->send($message);
                $this->get("session")->getFlashBag()
                    ->add("success_contact","Le mail à bien été envoyé");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
                return $this->redirectToRoute("trois_wa_back_feedback");


            }

        }
        return $this->render("TroisWABackBundle:Main:feedback.html.twig",array("formContact"=> $formContact->createView()));
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
