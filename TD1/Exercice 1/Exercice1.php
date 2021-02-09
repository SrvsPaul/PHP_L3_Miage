<?php
class Personne
{
    private string $nom;
    private string $prenom;
    private int $age;

    public function __construct(string $name,string $lastname,int $years)
    {
        $this->nom =$name;
        $this->prenom=$lastname;
        $this->age=$years;
    }

    public function getNom() : string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void{
         $this.nom;
    }

    public function getPrenom():string{
        return $this->prenom;
    }

    public function getAge():int{
        return $this->age;
    }



    public function setPrenom(string $Prenom): void{
         $this->prenom;
    }

    public function setAge(int $Age) : void{
         $this.age;
    }


};