<?php 
$article=array(
    'id'=> uniqid(),
    'Titre' => $_POST['titre'] ,
    'Texte' => $_POST['texte'] ,
    "Auteur" => $_POST['auteur'] ,
    "Date" => $_POST['date'] ,
);
$articleJson= json_encode($article);
?>