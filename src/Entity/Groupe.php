<?php

namespace App\Entity;

use App\Repository\GroupeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\UuidV6 as Uuid;

#[ORM\Entity(repositoryClass: GroupeRepository::class)]
class Groupe
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomGroupe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $categorieGroupe = null;

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function getNomGroupe(): ?string
    {
        return $this->nomGroupe;
    }

    public function setNomGroupe(?string $nomGroupe): self
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    public function getCategorieGroupe(): ?string
    {
        return $this->categorieGroupe;
    }

    public function setCategorieGroupe(?string $categorieGroupe): self
    {
        $this->categorieGroupe = $categorieGroupe;

        return $this;
    }
}
