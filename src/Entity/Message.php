<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $message_name = null;

    #[ORM\Column(length: 50)]
    private ?string $message_firstname = null;

    #[ORM\Column(length: 100)]
    private ?string $message_mail = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $message_text = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $message_date = null;

    #[ORM\Column]
    private ?bool $isRead = null;

    #[ORM\ManyToOne]
    private ?Admin $admin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessageName(): ?string
    {
        return $this->message_name;
    }

    public function setMessageName(string $message_name): static
    {
        $this->message_name = $message_name;

        return $this;
    }

    public function getMessageFirstname(): ?string
    {
        return $this->message_firstname;
    }

    public function setMessageFirstname(string $message_firstname): static
    {
        $this->message_firstname = $message_firstname;

        return $this;
    }

    public function getMessageMail(): ?string
    {
        return $this->message_mail;
    }

    public function setMessageMail(string $message_mail): static
    {
        $this->message_mail = $message_mail;

        return $this;
    }

    public function getMessageText(): ?string
    {
        return $this->message_text;
    }

    public function setMessageText(string $message_text): static
    {
        $this->message_text = $message_text;

        return $this;
    }

    public function getMessageDate(): ?\DateTimeImmutable
    {
        return $this->message_date;
    }

    public function setMessageDate(?\DateTimeImmutable $message_date): static
    {
        $this->message_date = $message_date;

        return $this;
    }

    public function isRead(): ?bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): static
    {
        $this->isRead = $isRead;

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
}
