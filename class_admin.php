<?php
require_once('class_base_donnee.php');

interface AdminInterface {
    public function getCategories();
    public function addCategory($nom, $categorie_id);
    public function deleteCategory($id);
    public function displayAdminPanel($categories);
    public function updateCategory($nom, $categorie_id, $id);
}

class Admin extends base_donnee implements AdminInterface {
    public static function getCategories() {
        $pdo = self::pdo(); 
        $query = $pdo->query("SELECT * FROM catégories"); 
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    public static function ajout_categories($nom, $categorie_id){
        $pdo = self::pdo(); 
        $query = $pdo->prepare("INSERT INTO catégories (nom, categories_id) VALUES ('$nom','$categorie_id')");
        $query->execute();
        header('Location: admin.php'); 
        exit();
    }

    public static function supp_categories($id){
        $pdo = self::pdo(); 
        $query = $pdo->prepare("DELETE  FROM catégories WHERE id=$id;");
        $query->execute();
        header('Location: admin.php'); 
        exit();
    }

    public static function admin($categories){
        echo '<table border="1px" cellpadding="30px";><tr><td>Id</td><td>Nom</td><td>CatégoriesId</td><td>Action</td></tr>';
        foreach ($categories as $categorie) {
            echo '<tr><td>'. $categorie['id'] .'</td><td>'. $categorie['nom'] .'</td><td>'. $categorie['categories_id'] .'</td><td><a href="ajout.php">Ajouter</a><a href="modif.php">Modifier</a><form method="post" action=""><button type="submit" name="delete_category" value="'. $categorie['id'] .'">Supprimer</button></form></td></tr>';
        }
    
        echo '</table>';
    }


    public static function UpdateCategories($nom,$categories_id, $id){
        $pdo = self::pdo(); 
        $query = $pdo->prepare("UPDATE catégories SET nom = :nom, categories_id = :categories_id WHERE id = :id;");
        $query->bindParam(':nom', $nom);
        $query->bindParam(':categories_id', $categories_id);
        $query->bindParam(':id', $id);
        $query->execute();
        header('Location: admin.php'); 
        exit();
    }
    
    
    
}

if(isset($_POST['delete_category'])){
    $category_id = $_POST['delete_category'];
    Admin::supp_categories($category_id);
}

