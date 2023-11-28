<?php

namespace App\Entity;

use App\Repository\GavRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GavRepository::class)]
class Gav
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $naissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cin = null;

    #[ORM\Column(length: 255)]
    private ?string $domicile = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(length: 255)]
    private ?string $obfouille = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $arrive = null;

    #[ORM\Column(length: 255)]
    private ?string $infraction = null;

    #[ORM\Column(nullable: true)]
    private ?int $npv = null;

    

    public function getId(): ?int
    {
        return $this->id;
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

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNaissance(): ?\DateTimeInterface
    {
        return $this->naissance;
    }

    public function setNaissance(\DateTimeInterface $naissance): static
    {
        $this->naissance = $naissance;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(?string $cin): static
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDomicile(): ?string
    {
        return $this->domicile;
    }

    public function setDomicile(string $domicile): static
    {
        $this->domicile = $domicile;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getObfouille(): ?string
    {
        return $this->obfouille;
    }

    public function setObfouille(string $obfouille): static
    {
        $this->obfouille = $obfouille;

        return $this;
    }

    public function getArrive(): ?\DateTimeInterface
    {
        return $this->arrive;
    }

    public function setArrive(\DateTimeInterface $arrive): static
    {
        $this->arrive = $arrive;

        return $this;
    }

    public function getInfraction(): ?string
    {
        return $this->infraction;
    }

    public function setInfraction(string $infraction): static
    {
        $this->infraction = $infraction;

        return $this;
    }

    public function getNpv(): ?int
    {
        return $this->npv;
    }

    public function setNpv(?int $npv): static
    {
        $this->npv = $npv;

        return $this;
    }

    
}
