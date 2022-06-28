<?php
class Point2D{
    private int $_x;
    private int $_y;

    public function __construct($x, $y){
        $this->_x = $x;
        $this->_y = $y;
    }
    public function __toString()
    {
        return "Point(x=".$this->_x.", y=".$this->_y.")\n";
    }
    public function bouger($dx, $dy){
        $this->_x += $dx;
        $this->_y += $dy;
    }
    public function getX(){
        return $this->_x;
    }
    public function gety(){
        return $this->_y;
    }

}

?>