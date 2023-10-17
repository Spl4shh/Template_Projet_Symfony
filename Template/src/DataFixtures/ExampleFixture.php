<?php

namespace App\DataFixtures;

use App\Entity\Example;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ExampleFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $example = new Example();
        $example->setName("NATANELIC");
        $manager->persist($example);

        $manager->flush();
    }
}
