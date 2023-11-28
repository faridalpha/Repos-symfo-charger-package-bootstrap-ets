<?php

namespace App\Entity;

use App\Repository\ResultatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResultatRepository::class)]
class Resultat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type_resultat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeResultat(): ?string
    {
        return $this->type_resultat;
    }

    public function setTypeResultat(string $type_resultat): static
    {
        $this->type_resultat = $type_resultat;

        return $this;
    }
}
