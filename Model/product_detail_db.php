<?php
    class ProductDetailDB{
        public static function updateProductDetail(
            // Smartphone
            $productDetailID, $brandSmartphone, $typeSmartphone,
            $functionSmartphone, $configurationSmartphone, $batteryTechnologySmartphone, $sizeBatterySmartphone,
            $chargerSmartphone, $ramSmartphone, $internalMemorySmartphone, $designSmartphone, $colorSmartphone,
            $chipSmartphone, $simSmartphone, $screenSmartphone, $screenTechnologySmartphone, $sizeScreenSmartphone,
            $operatingSystemSmartphone, $cameraSmartphone, $frontCameraSmartphone, $rearCameraSmartphone,
            $specialFeaturesSmartphone,
            //Laptop
            $brandLaptop, $cpuLaptop, $ramLaptop, $hardDriverLaptop,
            $graphicsCardLaptop, $sizeScreenLaptop, $screenResolutionLaptop, $sweepFrequencyLaptop,
            $usageNeedLaptop, $operatingSystemLaptop, $sizeLaptop, $weightLaptop,
            // Tablet
            $brandTablet, $ramTablet, $internalMemoryTablet,
            $screenTablet, $operatingSystemTablet, $chipTablet, $frontCameraTablet,
            $rearCameraTablet, $pinTablet, $chargerTablet,
            // PC
            $brandPC, $cpuPC, $ramPC, $hardDriverPC, $graphicsCardPC,
            $usageNeedPC, $sizePC, $weightPC,
            // Watch
            $brandWatch, $typeWatch, $faceShapeWatch, $bandMaterialWatch,
            $screenWatch, $sizeScreenWatch, $batteryLifeWatch, $sizeBatteryWatch,
            // Accessory
            $typeAccessory, $typeProductOfAccessory,
            $brandAccessory, $compatibleAccessory, $sizeAccessory, $weightAccessory,
            //Television
            $brandTelevision, $sizeScreenTelevision, $resolutionTelevision,
            $typeTelevision, $operatingSystemTelevision, $sizeTelevision,
            // Refrigerator
            $brandRefrigerator, $typeRefrigerator,
            $useCapacityRefrigerator, $freezerCapacityRefrigerator, $coolCompartmentRefrigerator,
            $powerConsumptionRefrigerator, $energySavingTechnologyRefrigerator, $coolTechnologyRefrigerator,
            $anti_odorTechnologyRefrigerator, $foodPreservationTechnologyRefrigerator, $sizeRefrigerator,
            $massRefrigerator,
            $productID) {
            $db = Database::getDB();
            $query = "update productdetails set "
                    . " brandSmartphone = :brandSmartphone, typeSmartphone = :typeSmartphone, functionSmartphone = :functionSmartphone, "
                    . " configurationSmartphone = :configurationSmartphone, batteryTechnologySmartphone = :batteryTechnologySmartphone, "
                    . " sizeBatterySmartphone = :sizeBatterySmartphone, chargerSmartphone = :chargerSmartphone, ramSmartphone = :ramSmartphone,"
                    . " internalMemorySmartphone = :internalMemorySmartphone, "
                    . " designSmartphone = :designSmartphone, colorSmartphone = :colorSmartphone, chipSmartphone = :chipSmartphone, simSmartphone = :simSmartphone, "
                    . " screenSmartphone = :screenSmartphone, screenTechnologySmartphone = :screenTechnologySmartphone, sizeScreenSmartphone = :sizeScreenSmartphone, "
                    . " operatingSystemSmartphone = :operatingSystemSmartphone, cameraSmartphone = :cameraSmartphone, frontCameraSmartphone = :frontCameraSmartphone, "
                    . " rearCameraSmartphone = :rearCameraSmartphone, specialFeaturesSmartphone = :specialFeaturesSmartphone, "
                    . " brandLaptop = :brandLaptop, cpuLaptop = :cpuLaptop, ramLaptop = :ramLaptop, hardDriverLaptop = :hardDriverLaptop,"
                    . " graphicsCardLaptop = :graphicsCardLaptop, sizeScreenLaptop = :sizeScreenLaptop, screenResolutionLaptop = :screenResolutionLaptop, sweepFrequencyLaptop = :sweepFrequencyLaptop,"
                    . " usageNeedLaptop = :usageNeedLaptop, operatingSystemLaptop = :operatingSystemLaptop, sizeLaptop = :sizeLaptop, weightLaptop = :weightLaptop, "
                    . " brandTablet = :brandTablet, ramTablet = :ramTablet, internalMemoryTablet = :internalMemoryTablet, "
                    . " screenTablet = :screenTablet, operatingSystemTablet = :operatingSystemTablet, chipTablet = :chipTablet, frontCameraTablet = :frontCameraTablet, "
                    . " rearCameraTablet = :rearCameraTablet, pinTablet = :pinTablet, chargerTablet = :chargerTablet, "
                    . " brandPC = :brandPC, cpuPC = :cpuPC, ramPC = :ramPC, hardDriverPC = :hardDriverPC, graphicsCardPC = :graphicsCardPC, "
                    . " usageNeedPC = :usageNeedPC, sizePC = :sizePC, weightPC = :weightPC, "
                    . " brandWatch = :brandWatch, typeWatch = :typeWatch, faceShapeWatch = :faceShapeWatch, bandMaterialWatch = :bandMaterialWatch,"
                    . " screenWatch = :screenWatch, sizeScreenWatch = :sizeScreenWatch, batteryLifeWatch = :batteryLifeWatch, sizeBatteryWatch = :sizeBatteryWatch, "
                    . " typeAccessory = :typeAccessory, typeProductOfAccessory = :typeProductOfAccessory, "
                    . " brandAccessory = :brandAccessory, compatibleAccessory = :compatibleAccessory, sizeAccessory = :sizeAccessory, weightAccessory = :weightAccessory, "
                    . " brandTelevision = :brandTelevision, sizeScreenTelevision = :sizeScreenTelevision, resolutionTelevision = :resolutionTelevision, "
                    . " typeTelevision = :typeTelevision, operatingSystemTelevision = :operatingSystemTelevision, sizeTelevision = :sizeTelevision, "
                    . " brandRefrigerator = :brandRefrigerator, typeRefrigerator = :typeRefrigerator, "
                    . " useCapacityRefrigerator = :useCapacityRefrigerator, freezerCapacityRefrigerator = :freezerCapacityRefrigerator, coolCompartmentRefrigerator = :coolCompartmentRefrigerator, "
                    . " powerConsumptionRefrigerator = :powerConsumptionRefrigerator, energySavingTechnologyRefrigerator = :energySavingTechnologyRefrigerator, coolTechnologyRefrigerator = :coolTechnologyRefrigerator, "
                    . " anti_odorTechnologyRefrigerator = :anti_odorTechnologyRefrigerator, foodPreservationTechnologyRefrigerator = :foodPreservationTechnologyRefrigerator, sizeRefrigerator = :sizeRefrigerator, "
                    . " massRefrigerator = :massRefrigerator, "
                    . " productID = :productID "
                    . " where productDetailID = :productDetailID ";
            $statement = $db->prepare($query);
            // Smartphone
            $statement->bindValue(':productDetailID', $productDetailID);
            $statement->bindValue(':brandSmartphone', $brandSmartphone);
            $statement->bindValue(':typeSmartphone', $typeSmartphone);
            $statement->bindValue(':functionSmartphone', $functionSmartphone);
            $statement->bindValue(':configurationSmartphone', $configurationSmartphone);
            $statement->bindValue(':batteryTechnologySmartphone', $batteryTechnologySmartphone);
            $statement->bindValue(':sizeBatterySmartphone', $sizeBatterySmartphone);
            $statement->bindValue(':chargerSmartphone', $chargerSmartphone);
            $statement->bindValue(':ramSmartphone', $ramSmartphone);
            $statement->bindValue(':internalMemorySmartphone', $internalMemorySmartphone);
            $statement->bindValue(':designSmartphone', $designSmartphone);
            $statement->bindValue(':colorSmartphone', $colorSmartphone);
            $statement->bindValue(':chipSmartphone', $chipSmartphone);
            $statement->bindValue(':simSmartphone', $simSmartphone);
            $statement->bindValue(':screenSmartphone', $screenSmartphone);
            $statement->bindValue(':screenTechnologySmartphone', $screenTechnologySmartphone);
            $statement->bindValue(':sizeScreenSmartphone', $sizeScreenSmartphone);
            $statement->bindValue(':operatingSystemSmartphone', $operatingSystemSmartphone);
            $statement->bindValue(':cameraSmartphone', $cameraSmartphone);
            $statement->bindValue(':frontCameraSmartphone', $frontCameraSmartphone);
            $statement->bindValue(':rearCameraSmartphone', $rearCameraSmartphone);
            $statement->bindValue(':specialFeaturesSmartphone', $specialFeaturesSmartphone);
            //Laptop
            $statement->bindValue(':brandLaptop', $brandLaptop);
            $statement->bindValue(':cpuLaptop', $cpuLaptop);
            $statement->bindValue(':ramLaptop', $ramLaptop);
            $statement->bindValue(':hardDriverLaptop', $hardDriverLaptop);
            $statement->bindValue(':graphicsCardLaptop', $graphicsCardLaptop);
            $statement->bindValue(':sizeScreenLaptop', $sizeScreenLaptop);
            $statement->bindValue(':screenResolutionLaptop', $screenResolutionLaptop);
            $statement->bindValue(':sweepFrequencyLaptop', $sweepFrequencyLaptop);
            $statement->bindValue(':usageNeedLaptop', $usageNeedLaptop);
            $statement->bindValue(':operatingSystemLaptop', $operatingSystemLaptop);
            $statement->bindValue(':sizeLaptop', $sizeLaptop);
            $statement->bindValue(':weightLaptop', $weightLaptop);
            //Tablet
            $statement->bindValue(':brandTablet', $brandTablet);
            $statement->bindValue(':ramTablet', $ramTablet);
            $statement->bindValue(':internalMemoryTablet', $internalMemoryTablet);
            $statement->bindValue(':screenTablet', $screenTablet);
            $statement->bindValue(':operatingSystemTablet', $operatingSystemTablet);
            $statement->bindValue(':chipTablet', $chipTablet);
            $statement->bindValue(':frontCameraTablet', $frontCameraTablet);
            $statement->bindValue(':rearCameraTablet', $rearCameraTablet);
            $statement->bindValue(':pinTablet', $pinTablet);
            $statement->bindValue(':chargerTablet', $chargerTablet);
            //PC
            $statement->bindValue(':brandPC', $brandPC);
            $statement->bindValue(':cpuPC', $cpuPC);
            $statement->bindValue(':ramPC', $ramPC);
            $statement->bindValue(':hardDriverPC', $hardDriverPC);
            $statement->bindValue(':graphicsCardPC', $graphicsCardPC);
            $statement->bindValue(':usageNeedPC', $usageNeedPC);
            $statement->bindValue(':sizePC', $sizePC);
            $statement->bindValue(':weightPC', $weightPC);
            //Watch
            $statement->bindValue(':brandWatch', $brandWatch);
            $statement->bindValue(':typeWatch', $typeWatch);
            $statement->bindValue(':faceShapeWatch', $faceShapeWatch);
            $statement->bindValue(':bandMaterialWatch', $bandMaterialWatch);
            $statement->bindValue(':screenWatch', $screenWatch);
            $statement->bindValue(':sizeScreenWatch', $sizeScreenWatch);
            $statement->bindValue(':batteryLifeWatch', $batteryLifeWatch);
            $statement->bindValue(':sizeBatteryWatch', $sizeBatteryWatch);
            //Accessory
            $statement->bindValue(':typeAccessory', $typeAccessory);
            $statement->bindValue(':typeProductOfAccessory', $typeProductOfAccessory);
            $statement->bindValue(':brandAccessory', $brandAccessory);
            $statement->bindValue(':compatibleAccessory', $compatibleAccessory);
            $statement->bindValue(':sizeAccessory', $sizeAccessory);
            $statement->bindValue(':weightAccessory', $weightAccessory);
            //Television
            $statement->bindValue(':brandTelevision', $brandTelevision);
            $statement->bindValue(':sizeScreenTelevision', $sizeScreenTelevision);
            $statement->bindValue(':resolutionTelevision', $resolutionTelevision);
            $statement->bindValue(':typeTelevision', $typeTelevision);
            $statement->bindValue(':operatingSystemTelevision', $operatingSystemTelevision);
            $statement->bindValue(':sizeTelevision', $sizeTelevision);
            //Refrigerator
            $statement->bindValue(':brandRefrigerator', $brandRefrigerator);
            $statement->bindValue(':typeRefrigerator', $typeRefrigerator);
            $statement->bindValue(':useCapacityRefrigerator', $useCapacityRefrigerator);
            $statement->bindValue(':freezerCapacityRefrigerator', $freezerCapacityRefrigerator);
            $statement->bindValue(':coolCompartmentRefrigerator', $coolCompartmentRefrigerator);
            $statement->bindValue(':powerConsumptionRefrigerator', $powerConsumptionRefrigerator);
            $statement->bindValue(':energySavingTechnologyRefrigerator', $energySavingTechnologyRefrigerator);
            $statement->bindValue(':coolTechnologyRefrigerator', $coolTechnologyRefrigerator);
            $statement->bindValue(':anti_odorTechnologyRefrigerator', $anti_odorTechnologyRefrigerator);
            $statement->bindValue(':foodPreservationTechnologyRefrigerator', $foodPreservationTechnologyRefrigerator);
            $statement->bindValue(':sizeRefrigerator', $sizeRefrigerator);
            $statement->bindValue(':massRefrigerator', $massRefrigerator);

            $statement->bindValue(':productID', $productID);
            $statement->execute();
            $statement->closeCursor();
        }
        //        lọc các sản phẩm chưa thêm dữ liệu vào các bảng thành phần
    public static function getProductsToAddProductDetail() {
        $db = Database::getDB();
        $query = "select p.productID, p.productName from product as p 
            left join productdetails as pd 
        on p.productID = pd.productID
        where p.productID is not null && pd.productID is null
        order by p.productID";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement;
    }

    // add thông tin khác của sản phẩm
    public static function addProductDetails(
            // Smartphone
            $productDetailID, $brandSmartphone, $typeSmartphone,
            $functionSmartphone, $configurationSmartphone, $batteryTechnologySmartphone, $sizeBatterySmartphone,
            $chargerSmartphone, $ramSmartphone, $internalMemorySmartphone, $designSmartphone, $colorSmartphone,
            $chipSmartphone, $simSmartphone, $screenSmartphone, $screenTechnologySmartphone, $sizeScreenSmartphone,
            $operatingSystemSmartphone, $cameraSmartphone, $frontCameraSmartphone, $rearCameraSmartphone,
            $specialFeaturesSmartphone,
            //Laptop
            $brandLaptop, $cpuLaptop, $ramLaptop, $hardDriverLaptop,
            $graphicsCardLaptop, $sizeScreenLaptop, $screenResolutionLaptop, $sweepFrequencyLaptop,
            $usageNeedLaptop, $operatingSystemLaptop, $sizeLaptop, $weightLaptop,
            // Tablet
            $brandTablet, $ramTablet, $internalMemoryTablet,
            $screenTablet, $operatingSystemTablet, $chipTablet, $frontCameraTablet,
            $rearCameraTablet, $pinTablet, $chargerTablet,
            // PC
            $brandPC, $cpuPC, $ramPC, $hardDriverPC, $graphicsCardPC,
            $usageNeedPC, $sizePC, $weightPC,
            // Watch
            $brandWatch, $typeWatch, $faceShapeWatch, $bandMaterialWatch,
            $screenWatch, $sizeScreenWatch, $batteryLifeWatch, $sizeBatteryWatch,
            // Accessory
            $typeAccessory, $typeProductOfAccessory,
            $brandAccessory, $compatibleAccessory, $sizeAccessory, $weightAccessory,
            //Television
            $brandTelevision, $sizeScreenTelevision, $resolutionTelevision,
            $typeTelevision, $operatingSystemTelevision, $sizeTelevision,
            // Refrigerator
            $brandRefrigerator, $typeRefrigerator,
            $useCapacityRefrigerator, $freezerCapacityRefrigerator, $coolCompartmentRefrigerator,
            $powerConsumptionRefrigerator, $energySavingTechnologyRefrigerator, $coolTechnologyRefrigerator,
            $anti_odorTechnologyRefrigerator, $foodPreservationTechnologyRefrigerator, $sizeRefrigerator,
            $massRefrigerator,
            $productID) {
        $db = Database::getDB();
        $query = 'INSERT INTO productdetails '
                . ' (productDetailID, brandSmartphone, typeSmartphone, '
                . ' functionSmartphone, configurationSmartphone, batteryTechnologySmartphone, '
                . ' sizeBatterySmartphone, chargerSmartphone, ramSmartphone, internalMemorySmartphone, '
                . ' designSmartphone, colorSmartphone, chipSmartphone, simSmartphone, '
                . ' screenSmartphone, screenTechnologySmartphone, sizeScreenSmartphone, '
                . ' operatingSystemSmartphone, cameraSmartphone, frontCameraSmartphone, '
                . ' rearCameraSmartphone, specialFeaturesSmartphone, '
                . ' brandLaptop, cpuLaptop, ramLaptop, hardDriverLaptop,'
                . ' graphicsCardLaptop, sizeScreenLaptop, screenResolutionLaptop, sweepFrequencyLaptop,'
                . ' usageNeedLaptop, operatingSystemLaptop, sizeLaptop, weightLaptop, '
                . ' brandTablet, ramTablet, internalMemoryTablet, '
                . ' screenTablet, operatingSystemTablet, chipTablet, frontCameraTablet, '
                . ' rearCameraTablet, pinTablet, chargerTablet, '
                . ' brandPC, cpuPC, ramPC, hardDriverPC, graphicsCardPC, '
                . ' usageNeedPC, sizePC, weightPC, '
                . ' brandWatch, typeWatch, faceShapeWatch, bandMaterialWatch,'
                . ' screenWatch, sizeScreenWatch, batteryLifeWatch, sizeBatteryWatch, '
                . ' typeAccessory, typeProductOfAccessory, '
                . ' brandAccessory, compatibleAccessory, sizeAccessory, weightAccessory, '
                . ' brandTelevision, sizeScreenTelevision, resolutionTelevision, '
                . ' typeTelevision, operatingSystemTelevision, sizeTelevision, '
                . ' brandRefrigerator, typeRefrigerator, '
                . ' useCapacityRefrigerator, freezerCapacityRefrigerator, coolCompartmentRefrigerator, '
                . ' powerConsumptionRefrigerator, energySavingTechnologyRefrigerator, coolTechnologyRefrigerator, '
                . ' anti_odorTechnologyRefrigerator, foodPreservationTechnologyRefrigerator, sizeRefrigerator, '
                . ' massRefrigerator, '
                . ' productID) '
                . ' values '
                . ' (:productDetailID, :brandSmartphone, :typeSmartphone, '
                . ' :functionSmartphone, :configurationSmartphone, :batteryTechnologySmartphone, '
                . ' :sizeBatterySmartphone, :chargerSmartphone, :ramSmartphone, :internalMemorySmartphone, '
                . ' :designSmartphone, :colorSmartphone, :chipSmartphone, :simSmartphone, '
                . ' :screenSmartphone, :screenTechnologySmartphone, :sizeScreenSmartphone, '
                . ' :operatingSystemSmartphone, :cameraSmartphone, :frontCameraSmartphone, '
                . ' :rearCameraSmartphone, :specialFeaturesSmartphone, '
                . ' :brandLaptop, :cpuLaptop, :ramLaptop, :hardDriverLaptop,'
                . ' :graphicsCardLaptop, :sizeScreenLaptop, :screenResolutionLaptop, :sweepFrequencyLaptop,'
                . ' :usageNeedLaptop, :operatingSystemLaptop, :sizeLaptop, :weightLaptop, '
                . ' :brandTablet, :ramTablet, :internalMemoryTablet, '
                . ' :screenTablet, :operatingSystemTablet, :chipTablet, :frontCameraTablet, '
                . ' :rearCameraTablet, :pinTablet, :chargerTablet, '
                . ' :brandPC, :cpuPC, :ramPC, :hardDriverPC, :graphicsCardPC, '
                . ' :usageNeedPC, :sizePC, :weightPC, '
                . ' :brandWatch, :typeWatch, :faceShapeWatch, :bandMaterialWatch,'
                . ' :screenWatch, :sizeScreenWatch, :batteryLifeWatch, :sizeBatteryWatch, '
                . ' :typeAccessory, :typeProductOfAccessory, '
                . ' :brandAccessory, :compatibleAccessory, :sizeAccessory, :weightAccessory, '
                . ' :brandTelevision, :sizeScreenTelevision, :resolutionTelevision, '
                . ' :typeTelevision, :operatingSystemTelevision, :sizeTelevision, '
                . ' :brandRefrigerator, :typeRefrigerator, '
                . ' :useCapacityRefrigerator, :freezerCapacityRefrigerator, :coolCompartmentRefrigerator, '
                . ' :powerConsumptionRefrigerator, :energySavingTechnologyRefrigerator, :coolTechnologyRefrigerator, '
                . ' :anti_odorTechnologyRefrigerator, :foodPreservationTechnologyRefrigerator, :sizeRefrigerator, '
                . ' :massRefrigerator, '
                . ' :productID ) ';
        $statement = $db->prepare($query);
        // Smartphone
        $statement->bindValue(':productDetailID', $productDetailID);
        $statement->bindValue(':brandSmartphone', $brandSmartphone);
        $statement->bindValue(':typeSmartphone', $typeSmartphone);
        $statement->bindValue(':functionSmartphone', $functionSmartphone);
        $statement->bindValue(':configurationSmartphone', $configurationSmartphone);
        $statement->bindValue(':batteryTechnologySmartphone', $batteryTechnologySmartphone);
        $statement->bindValue(':sizeBatterySmartphone', $sizeBatterySmartphone);
        $statement->bindValue(':chargerSmartphone', $chargerSmartphone);
        $statement->bindValue(':ramSmartphone', $ramSmartphone);
        $statement->bindValue(':internalMemorySmartphone', $internalMemorySmartphone);
        $statement->bindValue(':designSmartphone', $designSmartphone);
        $statement->bindValue(':colorSmartphone', $colorSmartphone);
        $statement->bindValue(':chipSmartphone', $chipSmartphone);
        $statement->bindValue(':simSmartphone', $simSmartphone);
        $statement->bindValue(':screenSmartphone', $screenSmartphone);
        $statement->bindValue(':screenTechnologySmartphone', $screenTechnologySmartphone);
        $statement->bindValue(':sizeScreenSmartphone', $sizeScreenSmartphone);
        $statement->bindValue(':operatingSystemSmartphone', $operatingSystemSmartphone);
        $statement->bindValue(':cameraSmartphone', $cameraSmartphone);
        $statement->bindValue(':frontCameraSmartphone', $frontCameraSmartphone);
        $statement->bindValue(':rearCameraSmartphone', $rearCameraSmartphone);
        $statement->bindValue(':specialFeaturesSmartphone', $specialFeaturesSmartphone);
        //Laptop
        $statement->bindValue(':brandLaptop', $brandLaptop);
        $statement->bindValue(':cpuLaptop', $cpuLaptop);
        $statement->bindValue(':ramLaptop', $ramLaptop);
        $statement->bindValue(':hardDriverLaptop', $hardDriverLaptop);
        $statement->bindValue(':graphicsCardLaptop', $graphicsCardLaptop);
        $statement->bindValue(':sizeScreenLaptop', $sizeScreenLaptop);
        $statement->bindValue(':screenResolutionLaptop', $screenResolutionLaptop);
        $statement->bindValue(':sweepFrequencyLaptop', $sweepFrequencyLaptop);
        $statement->bindValue(':usageNeedLaptop', $usageNeedLaptop);
        $statement->bindValue(':operatingSystemLaptop', $operatingSystemLaptop);
        $statement->bindValue(':sizeLaptop', $sizeLaptop);
        $statement->bindValue(':weightLaptop', $weightLaptop);
        //Tablet
        $statement->bindValue(':brandTablet', $brandTablet);
        $statement->bindValue(':ramTablet', $ramTablet);
        $statement->bindValue(':internalMemoryTablet', $internalMemoryTablet);
        $statement->bindValue(':screenTablet', $screenTablet);
        $statement->bindValue(':operatingSystemTablet', $operatingSystemTablet);
        $statement->bindValue(':chipTablet', $chipTablet);
        $statement->bindValue(':frontCameraTablet', $frontCameraTablet);
        $statement->bindValue(':rearCameraTablet', $rearCameraTablet);
        $statement->bindValue(':pinTablet', $pinTablet);
        $statement->bindValue(':chargerTablet', $chargerTablet);
        //PC
        $statement->bindValue(':brandPC', $brandPC);
        $statement->bindValue(':cpuPC', $cpuPC);
        $statement->bindValue(':ramPC', $ramPC);
        $statement->bindValue(':hardDriverPC', $hardDriverPC);
        $statement->bindValue(':graphicsCardPC', $graphicsCardPC);
        $statement->bindValue(':usageNeedPC', $usageNeedPC);
        $statement->bindValue(':sizePC', $sizePC);
        $statement->bindValue(':weightPC', $weightPC);
        //Watch
        $statement->bindValue(':brandWatch', $brandWatch);
        $statement->bindValue(':typeWatch', $typeWatch);
        $statement->bindValue(':faceShapeWatch', $faceShapeWatch);
        $statement->bindValue(':bandMaterialWatch', $bandMaterialWatch);
        $statement->bindValue(':screenWatch', $screenWatch);
        $statement->bindValue(':sizeScreenWatch', $sizeScreenWatch);
        $statement->bindValue(':batteryLifeWatch', $batteryLifeWatch);
        $statement->bindValue(':sizeBatteryWatch', $sizeBatteryWatch);
        //Accessory
        $statement->bindValue(':typeAccessory', $typeAccessory);
        $statement->bindValue(':typeProductOfAccessory', $typeProductOfAccessory);
        $statement->bindValue(':brandAccessory', $brandAccessory);
        $statement->bindValue(':compatibleAccessory', $compatibleAccessory);
        $statement->bindValue(':sizeAccessory', $sizeAccessory);
        $statement->bindValue(':weightAccessory', $weightAccessory);
        //Television
        $statement->bindValue(':brandTelevision', $brandTelevision);
        $statement->bindValue(':sizeScreenTelevision', $sizeScreenTelevision);
        $statement->bindValue(':resolutionTelevision', $resolutionTelevision);
        $statement->bindValue(':typeTelevision', $typeTelevision);
        $statement->bindValue(':operatingSystemTelevision', $operatingSystemTelevision);
        $statement->bindValue(':sizeTelevision', $sizeTelevision);
        //Refrigerator
        $statement->bindValue(':brandRefrigerator', $brandRefrigerator);
        $statement->bindValue(':typeRefrigerator', $typeRefrigerator);
        $statement->bindValue(':useCapacityRefrigerator', $useCapacityRefrigerator);
        $statement->bindValue(':freezerCapacityRefrigerator', $freezerCapacityRefrigerator);
        $statement->bindValue(':coolCompartmentRefrigerator', $coolCompartmentRefrigerator);
        $statement->bindValue(':powerConsumptionRefrigerator', $powerConsumptionRefrigerator);
        $statement->bindValue(':energySavingTechnologyRefrigerator', $energySavingTechnologyRefrigerator);
        $statement->bindValue(':coolTechnologyRefrigerator', $coolTechnologyRefrigerator);
        $statement->bindValue(':anti_odorTechnologyRefrigerator', $anti_odorTechnologyRefrigerator);
        $statement->bindValue(':foodPreservationTechnologyRefrigerator', $foodPreservationTechnologyRefrigerator);
        $statement->bindValue(':sizeRefrigerator', $sizeRefrigerator);
        $statement->bindValue(':massRefrigerator', $massRefrigerator);

        $statement->bindValue(':productID', $productID);
        $statement->execute();
        $statement->closeCursor();
    }
        public static function searchProductDetail($content, $categoryID) {
            $db = Database::getDB();
            $query = "select * from productdetails as pd 
                join product as p 
                on p.productID = pd.productID 
                join category as c
                on c.categoryID = p.categoryID
                where p.categoryID = :categoryID && (p.productName like '%$content%' "
                    . " or pd.brandSmartphone like '%$content%' or pd.typeSmartphone like '%$content%' "
                    . " or pd.configurationSmartphone like '%$content%' "
                    . " or pd.brandLaptop like '%$content%' or pd.usageNeedLaptop like '%$content%' "
                    . " or pd.operatingSystemLaptop like '%$content%' "
                    . " or pd.brandTablet like '%$content%' or pd.operatingSystemTablet like '%$content%' "
                    . " or pd.chipTablet like '%$content%' "
                    . " or pd.brandPC like '%$content%' or pd.cpuPC like '%$content%' or pd.usageNeedPC like '%$content%' "
                    . " or pd.brandWatch like '%$content%' or pd.typeWatch like '%$content%'"
                    . " or pd.faceShapeWatch like '%$content%' or pd.bandMaterialWatch like '%$content%' "
                    . " or pd.screenWatch like '%$content%' "
                    . " or pd.brandAccessory like '%$content%' or pd.typeAccessory like '%$content%'"
                    . " or pd.typeProductOfAccessory like '%$content%' or pd.compatibleAccessory like '%$content%' "
                    . " or pd.brandTelevision like '%$content%' or pd.typeTelevision like '%$content%'"
                    . " or pd.operatingSystemTelevision like '%$content%' "
                    . " or brandRefrigerator like '%$content%' or pd.typeRefrigerator like '%$content%')
                order by pd.productDetailID ";
            $statement = $db->prepare($query);
            $statement->bindValue(':categoryID', $categoryID);
            $statement->execute();
            $products = $statement->fetchAll();
            $statement->closeCursor();
            return $products;
        }

        public static function searchProductDetailPagination($content, $categoryID, $productNumber, $offset) {
            $db = Database::getDB();
            $query = "select * from productdetails as pd 
                join product as p 
                on p.productID = pd.productID 
                join category as c
                on c.categoryID = p.categoryID
                where p.categoryID = :categoryID && (p.productName like '%$content%' "
                    . " or pd.brandSmartphone like '%$content%' or pd.typeSmartphone like '%$content%' "
                    . " or pd.configurationSmartphone like '%$content%' "
                    . " or pd.brandLaptop like '%$content%' or pd.usageNeedLaptop like '%$content%' "
                    . " or pd.operatingSystemLaptop like '%$content%' "
                    . " or pd.brandTablet like '%$content%' or pd.operatingSystemTablet like '%$content%' "
                    . " or pd.chipTablet like '%$content%' "
                    . " or pd.brandPC like '%$content%' or pd.cpuPC like '%$content%' or pd.usageNeedPC like '%$content%' "
                    . " or pd.brandWatch like '%$content%' or pd.typeWatch like '%$content%'"
                    . " or pd.faceShapeWatch like '%$content%' or pd.bandMaterialWatch like '%$content%' "
                    . " or pd.screenWatch like '%$content%' "
                    . " or pd.brandAccessory like '%$content%' or pd.typeAccessory like '%$content%'"
                    . " or pd.typeProductOfAccessory like '%$content%' or pd.compatibleAccessory like '%$content%' "
                    . " or pd.brandTelevision like '%$content%' or pd.typeTelevision like '%$content%'"
                    . " or pd.operatingSystemTelevision like '%$content%' "
                    . " or brandRefrigerator like '%$content%' or pd.typeRefrigerator like '%$content%')
                order by pd.productDetailID limit $productNumber offset $offset";
            $statement = $db->prepare($query);
            $statement->bindValue(':categoryID', $categoryID);
            $statement->execute();
            $products = $statement->fetchAll();
            $statement->closeCursor();
            return $products;
        }
        public static function getProductDetailByID($productDetailID, $categoryID) {
            $db = Database::getDB();
            $query = "select * from productdetails as pd 
                join product as p 
                on p.productID = pd.productID 
                join category as c
                on c.categoryID = p.categoryID
                where pd.productDetailID = :productDetailID && p.categoryID = :categoryID
                order by pd.productDetailID ";
            $statement = $db->prepare($query);
            $statement->bindValue(':productDetailID', $productDetailID);
            $statement->bindValue(':categoryID', $categoryID);
            $statement->execute();
            $productInProductDetail = $statement->fetch();
            $statement->closeCursor();
            return $productInProductDetail;
        }
        public static function deleteProductInProductDetail($productDetailID) {
            $db = Database::getDB();
            $query = 'DELETE FROM productdetails WHERE productDetailID = :productDetailID';
            $statement = $db->prepare($query);
            $statement->bindValue(':productDetailID', $productDetailID);
            $statement->execute();
            $statement->closeCursor();
        }
        public static function getProductInProductDetail($categoryID) {
            $db = Database::getDB();
            $query = "select * from productdetails as pd 
            join product as p 
            on p.productID = pd.productID 
            where p.categoryID = :categoryID
            order by pd.productDetailID ";
            $statement = $db->prepare($query);
            $statement->bindValue(':categoryID', $categoryID);
            $statement->execute();
            $productsInProductDetail = $statement->fetchAll();
            $statement->closeCursor();
            return $productsInProductDetail;
        }
        public static function getProductInProductDetailPagination($categoryID, $productNumber, $offset) {
            $db = Database::getDB();
            $query = "select * from productdetails as pd 
            join product as p 
            on p.productID = pd.productID 
            where p.categoryID = :categoryID
            order by pd.productDetailID limit $productNumber offset $offset";
            $statement = $db->prepare($query);
            $statement->bindValue(':categoryID', $categoryID);
            $statement->execute();
            $productsInProductDetail = $statement->fetchAll();
            $statement->closeCursor();
            return $productsInProductDetail;
        }
    }
?>

