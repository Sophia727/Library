<?php
require_once "Point2D.php";
require_once "Rectangle.php";
require_once "Cercle.php";
require_once "Carre.php";

$point1 = new Point2D(2,3);
$rectangle1 = new Rectangle(2,1,$point1,1);
$rectangle2 = new Rectangle(2,1,$point1,1);
echo $rectangle1;

$point2 = new Point2D(1,2);
$cercle = new Cercle(2,$point2,2);
echo $cercle;
echo "\ndéplacement du cercle par (dx=2,dy=1)\n";
$cercle->bouger(2,1);
echo $cercle;

$carre = new Carre(1,$point2,3);
echo $carre;

echo Forme::$compteur;

?>