<!--loops 1 ------------------------------------------------------------ -->
<!-- 
    $x est un chiffre <= 10. 
    si &x > 0 alors $x+1.
    si 1 > x+1 > 10 alors on ajoute - .
1-2-3-4-5-6-7-8-9-10
 -->
<!-- <?php
$x = 1;
for ($i = 1; $i <= 10 ; $i++){
    echo $x++;
    if ($x > 0 && $x <= 10){
        echo "-";
    }
} echo "<br";
?> -->

<!--loops 2 ------------------------------------------------------------ -->
<!-- 
    add all numbers between 0 and 30
    display total
 -->
<?php
$x = 0;
$sum = 0;
for($i =0 ; $i <= 30 ; $i++){
    //$x++;<~ 498
    $sum +=$i;
} echo "$sum <br>";
?>
<!--loops 3 ------------------------------------------------------------ -->
<!-- 
on a "*" qui est un caractère
on veut incrementer "*" pour avoir le resultat suivant:
*  
* *  
* * *  
* * * *  
* * * * * 

* + 1 = a
a+1
 -->
<!-- <?php
$star = rand(0,5);

while($star){
    for ($i = 0; $i < $star ; $i++){
    echo "* ";
} echo "<br>";
    $star --;  
}

?>   -->
<!--loops 4 ------------------------------------------------------------ -->
<!-- 
on a "*" qui est un caractère.
on veut incrementer puis decrementer 
le resultat doit etre le suivant:
* 
* * 
* * * 
* * * * 
* * * * * 
* * * * * 
* * * * 
* * * 
* * 
* 
 -->

<?php
$n = 1;
while ($n < 13){
    if($n <= 6){
        for ($j=0 ; $j <= $n ; $j++){
            echo "* ";
        } 
        echo "\n";
    }else {
        for ($j = 0 ; $j <= 13-$n ; $j++){
        echo "* ";
    }
    echo "\n";
} 
}
?>

<!--loops 5 ------------------------------------------------------------ -->
<!-- 
on a un nombre "x"
calculer le produit "prdt" de tous les nombres x > n > 1   
4*3*2*1 = prdt 
-->
 <!-- <?php
 $x = 3;
 $prdt = 1;
for($i = 1; $i <= $x; $i++ ){
    $prdt *= $i;
}
echo $prdt; 
 ?> -->