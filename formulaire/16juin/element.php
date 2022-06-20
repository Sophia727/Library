<?php
require_once 'connexion.php';


$requete = "SELECT * FROM infos";
$resultat = $obj_pdo->query($requete);
//$result = $resultat->fetch();

if(isset($_POST['id'])){
    $requete = "DELETE FROM infos WHERE id_client=$_POST[id]";
    $result = $obj_pdo->query($requete);
    if($result){
        header ('location: element.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="collapse">
        <thead>
            <tr>
                <th>ID:</th>
                <th>noms:</th>
                <th>prenoms:</th>
                <th>email:</th>
                <th>action:</th>
            </tr>
        </thead>
        <tbody>
            <?php while($result = $resultat->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td> 
                    <?= $result['id_client']?> 
                </td>
                <td> 
                    <?= $result['nom']?> 
                </td>
                <td> 
                    <?= $result['prenom']?> 
                </td>
                <td> 
                    <?= $result['email']?> 
                </td>
                <td> 
                    <a href="element.php?id=<?=$result['id_client']?>">Delete
                    </a>
                    <a href="element.php?id=<?=$result['id_client']?>">Update 
                    </a>
                </td>
            </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>
</html>

