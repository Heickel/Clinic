<?php

namespace App\Entity;

use App\Repository\RapportRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RapportRepository::class)
 */
class Rapport
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
    private $Patient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Docteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Diagnostic;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Hosp;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDiagnostic(): ?string
    {
        return $this->Diagnostic;
    }

    public function setDiagnostic(string $Diagnostic): self
    {
        $this->Diagnostic = $Diagnostic;

        return $this;
    }

    public function getHosp(): ?bool
    {
        return $this->Hosp;
    }

    public function setHosp(bool $Hosp): self
    {
        $this->Hosp = $Hosp;

        return $this;
    }
}
