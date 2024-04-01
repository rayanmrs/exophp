<?php

interface AdminInterface {
    public static function getCategories();
    public static function ajoutCategories($nom, $categorie_id);
    public static function suppCategories($id);
    public static function admin($categories);
    public static function updateCategories($nom, $categories_id, $id);
}

?>