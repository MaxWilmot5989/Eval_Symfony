<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 120)]
    private ?string $title = null;

    #[ORM\Column(length: 120)]
    private ?string $realisateur = null;

    #[ORM\Column(length: 120)]
    private ?string $actors = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $poster = null;

    

    #[ORM\Column(length: 120)]
    private ?string $genre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getRealisateur(): ?string
    {
        return $this->realisateur;
    }
    public function setRealisateur(string $realisateur): self
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    public function getActors(): ?string
    {
        return $this->actors;
    }
    public function setActors(string $actors): self
    {
        $this->actors = $actors;

        return $this;
    }

    public function getDate(): ?int
    {
        return $this->date;
    }
    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }
    public function setPoster(string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }
    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }
}
