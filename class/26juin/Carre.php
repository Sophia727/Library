<?php
require_once "Point2D.php";
require_once "Rectangle.php";

final class Carre extends Rectangle{
    protected int $_longueur;

    public function __construct(int $longueur, Point2D $centre, int $id)
    {
        $this->_longueur = $longueur;
        $this->centre = $centre;
        $this->_id = $id;
        self::$compteur++;
    }
    public function surface()
    {
        return ($this->_longueur *$this->_longueur);
    }
    public function perimetre()
    {
        return ($this->_longueur * 4);
    }

    public function __toString()
    {
        return "{Carre:".$this->_id."\n".
            "centre: ".$this->centre.
            "Longueur: ".$this->_longueur."\n".
            "Surface: ".self::surface()."\n".
            "Perimetre: ".self::perimetre()."\n}<br>";
    }


}
?>