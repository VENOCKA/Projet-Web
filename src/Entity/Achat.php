<?php

namespace App\Entity;

use App\Repository\AchatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AchatRepository::class)
 */
class Achat
{
    /**
     * @ORM\Id()
     * Primary Key
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_achat;


    /**
     * @ORM\Column(type="string", length=25)
     */
    private $nom_jeux;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_achat;

    /**
     * @ORM\Column(type="integer", length=25)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $code;


    public function getIdVente(): ?int
    {
        return $this->id_achat;
    }

    public function getNom(): ?string
    {
        return $this->nom_jeux;
    }

    public function getDate(): ?datetime
    {
        return $this->date_achat;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }




    public function set_nom(string $nom): self
    {
        $this->nom_jeux = $nom;

        return $this;
    }

    public function set_mail(datetime $date): self
    {
        $this->date_achat = $date;

        return $this;
    }

    public function set_daten(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function set_pseudo(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
