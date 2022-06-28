<?php
require_once "Point2D.php";
require_once "Forme.php";
require_once "Rectangle.php";

final class Carre extends Rectangle{
    protected int $_longueur;

    public function __construct(int $longueur, Point2D $centre, int $id){
        $this->_longueur = $longueur;
        $this->_id = $id;        
        $this->centre = $centre;
        self::$compteur++;
    }
    public function surface(){
        return ($this->_longueur * $this->_longueur);
    }
    public function perimetre(){
        return ($this->_longueur + $this->_longueur)*2;
    }
    public function __toString()
    {
        return "{
            Carre :".$this->_id."\n".
            "Centre: ".$this->centre."\n".
            "Longueur: ".$this->_longueur."\n".
            "surface: ".self::surface()."\n".
            "perimetre: ".self::perimetre()."\n".
            "}";
    }
    public function getLongueur(){
        return $this->_longueur ;
    }
}
?>