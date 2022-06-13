
<?php
function myCalculator($num01, $oper, $num02){
$sum=0;
    switch ($oper) {
        case 'inc':
            $sum = $num01 + $num02;
            break;
        case 'dec':
            $sum = $num01 - $num02;
            break;
        default:
            $sum = "Oops! something went wrong";
            break;
    }
    return $sum;
}
$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Outcome : ". myCalculator($num01, $oper, $num02);

?>