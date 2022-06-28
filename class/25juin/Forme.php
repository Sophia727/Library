<?php
require_once 'Point2D.php';
abstract class Forme{
    protected Point2D $centre;
    protected int $_id;
    protected static int $compteur = 0;

    abstract public function surface();
    abstract public function perimetre();

    public function bouger(float $dx, float $dy){
        $this->centre->bouger($dx, $dy);
    }
} 
?>