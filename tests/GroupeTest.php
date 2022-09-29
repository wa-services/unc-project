<?php

declare(strict_types=1);

namespace App\Tests;

use App\Entity\Groupe;
use PHPUnit\Framework\TestCase;

class GroupeTest extends TestCase
{
    public function testConstruct()
    {
        $groupe = new Groupe();
//        $this->assertIsString($groupe->getId());
        $this->assertEquals('', $groupe->getCategorieGroupe());
        $this->assertEquals('', $groupe->getNomGroupe());

    }

    public function testGettersSetters()
    {
        $groupe = new Groupe();

        $groupe->setNomGroupe('ACDC');
        $this->assertEquals('ACDC', $groupe->getNomGroupe());

        $groupe->setCategorieGroupe('Rock');
        $this->assertEquals('Rock', $groupe->getCategorieGroupe());

    }
}
