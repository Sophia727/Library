
<?php
$x = 1;
for ($i=1; $i <= 50 ; $i++) { 
    $x = $i;
    if ($x % 3 === 0 && $x % 5 === 0) {
        echo "fizz-Buzz!"." ,\n ";
    }
     elseif ($x % 3 === 0) {
         echo "fizz".",\n ";
     } 
     elseif ($x % 5 === 0) {
         echo "Buzz".",\n ";
     } 
      elseif ($x % 3 !== 0 && $x % 5 !== 0){
        echo $x++.",\n ";
    } 
     else {
        echo $x++.",\n ";
     } 
     
}  
