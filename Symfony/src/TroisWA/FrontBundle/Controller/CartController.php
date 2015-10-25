<?php


namespace TroisWA\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TroisWA\BackBundle\Entity\Product;


class CartController extends Controller
{


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function indexAction(Request $request)

    {

        $session=$request->getSession();
        $allProduct = [];
        $subTotal=0;
        $totalPrice=0;
        $countProd=0;

        if($session->has('cart')) {

            $em = $this->getDoctrine()->getManager();

            $productsResult = $em->getRepository('TroisWABackBundle:Product')->findProducts(array_keys($session->get('cart')));
            foreach($productsResult as $prod)
            {
                $subTotal=$subTotal+$prod->getSalePrice();
                $totalPrice=$totalPrice + $prod->getPrice();
                $countProd=$countProd + 1;
                array_push($allProduct,[
                   'product' => $prod,
                    'quantity' => $session->get('cart')[$prod->getId()]
                ]);
            }

        }
//        dump($allProduct);
//        die();


        return $this->render("TroisWAFrontBundle:Cart:cart.html.twig",['allProduct'=>$allProduct,'totalPrice'=>$totalPrice, 'countProd'=>$countProd, 'subTotal'=>$subTotal]);


    }

    public function addAction(Product $product, Request $request)

    {

        $session=$request->getSession();
        $allProduct=[];

        if($session->has('cart')) {

            $allProduct = $session->get('cart');


            if (array_key_exists($product->getId(), $allProduct)) {




                if($allProduct[$product->getId()] == $product->getQuantity())
                {

                    $allProduct[$product->getId()]= $product->getQuantity() ;

                }else

                {
                $qty = $allProduct[$product->getId()] + 1;

                $allProduct[$product->getId()]= $qty;

                }




            }else{

                $allProduct[$product->getId()] = 1;

            }

            $session->set('cart',$allProduct);

        }
        else{

            $session->set('cart',$allProduct);


        }

//        dump($session->get('cart'));
//
//        die();

        return $this->redirectToRoute("trois_wa_front_cart");


    }

    public function removeAction(Product $product, Request $request)

    {

        $session=$request->getSession();

            $allProduct = $session->get('cart');


            if (array_key_exists($product->getId(), $allProduct)) {

                $qty = $allProduct[$product->getId()] - 1;


                $allProduct[$product->getId()]= $qty;

                if($qty==0)
                {

                    unset($allProduct[$product->getId()]);

                }

            }

            $session->set('cart',$allProduct);




//        dump($session->get('cart'));
//
//        die();

        return $this->redirectToRoute("trois_wa_front_cart");


    }




    public function deleteAction(Product $product, Request $request)

    {

        $session=$request->getSession();

        if($session->has('cart')) {

            $allProduct = $session->get('cart');


            if (array_key_exists($product->getId(), $allProduct)) {


                unset($allProduct[$product->getId()]);



            }

            $session->set('cart',$allProduct);

        }





        return $this->redirectToRoute('trois_wa_front_cart');


    }



}