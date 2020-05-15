<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoteRepository")
 */
class Cote
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $coteValue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoteValue(): ?float
    {
        return $this->coteValue;
    }

    public function setCoteValue(float $coteValue): self
    {
        $this->coteValue = $coteValue;

        return $this;
    }
}
