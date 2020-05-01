<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClubRepository")
 */
class Club
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $fullName;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Championnat", inversedBy="clubs")
     */
    private $championnat;

    public function __construct()
    {
        $this->championnat = new ArrayCollection();
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

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @return Collection|Championnat[]
     */
    public function getChampionnat(): Collection
    {
        return $this->championnat;
    }

    public function addChampionnat(Championnat $championnat): self
    {
        if (!$this->championnat->contains($championnat)) {
            $this->championnat[] = $championnat;
        }

        return $this;
    }

    public function removeChampionnat(Championnat $championnat): self
    {
        if ($this->championnat->contains($championnat)) {
            $this->championnat->removeElement($championnat);
        }

        return $this;
    }
}
