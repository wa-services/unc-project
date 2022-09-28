<?php

namespace App\Entity;

use App\Repository\BilletRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BilletRepository::class)]
class Billet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $prixBillet = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $referenceBillet = null;

    public function getId(): ?int
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
