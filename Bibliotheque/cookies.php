<?php
 if(isset($_GET['mode'])){
    $mode= $_GET['mode'];
    setcookie("mode", $mode, time()+60*60*24*30);
    $_COOKIE['mode'] = $mode;
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body style= <?= $_COOKIE['mode'] == "jour"? "background-color:white; color:black;" : "background-color:black; color:white;" ?> >
    <a href="cookies.php?mode=jour">Jour</a>
    <a href="cookies.php?mode=nuit">Nuit</a>
</body>
</html>

