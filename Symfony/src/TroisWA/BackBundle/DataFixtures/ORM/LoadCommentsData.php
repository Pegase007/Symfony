<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TroisWA\BackBundle\Entity\Comments;


class LoadCommentsData extends AbstractFixture implements OrderedFixtureInterface
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

        for ($i = 0; $i < 10; $i++) {


            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_A" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();


            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_B" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();


            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_C" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();


            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_D" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();


            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_E" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();


            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_F" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();

            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_G" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();

            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_H" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();

            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_I" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();

            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_J" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();


            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_K" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();


            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_L" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();


            $comment = new Comments();

            $comment->setMark($faker->numberBetween(0, 5));
            $comment->setContent($faker->paragraph(1));
            $comment->setActivate($faker->numberBetween(0, 1));
            $comment->setAuthor($faker->name());
            $comment->setDateCreated($faker->dateTime($max = 'now'));

            $product = $this->getReference("product_M" . $i);
            $comment->setProduct($product);



            $manager->persist($comment);
            $manager->flush();
        }



    }
    public function getOrder()
    {
        return 5;
    }
}