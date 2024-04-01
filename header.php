<?php
require_once('classe/categories.php');

$categories1 = Categories::getCategories();
$categorie1 = Categories::getCategories2();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="index.php"><img src="img/logo.png" alt="logo" ></a>
        <h1>Actualité</h1>
        <a class="bouton" href="contact.php">Contact</a>
        <a class="bouton" href="admin.php">Administration</a>
        <?php
        categories::categories($categories1);
        categories::categories($categorie1);
        ?>
        
    </header>
</body>
</html>
