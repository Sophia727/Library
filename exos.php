<!-- 
 on a : 
 a = nombre
 b = nombre
 si a =/= b on calcule la somme
 si a=b, on calcule la somme*3-->
 <!-- <?php
 $a = 51;
 $b = 51; 

 if ($a == $b){
     echo ($a + $b) *3;
 } else {
    echo $a + $b;
 }
?> -->
<!-- 2 -------------------------------------------------------------- -->
<!-- on a n qui est un nombre
51 et un nombre
si n > 51 , alors
on multiplie la difference absolue par 3
si n <= 51, alors
on affiche la difference -->
<!-- <?php
 $n = 51;
 if($n > 51){
     echo ($n - 51)*3;
 } else {
     echo 51 - $n;
}
?> -->

<!-- 3 --------------------------------------------------------- -->
<!-- on va verifier deux nombres:
    x et y
si x ou y === a 30, la reponse est true
si x+y ===30 la reponse est true
si aucune de ces conditions ne s'applique la reponse est false.
     -->

<!-- <?php
$x = 30;
$y = 0;
if ($x || $y === 30 || $x + $y === 30){
    echo 'true';
} else {
    echo 'false';
}
?> -->

<!-- 4 ------------------------------------------------------------ -->
<!-- x est un nombre
si 90 < x < 200 alors
 le result est juste
si la reponse est false.
     -->

<!-- <?php
$x = 103;
if($x >= 90 && $x <= 200){
    echo 'true';
}
?> -->


<!-- 5 ------------------------------------------------------------ -->
<!-- myStr est une chaine de carctères
si la valeur de myStr commence par 'if', alors
on retourne la valeur inchagée.
sinon, on ajoute 'if'
 -->

<!-- <?php
$myStr = "else";
if(substr($myStr, 0, 2) === "if"){
    echo $myStr;
} else {
    echo "if ".$myStr;
}
?> -->

<!-- 6 ------------------------------------------------------------ -->
<!-- str est une chaine de caractères
objectif: supprimer un caractère, qui a une positon précise.
la position est comprise entre 0 et la longueur de str (-1 inclus).
 -->

<!-- <?php
$str = "Python";

if(strlen($str) > 1){
    echo substr($str, 0, 1).substr($str,2,6)."<br>";
    echo substr($str, 0, 0).substr($str,1,6)."<br>";
    echo substr($str, 0, -2).substr($str,5,6)."<br>";
}
?> -->

<!-- 7 ------------------------------------------------------------ -->
<!-- myStr est une chaine de caractères
detecter le premier caractère
detecter le dernier caractre 
leur faire switcher de places.
 -->

<!-- <?php
 $myStr = "abcdxy";
if (strlen($myStr) >= 1){
    echo substr($myStr, 3, 1).substr($myStr, 1,2).substr($myStr, 0, 1)."<br>";
    echo substr($myStr, 0, 1)."<br>";
    echo substr($myStr, 5, 1).substr($myStr, 4, 1)."<br>";
    
}

?>  -->

<!-- 8 ------------------------------------------------------------ -->
<!-- myStr est une chaine de caractères
si la longueur de myStr est > 2 :
faire une copie de 2 premiere lettres de myStr.
si la longueur de myStr est > 2 :
afficher myStr originale.
 -->

<!-- <?php
//$myStr = "C Sharp";
$myStr = "a";
if(strlen($myStr) > 2) {
    echo substr ($myStr, 0, 2).substr ($myStr, 0, 2).substr ($myStr, 0, 2).substr ($myStr, 0, 2);
} else {
    
    echo substr ($myStr, 0, strlen($myStr));
}
?>  -->

<!-- 9 ------------------------------------------------------------ -->
<!-- myStr est une chaine de caractères
ajouter la derniere lettre de myStr au debut et a la fin de myStr.
 -->
 
<!-- <?php
$myStr = "geen";
if (strlen($myStr) >= 1){
    echo substr($myStr, -1, 1).substr($myStr, 0, strlen($myStr)).substr($myStr, -1, 1)."<br>";
} 

?> -->

<!-- 10 ------------------------------------------------------------ -->
<!-- x est nombre positif.
x est divisible par 3 OU 7?
 -->
 
 <!-- <?php
$x = 37;
if ($x > 0 && $x % 3 === 0 || $x % 7 === 0){
    echo 'true';
} else {
    echo "false";
}

?> -->

<!-- 11 ------------------------------------------------------------ -->
<!-- myStr est une chaine de caracteres
si la longueur de myStr est >3 :
prendre les trois premieres lettres de myStr
les ajouter au debut et a la fin de myStr
si la longueur de myStr est < 3:
ajouter au debut et a la fin les lettres existantes
 -->
 
 <!-- <?php
$myStr = "js";
if (strlen($myStr) > 3){
    echo substr($myStr, 0, 3).substr($myStr, 0, strlen($myStr)).substr($myStr, 0, 3)."<br>";
} else {
    (strlen($myStr) < 3);
    echo substr($myStr, 0, strlen($myStr)).substr($myStr, 0, strlen($myStr)).substr($myStr, 0, strlen($myStr))."<br>";
}

?> -->

<!-- 12 ------------------------------------------------------------ -->
<!-- myStr est une chaine de caracteres
est ce que myStr commence par "C#"?

 -->
 
 <!-- <?php
$myStr = "PHP";
if (substr($myStr, 0, 2) === "C#"){
    echo 'True';
} else {
    echo 'False';
}

?>  -->
