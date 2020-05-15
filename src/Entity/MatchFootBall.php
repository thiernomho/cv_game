<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchFootBallRepository")
 */
class MatchFootBall
{
    public function __construct(){
        $this->butClubDomicile = 0;
        $this->butClubExterne =0;
        
    }
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $butClubDomicile;

    /**
     * @ORM\Column(type="integer")
     */
    private $butClubExterne;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateMatch;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Championnat", inversedBy="matches")
     */
    private $championat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Club", inversedBy="matchDomicile")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipeDomicile;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Club", inversedBy="clubExtern")
     */
    private $equipeExterne;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cote")
     */
    private $coteNull;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cote")
     */
    private $coteExterne;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cote")
     */
    private $coteDomicile;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getButClubDomicile(): ?int
    {
        return $this->butClubDomicile;
    }

    public function setButClubDomicile(int $butClubDomicile): self
    {
        $this->butClubDomicile = $butClubDomicile;

        return $this;
    }

    public function getButClubExterne(): ?int
    {
        return $this->butClubExterne;
    }

    public function setButClubExterne(int $butClubExterne): self
    {
        $this->butClubExterne = $butClubExterne;

        return $this;
    }

    public function getDateMatch(): ?\DateTimeInterface
    {
        return $this->dateMatch;
    }

    public function setDateMatch(\DateTimeInterface $dateMatch): self
    {
        $this->dateMatch = $dateMatch;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getChampionat(): ?Championnat
    {
        return $this->championat;
    }

    public function setChampionat(?Championnat $championat): self
    {
        $this->championat = $championat;

        return $this;
    }

    public function getEquipeDomicile(): ?Club
    {
        return $this->equipeDomicile;
    }

    public function setEquipeDomicile(?Club $equipeDomicile): self
    {
        $this->equipeDomicile = $equipeDomicile;

        return $this;
    }

    public function getEquipeExterne(): ?Club
    {
        return $this->equipeExterne;
    }

    public function setEquipeExterne(?Club $equipeExterne): self
    {
        $this->equipeExterne = $equipeExterne;

        return $this;
    }

    public function getCoteNull(): ?Cote
    {
        return $this->coteNull;
    }

    public function setCoteNull(?Cote $coteNull): self
    {
        $this->coteNull = $coteNull;

        return $this;
    }

    public function getCoteExterne(): ?Cote
    {
        return $this->coteExterne;
    }

    public function setCoteExterne(?Cote $coteExterne): self
    {
        $this->coteExterne = $coteExterne;

        return $this;
    }

    public function getCoteDomicile(): ?Cote
    {
        return $this->coteDomicile;
    }

    public function setCoteDomicile(?Cote $coteDomicile): self
    {
        $this->coteDomicile = $coteDomicile;

        return $this;
    }

}
