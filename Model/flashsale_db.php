<?php

class FlashSaleDB {
    // admin
    public static function deleteFlashsale($flashSaleID) {
        $db = Database::getDB();
        $query = 'DELETE FROM flashsale WHERE flashSaleID = :flashSaleID';
        $statement = $db->prepare($query);
        $statement->bindValue(':flashSaleID', $flashSaleID);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function searchFlashSale($content) {
        $db = Database::getDB();
        $query = "select * from flashsale as f
        join product as p 
        on p.productID = f.productID
        where p.productName like '%$content%'
        order by f.flashSaleID ";
        $statement = $db->prepare($query);
        $statement->execute();
        $flashSales = $statement->fetchAll();
        $statement->closeCursor();
        return $flashSales;
    }
    public static function searchFlashSalePagination($content, $saleNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from flashsale as f
        join product as p 
        on p.productID = f.productID
        where p.productName like '%$content%'
        order by f.flashSaleID limit $saleNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $flashSales = $statement->fetchAll();
        $statement->closeCursor();
        return $flashSales;
    }
    public static function getFlashsales(){
        $db = Database::getDB();
        $query = "select * from flashsale as f
        join product as p 
        on p.productID = f.productID
        order by f.flashSaleID desc";
        $statement = $db->prepare($query);
        $statement->execute();
        $flashSales = $statement->fetchAll();
        $statement->closeCursor();
        return $flashSales;
    }
    public static function getFlashsalesPagination($saleNumber, $offset){
        $db = Database::getDB();
        $query = "select * from flashsale as f
        join product as p 
        on p.productID = f.productID
        order by f.flashSaleID desc limit $saleNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $flashSales = $statement->fetchAll();
        $statement->closeCursor();
        return $flashSales;
    }
    public static function updateFlashSale($flashSaleID, $productID, $discountSale,$finalPriceSale) {
        $db = Database::getDB();
        $query = "update flashsale set productID = :productID, discountSale = :discountSale "
                . " , finalPriceSale = :finalPriceSale "
                . " where flashSaleID = :flashSaleID ";
        $statement = $db->prepare($query);
        $statement->bindValue(':productID', $productID);
        $statement->bindValue(':discountSale', $discountSale);
        $statement->bindValue(':finalPriceSale', $finalPriceSale);
        $statement->bindValue(':flashSaleID', $flashSaleID);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function getFlashSaleByID($flashSaleID) {
        $db = Database::getDB();
        $query = 'SELECT * FROM flashsale as f
            join product as p 
            on p.productID = f.productID WHERE flashSaleID = :flashSaleID ';
        $statement = $db->prepare($query);
        $statement->bindValue(':flashSaleID', $flashSaleID);
        $statement->execute();
        $sale = $statement->fetch();
        $statement->closeCursor();
        return $sale;
    }
    //user
    // show sản phẩm mục flash sale có pagination
    public static function getProductsFlashSalePagination($productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from product as p 
        join flashsale as f 
        on f.productID = p.productID 
        join productdetails as pd 
        on pd.productID = p.productID
        order by f.productID limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $getProductsFlashSalePagination = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsFlashSalePagination;
    }

    //    lấy các sản phẩm có trong bảng product và có trong flashsale
    public static function getProductInFlashSale($productName) {
        $db = Database::getDB();
        $query = "select * from product as p 
join flashsale as f 
on f.productID = p.productID 
where p.productName = :productName";
        $statement = $db->prepare($query);
        $statement->bindValue(':productName', $productName);
        $statement->execute();
        $getProductInFlashSale = $statement->fetch();
        $statement->closeCursor();
        return $getProductInFlashSale;
    }

//    show sản phẩm trong flash sale ở first slide show
    public static function getProductsFlashSaleFirstSlideShow() {
        $db = Database::getDB();
        $query = "select * from flashsale as f 
	join product as p 
		on f.productID = p.productID
        join productdetails as pd
		on pd.productID = p.productID
	order by f.flashSaleID limit 0,5";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement;
    }

    //    show sản phẩm trong flash sale ở first slide show
    public static function getProductsFlashSaleSecondSlideShow() {
        $db = Database::getDB();
        $query = "select * from flashsale as f 
	join product as p 
		on f.productID = p.productID
    join productdetails as pd
		on pd.productID = p.productID
	order by f.flashSaleID   limit 5,5";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement;
    }

//    lấy các sản phẩm có trong bảng product nhưng chưa có trong flashsale
    public static function getProductsNotInFlashSale() {
        $db = Database::getDB();
        $query = "select p.productID, p.productName,p.price from product as p 
	left join flashsale as f 
    on p.productID = f.productID
where p.productID is not null && f.productID is null 
order by p.productID";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement;
    }

//    thêm dữ liệu vào bảng flash sale 
    public static function addProductFlashSale($flashSaleID, $productID, $discountSale, $finalPriceSale) {
        $db = Database::getDB();
        $query = "INSERT INTO flashsale (flashSaleID, productID, discountSale, finalPriceSale) "
                . " values "
                . " (:flashSaleID, :productID, :discountSale, :finalPriceSale)";
        $statement = $db->prepare($query);
        $statement->bindValue(':flashSaleID', $flashSaleID);
        $statement->bindValue(':productID', $productID);
        $statement->bindValue(':discountSale', $discountSale);
        $statement->bindValue(':finalPriceSale', $finalPriceSale);
        $statement->execute();
        $statement->closeCursor();
    }

}
?>

