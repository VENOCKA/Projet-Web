<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvisRepository::class)
 */
class Avis
{
    /**
     * @ORM\Id()
     * Primary Key
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_avis;

    /**
     * @ORM\Column(type="integer", length=8)
     */
    private $id_user;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer", length=8)
     */
    private $note;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_avis;


    public function getIdAvis(): ?int
    {
        return $this->id_avis;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function getDescription(): ?text
    {
        return $this->description;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function getDateAvis(): ?datetime
    {
        return $this->date_avis;
    }





    public function set_nom(string $nom): self
    {
        $this->nom_jeux = $nom;

        return $this;
    }

    public function set_description(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function set_editeur(string $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function set_categorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function set_image(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function set_code(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function set_notem(int $notem): self
    {
        $this->notem = $notem;

        return $this;
    }
}
