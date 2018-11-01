<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Article ajouté</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="ex00.css" />
   
</head>
<body>
<header>
    <?php 
    require 'header.php';
    ?>
    </header>
    <main  class="main">
    <h1>Article ajouté!</h1>
    </main>
    <footer>
    <?php
    require 'footer.php';
    ?>
    </footer>
</body>
</html>

<?php 
$article=array(
    'id'=> uniqid(),
    'Titre' => $_POST['titre'] ,
    'Texte' => $_POST['texte'] ,
    "Auteur" => $_POST['auteur'] ,
    "date" => $_POST['date'] ,
);

$articleJson=json_encode($article);
$fichierjson=fopen('articles.json', 'a+');
fputs($fichierjson, $articleJson);
fclose($fichierjson);
?>