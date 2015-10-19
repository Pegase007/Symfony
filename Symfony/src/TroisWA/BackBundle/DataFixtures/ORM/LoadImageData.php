<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TroisWA\BackBundle\Entity\Image;
use TroisWA\BackBundle\Entity\Product;

class LoadImageData extends AbstractFixture implements OrderedFixtureInterface
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
        $allImg = [];

        for ($i = 0; $i < 10; $i++) {
            $image = new Image();
            $image->setPath('561fcba024270604140660.png');
            $image->setCaption($faker->catchPhrase);

            $this->addReference('image_'.$i, $image);

            $manager->persist($image);
            $manager->flush();


        }

//


    }


    public function getOrder()
    {
        return 1;
    }
}