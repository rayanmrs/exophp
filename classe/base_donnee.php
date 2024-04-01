<?php

class base_donnee{

    public static function pdo(){
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=actu;charset=utf8mb4;port=3306","root");
        return $pdo;
    }
}