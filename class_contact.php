<?php
require_once('class_base_donnee');

class contact{
    public $nom; 
    public $prenom;
    public $mail;

    public function __construct(array $values){

        $this->nom = $values['nom'];
        $this->prenom = $values['prenom'];
        $this->mail = $values['mail'];

    }

    public static function sendcontact($contact){
        $host = '127.0.0.1';
        $db = 'actu';
        $user = 'root';
        $pass = '';
        $port = '3306';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
        $pdo = new PDO($dsn, $user, $pass);

        $sql = 'INSERT INTO contact (nom,prenom,mail) VALUES (:nom,:prenom,:mail)';
        $stmt=$pdo->prepare($sql);
        
        $stmt->bindParam(":prenom", $contact->nom, PDO::PARAM_STR);
        $stmt->bindParam(":nom", $contact->prenom, PDO::PARAM_STR);
        $stmt->bindParam(":mail", $contact->mail, PDO::PARAM_STR);
        $stmt->execute();
        header("Location:index.php");
        
    }
}