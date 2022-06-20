<?php

require_once 'config.php';

try{
    $obj_pdo = new PDO("mysql:host=localhost;dbname=reservation", DB_username, DB_pass);
    echo "Connecté...";
} catch (PDOException $e) {
    print 'Error :' .$e->getMessage()."<br>";
}
?>