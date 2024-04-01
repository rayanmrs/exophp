<?php
require_once('class_base_donnee.php');
require_once('class_admin.php');

// Si le formulaire est soumis et que le bouton "modifier" est cliqué
if(isset($_POST['modifier'])) {
    $nom = $_POST['nom'];
    $id = $_POST['id'];
    $categories_id = $_POST['categorie_id'];
    Admin::UpdateCategories($nom, $categories_id, $id); // Appel à la méthode getCategoriesName avec les bonnes valeurs
}

// Récupération de la liste des catégories
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
        
        <label for="id">Id</label>
        <input type="number" name="id" id="id" placeholder="Id" required />

        <label for="categorie_id">CatégorieId</label>
        <input type="number" name="categorie_id" id="categorie_id" placeholder="CatégorieId" required />

        <input type="submit" name="modifier" value="modifier" />
    </form>

    <?php
    // Affichage des catégories
    Admin::admin($categories);
    ?>

</body>
</html>