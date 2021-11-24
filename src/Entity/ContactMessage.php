<?php

namespace App\Entity;

use App\Repository\ContactMessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactMessageRepository::class)
 */
class ContactMessage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Announces::class, inversedBy="contactMessages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $announces;

    /**
     * @ORM\Column(type="integer")
     */
    private $users;

    /**
     * @ORM\Column(type="text")
     */
    private $message;

    /**
     * @ORM\Column(type="datetime")
     */
    private $contactAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $animalType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnnounces(): ?Announces
    {
        return $this->announces;
    }

    public function setAnnounces(?Announces $announces): self
    {
        $this->announces = $announces;

        return $this;
    }

    public function getUsers(): ?int
    {
        return $this->users;
    }

    public function setUsers(int $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getContactAt(): ?\DateTimeInterface
    {
        return $this->contactAt;
    }

    public function setContactAt(\DateTimeInterface $contactAt): self
    {
        $this->contactAt = $contactAt;

        return $this;
    }

    public function getAnimalType(): ?string
    {
        return $this->animalType;
    }

    public function setAnimalType(string $animalType): self
    {
        $this->animalType = $animalType;

        return $this;
    }
}
