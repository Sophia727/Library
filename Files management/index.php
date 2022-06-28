<?php

echo 'Welcome';

if(file_exists('document.txt')){ //le fichier existe QUE quand y a une valeur ou une donnée dans le fichier
$openFile = fopen("document.txt", 'r');
$compteur = fread($openFile,filesize("document.txt"));
$compteur++;
$openFile = fopen("document.txt", "w");
fwrite($openFile, $compteur);
echo "\n".fwrite($openFile, $compteur);
fclose($openFile);
} else {
$openFile = fopen("document.txt", "r");
$compteur = fread($openFile, filesize("document.txt"));
$compteur++;
fwrite($openFile, $compteur);


}

?>