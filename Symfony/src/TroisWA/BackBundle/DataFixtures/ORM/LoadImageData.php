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

  /*      for ($i = 0; $i < 10; $i++) {
            $image = new Image();
            $image->setPath('561fcba024270604140660.png');
            $image->setCaption($faker->catchPhrase);

            $this->addReference('image_'.$i, $image);

            $manager->persist($image);
            $manager->flush();


        }*/

        $image = new Image();
        $image->setPath('1445803785_agnes-overjoyed-icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_bob', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803783_gru-icon-2.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_ar', $image);

        $manager->persist($image);
        $manager->flush();


        $image = new Image();
        $image->setPath('1445803662_Happy-Minion-Icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_paul', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803668_Shy-Minion-icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_pauldesp', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803666_despicable-me-2-Minion-icon-7.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_tom', $image);

        $manager->persist($image);
        $manager->flush();


        $image = new Image();
        $image->setPath('1445803670_despicable-me-2-Minion-icon-5.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_lance', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803673_superman-minion-icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_happy', $image);

        $manager->persist($image);
        $manager->flush();


        $image = new Image();
        $image->setPath('1445803676_Minion-reading-icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_mark', $image);

        $manager->persist($image);
        $manager->flush();


         $image = new Image();
        $image->setPath('1445803678_Angry-Minion-icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_desp', $image);

        $manager->persist($image);
        $manager->flush();


         $image = new Image();
        $image->setPath('1445803680_Minion_icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_boby', $image);

        $manager->persist($image);
        $manager->flush();

//
        $image = new Image();
        $image->setPath('1445803682_girl-minion-icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_6', $image);

        $manager->persist($image);
        $manager->flush();
//
        $image = new Image();
        $image->setPath('1445803684_Dancing-minion-icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_7', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803689_despicable-me-2-Minion-icon-4.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_8', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803687_Curious-Minion-Icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_9', $image);

        $manager->persist($image);
        $manager->flush();


        $image = new Image();
        $image->setPath('1445803691_kungfu-Minion.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_10', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803693_despicable-me-2-Minion-icon-6.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_D', $image);

        $manager->persist($image);
        $manager->flush();


        $image = new Image();
        $image->setPath('1445803695_despicable-me-2-Minion-icon-3.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_C', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803765_Evil-Minion-Icon-3.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_0', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803770_Minion-playing-golf-icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_B', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803768_despicable-me-2-Minion-icon-2.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_5', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803758_happy-agnes-icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_1', $image);

        $manager->persist($image);
        $manager->flush();

        $image = new Image();
        $image->setPath('1445803760_evil-minion-icon.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_2', $image);

        $manager->persist($image);
        $manager->flush();


        $image = new Image();
        $image->setPath('1445803762_despicable-me-2-Minion-icon-8.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_3', $image);

        $manager->persist($image);
        $manager->flush();


        $image = new Image();
        $image->setPath('1445803762_despicable-me-2-Minion-icon-8.png');
        $image->setCaption($faker->catchPhrase);

        $this->addReference('image_4', $image);

        $manager->persist($image);
        $manager->flush();



    }


    public function getOrder()
    {
        return 1;
    }
}