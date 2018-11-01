<?php 
$article=array(
    'id'=> uniqid(),
    'Titre' => $_POST['titre'] ,
    'Texte' => $_POST['texte'] ,
    "Auteur" => $_POST['auteur'] ,
    "Date" => $_POST['date'] ,
);

$articleJson=[json_encode($article)];
$articleJson=implode($articleJson, " ");
$fichierjson=fopen('articles.json', 'a+');
fputs($fichierjson, $articleJson);
fclose($fichierjson);
?>