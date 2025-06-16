<?php

namespace App\Entity;

use App\Repository\TranslationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TranslationRepository::class)]
class Translation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $translation_name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $translation_description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Language $Language = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Project $project = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTranslationName(): ?string
    {
        return $this->translation_name;
    }

    public function setTranslationName(string $translation_name): static
    {
        $this->translation_name = $translation_name;

        return $this;
    }

    public function getTranslationDescription(): ?string
    {
        return $this->translation_description;
    }

    public function setTranslationDescription(?string $translation_description): static
    {
        $this->translation_description = $translation_description;

        return $this;
    }

    public function getLanguage(): ?Language
    {
        return $this->Language;
    }

    public function setLanguage(?Language $Language): static
    {
        $this->Language = $Language;

        return $this;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): static
    {
        $this->project = $project;

        return $this;
    }
}
