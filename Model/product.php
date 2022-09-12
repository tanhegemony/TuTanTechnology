<?php

class Product {

    private $productID, $productName, $price, $discount, $finalPrice, $quantity,
            $starRating, $description, $categoryID;
//    thông tin danh mục
    private $categoryName;
//        điện thoại
    private $brandSmartphone, $typeSmartphone, $functionSmartphone, $configurationSmartphone,
            $batteryTechnologySmartphone, $sizeBatterySmartphone, $chargerSmartphone, $ramSmartphone,
            $internalMemorySmartphone, $designSmartphone, $colorSmartphone, $chipSmartphone, $simSmartphone,
            $screenSmartphone, $screenTechnologySmartphone, $sizeScreenSmartphone, $operatingSystemSmartphone,
            $cameraSmartphone, $frontCameraSmartphone, $rearCameraSmartphone, $specialFeaturesSmartphone;
//        laptop
    private $brandLaptop, $cpuLaptop, $ramLaptop, $hardDriverLaptop,
            $graphicsCardLaptop, $sizeScreenLaptop, $screenResolutionLaptop, $sweepFrequencyLaptop,
            $usageNeedLaptop, $operatingSystemLaptop, $sizeLaptop, $weightLaptop;
//        máy tính bảng
    private $brandTablet, $ramTablet, $internalMemoryTablet,
            $screenTablet, $operatingSystemTablet, $chipTablet, $frontCameraTablet,
            $rearCameraTablet, $pinTablet, $chargerTablet;
//        PC
    private $brandPC, $cpuPC, $ramPC, $hardDriverPC, $graphicsCardPC,
            $usageNeedPC, $sizePC, $weightPC;
//        Đồng hồ 
    private $brandWatch, $typeWatch, $faceShapeWatch, $bandMaterialWatch,
            $screenWatch, $sizeScreenWatch, $batteryLifeWatch, $sizeBatteryWatch;
//        Phụ kiện
    private $typeAccessory, $typeProductOfAccessory,
            $brandAccessory, $compatibleAccessory, $sizeAccessory, $weightAccessory;
//        Ti vi
    private $brandTelevision, $sizeScreenTelevision, $resolutionTelevision,
            $typeTelevision, $operatingSystemTelevision, $sizeTelevision;
//        Tủ lạnh
    private $brandRefrigerator, $typeRefrigerator,
            $useCapacityRefrigerator, $freezerCapacityRefrigerator, $coolCompartmentRefrigerator,
            $powerConsumptionRefrigerator, $energySavingTechnologyRefrigerator, $coolTechnologyRefrigerator,
            $anti_odorTechnologyRefrigerator, $foodPreservationTechnologyRefrigerator, $sizeRefrigerator,
            $massRefrigerator;

    public function __construct() {
        $this->productID = 0;
        $this->productName = '';
        $this->price = 0.0;
        $this->discount = 0;
        $this->finalPrice = 0.0;
        $this->quantity = 0;
        $this->starRating = 0;
        $this->description = '';
        $this->categoryID = 0;
        $this->categoryName = '';
        $this->brandSmartphone = '';
        $this->typeSmartphone = '';
        $this->functionSmartphone = '';
        $this->configurationSmartphone = '';
        $this->batteryTechnologySmartphone = '';
        $this->sizeBatterySmartphone = '';
        $this->chargerSmartphone = '';
        $this->ramSmartphone = '';
        $this->internalMemorySmartphone = '';
        $this->designSmartphone = '';
        $this->colorSmartphone = '';
        $this->chipSmartphone = '';
        $this->simSmartphone = '';
        $this->screenSmartphone = '';
        $this->screenTechnologySmartphone = '';
        $this->sizeScreenSmartphone = '';
        $this->operatingSystemSmartphone = '';
        $this->cameraSmartphone = '';
        $this->frontCameraSmartphone = '';
        $this->rearCameraSmartphone = '';
        $this->specialFeaturesSmartphone = '';
        $this->brandLaptop = '';
        $this->cpuLaptop = '';
        $this->ramLaptop = '';
        $this->hardDriverLaptop = '';
        $this->graphicsCardLaptop = '';
        $this->sizeScreenLaptop = '';
        $this->screenResolutionLaptop = '';
        $this->sweepFrequencyLaptop = '';
        $this->usageNeedLaptop = '';
        $this->operatingSystemLaptop = '';
        $this->sizeLaptop = '';
        $this->weightLaptop = '';
        $this->brandTablet = '';
        $this->ramTablet = '';
        $this->internalMemoryTablet = '';
        $this->screenTablet = '';
        $this->operatingSystemTablet = '';
        $this->chipTablet = '';
        $this->frontCameraTablet = '';
        $this->rearCameraTablet = '';
        $this->pinTablet = '';
        $this->chargerTablet = '';
        $this->brandPC = '';
        $this->cpuPC = '';
        $this->ramPC = '';
        $this->hardDriverPC = '';
        $this->graphicsCardPC = '';
        $this->usageNeedPC = '';
        $this->sizePC = '';
        $this->weightPC = '';
        $this->brandWatch = '';
        $this->typeWatch = '';
        $this->faceShapeWatch = '';
        $this->bandMaterialWatch = '';
        $this->screenWatch = '';
        $this->sizeScreenWatch = '';
        $this->batteryLifeWatch = '';
        $this->sizeBatteryWatch = '';
        $this->typeAccessory = '';
        $this->typeProductOfAccessory = '';
        $this->brandAccessory = '';
        $this->compatibleAccessory = '';
        $this->sizeAccessory = '';
        $this->weightAccessory = '';
        $this->brandTelevision = '';
        $this->sizeScreenTelevision = '';
        $this->resolutionTelevision = '';
        $this->typeTelevision = '';
        $this->operatingSystemTelevision = '';
        $this->sizeTelevision = '';
        $this->brandRefrigerator = '';
        $this->typeRefrigerator = '';
        $this->useCapacityRefrigerator = '';
        $this->freezerCapacityRefrigerator = '';
        $this->coolCompartmentRefrigerator = '';
        $this->powerConsumptionRefrigerator = '';
        $this->energySavingTechnologyRefrigerator = '';
        $this->coolTechnologyRefrigerator = '';
        $this->anti_odorTechnologyRefrigerator = '';
        $this->foodPreservationTechnologyRefrigerator = '';
        $this->sizeRefrigerator = '';
        $this->massRefrigerator = '';
    }

    public function getCategoryName() {
        return $this->categoryName;
    }

    public function setCategoryName($value) {
        $this->categoryName = $value;
    }

    public function getTypeSmartphone() {
        return $this->typeSmartphone;
    }

    public function getFunctionSmartphone() {
        return $this->functionSmartphone;
    }

    public function getConfigurationSmartphone() {
        return $this->configurationSmartphone;
    }

    public function getBatteryTechnologySmartphone() {
        return $this->batteryTechnologySmartphone;
    }

    public function getSizeBatterySmartphone() {
        return $this->sizeBatterySmartphone;
    }

    public function getChargerSmartphone() {
        return $this->chargerSmartphone;
    }

    public function getRamSmartphone() {
        return $this->ramSmartphone;
    }

    public function getInternalMemorySmartphone() {
        return $this->internalMemorySmartphone;
    }

    public function getDesignSmartphone() {
        return $this->designSmartphone;
    }

    public function getColorSmartphone() {
        return $this->colorSmartphone;
    }

    public function getChipSmartphone() {
        return $this->chipSmartphone;
    }

    public function getSimSmartphone() {
        return $this->simSmartphone;
    }

    public function getScreenSmartphone() {
        return $this->screenSmartphone;
    }

    public function getScreenTechnologySmartphone() {
        return $this->screenTechnologySmartphone;
    }

    public function getSizeScreenSmartphone() {
        return $this->sizeScreenSmartphone;
    }

    public function getOperatingSystemSmartphone() {
        return $this->operatingSystemSmartphone;
    }

    public function getCameraSmartphone() {
        return $this->cameraSmartphone;
    }

    public function getFrontCameraSmartphone() {
        return $this->frontCameraSmartphone;
    }

    public function getRearCameraSmartphone() {
        return $this->rearCameraSmartphone;
    }

    public function getSpecialFeaturesSmartphone() {
        return $this->specialFeaturesSmartphone;
    }

    public function getBrandLaptop() {
        return $this->brandLaptop;
    }

    public function getCpuLaptop() {
        return $this->cpuLaptop;
    }

    public function getRamLaptop() {
        return $this->ramLaptop;
    }

    public function getHardDriverLaptop() {
        return $this->hardDriverLaptop;
    }

    public function getGraphicsCardLaptop() {
        return $this->graphicsCardLaptop;
    }

    public function getSizeScreenLaptop() {
        return $this->sizeScreenLaptop;
    }

    public function getScreenResolutionLaptop() {
        return $this->screenResolutionLaptop;
    }

    public function getSweepFrequencyLaptop() {
        return $this->sweepFrequencyLaptop;
    }

    public function getUsageNeedLaptop() {
        return $this->usageNeedLaptop;
    }

    public function getOperatingSystemLaptop() {
        return $this->operatingSystemLaptop;
    }

    public function getSizeLaptop() {
        return $this->sizeLaptop;
    }

    public function getWeightLaptop() {
        return $this->weightLaptop;
    }

    public function getBrandTablet() {
        return $this->brandTablet;
    }

    public function getRamTablet() {
        return $this->ramTablet;
    }

    public function getInternalMemoryTablet() {
        return $this->internalMemoryTablet;
    }

    public function getScreenTablet() {
        return $this->screenTablet;
    }

    public function getOperatingSystemTablet() {
        return $this->operatingSystemTablet;
    }

    public function getChipTablet() {
        return $this->chipTablet;
    }

    public function getFrontCameraTablet() {
        return $this->frontCameraTablet;
    }

    public function getRearCameraTablet() {
        return $this->rearCameraTablet;
    }

    public function getPinTablet() {
        return $this->pinTablet;
    }

    public function getChargerTablet() {
        return $this->chargerTablet;
    }

    public function getBrandPC() {
        return $this->brandPC;
    }

    public function getCpuPC() {
        return $this->cpuPC;
    }

    public function getRamPC() {
        return $this->ramPC;
    }

    public function getHardDriverPC() {
        return $this->hardDriverPC;
    }

    public function getGraphicsCardPC() {
        return $this->graphicsCardPC;
    }

    public function getUsageNeedPC() {
        return $this->usageNeedPC;
    }

    public function getSizePC() {
        return $this->sizePC;
    }

    public function getWeightPC() {
        return $this->weightPC;
    }

    public function getBrandWatch() {
        return $this->brandWatch;
    }

    public function getTypeWatch() {
        return $this->typeWatch;
    }

    public function getFaceShapeWatch() {
        return $this->faceShapeWatch;
    }

    public function getBandMaterialWatch() {
        return $this->bandMaterialWatch;
    }

    public function getScreenWatch() {
        return $this->screenWatch;
    }

    public function getSizeScreenWatch() {
        return $this->sizeScreenWatch;
    }

    public function getBatteryLifeWatch() {
        return $this->batteryLifeWatch;
    }

    public function getSizeBatteryWatch() {
        return $this->sizeBatteryWatch;
    }

    public function getTypeAccessory() {
        return $this->typeAccessory;
    }

    public function getTypeProductOfAccessory() {
        return $this->typeProductOfAccessory;
    }

    public function getBrandAccessory() {
        return $this->brandAccessory;
    }

    public function getCompatibleAccessory() {
        return $this->compatibleAccessory;
    }

    public function getSizeAccessory() {
        return $this->sizeAccessory;
    }

    public function getWeightAccessory() {
        return $this->weightAccessory;
    }

    public function getBrandTelevision() {
        return $this->brandTelevision;
    }

    public function getSizeScreenTelevision() {
        return $this->sizeScreenTelevision;
    }

    public function getResolutionTelevision() {
        return $this->resolutionTelevision;
    }

    public function getTypeTelevision() {
        return $this->typeTelevision;
    }

    public function getOperatingSystemTelevision() {
        return $this->operatingSystemTelevision;
    }

    public function getSizeTelevision() {
        return $this->sizeTelevision;
    }

    public function getBrandRefrigerator() {
        return $this->brandRefrigerator;
    }

    public function getTypeRefrigerator() {
        return $this->typeRefrigerator;
    }

    public function getUseCapacityRefrigerator() {
        return $this->useCapacityRefrigerator;
    }

    public function getFreezerCapacityRefrigerator() {
        return $this->freezerCapacityRefrigerator;
    }

    public function getCoolCompartmentRefrigerator() {
        return $this->coolCompartmentRefrigerator;
    }

    public function getPowerConsumptionRefrigerator() {
        return $this->powerConsumptionRefrigerator;
    }

    public function getEnergySavingTechnologyRefrigerator() {
        return $this->energySavingTechnologyRefrigerator;
    }

    public function getCoolTechnologyRefrigerator() {
        return $this->coolTechnologyRefrigerator;
    }

    public function getAnti_odorTechnologyRefrigerator() {
        return $this->anti_odorTechnologyRefrigerator;
    }

    public function getFoodPreservationTechnologyRefrigerator() {
        return $this->foodPreservationTechnologyRefrigerator;
    }

    public function getSizeRefrigerator() {
        return $this->sizeRefrigerator;
    }

    public function getMassRefrigerator() {
        return $this->massRefrigerator;
    }

    public function setTypeSmartphone($value) {
        $this->typeSmartphone = $value;
    }

    public function setFunctionSmartphone($value) {
        $this->functionSmartphone = $value;
    }

    public function setConfigurationSmartphone($value) {
        $this->configurationSmartphone = $value;
    }

    public function setBatteryTechnologySmartphone($value) {
        $this->batteryTechnologySmartphone = $value;
    }

    public function setSizeBatterySmartphone($value) {
        $this->sizeBatterySmartphone = $value;
    }

    public function setChargerSmartphone($value) {
        $this->chargerSmartphone = $value;
    }

    public function setRamSmartphone($value) {
        $this->ramSmartphone = $value;
    }

    public function setInternalMemorySmartphone($value) {
        $this->internalMemorySmartphone = $value;
    }

    public function setDesignSmartphone($value) {
        $this->designSmartphone = $value;
    }

    public function setColorSmartphone($value) {
        $this->colorSmartphone = $value;
    }

    public function setChipSmartphone($value) {
        $this->chipSmartphone = $value;
    }

    public function setSimSmartphone($value) {
        $this->simSmartphone = $value;
    }

    public function setScreenSmartphone($value) {
        $this->screenSmartphone = $value;
    }

    public function setScreenTechnologySmartphone($value) {
        $this->screenTechnologySmartphone = $value;
    }

    public function setSizeScreenSmartphone($value) {
        $this->sizeScreenSmartphone = $value;
    }

    public function setOperatingSystemSmartphone($value) {
        $this->operatingSystemSmartphone = $value;
    }

    public function setCameraSmartphone($value) {
        $this->cameraSmartphone = $value;
    }

    public function setFrontCameraSmartphone($value) {
        $this->frontCameraSmartphone = $value;
    }

    public function setRearCameraSmartphone($value) {
        $this->rearCameraSmartphone = $value;
    }

    public function setSpecialFeaturesSmartphone($value) {
        $this->specialFeaturesSmartphone = $value;
    }

    public function setBrandLaptop($value) {
        $this->brandLaptop = $value;
    }

    public function setCpuLaptop($value) {
        $this->cpuLaptop = $value;
    }

    public function setRamLaptop($value) {
        $this->ramLaptop = $value;
    }

    public function setHardDriverLaptop($value) {
        $this->hardDriverLaptop = $value;
    }

    public function setGraphicsCardLaptop($value) {
        $this->graphicsCardLaptop = $value;
    }

    public function setSizeScreenLaptop($value) {
        $this->sizeScreenLaptop = $value;
    }

    public function setScreenResolutionLaptop($value) {
        $this->screenResolutionLaptop = $value;
    }

    public function setSweepFrequencyLaptop($value) {
        $this->sweepFrequencyLaptop = $value;
    }

    public function setUsageNeedLaptop($value) {
        $this->usageNeedLaptop = $value;
    }

    public function setOperatingSystemLaptop($value) {
        $this->operatingSystemLaptop = $value;
    }

    public function setSizeLaptop($value) {
        $this->sizeLaptop = $value;
    }

    public function setWeightLaptop($value) {
        $this->weightLaptop = $value;
    }

    public function setBrandTablet($value) {
        $this->brandTablet = $value;
    }

    public function setRamTablet($value) {
        $this->ramTablet = $value;
    }

    public function setInternalMemoryTablet($value) {
        $this->internalMemoryTablet = $value;
    }

    public function setScreenTablet($value) {
        $this->screenTablet = $value;
    }

    public function setOperatingSystemTablet($value) {
        $this->operatingSystemTablet = $value;
    }

    public function setChipTablet($value) {
        $this->chipTablet = $value;
    }

    public function setFrontCameraTablet($value) {
        $this->frontCameraTablet = $value;
    }

    public function setRearCameraTablet($value) {
        $this->rearCameraTablet = $value;
    }

    public function setPinTablet($value) {
        $this->pinTablet = $value;
    }

    public function setChargerTablet($value) {
        $this->chargerTablet = $value;
    }

    public function setBrandPC($value) {
        $this->brandPC = $value;
    }

    public function setCpuPC($value) {
        $this->cpuPC = $value;
    }

    public function setRamPC($value) {
        $this->ramPC = $value;
    }

    public function setHardDriverPC($value) {
        $this->hardDriverPC = $value;
    }

    public function setGraphicsCardPC($value) {
        $this->graphicsCardPC = $value;
    }

    public function setUsageNeedPC($value) {
        $this->usageNeedPC = $value;
    }

    public function setSizePC($value) {
        $this->sizePC = $value;
    }

    public function setWeightPC($value) {
        $this->weightPC = $value;
    }

    public function setBrandWatch($value) {
        $this->brandWatch = $value;
    }

    public function setTypeWatch($value) {
        $this->typeWatch = $value;
    }

    public function setFaceShapeWatch($value) {
        $this->faceShapeWatch = $value;
    }

    public function setBandMaterialWatch($value) {
        $this->bandMaterialWatch = $value;
    }

    public function setScreenWatch($value) {
        $this->screenWatch = $value;
    }

    public function setSizeScreenWatch($value) {
        $this->sizeScreenWatch = $value;
    }

    public function setBatteryLifeWatch($value) {
        $this->batteryLifeWatch = $value;
    }

    public function setSizeBatteryWatch($value) {
        $this->sizeBatteryWatch = $value;
    }

    public function setTypeAccessory($value) {
        $this->typeAccessory = $value;
    }

    public function setTypeProductOfAccessory($value) {
        $this->typeProductOfAccessory = $value;
    }

    public function setBrandAccessory($value) {
        $this->brandAccessory = $value;
    }

    public function setCompatibleAccessory($value) {
        $this->compatibleAccessory = $value;
    }

    public function setSizeAccessory($value) {
        $this->sizeAccessory = $value;
    }

    public function setWeightAccessory($value) {
        $this->weightAccessory = $value;
    }

    public function setBrandTelevision($value) {
        $this->brandTelevision = $value;
    }

    public function setSizeScreenTelevision($value) {
        $this->sizeScreenTelevision = $value;
    }

    public function setResolutionTelevision($value) {
        $this->resolutionTelevision = $value;
    }

    public function setTypeTelevision($value) {
        $this->typeTelevision = $value;
    }

    public function setOperatingSystemTelevision($value) {
        $this->operatingSystemTelevision = $value;
    }

    public function setSizeTelevision($value) {
        $this->sizeTelevision = $value;
    }

    public function setBrandRefrigerator($value) {
        $this->brandRefrigerator = $value;
    }

    public function setTypeRefrigerator($value) {
        $this->typeRefrigerator = $value;
    }

    public function setUseCapacityRefrigerator($value) {
        $this->useCapacityRefrigerator = $value;
    }

    public function setFreezerCapacityRefrigerator($value) {
        $this->freezerCapacityRefrigerator = $value;
    }

    public function setCoolCompartmentRefrigerator($value) {
        $this->coolCompartmentRefrigerator = $value;
    }

    public function setPowerConsumptionRefrigerator($value) {
        $this->powerConsumptionRefrigerator = $value;
    }

    public function setEnergySavingTechnologyRefrigerator($value) {
        $this->energySavingTechnologyRefrigerator = $value;
    }

    public function setCoolTechnologyRefrigerator($value) {
        $this->coolTechnologyRefrigerator = $value;
    }

    public function setAnti_odorTechnologyRefrigerator($value) {
        $this->anti_odorTechnologyRefrigerator = $value;
    }

    public function setFoodPreservationTechnologyRefrigerator($value) {
        $this->foodPreservationTechnologyRefrigerator = $value;
    }

    public function setSizeRefrigerator($value) {
        $this->sizeRefrigerator = $value;
    }

    public function setMassRefrigerator($value) {
        $this->massRefrigerator = $value;
    }

    public function getBrandSmartphone() {
        return $this->brandSmartphone;
    }

    public function setBrandSmartphone($value) {
        $this->brandSmartphone = $value;
    }

    public function getProductID() {
        return $this->productID;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getFinalPrice() {
        return $this->finalPrice;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getStarRating() {
        return $this->starRating;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCategoryID() {
        return $this->categoryID;
    }

    public function setProductID($value) {
        $this->productID = $value;
    }

    public function setProductName($value) {
        $this->productName = $value;
    }

    public function setPrice($value) {
        $this->price = $value;
    }

    public function setDiscount($value) {
        $this->discount = $value;
    }

    public function setFinalPrice($value) {
        $this->finalPrice = $value;
    }

    public function setQuantity($value) {
        $this->quantity = $value;
    }

    public function setStarRating($value) {
        $this->starRating = $value;
    }

    public function setDescription($value) {
        $this->description = $value;
    }

    public function setCategoryID($value) {
        $this->categoryID = $value;
    }

}

?>
