<?php

namespace App\Entity;

use App\Repository\SpecialiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpecialiteRepository::class)]
class Specialite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_specialite = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'specialites')]
    private Collection $medecins;

    public function __construct()
    {
        $this->medecins = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSpecialite(): ?string
    {
        return $this->nom_specialite;
    }

    public function setNomSpecialite(string $nom_specialite): static
    {
        $this->nom_specialite = $nom_specialite;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getMedecins(): Collection
    {
        return $this->medecins;
    }

    public function addMedecin(User $medecin): static
    {
        if (!$this->medecins->contains($medecin)) {
            $this->medecins->add($medecin);
        }

        return $this;
    }

    public function removeMedecin(User $medecin): static
    {
        $this->medecins->removeElement($medecin);

        return $this;
    }
}
