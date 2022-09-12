<?php

class ProductDB {
    //admin
    public static function getProductsPaginationAdmin($productNumber, $offset) {
        $db = Database::getDB();
        $query = "SELECT * FROM product ORDER BY productID desc limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $products;
    }
    public static function searchProduct($content) {
        $db = Database::getDB();
        $query = "Select * from product as p
        join category as c
        on c.categoryID = p.categoryID
        where p.productName like '%$content%' 
		or c.categoryName like '%$content%' order by p.productID";
        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $products;
    }

    public static function searchProductPagination($content, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "Select * from product as p
        join category as c
        on c.categoryID = p.categoryID
        where p.productName like '%$content%' 
		or c.categoryName like '%$content%'  order by p.productID limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $products;
    }
    public static function deleteProduct($productID) {
        $db = Database::getDB();
        $query = 'DELETE FROM product WHERE productID = :productID';
        $statement = $db->prepare($query);
        $statement->bindValue(':productID', $productID);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function updateProduct($productID, $productName, $price, $discount,
            $finalPrice, $quantity, $description, $categoryID) {
        $db = Database::getDB();
        $query = "update product set productName = :productName, price = :price, discount = :discount "
                . " , finalPrice = :finalPrice, quantity = :quantity, description = :description, categoryID = :categoryID "
                . " where productID = :productID ";
        $statement = $db->prepare($query);
        $statement->bindValue(':productName', $productName);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':discount', $discount);
        $statement->bindValue(':finalPrice', $finalPrice);
        $statement->bindValue(':quantity', $quantity);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->bindValue(':productID', $productID);
        $statement->execute();
        $statement->closeCursor();
    }
    // user
    // sản phẩm gia dụng và phân trang
    public static function getProductsByAppliancesPagination($productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from product as p join category as c 
	on p.categoryID = c.categoryID
	join productdetails as pd
    on pd.productID = p.productID
    where c.typeCategoryID = '02' order by p.productID desc limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $getProductsByOrder = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsByOrder;
    }

    // sản phẩm quan tâm và phân trang
    public static function getProductsByInterestPagination($productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from product as p
	join viewproduct as v
		on v.productName = p.productName
	join productdetails as pd 
		on pd.productID = p.productID
	group by v.productName order by count(v.productName) desc limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $getProductsByOrder = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsByOrder;
    }

    // sản phẩm bán chạy và phân trang
    public static function getProductsByOrderPagination($productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join orderdetail as od 
    on od.productID = p.productID
    join orders as o 
    on o.orderID = od.orderID
    join productdetails as pd 
    on pd.productID = p.productID
    where o.state = 'Đã giao'
    group by od.productID
    order by count(od.productID) desc, od.productID asc limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $getProductsByOrder = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsByOrder;
    }

    // sản phẩm bán chạy ở first slide
    public static function getProductsByOrderFirst() {
        $db = Database::getDB();
        $query = "select * from product as p 
	join orderdetail as od 
    on od.productID = p.productID
    join orders as o 
    on o.orderID = od.orderID
    join productdetails as pd 
    on pd.productID = p.productID
    where o.state = 'Đã giao'
    group by od.productID
    order by count(od.productID) desc, od.productID asc limit 0,5";
        $statement = $db->prepare($query);
        $statement->execute();
        $getProductsByOrderFirst = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsByOrderFirst;
    }

    // sản phẩm bán chạy ở second slide
    public static function getProductsByOrderSecond() {
        $db = Database::getDB();
        $query = "select * from product as p 
	join orderdetail as od 
    on od.productID = p.productID
    join orders as o 
    on o.orderID = od.orderID
    join productdetails as pd 
    on pd.productID = p.productID
    where o.state = 'Đã giao'
    group by od.productID
    order by count(od.productID) desc, od.productID asc limit 5,5";
        $statement = $db->prepare($query);
        $statement->execute();
        $getProductsByOrderSecond = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsByOrderSecond;
    }

    // lấy productID bằng productName
    public static function getIDByName($productName) {
        $db = Database::getDB();
        $query = "select productID from product where productName = :productName";
        $statement = $db->prepare($query);
        $statement->bindValue(':productName', $productName);
        $statement->execute();
        $getIDByName = $statement->fetch();
        $statement->closeCursor();
        return $getIDByName;
    }

    //nếu truyền vào giá trị tìm kiếm là null thì hiển thị ra toàn sản phẩm
    public static function getProductsBySearch($content) {
        $db = Database::getDB();
        $query = "select * from product as p 
    join category as c 
    on p.categoryID = c.categoryID
join productdetails as pd 
on pd.productID = p.productID "
                . " WHERE productName LIKE '%$content%' "
                . " OR categoryName LIKE '%$content%' "
                . " OR brandSmartphone LIKE '%$content%' "
                . " OR brandLaptop LIKE '%$content%' "
                . " OR brandTablet LIKE '%$content%' "
                . " OR brandPC LIKE '%$content%' "
                . " OR brandWatch LIKE '%$content%' "
                . " OR brandAccessory LIKE '%$content%' "
                . " OR brandTelevision LIKE '%$content%' "
                . " OR brandRefrigerator LIKE '%$content%' "
                . " ORDER BY p.productID";
        $statement = $db->prepare($query);
        $statement->execute();
        $getProductsSearch = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsSearch;
    }

//    tìm kiếm sản phẩm
    public static function getProductsBySearchPagination($content, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from product as p 
    join category as c 
    on p.categoryID = c.categoryID
join productdetails as pd 
on pd.productID = p.productID "
                . " WHERE productName LIKE '%$content%' "
                . " OR categoryName LIKE '%$content%' "
                . " OR brandSmartphone LIKE '%$content%' "
                . " OR brandLaptop LIKE '%$content%' "
                . " OR brandTablet LIKE '%$content%' "
                . " OR brandPC LIKE '%$content%' "
                . " OR brandWatch LIKE '%$content%' "
                . " OR brandAccessory LIKE '%$content%' "
                . " OR brandTelevision LIKE '%$content%' "
                . " OR brandRefrigerator LIKE '%$content%' "
                . " ORDER BY p.productID limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $getProductsBySearch = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsBySearch;
    }

//    lấy thông tin sản phẩm theo productID 
    public static function getProductByProductID($productID) {
        $db = Database::getDB();
        $query = "SELECT * FROM product where productID = :productID";
        $statement = $db->prepare($query);
        $statement->bindValue(':productID', $productID);
        $statement->execute();
        $row = $statement->fetch();
        $product = new Product();
        $product->setProductID($row['productID']);
        $product->setProductName($row['productName']);
        $product->setPrice($row['price']);
        $product->setDiscount($row['discount']);
        $product->setFinalPrice($row['finalPrice']);
        $product->setQuantity($row['quantity']);
        $product->setDescription($row['description']);
        $product->setCategoryID($row['categoryID']);
        return $product;
    }

//    show sản phẩm đc quan tâm 
    public static function getProductsInterest() {
        $db = Database::getDB();
        $query = "select * from product as p
	join viewproduct as v
		on v.productName = p.productName
	join productdetails as pd 
    on pd.productID = p.productID
	group by v.productName order by count(v.productName) desc limit 4";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement;
    }

//    phân trang 
    public static function getProductsPagination($categoryID, $condition, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from product as p 
           join productdetails as pd 
    on pd.productID = p.productID
            where categoryID = :categoryID $condition
    limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $getProductsPagination = $statement->fetchAll();
        $statement->closeCursor();
        return $getProductsPagination;
    }

//    Show sản phẩm được quan tâm theo danh mục
    public static function getProductsInterestByCategory($categoryID) {
        $db = Database::getDB();
        $query = "select * from product as p
	join viewproduct as v
		on v.productName = p.productName
	join productdetails as pd 
		on pd.productID = p.productID
	where p.categoryID = :categoryID
	group by v.productName order by count(v.productName) desc limit 4";
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productsInterestByCategory = $statement->fetchAll();
        $statement->closeCursor();
        return $productsInterestByCategory;
    }

//    show sản phẩm theo danh mục
    public static function getProductsByCategoryID($categoryID, $condition) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd
    on pd.productID  = p.productID
	where categoryID = :categoryID $condition";
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productsByCategoryID = $statement->fetchAll();
        $statement->closeCursor();
        return $productsByCategoryID;
    }

    //    show sản phẩm theo watch first Slide show
    public static function getWatchesFirstSlideShow() {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd  
    on p.productID = pd.productID
    where p.categoryID='05' limit 0,4";
        $statement = $db->prepare($query);
        $statement->execute();
        $getWatchesFirstSlideShow = $statement->fetchAll();
        $statement->closeCursor();
        return $getWatchesFirstSlideShow;
    }

    //    show sản phẩm theo watch second Slide show
    public static function getWatchesSecondSlideShow() {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd  
    on p.productID = pd.productID
    where p.categoryID='05' limit 4,4";
        $statement = $db->prepare($query);
        $statement->execute();
        $getWatchesSecondSlideShow = $statement->fetchAll();
        $statement->closeCursor();
        return $getWatchesSecondSlideShow;
    }

    //    show sản phẩm theo tablet first Slide show
    public static function getTabletsFirstSlideShow() {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd  
    on p.productID = pd.productID
    where p.categoryID='03' limit 0,4";
        $statement = $db->prepare($query);
        $statement->execute();
        $getTabletsFirstSlideShow = $statement->fetchAll();
        $statement->closeCursor();
        return $getTabletsFirstSlideShow;
    }

    //    show sản phẩm theo tablet second Slide show
    public static function getTabletsSecondSlideShow() {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd  
    on p.productID = pd.productID
    where p.categoryID='03' limit 4,4";
        $statement = $db->prepare($query);
        $statement->execute();
        $getTabletsSecondSlideShow = $statement->fetchAll();
        $statement->closeCursor();
        return $getTabletsSecondSlideShow;
    }

    //    show sản phẩm theo smartphone first Slide show
    public static function getSmartphonesFirstSlideShow() {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd  
    on p.productID = pd.productID
    where p.categoryID='01' limit 0,4";
        $statement = $db->prepare($query);
        $statement->execute();
        $getSmartphonesFirstSlideShow = $statement->fetchAll();
        $statement->closeCursor();
        return $getSmartphonesFirstSlideShow;
    }

    //    show sản phẩm theo smartphone second Slide show
    public static function getSmartphonesSecondSlideShow() {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd  
    on p.productID = pd.productID
    where p.categoryID='01' limit 4,4";
        $statement = $db->prepare($query);
        $statement->execute();
        $getSmartphonesSecondSlideShow = $statement->fetchAll();
        $statement->closeCursor();
        return $getSmartphonesSecondSlideShow;
    }

    //    show sản phẩm theo laptop first Slide show
    public static function getLaptopsFirstSlideShow() {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd  
    on p.productID = pd.productID
    where p.categoryID='02' limit 0,5";
        $statement = $db->prepare($query);
        $statement->execute();
        $getLaptopsFirstSlideShow = $statement->fetchAll();
        $statement->closeCursor();
        return $getLaptopsFirstSlideShow;
    }

    //    show sản phẩm theo laptop second Slide show
    public static function getLaptopsSecondSlideShow() {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd  
    on p.productID = pd.productID
    where p.categoryID='02' limit 5,5";
        $statement = $db->prepare($query);
        $statement->execute();
        $getLaptopsSecondSlideShow = $statement->fetchAll();
        $statement->closeCursor();
        return $getLaptopsSecondSlideShow;
    }

//    show sản phẩm theo gia dụng first Slide show
    public static function getAppliancesFirstSlideShow() {
        $db = Database::getDB();
        $query = "select * from product as p join category as c 
	on p.categoryID = c.categoryID
	join productdetails as pd
    on pd.productID = p.productID
    where c.typeCategoryID = '02' order by p.productID limit 0,5";
        $statement = $db->prepare($query);
        $statement->execute();
        $getAppliancesFirstSlideShow = $statement->fetchAll();
        $statement->closeCursor();
        return $getAppliancesFirstSlideShow;
    }

    //    show sản phẩm theo gia dụng first Slide show
    public static function getAppliancesSecondSlideShow() {
        $db = Database::getDB();
        $query = "select * from product as p join category as c 
	on p.categoryID = c.categoryID
	join productdetails as pd
    on pd.productID = p.productID
    where c.typeCategoryID = '02' order by p.productID limit 5,5";
        $statement = $db->prepare($query);
        $statement->execute();
        $getAppliancesSecondSlideShow = $statement->fetchAll();
        $statement->closeCursor();
        return $getAppliancesSecondSlideShow;
    }

    //    lấy thông tin đánh giá
    public static function getRateProducts($productName) {
        $db = Database::getDB();
        $query = "select * from rate as r join accounts as a
		on r.accountID = a.accountID
        where r.productName = :productName";
        $statement = $db->prepare($query);
        $statement->bindValue(':productName', $productName);
        $statement->execute();
        $accountsOfRateTable = $statement->fetchAll();
        $statement->closeCursor();
        return $accountsOfRateTable;
    }

//    show sản phẩm được quan tâm nhất ở first slide show
    public static function getFirstSlideShowInterestOfProducts() {
        $db = Database::getDB();
        $query = "select * from product as p
	join viewproduct as v
		on v.productName = p.productName
	join productdetails as pd 
		on pd.productID = p.productID
	group by v.productName order by count(v.productName) desc limit 0,5";
        $statement = $db->prepare($query);
        $statement->execute();
        $getFirstSlideShowInterestOfProducts = $statement->fetchAll();
        $statement->closeCursor();
        return $getFirstSlideShowInterestOfProducts;
    }

    //    show sản phẩm được quan tâm nhất ở second slide show
    public static function getSecondSlideShowInterestOfProducts() {
        $db = Database::getDB();
        $query = "select * from product as p
	join viewproduct as v
		on v.productName = p.productName
	join productdetails as pd 
		on pd.productID = p.productID
	group by v.productName order by count(v.productName) desc limit 5,5";
        $statement = $db->prepare($query);
        $statement->execute();
        $getSecondSlideShowInterestOfProducts = $statement->fetchAll();
        $statement->closeCursor();
        return $getSecondSlideShowInterestOfProducts;
    }

//    show đánh giá sao theo từng sản phẩm
    public static function getRateStarProduct($productName) {
        $db = Database::getDB();
        $query = "Select * from rate where productName = :productName";
        $statement = $db->prepare($query);
        $statement->bindValue(':productName', $productName);
        $statement->execute();
        $rates = $statement->fetchAll();
        $statement->closeCursor();
        return $rates;
    }

//    đánh giá sao sản phẩm
    public static function rateStarProduct($rateID, $accountID, $productName, $rateStarNumber, $content, $timeRate) {
        $db = Database::getDB();
        $query = "INSERT INTO Rate (rateID, accountID, productName, rateStarNumber,content, timeRate)"
                . " values "
                . " (:rateID, :accountID, :productName, :rateStarNumber,:content, :timeRate)";
        $statement = $db->prepare($query);
        $statement->bindValue(':rateID', $rateID);
        $statement->bindValue(':accountID', $accountID);
        $statement->bindValue(':productName', $productName);
        $statement->bindValue(':rateStarNumber', $rateStarNumber);
        $statement->bindValue(':content', $content);
        $statement->bindValue(':timeRate', $timeRate);
        $statement->execute();
        $statement->closeCursor();
    }

    //    show các sản phẩm khác ở First Slide
    public static function showProductOther1($categoryID) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd
    on pd.productID = p.productID
	where categoryID not in (:categoryID)
order by p.productID
limit 0,5";
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productOther1s = $statement->fetchAll();
        $statement->closeCursor();
        return $productOther1s;
    }

    //    show các sản phẩm khác ở First Slide
    public static function showProductOther2($categoryID) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd
    on pd.productID = p.productID
	where categoryID not in (:categoryID)
order by p.productID
limit 5,5";
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productOther2s = $statement->fetchAll();
        $statement->closeCursor();
        return $productOther2s;
    }

//    show các sản phẩm khác của danh mục đó ở First Slide
    public static function showProductOfCategoryOther1($productName, $categoryID) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd
    on pd.productID = p.productID
	where productName not in (:productName) and categoryID = :categoryID
order by p.productID
limit 0,5";
        $statement = $db->prepare($query);
        $statement->bindValue(':productName', $productName);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productOfCategoryOther1s = $statement->fetchAll();
        $statement->closeCursor();
        return $productOfCategoryOther1s;
    }

    //    show các sản phẩm khác của danh mục đó ở Second Slide
    public static function showProductOfCategoryOther2($productName, $categoryID) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd
    on pd.productID = p.productID
	where productName not in (:productName) and categoryID = :categoryID
order by p.productID
limit 5,5";
        $statement = $db->prepare($query);
        $statement->bindValue(':productName', $productName);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productOfCategoryOther2s = $statement->fetchAll();
        $statement->closeCursor();
        return $productOfCategoryOther2s;
    }

//    khi click vào sản phẩm thì sẽ insert sản phẩm đó vào table đã xem
    public static function addViewProducts($viewProductID, $productName, $accountID, $viewDate) {
        $db = Database::getDB();
        $query = "INSERT INTO viewproduct (viewProductID, productName, accountID, viewDate)"
                . " value "
                . " (:viewProductID, :productName, :accountID, :viewDate)";
        $statement = $db->prepare($query);
        $statement->bindValue(':viewProductID', $viewProductID);
        $statement->bindValue(':productName', $productName);
        $statement->bindValue(':accountID', $accountID);
        $statement->bindValue(':viewDate', $viewDate);
        $statement->execute();
        $statement->closeCursor();
    }

//    product detail
    public static function productDetail($productName) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join category as c 
                on p.categoryID = c.categoryID
	join productdetails as pd 
    on pd.productID = p.productID
	where  p.productName = :productName";
        $statement = $db->prepare($query);
        $statement->bindValue(':productName', $productName);
        $statement->execute();
        $row = $statement->fetch();
        $product = new Product();
        $product->setProductID($row['productID']);
        $product->setProductName($row['productName']);
        $product->setPrice($row['price']);
        $product->setDiscount($row['discount']);
        $product->setQuantity($row['quantity']);
        $product->setFinalPrice($row['finalPrice']);
        $product->setCategoryID($row['categoryID']);
        $product->setDescription($row['description']);
//        Thông tin danh mục 
        $product->setCategoryName($row['categoryName']);
//        Điện thoại
        $product->setBrandSmartphone($row['brandSmartphone']);
        $product->setTypeSmartphone($row['typeSmartphone']);
        $product->setFunctionSmartphone($row['functionSmartphone']);
        $product->setConfigurationSmartphone($row['configurationSmartphone']);
        $product->setBatteryTechnologySmartphone($row['batteryTechnologySmartphone']);
        $product->setSizeBatterySmartphone($row['sizeBatterySmartphone']);
        $product->setChargerSmartphone($row['chargerSmartphone']);
        $product->setRamSmartphone($row['ramSmartphone']);
        $product->setInternalMemorySmartphone($row['internalMemorySmartphone']);
        $product->setDesignSmartphone($row['designSmartphone']);
        $product->setColorSmartphone($row['colorSmartphone']);
        $product->setChipSmartphone($row['chipSmartphone']);
        $product->setSimSmartphone($row['simSmartphone']);
        $product->setScreenSmartphone($row['screenSmartphone']);
        $product->setScreenTechnologySmartphone($row['screenTechnologySmartphone']);
        $product->setSizeScreenSmartphone($row['sizeScreenSmartphone']);
        $product->setOperatingSystemSmartphone($row['operatingSystemSmartphone']);
        $product->setCameraSmartphone($row['cameraSmartphone']);
        $product->setFrontCameraSmartphone($row['frontCameraSmartphone']);
        $product->setRearCameraSmartphone($row['rearCameraSmartphone']);
        $product->setSpecialFeaturesSmartphone($row['specialFeaturesSmartphone']);
//        Laptop
        $product->setBrandLaptop($row['brandLaptop']);
        $product->setCpuLaptop($row['cpuLaptop']);
        $product->setRamLaptop($row['ramLaptop']);
        $product->setHardDriverLaptop($row['hardDriverLaptop']);
        $product->setGraphicsCardLaptop($row['graphicsCardLaptop']);
        $product->setSizeScreenLaptop($row['sizeScreenLaptop']);
        $product->setScreenResolutionLaptop($row['screenResolutionLaptop']);
        $product->setSweepFrequencyLaptop($row['sweepFrequencyLaptop']);
        $product->setUsageNeedLaptop($row['usageNeedLaptop']);
        $product->setOperatingSystemLaptop($row['operatingSystemLaptop']);
        $product->setSizeLaptop($row['sizeLaptop']);
        $product->setWeightLaptop($row['weightLaptop']);
//        Máy tính bảng
        $product->setBrandTablet($row['brandTablet']);
        $product->setRamTablet($row['ramTablet']);
        $product->setInternalMemoryTablet($row['internalMemoryTablet']);
        $product->setScreenTablet($row['screenTablet']);
        $product->setOperatingSystemTablet($row['operatingSystemTablet']);
        $product->setChipTablet($row['chipTablet']);
        $product->setFrontCameraTablet($row['frontCameraTablet']);
        $product->setRearCameraTablet($row['rearCameraTablet']);
        $product->setPinTablet($row['pinTablet']);
        $product->setChargerTablet($row['chargerTablet']);
//        PC
        $product->setBrandPC($row['brandPC']);
        $product->setCpuPC($row['cpuPC']);
        $product->setRamPC($row['ramPC']);
        $product->setHardDriverPC($row['hardDriverPC']);
        $product->setGraphicsCardPC($row['graphicsCardPC']);
        $product->setUsageNeedPC($row['usageNeedPC']);
        $product->setSizePC($row['sizePC']);
        $product->setWeightPC($row['weightPC']);
//        Đồng hồ
        $product->setBrandWatch($row['brandWatch']);
        $product->setTypeWatch($row['typeWatch']);
        $product->setFaceShapeWatch($row['faceShapeWatch']);
        $product->setBandMaterialWatch($row['bandMaterialWatch']);
        $product->setScreenWatch($row['screenWatch']);
        $product->setSizeScreenWatch($row['sizeScreenWatch']);
        $product->setBatteryLifeWatch($row['batteryLifeWatch']);
        $product->setSizeBatteryWatch($row['sizeBatteryWatch']);
//        Phụ kiện
        $product->setTypeAccessory($row['typeAccessory']);
        $product->setTypeProductOfAccessory($row['typeProductOfAccessory']);
        $product->setBrandAccessory($row['brandAccessory']);
        $product->setCompatibleAccessory($row['compatibleAccessory']);
        $product->setSizeAccessory($row['sizeAccessory']);
        $product->setWeightAccessory($row['weightAccessory']);
//        TV
        $product->setBrandTelevision($row['brandTelevision']);
        $product->setSizeScreenTelevision($row['sizeScreenTelevision']);
        $product->setResolutionTelevision($row['resolutionTelevision']);
        $product->setTypeTelevision($row['typeTelevision']);
        $product->setOperatingSystemTelevision($row['operatingSystemTelevision']);
        $product->setSizeTelevision($row['sizeTelevision']);
//        Tủ lạnh
        $product->setBrandRefrigerator($row['brandRefrigerator']);
        $product->setTypeRefrigerator($row['typeRefrigerator']);
        $product->setUseCapacityRefrigerator($row['useCapacityRefrigerator']);
        $product->setFreezerCapacityRefrigerator($row['freezerCapacityRefrigerator']);
        $product->setCoolCompartmentRefrigerator($row['coolCompartmentRefrigerator']);
        $product->setPowerConsumptionRefrigerator($row['powerConsumptionRefrigerator']);
        $product->setEnergySavingTechnologyRefrigerator($row['energySavingTechnologyRefrigerator']);
        $product->setCoolTechnologyRefrigerator($row['coolTechnologyRefrigerator']);
        $product->setAnti_odorTechnologyRefrigerator($row['anti_odorTechnologyRefrigerator']);
        $product->setFoodPreservationTechnologyRefrigerator($row['foodPreservationTechnologyRefrigerator']);
        $product->setSizeRefrigerator($row['sizeRefrigerator']);
        $product->setMassRefrigerator($row['massRefrigerator']);
        return $product;
    }

//        lấy các sản phẩm
    public static function getProducts() {
        $db = Database::getDB();
        $query = "SELECT * FROM product ORDER BY productID desc";
        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $products;
    }

    public static function addProduct($productID, $productName, $price, $discount,
            $finalPrice, $quantity, $description, $categoryID) {
        $db = Database::getDB();
        $query = 'INSERT INTO product (productID, productName, price, '
                . ' discount, finalPrice, quantity, description,'
                . ' categoryID) values (:productID, :productName, :price,'
                . ' :discount, :finalPrice, :quantity,'
                . ' :description, :categoryID)';
        $statement = $db->prepare($query);
        $statement->bindValue(':productID', $productID);
        $statement->bindValue(':productName', $productName);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':discount', $discount);
        $statement->bindValue(':finalPrice', $finalPrice);
        $statement->bindValue(':quantity', $quantity);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $statement->closeCursor();
    }

}
?>

