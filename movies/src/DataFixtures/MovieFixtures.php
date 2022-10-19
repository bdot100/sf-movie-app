<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Night');
        $movie->setReleaseYear(2000);
        $movie->setDescription('This is the description');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2022/03/08/21/20/running-7056590_1280.jpg');
        
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('The Dark Night');
        $movie2->setReleaseYear(2000);
        $movie2->setDescription('This is the description');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2015/02/02/11/09/office-620822_1280.jpg');
        
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));

        $manager->persist($movie2);

        $manager->flush();
    }
}
