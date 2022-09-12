<?php


class typecategoryDB {
   
   public static function getTypeCategories(){
        $db = Database::getDB();
        $query = "SELECT * FROM typecategory ORDER BY typeCategoryID";
        $statement = $db->prepare($query);
        $statement->execute();
        $typeCategories = $statement->fetchAll();
        $statement->closeCursor();
        return $typeCategories;
    }
    public static function searchTypeCategory($content) {
        $db = Database::getDB();
        $query = "select * from typecategory 
    where typeCategoryName like '%$content%' order by typeCategoryID";
        $statement = $db->prepare($query);
        $statement->execute();
        $typeCategories = $statement->fetchAll();
        $statement->closeCursor();
        return $typeCategories;
    }
}
