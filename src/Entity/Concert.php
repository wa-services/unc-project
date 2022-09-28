<?php

namespace App\Entity;

use App\Repository\ConcertRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\UuidV6 as Uuid;

#[ORM\Entity(repositoryClass: ConcertRepository::class)]
class Concert
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomConcert = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateConcert = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomSalle = null;

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function getNomConcert(): ?string
    {
        return $this->nomConcert;
    }

    public function setNomConcert(?string $nomConcert): self
    {
        $this->nomConcert = $nomConcert;

        return $this;
    }

    public function getDateConcert(): ?\DateTimeInterface
    {
        return $this->dateConcert;
    }

    public function setDateConcert(?\DateTimeInterface $dateConcert): self
    {
        $this->dateConcert = $dateConcert;

        return $this;
    }

    public function getNomSalle(): ?string
    {
        return $this->nomSalle;
    }

    public function setNomSalle(?string $nomSalle): self
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }
}
