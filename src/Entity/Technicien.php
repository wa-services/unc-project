<?php

namespace App\Entity;

use App\Repository\TechnicienRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToMany(targetEntity: Groupe::class, mappedBy: 'techniciens')]
    private Collection $groupes;

    public function __construct()
    {
        $this->groupes = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Groupe>
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes->add($groupe);
            $groupe->addTechnicien($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            $groupe->removeTechnicien($this);
        }

        return $this;
    }
}
