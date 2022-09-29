<?php

declare(strict_types=1);

namespace App\Tests;

use App\Entity\Technicien;
use PHPUnit\Framework\TestCase;

class TechnicienTest extends TestCase
{
    public function testConstruct()
    {
        $concert = new Technicien();
//        $this->assertIsString($concert->getId());
        $this->assertEquals('', $concert->getNomTechnicien());
        $this->assertEquals('', $concert->getPrenomTechnicien());
        $this->assertEquals('', $concert->getQualifTechnicien());

    }

    public function testGettersSetters()
    {
        $concert = new Technicien();
        $dateReservation = new \DateTime('2019-02-03');

        $concert->setNomTechnicien('Mark');
        $this->assertEquals('Mark', $concert->getNomTechnicien());

        $concert->setPrenomTechnicien('Zuckerberg');
        $this->assertEquals('Zuckerberg', $concert->getPrenomTechnicien());

        $concert->setQualifTechnicien('Ingénieur');
        $this->assertEquals('Ingénieur', $concert->getQualifTechnicien());

    }
}
