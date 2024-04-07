<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Movie;
use App\Entity\Actor;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        // Create and persist sample actor entities
        for ($i = 0; $i < 5; $i++) {
            $actor = new Actor();
            $actor->setName($faker->name());
            $manager->persist($actor);
            $this->addReference('actor_' . $i, $actor); // Add reference to actor
        }

        // Flush all changes to the database
        $manager->flush();

        // Create and persist sample movie entities
        for ($i = 0; $i < 10; $i++) {
            $movie = new Movie();
            $movie->setTitle($faker->sentence(3));
            $movie->setReleaseYear($faker->numberBetween(2000, 2022));
            $movie->setDescription($faker->paragraph(3));
            $movie->setImagePath($faker->imageUrl(360, 360, 'animals', true, 'dogs', true));

            // Associate random actors with the movie
            $actorReferences = [];
            for ($j = 0; $j < mt_rand(1, 3); $j++) {
                $actorReference = $this->getReference('actor_' . mt_rand(0, 4));
                $actorReferences[] = $actorReference;
                $movie->addActor($actorReference);
            }

            // Add reference to movie (optional)
            $this->addReference('movie_' . $i, $movie);

            $manager->persist($movie);
        }

        // Flush all changes to the database
        $manager->flush();
    }
}
