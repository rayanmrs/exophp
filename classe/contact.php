<?php
require_once('classe/base_donnee.php');

class contact extends base_donnee{
    public $nom; 
    public $prenom;
    public $mail;

    public function __construct(array $values){

        $this->nom = $values['nom'];
        $this->prenom = $values['prenom'];
        $this->mail = $values['mail'];

    }

    public static function sendcontact($contact){
        $pdo = self::pdo();
        $stmt = $pdo->prepare('INSERT INTO contact (nom, prenom, mail) VALUES (:nom, :prenom, :mail)');
        $stmt->bindParam(":nom", $contact->nom, PDO::PARAM_STR);
        $stmt->bindParam(":prenom", $contact->prenom, PDO::PARAM_STR);
        $stmt->bindParam(":mail", $contact->mail, PDO::PARAM_STR);
        $stmt->execute();
        header("Location: index.php");
        exit();
    }
}