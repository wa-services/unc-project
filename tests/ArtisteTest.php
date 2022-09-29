<?php

declare(strict_types=1);

namespace App\Tests;

use App\Entity\Artiste;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Uid\UuidV4;

class ArtisteTest extends TestCase
{
    public function testConstruct()
    {
        $artiste = new Artiste();
//        $this->assertIsString($artiste->getId());
        $this->assertEquals('', $artiste->getNomArtiste());
        $this->assertEquals('', $artiste->getPrenomArtiste());
        $this->assertEquals('', $artiste->getRoleArtiste());

    }

    public function testGettersSetters()
    {
        $artiste = new Artiste();

        $artiste->setNomArtiste('Paul');
        $this->assertEquals('Paul', $artiste->getNomArtiste());

        $artiste->setPrenomArtiste('Walker');
        $this->assertEquals('Walker', $artiste->getPrenomArtiste());

        $artiste->setRoleArtiste('Guitariste');
        $this->assertEquals('Guitariste', $artiste->getRoleArtiste());
    }
}
