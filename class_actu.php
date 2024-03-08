<?php
require_once('class_base_donnee.php');

class Actualite extends base_donnee {
    public $titre; 
    public $date_publication;
    public $date_revision;
    public $auteur;
    public $tags;
    public $sources;

    public function __construct(array $values) {
        $this->titre = $values['titre'];
        $this->date_publication = $values['date_publication'];
        $this->date_revision = $values['date_revision'];
        $this->auteur = $values['auteur'];
        $this->tags = $values['tags'];
        $this->sources = $values['sources'];
    }

    public static function actu($actu) {
        $co = new base_donnee();
        $sql = 'SELECT * FROM article ORDER BY id_article LIMIT 5';
        $stmt = $co->pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($results as $row) {
            $actu = new Actualite($row);
            
        }

        header("Location: index.php");
        exit(); 
    }
}