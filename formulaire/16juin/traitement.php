<?php
// echo"<pre>";
// print_r($_POST);
// echo"</pre>";

//verifie si la variable est definie, cad if input is full
if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email'])){
    echo 'saisissez votre nom svp';
} else {
    if(strlen($_POST['firstname']) < 2){
        echo "write your name properly please";
    } else {
    
        $nom = $_POST['firstname'];
        $prenom = $_POST['lastname'];
        $email = $_POST['email'];

        require_once 'connexion.php';


    $requete = "INSERT INTO infos (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";
    $execute = $obj_pdo->query($requete);

    header('location:element.php');
    }
}



?>