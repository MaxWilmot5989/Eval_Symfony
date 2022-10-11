<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGName(): ?string
    {
        return $this->gname;
    }
    public function setGName(string $gname): self
    {
        $this->gname = $gname;

        return $this;
    }

    public function getIcone(): ?string
    {
        return $this->icone;
    }
    public function setIcone(string $icone): self
    {
        $this->icone = $icone;

        return $this;
    }
}