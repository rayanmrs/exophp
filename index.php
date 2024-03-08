<?php

$host = '127.0.0.1';
$db = 'actu';
$user = 'root';
$pass = '';
$port = '3306';
$charset = 'utf8mb4';
require_once 'class_actu.php';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
$pdo = new PDO($dsn, $user, $pass);

$sql = 'SELECT * FROM article ORDER BY id_article LIMIT 5';
$temp = $pdo->prepare($sql);
$temp->execute();
$results = $temp->fetchAll(PDO::FETCH_ASSOC);

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

    foreach ($results as $row) {
        $actu = new Actualite($row);
        echo '<a href="article1.php"><div class="article">
            <h1>' . $actu->titre . '</h1>
            <p>Date de publication :  ' . $actu->date_publication . '</p>
            <p>Date de révision :  ' . $actu->date_revision . '</p>
            <p>Auteur :  ' . $actu->auteur . '</p>
            <p>Tags :  ' . $actu->tags . '</p>
            <p>Sources :  ' . $actu->sources . '</p>
        </div></a>';
    }

    ?>

    <?php
    include("footer.php");
    ?>

</body>
</html>