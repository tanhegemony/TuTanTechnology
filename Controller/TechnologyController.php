<?php

require '../Model/database.php';
require '../Model/category.php';
require '../Model/category_db.php';
require '../Model/product.php';
require '../Model/product_db.php';
require '../Model/account.php';
require '../Model/account_db.php';
require '../Model/member_db.php';
require '../Model/member.php';
require '../Model/flashsale_db.php';
require '../Model/cart_db.php';
require '../Model/order_db.php';
require '../Model/filter_db.php';
require '../Model/customer_db.php';

//Thiết lập session/cookie
$lifetime = 60 * 60 * 24; //one day
session_set_cookie_params($lifetime, '/');
session_start(); 
//Thiết lập model
$productDB = new ProductDB();
$categoryDB = new CategoryDB();
$accountDB = new AccountDB();
$memberDB = new MemberDB();
$flashsaleDB = new FlashSaleDB();
$cartDB = new CartDB();
$orderDB = new OrderDB();
$filterDB = new FilterDB();
$customerDB = new CustomerDB();

$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = 'home_page';
}
if ($action == 'home_page') {
    // home page
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    // set time sale
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $now = new DateTime();
    $timeOut = new DateTime('2022/07/15 15:07:02');

    $productID = filter_input(INPUT_GET, 'productID', FILTER_VALIDATE_INT);
    // Flash Sale
    $getProductsFlashSaleFirstSlideShow = $flashsaleDB->getProductsFlashSaleFirstSlideShow();
    $getProductsFlashSaleSecondSlideShow = $flashsaleDB->getProductsFlashSaleSecondSlideShow();
    // order product
    $getProductsByOrderFirst = $productDB->getProductsByOrderFirst();
    $getProductsByOrderSecond = $productDB->getProductsByOrderSecond();
    // interest product 
    $firstSlideShowInterestOfProducts = $productDB->getFirstSlideShowInterestOfProducts();
    $secondSlideShowInterestOfProducts = $productDB->getSecondSlideShowInterestOfProducts();
    // appliances product 
    $getAppliancesFirstSlideShow = $productDB->getAppliancesFirstSlideShow();
    $getAppliancesSecondSlideShow = $productDB->getAppliancesSecondSlideShow();
    // laptop product
    $getLaptopsFirstSlideShow = $productDB->getLaptopsFirstSlideShow();
    $getLaptopsSecondSlideShow = $productDB->getLaptopsSecondSlideShow();
    // Smartphone product
    $getSmartphonesFirstSlideShow = $productDB->getSmartphonesFirstSlideShow();
    $getSmartphonesSecondSlideShow = $productDB->getSmartphonesSecondSlideShow();
    // Tablet product
    $getTabletsFirstSlideShow = $productDB->getTabletsFirstSlideShow();
    $getTabletsSecondSlideShow = $productDB->getTabletsSecondSlideShow();
    // Watch product
    $getWatchesFirstSlideShow = $productDB->getWatchesFirstSlideShow();
    $getWatchesSecondSlideShow = $productDB->getWatchesSecondSlideShow();
    // member registration
    if(isset($_SESSION['email'])){
        $account = $accountDB->getAccount($_SESSION['email']);
        $accountID = $account->getAccountID();
        $member = $memberDB->getMemberByAccountID($accountID);
        if (isset($_POST['addMember'])) {
            $emailMember = filter_input(INPUT_POST, 'emailMember');
            if (empty($emailMember)) {
                $messageMember = "Vui lòng nhập email thành viên!";
            } else {
                $memberID = filter_input(INPUT_POST, 'memberID');
                $joinDate = date("Y/m/d H:i:s");
                $members = $memberDB->getMembers();
                $duplicateMember = false;
                foreach ($members as $member) {
                    if ($emailMember == $member['emailMember']) {
                        $duplicateMember = true;
                        break;
                    }
                }
                if ($duplicateMember == true) {
                    $messageMember = "Thành viên này đã tồn tại!";
                } else {
                    $memberDB->addMember($memberID, $emailMember, $joinDate, $accountID);
                    header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=home_page");
                }
            }
        }
    }else{
        if(isset($_POST['addMember'])){
            header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=login_page");
        }
    }
    include '../View/user/home.php';
} else if ($action == "viewAllProductOrder") {
    // show view all product order in home page
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    // pagination
    $productNumber = 15;
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;
    $getProductsByOrderPagination = $productDB->getProductsByOrderPagination($productNumber, $offset);
    $totalPage = ceil(count($getProductsByOrderPagination) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;

    include '../View/user/viewAllProducts.php';
} else if ($action == "viewAllProductInterest") {
    // show view all product interest in home page
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    // pagination
    $productNumber = 15;
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;
    $getProductsByOrderPagination = $productDB->getProductsByInterestPagination($productNumber, $offset);
    $totalPage = ceil(count($getProductsByOrderPagination) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;

    include '../View/user/viewAllProducts.php';
} else if ($action == "viewAllProductAppliances") {
    // show view all product appliances in home page
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    // pagination
    $productNumber = 15;
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;
    $getProductsByOrderPagination = $productDB->getProductsByAppliancesPagination($productNumber, $offset);
    $totalPage = ceil(count($getProductsByOrderPagination) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;

    include '../View/user/viewAllProducts.php';
}

else if ($action == "Show_Flash_Sale") {
    // show product in table flash sale
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    // set time sale
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $now = new DateTime();
    $timeOut = new DateTime('2022/07/15 15:07:02');

    // pagination
    $productNumber = 18;
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;
    $getProductsFlashSalePagination = $flashsaleDB->getProductsFlashSalePagination($productNumber, $offset);
    $totalPage = ceil(count($getProductsFlashSalePagination) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/user/flashSale.php';
}  else if ($action == "search_product") {
    // product search
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    
    $content = filter_input(INPUT_GET, 'content');

    $getProductsSearch = $productDB->getProductsBySearch($content);
    //  pagination
    $productNumber = 15;
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;
    $getProductsBySearchPagination = $productDB->getProductsBySearchPagination($content, $productNumber, $offset);
    $totalPage = ceil(count($getProductsSearch) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;

    //you can like
    $getProductsYouLikeFirst = $cartDB->getProductsRandomFirst();
    $getProductsYouLikeSecond = $cartDB->getProductsRandomSecond();

    include '../View/user/productsBySearch.php';
}else if ($action == "check_out") {
    if(isset($_SESSION['email'])){
        $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
        // check out
        $account = $accountDB->getAccount($_SESSION['email']);
        $customer = $customerDB->getCustomer($account->getAccountID());
        // show input discount Code 
        foreach ($_SESSION['discountCode'] as $contentDiscountCode){
                $getDiscountCodeByContent = $cartDB->getDiscountCodeByContent($contentDiscountCode);
        }
        

        //click button checkout , add info to table order and order detail
        if (isset($_POST['checkout'])) {
            // Khai báo
            $orderDetailID = filter_input(INPUT_POST, 'orderDetailID');
            $orderID = filter_input(INPUT_POST, 'orderID');
            $typeShip = filter_input(INPUT_POST, 'typeShip');
            $customerAddress = filter_input(INPUT_POST, 'customerAddress');
            $customerNameAddress = filter_input(INPUT_POST, 'customerNameAddress');
            $typePay = filter_input(INPUT_POST, 'typePay');
            $note = filter_input(INPUT_POST, 'note');
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $buyDate = date("Y/m/d H:i:s");
            $state = "Đang chờ duyệt";
            $customer = $customerDB->getCustomer($account->getAccountID());
            if(empty($customer)){
                    $customerID = filter_input(INPUT_POST, 'customerID');
                    $customerImage = filter_input(INPUT_POST, 'customerImage');
                    $customerName = filter_input(INPUT_POST, 'customerName');
                    $customerPhone = filter_input(INPUT_POST, 'customerPhone');
                    $customerEmail = $_SESSION['email'];
                    $customerAddress = filter_input(INPUT_POST, 'customerAddress');
                    $customerNameAddress = filter_input(INPUT_POST, 'customerNameAddress');
                    if(empty($customerName) || empty($customerPhone) || empty($customerAddress)){
                            $message = "Vui lòng điền đầy đủ thông tin khách hàng";
                        }else{
                            $customerDB->addCustomer($customerID, $customerImage, $customerName,
                                $customerPhone, $customerEmail, $customerAddress, $customerNameAddress, $account->getAccountID());
                        }
            }
            if (empty($typeShip) || empty($customerAddress) || empty($customerNameAddress) || empty($typePay) || empty($note)) {
                $message = "Bạn vui lòng điền đầy đủ thông tin đặt hàng";
            } else {
                //tổng tiền
                $subtotal = 0;
                foreach ($_SESSION['discountCode'] as $contentdiscountCode) {
                    if ($contentdiscountCode == "Unknown") {
                        $discountCode = 0;
                    } else {
                        $discountCode = $getDiscountCodeByContent['valueDiscount'];
                    }
                }
                foreach ($_SESSION['cart'] as $cart) {
                    $subtotal += $cart['quantity'] * $cart['finalPrice'];
                }
                $total = $subtotal - $discountCode;
                $ordersID = $orderDB->addOrder($orderID, $total, $discountCode, $typeShip, $customerAddress, 
                        $customerNameAddress, $typePay, $note, $buyDate, $state);

                foreach ($_SESSION['cart'] as $cart) {
                    $getIDByName = $productDB->getIDByName($cart['productName']);
                    foreach ($getIDByName as $getID) {
                        $orderDB->addOrderDetail($orderDetailID, $ordersID, $getID, $cart['quantity'], $cart['quantity'] * $cart['finalPrice'], $account->getAccountID());
                        $product = $productDB->productDetail($cart['productName']);
                        $quantity_update = $product->getQuantity() - $cart['quantity'];
                        $orderDB->updateQuantityAfterOrder($quantity_update, $getID);
                        break;
                    }
                }
                unset($_SESSION['cart']);
            }
        }
    }else{
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=login_page");
    }
    
    include '../View/user/checkout.php';
} 
else if ($action == "shoppingCart") {
    // main shopping cart display
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    // set time sale
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $now = new DateTime();
    $timeOut = new DateTime('2022/07/15 15:07:02');
    
    // input discount Code
    $contentDiscountCode = filter_input(INPUT_POST, "contentDiscountCode");
    $getDiscountCodeByContent = $cartDB->getDiscountCodeByContent($contentDiscountCode);
    
    if (isset($_POST['discountCode'])) {
        if (empty($contentDiscountCode) || $contentDiscountCode == null) {
            $_SESSION['discountCode'] = array(
                'discountCode' => "Unknown"
            );
        }
        $_SESSION['discountCode'] = array(
            'discountCode' => $contentDiscountCode
        );
    }else{
         $_SESSION['discountCode'] = array(
                'discountCode' => "Unknown"
            );
    }

    // verify shopping Cart
    if (empty($_SESSION['cart'])) {
        $message = "Không có sản phẩm";
    }

    include '../View/user/shoppingCart.php';
} else if ($action == "addCart") {
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    // add product to add to cart
    // set time sale
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $now = new DateTime();
    $timeOut = new DateTime('2022/07/15 15:07:02');

    // add Product to cart
    $productName = filter_input(INPUT_GET, 'productName');
    $product = $productDB->productDetail($productName);
    $price = $product->getPrice();
    $discount = $product->getDiscount();
    $quantity_product = $product->getQuantity();
    $finalPrice = $product->getFinalPrice();
    $categoryID1 = $product->getCategoryID();
    $category = $categoryDB->getCategoryByCategoryID($categoryID1);
    
    if (isset($_SESSION['cart'][$productName])) {
        $_SESSION['cart'][$productName]['quantity']++;
    } else {
        $_SESSION['cart'][$productName] = array(
            "productName" => $productName,
            "price" => $price,
            "discount" => $discount,
            "finalPrice" => $finalPrice,
            "quantity_product" => $quantity_product,
            "categoryName" => $category->getCategoryName(),
            "quantity" => 1
        );
    }

    // delete a product in cart
    if (isset($_POST['delete'])) {
        unset($_SESSION['cart'][$productName]);
    }


    // verify shopping cart
    if (empty($_SESSION['cart'])) {
        $message = "Không có sản phẩm";
    }

    include '../View/user/shoppingCart.php';
} else if ($action == "update_cart") {
    // update product in cart 

    $productName = filter_input(INPUT_GET, 'productName');
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    // set time sale
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $now = new DateTime();
    $timeOut = new DateTime('2022/07/15 15:07:02');

    // update product if change quantity
    if (isset($_POST['update'])) {
        $quantity_new = filter_input(INPUT_POST, 'quantity', FILTER_DEFAULT,
                FILTER_REQUIRE_ARRAY);
        foreach ($quantity_new as $productName => $quantity) {
            if ($quantity <= 0) {
                unset($_SESSION['cart'][$productName]);
            } else if ($_SESSION['cart'][$productName]['quantity'] != $quantity) {
                $_SESSION['cartnew'][$productName] = array(
                    "quantity" => $quantity
                );
                $_SESSION['cart'][$productName] = array_replace($_SESSION['cart'][$productName], $_SESSION['cartnew'][$productName]);
            }
        }
    }

    if (isset($_POST['plus_quantity'])) {
        $_SESSION['cart'][$productName]['quantity'] = $_SESSION['cart'][$productName]['quantity'] + 1;
    }
    if (isset($_POST['sub_quantity'])) {
        $_SESSION['cart'][$productName]['quantity'] = $_SESSION['cart'][$productName]['quantity'] - 1;
        if ($_SESSION['cart'][$productName]['quantity'] == 0) {
            unset($_SESSION['cart'][$productName]);
        }
    }
    // Verify shopping Cart
    if (empty($_SESSION['cart'])) {
        $message = "Không có sản phẩm";
    }

    include '../View/user/shoppingCart.php';
} else if ($action == "empty_cart") {
    // empty all product in shopping Cart
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);

    // make empty
    unset($_SESSION['cart']);
    $_SESSION['cart'] = array();

    // Verify shopping Cart
    if (empty($_SESSION['cart'])) {
        $message = "Không có sản phẩm";
    }

    include '../View/user/shoppingCart.php';
} else if ($action == "productsByCategory") {
    // show product by category

    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
// get Category Name By CategoryID
    $getCategoryByCategoryID = $categoryDB->getCategoryByCategoryID($categoryID);

    // quick search 
    $productsInterestByCategory = $productDB->getProductsInterestByCategory($categoryID);

    // pagination
    $productNumber = 12;
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;

    if (isset($_POST['applyContentShow'])) {
        $contentShow = filter_input(INPUT_POST, 'contentShow');
    }
    if (empty($contentShow)) {
        $contentShow = "All";
    }
    if ($contentShow == "All") {
        $condition = "";
        // show product by Category
        $productsByCategory = $productDB->getProductsByCategoryID($categoryID, $condition);
        $getProductsPagination = $productDB->getProductsPagination($categoryID, $condition, $productNumber, $offset);
    }
    if ($contentShow == "BestSelling") {
        // show product by Category
        $productsByCategory = $filterDB->filterProductHightlight($categoryID);
        $getProductsPagination = $filterDB->filterProductHightlightPagination($categoryID, $productNumber, $offset);
    } else if ($contentShow == "ascPrice") {
        $condition = "order by p.finalPrice asc";
        // show product by Category
        $productsByCategory = $productDB->getProductsByCategoryID($categoryID, $condition);
        $getProductsPagination = $productDB->getProductsPagination($categoryID, $condition, $productNumber, $offset);
    } else if ($contentShow == "descPrice") {
        $condition = "order by p.finalPrice desc";
        // show product by Category
        $productsByCategory = $productDB->getProductsByCategoryID($categoryID, $condition);
        $getProductsPagination = $productDB->getProductsPagination($categoryID, $condition, $productNumber, $offset);
    }
    $totalPage = ceil(count($productsByCategory) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;

    include '../View/user/productsByCategory.php';
} else if ($action == "filter") {
    
    // filter

    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);

    // get Category Name By CategoryID
    $getCategoryByCategoryID = $categoryDB->getCategoryByCategoryID($categoryID);

    // quick search
    $productsInterestByCategory = $productDB->getProductsInterestByCategory($categoryID);
    
    // pagination
    $productNumber = 12;
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;

    if (isset($_POST['applyContentShow'])) {
        $contentShow = filter_input(INPUT_POST, 'contentShow');
    }
    if (empty($contentShow)) {
        $contentShow = "All";
    }
    if ($contentShow == "All") {
        $condition = "";
        // show product by Category
        $productsByCategory = $productDB->getProductsByCategoryID($categoryID, $condition);
        $getProductsPagination = $productDB->getProductsPagination($categoryID, $condition, $productNumber, $offset);
    }
    if ($contentShow == "BestSelling") {
        // show product by Category
        $productsByCategory = $filterDB->filterProductHightlight($categoryID);
        $getProductsPagination = $filterDB->filterProductHightlightPagination($categoryID, $productNumber, $offset);
    } else if ($contentShow == "ascPrice") {
        $condition = "order by p.finalPrice asc";
        // show product by Category
        $productsByCategory = $productDB->getProductsByCategoryID($categoryID, $condition);
        $getProductsPagination = $productDB->getProductsPagination($categoryID, $condition, $productNumber, $offset);
    } else if ($contentShow == "descPrice") {
        $condition = "order by p.finalPrice desc";
        // show product by Category
        $productsByCategory = $productDB->getProductsByCategoryID($categoryID, $condition);
        $getProductsPagination = $productDB->getProductsPagination($categoryID, $condition, $productNumber, $offset);
    }
    
    // price
    $startPrice = filter_input(INPUT_GET, 'startPrice');
    $endPrice = filter_input(INPUT_GET, 'endPrice');
    $lastMaxPrice = filter_input(INPUT_GET, 'lastMaxPrice');

    // smartphone
    $brandSmartphone = filter_input(INPUT_GET, 'brandSmartphone');
    $typeSmartphone = filter_input(INPUT_GET, 'typeSmartphone');
    $functionSmartphone = filter_input(INPUT_GET, 'functionSmartphone');
    $configurationSmartphone = filter_input(INPUT_GET, 'configurationSmartphone');
    $sizeBatterySmartphone = filter_input(INPUT_GET, 'sizeBatterySmartphone');
    $batteryTechnologySmartphone = filter_input(INPUT_GET, 'batteryTechnologySmartphone');
    $ramSmartphone = filter_input(INPUT_GET, 'ramSmartphone');
    $internalMemorySmartphone = filter_input(INPUT_GET, 'internalMemorySmartphone');
    $cameraSmartphone = filter_input(INPUT_GET, 'cameraSmartphone');
    $specialFeaturesSmartphone = filter_input(INPUT_GET, 'specialFeaturesSmartphone');
    $designSmartphone = filter_input(INPUT_GET, 'designSmartphone');
    $screenSmartphone = filter_input(INPUT_GET, 'screenSmartphone');
    $sizeScreenSmartphone = filter_input(INPUT_GET, 'sizeScreenSmartphone');

    // laptop
    $brandLaptop = filter_input(INPUT_GET, 'brandLaptop');
    $usageNeedLaptop = filter_input(INPUT_GET, 'usageNeedLaptop');
    $sizeScreenLaptop = filter_input(INPUT_GET, 'sizeScreenLaptop');
    $cpuLaptop = filter_input(INPUT_GET, 'cpuLaptop');
    $ramLaptop = filter_input(INPUT_GET, 'ramLaptop');
    $graphicsCardLaptop = filter_input(INPUT_GET, 'graphicsCardLaptop');
    $hardDriverLaptop = filter_input(INPUT_GET, 'hardDriverLaptop');
    $screenResolutionLaptop = filter_input(INPUT_GET, 'screenResolutionLaptop');
    $sweepFrequencyLaptop = filter_input(INPUT_GET, 'sweepFrequencyLaptop');

    // tablet
    $brandTablet = filter_input(INPUT_GET, 'brandTablet');
    $screenTablet1 = filter_input(INPUT_GET, 'screenTablet1');
    $screenTablet2 = filter_input(INPUT_GET, 'screenTablet2');
    $screenTablet3 = filter_input(INPUT_GET, 'screenTablet3');
    $ramTablet = filter_input(INPUT_GET, 'ramTablet');
    $internalMemoryTablet = filter_input(INPUT_GET, 'internalMemoryTablet');

    // PC
    $brandPC = filter_input(INPUT_GET, 'brandPC');
    $cpuPC = filter_input(INPUT_GET, 'cpuPC');
    $ramPC = filter_input(INPUT_GET, 'ramPC');
    $hardDriverPC = filter_input(INPUT_GET, 'hardDriverPC');
    $graphicsCardPC = filter_input(INPUT_GET, 'graphicsCardPC');
    $usageNeedPC = filter_input(INPUT_GET, 'usageNeedPC');

    // Watch
    $brandWatch = filter_input(INPUT_GET, 'brandWatch');
    $typeWatch = filter_input(INPUT_GET, 'typeWatch');
    $batteryLifeWatch1 = filter_input(INPUT_GET, 'batteryLifeWatch1');
    $batteryLifeWatch2 = filter_input(INPUT_GET, 'batteryLifeWatch2');
    $batteryLifeWatch3 = filter_input(INPUT_GET, 'batteryLifeWatch3');
    $faceShapeWatch = filter_input(INPUT_GET, 'faceShapeWatch');
    $bandMaterialWatch = filter_input(INPUT_GET, 'bandMaterialWatch');

    // Accessory
    $brandAccessory = filter_input(INPUT_GET, 'brandAccessory');
    $typeAccessory = filter_input(INPUT_GET, 'typeAccessory');
    $compatibleAccessory = filter_input(INPUT_GET, 'compatibleAccessory');

    // Television
    $brandTelevision = filter_input(INPUT_GET, 'brandTelevision');
    $sizeScreenTelevision = filter_input(INPUT_GET, 'sizeScreenTelevision');
    $resolutionTelevision = filter_input(INPUT_GET, 'resolutionTelevision');
    $typeTelevision = filter_input(INPUT_GET, 'typeTelevision');

    // Refrigerator
    $brandRefrigerator = filter_input(INPUT_GET, 'brandRefrigerator');
    $typeRefrigerator = filter_input(INPUT_GET, 'typeRefrigerator');
    $useCapacityRefrigerator1 = filter_input(INPUT_GET, 'useCapacityRefrigerator1');
    $useCapacityRefrigerator2 = filter_input(INPUT_GET, 'useCapacityRefrigerator2');
    $useCapacityRefrigerator3 = filter_input(INPUT_GET, 'useCapacityRefrigerator3');

    $productsByCategory = $filterDB->getFilterProducts($startPrice, $endPrice, $lastMaxPrice,
            $brandSmartphone, $typeSmartphone, $functionSmartphone, $configurationSmartphone,
            $sizeBatterySmartphone, $batteryTechnologySmartphone, $ramSmartphone, $internalMemorySmartphone,
            $cameraSmartphone, $specialFeaturesSmartphone, $designSmartphone, $screenSmartphone,
            $sizeScreenSmartphone,
            $brandLaptop, $usageNeedLaptop, $sizeScreenLaptop, $cpuLaptop, $ramLaptop, $graphicsCardLaptop,
            $hardDriverLaptop, $screenResolutionLaptop, $sweepFrequencyLaptop,
            $brandTablet, $screenTablet1, $screenTablet2, $screenTablet3, $ramTablet,
            $internalMemoryTablet,
            $brandPC, $cpuPC, $ramPC, $hardDriverPC, $graphicsCardPC, $usageNeedPC,
            $brandWatch, $typeWatch, $batteryLifeWatch1, $batteryLifeWatch2, $batteryLifeWatch3,
            $faceShapeWatch, $bandMaterialWatch,
            $brandAccessory, $typeAccessory, $compatibleAccessory,
            $brandTelevision, $sizeScreenTelevision, $resolutionTelevision, $typeTelevision,
            $brandRefrigerator, $typeRefrigerator, $useCapacityRefrigerator1, $useCapacityRefrigerator2,
            $useCapacityRefrigerator3,
            $categoryID);
    $getProductsPagination = $filterDB->getFilterProductsPagination($startPrice, $endPrice, $lastMaxPrice,
            $brandSmartphone, $typeSmartphone, $functionSmartphone, $configurationSmartphone,
            $sizeBatterySmartphone, $batteryTechnologySmartphone, $ramSmartphone, $internalMemorySmartphone,
            $cameraSmartphone, $specialFeaturesSmartphone, $designSmartphone, $screenSmartphone,
            $sizeScreenSmartphone,
            $brandLaptop, $usageNeedLaptop, $sizeScreenLaptop, $cpuLaptop, $ramLaptop, $graphicsCardLaptop,
            $hardDriverLaptop, $screenResolutionLaptop, $sweepFrequencyLaptop,
            $brandTablet, $screenTablet1, $screenTablet2, $screenTablet3, $ramTablet,
            $internalMemoryTablet,
            $brandPC, $cpuPC, $ramPC, $hardDriverPC, $graphicsCardPC, $usageNeedPC,
            $brandWatch, $typeWatch, $batteryLifeWatch1, $batteryLifeWatch2, $batteryLifeWatch3,
            $faceShapeWatch, $bandMaterialWatch,
            $brandAccessory, $typeAccessory, $compatibleAccessory,
            $brandTelevision, $sizeScreenTelevision, $resolutionTelevision, $typeTelevision,
            $brandRefrigerator, $typeRefrigerator, $useCapacityRefrigerator1, $useCapacityRefrigerator2,
            $useCapacityRefrigerator3,
            $categoryID, $productNumber, $offset);

    $totalPage = ceil(count($productsByCategory) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;

    include '../View/user/productsByCategory.php';
} else if ($action == "product_detail") {
    // show product detail

    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);

    // View product detail
    $productName = filter_input(INPUT_GET, "productName");
    $productView = $productDB->productDetail($productName);
    
    if(isset($_SESSION['email'])){
        // if click product , add product in table viewproducts
        $viewProductID = filter_input(INPUT_POST, 'viewProductID');
        $email = $_SESSION['email'];
        $account = $accountDB->getAccount($email);
        $accountID = $account->getAccountID();
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $viewDate = date("Y/m/d H:i:s");
        $productDB->addViewProducts($viewProductID, $productName, $accountID, $viewDate);
    }
    // set time sale
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $now = new DateTime();
    $timeOut = new DateTime('2022/07/15 15:07:02');

    // get value sale
    $getProductInFlashSale = $flashsaleDB->getProductInFlashSale($productName);

    // if click add to cart
    if (isset($_POST['addToCart'])) {
        $quantity_new = filter_input(INPUT_POST, 'quantity', FILTER_DEFAULT,
                FILTER_REQUIRE_ARRAY);
        
        foreach ($quantity_new as $productName => $quantity) {
            $price = $productView->getPrice();

            if ($timeOut > $now) {
                if (empty($getProductInFlashSale)) {
                    $discount = $productView->getDiscount();
                    $finalPrice = $productView->getFinalPrice();
                } else {
                    $discount = $getProductInFlashSale['discountSale'];
                    $finalPrice = $getProductInFlashSale['finalPriceSale'];
                }
            } else {
                $discount = $productView->getDiscount();
                $finalPrice = $productView->getFinalPrice();
            }


            $quantity_product = $productView->getQuantity();
            $categoryID1 = $productView->getCategoryID();
            $category = $categoryDB->getCategoryByCategoryID($categoryID1);
            if (isset($_SESSION['cart'][$productName])) {
                $_SESSION['cart'][$productName]['quantity']++;
            } else {
                $_SESSION['cart'][$productName] = array(
                    "productName" => $productName,
                    "price" => $price,
                    "discount" => $discount,
                    "quantity_product" => $quantity_product,
                    "finalPrice" => $finalPrice,
                    "categoryName" => $category->getCategoryName(),
                    "quantity" => $quantity
                );
            }
        }
    }
    if(isset($_SESSION['email'])){
        // if click buy now
        if (isset($_POST['buyNow'])) {
            $quantity_new = filter_input(INPUT_POST, 'quantity', FILTER_DEFAULT,
                    FILTER_REQUIRE_ARRAY);
            $_SESSION['discountCode'] = array(
                'discountCode' => "Unknown"
            );
            foreach ($quantity_new as $productName => $quantity) {
                $price = $productView->getPrice();
                $discount = $productView->getDiscount();
                $finalPrice = $productView->getFinalPrice();
                $quantity_product = $productView->getQuantity();
                $categoryID1 = $productView->getCategoryID();
                $category = $categoryDB->getCategoryByCategoryID($categoryID1);
                if (isset($_SESSION['cart'][$productName])) {
                    $_SESSION['cart'][$productName]['quantity']++;
                } else {
                    $_SESSION['cart'][$productName] = array(
                        "productName" => $productName,
                        "price" => $price,
                        "discount" => $discount,
                        "quantity_product" => $quantity_product,
                        "finalPrice" => $finalPrice,
                        "categoryName" => $category->getCategoryName(),
                        "quantity" => $quantity
                    );
                }
            }
            header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=check_out");
        }
    }else{
        if(isset($_POST['buyNow'])){
            header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=login_page");
        }
    }
    



    // other products and same category
    $productOfCategoryOther1s = $productDB->showProductOfCategoryOther1($productName, $categoryID);
    $productOfCategoryOther2s = $productDB->showProductOfCategoryOther2($productName, $categoryID);

    // other products and other category
    $productOther1s = $productDB->showProductOther1($categoryID);
    $productOther2s = $productDB->showProductOther2($categoryID);

    // rate product
    if(isset($_SESSION['email'])){
        if (isset($_POST['rateButton'])) {
            $rateID = filter_input(INPUT_POST, 'rateID');
            $email = $_SESSION['email'];
            $account = $accountDB->getAccount($email);
            $accountID = $account->getAccountID();
            $rateStarNumber = filter_input(INPUT_POST, 'rateStarNumber');
            $content = filter_input(INPUT_POST, 'content');
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $timeRate = date("Y/m/d H:i:s");
            $productDB->rateStarProduct($rateID, $accountID, $productName, $rateStarNumber, $content, $timeRate);
        }
    }else{
        if(isset($_POST['rateButton'])){
            header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=login_page");
        }
    }
    

    //  show content rates of a product
    $rates = $productDB->getRateProducts($productName);

    // count number rate of a product
    $countRate = count($rates);

    // quick view product care 
    $getProductsInterest = $productDB->getProductsInterest();

    include '../View/user/productDetail.php';
}else if ($action == "Customer_Profile") {
    // manage account
    $account = $accountDB->getAccount($_SESSION['email']);
    $contentNav = filter_input(INPUT_GET, 'contentNav');
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    //customer profile 
    $customer = $customerDB->getCustomer($account->getAccountID());
    $customerID = filter_input(INPUT_POST, 'customerID');
    $customerImage = filter_input(INPUT_POST, 'customerImage');
    $customerName = filter_input(INPUT_POST, 'customerName');
    $customerPhone = filter_input(INPUT_POST, 'customerPhone');
    $customerEmail = $_SESSION['email'];
    $customerAddress = filter_input(INPUT_POST, 'customerAddress');
    $customerNameAddress = filter_input(INPUT_POST, 'customerNameAddress');
    if (isset($_POST['saveCustomer'])) {
        if(empty($customerName) || empty($customerPhone) || empty($customerAddress)){
            $message = "Vui lòng điền đầy đủ thông tin khách hàng";
        }else{
            $customerDB->addCustomer($customerID, $customerImage, $customerName,
                $customerPhone, $customerEmail, $customerAddress, $customerNameAddress, $account->getAccountID());
                $messageAccount = "Lưu thông tin khách hàng thành công";
        }


     }
    if(isset($_POST['updateCustomer'])){
        if(empty($customerName) || empty($customerPhone) || empty($customerAddress)){
            $message = "Vui lòng điền đầy đủ thông tin khách hàng";
        }else{
            $customerDB->updateCustomer($customer['customerID'], $customerImage, $customerName, $customerPhone,
                    $customerAddress, $customerNameAddress);
                $messageAccount = "Cập nhật thông tin khách hàng thành công";
        }
    }
    

    // my order and pagination
    if (empty($orderNumber)) {
        $orderNumber = 5;
    }
    if (isset($_POST['applyOrderNumber'])) {
        $orderNumber = filter_input(INPUT_POST, 'orderNumber');
    }
    $getOrdersByAccount = $orderDB->getOrdersByAccount($_SESSION['email']);
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $orderNumber;
    $getOrdersByAccountPagination = $orderDB->getOrdersByAccountPagination($_SESSION['email'], $orderNumber, $offset);
    $totalPage = ceil(count($getOrdersByAccount) / $orderNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    
    //view product in order
    if (isset($_POST['viewOrder'])) {
        $orderID = filter_input(INPUT_GET, 'orderID');
        $viewProductsByOrder = $orderDB->viewProductsByOrder($orderID);
    }

    // cancel order
    if (isset($_POST['cancelOrder'])) {
        $orderID = filter_input(INPUT_GET, 'orderID');
        $orderDB->cancelOrder($orderID);
        header('Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=Customer_Profile&contentNav=MyOrder');
    }


    // change password
    if (isset($_POST['savePasswordNew'])) {
        $password_old = filter_input(INPUT_POST, "password_old");
        $password_new = filter_input(INPUT_POST, "password_new");
        $re_password_new = filter_input(INPUT_POST, "re_password_new");
        $password_pattern = '/^(?=.*[[:digit:]])[[:alnum:]]{6,}$/';
        $password_old_encode = md5($password_old);
        if (empty($password_old)) {
            $messagePO = "Vui lòng nhập mật khẩu cũ của bạn";
        } else if ($password_old_encode != $account->getPassword()) {
            $messageVO = "Mật khẩu cũ không đúng";
        } else if (empty($password_new)) {
            $messagePN = "Mật khẩu mới không được để trống";
        } else if(preg_match($password_pattern, $password_new) == 0){ 
            $messagePN = "Mật khẩu phải có ít nhất 1 số và độ dài tối thiểu 6 ký tự";
        }else if ($password_new != $re_password_new) {
            $messageRPN = "Không trùng mật khẩu";
        } else {
            $password_new_encode = md5($password_new);
            $accountDB->updatePassword($account->getEmail(), $password_new_encode);
            $messageP = "Thay đổi mật khẩu thành công";
        }
    }
    
    include '../View/user/accountProfile.php';
}else if($action == "filterOrder"){
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    $state = filter_input(INPUT_GET, 'state');
    $contentNav = filter_input(INPUT_GET, 'contentNav');
    if (isset($_POST['applyOrderNumber'])) {
        $orderNumber = filter_input(INPUT_POST, 'orderNumber');
    }
    if (empty($orderNumber)) {
        $orderNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $orderNumber;
    if(empty($state)){
        $countOrder = $orderDB->getOrdersByAccount($_SESSION['email']);
        $getOrdersByAccountPagination = $orderDB->getOrdersByAccountPagination($_SESSION['email'], $orderNumber, $offset);
    }else{
        $countOrder = $orderDB->filterOrder($state, $_SESSION['email']);
        $getOrdersByAccountPagination = $orderDB->filterOrderPagination($state, $_SESSION['email'], $orderNumber, $offset);
    }
    $totalPage = ceil(count($countOrder) / $orderNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    include '../View/user/accountProfile.php';
}
else if($action == "introduction"){
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    include '../View/user/introduction.php';
}
else if ($action == "login_page") {
    // login
    if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
        if (isset($_POST['login'])) {
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            if (empty($email) || empty($password)) {
                $message = "Vui lòng điền đầy đủ thông tin đăng nhập";
            } else {
                $password_encode = md5($password);
                $login = $accountDB->checkLogin($email, $password_encode);
                if(empty($login)){
                    $message = "Sai email hoặc mật khẩu!Vui lòng điền chính xác thông tin đăng nhập!";
                }else{
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password_encode;
                    header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=home_page");
                }   
            }
            // chuyển đổi trạng thái khi đang nhập
            $stateAccount = "Online";
            $accountDB->updateAccount($email, $stateAccount);
        }
    } else {
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=home_page");
    }

    include '../View/user/login.php';
} else if ($action == "registration_page") {
    // registration
    if (isset($_POST['registration'])) {
        $accountID = filter_input(INPUT_POST, 'accountID');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $confirmPassword = filter_input(INPUT_POST, 'confirmPassword');
        $roles = "user";
        $registerDate = date("Y/m/d H:i:s");
        $stateAccount = "Offline";
        $password_pattern = '/^(?=.*[[:digit:]])[[:alnum:]]{6,}$/';
        
        if (empty($email) || empty($password)) {
            $message = "Vui lòng điền đầy đủ thông tin đăng ký";
        } else {
            $accounts = $accountDB->getAccounts();
            $duplicateAccount = false;
            foreach ($accounts as $account) {
                if ($email == $account['email']) {
                    $duplicateAccount = true;
                    break;
                }
            }
            if ($duplicateAccount == true) {
                $message = "Tài khoản $email đã tồn tại";
            }else{
                if(preg_match($password_pattern, $password) == 0){
                    $message = "Mật khẩu phải có ít nhất 1 chữ số và độ dài 6 ký tự";
                }else{
                    if ($password != $confirmPassword) {
                        $message = "Không trùng mật khẩu!Vui lòng kiểm tra lại!!";
                    } else {
                        $password_encode = md5($password);
                        $accountDB->addAccount($accountID, $email, $password_encode, $roles,
                                $registerDate, $stateAccount);
                        $message = "Đăng ký người dùng thành công";
                    }
                }
            }
            
        }
    }

    include '../View/user/registration.php';
} else if ($action == "logout_page") {
    $stateAccount = "Offline";
    $accountDB->updateAccount($_SESSION['email'], $stateAccount);
    //logout
    session_start();
    if ($_SESSION['email']) {
        $_SESSION = array();
        session_destroy();
        $name = session_name();
        $expire = strtotime('-1 day');
        $params = session_get_cookie_params();
        $path = $params['path'];
        $domain = $params['domain'];
        $secure = $params['secure'];
        $httponly = $params['httponly'];
        setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
        
        header('Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=home_page');
    } else {
        header('Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=home_page');
    }
    
}
?>

