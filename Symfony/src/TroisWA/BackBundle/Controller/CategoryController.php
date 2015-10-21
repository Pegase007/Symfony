<?php

namespace TroisWA\BackBundle\Controller;



//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TroisWA\BackBundle\Entity\Category;
use TroisWA\BackBundle\Form\CategoryType;
use TroisWA\BackBundle\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class CategoryController extends BaseController
{




    public function indexAction(){
//
//        $breadcrumbs = $this->get("white_october_breadcrumbs");
//// Simple example
//        $breadcrumbs->addItem("Home ", $this->generateUrl("trois_wa_back_admin"));
//        $breadcrumbs->addItem("Category ", $this->generateUrl("trois_wa_back_categories"));

        $this->breadcrumbs(
            [
                'Category' => $this->generateUrl("trois_wa_back_categories"),
//                $marque->getTitle() => $this->generateUrl("troiswa_back_marque_show", ['id' => $marque->getSlug()],
//                    'du simple text' => ''
				]
    );
//



//        $breadcrumbs = $this->get("white_october_breadcrumbs");
//// Simple example without parameter
//        $breadcrumbs->addItem("Home", "http://www.google.fr");
//        $breadcrumbs->addItem("Home", $this->get("router")->generate("troiswa_back_page_bo"));
//
//// Simple example with parameter
//        $breadcrumbs->addItem("Home", $this->get("router")->generate("troiswa_back_page_bo", ['id' => 1]));
//        $breadcrumbs->addItem("Home", $this->generateUrl("troiswa_back_page_bo", ['id' => 1]));
//
//// Simple example with parameter
//        $breadcrumbs->addRouteItem("Home", "troiswa_back_page_bo");
//        $breadcrumbs->addRouteItem("Hello", "troiswa_back_page_bo", [
//            'id' => 1,
//        ]);




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



//    /**
//     * @param Request $request
//     * @param $id
//     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
//     *
//     *
//     *
//     */
    /**
     * @ParamConverter("categories", options={"repository_method" = "catImage"})
     */
    public function catAction($id, Category $categories){


//         $categories = [
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

        //$em=$this->getDoctrine()->getManager();
        //$categories=$em->getRepository("TroisWABackBundle:Category")->find($id);


//        $breadcrumbs = $this->get("white_october_breadcrumbs");
//// Simple example
//        $breadcrumbs->addItem("Home ", $this->generateUrl("trois_wa_back_admin"));
//
//        $breadcrumbs->addItem("Category ", $this->generateUrl("trois_wa_back_categories"));
////        $breadcrumbs->addRouteItem("Home", $this->generateUrl("troiswa_back_page_bo"));
//        $breadcrumbs->addItem($categories->getTitle(), $this->generateUrl("trois_wa_back_category", ['id' => $id]));
////

        $this->breadcrumbs(
            [
                'Category' => $this->generateUrl("trois_wa_back_categories"),
                $categories->getTitle() => $this->generateUrl("trois_wa_back_category", ['id' => $id]),
            ]
        );
//



        return $this->render("TroisWABackBundle:Category:cat.html.twig",["cat"=>$categories]);



    }




    public function addAction(Request $request)
    {


        $category = new Category();


        $formCategory = $this->createForm(new CategoryType(), $category);

//            ->add("submit", "submit");


        $formCategory->handleRequest($request);

        if ($formCategory->isValid()) {

            $em = $this->getDoctrine()->getManager();
//            die(dump($category));
////
//            Utilisation des LifecycleCallbacks pour supprimer les 2 lignes ci-dessous

//            $image=$category->getImage();
//            $image->upload();

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

    public function editAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $category = $em->getRepository('TroisWABackBundle:Category')->find($id);



        if (!$category) {
            throw $this->createNotFoundException('Unable to find product to edit.');
        }

        $editForm= $this->createForm(new CategoryType(),$category)

            ->add("submit","submit");


        $editForm->handleRequest($request);

        if($editForm->isValid())
        {

            $em=$this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();


            $this->get("session")->getFlashBag()
                ->add("success","Le produit à bien été mis à jour");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
            return $this->redirectToRoute("trois_wa_back_categories");

        }



        return $this->render('TroisWABackBundle:Category:edit.html.twig', ["editForm"=> $editForm->createView()]);
    }




    public function renderAllCategoryAction()
    {

        $em=$this->getDoctrine()->getManager();
//        $categories=$em->getRepository("TroisWABackBundle:Category")->findAll();
        $categories=$em->getRepository("TroisWABackBundle:Category")->findBy( [],["position"=>"asc"]);

        return $this->render("TroisWABackBundle:Category/render:renderCategory.html.twig",["categories"=>$categories]);


    }


    public function deleteAction(Category $category, Request $request){

//    die(dump($category));
        $em = $this->getDoctrine()->getManager();


//         Code de la suppression
        $em->remove($category);
        $em->flush();
        // Fin code de la suppression

        if($request->isXmlHttpRequest())
        {

            return new JsonResponse();

        }


        $this->get("session")->getFlashBag()
            ->add("success","Le produit à bien été supprimée");


        return $this->redirect($this->generateUrl("trois_wa_back_categories"));



    }



    }
