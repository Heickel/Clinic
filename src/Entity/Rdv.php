<?php

namespace App\Entity;

use App\Repository\RdvRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RdvRepository::class)
 */
class Rdv
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
    private $Time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Patient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Docteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTime(): ?string
    {
        return $this->Time;
    }

    public function setTime(string $Time): self
    {
        $this->Time = $Time;

        return $this;
    }

    public function getPatient(): ?string
    {
        return $this->Patient;
    }

    public function setPatient(string $Patient): self
    {
        $this->Patient = $Patient;

        return $this;
    }

    public function getDocteur(): ?string
    {
        return $this->Docteur;
    }

    public function setDocteur(string $Docteur): self
    {
        $this->Docteur = $Docteur;

        return $this;
    }
}
