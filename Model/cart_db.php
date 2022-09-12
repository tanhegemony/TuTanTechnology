<?php

class CartDB {

    public static function getDiscountCodeByContent($discountCode) {
        $db = Database::getDB();
        $query = "select * from discountcodes where discountCode = :discountCode";
        $statement = $db->prepare($query);
        $statement->bindValue(':discountCode', $discountCode);
        $statement->execute();
        $getDiscountCodeByContent = $statement->fetch();
        $statement->closeCursor();
        return $getDiscountCodeByContent;
    }

    // Show sản phẩm vừa xem hôm nay ở first slide show
    public static function getProductsViewTodayFirst($email) {
        $db = Database::getDB();
        $query = "select * from product as p
	join viewproduct as v
		on v.productName = p.productName
    join accounts as acc
		on acc.accountID = v.accountID
	join productdetails as pd 
		on pd.productID = p.productID
        where convert(v.viewDate, date) = convert(date(now()), date) && acc.email = :email
        group by v.productName order by v.viewDate desc limit 0,5";
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $getProductsViewTodayFirst = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsViewTodayFirst;
    }

    // Show sản phẩm vừa xem hôm nay ở second slide show
    public static function getProductsViewTodaySecond($email) {
        $db = Database::getDB();
        $query = "select * from product as p
	join viewproduct as v
		on v.productName = p.productName
    join accounts as acc
		on acc.accountID = v.accountID
	join productdetails as pd 
		on pd.productID = p.productID
        where convert(v.viewDate, date) = convert(date(now()), date) && acc.email = :email
        group by v.productName order by v.viewDate desc limit 5,5";
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $getProductsViewTodaySecond = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsViewTodaySecond;
    }

    // show sản phẩm ngẫu nhiên
    public static function getProductsRandomFirst() {
        $db = Database::getDB();
        $query = "select * from product order by rand() limit 0,5";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement;
    }

    public static function getProductsRandomSecond() {
        $db = Database::getDB();
        $query = "select * from product order by rand() limit 5,5";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement;
    }

}
?>

