<?php

namespace App\Entity;

use App\Repository\ArtisteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\UuidV6 as Uuid;

#[ORM\Entity(repositoryClass: ArtisteRepository::class)]
class Artiste
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomArtiste = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenomArtiste = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $roleArtiste = null;

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function getNomArtiste(): ?string
    {
        return $this->nomArtiste;
    }

    public function setNomArtiste(?string $nomArtiste): self
    {
        $this->nomArtiste = $nomArtiste;

        return $this;
    }

    public function getPrenomArtiste(): ?string
    {
        return $this->prenomArtiste;
    }

    public function setPrenomArtiste(?string $prenomArtiste): self
    {
        $this->prenomArtiste = $prenomArtiste;

        return $this;
    }

    public function getRoleArtiste(): ?string
    {
        return $this->roleArtiste;
    }

    public function setRoleArtiste(?string $roleArtiste): self
    {
        $this->roleArtiste = $roleArtiste;

        return $this;
    }
}
