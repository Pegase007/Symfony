<?php

namespace TroisWA\BackBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TroisWA\BackBundle\Entity\Category;
use TroisWA\BackBundle\Form\CategoryType;
use TroisWA\BackBundle\Form\ProductType;

class CategoryController extends Controller
{




    public function indexAction(){
//
//        $categories = [
//            1 => [
//                "id" => 1,
//                "title" => "Homme",
//                "description" => "lorem ipsum \n suite du contenu",
//                "date_created" => new \DateTime('now'),
//                "active" => true
//            ],
//            2 => [
//                "id" => 2,
//                "title" => "Femme",
//                "description" => "<strong>lorem</strong> ipsum",
//                "date_created" => new \DateTime('-10 Days'),
//                "active" => true
//            ],
//            3 => [
//                "id" => 3,
//                "title" => "Enfant",
//                "description" => "lorem ipsum",
//                "date_created" => new \DateTime('-1 Days'),
//                "active" => false
//            ],
//        ];

            $em = $this->getDoctrine()->getManager();
            $category=$em->getRepository("TroisWABackBundle:Category")
            ->findAll();


//die(dump($products));
//    return new Response(' ok ');


            return $this->render("TroisWABackBundle:Category:index.html.twig",["categories"=>$category]);

    }

    public function catAction($id){

//        $categories = [
//            1 => [
//                "id" => 1,
//                "title" => "Homme",
//                "description" => "lorem ipsum \n suite du contenu",
//                "date_created" => new \DateTime('now'),
//                "active" => true
//            ],
//            2 => [
//                "id" => 2,
//                "title" => "Femme",
//                "description" => "<strong>lorem</strong> ipsum",
//                "date_created" => new \DateTime('-10 Days'),
//                "active" => true
//            ],
//            3 => [
//                "id" => 3,
//                "title" => "Enfant",
//                "description" => "lorem ipsum",
//                "date_created" => new \DateTime('-1 Days'),
//                "active" => false
//            ],
//        ];
//
//        if(array_key_exists($id,$categories))
//        {
//
//            $cat=$categories[$id];
//
//            return $this->render("TroisWABackBundle:Category:cat.html.twig",["cat"=>$cat]);
//
//        }
//        else
//        {
//            throw $this->createNotFoundException("La categorie n'existe pas");
//        }

        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository("TroisWABackBundle:Category")->find($id);





        return $this->render("TroisWABackBundle:Category:cat.html.twig",["cat"=>$categories]);



    }




    public function addAction(Request $request)
    {


        $category = new Category();


        $formCategory = $this->createForm(new CategoryType(), $category)

            ->add("submit", "submit");


        $formCategory->handleRequest($request);

        if ($formCategory->isValid()) {

            $em = $this->getDoctrine()->getManager();
//            die(dump($category));
            $image=$category->getImage();
            $image->upload();

            //ON supprime les deux lignes du dessous car => cascade persist dans @ORM de $image dans category
//            $em->persist($image);
//            $em->flush();


            $em->persist($category);
            $em->flush();


            $this->get("session")->getFlashBag()
                ->add("success", "Le message à bien été envoyé");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
            return $this->redirectToRoute("trois_wa_back_category_add");


        }
        return $this->render("TroisWABackBundle:Category:add.html.twig", ["formCategory" => $formCategory->createView()]);


    }

    public function renderAllCategoryAction()
    {

        $em=$this->getDoctrine()->getManager();
//        $categories=$em->getRepository("TroisWABackBundle:Category")->findAll();
        $categories=$em->getRepository("TroisWABackBundle:Category")->findBy( [],["position"=>"asc"]);

        return $this->render("TroisWABackBundle:Category/render:renderCategory.html.twig",["categories"=>$categories]);


    }

    }
