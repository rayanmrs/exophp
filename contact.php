<?php
require_once('class_base_donnee.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $values = array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'mail' => $_POST['mail'],
    );
    $contact = new contact($values);
    $contact->sendcontact($contact);

}

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
        <a class="bouton" href="index.php">Accueil</a>
    </header>
    <div id="formulaire">
        <form action="contact.php" method="post">
            <label for="nom">Nom</label>
            <input type="text" name="nom" placeholder="Nom">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" placeholder="Prénom">
            <label for="mail">Mail</label>
            <input type="text" name="mail" placeholder="Mail">
            <input type="submit" name="soumettre" value="Envoyer">
        </form>
    </div>
</body>
</html>