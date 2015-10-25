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

        for ($i = 0; $i < 10; $i++) {

            $product = new Product();
            $product->setTitle('Bob');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);

            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_bob");
            $product->setImage($image);

            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_A'.$i, $product);

            $manager->persist($product);
            $manager->flush();

            $product = new Product();
            $product->setTitle('Ar');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_ar");
            $product->setImage($image);


            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_B'.$i, $product);

            $manager->persist($product);
            $manager->flush();

            $product = new Product();
            $product->setTitle('Paul');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));

            $image = $this->getReference("image_paul");
            $product->setImage($image);

            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_C'.$i, $product);

            $manager->persist($product);
            $manager->flush();

            $product = new Product();
            $product->setTitle('Paul2');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_pauldesp");
            $product->setImage($image);

            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_D'.$i, $product);

            $manager->persist($product);
            $manager->flush();


            $product = new Product();
            $product->setTitle('Tom');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_tom");
            $product->setImage($image);

            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_E'.$i, $product);

            $manager->persist($product);
            $manager->flush();

            $product = new Product();
            $product->setTitle('Lance');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_lance");
            $product->setImage($image);


            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_F'.$i, $product);

            $manager->persist($product);
            $manager->flush();


            $product = new Product();
            $product->setTitle('Happy');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_happy");
            $product->setImage($image);


            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_G'.$i, $product);

            $manager->persist($product);
            $manager->flush();


            $product = new Product();
            $product->setTitle('Mark');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_mark");
            $product->setImage($image);



            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_H'.$i, $product);

            $manager->persist($product);
            $manager->flush();

            $product = new Product();
            $product->setTitle('Bob');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));

            $image = $this->getReference("image_desp");
            $product->setImage($image);


            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_I'.$i, $product);

            $manager->persist($product);
            $manager->flush();


            $product = new Product();
            $product->setTitle('Blob');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_boby");
            $product->setImage($image);


            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_J'.$i, $product);

            $manager->persist($product);
            $manager->flush();


            $product = new Product();
            $product->setTitle('Blob');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_B");
            $product->setImage($image);


            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_K'.$i, $product);

            $manager->persist($product);
            $manager->flush();


            $product = new Product();
            $product->setTitle('Blob');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_C");
            $product->setImage($image);


            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_L'.$i, $product);

            $manager->persist($product);
            $manager->flush();


            $product = new Product();
            $product->setTitle('Blob');
            $product->setDescription($faker->paragraph(2));
            $product->setQuantity($faker->randomDigitNotNull);
            $product->setSalePrice($faker->randomFloat(2, 3, 50));
            $product->setPrice($faker->randomFloat(2, 3, $product->getSalePrice()));
            $product->setReference($faker->numerify('REF-######'));
            $product->setActivate($faker->numberBetween(0, 1));
            $product->setDateCreated($faker->dateTime($max = 'now'));


            $image = $this->getReference("image_D");
            $product->setImage($image);


            $category = $this->getReference("categorie_" . $i);
            $product->setCategory($category);

            $brand = $this->getReference("brand_" . $i);
            $product->setBrand($brand);

            $this->addReference('product_M'.$i, $product);

            $manager->persist($product);
            $manager->flush();


        }



    }
    public function getOrder()
    {
        return 4;
    }
}