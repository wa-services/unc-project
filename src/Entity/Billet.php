<?php

namespace App\Entity;

use App\Repository\BilletRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToOne(inversedBy: 'billet')]
    private ?Concert $concert = null;

    #[ORM\ManyToMany(targetEntity: Client::class, inversedBy: 'billets')]
    private Collection $clients;

    public function __construct()
    {
        $this->clients = new ArrayCollection();
    }

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

    public function getConcert(): ?Concert
    {
        return $this->concert;
    }

    public function setConcert(?Concert $concert): self
    {
        $this->concert = $concert;

        return $this;
    }

    /**
     * @return Collection<int, Client>
     */
    public function getClients(): Collection
    {
        return $this->clients;
    }

    public function addClient(Client $client): self
    {
        if (!$this->clients->contains($client)) {
            $this->clients->add($client);
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        $this->clients->removeElement($client);

        return $this;
    }
}
