<?php 
require_once 'connexion.php';

if(isset($_GET['id'])){
    $req = "SELECT * FROM infos WHERE id_client=$_GET[id]";
    $result = $obj_pdo->query($req);
    $client = $result->fetch();
}
if(isset($_POST['submit'])){

    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email'])){
        echo 'veuillez comleter la saisie svp';
    } 
    else {
        if(strlen(trim($_POST['firstname'])) < 2){
            echo 'prenom incorrect';
        } 
        else {
            $id = $_GET['id'];
            $nom = $_POST['firstname'];
            $prenom = $_POST['lastname'];
            $email = $_POST['email'];
            
            require_once 'connexion.php';

            $requete = "UPDATE infos SET nom='$nom', prenom='$prenom', email='$email' WHERE id_client=$id";
            $result = $obj_pdo->query($requete);

            if($result){
                header('location:element.php');
            }
        }
    }
    
    
    


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form method="post">
    <div>
    
    <input type="hidden" value="<?=$client['id']?>" name="id">
    </div>
    <div>
    First name<span>*</span>:<br>
    <input type="text" value="<?=$client['nom']?>" name="firstname" >
    </div>
        
    <div>
    Last name<span>*</span>:<br>
    <input type="text" value="<?=$client['prenom']?>" name="lastname">
    </div>

    <div>
    Email address<span>*</span>:<br>
    <input type="text" value="<?=$client['email']?>" name="email">
    </div>

    <div>
        <input type="submit" value="Send">
    </div>
    </form>
</body>
</html>