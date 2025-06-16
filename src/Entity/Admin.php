<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdminRepository::class)]
#[ORM\Table(name: '`admin`')]
class Admin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $admin_pseudo = null;

    #[ORM\Column(length: 255)]
    private ?string $admin_password = null;

    #[ORM\Column(length: 100)]
    private ?string $admin_mail = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdminPseudo(): ?string
    {
        return $this->admin_pseudo;
    }

    public function setAdminPseudo(string $admin_pseudo): static
    {
        $this->admin_pseudo = $admin_pseudo;

        return $this;
    }

    public function getAdminPassword(): ?string
    {
        return $this->admin_password;
    }

    public function setAdminPassword(string $admin_password): static
    {
        $this->admin_password = $admin_password;

        return $this;
    }

    public function getAdminMail(): ?string
    {
        return $this->admin_mail;
    }

    public function setAdminMail(string $admin_mail): static
    {
        $this->admin_mail = $admin_mail;

        return $this;
    }
}
