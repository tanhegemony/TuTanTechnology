<?php

class CategoryDB {
    // admin
    public static function getCategoriesAdmin(){
        $db = Database::getDB();
         $query = 'SELECT * FROM category ORDER BY categoryID desc';
         $statement = $db->prepare($query);
        $statement->execute();
        $categories = $statement->fetchAll();
        $statement->closeCursor();
        return $categories;
     }
     public static function deleteCategory($categoryID) {
        $db = Database::getDB();
        $query = 'DELETE FROM category WHERE categoryID = :categoryID';
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $statement->closeCursor();
     }
     public static function searchCategory($content) {
        $db = Database::getDB();
        $query = "select * from category as c
	join typecategory as tc 
    on tc.typeCategoryID = c.typeCategoryID
    where c.categoryName like '%$content%' or tc.typeCategoryName like '%$content%' order by c.categoryID";
        $statement = $db->prepare($query);
        $statement->execute();
        $categories = $statement->fetchAll();
        $statement->closeCursor();
        return $categories;
    }
     public static function addCategory($categoryID, $categoryName, $typeCategoryID) {
        $db = Database::getDB();
        $query = "insert into category(categoryID, categoryName, typeCategoryID) values"
                . " (:categoryID, :categoryName, :typeCategoryID)";
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->bindValue(':categoryName', $categoryName);
        $statement->bindValue(':typeCategoryID', $typeCategoryID);
        $statement->execute();
        return $statement;
    }
     public static function updateCategory($categoryID, $categoryName, $typeCategoryID) {
        $db = Database::getDB();
        $query = "update category set categoryName = :categoryName, typeCategoryID = :typeCategoryID"
                . " where categoryID = :categoryID ";
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryName', $categoryName);
        $statement->bindValue(':typeCategoryID', $typeCategoryID);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $statement->closeCursor();
    }
    //user
//        show ra tên loại danh mục
    public static function getTypeCategories() {
        $db = Database::getDB();
        $query = "SELECT * FROM typecategory order by typeCategoryID";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement;
    }

//        show tên danh mục theo tên loại danh mục
    public static function getCategories($typeCategoryID) {
        $db = Database::getDB();
        $query = "SELECT * FROM category where typeCategoryID = :typeCategoryID";
        $statement = $db->prepare($query);
        $statement->bindValue(':typeCategoryID', $typeCategoryID);
        $statement->execute();
        $categories = $statement->fetchAll();
        $statement->closeCursor();
        return $categories;
    }

//        show tên danh mục theo ID
    public static function getCategoryByCategoryID($categoryID) {
        $db = Database::getDB();
        $query = "SELECT * FROM category where categoryID = :categoryID";
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $row = $statement->fetch();
        $category = new Category();
        $category->setCategoryID($row['categoryID']);
        $category->setCategoryName($row['categoryName']);
        $category->setTypeCategoryID($row['typeCategoryID']);
        return $category;
    }

}
?>

