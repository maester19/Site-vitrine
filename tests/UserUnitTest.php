<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();

        $user->setEmail('master@master.com')
            ->setPrenom('prenom')
            ->setNom('nom')
            ->setPassword('password')
            ->setAPropos('aPropos')
            ->setInstagram('instagram');

        $this->assertTrue($user->getEmail() === 'master@master.com');
        $this->assertTrue($user->getPrenom() === 'prenom');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getAPropos() === 'aPropos');
        $this->assertTrue($user->getInstagram() === 'instagram');
    }

    public function testIsFalse()
    {
        $user = new User();

        $user->setEmail('master@master.com')
            ->setPrenom('prenom')
            ->setNom('nom')
            ->setPassword('password')
            ->setAPropos('aPropos')
            ->setInstagram('instagram');

        $this->assertFalse($user->getEmail() === 'maester@maester.com');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'mmm');
        $this->assertFalse($user->getPassword() === 'paword');
        $this->assertFalse($user->getAPropos() === 'sPropos');
        $this->assertFalse($user->getInstagram() === 'facebook');
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getAPropos());
        $this->assertEmpty($user->getInstagram());
    }
}
