<?php

class rateDB {
    public static function getRatesCondition($timeRate1) {
        $db = Database::getDB();
        $query = "select * from rate where convert(timeRate, datetime) > convert(:timeRate1, datetime) ";
        $statement = $db->prepare($query);
        $statement->bindValue(':timeRate1', $timeRate1);
        $statement->execute();
        $rates = $statement->fetchAll();
        $statement->closeCursor();
        return $rates;
    }
    public static function searchRateOrComment($content) {
        $db = Database::getDB();
        $query = "select * from rate as r
        join product as p 
        on p.productName = r.productName
        join accounts as a
        on a.accountID = r.accountID
        where r.productName like '%$content%' "
                . "or r.rateStarNumber = '%$content%' or a.email like '%$content%' order by r.rateID";
        $statement = $db->prepare($query);
        $statement->execute();
        $rates = $statement->fetchAll();
        $statement->closeCursor();
        return $rates;
    }
    public static function searchRateOrCommentPagination($content, $rateNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from rate as r
        join product as p 
        on p.productName = r.productName
        join accounts as a
        on a.accountID = r.accountID
        where r.productName like '%$content%' "
                . "or r.rateStarNumber = '%$content%' or a.email like '%$content%' order by r.rateID limit $rateNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $rates = $statement->fetchAll();
        $statement->closeCursor();
        return $rates;
    }
    public static function getRates() {
        $db = Database::getDB();
        $query = "SELECT * FROM rate ORDER BY rateID";
        $statement = $db->prepare($query);
        $statement->execute();
        $rates = $statement->fetchAll();
        $statement->closeCursor();
        return $rates;
    }
    public static function getRatesPagination($rateNumber, $offset) {
        $db = Database::getDB();
        $query = "SELECT * FROM rate ORDER BY rateID limit $rateNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $rates = $statement->fetchAll();
        $statement->closeCursor();
        return $rates;
    }

}
