<?php

namespace App\Entity;

use App\Repository\ObservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObservationRepository::class)]
class Observation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $observation = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_observation = null;

    #[ORM\Column]
    private ?int $matricule = null;

    #[ORM\ManyToOne(inversedBy: 'observations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?DossierMedical $dossierMedical = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): static
    {
        $this->observation = $observation;

        return $this;
    }

    public function getDateObservation(): ?\DateTimeImmutable
    {
        return $this->date_observation;
    }

    public function setDateObservation(\DateTimeImmutable $date_observation): static
    {
        $this->date_observation = $date_observation;

        return $this;
    }

    public function getMatricule(): ?int
    {
        return $this->matricule;
    }

    public function setMatricule(int $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getDossierMedical(): ?DossierMedical
    {
        return $this->dossierMedical;
    }

    public function setDossierMedical(?DossierMedical $dossierMedical): static
    {
        $this->dossierMedical = $dossierMedical;

        return $this;
    }
}
