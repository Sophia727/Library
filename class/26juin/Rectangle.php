<?php
require_once "Point2D.php";
require_once "Forme.php";
class Rectangle extends Forme {
    protected int $_longueur;
    protected int $_largeur;

    public function __construct(int $longueur, int $largeur, Point2D $centre, int $id)
    {
        $this->_longueur = $longueur;
        $this->_largeur = $largeur;
        $this->_id = $id;
        $this->centre = $centre;
        self::$compteur++;
    }
    public function surface(){
        return ($this->_largeur * $this->_longueur);
    }
    public function perimetre(){
        return ($this->_largeur + $this->_longueur)*2;
    }
    public function __toString()
    {
        return "{Rectangle: ".$this->_id."\n".
            "Centre: ".$this->centre.
            "Largeur: ".$this->_largeur."\n".
            "Longueur: ".$this->_longueur."\n".
            "Surface: ".self::surface()."\n".
            "Perimetre: ".self::perimetre()."\n}\n";
    }

    public function getLong(){
        return $this->_longueur;
    }
    public function getLarg(){
        return $this->_largeur;
    }
}

?>