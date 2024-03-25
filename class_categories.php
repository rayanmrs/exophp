<?php
require_once('class_base_donnee.php');
class categories extends base_donnee {
    public $id; 
    public $nom;
    public $categories_id;

    

    public function __construct(array $values) {
        $this->id = $values['id'];
        $this->nom = $values['nom'];
        $this->categories_id = $values['categories_id'];
    }

    public static function getCategories() {
        $pdo = self::pdo(); 
        $query = $pdo->query("SELECT * FROM catégories WHERE categories_id = 1 or categories_id = null or id = 1"); 

        $categories = array(); 
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = new Categories($row);
        }
        return $categories;
    }

    public static function categories($categories) {
        echo '<select id="categories">';
        foreach ($categories as $categorie) {
            echo '<option value="' . $categorie->id . '">' . $categorie->nom . '</option>';
        }
        echo '</select>';
        

}

}
