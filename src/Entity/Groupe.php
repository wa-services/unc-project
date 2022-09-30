<?php

namespace App\Entity;

use App\Repository\GroupeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'groupe', targetEntity: Artiste::class)]
    private Collection $artistes;

    #[ORM\ManyToMany(targetEntity: Technicien::class, inversedBy: 'groupes')]
    private Collection $techniciens;

    public function __construct()
    {
        $this->artistes = new ArrayCollection();
        $this->techniciens = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Artiste>
     */
    public function getArtistes(): Collection
    {
        return $this->artistes;
    }

    public function addArtiste(Artiste $artiste): self
    {
        if (!$this->artistes->contains($artiste)) {
            $this->artistes->add($artiste);
            $artiste->setGroupe($this);
        }

        return $this;
    }

    public function removeArtiste(Artiste $artiste): self
    {
        if ($this->artistes->removeElement($artiste)) {
            // set the owning side to null (unless already changed)
            if ($artiste->getGroupe() === $this) {
                $artiste->setGroupe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Technicien>
     */
    public function getTechniciens(): Collection
    {
        return $this->techniciens;
    }

    public function addTechnicien(Technicien $technicien): self
    {
        if (!$this->techniciens->contains($technicien)) {
            $this->techniciens->add($technicien);
        }

        return $this;
    }

    public function removeTechnicien(Technicien $technicien): self
    {
        $this->techniciens->removeElement($technicien);

        return $this;
    }
}
