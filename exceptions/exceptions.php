<?php
function divide($a, $b){
    if($b==0){
        throw new Exception("erreur divison par 0") ;
       
    } return $a/$b;
}


try {
    echo "Division: ", divide(2, 0);
} catch (Exception $e){
    echo "\ncatch error :", $e->getMessage();
}
echo "\nAfter division"
?>