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

        $faker = \Faker\Factory::create('fr_FR');

        // generate data by accessing properties
//        echo $faker->name;
//        die;

        for ($i = 0; $i < 10; $i++)
        {
        $product = new Product();
        $product->setTitle($faker->sentence(3));
        $product->setDescription($faker->paragraph(3));
        $product->setQuantity($faker->randomDigitNotNull);
            $product->setPrice($faker->randomFloat(2,0,1000));
        $product->setReference($faker->numerify('REF-######'));
        $product->setActivate($faker->numberBetween(0,1));

        $category=$faker->randomElement($this->getReference("categ"));
        $product->setCategory($category);

        $brand=$this->getReference("brand");
        $product->setBrand($brand);

        $manager->persist($product);
        $manager->flush();

        }


    }
    public function getOrder()
    {
        return 4;
    }
}