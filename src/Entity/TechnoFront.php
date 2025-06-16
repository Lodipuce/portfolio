<?php

namespace App\Entity;

use App\Repository\TechnoFrontRepository;
use App\Entity\Technology;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TechnoFrontRepository::class)]
#[ORM\Table(name: 'front')]
class TechnoFront extends Technology
{
    /**
     * @var Collection<int, Project>
     */
    #[ORM\ManyToMany(targetEntity: Project::class, inversedBy: 'technoFront')]
    private Collection $project;

    public function __construct()
    {
        $this->project = new ArrayCollection();
    }

    /**
     * @return Collection<int, Project>
     */
    public function getProject(): Collection
    {
        return $this->project;
    }

    public function addProject(Project $project): static
    {
        if (!$this->project->contains($project)) {
            $this->project->add($project);
        }

        return $this;
    }

    public function removeProject(Project $project): static
    {
        $this->project->removeElement($project);

        return $this;
    }
}
