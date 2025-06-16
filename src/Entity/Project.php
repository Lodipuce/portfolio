<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $project_name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $project_description = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $hosting = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $p_site = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $p_github = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $view1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $view2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $view3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $view4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $view5 = null;

    #[ORM\ManyToOne(targetEntity: Admin::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Admin $admin = null;

    /**
     * @var Collection<int, TechnoFront>
     */
    #[ORM\ManyToMany(targetEntity: TechnoFront::class, mappedBy: 'project')]
    private Collection $technoFront;

    /**
     * @var Collection<int, TechnoBack>
     */
    #[ORM\ManyToMany(targetEntity: TechnoBack::class, mappedBy: 'project')]
    private Collection $technoBack;

    /**
     * @var Collection<int, TechnoDatabase>
     */
    #[ORM\ManyToMany(targetEntity: TechnoDatabase::class, mappedBy: 'project')]
    private Collection $technoDatabase;

    public function __construct()
    {
        $this->technoFront = new ArrayCollection();
        $this->technoBack = new ArrayCollection();
        $this->technoDatabase = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjectName(): ?string
    {
        return $this->project_name;
    }

    public function setProjectName(string $project_name): static
    {
        $this->project_name = $project_name;

        return $this;
    }

    public function getProjectDescription(): ?string
    {
        return $this->project_description;
    }

    public function setProjectDescription(?string $project_description): static
    {
        $this->project_description = $project_description;

        return $this;
    }

    public function getHosting(): ?string
    {
        return $this->hosting;
    }

    public function setHosting(?string $hosting): static
    {
        $this->hosting = $hosting;

        return $this;
    }

    public function getPSite(): ?string
    {
        return $this->p_site;
    }

    public function setPSite(?string $p_site): static
    {
        $this->p_site = $p_site;

        return $this;
    }

    public function getPGithub(): ?string
    {
        return $this->p_github;
    }

    public function setPGithub(?string $p_github): static
    {
        $this->p_github = $p_github;

        return $this;
    }

    public function getView1(): ?string
    {
        return $this->view1;
    }

    public function setView1(?string $view1): static
    {
        $this->view1 = $view1;

        return $this;
    }

    public function getView2(): ?string
    {
        return $this->view2;
    }

    public function setView2(?string $view2): static
    {
        $this->view2 = $view2;

        return $this;
    }

    public function getView3(): ?string
    {
        return $this->view3;
    }

    public function setView3(?string $view3): static
    {
        $this->view3 = $view3;

        return $this;
    }

    public function getView4(): ?string
    {
        return $this->view4;
    }

    public function setView4(?string $view4): static
    {
        $this->view4 = $view4;

        return $this;
    }

    public function getView5(): ?string
    {
        return $this->view5;
    }

    public function setView5(?string $view5): static
    {
        $this->view5 = $view5;

        return $this;
    }

    public function getAdmin(): ?Admin
    {
        return $this->admin;
    }

    public function setAdmin(?Admin $admin): static
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * @return Collection<int, TechnoFront>
     */
    public function getTechnoFront(): Collection
    {
        return $this->technoFront;
    }

    public function addTechnoFront(TechnoFront $technoFront): static
    {
        if (!$this->technoFront->contains($technoFront)) {
            $this->technoFront->add($technoFront);
            $technoFront->addProject($this);
        }

        return $this;
    }

    public function removeTechnoFront(TechnoFront $technoFront): static
    {
        if ($this->technoFront->removeElement($technoFront)) {
            $technoFront->removeProject($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, TechnoBack>
     */
    public function gettechnoBack(): Collection
    {
        return $this->technoBack;
    }

    public function addTechnoBack(TechnoBack $technoBack): static
    {
        if (!$this->technoBack->contains($technoBack)) {
            $this->technoBack->add($technoBack);
            $technoBack->addProject($this);
        }

        return $this;
    }

    public function removeTechnoBack(TechnoBack $technoBack): static
    {
        if ($this->technoBack->removeElement($technoBack)) {
            $technoBack->removeProject($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, TechnoDatabase>
     */
    public function gettechnoDatabase(): Collection
    {
        return $this->technoDatabase;
    }

    public function addTechnoDatabase(TechnoDatabase $technoDatabase): static
    {
        if (!$this->technoDatabase->contains($technoDatabase)) {
            $this->technoDatabase->add($technoDatabase);
            $technoDatabase->addProject($this);
        }

        return $this;
    }

    public function removeTechnoDatabase(TechnoDatabase $technoDatabase): static
    {
        if ($this->technoDatabase->removeElement($technoDatabase)) {
            $technoDatabase->removeProject($this);
        }

        return $this;
    }
}
