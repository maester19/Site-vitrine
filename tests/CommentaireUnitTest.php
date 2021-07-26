<?php

namespace App\Tests;

use App\Entity\Commentaire;
use App\Entity\Peinture;
use App\Entity\BlogPost;
use DateTime;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $commentaire = new Commentaire();
        $peinture = new Peinture();
        $blogpost = new BlogPost();
        $datetime = new DateTime();

        $commentaire->setAuteur('auteur')
            ->setEmail('master@master.com')
            ->setContenu('contenu')
            ->setCreatedAt($datetime)
            ->setPeinture($peinture)
            ->setBlogpost($blogpost);

        $this->assertTrue($commentaire->getAuteur() === 'auteur');
        $this->assertTrue($commentaire->getContenu() === 'contenu');
        $this->assertTrue($commentaire->getEmail() === 'master@master.com');
        $this->assertTrue($commentaire->getCreatedAt() === $datetime);
        $this->assertTrue($commentaire->getPeinture() === $peinture);
        $this->assertTrue($commentaire->getBlogpost() === $blogpost);
    }

    public function testIsFalse()
    {
        $commentaire = new Commentaire();
        $peinture = new Peinture();
        $blogpost = new BlogPost();
        $datetime = new DateTime();

        $commentaire->setAuteur('auteur')
            ->setEmail('master@master.com')
            ->setContenu('contenu')
            ->setCreatedAt($datetime)
            ->setPeinture($peinture)
            ->setBlogpost($blogpost);

        $this->assertFalse($commentaire->getAuteur() === 'false');
        $this->assertFalse($commentaire->getContenu() === 'false');
        $this->assertFalse($commentaire->getEmail() === 'master@false.com');
        $this->assertFalse($commentaire->getCreatedAt() === new DateTime());
        $this->assertFalse($commentaire->getPeinture() === new Peinture());
        $this->assertFalse($commentaire->getBlogpost() === new BlogPost());
    }

    public function testIsEmpty()
    {
        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getCreatedAt());
        $this->assertEmpty($commentaire->getPeinture());
        $this->assertEmpty($commentaire->getBlogpost());
    }
}
