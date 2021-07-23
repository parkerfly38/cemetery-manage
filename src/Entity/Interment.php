<?php

namespace App\Entity;

use App\Repository\IntermentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IntermentRepository::class)
 */
class Interment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Cemetery::class, inversedBy="interments")
     */
    private $cemetery;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $lot;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $book;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $pageNumber;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $deceasedDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $middleInitial;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $birthPlace;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastResidence;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $sex;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $notes;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $lot2;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLot(): ?string
    {
        return $this->lot;
    }

    public function setLot(?string $lot): self
    {
        $this->lot = $lot;

        return $this;
    }

    public function getBook(): ?string
    {
        return $this->book;
    }

    public function setBook(?string $book): self
    {
        $this->book = $book;

        return $this;
    }

    public function getPageNumber(): ?string
    {
        return $this->pageNumber;
    }

    public function setPageNumber(?string $pageNumber): self
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }

    public function getDeceasedDate(): ?\DateTimeInterface
    {
        return $this->deceasedDate;
    }

    public function setDeceasedDate(?\DateTimeInterface $deceasedDate): self
    {
        $this->deceasedDate = $deceasedDate;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getMiddleInitial(): ?string
    {
        return $this->middleInitial;
    }

    public function setMiddleInitial(?string $middleInitial): self
    {
        $this->middleInitial = $middleInitial;

        return $this;
    }

    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(?string $birthPlace): self
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    public function getLastResidence(): ?string
    {
        return $this->lastResidence;
    }

    public function setLastResidence(?string $lastResidence): self
    {
        $this->lastResidence = $lastResidence;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex): self
    {
        $this->sex = $sex;

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
}
