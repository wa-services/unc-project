<?php

namespace App\Entity;

use App\Repository\BilletRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\UuidV6 as Uuid;

#[ORM\Entity(repositoryClass: BilletRepository::class)]
class Billet
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $prixBillet = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $referenceBillet = null;

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function getPrixBillet(): ?int
    {
        return $this->prixBillet;
    }

    public function setPrixBillet(?int $prixBillet): self
    {
        $this->prixBillet = $prixBillet;

        return $this;
    }

    public function getReferenceBillet(): ?string
    {
        return $this->referenceBillet;
    }

    public function setReferenceBillet(?string $referenceBillet): self
    {
        $this->referenceBillet = $referenceBillet;

        return $this;
    }
}
