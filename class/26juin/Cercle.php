<?php  
require_once "Point2D.php";
require_once "Forme.php";

class Cercle extends Forme{
    protected int $_rayon;


    public function __construct($rayon, Point2D $centre, int $id)
    {
        $this->_rayon = $rayon;
        $this->centre = $centre;
        $this->_id = $id;
        self::$compteur++;
    }
    public function surface()
    {
        return (M_PI*(($this->_rayon)**2));
    }
    public function perimetre()
    {
        return (M_PI*($this->_rayon)*2);
    }
    public function __toString()
    {
        return "{Cercle: ".$this->_id."\n".
            "Centre: ".$this->centre.
            "Rayon: ".$this->_rayon."\n".
            "Surface: ".self::surface()."\n".
            "Perimetre: ".self::perimetre()."\n}<br>";
    }

    public function getRayon(){
        return  $this->_rayon;
    }
}

?>