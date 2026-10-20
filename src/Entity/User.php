<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $date_naissance = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $adresse = null;

    #[ORM\Column(nullable: true)]
    private ?int $telephone = null;

    #[ORM\Column(nullable: true)]
    private ?int $matricule = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $post = null;

    #[ORM\Column(nullable: true)]
    private ?string $numero_secu = null;

    #[ORM\Column(nullable: true)]
    private ?int $telephone_confiance = null;

    /**
     * @var Collection<int, Specialite>
     */
    #[ORM\ManyToMany(targetEntity: Specialite::class, mappedBy: 'medecins')]
    private Collection $specialites;

    /**
     * @var Collection<int, RDV>
     */
    #[ORM\OneToMany(targetEntity: RDV::class, mappedBy: 'rdv_patient', orphanRemoval: true)]
    private Collection $patient_rdvs;

    /**
     * @var Collection<int, RDV>
     */
    #[ORM\OneToMany(targetEntity: RDV::class, mappedBy: 'rdv_medecin')]
    private Collection $medecin_rdvs;

    /**
     * @var Collection<int, self>
     */
    #[ORM\ManyToMany(targetEntity: self::class, inversedBy: 'mes_patients')]
    private Collection $mes_medecins;

    /**
     * @var Collection<int, self>
     */
    #[ORM\ManyToMany(targetEntity: self::class, mappedBy: 'mes_medecins')]
    private Collection $mes_patients;

    #[ORM\OneToOne(mappedBy: 'dossier_patient', cascade: ['persist', 'remove'])]
    private ?DossierMedical $dossierMedical = null;

    public function __construct()
    {
        $this->specialites = new ArrayCollection();
        $this->patient_rdvs = new ArrayCollection();
        $this->medecin_rdvs = new ArrayCollection();
        $this->mes_medecins = new ArrayCollection();
        $this->mes_patients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): static
    {
        $this->genre = $genre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeImmutable
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeImmutable $date_naissance): static
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMatricule(): ?int
    {
        return $this->matricule;
    }

    public function setMatricule(?int $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getPost(): ?string
    {
        return $this->post;
    }

    public function setPost(?string $post): static
    {
        $this->post = $post;

        return $this;
    }

    public function getNumeroSecu(): ?string
    {
        return $this->numero_secu;
    }

    public function setNumeroSecu(?string $numero_secu): static
    {
        $this->numero_secu = $numero_secu;

        return $this;
    }

    public function getTelephoneConfiance(): ?int
    {
        return $this->telephone_confiance;
    }

    public function setTelephoneConfiance(?int $telephone_confiance): static
    {
        $this->telephone_confiance = $telephone_confiance;

        return $this;
    }

    /**
     * @return Collection<int, Specialite>
     */
    public function getSpecialites(): Collection
    {
        return $this->specialites;
    }

    public function addSpecialite(Specialite $specialite): static
    {
        if (!$this->specialites->contains($specialite)) {
            $this->specialites->add($specialite);
            $specialite->addMedecin($this);
        }

        return $this;
    }

    public function removeSpecialite(Specialite $specialite): static
    {
        if ($this->specialites->removeElement($specialite)) {
            $specialite->removeMedecin($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, RDV>
     */
    public function getPatientRdvs(): Collection
    {
        return $this->patient_rdvs;
    }

    public function addPatientRdv(RDV $patientRdv): static
    {
        if (!$this->patient_rdvs->contains($patientRdv)) {
            $this->patient_rdvs->add($patientRdv);
            $patientRdv->setRdvPatient($this);
        }

        return $this;
    }

    public function removePatientRdv(RDV $patientRdv): static
    {
        if ($this->patient_rdvs->removeElement($patientRdv)) {
            // set the owning side to null (unless already changed)
            if ($patientRdv->getRdvPatient() === $this) {
                $patientRdv->setRdvPatient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, RDV>
     */
    public function getMedecinRdvs(): Collection
    {
        return $this->medecin_rdvs;
    }

    public function addMedecinRdv(RDV $medecinRdv): static
    {
        if (!$this->medecin_rdvs->contains($medecinRdv)) {
            $this->medecin_rdvs->add($medecinRdv);
            $medecinRdv->setRdvMedecin($this);
        }

        return $this;
    }

    public function removeMedecinRdv(RDV $medecinRdv): static
    {
        if ($this->medecin_rdvs->removeElement($medecinRdv)) {
            // set the owning side to null (unless already changed)
            if ($medecinRdv->getRdvMedecin() === $this) {
                $medecinRdv->setRdvMedecin(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getMesMedecins(): Collection
    {
        return $this->mes_medecins;
    }

    public function addMesMedecin(self $mesMedecin): static
    {
        if (!$this->mes_medecins->contains($mesMedecin)) {
            $this->mes_medecins->add($mesMedecin);
        }

        return $this;
    }

    public function removeMesMedecin(self $mesMedecin): static
    {
        $this->mes_medecins->removeElement($mesMedecin);

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getMesPatients(): Collection
    {
        return $this->mes_patients;
    }

    public function addMesPatient(self $mesPatient): static
    {
        if (!$this->mes_patients->contains($mesPatient)) {
            $this->mes_patients->add($mesPatient);
            $mesPatient->addMesMedecin($this);
        }

        return $this;
    }

    public function removeMesPatient(self $mesPatient): static
    {
        if ($this->mes_patients->removeElement($mesPatient)) {
            $mesPatient->removeMesMedecin($this);
        }

        return $this;
    }

    public function getDossierMedical(): ?DossierMedical
    {
        return $this->dossierMedical;
    }

    public function setDossierMedical(DossierMedical $dossierMedical): static
    {
        // set the owning side of the relation if necessary
        if ($dossierMedical->getDossierPatient() !== $this) {
            $dossierMedical->setDossierPatient($this);
        }

        $this->dossierMedical = $dossierMedical;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->roles[0] ?? null;
    }

    public function setRole(string $role): self
    {
        $this->roles = [$role];
        return $this;
    }
}
