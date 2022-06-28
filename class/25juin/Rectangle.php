<?php
require_once "Point2D.php";
require_once "Forme.php";

class Rectangle extends Forme {
    protected int $_largeur;
    protected int $_longueur;

    public function __construct(int $longueur, int $largeur, Point2D $centre, int $id)
    {
        $this->_largeur = $largeur;
        $this->_longueur = $longueur;
        $this->_id = $id;
        $this->centre = $centre;
        self::$compteur++;
    }

    public function surface(){
        return  ($this->_longueur * $this->_largeur);
    }
    public function perimetre(){
        return  ($this->_longueur + $this->_largeur)*2;
    }
    public function __toString()
    {
        return
         "{Rectangle :$this->_id <br>".              
            "\nCentre: $this->centre <br>" .
            "\n Largeur:$this->_largeur <br>". 
            "\n Longueur:$this->_longueur <br>" .
            "\n surface:".self::surface()."<br>" .
            "\n perimetre:".self::perimetre()."
         }";

    }
    public function getLongueur(){
        return $this->_longueur;
    }
    public function getLargeur(){
        return $this->_largeur;

    }

}
?>