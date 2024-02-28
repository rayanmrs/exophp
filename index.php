<?php

$host = '127.0.0.1';
$db = 'actu';
$user = 'root';
$pass = '';
$port = '3306';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
$pdo = new PDO($dsn, $user, $pass);

$sql='SELECT * FROM article ORDER BY id_article LIMIT 5 ';
$temp=$pdo->prepare($sql);
$temp->execute();

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
    
    <?php
    include("header.php");

    while ($resultat = $temp->fetch()){
        echo '<a href="article1.php"><div class="article">' ;
        echo '<h1>' . $resultat['titre'] . '</h1>' ;
        echo '<p>Date de publication :  ' . $resultat['date_publication'] . '</p>' ;
        echo '<p>Date de révision :  ' . $resultat['date_revision'] . '</p>' ;
        echo '<p>Auteur :  ' . $resultat['auteur'] . '</p>' ;
        echo '<p>Tags :  ' . $resultat['tags'] . '</p>' ;
        echo '<p>Sources :  ' . $resultat['sources'] . '</p>' ;

            
        echo '</div></a>';
    }
    ?>

    <?php
    include("footer.php");
    ?>

</body>
</html>
