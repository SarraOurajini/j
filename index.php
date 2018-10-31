<?php 
$vue=0;
$monfichier=fopen('compteur.txt', 'r+');
$ligne=fgets($monfichier);
$ligne+=1;
echo $ligne;
fseek($monfichier, 0);
fputs($monfichier, $ligne);
fclose($monfichier);




?>