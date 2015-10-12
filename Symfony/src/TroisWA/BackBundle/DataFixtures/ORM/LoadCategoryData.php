<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TroisWA\BackBundle\Entity\Category;

class LoadUserData implements FixtureInterface
{
/**
* {@inheritDoc}
*/
public function load(ObjectManager $manager)
{
$category = new Category();
$category->setTitle('Hello');
$category->setDescription('lorem Ipsum');
$category->setPosition('2');
$category->setActivate('1');

$manager->persist($category);
$manager->flush();
}
}