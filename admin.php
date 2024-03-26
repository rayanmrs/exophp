<?php
// Inclusion de la classe de base de données
require_once('class_admin.php');
$categories = Admin::getCategories();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    Admin::admin($categories);
    ?>
</body>
</html>