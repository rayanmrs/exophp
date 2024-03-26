<?php
// Inclusion de la classe de base de données
require_once('class_base_donnee.php');

// Définition de la classe categories qui étend la classe base_donnee
class categories extends base_donnee {
    // Propriétés de la classe
    public $id; // Identifiant de la catégorie
    public $nom; // Nom de la catégorie
    public $categories_id; // ID de la catégorie parente

    // Constructeur de la classe prenant un tableau de valeurs en argument
    public function __construct(array $values) {
        // Initialisation des propriétés avec les valeurs fournies
        $this->id = $values['id'];
        $this->nom = $values['nom'];
        $this->categories_id = $values['categories_id'];
    }

    // Méthode statique pour récupérer les catégories selon certains critères
    public static function getCategories() {
        // Obtention de la connexion PDO à la base de données
        $pdo = self::pdo(); 
        // Exécution d'une requête SQL pour sélectionner les catégories
        $query = $pdo->query("SELECT * FROM catégories WHERE categories_id = 1 or id = 1"); 
        $categories = array(); // Initialisation d'un tableau pour stocker les catégories récupérées
        // Parcours des résultats de la requête
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            // Création d'un objet categories à partir des données de la ligne courante
            $categories[] = new Categories($row);
        }
        // Retourne le tableau des catégories
        return $categories;
    }

    // Méthode statique similaire pour récupérer les catégories selon d'autres critères
    public static function getCategories2() {
        $pdo = self::pdo(); 
        $query = $pdo->query("SELECT * FROM catégories WHERE categories_id = 4 or id = 4"); 
        $categories = array(); 
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = new Categories($row);
        }
        return $categories;
    }

    // Méthode pour afficher les catégories dans un élément de liste déroulante HTML
    public static function categories($categories) {
        // Début de la balise select
        echo '<select id="categories">';
        // Boucle à travers les catégories pour générer les options
        foreach ($categories as $categorie) {
            // Génère une option avec l'identifiant de la catégorie comme valeur et le nom de la catégorie comme texte
            echo '<option value="' . $categorie->id . '">' . $categorie->nom . '</option>';
        }
        // Fin de la balise select
        echo '</select>';
    }
}
