<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $p1 = new Product();
            $p1->setTitle("Product1")
            ->setImage("product1.jpg")
            ->setPrice("1000");
            $manager->persist($p1);

            $p2 = new Product();
            $p2->setTitle("Product2")
            ->setImage("product2.jpg")
            ->setPrice("2000");
            $manager->persist($p2);

            $p3 = new Product();
            $p3->setTitle("Product3")
            ->setImage("product3.jpg")
            ->setPrice("3000");
            $manager->persist($p3);

        $manager->flush();
    }
}
