<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TroisWA\BackBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
//        die("product");

        $product = new Product();
        $product->setTitle('Hello');
        $product->setDescription('lorem Ipsum');
        $product->setQuantity('5');
        $product->setPrice('45');
        $product->setReference('REF-55899');
        $product->setActivate('1');
        $category=$this->getReference("categ");
        $product->setCategory($category);

        $manager->persist($product);
        $manager->flush();



    }
    public function getOrder()
    {
        return 2;
    }
}