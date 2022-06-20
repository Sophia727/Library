<?php 
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

// $uploadedFile = "./docs/";
// $chemin = $uploadedFile.basename($_FILES["idscan"]["name"]);
// echo $chemin;
// $tmp_name = $_FILES["idscan"]["tmp_name"];
// echo $tmp_name;
// if(move_uploaded_file($tmp_name, $chemin)){
//         echo 'file uploaded';

// }
//  if(file_exists($chemin)){
//      echo 'File exists!';
//      echo $chemin;
//  } else{
    

//  }


$arrivalDate = $_POST['arrDate'];
$departureDate = $_POST['depDate'];


$arrDate = date_create($arrivalDate);
$depDate = date_create($departureDate);
$interval = date_diff($arrDate, $depDate);

echo $interval->format("%R%a days");
//echo $interval->format("%a jours de diff");
?>