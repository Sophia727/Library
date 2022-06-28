<?php
class Personne {
    //nom prenom ect cest des variables
    public string $nom;
    public string $prenom;
    public int $age;
    public string $sexe;

    public function __construct()
    {
        //nom prenom ect des valeurs
        $this->nom = "Toto";
        $this->prenom = "tata";
        $this->age = 12;
        $this->sexe = "TBD";
    } 
}
$human = new Personne();
?>

