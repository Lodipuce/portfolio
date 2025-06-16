<?php

namespace App\Entity;

use App\Repository\LanguageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LanguageRepository::class)]
class Language
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $language_name = null;

    #[ORM\Column(length: 2)]
    private ?string $language_code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $language_flag = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLanguageName(): ?string
    {
        return $this->language_name;
    }

    public function setLanguageName(string $language_name): static
    {
        $this->language_name = $language_name;

        return $this;
    }

    public function getLanguageCode(): ?string
    {
        return $this->language_code;
    }

    public function setLanguageCode(string $language_code): static
    {
        $this->language_code = $language_code;

        return $this;
    }

    public function getLanguageFlag(): ?string
    {
        return $this->language_flag;
    }

    public function setLanguageFlag(?string $language_flag): static
    {
        $this->language_flag = $language_flag;

        return $this;
    }
}
