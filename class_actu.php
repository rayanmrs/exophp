<?php
require_once('class_base_donnee.php');

class Actualite extends base_donnee {
    
    public $titre; 
    public $date_publication;
    public $date_revision;
    public $auteur;
    public $tags;
    public $sources;
    public $image;

    public function __construct(array $values) {
        $this->titre = $values['titre'];
        $this->date_publication = $values['date_publication'];
        $this->date_revision = $values['date_revision'];
        $this->auteur = $values['auteur'];
        $this->tags = $values['tags'];
        $this->sources = $values['sources'];
        $this->image = $values['image'];
    }

    public static function actu($results) {
        $actus = array(); 
    
        foreach ($results as $row) {
            $actu = new Actualite($row);
            $actus[] = $actu;
    
            // Récupérer l'image à partir de la colonne BLOB de la base de données
            $imageData = $row['image'];
            $imageSrc = 'data:image/jpeg;base64,' . base64_encode($imageData); // Encodage en base64
    
            echo '<a href="article1.php"><div class="article">
            <h1>' . $actu->titre . '</h1>
            <p>Date de publication :  ' . $actu->date_publication . '</p>
            <p>Date de révision :  ' . $actu->date_revision . '</p>
            <p>Auteur :  ' . $actu->auteur . '</p>
            <p>Tags :  ' . $actu->tags . '</p>
            <p>Sources :  ' . $actu->sources . '</p>
            <img class = "img-article" src="' . $imageSrc . '" alt="Image d\'actualité">
            </div></a>';
        }
        return $actus;
    }
    
}
