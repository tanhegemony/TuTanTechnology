<?php


class discountcodeDB {
    public static function addDiscountCode($discountCodeID, $discountCode, $valueDiscount) {
        $db = Database::getDB();
        $query = 'INSERT INTO discountcodes
                     (discountCodeID, discountCode, valueDiscount)
                  VALUES
                     (:discountCodeID, :discountCode, :valueDiscount)';
        $statement = $db->prepare($query);
        $statement->bindValue(':discountCodeID', $discountCodeID);
        $statement->bindValue(':discountCode', $discountCode);
        $statement->bindValue(':valueDiscount', $valueDiscount);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function updateDiscountCode($discountCodeID, $discountCode, $valueDiscount) {
        $db = Database::getDB();
        $query = "update discountcodes set discountCode = :discountCode, valueDiscount = :valueDiscount "
                . " where discountCodeID = :discountCodeID ";
        $statement = $db->prepare($query);
        $statement->bindValue(':discountCode', $discountCode);
        $statement->bindValue(':valueDiscount', $valueDiscount);
        $statement->bindValue(':discountCodeID', $discountCodeID);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function getDiscountCodeByID($discountCodeID) {
        $db = Database::getDB();
        $query = 'SELECT * FROM discountcodes WHERE discountCodeID = :discountCodeID ';
        $statement = $db->prepare($query);
        $statement->bindValue(':discountCodeID', $discountCodeID);
        $statement->execute();
        $discountCode = $statement->fetch();
        $statement->closeCursor();
        return $discountCode;
        
    }
    public static function searchDiscountCode($content) {
        $db = Database::getDB();
        $query = "select * from discountcodes where "
                . " discountCode like '%$content%' or valueDiscount like '%$content%' order by discountCodeID ";
        $statement = $db->prepare($query);
        $statement->execute();
        $discountCodes = $statement->fetchAll();
        $statement->closeCursor();
        return $discountCodes;
    }
    public static function searchDiscountCodePagination($content, $discountCodeNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from discountcodes where "
                . " discountCode like '%$content%' or "
                . " valueDiscount like '%$content%' order by discountCodeID limit $discountCodeNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $discountCodes = $statement->fetchAll();
        $statement->closeCursor();
        return $discountCodes;
    }
    public static function getDiscountCodes(){
        $db = Database::getDB();
        $query = "SELECT * FROM discountcodes ORDER BY discountCodeID";
        $statement = $db->prepare($query);
        $statement->execute();
        $discountCodes = $statement->fetchAll();
        $statement->closeCursor();
        return $discountCodes;
    }
    public static function getDiscountCodesPagination($discountCodeNumber, $offset){
        $db = Database::getDB();
        $query = "SELECT * FROM discountcodes ORDER BY discountCodeID limit $discountCodeNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $discountCodes = $statement->fetchAll();
        $statement->closeCursor();
        return $discountCodes;
    }
    public static function deleteDiscountCode($discountCodeID) {
        $db = Database::getDB();
        $query = 'DELETE FROM discountcodes WHERE discountCodeID = :discountCodeID';
        $statement = $db->prepare($query);
        $statement->bindValue(':discountCodeID', $discountCodeID);
        $statement->execute();
        $statement->closeCursor();
    }
}
