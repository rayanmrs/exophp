<?php

// Inclusion des fichiers de classe
require_once 'class_actu.php';
require_once 'class_base_donnee.php';

$affiche = base_donnee::affiche();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Liste d'articles</title>
</head>
<body>
    
    <?php
    include("header.php");

    Actualite::actu($affiche);
    ?>

    <?php
    include("footer.php");
    ?>

</body>
</html>