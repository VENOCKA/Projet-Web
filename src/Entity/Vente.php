<?php

namespace App\Entity;

use App\Repository\VenteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VenteRepository::class)
 */
class Vente
{
    /**
     * @ORM\Id()
     * Primary Key
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_vente;


    /**
     * @ORM\Column(type="string", length=25)
     */
    private $nom_jeux;

    /**
     * @ORM\Column(type="integer", length=8)
     */
    private $prix;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_vente;

    /**
     * @ORM\Column(type="integer", length=25)
     */
    private $quantite;

    /**
     * @ORM\Column(type="integer", length=8)
     */
    private $id_user;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $code;


    public function getIdVente(): ?int
    {
        return $this->id_vente;
    }

    public function getNom(): ?string
    {
        return $this->nom_jeux;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function getDate(): ?datetime
    {
        return $this->date_vente;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
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

    public function set_prenom(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function set_mail(datetime $date): self
    {
        $this->date_vente = $date;

        return $this;
    }

    public function set_daten(int $qte): self
    {
        $this->quantite = $qte;

        return $this;
    }

    public function set_mdp(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function set_pseudo(string $code): self
    {
        $this->code = $code;

        return $this;
    }

}
