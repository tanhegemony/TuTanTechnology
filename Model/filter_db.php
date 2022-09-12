<?php

class FilterDB {

    // show product hightlight có phân trang
    public static function filterProductHightlightPagination($categoryID, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from product as p
	join productdetails as pd 
        on pd.productID = p.productID
        join orderdetail as od 
        on od.productID = p.productID
        join orders as o 
        on o.orderID = od.orderID
        where p.categoryID = :categoryID && o.state = 'Đang chờ duyệt' limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productsByCategory = $statement->fetchAll();
        $statement->closeCursor();
        return $productsByCategory;
    }

    // show product hightlight
    public static function filterProductHightlight($categoryID) {
        $db = Database::getDB();
        $query = "select * from product as p
	join productdetails as pd 
        on pd.productID = p.productID
        join orderdetail as od 
        on od.productID = p.productID
        join orders as o 
        on o.orderID = od.orderID
        where p.categoryID = :categoryID && o.state = 'Đang chờ duyệt'";
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productsByCategory = $statement->fetchAll();
        $statement->closeCursor();
        return $productsByCategory;
    }

    public static function getFilterProducts($startPrice, $endPrice, $lastMaxPrice,
            $brandSmartphone, $typeSmartphone, $functionSmartphone, $configurationSmartphone,
            $sizeBatterySmartphone, $batteryTechnologySmartphone, $ramSmartphone, $internalMemorySmartphone,
            $cameraSmartphone, $specialFeaturesSmartphone, $designSmartphone, $screenSmartphone,
            $sizeScreenSmartphone,
            $brandLaptop, $usageNeedLaptop, $sizeScreenLaptop, $cpuLaptop, $ramLaptop, $graphicsCardLaptop,
            $hardDriverLaptop, $screenResolutionLaptop, $sweepFrequencyLaptop,
            $brandTablet, $screenTablet1, $screenTablet2, $screenTablet3, $ramTablet, $internalMemoryTablet,
            $brandPC, $cpuPC, $ramPC, $hardDriverPC, $graphicsCardPC, $usageNeedPC,
            $brandWatch, $typeWatch, $batteryLifeWatch1, $batteryLifeWatch2, $batteryLifeWatch3,
            $faceShapeWatch, $bandMaterialWatch, $brandAccessory, $typeAccessory, $compatibleAccessory,
            $brandTelevision, $sizeScreenTelevision, $resolutionTelevision, $typeTelevision,
            $brandRefrigerator, $typeRefrigerator, $useCapacityRefrigerator1, $useCapacityRefrigerator2
            , $useCapacityRefrigerator3,
            $categoryID) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd 
    on pd.productID = p.productID
    where ( p.finalPrice between :startPrice and :endPrice or p.finalPrice>:lastMaxPrice
    
    or pd.brandSmartphone = :brandSmartphone or pd.typeSmartphone = :typeSmartphone 
    or pd.functionSmartphone = :functionSmartphone or pd.configurationSmartphone = :configurationSmartphone
    or pd.sizeBatterySmartphone >= :sizeBatterySmartphone or pd.batteryTechnologySmartphone = :batteryTechnologySmartphone 
    or pd.ramSmartphone = :ramSmartphone or pd.internalMemorySmartphone = :internalMemorySmartphone 
    or pd.cameraSmartphone = :cameraSmartphone
    or pd.specialFeaturesSmartphone = :specialFeaturesSmartphone or pd.designSmartphone = :designSmartphone 
    or pd.screenSmartphone = :screenSmartphone 
    or convert(substring_index(substring_index(pd.sizeScreenSmartphone, ' ',-1), '\"',1), double) >= :sizeScreenSmartphone
    
    or pd.brandLaptop = :brandLaptop or pd.usageNeedLaptop = :usageNeedLaptop or pd.sizeScreenLaptop = :sizeScreenLaptop 
    or pd.cpuLaptop = :cpuLaptop or pd.ramLaptop = :ramLaptop or pd.graphicsCardLaptop = :graphicsCardLaptop 
    or pd.hardDriverLaptop = :hardDriverLaptop or pd.screenResolutionLaptop = :screenResolutionLaptop 
    or pd.sweepFrequencyLaptop = :sweepFrequencyLaptop 
    
    or pd.brandTablet = :brandTablet or convert(substring_index(pd.screenTablet, '\"',1), double) between :screenTablet1 and :screenTablet2 
    or convert(substring_index(pd.screenTablet, '\"',1), double) > :screenTablet3 
    or pd.ramTablet = :ramTablet or pd.internalMemoryTablet = :internalMemoryTablet 
    
    or pd.brandPC = :brandPC or pd.cpuPC = :cpuPC or pd.ramPC = :ramPC or pd.hardDriverPC = :hardDriverPC 
    or pd.graphicsCardPC = :graphicsCardPC or pd.usageNeedPC = :usageNeedPC 
    
    or pd.brandWatch = :brandWatch or pd.typeWatch = :typeWatch 
    or convert(substring_index(substring_index(pd.batteryLifeWatch, ' ',-2), ' ', 1), double) between :batteryLifeWatch1 and :batteryLifeWatch2 
    or convert(substring_index(substring_index(pd.batteryLifeWatch, ' ',-2), ' ', 1), double) > :batteryLifeWatch3
    or pd.faceShapeWatch = :faceShapeWatch or pd.bandMaterialWatch = :bandMaterialWatch
    
    or pd.brandAccessory = :brandAccessory or pd.typeAccessory = :typeAccessory 
    or pd.compatibleAccessory = :compatibleAccessory
    
    or pd.brandTelevision = :brandTelevision or pd.sizeScreenTelevision = :sizeScreenTelevision 
    or pd.resolutionTelevision = :resolutionTelevision 
    or pd.typeTelevision = :typeTelevision 
   
    or pd.brandRefrigerator = :brandRefrigerator or pd.typeRefrigerator = :typeRefrigerator 
    or pd.useCapacityRefrigerator between :useCapacityRefrigerator1 and :useCapacityRefrigerator2 
    or pd.useCapacityRefrigerator > :useCapacityRefrigerator3
    )
    && categoryID = :categoryID order by p.productID";
        $statement = $db->prepare($query);
        $statement->bindValue(':startPrice', $startPrice);
        $statement->bindValue(':endPrice', $endPrice);
        $statement->bindValue(':lastMaxPrice', $lastMaxPrice);

        $statement->bindValue(':brandSmartphone', $brandSmartphone);
        $statement->bindValue(':typeSmartphone', $typeSmartphone);
        $statement->bindValue(':functionSmartphone', $functionSmartphone);
        $statement->bindValue(':configurationSmartphone', $configurationSmartphone);
        $statement->bindValue(':sizeBatterySmartphone', $sizeBatterySmartphone);
        $statement->bindValue(':batteryTechnologySmartphone', $batteryTechnologySmartphone);
        $statement->bindValue(':ramSmartphone', $ramSmartphone);
        $statement->bindValue(':internalMemorySmartphone', $internalMemorySmartphone);
        $statement->bindValue(':cameraSmartphone', $cameraSmartphone);
        $statement->bindValue(':specialFeaturesSmartphone', $specialFeaturesSmartphone);
        $statement->bindValue(':designSmartphone', $designSmartphone);
        $statement->bindValue(':screenSmartphone', $screenSmartphone);
        $statement->bindValue(':sizeScreenSmartphone', $sizeScreenSmartphone);

        $statement->bindValue(':brandLaptop', $brandLaptop);
        $statement->bindValue(':usageNeedLaptop', $usageNeedLaptop);
        $statement->bindValue(':sizeScreenLaptop', $sizeScreenLaptop);
        $statement->bindValue(':cpuLaptop', $cpuLaptop);
        $statement->bindValue(':ramLaptop', $ramLaptop);
        $statement->bindValue(':graphicsCardLaptop', $graphicsCardLaptop);
        $statement->bindValue(':hardDriverLaptop', $hardDriverLaptop);
        $statement->bindValue(':screenResolutionLaptop', $screenResolutionLaptop);
        $statement->bindValue(':sweepFrequencyLaptop', $sweepFrequencyLaptop);

        $statement->bindValue(':brandTablet', $brandTablet);
        $statement->bindValue(':screenTablet1', $screenTablet1);
        $statement->bindValue(':screenTablet2', $screenTablet2);
        $statement->bindValue(':screenTablet3', $screenTablet3);
        $statement->bindValue(':ramTablet', $ramTablet);
        $statement->bindValue(':internalMemoryTablet', $internalMemoryTablet);

        $statement->bindValue(':brandPC', $brandPC);
        $statement->bindValue(':cpuPC', $cpuPC);
        $statement->bindValue(':ramPC', $ramPC);
        $statement->bindValue(':hardDriverPC', $hardDriverPC);
        $statement->bindValue(':graphicsCardPC', $graphicsCardPC);
        $statement->bindValue(':usageNeedPC', $usageNeedPC);

        $statement->bindValue(':brandWatch', $brandWatch);
        $statement->bindValue(':typeWatch', $typeWatch);
        $statement->bindValue(':batteryLifeWatch1', $batteryLifeWatch1);
        $statement->bindValue(':batteryLifeWatch2', $batteryLifeWatch2);
        $statement->bindValue(':batteryLifeWatch3', $batteryLifeWatch3);
        $statement->bindValue(':faceShapeWatch', $faceShapeWatch);
        $statement->bindValue(':bandMaterialWatch', $bandMaterialWatch);

        $statement->bindValue(':brandAccessory', $brandAccessory);
        $statement->bindValue(':typeAccessory', $typeAccessory);
        $statement->bindValue(':compatibleAccessory', $compatibleAccessory);

        $statement->bindValue(':brandTelevision', $brandTelevision);
        $statement->bindValue(':sizeScreenTelevision', $sizeScreenTelevision);
        $statement->bindValue(':resolutionTelevision', $resolutionTelevision);
        $statement->bindValue(':typeTelevision', $typeTelevision);

        $statement->bindValue(':brandRefrigerator', $brandRefrigerator);
        $statement->bindValue(':typeRefrigerator', $typeRefrigerator);
        $statement->bindValue(':useCapacityRefrigerator1', $useCapacityRefrigerator1);
        $statement->bindValue(':useCapacityRefrigerator2', $useCapacityRefrigerator2);
        $statement->bindValue(':useCapacityRefrigerator3', $useCapacityRefrigerator3);

        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productsByCategory = $statement->fetchAll();
        $statement->closeCursor();
        return $productsByCategory;
    }

    public static function getFilterProductsPagination($startPrice, $endPrice, $lastMaxPrice,
            $brandSmartphone, $typeSmartphone, $functionSmartphone, $configurationSmartphone,
            $sizeBatterySmartphone, $batteryTechnologySmartphone, $ramSmartphone, $internalMemorySmartphone,
            $cameraSmartphone, $specialFeaturesSmartphone, $designSmartphone, $screenSmartphone,
            $sizeScreenSmartphone,
            $brandLaptop, $usageNeedLaptop, $sizeScreenLaptop, $cpuLaptop, $ramLaptop, $graphicsCardLaptop,
            $hardDriverLaptop, $screenResolutionLaptop, $sweepFrequencyLaptop,
            $brandTablet, $screenTablet1, $screenTablet2, $screenTablet3, $ramTablet, $internalMemoryTablet,
            $brandPC, $cpuPC, $ramPC, $hardDriverPC, $graphicsCardPC, $usageNeedPC,
            $brandWatch, $typeWatch, $batteryLifeWatch1, $batteryLifeWatch2, $batteryLifeWatch3,
            $faceShapeWatch, $bandMaterialWatch, $brandAccessory, $typeAccessory, $compatibleAccessory,
            $brandTelevision, $sizeScreenTelevision, $resolutionTelevision, $typeTelevision,
            $brandRefrigerator, $typeRefrigerator, $useCapacityRefrigerator1, $useCapacityRefrigerator2
            , $useCapacityRefrigerator3,
            $categoryID, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd 
    on pd.productID = p.productID
    where ( p.finalPrice between :startPrice and :endPrice or p.finalPrice>:lastMaxPrice
    
    or pd.brandSmartphone = :brandSmartphone or pd.typeSmartphone = :typeSmartphone 
    or pd.functionSmartphone = :functionSmartphone or pd.configurationSmartphone = :configurationSmartphone
    or pd.sizeBatterySmartphone >= :sizeBatterySmartphone or pd.batteryTechnologySmartphone = :batteryTechnologySmartphone 
    or pd.ramSmartphone = :ramSmartphone or pd.internalMemorySmartphone = :internalMemorySmartphone 
    or pd.cameraSmartphone = :cameraSmartphone
    or pd.specialFeaturesSmartphone = :specialFeaturesSmartphone or pd.designSmartphone = :designSmartphone 
    or pd.screenSmartphone = :screenSmartphone 
    or convert(substring_index(substring_index(pd.sizeScreenSmartphone, ' ',-1), '\"',1), double) >= :sizeScreenSmartphone
    
    or pd.brandLaptop = :brandLaptop or pd.usageNeedLaptop = :usageNeedLaptop or pd.sizeScreenLaptop = :sizeScreenLaptop 
    or pd.cpuLaptop = :cpuLaptop or pd.ramLaptop = :ramLaptop or pd.graphicsCardLaptop = :graphicsCardLaptop 
    or pd.hardDriverLaptop = :hardDriverLaptop or pd.screenResolutionLaptop = :screenResolutionLaptop 
    or pd.sweepFrequencyLaptop = :sweepFrequencyLaptop 
    
    or pd.brandTablet = :brandTablet or convert(substring_index(pd.screenTablet, '\"',1), double) between :screenTablet1 and :screenTablet2 
    or convert(substring_index(pd.screenTablet, '\"',1), double) > :screenTablet3 
    or pd.ramTablet = :ramTablet or pd.internalMemoryTablet = :internalMemoryTablet 
    
    or pd.brandPC = :brandPC or pd.cpuPC = :cpuPC or pd.ramPC = :ramPC or pd.hardDriverPC = :hardDriverPC 
    or pd.graphicsCardPC = :graphicsCardPC or pd.usageNeedPC = :usageNeedPC 
    
    or pd.brandWatch = :brandWatch or pd.typeWatch = :typeWatch 
    or convert(substring_index(substring_index(pd.batteryLifeWatch, ' ',-2), ' ', 1), double) between :batteryLifeWatch1 and :batteryLifeWatch2 
    or convert(substring_index(substring_index(pd.batteryLifeWatch, ' ',-2), ' ', 1), double) > :batteryLifeWatch3
    or pd.faceShapeWatch = :faceShapeWatch or pd.bandMaterialWatch = :bandMaterialWatch
    
    or pd.brandAccessory = :brandAccessory or pd.typeAccessory = :typeAccessory 
    or pd.compatibleAccessory = :compatibleAccessory
    
    or pd.brandTelevision = :brandTelevision or pd.sizeScreenTelevision = :sizeScreenTelevision 
    or pd.resolutionTelevision = :resolutionTelevision 
    or pd.typeTelevision = :typeTelevision 
   
    or pd.brandRefrigerator = :brandRefrigerator or pd.typeRefrigerator = :typeRefrigerator 
    or pd.useCapacityRefrigerator between :useCapacityRefrigerator1 and :useCapacityRefrigerator2 
    or pd.useCapacityRefrigerator > :useCapacityRefrigerator3
    )
    && categoryID = :categoryID order by p.productID limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->bindValue(':startPrice', $startPrice);
        $statement->bindValue(':endPrice', $endPrice);
        $statement->bindValue(':lastMaxPrice', $lastMaxPrice);

        $statement->bindValue(':brandSmartphone', $brandSmartphone);
        $statement->bindValue(':typeSmartphone', $typeSmartphone);
        $statement->bindValue(':functionSmartphone', $functionSmartphone);
        $statement->bindValue(':configurationSmartphone', $configurationSmartphone);
        $statement->bindValue(':sizeBatterySmartphone', $sizeBatterySmartphone);
        $statement->bindValue(':batteryTechnologySmartphone', $batteryTechnologySmartphone);
        $statement->bindValue(':ramSmartphone', $ramSmartphone);
        $statement->bindValue(':internalMemorySmartphone', $internalMemorySmartphone);
        $statement->bindValue(':cameraSmartphone', $cameraSmartphone);
        $statement->bindValue(':specialFeaturesSmartphone', $specialFeaturesSmartphone);
        $statement->bindValue(':designSmartphone', $designSmartphone);
        $statement->bindValue(':screenSmartphone', $screenSmartphone);
        $statement->bindValue(':sizeScreenSmartphone', $sizeScreenSmartphone);

        $statement->bindValue(':brandLaptop', $brandLaptop);
        $statement->bindValue(':usageNeedLaptop', $usageNeedLaptop);
        $statement->bindValue(':sizeScreenLaptop', $sizeScreenLaptop);
        $statement->bindValue(':cpuLaptop', $cpuLaptop);
        $statement->bindValue(':ramLaptop', $ramLaptop);
        $statement->bindValue(':graphicsCardLaptop', $graphicsCardLaptop);
        $statement->bindValue(':hardDriverLaptop', $hardDriverLaptop);
        $statement->bindValue(':screenResolutionLaptop', $screenResolutionLaptop);
        $statement->bindValue(':sweepFrequencyLaptop', $sweepFrequencyLaptop);

        $statement->bindValue(':brandTablet', $brandTablet);
        $statement->bindValue(':screenTablet1', $screenTablet1);
        $statement->bindValue(':screenTablet2', $screenTablet2);
        $statement->bindValue(':screenTablet3', $screenTablet3);
        $statement->bindValue(':ramTablet', $ramTablet);
        $statement->bindValue(':internalMemoryTablet', $internalMemoryTablet);

        $statement->bindValue(':brandPC', $brandPC);
        $statement->bindValue(':cpuPC', $cpuPC);
        $statement->bindValue(':ramPC', $ramPC);
        $statement->bindValue(':hardDriverPC', $hardDriverPC);
        $statement->bindValue(':graphicsCardPC', $graphicsCardPC);
        $statement->bindValue(':usageNeedPC', $usageNeedPC);

        $statement->bindValue(':brandWatch', $brandWatch);
        $statement->bindValue(':typeWatch', $typeWatch);
        $statement->bindValue(':batteryLifeWatch1', $batteryLifeWatch1);
        $statement->bindValue(':batteryLifeWatch2', $batteryLifeWatch2);
        $statement->bindValue(':batteryLifeWatch3', $batteryLifeWatch3);
        $statement->bindValue(':faceShapeWatch', $faceShapeWatch);
        $statement->bindValue(':bandMaterialWatch', $bandMaterialWatch);

        $statement->bindValue(':brandAccessory', $brandAccessory);
        $statement->bindValue(':typeAccessory', $typeAccessory);
        $statement->bindValue(':compatibleAccessory', $compatibleAccessory);

        $statement->bindValue(':brandTelevision', $brandTelevision);
        $statement->bindValue(':sizeScreenTelevision', $sizeScreenTelevision);
        $statement->bindValue(':resolutionTelevision', $resolutionTelevision);
        $statement->bindValue(':typeTelevision', $typeTelevision);

        $statement->bindValue(':brandRefrigerator', $brandRefrigerator);
        $statement->bindValue(':typeRefrigerator', $typeRefrigerator);
        $statement->bindValue(':useCapacityRefrigerator1', $useCapacityRefrigerator1);
        $statement->bindValue(':useCapacityRefrigerator2', $useCapacityRefrigerator2);
        $statement->bindValue(':useCapacityRefrigerator3', $useCapacityRefrigerator3);

        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productsByCategory = $statement->fetchAll();
        $statement->closeCursor();
        return $productsByCategory;
    }

    public static function getFilterProductsByPricePagination($startPrice, $endPrice, $lastMaxPrice, $categoryID, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd 
    on pd.productID = p.productID
        where (p.finalPrice between :startPrice and :endPrice or p.finalPrice>:lastMaxPrice)
    && categoryID = :categoryID order by p.productID limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->bindValue(':startPrice', $startPrice);
        $statement->bindValue(':endPrice', $endPrice);
        $statement->bindValue(':lastMaxPrice', $lastMaxPrice);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productsByCategory = $statement->fetchAll();
        $statement->closeCursor();
        return $productsByCategory;
    }

    // lọc theo hãng
    public static function getFilterProductsByBrand($brandSmartphone, $brandLaptop, $brandTablet, $brandWatch,
            $brandPC, $brandAccessory, $brandTelevision, $brandRefrigerator, $categoryID) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd 
    on pd.productID = p.productID
        where (pd.brandSmartphone = :brandSmartphone
        or pd.brandLaptop = :brandLaptop  or pd.brandTablet = :brandTablet
        or pd.brandWatch = :brandWatch or pd.brandPC = :brandPC
        or pd.brandAccessory = :brandAccessory or pd.brandTelevision = :brandTelevision
        or pd.brandRefrigerator = :brandRefrigerator)
    && categoryID = :categoryID order by p.productID";
        $statement = $db->prepare($query);
        $statement->bindValue(':brandSmartphone', $brandSmartphone);
        $statement->bindValue(':brandLaptop', $brandLaptop);
        $statement->bindValue(':brandTablet', $brandTablet);
        $statement->bindValue(':brandWatch', $brandWatch);
        $statement->bindValue(':brandPC', $brandPC);
        $statement->bindValue(':brandAccessory', $brandAccessory);
        $statement->bindValue(':brandTelevision', $brandTelevision);
        $statement->bindValue(':brandRefrigerator', $brandRefrigerator);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productsByCategory = $statement->fetchAll();
        $statement->closeCursor();
        return $productsByCategory;
    }

    public static function getFilterProductsByBrandPagination($brandSmartphone, $brandLaptop, $brandTablet, $brandWatch,
            $brandPC, $brandAccessory, $brandTelevision, $brandRefrigerator, $categoryID, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from product as p 
	join productdetails as pd 
    on pd.productID = p.productID
    where (pd.brandSmartphone = :brandSmartphone
        or pd.brandLaptop = :brandLaptop  or pd.brandTablet = :brandTablet
        or pd.brandWatch = :brandWatch or pd.brandPC = :brandPC
        or pd.brandAccessory = :brandAccessory or pd.brandTelevision = :brandTelevision
        or pd.brandRefrigerator = :brandRefrigerator)
    && categoryID = :categoryID order by p.productID limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->bindValue(':brandSmartphone', $brandSmartphone);
        $statement->bindValue(':brandLaptop', $brandLaptop);
        $statement->bindValue(':brandTablet', $brandTablet);
        $statement->bindValue(':brandWatch', $brandWatch);
        $statement->bindValue(':brandPC', $brandPC);
        $statement->bindValue(':brandAccessory', $brandAccessory);
        $statement->bindValue(':brandTelevision', $brandTelevision);
        $statement->bindValue(':brandRefrigerator', $brandRefrigerator);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->execute();
        $productsByCategory = $statement->fetchAll();
        $statement->closeCursor();
        return $productsByCategory;
    }

}
?>

