<?php
require_once('class_categories.php');

$categories = Categories::getCategories();
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
        <select id="categories">
            <?php
            foreach ($categories as $categorie) {
                echo '<option value="' . $categorie->id . '">' . $categorie->nom . '</option>';
            }
            ?>
        </select>
        <a class="bouton" href="contact.php">Contact</a>
    </header>
</body>
</html>
