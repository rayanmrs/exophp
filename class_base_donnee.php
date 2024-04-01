<?php

class base_donnee{

    public static function pdo(){
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=actu;charset=utf8mb4;port=3306","root");
        return $pdo;
    }

    public static function affiche(){
        $sql = 'SELECT * FROM article ORDER BY id_article LIMIT 5';
        $temp = base_donnee::pdo()->prepare($sql);
        $temp->execute();
        $results = $temp->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}