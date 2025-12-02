<?php

namespace App\Entity;

use App\Repository\DossierMedicalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


#[ORM\Entity(repositoryClass: DossierMedicalRepository::class)]
#[Vich\Uploadable]
class DossierMedical
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero_dossier = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_creation = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_medecin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToOne(inversedBy: 'dossierMedical', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $dossier_patient = null;

    /**
     * @var Collection<int, Consultation>
     */
    #[ORM\OneToMany(targetEntity: Consultation::class, mappedBy: 'dossierMedical')]
    private Collection $consultations;

    /**
     * @var Collection<int, Observation>
     */
    #[ORM\OneToMany(targetEntity: Observation::class, mappedBy: 'dossierMedical')]
    private Collection $observations;

    /**
     * @var Collection<int, Image>
     */
    #[ORM\OneToMany(targetEntity: Image::class, mappedBy: 'image_dossier', orphanRemoval: true, cascade: ['persist', 'remove'])]
    private Collection $images;
    
    #[Vich\UploadableField(mapping: 'dossier_medical_images', fileNameProperty: 'image')]
    private ?File $imageFile = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    public function __construct()
    {
        $this->consultations = new ArrayCollection();
        $this->observations = new ArrayCollection();
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroDossier(): ?int
    {
        return $this->numero_dossier;
    }

    public function setNumeroDossier(int $numero_dossier): static
    {
        $this->numero_dossier = $numero_dossier;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeImmutable
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeImmutable $date_creation): static
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getNomMedecin(): ?string
    {
        return $this->nom_medecin;
    }

    public function setNomMedecin(string $nom_medecin): static
    {
        $this->nom_medecin = $nom_medecin;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    /* @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null
    $dossier_imageFile
    */

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // If the image file is set, update the updatedAt property
            $this->updatedAt = new \DateTimeImmutable();
        }
    }
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getDossierPatient(): ?User
    {
        return $this->dossier_patient;
    }

    public function setDossierPatient(User $dossier_patient): static
    {
        $this->dossier_patient = $dossier_patient;

        return $this;
    }

    /**
     * @return Collection<int, Consultation>
     */
    public function getConsultations(): Collection
    {
        return $this->consultations;
    }

    public function addConsultation(Consultation $consultation): static
    {
        if (!$this->consultations->contains($consultation)) {
            $this->consultations->add($consultation);
            $consultation->setDossierMedical($this);
        }

        return $this;
    }

    public function removeConsultation(Consultation $consultation): static
    {
        if ($this->consultations->removeElement($consultation)) {
            // set the owning side to null (unless already changed)
            if ($consultation->getDossierMedical() === $this) {
                $consultation->setDossierMedical(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Observation>
     */
    public function getObservations(): Collection
    {
        return $this->observations;
    }

    public function addObservation(Observation $observation): static
    {
        if (!$this->observations->contains($observation)) {
            $this->observations->add($observation);
            $observation->setDossierMedical($this);
        }

        return $this;
    }

    public function removeObservation(Observation $observation): static
    {
        if ($this->observations->removeElement($observation)) {
            // set the owning side to null (unless already changed)
            if ($observation->getDossierMedical() === $this) {
                $observation->setDossierMedical(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): static
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
            $image->setImageDossier($this);
        }

        return $this;
    }

    public function removeImage(Image $image): static
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getImageDossier() === $this) {
                $image->setImageDossier(null);
            }
        }

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
