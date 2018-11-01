<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poster un Article</title>
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
    <form action="cible.php" method="POST">
    <label>Titre<input  type="text" name="titre"></label>
    <label>Texte<input type="text" name="texte"></label>
    <label>Auteur<input type="text" name="auteur"></label>
    <label>Date de publication<input type="date" name="date"></label>
    <input type="submit" value="Publier">
    </form>
    </main>
    <footer>
    <?php
    require 'footer.php';
    ?>
    </footer>
</body>
</html>
