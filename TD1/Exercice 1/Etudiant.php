<?php


class Etudiant extends Personne
{
    private int $identifiant;

    public function __construct(int $age,string $nom,string $prenom,int $id)
    {
        Personne::__construct($nom,$prenom,$age);
        $this->identifiant=$id;
    }

    /**
     * @param int $identifiant
     */
    public function setIdentifiant(int $identifiant): void
    {
        $this->identifiant = $identifiant;
    }

    /**
     * @return int
     */
    public function getIdentifiant(): int
    {
        return $this->identifiant;
    }

    public function getAge(): int
    {
        return parent::getAge(); // TODO: Change the autogenerated stub
    }

    public function setAge(int $Age): void
    {
        parent::setAge($Age); // TODO: Change the autogenerated stub
    }

    public function __toString() : string
    {
        return "Bienvenue {$this->getNom()} {$this->getPrenom()} !";
    }

    public function getNom(): string
    {
        return parent::getNom(); // TODO: Change the autogenerated stub
    }

    public function setNom(string $nom): void
    {
        parent::setNom($nom); // TODO: Change the autogenerated stub
    }

    public function getPrenom(): string
    {
        return parent::getPrenom(); // TODO: Change the autogenerated stub
    }

    public function setPrenom(string $Prenom): void
    {
        parent::setPrenom($Prenom); // TODO: Change the autogenerated stub
    }
}