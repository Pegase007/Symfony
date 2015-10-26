<?php

namespace TroisWA\BackBundle\Util;


use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use TroisWA\BackBundle\Entity\Product;

class Cart
{


    private $em;
    private $session;

    public function __construct(EntityManager $em, Session $session)
    {
        $this->em = $em;
        $this->session = $session;
    }


    public function add(Product $product, $qty = 1)

    {
//        $this->session->remove('cart');
//        $this->session->remove('cartProd');
//        $this->session->remove('cartFinal');

// Soit j'ai un tableau vide soit un tableau plein d'id produit
        if ($this->session->get('cart')) {

            $allProducts = $this->session->get('cart');

        } else {

            $allProducts = [];

        }

        // Traitement sur la quantité
        if (array_key_exists($product->getId(), $allProducts)) {

            // $allProducts[$product->getId()]; représente la quantité du produit
            $allProducts[$product->getId()] = $allProducts[$product->getId()] + $qty;
            //$qty = $allProducts[$product->getId()] + $qty

        } else {

            $allProducts[$product->getId()] = $qty;
        }

        $this->session->set('cart', $allProducts);

        $subTotal = 0;
        $totalPrice = 0;
        $countProd = 0;
        $cartProd=[];

        $products = $this->em->getRepository('TroisWABackBundle:Product')->findProducts(array_keys($this->session->get('cart')));



        foreach ($products as $prod)
        {
            $subTotal = $subTotal + $prod->getSalePrice();
            $totalPrice = $totalPrice + $prod->getPrice();
            $countProd =$countProd  + $this->session->get('cart')[$prod->getId()] ;

            array_push($cartProd, [
                'product' => $prod,
                'quantity' => $this->session->get('cart')[$prod->getId()],
            ]);
        }

        $this->session->set('cartProd', $cartProd);


        $cartFinal=[

            'subTotal' => $subTotal,
            'totalPrice' => $totalPrice,
            'countProd' => $countProd,
        ];

        $this->session->set('cartFinal', $cartFinal);
    }

    public function delete()
    {





    }





}