<?php

namespace App\Entity;

use App\Repository\JeuxRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JeuxRepository::class)
 */
class Jeux
{
    /**
     * @ORM\Id()
     * Primary Key
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_jeux;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom_jeux;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $editeur;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $image;

    /**
     * @ORM\Column(type="integer")
     */
    private $notem;


    public function getId(): ?int
    {
        return $this->id_jeux;
    }

    public function getNom(): ?string
    {
        return $this->nom_jeux;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function getNoteM(): ?int
    {
        return $this->notem;
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

    public function set_notem(int $notem): self
    {
        $this->notem = $notem;

        return $this;
    }    

}
