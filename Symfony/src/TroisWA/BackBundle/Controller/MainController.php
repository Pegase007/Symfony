<?php

namespace TroisWA\BackBundle\Controller;



use Carbon\Carbon;
use Doctrine\ORM\Mapping\Entity;
use MetzWeb\Instagram\Instagram;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;
use TroisWA\BackBundle\Entity\User;
use TroisWA\BackBundle\Form\UserType;

class MainController extends Controller
{


    public function adminAction()
    {


        $em=$this->getDoctrine()
            ->getManager();

        $fiveProduct=$em->getRepository("TroisWABackBundle:Product")
            ->fiveQuantity();

        $findAllPerso=$em->getRepository("TroisWABackBundle:Product")
            ->findAllPerso();

        $noItems=$em->getRepository("TroisWABackBundle:Product")
            ->noItems();


        $catQuantity=$em->getRepository("TroisWABackBundle:Category")
            ->catQuantity();

        $catActive=$em->getRepository("TroisWABackBundle:Category")
            ->catActive();


        $catActInact=$em->getRepository("TroisWABackBundle:Category")
            ->catActInact();

        $sumPrice=$em->getRepository("TroisWABackBundle:Product")
            ->sumPrice();

        $countProduct=$em->getRepository("TroisWABackBundle:Product")
            ->countProduct();

        $price=$em->getRepository("TroisWABackBundle:Product")
            ->price();


        $getProductCategoryAccueil=$em->getRepository("TroisWABackBundle:Product")
            ->getProductCategoryAccueil();


        $getProductNoCat=$em->getRepository("TroisWABackBundle:Product")
            ->getProductNoCat();


        $getProductNoCatBrand=$em->getRepository("TroisWABackBundle:Product")
            ->getProductNoCatBrand();

        $getProdParCat=$em->getRepository("TroisWABackBundle:Product")
            -> getProdParCat();


//        $latestCat=$em->getRepository("TroisWABackBundle:Category")
//            -> latestCat();
//




//        $utility = $this->get('trois_wa_back.util');
//        echo $utility->slugify('salut ludo');
//        echo '<br>';
//        echo $utility->getText();
//
//        dump($utility);
//        die;
//


        $file=__DIR__."/../../../../app/cache/cache_instagram.txt";
        $timeCache= time() - (1*60);


//       dump(date ("F d Y H:i:s.", filemtime($file)));
//        dump(date ("F d Y H:i:s.", $timeCache));
        //die();

        $fs= new Filesystem();
        clearstatcache();
        if ($fs->exists($file) && ( filemtime($file) >  $timeCache ))
        {

//                dump(file_get_contents($file));
//                die('Utilisation du cache');
//                dump($mesImages);
//                die();


            //Recuperation du contenu du fichier cache instagram

            $mesImages= unserialize(file_get_contents($file));
//            die();

        }
        else
        {

            //        die(dump($this->getParameter('client_id_instagram')));
            $instagram = new Instagram(array(
                'apiKey'      => $this->getParameter('client_id_instagram'),
                'apiSecret'   => $this->getParameter('client_secret_instagram'),
                'apiCallback' => $this->getParameter('callback_instagram')
            ));
//        ToGENERATE token adress => die(dump($instagram->getLoginUrl()));


            $instagram->setAccessToken($this->getParameter('token_instagram'));
//        die(dump($instagram->getPopularMedia()));

//        foreach($instagram->getPopularMedia()->data as $media)
//        {
//            die(dump($media));
//            echo "<img src='".$media->images->thumbnail->url."'>";
//            die;
//        }
            $mesImages = $instagram->getUserMedia($this->getParameter('id_instagram'))->data;
//        die(dump($mesImages));

            foreach($mesImages as $img )
            {
                $img ->created_time = Carbon::createFromTimeStamp($img ->created_time)->diffForHumans();
//           die( dump($timeImage));

            }

            //creer le fichier
            $fs->touch($file);
            //insertion dans le
            $fs->dumpFile($file, serialize($mesImages));
//                die('insta');

        }



//




        return $this->render("TroisWABackBundle:Main:admin.html.twig",[
            'fiveProduct'=>$fiveProduct,
            'noItems'=>$noItems,
            'catQuantity'=>$catQuantity,
            'catActive'=>$catActive,
            'sumPrice'=>$sumPrice,
            'getProdParCat'=>$getProdParCat,
//            'latestCat'=>$latestCat
            'mesimages'=>$mesImages,
//            'timeImage'=>$timeImage


        ]);




    }


    public function contactAction(Request $request)
    {

//    return new Response(' ok ');
        $formContact=$this->createFormBuilder()
            //(nom du champ,type de champ)
            ->add("firstname","text",
                [
                    "constraints"=>[
                        new Assert\NotBlank(),
                        new Assert\Length(array(
                            'min'        => 2,
                        ))
                    ],
//                    "required"=>false //désactive le html5 pour un champ ciblé
                ])
            ->add("lastname","text",[
                "constraints"=>[
                    new Assert\NotBlank()
                ],
//                    "required"=>false //désactive le html5 pour un champ ciblé
            ])
            ->add("username","text",[
                "constraints"=>[
                    new Assert\NotBlank()
                ],
//                    "required"=>false //désactive le html5 pour un champ ciblé
            ])
            ->add("email","email",[
                "constraints"=>[
                    new Assert\NotBlank(),
                    new Assert\Email(array(
                        'message' => 'The email "{{ value }}" is not a valid email.',
                        'checkMX' => true,
                    ))
                ],
//                    "required"=>false //désactive le html5 pour un champ ciblé
            ])
            ->add("content","textarea",[
                "constraints"=>[
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min'   => 10,
                        'max'   =>100,
                    ))

                ],
//                    "required"=>false //désactive le html5 pour un champ ciblé
            ])

//          ->add("send","submit")
            ->getForm();
//    PREMIERE VERSION
//        if("POST"==$request->getMethod())
//        {
////            exit(dump($request->request->all()));
//            $formContact->bind($request);
//            if($formContact->isValid())
//            {
//                $data=$formContact->getData();
////                exit(dump($data));
//                $message = \Swift_Message::newInstance()
//                    ->setSubject('Hello Email')
//                    ->setFrom('ipad.tdb@gmail.com')
//                    ->setTo('ipad.tdb@gmail.com')
//                    ->setBody(
//                        $this->renderView(
//                        // app/Resources/views/Emails/registration.html.twig
//                            'TroisWABackBundle:Emails:contact.html.twig',
//                            array('data'=>$data)
//                        ),
//                        'text/html'
//                    );
//
//                $this->get('mailer')->send($message);
//                $this->get("session")->getFlashBag()
//                    ->add("success_contact","Le mail à bien été envoyé");
//
////                Get to Post permet de transformer les formulaire qui arrive en post -> get()
//                return $this->redirectToRoute("trois_wa_back_contact");
//
//
//            }
//
//        }
//            DEUXIEME VERSION

//        A partir d'ici le formulaire est hydraté
        $formContact->handleRequest($request);
        if($formContact->isValid())
        {

            $data=$formContact->getData();
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
                ->add("success","Le mail à bien été envoyé");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
            return $this->redirectToRoute("trois_wa_back_contact");

        }

        return $this->render("TroisWABackBundle:Main:contact.html.twig",array("formContact"=> $formContact->createView(),"prenom"=>"Ludo"));
    }










    public function feedbackAction(Request $request)
    {


//    return new Response(' ok ');
        $formContact=$this->createFormBuilder()
            ->add("page","url",[
                "constraints"=>[
                    new Assert\NotBlank(),
                    new Assert\Url()

                ],
//                    "required"=>false //désactive le html5 pour un champ ciblé
            ])


            ->add('bugstatus','choice', array(
                'choices'  => array('empty' => 'Empty page', 'bob' => 'Bob'),
                'required' => true,
                'constraints'=>[
                    new Assert\Choice(array(
                        'empty',
                        'bob'
                    ))

                ]
            ))

            ->add("firstname","text",[
                "constraints"=>[
                    new Assert\NotBlank(),

                ],
//                    "required"=>false //désactive le html5 pour un champ ciblé
            ])
            ->add("email","email",[
                "constraints"=>[
                    new Assert\NotBlank(),
                    new Assert\Email(array(
                        'message' => 'The email "{{ value }}" is not a valid email.',
                        'checkMX' => true,
                    ))
                ],
//                    "required"=>false //désactive le html5 pour un champ ciblé
            ])
            ->add("date", 'date', [
                    'input'  => 'datetime',
                    'widget' => 'choice',
                    'years' => range(date('Y') -1, date('Y')),
                    "constraints"=>[
                        new Assert\NotBlank(),
                        new Assert\Date()

                    ]

                ]
            )


//            ->add("send","submit")
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
                    ->add("success","Le mail à bien été envoyé");

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

    public function requestAction()
    {

        $em=$this->getDoctrine()
            ->getManager();

        $productAll=$em->getRepository("TroisWABackBundle:Product")
            //->findAll()
            //On doit appeler la methode avec la requete en question
            ->findPerso(1);

        dump($productAll);
        die();
        return $this->render("TroisWABackBundle:Main:admin_request.html.twig");

    }


    public function registerAction(Request $request)
    {


        $user = new User();



        $formUser = $this->createForm(new UserType(), $user)
            ->add('agree','checkbox', [
                "label" => "I agree",
                "constraints" => new Assert\NotBlank(),
                "mapped" => false //Permet d'ajouter un champ non mapé

    ]);



        $formUser->handleRequest($request);

//        dump($formUser);
//        die(dump($formUser->get('password')->getData()));
            //die('salut');
        if ($formUser->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $groupes = $user->getGroupes();
            // Test permettant d'ajouter le group commercial si l'utilisateur
            // n'a rien coché au niveau du choix des groupes
//            if ($groupes->isEmpty())
//            {
//                $groupeCommercial = $em->getRepository('TroisWABackBundle:Groupe')
//                                        ->findOneByName('commercial');
//
//                $user->addGroupe($groupeCommercial);
//            }

            $factory= $this->get('security.encoder_factory');
            $encoder=$factory->getEncoder($user);
            $password= $formUser->get("password")->getData();
            $user->setPassword($encoder->encodePassword($password,$user->getSalt()));


//            die(dump($request->request->all(),$user));
            $em->persist($user);
            $em->flush();


            $this->get("session")->getFlashBag()
                ->add("success", "Le user à bien été envoyé");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
            return $this->redirectToRoute("trois_wa_back_register");


        }
        else
        {
            $validator = $this->get('validator');
            $errors = $validator->validate($formUser);
//            die(dump($errors));
        }




        return $this->render("TroisWABackBundle:Main:register.html.twig",['formUser'=> $formUser->createView()]);


    }


}
