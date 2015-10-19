<?php

namespace TroisWA\BackBundle\Controller;


use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TroisWA\BackBundle\Entity\Category;
use TroisWA\BackBundle\Entity\Comments;
use TroisWA\BackBundle\Form\CommentsType;
use TroisWA\BackBundle\Repository\CategoryRepository;
use TroisWA\BackBundle\Entity\Product;
use TroisWA\BackBundle\Form\ProductType;

class ProductController extends Controller
{

    public function productAction(Product $products,Request $request,$id)
    {
//          UTILISATION DU PARAMCONVERTER AU NIVEAU DE LA METHODE


//        $em = $this->getDoctrine()->getManager();
//        $products=$em->getRepository("TroisWABackBundle:Product")
//            ->find($id);
//
////        FORMULAIRE SUPPRESSION
////        $formProductDelete=$this->createFormDelete($id);
//
////    return new Response(' ok ');
//
////        return $this->render("TroisWABackBundle:Product:product.html.twig",["product"=>$products,"formDelete"=>$formProductDelete->createView()]);

        $em=$this->getDoctrine()
            ->getManager();

        $lastComments=$em->getRepository("TroisWABackBundle:Comments")
            ->lastComments($products);

//dump($products->getId());
//
// dump($lastComments);
//        die();

        $comments = new Comments();

        $comments->setProduct($products);


        $formComments = $this->createForm(new CommentsType(), $comments);



        $formComments->handleRequest($request);

        if ($formComments->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($comments);
            $em->flush();


            $this->get("session")->getFlashBag()
                ->add("success", "Le message à bien été envoyé");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
            return $this->redirectToRoute("trois_wa_back_product",["id"=>$products->getId()]);


        }







        return $this->render("TroisWABackBundle:Product:product.html.twig",
            ["product"=>$products,
            "formComments" => $formComments->createView(),
            "lastComments"=>$lastComments,
            ]);

//    }

//        FORMULAIRE SUPPRESSION

//    private function createFormDelete($id)
//    {
//
//            return $this->createFormBuilder($id)
////                        Modifier l'action
//                        ->setAction($this->generateUrl('trois_wa_back_product_delete', array('id' => $id)))
//                        ->getForm();
//
    }


    public function indexAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
//        $products=$em->getRepository("TroisWABackBundle:Product")
//                     ->findAll();
//        dump($findAllProductsWithCategories);
//        die();

        $products=$em->getRepository("TroisWABackBundle:Product")
            ->findAllProductsWithCategories();



//die(dump($products));
//    return new Response(' ok ');

        return $this->render("TroisWABackBundle:Product:index.html.twig",["products"=>$products]);

    }

    public function customAction()
    {


//    return new Response(' ok ');

        return $this->render("TroisWABackBundle:Product:product-custom.html.twig");

    }

    public function addAction(Request $request)
    {

        $product=new Product();

//        Donner une valeur
//        $product->setTitle("hello");

        $formProduct = $this->createFormBuilder($product)
                                ->add("title","text")
                                ->add("description","textarea")
                                ->add("reference","text")
                                ->add("activate","checkbox")
                                ->add("price","number")
                                ->add('dateCreated',"date",[
                                    "widget"=>"single_text"
                                ])

                                ->add('category', 'entity',[
                                    "expanded"=>true,
                                    'class' => 'TroisWABackBundle:Category',
                                    'choice_label' => 'title',
                                    'query_builder'=>function(CategoryRepository $er){


                                    return $er->builderCategoryOrderPosition();
                                    }

                                ])
                                ->add('brand')
//                                ->add("submit","submit")
                                ->getForm();



        $formProduct->handleRequest($request);

        if($formProduct->isValid())
        {

        $em=$this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();


            $this->get("session")->getFlashBag()
                ->add("success","Le message à bien été envoyé");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
            return $this->redirectToRoute("trois_wa_back_product_add");

        }



//    return new Response(' ok ');

        return $this->render("TroisWABackBundle:Product:add.html.twig",["formProduct"=> $formProduct->createView()]);

    }

    public function editAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $product = $em->getRepository('TroisWABackBundle:Product')->find($id);



        if (!$product) {
            throw $this->createNotFoundException('Unable to find product to edit.');
        }

//        $editForm = $this->createFormBuilder($product)
//            ->add("title","text")
//            ->add("description","textarea")
//            ->add("reference","text")
//            ->add("activate","checkbox")
//            ->add("price","number")
//                                ->add("submit","submit")
//            ->getForm();

//        FAIT APPEL AU FORMULAIRE PRODUCT TYPE
        $editForm= $this->createForm(new ProductType(),$product)

                 ->add("submit","submit");


        $editForm->handleRequest($request);

        if($editForm->isValid())
        {

            $em=$this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();


            $this->get("session")->getFlashBag()
                ->add("success","Le produit à bien été mis à jour");

//                Get to Post permet de transformer les formulaire qui arrive en post -> get()
            return $this->redirectToRoute("trois_wa_back_product_index");

        }



        return $this->render('TroisWABackBundle:Product:edit.html.twig', ["editForm"=> $editForm->createView()]);
    }

    public function deleteAction($id, Request $request){

//        FORMULAIRE SUPPRESSION

//        $form = $this->createFormDelete($id);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $product = $em->getRepository('TroisWABackBundle:Product')->find($id);
//
//            if (!$product) {
//                throw $this->createNotFoundException('Unable to find Product to delete.');
//            }
//
//            // Code de la suppression
//            $em->remove($product);
//            $em->flush();
//            // Fin code de la suppression
//
//            // Créer un message flash
//        }
//
//
//        return $this->redirect($this->generateUrl("trois_wa_back_product_index"));


        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('TroisWABackBundle:Product')->find($id);

        if (!$product) {
                throw $this->createNotFoundException('Unable to find Product to delete.');
            }
//         Code de la suppression
            $em->remove($product);
            $em->flush();
            // Fin code de la suppression

        if($request->isXmlHttpRequest())
        {

            return new JsonResponse();

        }
            return $this->redirect($this->generateUrl("trois_wa_back_product_index"));

    }



}
