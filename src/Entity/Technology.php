<?php

namespace App\Entity;

use App\Repository\TechnologyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TechnologyRepository::class)]
#[ORM\InheritanceType('JOINED')]
#[ORM\DiscriminatorColumn(name: 'type', type: 'string')]
#[ORM\DiscriminatorMap([
    'front' => TechnoFront::class,
    'back' => TechnoBack::class,
    'db' => TechnoDatabase::class,
])]

abstract class Technology
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $tech_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tech_logo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTechName(): ?string
    {
        return $this->tech_name;
    }

    public function setTechName(string $tech_name): static
    {
        $this->tech_name = $tech_name;

        return $this;
    }

    public function getTechLogo(): ?string
    {
        return $this->tech_logo;
    }

    public function setTechLogo(?string $tech_logo): static
    {
        $this->tech_logo = $tech_logo;

        return $this;
    }
}
