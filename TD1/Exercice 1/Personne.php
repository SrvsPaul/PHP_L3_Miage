<?php
class Personne
{
    private string $nom;
    private string $prenom;
    private string $age;

    /**
     * Personne constructor.
     * @param string $name
     * @param string $lastname
     * @param string $years
     */
    public function __construct(string $name, string $lastname, string $years)
    {
        $this->nom =$name;
        $this->prenom=$lastname;
        $this->age=$years;
    }



    public function setNom(string $nom): void{
        $this->nom=$nom;
    }
    public function getNom() : string
    {
        return $this->nom;
    }



    public function getPrenom():string{
        return $this->prenom;
    }

    public function getAge():string{
        return $this->age;
    }



    public function setPrenom(string $Prenom): void{
         $this->prenom=$Prenom;
    }

    public function setAge(string $Age) : void{
         $this->age=$Age;
    }


};