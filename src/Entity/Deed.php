<?php

namespace App\Entity;

use App\Repository\DeedRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeedRepository::class)
 */
class Deed
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $lot;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastname1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname1;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $middleInitial1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastname2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname2;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $middleInitial2;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $issueDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $notes;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $lot2;

    /**
     * @ORM\ManyToOne(targetEntity=Cemetery::class, inversedBy="deed")
     */
    private $cemetery;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLot(): ?string
    {
        return $this->lot;
    }

    public function setLot(?string $lot): self
    {
        $this->lot = $lot;

        return $this;
    }

    public function getLastname1(): ?string
    {
        return $this->lastname1;
    }

    public function setLastname1(?string $lastname1): self
    {
        $this->lastname1 = $lastname1;

        return $this;
    }

    public function getFirstname1(): ?string
    {
        return $this->firstname1;
    }

    public function setFirstname1(string $firstname1): self
    {
        $this->firstname1 = $firstname1;

        return $this;
    }

    public function getMiddleInitial1(): ?string
    {
        return $this->middleInitial1;
    }

    public function setMiddleInitial1(?string $middleInitial1): self
    {
        $this->middleInitial1 = $middleInitial1;

        return $this;
    }

    public function getLastname2(): ?string
    {
        return $this->lastname2;
    }

    public function setLastname2(?string $lastname2): self
    {
        $this->lastname2 = $lastname2;

        return $this;
    }

    public function getFirstname2(): ?string
    {
        return $this->firstname2;
    }

    public function setFirstname2(?string $firstname2): self
    {
        $this->firstname2 = $firstname2;

        return $this;
    }

    public function getMiddleInitial2(): ?string
    {
        return $this->middleInitial2;
    }

    public function setMiddleInitial2(?string $middleInitial2): self
    {
        $this->middleInitial2 = $middleInitial2;

        return $this;
    }

    public function getIssueDate(): ?\DateTimeInterface
    {
        return $this->issueDate;
    }

    public function setIssueDate(?\DateTimeInterface $issueDate): self
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getLot2(): ?string
    {
        return $this->lot2;
    }

    public function setLot2(?string $lot2): self
    {
        $this->lot2 = $lot2;

        return $this;
    }

    public function getCemetery(): ?Cemetery
    {
        return $this->cemetery;
    }

    public function setCemetery(?Cemetery $cemetery): self
    {
        $this->cemetery = $cemetery;

        return $this;
    }
}
