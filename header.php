<?php
require_once('class_categories.php');

$categories = Categories::getCategories();
$categorie = Categories::getCategories2();
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
        <img src="img/logo.png" alt="logo">
        <h1>Actualité</h1>
        <a class="bouton" href="contact.php">Contact</a>
        <a class="bouton" href="admin.php">Administration</a>
        <?php
        categories::categories($categories);
        categories::categories($categorie);
        ?>
        
    </header>
</body>
</html>
