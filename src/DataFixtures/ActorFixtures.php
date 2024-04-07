<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Faker\Factory;
use App\Entity\Movie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $faker = Factory::create();

        // // Create and persist sample movie entities
        // for ($i = 0; $i < 10; $i++) {
        //     $actor = new Actor();
        //     $actor->setName($faker->name());
        //     $manager->persist($actor);
        // }

        // // Flush all changes to the database
        // $manager->flush();

        // $this->addReference('actor_1', $actor);
        // $this->addReference('actor_2', $actor);
        // $this->addReference('actor_3', $actor);
    }
}
