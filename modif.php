<?php
require_once('classe/base_donnee.php');
require_once('classe/admin.php');


if(isset($_POST['modifier'])) {
    $nom = $_POST['nom'];
    $id = $_POST['id'];
    $categories_id = $_POST['categorie_id'];
    Admin::UpdateCategories($nom, $categories_id, $id); 
}

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
    <form method="post" action="#" onsubmit="<?php if (isset($_POST['modifier'])){ Admin::UpdateCategories($nom,$categories_id,$id);}?>">
        
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="" required />
        
        <label for="id">Entrer l'id de l'élément que vous voulez modifier</label>
        <input type="number" name="id" id="id" placeholder="Id" required />

        <label for="categorie_id">Entrer l'id de sa catégorie</label>
        <input type="number" name="categorie_id" id="categorie_id" placeholder="CatégorieId" required />

        <input type="submit" name="modifier" value="modifier" />
    </form>

    <?php
    // Affichage des catégories
    Admin::admin($categories);
    ?>

</body>
</html>