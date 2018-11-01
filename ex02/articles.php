<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Articles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="ex00.css" />
</head>
<body>
    <header>
    <?php 
    require 'header.php';
    ?>
    </header>
    <main class="main">
    <?php
    require 'utils.php';
    getArticle();
    ?>
    </main>
    <footer>
    <?php
    require 'footer.php';
    ?>
    </footer>
</body>
</html>
