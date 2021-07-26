<?php

namespace App\Tests;

use App\Entity\BlogPost;
use DateTime;
use PHPUnit\Framework\TestCase;

class BlogpostUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $blogpost = new BlogPost();
        $datetime = new DateTime();

        $blogpost->setTitre('titre')
            ->setContenu('contenu')
            ->setSlug('slug')
            ->setCreatedAt($datetime);

        $this->assertTrue($blogpost->getTitre() === 'titre');
        $this->assertTrue($blogpost->getContenu() === 'contenu');
        $this->assertTrue($blogpost->getSlug() === 'slug');
        $this->assertTrue($blogpost->getCreatedAt() === $datetime);
    }

    public function testIsFalse()
    {
        $blogpost = new BlogPost();
        $datetime = new DateTime();

        $blogpost->setTitre('titre')
            ->setContenu('contenu')
            ->setSlug('slug')
            ->setCreatedAt($datetime);

        $this->assertFalse($blogpost->getTitre() === 'false');
        $this->assertFalse($blogpost->getContenu() === 'false');
        $this->assertFalse($blogpost->getSlug() === 'false');
        $this->assertFalse($blogpost->getCreatedAt() === new DateTime());
    }

    public function testIsEmpty()
    {
        $blogpost = new BlogPost();

        $this->assertEmpty($blogpost->getTitre());
        $this->assertEmpty($blogpost->getContenu());
        $this->assertEmpty($blogpost->getSlug());
        $this->assertEmpty($blogpost->getCreatedAt());
    }
}
