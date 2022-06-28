<?php
require_once "Point2D.php";

abstract class Forme {
    protected Point2D $centre;
    protected int $_id;
    static public int $compteur = 0;

    public abstract function surface();
    public abstract function perimetre();

    public function bouger(int $dx, int $dy){
        $this->centre->bouger($dx,$dy);
    }
    
}
?>