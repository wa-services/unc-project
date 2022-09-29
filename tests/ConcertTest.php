<?php

declare(strict_types=1);

namespace App\Tests;

use App\Entity\Concert;
use PHPUnit\Framework\TestCase;

class ConcertTest extends TestCase
{
    public function testConstruct()
    {
        $concert = new Concert();
//        $this->assertIsString($concert->getId());
        $this->assertEquals('', $concert->getNomSalle());
        $this->assertEquals('', $concert->getNomConcert());
        $this->assertEquals('', $concert->getDateConcert());

    }

    public function testGettersSetters()
    {
        $concert = new Concert();
        $dateReservation = new \DateTime('2019-02-03');

        $concert->setNomSalle('Vercors');
        $this->assertEquals('Vercors', $concert->getNomSalle());

        $concert->setNomConcert('Jackson');
        $this->assertEquals('Jackson', $concert->getNomConcert());

        $concert->setDateConcert($dateReservation);
        $this->assertEquals($dateReservation, $concert->getDateConcert());

    }
}
