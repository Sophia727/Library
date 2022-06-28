<?php
require_once "Point2D.php";
//require_once "Forme.php"; no because abstract, so no need.
require_once "Rectangle.php";
require_once "Carre.php";
require_once 'Cercle.php';

$p1 = new Point2D(3, 3);
echo $p1->__toString(). "\n";
// $p1->bouger(5, 3);
// echo $p1->__toString();
echo "<br> <hr>";

//tests

//rectangle 1
$p2 = new Point2D(2,3);
$rec1 = new Rectangle(2, 1, $p2, 1);
echo "\n".$rec1;
echo "<br> <hr>";

//Cercle 2
$p3 = new Point2D(1,2);
$cercle = new Cercle(2, $p3, 2);
echo "\n".$cercle;

//bouuger cercle par dx=2 et dy=1;
$cercle->bouger(2,1);
echo "\n".$cercle;


$carre = new Carre(1, $p1, 3);
echo $carre;
?>