<?php

namespace App\Entity;

use App\Repository\TechnicienRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\UuidV6 as Uuid;

#[ORM\Entity(repositoryClass: TechnicienRepository::class)]
class Technicien
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomTechnicien = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenomTechnicien = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $qualifTechnicien = null;

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function getNomTechnicien(): ?string
    {
        return $this->nomTechnicien;
    }

    public function setNomTechnicien(?string $nomTechnicien): self
    {
        $this->nomTechnicien = $nomTechnicien;

        return $this;
    }

    public function getPrenomTechnicien(): ?string
    {
        return $this->prenomTechnicien;
    }

    public function setPrenomTechnicien(?string $prenomTechnicien): self
    {
        $this->prenomTechnicien = $prenomTechnicien;

        return $this;
    }

    public function getQualifTechnicien(): ?string
    {
        return $this->qualifTechnicien;
    }

    public function setQualifTechnicien(?string $qualifTechnicien): self
    {
        $this->qualifTechnicien = $qualifTechnicien;

        return $this;
    }
}
