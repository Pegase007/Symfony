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

//        die("test");

        $category = new Category();
        $category->setTitle('Hello');
        $category->setDescription('lorem Ipsum');
        $category->setPosition('2');
        $category->setActivate('1');

        $this->addReference("categ",$category);

        $manager->persist($category);
        $manager->flush();


    }

    public function getOrder()
    {
        return 1;
    }
}