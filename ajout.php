<?php
require_once('class_base_donnee.php');
require_once('class_admin.php');
if(isset($_POST['ajouter'])) {
    $nom = $_POST['nom'];
    $categorie_id = $_POST['categorie_id'];

    Admin::ajout_categories($nom, $categorie_id);
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
    <form method="post" action="">
        
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Nom" required />

        <label for="categorie_id">CatégorieId</label>
        <input type="number" name="categorie_id" id="categorie_id" placeholder="CatégorieId" required />

        <input type="submit" name="ajouter" value="Ajouter" />
    </form>
    <?php
    Admin::admin($categories);
    ?>

</body>
</html>