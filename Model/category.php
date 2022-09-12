<?php

class Category {

    private $categoryID, $categoryName, $typeCategoryID;

    public function __construct() {
        $this->categoryID = 0;
        $this->categoryName = '';
        $this->typeCategoryID = 0;
    }

    public function getCategoryID() {
        return $this->categoryID;
    }

    public function getCategoryName() {
        return $this->categoryName;
    }

    public function getTypeCategoryID() {
        return $this->typeCategoryID;
    }

    public function setCategoryID($value) {
        $this->categoryID = $value;
    }

    public function setCategoryName($value) {
        $this->categoryName = $value;
    }

    public function setTypeCategoryID($value) {
        $this->typeCategoryID = $value;
    }

}
?>

