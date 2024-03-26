<?php
require_once('class_base_donnee.php');

class Admin extends base_donnee{
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
        $query = $pdo->prepare("DELETE FROM catégorie WHERE id=$id;");
        $query->execute();
        header('Location: admin.php'); 
        exit();
    }

    public static function admin($categories){
        echo '<table border="1px" cellpadding="30px";><tr><td>Id</td><td>Nom</td><td>CatégoriesId</td></tr>';
        foreach ($categories as $categorie) {
            echo '<tr><td>'. $categorie['id'] .'</td><td>'. $categorie['nom'] .'</td><td>'. $categorie['categories_id'] .'</td><td><a href="ajout.php">Ajouter</a><p>/</p><form method="post" action=""><button>Supprimer</button></a></td></tr>';
        }

        echo '</table>';
    }
}

