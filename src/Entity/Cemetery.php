<?php

namespace App\Entity;

use App\Repository\CemeteryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CemeteryRepository::class)
 */
class Cemetery
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $googleMapURL;

    /**
     * @ORM\OneToMany(targetEntity=Deed::class, mappedBy="cemetery")
     */
    private $deed;

    /**
     * @ORM\OneToMany(targetEntity=Interment::class, mappedBy="cemetery")
     */
    private $interments;

    /**
     * @ORM\OneToMany(targetEntity=Section::class, mappedBy="cemetery")
     */
    private $sections;

    public function __construct()
    {
        $this->deed = new ArrayCollection();
        $this->interments = new ArrayCollection();
        $this->sections = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getGoogleMapURL(): ?string
    {
        return $this->googleMapURL;
    }

    public function setGoogleMapURL(?string $googleMapURL): self
    {
        $this->googleMapURL = $googleMapURL;

        return $this;
    }

    /**
     * @return Collection|Deed[]
     */
    public function getDeed(): Collection
    {
        return $this->deed;
    }

    public function addDeed(Deed $deed): self
    {
        if (!$this->deed->contains($deed)) {
            $this->deed[] = $deed;
            $deed->setCemetery($this);
        }

        return $this;
    }

    public function removeDeed(Deed $deed): self
    {
        if ($this->deed->removeElement($deed)) {
            // set the owning side to null (unless already changed)
            if ($deed->getCemetery() === $this) {
                $deed->setCemetery(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Interment[]
     */
    public function getInterments(): Collection
    {
        return $this->interments;
    }

    public function addInterment(Interment $interment): self
    {
        if (!$this->interments->contains($interment)) {
            $this->interments[] = $interment;
            $interment->setCemetery($this);
        }

        return $this;
    }

    public function removeInterment(Interment $interment): self
    {
        if ($this->interments->removeElement($interment)) {
            // set the owning side to null (unless already changed)
            if ($interment->getCemetery() === $this) {
                $interment->setCemetery(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Section[]
     */
    public function getSections(): Collection
    {
        return $this->sections;
    }

    public function addSection(Section $section): self
    {
        if (!$this->sections->contains($section)) {
            $this->sections[] = $section;
            $section->setCemetery($this);
        }

        return $this;
    }

    public function removeSection(Section $section): self
    {
        if ($this->sections->removeElement($section)) {
            // set the owning side to null (unless already changed)
            if ($section->getCemetery() === $this) {
                $section->setCemetery(null);
            }
        }

        return $this;
    }
}
