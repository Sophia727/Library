<!-- Array 1 ------------------------------------------------------------ -->
<!-- color est un tableau:
$color = array('white', 'green', 'red', 'blue', 'black')


 -->
 
<!-- <?php
$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[2]." carpet, the ".$color[1]." lawn, the ".$color[0]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon"

?>  -->

<!-- Array 2 ------------------------------------------------------------ -->
<!-- color est un tableau:
$color = array('white', 'green', 'red')
afficher sous forme de liste, affichant: green, red, white.
 -->
 
 <!-- <?php
$color = array('white', 'green', 'red');
echo "<li>".$color[1]."<li>".$color[2]."<li>".$color[1];
 ?> -->

<!-- Array 3 ------------------------------------------------------------ -->
<!-- ceu est un tableau:
renvoyer les capitales des pays
key  = pays
value = capitale 
 -->
 <!-- <?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", "France" => "Paris", 
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
"Germany" => "Berlin", "Greece" => "Athens", 
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", "Spain"=>"Madrid", 
"Sweden"=>"Stockholm", "United Kingdom"=>"London", 
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
"Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", 
"Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach ($ceu as $country => $capital) {

    echo "The Capital of ".$country." is ".$capital."<br>";
 }
 ?> -->

<!-- Array 4 ------------------------------------------------------------ -->
<!-- x est un tableau
    $x = array(1, 2, 3, 4, 5); 
supprimer un element de x,

 -->

<!-- <?php
$x = array(1, 2, 3, 4, 5); 
var_dump($x);
unset($x[2]);
$x = array_values($x);
var_dump($x);
// echo 'hi';
?> -->

<!-- Array 5 ------------------------------------------------------------ -->
<!-- color est un tableau
    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
get 1st elem de color
 -->

<!-- <?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];
?> -->

<!-- Array 6 ------------------------------------------------------------ -->
<!-- on a une chaine JSON:
JSON code :
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}

le result recherché est:

Title : The Cuckoos Calling
Author : Robert Galbraith
Publisher : Little Brown


 -->

 <!-- <?php
 $json = '{"Title": "The Cuckoos Calling",
 "Author": "Robert Galbraith",
 "Detail": {
 "Publisher": "Little Brown"
 }}';
 
$arrjson = json_decode($json, true);
// foreach ($x as $key => $value) {
//     echo $key." : ".$value."<br>";
//} publisher ne s'affiche pas
function myFunc ($value, $key){
    echo $value." : ".$key."<br>";
}
array_walk_recursive($arrjson, "myFunc");
?> -->

<!-- <?php
function display($val, $key){
    echo $key. " : " .$val. "<br/>";
 }

 $json = '{"Title": "The Cuckoos Calling",
     "Author": "Robert Galbraith",
     "Detail": {
     "Publisher": "Little Brown"
     }}';

    $arr1 = (json_decode($json, true));//pourquoi true affiche le publisher et false hides it?

 array_walk_recursive($arr1, "display");

?> -->

<!-- Array 7 ------------------------------------------------------------ -->
<!-- 
on a un tableau arr
on a un element $ quon veut inserer ds arr
position peut importe
 -->
<!-- <?php
$arr = array(1, 2, 3, 4, 5);
$x = 7
array_pad($arr, 5, $x);
echo $myArr = array_pad($arr, 5, $x)
?>  -->



 <!-- Array 8 ------------------------------------------------------------ -->
<!-- on a un Tableau
$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
resultat recherche
a) ordre croissant trier par valeur
b) ordre croissant trier par clé
c) ordre décroissant trier par valeur
d) ordre décroissant trier par clé
 -->
 <?php

$arr = array("Sophia"=>"31","Jacob"=>"41",
            "William"=>"39","Ramesh"=>"40");
asort($arr);
// arsort($arr);
// ksort ($arr);
// krsort ($arr);
foreach($arr as $key => $value){
    echo "$value : $key <br>";
}

 ?>