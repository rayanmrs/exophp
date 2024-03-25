<?php
require_once('class_base_donnee.php');

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
        $sql = 'INSERT INTO contact (nom,prenom,mail) VALUES (:nom,:prenom,:mail)';
        $stmt = base_donnee::ajout($sql);
        $stmt->bindParam(":nom", $contact->nom, PDO::PARAM_STR);
        $stmt->bindParam(":prenom", $contact->prenom, PDO::PARAM_STR);
        $stmt->bindParam(":mail", $contact->mail, PDO::PARAM_STR);
        $stmt->execute();
        header("Location:index.php");
        exit();
        
    }
}