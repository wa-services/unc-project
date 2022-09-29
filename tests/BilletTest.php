<?php

declare(strict_types=1);

namespace App\Tests;

use App\Entity\Billet;
use PHPUnit\Framework\TestCase;

class BilletTest extends TestCase
{
    public function testConstruct()
    {
        $billet = new Billet();
//        $this->assertIsString($billet->getId());
        $this->assertEquals('', $billet->getPrixBillet());
        $this->assertEquals('', $billet->getReferenceBillet());

    }

    public function testGettersSetters()
    {
        $billet = new Billet();

        $billet->setPrixBillet(20);
        $this->assertEquals(20, $billet->getPrixBillet());

        $billet->setReferenceBillet('concert1');
        $this->assertEquals('concert1', $billet->getReferenceBillet());

    }
}
