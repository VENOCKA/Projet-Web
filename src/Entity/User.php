<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
     /**
     * @ORM\Id()
     * Primary Key
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_user;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $nom_user;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $mdp;

    /**
     * @ORM\Column(type="datetime")
     */
    private $daten;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="integer")
     */
    private $solde;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomUser(): ?string
    {
        return $this->nom_user;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function getDaten(): ?datetime
    {
        return $this->daten;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }



    public function set_nom_user(string $nom): self
    {
        $this->nom_user = $nom;

        return $this;
    }

    public function set_prenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function set_mail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function set_daten(datetime $daten): self
    {
        $this->daten = $daten;

        return $this;
    }

    public function set_mdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function set_pseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function set_solde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }
}
