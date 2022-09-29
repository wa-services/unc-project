<?php

declare(strict_types=1);

namespace App\Tests;

use App\Entity\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testConstruct()
    {
        $client = new Client();
//        $this->assertIsString($client->getId());
        $this->assertEquals('', $client->getNomClient());
        $this->assertEquals('', $client->getPrenomClient());
        $this->assertEquals('', $client->getDateReservation());

    }

    public function testGettersSetters()
    {
        $client = new Client();
        $dateReservation = new \DateTime('2019-02-03');

        $client->setNomClient('Andrew');
        $this->assertEquals('Andrew', $client->getNomClient());

        $client->setPrenomClient('Jackson');
        $this->assertEquals('Jackson', $client->getPrenomClient());

        $client->setDateReservation($dateReservation);
        $this->assertEquals($dateReservation, $client->getDateReservation());

    }
}
