<?php
class PersonneDyn {
    //_nom _prenom ect cest des variables
    public $nom;
    public $prenom;
    public $age;
    public $sexe;

    public function __construct(string $unnom, string $unprenom, int $unage, string $unsexe)
    {
        //$nom $prenom ect c'est des valeurs
        $this->nom = $unnom;
        $this->prenom = $unprenom;
        $this->age = $unage;
        $this->sexe = $unsexe;
    } 
    public function presentation(){
        echo "je m'appelle ".$this->nom." ".$this->prenom." , "." j'ai ".$this->age." "."ans. Et je suis de sexe ".$this->sexe;
    }
}

$tab = file('TestFile.txt');
for($i=0 ; $tab[$i]; $i++) {
    echo $tab[$i].'<br>';
}
fclose('TestFile.txt');
// ce quil y a en bas ne ser pas lu apres le fclose
$obj = new PersonneDyn ("Doe", "Jane", 14, "Feminin");
echo $obj->presentation();
?>

