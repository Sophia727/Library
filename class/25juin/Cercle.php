<?php
require_once "Point2D.php";
require_once "Forme.php";

final class Cercle extends Forme{
    protected int $_rayon;

    public function __construct(int $rayon, Point2D $centre, int $id)
    {
        $this->_rayon= $rayon;
        $this->_id= $id;
        $this->centre = $centre;
        self::$compteur++;
    }
    public function surface()
    {
        //pi*rayon*^2
        return (M_PI *(($this->_rayon)**2));
    }
    public function perimetre()
    {
        return (2*(M_PI*($this->_rayon)));
    }
    public function __toString()
    {
        return "{Cercle: ".$this->_id.
            "\n Centre: ".$this->centre.
            "\n Rayon: ".$this->_rayon.
            "\n Surface: ".self::surface().
            "\n Perimetre: ".self::perimetre()."\n}";
    }
    public function getRayon(){
        return $this->_rayon;
    }
}
?>