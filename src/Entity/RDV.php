<?php

namespace App\Entity;

use App\Repository\RDVRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RDVRepository::class)]
class RDV
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\Column(length: 255)]
    // private ?string $nom_patient = null;

    // #[ORM\Column(length: 255)]
    // private ?string $nom_medecin = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_rdv = null;

    #[ORM\ManyToOne(inversedBy: 'patient_rdvs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $rdv_patient = null;

    #[ORM\ManyToOne(inversedBy: 'medecin_rdvs')]
    private ?User $rdv_medecin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getNomPatient(): ?string
    // {
    //     return $this->nom_patient;
    // }

    // public function setNomPatient(string $nom_patient): static
    // {
    //     $this->nom_patient = $nom_patient;

    //     return $this;
    // }

    // public function getNomMedecin(): ?string
    // {
    //     return $this->nom_medecin;
    // }

    // public function setNomMedecin(string $nom_medecin): static
    // {
    //     $this->nom_medecin = $nom_medecin;

    //     return $this;
    // }

    public function getDateRdv(): ?\DateTimeImmutable
    {
        return $this->date_rdv;
    }

    public function setDateRdv(\DateTimeImmutable $date_rdv): static
    {
        $this->date_rdv = $date_rdv;

        return $this;
    }

    public function getRdvPatient(): ?User
    {
        return $this->rdv_patient;
    }

    public function setRdvPatient(?User $rdv_patient): static
    {
        $this->rdv_patient = $rdv_patient;

        return $this;
    }

    public function getRdvMedecin(): ?User
    {
        return $this->rdv_medecin;
    }

    public function setRdvMedecin(?User $rdv_medecin): static
    {
        $this->rdv_medecin = $rdv_medecin;

        return $this;
    }
}
