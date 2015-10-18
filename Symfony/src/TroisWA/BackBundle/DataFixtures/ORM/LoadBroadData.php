<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TroisWA\BackBundle\Entity\Brand;
use TroisWA\BackBundle\Entity\Product;

class BrandProductData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
//        die("product");

        $faker = \Faker\Factory::create('fr_FR');

        $brand = new Brand();
        $brand->setTitle($faker->sentence(3));

        $this->addReference("brand",$brand);

        $manager->persist($brand);
        $manager->flush();


    }
    public function getOrder()
    {
        return 2;
    }
}