
<?php
/**
 * Fruit: c'est une classe que jai créé lors des cours pour en apprendre plus sur les classes
 * @return string
 * @param int class
 */
class Fruit {
    public $name;
    public $color;

    public function __construct($nomdufruit, $couleurdufruit){
        $this->name = $nomdufruit;
        $this->color = $couleurdufruit;
    }
    public function intro(){
        echo "this fruit ".$this->color." is a ".$this->name.".";
    }
}
//$apple = new Fruit ("Pomme", "vert");
//$apple->intro();

class Berry extends Fruit{
    public $type;
    public function __construct($nomdufruit, $couleurdufruit, $letypedufruit){
        $this->name = $nomdufruit;
        $this->color = $couleurdufruit;
        $this->type = $letypedufruit;
    }
    public function message(){
        echo "The type of this fruit is ".$this->type;
    }
}
$fp = @fopen("/tmp/inputfile.txt", "r");
if ($fp) {
    while (($buffer = fgets($fp, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($fp)) {
        echo "Erreur: fgets() a échoué\n";
    }
    fclose($fp);
}
$strawberry = new Berry ("Fraise", "Rouge", "Fruit de bois");
$strawberry->intro();
$strawberry->message();