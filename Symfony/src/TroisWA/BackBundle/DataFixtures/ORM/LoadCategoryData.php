<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TroisWA\BackBundle\Entity\Category;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{



    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $allCategories = [];
//        die("test");
        $faker = \Faker\Factory::create('fr_FR');


        for ($i = 0; $i < 10; $i++) {
            $category = new Category();
            $category->setTitle($faker->sentence(3));
            $category->setDescription($faker->paragraph(3));
            $category->setPosition($faker->randomDigitNotNull);
            $category->setActivate($faker->numberBetween(0, 1));

//            $this->addReference("categ", $category);

            $image = $this->getReference("image");
            $category->setImageFixture($image);

            $manager->persist($category);
            $manager->flush();
            array_push($allCategories, $category);

        }
        $this->addReference('categ', $allCategories);
    }

    public function getOrder()
    {
        return 3;
    }
}