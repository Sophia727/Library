<?php
class Point2D{
    private float $_x;
    private float $_y;

    public function __construct(float $x, float $y){
        $this->_x = $x;
        $this->_y = $y;
    }
    public function getX(){
        return $this->_x;
    }
    public function getY(){
        return $this->_y;
    }
    public function __toString()
    {
        return "Point( x= ".$this->_x." , y= ".$this->_y." )";
    }
    public function bouger(float $dx, float $dy){
        $this->_x += $dx;
        $this->_y += $dy;
    }
}

?>