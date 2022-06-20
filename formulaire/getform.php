<?php
print_r($_GET);
// if(!empty(($_GET['fullname'])))
//     $fullname = $_GET['fullname'];
//     $email = $_GET['email'];
//     $package = $_GET['package'];
//     $arrDate = $_GET['arrDate'];
//     $numPpl = $_GET['numPpl'];
//     $avail = $_GET['avail'];
//     $coupon = $_GET['coupon'];
//     $terms = $_GET['terms'];

 $target_dir = "uploads/";
 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 if(isset($_POST["submit"])) {
   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
   if($check !== false) {
     echo "File is an image - " . $check["mime"] . ".";
     $uploadOk = 1;
   } else {
     echo "File is not an image.";
     $uploadOk = 0;
   }
 }






echo "Reservation Input:" .$arr=[
    "Full Name is :" . $_GET["fullname"]. "<br>". 
    "Email :".$_GET["email"]."<br>". 
    "Selected package :".$_GET["package"]. "<br>".
    "Arrival Date :".$_GET["arrDate"]. "<br>".
    "Number of people :".$_GET["numPpl"]. "<br>".
    "Avail choice :".$_GET["avail"]. "<br>".
    "Coupon :".$_GET["coupon"]. "<br>".
    "Terms :".$_GET["terms"]. "<br>"];
?>