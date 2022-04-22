<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categorie_n1 = new Category();
        $categorie_n1->setName('Type1');
        $manager->persist($categorie_n1);

        $categorie_n2 = new Category();
        $categorie_n2->setName('Type2');
        $manager->persist($categorie_n2);

        $categorie_n3 = new Category();
        $categorie_n3->setName('Type3');
        $manager->persist($categorie_n3);

        $manager->flush();

        $article = new Article();
        $article->setTitre("Article 1");
        $article->setContenu("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra urna in nunc dapibus tincidunt et eu magna. Pellentesque venenatis varius orci sit amet condimentum. Quisque sit amet enim id nisl consectetur gravida. Curabitur efficitur felis rutrum ligula convallis convallis. Vestibulum eget dictum lorem. Vestibulum est justo, fermentum eu eleifend vestibulum, lacinia efficitur erat. Proin a ligula lorem. In iaculis dignissim sodales.");
        $article->setCategory($categorie_n1);
        $manager->persist($article);

        $article = new Article();
        $article->setTitre("Article 2");
        $article->setContenu("Morbi viverra facilisis aliquet. Phasellus suscipit arcu id felis tempor, in fringilla turpis dictum. Fusce porta finibus diam, vitae lacinia nibh finibus id. Donec facilisis nisl quis egestas sollicitudin. Aenean quis nulla est. Aliquam volutpat dolor eget ultricies maximus. Maecenas felis turpis, lacinia et purus in, viverra sagittis ex. Ut laoreet est sit amet ligula auctor, in venenatis magna interdum. Maecenas suscipit accumsan libero, auctor ullamcorper lectus porta semper.");
        $article->setCategory($categorie_n3);
        $manager->persist($article);


        $manager->flush();
    }
}
