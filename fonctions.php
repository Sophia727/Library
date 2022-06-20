<!--Func 1 ------------------------------------------------------------ -->
<!-- 
    x est un nombre >= 1
myFunc est une fonction qui calcule:
le produit de tous les nombres entre 1 et x

 -->
 <!-- <?php
 

function myFunc($x){
    $fact= 1;
    for($i= 1 ; $i <= $x; $i++){  
        $fact = $fact * $i;
    }
    return $fact;
}
echo myFunc(4);
 ?> -->

<!--Func 2 ------------------------------------------------------------ -->
<!-- 
  si x est un nombre premier, donc:
x % 1 = 0 et x % x = 0

 -->
 <!-- <?php
$y = 7;
function primeNum($x){
    if($x % 1 === 0 && $x % $x === 0){
        return true;
    } else {
        return false;
    }
    
}
echo primeNum(7);
 ?> -->
<!-- func 3 + 4 /+5 -->
<!--Func 3 ------------------------------------------------------------ -->
<!-- 
  func est une fonction.
  str est une variable
  si str > 1, alors
strrev renverse str
 -->
<!-- <?php
function func ($str){
    if($str > 1){
      echo strrev($str);
    }
}
echo func('etyloppih');
?> -->
<!--Func 4 ------------------------------------------------------------ -->
<!-- ????????????????????????
  sortFunc est une fonction.
  myArr est un tableau
temps que myArr > 1, on peut sort it 
 -->
<!-- <?php

function sortFunc($myArr){
    $myArr = array(57, 82, 35, 11);
    $arrlength = count($myArr);
    for ($i=0; $i < $arrlength ; $i++) { 
        //echo sort($myArr[$i]).", ";
        // sort($myArr);
    } echo "<br>";
}
echo sortFunc($myArr);
?> -->

<!--Func 5 ------------------------------------------------------------ -->
<!-- 
  lowCaseFunc est une fonction.
  myStr est une chaine de caractères.
 si la valeur de la chiane de caraactères est en minuscule, alros
 retourner True.
 sinon, retourner faux.
 -->
 <!-- <?php
function lowCaseFunc($myStr){
    $myStr = "this is a lower case string";
    if($myStr > 0 && $myStr );
}
 ?> -->