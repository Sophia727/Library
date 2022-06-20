<?php
require_once 'info.php';

try{
    $pdo = new PDO("mysql:host=localhost;dbname=library", $user, $password);
    //echo "Connecté!";
} catch (PDOException $e){
    print "Error! : ".$e->getMessage()." <br>";
    die();
}


?>