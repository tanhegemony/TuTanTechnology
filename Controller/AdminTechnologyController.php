<?php

require '../model/database.php';
require '../model/account.php';
require '../model/account_db.php';
require '../model/category.php';
require '../model/category_db.php';
require '../model/product.php';
require '../model/product_db.php';
require '../model/flashsale_db.php';
require '../model/member_db.php';
require '../model/discountcode_db.php';
require '../model/order_db.php';
require '../model/rate_db.php';
require '../model/typecategory_db.php';
require '../model/product_detail_db.php';
require '../model/customer_db.php';

$lifetime = 60 * 60 * 24; //one day
session_set_cookie_params($lifetime, '/');
session_start(); 

$productDB = new ProductDB();
$categoryDB = new CategoryDB();
$flashsaleDB = new FlashsaleDB();
$memberDB = new MemberDB();
$discountCodeDB = new discountcodeDB();
$orderDB = new orderDB();
$rateDB = new rateDB();
$typecategoryDB = new typecategoryDB();
$accountDB = new AccountDB();
$productDetailDB = new ProductDetailDB();
$customerDB = new CustomerDB();



$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = 'dashboard';
}

if ($action == 'dashboard') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    // tổng tiền đã thanh toán
    $buyDate1 = date("2022/03/12 00:00:00");
    $updateDateOrder = new DateTime("2022/03/12 00:00:00");
    $state1 = "Đã giao";
    $order1s = $orderDB->getOrdersCondition($state1, $buyDate1);
    $totalPaid = 0;
    foreach ($order1s as $order){
        $totalPaid += $order['total'];
    }
    // tin nhắn / bình luận
    $timeRate1 = date("2022/03/12 00:00:00");
    $updateDateRate = new DateTime("2022/03/12 00:00:00");
    $rates = $rateDB->getRatesCondition($timeRate1);
    // đơn hàng đang chờ xử lý
    $buyDate2 = date("2022/03/12 00:00:00");
    $updateDateOrderHandle = new DateTime("2022/03/12 00:00:00");
    $state2 = "Đang chờ duyệt";
    $order2s = $orderDB->getOrdersCondition($state2, $buyDate2);
    // thành viên mới tham gia
    $joinDate1 = date("2022/03/12 00:00:00");
    $updateDateMember = new DateTime($joinDate1);
    $members = $memberDB->getMembersCondition($joinDate1);
    // đang trực tuyến 
    $stateAccount = "Online";
    $accounts = $accountDB->getAccountByState($stateAccount);
    
    include('../View/admin/dashboard.php');
}else if ($action == 'manageAccount') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    
    $countAccount = $accountDB->getAccounts();
    
    if (isset($_POST['applyAccountNumber'])) {
        $accountNumber = filter_input(INPUT_POST, 'accountNumber');
    }
    if (empty($accountNumber)) {
        $accountNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $accountNumber;
    $accounts = $accountDB->getAccountsPagination($accountNumber, $offset);
    $totalPage = ceil(count($countAccount) / $accountNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    
    if (isset($_POST['deleteAccount'])) {
        $accountID = filter_input(INPUT_POST, 'accountID', FILTER_VALIDATE_INT);
        if (empty($accountID)) {  
        } else {
            $accountDB->deleteAccount($accountID);
            $message = "Xoá người dùng thành công";
            header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageAccount");
        }
    }
    include '../View/admin/manageAccount.php';
}else if($action == 'edit_account'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    
    $accountID = filter_input(INPUT_GET, 'accountID');
    $accountEdit = $accountDB->getAccountByID($accountID);
    if(isset($_POST['UpdateAccount'])){
        $roles = $_POST['roles'];
        $accountDB->updateAccountAdmin($accountID, $roles);
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageAccount");
    }
    include '../View/admin/addAccount.php';
}

else if($action == 'search_account'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    
    $contentAccount = filter_input(INPUT_GET, 'contentAccount');
    if (isset($_POST['applyAccountNumber'])) {
        $accountNumber = filter_input(INPUT_POST, 'accountNumber');
    }
    if (empty($accountNumber)) {
        $accountNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $accountNumber;
    if(empty($contentAccount)){
        $countAccount = $accountDB->getAccounts();
        $accounts = $accountDB->getAccountsPagination($accountNumber, $offset);
    }else{
        $countAccount = $accountDB->searchAccount($contentAccount);
        $accounts = $accountDB->searchAccountPagination($contentAccount, $accountNumber, $offset);
    }
    $totalPage = ceil(count($countAccount) / $accountNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageAccount.php';
    
}
else if($action == 'add_account'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    
    if(isset($_POST['addAccount'])){
        $accountID = filter_input(INPUT_POST, 'accountID');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $re_password = filter_input(INPUT_POST, 're_password');
        $roles = $_POST['roles'];
        $registerDate = date("Y/m/d H:i:s");
        $stateAccount = "Offline";
        if(empty($email) || empty($password)){
            $message = "Vui lòng nhập đầy đủ thông tin thêm tài khoản";
        }else{
            $accounts = $accountDB->getAccounts();
            $duplicateAccount = false;
            foreach ($accounts as $account){
                if($email == $account['email']){
                    $duplicateAccount = true;
                    break;
                }
            }
            if($duplicateAccount == true){
                $message = "Tài khoản đã tồn tại";
            }else{
                if($password != $re_password){
                    $message = "Mật khẩu nhập lại không trùng!!";
                }else{
                    $accountDB->addAccount($accountID, $email, $password, $roles, 
                            $registerDate, $stateAccount);
                    $message = "Thêm tài khoản thành công";
                }
            }
        }
    }
    include '../View/admin/addAccount.php';
}else if ($action == 'manageCustomer') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $countCustomer = $customerDB->getCustomers();
    
    if (isset($_POST['applyCustomerNumber'])) {
        $customerNumber = filter_input(INPUT_POST, 'customerNumber');
    }
    if (empty($customerNumber)) {
        $customerNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $customerNumber;
    $customers = $customerDB->getCustomersPagination($customerNumber, $offset);
    $totalPage = ceil(count($countCustomer) / $customerNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    
    if (isset($_POST['deleteCustomer'])) {
        $customerID = filter_input(INPUT_POST, 'customerID', FILTER_VALIDATE_INT);
        $customerDB->deleteCustomer($customerID);
        $message = "Xoá khách hàng thành công";
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageCustomer");
    }
    
    include '../View/admin/manageCustomer.php';
}else if($action == 'edit_customer'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $customerID = filter_input(INPUT_GET, 'customerID');
    $customer = $customerDB->getCustomerByID($customerID);
    if(isset($_POST['UpdateCustomer'])){
        $customerImage = filter_input(INPUT_POST, 'customerImage');
        $customerName = filter_input(INPUT_POST, 'customerName');
        $customerPhone = filter_input(INPUT_POST, 'customerPhone');
        $customerAddress = filter_input(INPUT_POST, 'customerAddress');
        $customerNameAddress = filter_input(INPUT_POST, 'customerNameAddress');
        $customerDB->updateCustomer($customerID, $customerImage, $customerName, $customerPhone, 
                $customerAddress, $customerNameAddress);
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageCustomer");
    }
    include '../View/admin/editCustomer.php';
}

else if($action == 'search_customer'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $contentCustomer = filter_input(INPUT_GET, 'contentCustomer');
    if (isset($_POST['applyCustomerNumber'])) {
        $customerNumber = filter_input(INPUT_POST, 'customerNumber');
    }
    if (empty($customerNumber)) {
        $customerNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $customerNumber;
    if(empty($contentCustomer)){
        $countCustomer = $customerDB->getCustomers();
        $customers = $customerDB->getCustomersPagination($customerNumber, $offset);
    }else{
        $countCustomer = $customerDB->searchCustomer($contentCustomer);
        $customers = $customerDB->searchCustomerPagination($contentCustomer, $customerNumber, $offset);
    }
    $totalPage = ceil(count($countCustomer) / $customerNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageCustomer.php';
    
}else if ($action == 'manageCategory') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $categories = $categoryDB->getCategoriesAdmin();
    
    if (isset($_POST['deleteCategory'])) {
        $categoryID = filter_input(INPUT_POST, 'categoryID', FILTER_VALIDATE_INT);
        if (empty($categoryID)) {  
        } else {
            $categoryDB->deleteCategory($categoryID);
           header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageCategory");
        }
    }
    
    include '../View/admin/manageCategory.php';
} else if($action == 'search_category'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $contentCategory = filter_input(INPUT_GET, 'contentCategory');
    if(empty($contentCategory)){
        $categories = $categoryDB->getCategories();
    }else{
        $categories = $categoryDB->searchCategory($contentCategory);
    }
    include '../View/admin/manageCategory.php';
    
}else if($action == 'edit_category'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $categoryID = filter_input(INPUT_GET, 'categoryID');
    $category = $categoryDB->getCategoryByCategoryID($categoryID);
    if(isset($_POST['UpdateCategory'])){
        $categoryName = filter_input(INPUT_POST, 'categoryName');
        $typeCategoryID = $_POST['typeCategoryID'];
        if(empty($categoryName)){
            $message = "Vui lòng nhập đầy đủ thông tin cập nhật danh mục";
        }else{
             $categoryDB->updateCategory($categoryID, $categoryName, $typeCategoryID);
               header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageCategory");
        }
    }
    include '../View/admin/addCategory.php';
}
else if($action == 'add_category'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    if(isset($_POST['addCategory'])){
        $categoryID = filter_input(INPUT_POST, 'categoryID');
        $categoryName = filter_input(INPUT_POST, 'categoryName');
        $typeCategoryID = $_POST['typeCategoryID'];
        if(empty($categoryName) || empty($typeCategoryID)){
            $message = "Vui lòng nhập đầy đủ thông tin thêm danh mục";
        }else{
            $categories = $categoryDB->getCategoriesAdmin();
            $duplicateCategory = false;
            foreach ($categories as $category){
                if($categoryName == $category['categoryName']){
                    $duplicateCategory = true;
                    break;
                }
            }
            if($duplicateCategory == true){
                $message = "Danh mục đã tồn tại";
            }else{
                $categoryDB->addCategory($categoryID, $categoryName, $typeCategoryID);
                header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageCategory");
            }
        }
    }
    include '../View/admin/addCategory.php';
}else if ($action == 'manageTypeCategory') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $typeCategories = $typecategoryDB->getTypeCategories();
    include '../View/admin/manageTypeCategory.php';
}else if($action == 'search_type_category'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $contentTypeCategory = filter_input(INPUT_GET, 'contentTypeCategory');
    if(empty($contentTypeCategory)){
        $typeCategories = $typecategoryDB->getTypeCategories();
    }else{
        $typeCategories = $typecategoryDB->searchTypeCategory($contentTypeCategory);
    }
    
    include '../View/admin/manageTypeCategory.php';
    
}else if ($action == 'manageProduct') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $countProduct = $productDB->getProducts();
    
    if (isset($_POST['applyProductNumber'])) {
        $productNumber = filter_input(INPUT_POST, 'productNumber');
    }
    if (empty($productNumber)) {
        $productNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;
    $products = $productDB->getProductsPaginationAdmin($productNumber, $offset);
    $totalPage = ceil(count($countProduct) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    if (isset($_POST['deleteProduct'])) {
        $productID = filter_input(INPUT_POST, 'productID');
        $productDB->deleteProduct($productID);
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageProduct");
    }
    include('../View/admin/manageProduct.php');
}else if($action == 'search_product'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $contentProduct = filter_input(INPUT_GET, 'contentProduct');
    if (isset($_POST['applyProductNumber'])) {
        $productNumber = filter_input(INPUT_POST, 'productNumber');
    }
    if (empty($productNumber)) {
        $productNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;
    if(empty($contentProduct)){
        $countProduct = $productDB->getProducts();
        $products = $productDB->getProductsPagination($accountNumber, $offset);
    }else{
        $countProduct = $productDB->searchProduct($contentProduct);
        $products = $productDB->searchProductPagination($contentProduct, $productNumber, $offset);
    }
    $totalPage = ceil(count($countProduct) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageProduct.php';
    
}else if($action == 'edit_product'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $productID = filter_input(INPUT_GET, 'productID');
    $product = $productDB->getProductByProductID($productID);
    if(isset($_POST['UpdateProduct'])){
        $productName = filter_input(INPUT_POST, 'productName');
        $price = filter_input(INPUT_POST, 'price');
        $discount = filter_input(INPUT_POST, 'discount');
        $finalPrice = $price - ($price * $discount / 100);
        $quantity = filter_input(INPUT_POST, 'quantity');
        $description = filter_input(INPUT_POST, 'description');
        $categoryID = filter_input(INPUT_POST, 'categoryID');
        if(empty($productName)|| empty($price)|| empty($discount) || empty($quantity)
                || empty($description)||empty($categoryID)){
            $message = "Vui lòng nhập đầy đủ thông tin cập nhật sản phẩm";
        }else{
            $productDB->updateProduct($productID, $productName, $price, $discount, 
                       $finalPrice, $quantity, $description, $categoryID);
               $message = "Cập nhật sản phẩm thành công! Hình ảnh sau cập nhật bị lỗi, nếu bạn muốn hiển thị hình ảnh "
                       . " thì bạn hãy chỉnh sửa trong file images ảnh trùng lại với tên sản phẩm đã chỉnh sửa";
        }
    }
    include '../View/admin/addProduct.php';
}

else if($action == 'add_product'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    if (isset($_POST['addProduct'])){
        $productID = filter_input(INPUT_POST, 'productID');
        $productName =filter_input(INPUT_POST, 'productName');
        $price = filter_input(INPUT_POST, 'price');
        $discount = filter_input(INPUT_POST, 'discount');
        $finalPrice = $price - ($price * $discount / 100);
        $quantity = filter_input(INPUT_POST, 'quantity');
        $description = filter_input(INPUT_POST, 'description');
        $categoryID = filter_input(INPUT_POST, 'categoryID');
        if (empty($productName)|| empty($price)|| empty($discount) || empty($quantity)
                || empty($description)||empty($categoryID)){
            $message = "Vui lòng nhập dầy đủ thông tin sản phẩm";
        } else {
           $products = $productDB->getProducts();
           $duplicateProduct= false;
           foreach ($products as $product){
               if ($productName == $product['productName']){
                   $duplicateProduct = true;
                   break;
               }
           }
           if ($duplicateProduct == true){
               $message = "Sản phẩm $productName đã tồn tại";
               
           } else {
              $productDB->addProduct($productID, $productName, $price, $discount, $finalPrice, 
                      $quantity, $description, $categoryID);
              $message= "Thêm sản phẩm thành công!Bạn vui lòng chuyển qua trang Thêm "
                      . "các thông tin khác để nhập thông tin cần thiết cho một sản phẩm!!";
           }
        }
    }
    
    
    include '../View/admin/addProduct.php';
} else if ($action == 'manageProductDetail') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $categoryID = filter_input(INPUT_GET, 'categoryID');
    $category = $categoryDB->getCategoryByCategoryID($categoryID);
    $countProductsInProductDetail = $productDetailDB->getProductInProductDetail($categoryID);
    
    if (isset($_POST['applyProductNumber'])) {
        $productNumber = filter_input(INPUT_POST, 'productNumber');
    }
    if (empty($productNumber)) {
        $productNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;
    $productsInProductDetail = $productDetailDB->getProductInProductDetailPagination($categoryID, $productNumber, $offset);
    $totalPage = ceil(count($countProductsInProductDetail) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    if (isset($_POST['deleteProductInProductDetail'])) {
        $productDetailID = filter_input(INPUT_POST, 'productDetailID');
        $productDetailDB->deleteProductInProductDetail($productDetailID);
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageProductDetail&categoryID=$categoryID");
    }
    
    if(isset($_POST['viewProductDetail'])){
        $productDetailID = filter_input(INPUT_GET, 'productDetailID');
        $categoryID = filter_input(INPUT_GET, 'categoryID');
        $category = $categoryDB->getCategoryByCategoryID($categoryID);
        $productInProductDetail = $productDetailDB->getProductDetailByID($productDetailID, $categoryID);
    }
    
    include '../View/admin/manageProductDetail.php'; 
}else if($action == 'search_product_detail'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $categoryID = filter_input(INPUT_GET, 'categoryID');
    $category = $categoryDB->getCategoryByCategoryID($categoryID);
    $contentProductDetail = filter_input(INPUT_GET, 'contentProductDetail');
    
    if (isset($_POST['applyProductNumber'])) {
        $productNumber = filter_input(INPUT_POST, 'productNumber');
    }
    if (empty($productNumber)) {
        $productNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $productNumber;
    if(empty($contentProductDetail)){
        $countProductsInProductDetail = $productDetailDB->getProductInProductDetail($categoryID);
        $productsInProductDetail = $productDetailDB->getProductInProductDetailPagination($categoryID, $productNumber, $offset);
    }else{
        $countProductsInProductDetail = $productDetailDB->searchProductDetail($contentProductDetail, $categoryID);
        $productsInProductDetail = $productDetailDB->searchProductDetailPagination($contentProductDetail, $categoryID, $productNumber, $offset);
    }
    $totalPage = ceil(count($countProductsInProductDetail) / $productNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageProductDetail.php';
}else if($action == "edit_product_detail"){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $productDetailID = filter_input(INPUT_GET, 'productDetailID');
    $categoryID = filter_input(INPUT_GET, 'categoryID');
    $category = $categoryDB->getCategoryByCategoryID($categoryID);
    $productInProductDetail = $productDetailDB->getProductDetailByID($productDetailID, $categoryID);
    if (isset($_POST['UpdateProductDetail'])) {
        //smartphone
        $brandSmartphone = filter_input(INPUT_POST, 'brandSmartphone');
        $typeSmartphone = filter_input(INPUT_POST, 'typeSmartphone');
        $functionSmartphone = filter_input(INPUT_POST, 'functionSmartphone');
        $configurationSmartphone = filter_input(INPUT_POST, 'configurationSmartphone');
        $batteryTechnologySmartphone = filter_input(INPUT_POST, 'batteryTechnologySmartphone');
        $sizeBatterySmartphone = filter_input(INPUT_POST, 'sizeBatterySmartphone');
        $chargerSmartphone = filter_input(INPUT_POST, 'chargerSmartphone');
        $ramSmartphone = filter_input(INPUT_POST, 'ramSmartphone');
        $internalMemorySmartphone = filter_input(INPUT_POST, 'internalMemorySmartphone');
        $designSmartphone = filter_input(INPUT_POST, 'designSmartphone');
        $colorSmartphone = filter_input(INPUT_POST, 'colorSmartphone');
        $chipSmartphone = filter_input(INPUT_POST, 'chipSmartphone');
        $simSmartphone = filter_input(INPUT_POST, 'simSmartphone');
        $screenSmartphone = filter_input(INPUT_POST, 'screenSmartphone');
        $screenTechnologySmartphone = filter_input(INPUT_POST, 'screenTechnologySmartphone');
        $sizeScreenSmartphone = filter_input(INPUT_POST, 'sizeScreenSmartphone');
        $operatingSystemSmartphone = filter_input(INPUT_POST, 'operatingSystemSmartphone');
        $cameraSmartphone = filter_input(INPUT_POST, 'cameraSmartphone');
        $frontCameraSmartphone = filter_input(INPUT_POST, 'frontCameraSmartphone');
        $rearCameraSmartphone = filter_input(INPUT_POST, 'rearCameraSmartphone');
        $specialFeaturesSmartphone = filter_input(INPUT_POST, 'specialFeaturesSmartphone');
        //laptop
        $brandLaptop = filter_input(INPUT_POST, 'brandLaptop');
        $cpuLaptop = filter_input(INPUT_POST, 'cpuLaptop');
        $ramLaptop = filter_input(INPUT_POST, 'ramLaptop');
        $hardDriverLaptop = filter_input(INPUT_POST, 'hardDriverLaptop');
        $graphicsCardLaptop = filter_input(INPUT_POST, 'graphicsCardLaptop');
        $sizeScreenLaptop = filter_input(INPUT_POST, 'sizeScreenLaptop');
        $screenResolutionLaptop = filter_input(INPUT_POST, 'screenResolutionLaptop');
        $sweepFrequencyLaptop = filter_input(INPUT_POST, 'sweepFrequencyLaptop');
        $usageNeedLaptop = filter_input(INPUT_POST, 'usageNeedLaptop');
        $operatingSystemLaptop = filter_input(INPUT_POST, 'operatingSystemLaptop');
        $sizeLaptop = filter_input(INPUT_POST, 'sizeLaptop');
        $weightLaptop = filter_input(INPUT_POST, 'weightLaptop');
        //Tablet
        $brandTablet = filter_input(INPUT_POST, 'brandTablet');
        $ramTablet = filter_input(INPUT_POST, 'ramTablet');
        $internalMemoryTablet = filter_input(INPUT_POST, 'internalMemoryTablet');
        $screenTablet = filter_input(INPUT_POST, 'screenTablet');
        $operatingSystemTablet = filter_input(INPUT_POST, 'operatingSystemTablet');
        $chipTablet = filter_input(INPUT_POST, 'chipTablet');
        $frontCameraTablet = filter_input(INPUT_POST, 'frontCameraTablet');
        $rearCameraTablet = filter_input(INPUT_POST, 'rearCameraTablet');
        $pinTablet = filter_input(INPUT_POST, 'pinTablet');
        $chargerTablet = filter_input(INPUT_POST, 'chargerTablet');
        //PC
        $brandPC = filter_input(INPUT_POST, 'brandPC');
        $cpuPC = filter_input(INPUT_POST, 'cpuPC');
        $ramPC = filter_input(INPUT_POST, 'ramPC');
        $hardDriverPC = filter_input(INPUT_POST, 'hardDriverPC');
        $graphicsCardPC = filter_input(INPUT_POST, 'graphicsCardPC');
        $usageNeedPC = filter_input(INPUT_POST, 'usageNeedPC');
        $sizePC = filter_input(INPUT_POST, 'sizePC');
        $weightPC = filter_input(INPUT_POST, 'weightPC');
        //Watch
        $brandWatch = filter_input(INPUT_POST, 'brandWatch');
        $typeWatch = filter_input(INPUT_POST, 'typeWatch');
        $faceShapeWatch = filter_input(INPUT_POST, 'faceShapeWatch');
        $bandMaterialWatch = filter_input(INPUT_POST, 'bandMaterialWatch');
        $screenWatch = filter_input(INPUT_POST, 'screenWatch');
        $sizeScreenWatch = filter_input(INPUT_POST, 'sizeScreenWatch');
        $batteryLifeWatch = filter_input(INPUT_POST, 'batteryLifeWatch');
        $sizeBatteryWatch = filter_input(INPUT_POST, 'sizeBatteryWatch');
        //Accessory
        $typeAccessory = filter_input(INPUT_POST, 'typeAccessory');
        $typeProductOfAccessory = filter_input(INPUT_POST, 'typeProductOfAccessory');
        $brandAccessory = filter_input(INPUT_POST, 'brandAccessory');
        $compatibleAccessory = filter_input(INPUT_POST, 'compatibleAccessory');
        $sizeAccessory = filter_input(INPUT_POST, 'sizeAccessory');
        $weightAccessory = filter_input(INPUT_POST, 'weightAccessory');
        //Television
        $brandTelevision = filter_input(INPUT_POST, 'brandTelevision');
        $sizeScreenTelevision = filter_input(INPUT_POST, 'sizeScreenTelevision');
        $resolutionTelevision = filter_input(INPUT_POST, 'resolutionTelevision');
        $typeTelevision = filter_input(INPUT_POST, 'typeTelevision');
        $operatingSystemTelevision = filter_input(INPUT_POST, 'operatingSystemTelevision');
        $sizeTelevision = filter_input(INPUT_POST, 'sizeTelevision');
        //Refrigerator
        $brandRefrigerator = filter_input(INPUT_POST, 'brandRefrigerator');
        $typeRefrigerator = filter_input(INPUT_POST, 'typeRefrigerator');
        $useCapacityRefrigerator = filter_input(INPUT_POST, 'useCapacityRefrigerator');
        $freezerCapacityRefrigerator = filter_input(INPUT_POST, 'freezerCapacityRefrigerator');
        $coolCompartmentRefrigerator = filter_input(INPUT_POST, 'coolCompartmentRefrigerator');
        $powerConsumptionRefrigerator = filter_input(INPUT_POST, 'powerConsumptionRefrigerator');
        $energySavingTechnologyRefrigerator = filter_input(INPUT_POST, 'energySavingTechnologyRefrigerator');
        $coolTechnologyRefrigerator = filter_input(INPUT_POST, 'coolTechnologyRefrigerator');
        $anti_odorTechnologyRefrigerator = filter_input(INPUT_POST, 'anti_odorTechnologyRefrigerator');
        $foodPreservationTechnologyRefrigerator = filter_input(INPUT_POST, 'foodPreservationTechnologyRefrigerator');
        $sizeRefrigerator = filter_input(INPUT_POST, 'sizeRefrigerator');
        $massRefrigerator = filter_input(INPUT_POST, 'massRefrigerator');
        if ($categoryID == "01") {
            if (empty($brandSmartphone) || empty($typeSmartphone) || empty($functionSmartphone) || empty($configurationSmartphone) || empty($batteryTechnologySmartphone) ||
                    empty($sizeBatterySmartphone) ||
                    empty($chargerSmartphone) || empty($ramSmartphone) ||
                    empty($internalMemorySmartphone) || empty($designSmartphone) || empty($colorSmartphone) || empty($chipSmartphone) || empty($simSmartphone) || empty($screenSmartphone) || empty($screenTechnologySmartphone) || empty($sizeScreenSmartphone) ||
                    empty($operatingSystemSmartphone) ||
                    empty($cameraSmartphone) || empty($frontCameraSmartphone) || empty($rearCameraSmartphone) ||
                    empty($specialFeaturesSmartphone)) {
                $message = "Vui lòng điền đầy đủ thông tin cần cập nhật cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "02") {
            if (empty($brandLaptop) || empty($cpuLaptop) || empty($ramLaptop) || empty($hardDriverLaptop) || empty($graphicsCardLaptop) || empty($sizeScreenLaptop) || empty($screenResolutionLaptop) || empty($sweepFrequencyLaptop) || empty($usageNeedLaptop) || empty($operatingSystemLaptop) || empty($sizeLaptop) || empty($weightLaptop)) {
                $message = "Vui lòng điền đầy đủ thông tin cần cập nhật cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "03") {
            if (empty($brandTablet) || empty($ramTablet) || empty($internalMemoryTablet) || empty($screenTablet) || empty($operatingSystemTablet) || empty($chipTablet) || empty($frontCameraTablet) || empty($rearCameraTablet) || empty($pinTablet) || empty($chargerTablet)) {
                $message = "Vui lòng điền đầy đủ thông tin cần cập nhật cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "04") {
            if (empty($brandPC) || empty($cpuPC) || empty($ramPC) || empty($hardDriverPC) || empty($graphicsCardPC) || empty($usageNeedPC) || empty($sizePC) || empty($weightPC)) {
                $message = "Vui lòng điền đầy đủ thông tin cần cập nhật cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "05") {
            if (empty($brandWatch) || empty($typeWatch) || empty($faceShapeWatch) ||
                    empty($bandMaterialWatch) || empty($screenWatch) || empty($sizeScreenWatch) || empty($batteryLifeWatch) || empty($sizeBatteryWatch)) {
                $message = "Vui lòng điền đầy đủ thông tin cần cập nhật cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "06") {
            if (empty($typeAccessory) || empty($typeProductOfAccessory) || empty($brandAccessory) || empty($compatibleAccessory) || empty($sizeAccessory) || empty($weightAccessory)) {
                $message = "Vui lòng điền đầy đủ thông tin cần cập nhật cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "07") {
            if (empty($brandTelevision) || empty($sizeScreenTelevision) || empty($resolutionTelevision) || empty($typeTelevision) || empty($operatingSystemTelevision) || empty($sizeTelevision)) {
                $message = "Vui lòng điền đầy đủ thông tin cần cập nhật cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "08") {
            if (empty($brandRefrigerator) || empty($typeRefrigerator) || empty($useCapacityRefrigerator) || empty($freezerCapacityRefrigerator) || empty($coolCompartmentRefrigerator) || empty($powerConsumptionRefrigerator) || empty($energySavingTechnologyRefrigerator) || empty($coolTechnologyRefrigerator) || empty($anti_odorTechnologyRefrigerator) || empty($foodPreservationTechnologyRefrigerator) || empty($sizeRefrigerator) || empty($massRefrigerator)) {
                $message = "Vui lòng điền đầy đủ thông tin cần cập nhật cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        }
        $productDetailDB->updateProductDetail($productDetailID, $brandSmartphone, $typeSmartphone, 
                $functionSmartphone, $configurationSmartphone, $batteryTechnologySmartphone, 
                $sizeBatterySmartphone, $chargerSmartphone, $ramSmartphone, $internalMemorySmartphone, 
                $designSmartphone, $colorSmartphone, $chipSmartphone, $simSmartphone, 
                $screenSmartphone, $screenTechnologySmartphone, $sizeScreenSmartphone, 
                $operatingSystemSmartphone, $cameraSmartphone, $frontCameraSmartphone, 
                $rearCameraSmartphone, $specialFeaturesSmartphone, 
                $brandLaptop, $cpuLaptop, $ramLaptop, $hardDriverLaptop, $graphicsCardLaptop, 
                $sizeScreenLaptop, $screenResolutionLaptop, $sweepFrequencyLaptop, $usageNeedLaptop, 
                $operatingSystemLaptop, $sizeLaptop, $weightLaptop, 
                $brandTablet, $ramTablet, $internalMemoryTablet, $screenTablet, $operatingSystemTablet, 
                $chipTablet, $frontCameraTablet, $rearCameraTablet, $pinTablet, $chargerTablet, 
                $brandPC, $cpuPC, $ramPC, $hardDriverPC, $graphicsCardPC, $usageNeedPC, $sizePC, $weightPC, 
                $brandWatch, $typeWatch, $faceShapeWatch, $bandMaterialWatch, $screenWatch, $sizeScreenWatch, 
                $batteryLifeWatch, $sizeBatteryWatch, 
                $typeAccessory, $typeProductOfAccessory, $brandAccessory, $compatibleAccessory, 
                $sizeAccessory, $weightAccessory, 
                $brandTelevision, $sizeScreenTelevision, $resolutionTelevision, 
                $typeTelevision, $operatingSystemTelevision, $sizeTelevision, 
                $brandRefrigerator, $typeRefrigerator, $useCapacityRefrigerator, 
                $freezerCapacityRefrigerator, $coolCompartmentRefrigerator, $powerConsumptionRefrigerator, 
                $energySavingTechnologyRefrigerator, $coolTechnologyRefrigerator, $anti_odorTechnologyRefrigerator, 
                $foodPreservationTechnologyRefrigerator, $sizeRefrigerator, $massRefrigerator, $productInProductDetail['productID']);
        
        $message = "Cập nhật thông tin sản phẩm thành công";
    }
    include '../View/admin/addProductDetail.php';
}else if ($action == 'add_product_detail') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $products = $productDetailDB->getProductsToAddProductDetail();
    $categoryID = filter_input(INPUT_POST, 'categoryID');
    $productID = filter_input(INPUT_POST, 'productID');
    if (isset($_POST['addProductDetail'])) {
        if (empty($productID)) {
            $message = "Vui lòng chọn sản phẩm";
            include '../View/admin/addProductDetail.php';
            exit();
        } else {
            if (empty($categoryID)) {
                $message = "Vui lòng chọn danh mục sản phẩm và loại sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        }
        $productDetailID = filter_input(INPUT_POST, 'productDetailID');
        //smartphone
        $brandSmartphone = filter_input(INPUT_POST, 'brandSmartphone');
        $typeSmartphone = filter_input(INPUT_POST, 'typeSmartphone');
        $functionSmartphone = filter_input(INPUT_POST, 'functionSmartphone');
        $configurationSmartphone = filter_input(INPUT_POST, 'configurationSmartphone');
        $batteryTechnologySmartphone = filter_input(INPUT_POST, 'batteryTechnologySmartphone');
        $sizeBatterySmartphone = filter_input(INPUT_POST, 'sizeBatterySmartphone');
        $chargerSmartphone = filter_input(INPUT_POST, 'chargerSmartphone');
        $ramSmartphone = filter_input(INPUT_POST, 'ramSmartphone');
        $internalMemorySmartphone = filter_input(INPUT_POST, 'internalMemorySmartphone');
        $designSmartphone = filter_input(INPUT_POST, 'designSmartphone');
        $colorSmartphone = filter_input(INPUT_POST, 'colorSmartphone');
        $chipSmartphone = filter_input(INPUT_POST, 'chipSmartphone');
        $simSmartphone = filter_input(INPUT_POST, 'simSmartphone');
        $screenSmartphone = filter_input(INPUT_POST, 'screenSmartphone');
        $screenTechnologySmartphone = filter_input(INPUT_POST, 'screenTechnologySmartphone');
        $sizeScreenSmartphone = filter_input(INPUT_POST, 'sizeScreenSmartphone');
        $operatingSystemSmartphone = filter_input(INPUT_POST, 'operatingSystemSmartphone');
        $cameraSmartphone = filter_input(INPUT_POST, 'cameraSmartphone');
        $frontCameraSmartphone = filter_input(INPUT_POST, 'frontCameraSmartphone');
        $rearCameraSmartphone = filter_input(INPUT_POST, 'rearCameraSmartphone');
        $specialFeaturesSmartphone = filter_input(INPUT_POST, 'specialFeaturesSmartphone');
        //laptop
        $brandLaptop = filter_input(INPUT_POST, 'brandLaptop');
        $cpuLaptop = filter_input(INPUT_POST, 'cpuLaptop');
        $ramLaptop = filter_input(INPUT_POST, 'ramLaptop');
        $hardDriverLaptop = filter_input(INPUT_POST, 'hardDriverLaptop');
        $graphicsCardLaptop = filter_input(INPUT_POST, 'graphicsCardLaptop');
        $sizeScreenLaptop = filter_input(INPUT_POST, 'sizeScreenLaptop');
        $screenResolutionLaptop = filter_input(INPUT_POST, 'screenResolutionLaptop');
        $sweepFrequencyLaptop = filter_input(INPUT_POST, 'sweepFrequencyLaptop');
        $usageNeedLaptop = filter_input(INPUT_POST, 'usageNeedLaptop');
        $operatingSystemLaptop = filter_input(INPUT_POST, 'operatingSystemLaptop');
        $sizeLaptop = filter_input(INPUT_POST, 'sizeLaptop');
        $weightLaptop = filter_input(INPUT_POST, 'weightLaptop');
        //Tablet
        $brandTablet = filter_input(INPUT_POST, 'brandTablet');
        $ramTablet = filter_input(INPUT_POST, 'ramTablet');
        $internalMemoryTablet = filter_input(INPUT_POST, 'internalMemoryTablet');
        $screenTablet = filter_input(INPUT_POST, 'screenTablet');
        $operatingSystemTablet = filter_input(INPUT_POST, 'operatingSystemTablet');
        $chipTablet = filter_input(INPUT_POST, 'chipTablet');
        $frontCameraTablet = filter_input(INPUT_POST, 'frontCameraTablet');
        $rearCameraTablet = filter_input(INPUT_POST, 'rearCameraTablet');
        $pinTablet = filter_input(INPUT_POST, 'pinTablet');
        $chargerTablet = filter_input(INPUT_POST, 'chargerTablet');
        //PC
        $brandPC = filter_input(INPUT_POST, 'brandPC');
        $cpuPC = filter_input(INPUT_POST, 'cpuPC');
        $ramPC = filter_input(INPUT_POST, 'ramPC');
        $hardDriverPC = filter_input(INPUT_POST, 'hardDriverPC');
        $graphicsCardPC = filter_input(INPUT_POST, 'graphicsCardPC');
        $usageNeedPC = filter_input(INPUT_POST, 'usageNeedPC');
        $sizePC = filter_input(INPUT_POST, 'sizePC');
        $weightPC = filter_input(INPUT_POST, 'weightPC');
        //Watch
        $brandWatch = filter_input(INPUT_POST, 'brandWatch');
        $typeWatch = filter_input(INPUT_POST, 'typeWatch');
        $faceShapeWatch = filter_input(INPUT_POST, 'faceShapeWatch');
        $bandMaterialWatch = filter_input(INPUT_POST, 'bandMaterialWatch');
        $screenWatch = filter_input(INPUT_POST, 'screenWatch');
        $sizeScreenWatch = filter_input(INPUT_POST, 'sizeScreenWatch');
        $batteryLifeWatch = filter_input(INPUT_POST, 'batteryLifeWatch');
        $sizeBatteryWatch = filter_input(INPUT_POST, 'sizeBatteryWatch');
        //Accessory
        $typeAccessory = filter_input(INPUT_POST, 'typeAccessory');
        $typeProductOfAccessory = filter_input(INPUT_POST, 'typeProductOfAccessory');
        $brandAccessory = filter_input(INPUT_POST, 'brandAccessory');
        $compatibleAccessory = filter_input(INPUT_POST, 'compatibleAccessory');
        $sizeAccessory = filter_input(INPUT_POST, 'sizeAccessory');
        $weightAccessory = filter_input(INPUT_POST, 'weightAccessory');
        //Television
        $brandTelevision = filter_input(INPUT_POST, 'brandTelevision');
        $sizeScreenTelevision = filter_input(INPUT_POST, 'sizeScreenTelevision');
        $resolutionTelevision = filter_input(INPUT_POST, 'resolutionTelevision');
        $typeTelevision = filter_input(INPUT_POST, 'typeTelevision');
        $operatingSystemTelevision = filter_input(INPUT_POST, 'operatingSystemTelevision');
        $sizeTelevision = filter_input(INPUT_POST, 'sizeTelevision');
        //Refrigerator
        $brandRefrigerator = filter_input(INPUT_POST, 'brandRefrigerator');
        $typeRefrigerator = filter_input(INPUT_POST, 'typeRefrigerator');
        $useCapacityRefrigerator = filter_input(INPUT_POST, 'useCapacityRefrigerator');
        $freezerCapacityRefrigerator = filter_input(INPUT_POST, 'freezerCapacityRefrigerator');
        $coolCompartmentRefrigerator = filter_input(INPUT_POST, 'coolCompartmentRefrigerator');
        $powerConsumptionRefrigerator = filter_input(INPUT_POST, 'powerConsumptionRefrigerator');
        $energySavingTechnologyRefrigerator = filter_input(INPUT_POST, 'energySavingTechnologyRefrigerator');
        $coolTechnologyRefrigerator = filter_input(INPUT_POST, 'coolTechnologyRefrigerator');
        $anti_odorTechnologyRefrigerator = filter_input(INPUT_POST, 'anti_odorTechnologyRefrigerator');
        $foodPreservationTechnologyRefrigerator = filter_input(INPUT_POST, 'foodPreservationTechnologyRefrigerator');
        $sizeRefrigerator = filter_input(INPUT_POST, 'sizeRefrigerator');
        $massRefrigerator = filter_input(INPUT_POST, 'massRefrigerator');
        if ($categoryID == "01") {
            if (empty($brandSmartphone) || empty($typeSmartphone) || empty($functionSmartphone) || empty($configurationSmartphone) || empty($batteryTechnologySmartphone) ||
                    empty($sizeBatterySmartphone) ||
                    empty($chargerSmartphone) || empty($ramSmartphone) ||
                    empty($internalMemorySmartphone) || empty($designSmartphone) || empty($colorSmartphone) || empty($chipSmartphone) || empty($simSmartphone) || empty($screenSmartphone) || empty($screenTechnologySmartphone) || empty($sizeScreenSmartphone) ||
                    empty($operatingSystemSmartphone) ||
                    empty($cameraSmartphone) || empty($frontCameraSmartphone) || empty($rearCameraSmartphone) ||
                    empty($specialFeaturesSmartphone)) {
                $message = "Vui lòng điền đầy đủ thông tin cần thêm cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "02") {
            if (empty($brandLaptop) || empty($cpuLaptop) || empty($ramLaptop) || empty($hardDriverLaptop) || empty($graphicsCardLaptop) || empty($sizeScreenLaptop) || empty($screenResolutionLaptop) || empty($sweepFrequencyLaptop) || empty($usageNeedLaptop) || empty($operatingSystemLaptop) || empty($sizeLaptop) || empty($weightLaptop)) {
                $message = "Vui lòng điền đầy đủ thông tin cần thêm cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "03") {
            if (empty($brandTablet) || empty($ramTablet) || empty($internalMemoryTablet) || empty($screenTablet) || empty($operatingSystemTablet) || empty($chipTablet) || empty($frontCameraTablet) || empty($rearCameraTablet) || empty($pinTablet) || empty($chargerTablet)) {
                $message = "Vui lòng điền đầy đủ thông tin cần thêm cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "04") {
            if (empty($brandPC) || empty($cpuPC) || empty($ramPC) || empty($hardDriverPC) || empty($graphicsCardPC) || empty($usageNeedPC) || empty($sizePC) || empty($weightPC)) {
                $message = "Vui lòng điền đầy đủ thông tin cần thêm cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "05") {
            if (empty($brandWatch) || empty($typeWatch) || empty($faceShapeWatch) ||
                    empty($bandMaterialWatch) || empty($screenWatch) || empty($sizeScreenWatch) || empty($batteryLifeWatch) || empty($sizeBatteryWatch)) {
                $message = "Vui lòng điền đầy đủ thông tin cần thêm cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "06") {
            if (empty($typeAccessory) || empty($typeProductOfAccessory) || empty($brandAccessory) || empty($compatibleAccessory) || empty($sizeAccessory) || empty($weightAccessory)) {
                $message = "Vui lòng điền đầy đủ thông tin cần thêm cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "07") {
            if (empty($brandTelevision) || empty($sizeScreenTelevision) || empty($resolutionTelevision) || empty($typeTelevision) || empty($operatingSystemTelevision) || empty($sizeTelevision)) {
                $message = "Vui lòng điền đầy đủ thông tin cần thêm cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        } else if ($categoryID == "08") {
            if (empty($brandRefrigerator) || empty($typeRefrigerator) || empty($useCapacityRefrigerator) || empty($freezerCapacityRefrigerator) || empty($coolCompartmentRefrigerator) || empty($powerConsumptionRefrigerator) || empty($energySavingTechnologyRefrigerator) || empty($coolTechnologyRefrigerator) || empty($anti_odorTechnologyRefrigerator) || empty($foodPreservationTechnologyRefrigerator) || empty($sizeRefrigerator) || empty($massRefrigerator)) {
                $message = "Vui lòng điền đầy đủ thông tin cần thêm cho sản phẩm";
                include '../View/admin/addProductDetail.php';
                exit();
            }
        }
        $productDetailDB->addProductDetails($productDetailID, $brandSmartphone, $typeSmartphone,
                $functionSmartphone, $configurationSmartphone, $batteryTechnologySmartphone,
                $sizeBatterySmartphone, $chargerSmartphone, $ramSmartphone, $internalMemorySmartphone,
                $designSmartphone, $colorSmartphone, $chipSmartphone, $simSmartphone, $screenSmartphone,
                $screenTechnologySmartphone, $sizeScreenSmartphone, $operatingSystemSmartphone,
                $cameraSmartphone, $frontCameraSmartphone, $rearCameraSmartphone, $specialFeaturesSmartphone,
                $brandLaptop, $cpuLaptop, $ramLaptop, $hardDriverLaptop, $graphicsCardLaptop, $sizeScreenLaptop,
                $screenResolutionLaptop, $sweepFrequencyLaptop, $usageNeedLaptop, $operatingSystemLaptop,
                $sizeLaptop, $weightLaptop,
                $brandTablet, $ramTablet, $internalMemoryTablet, $screenTablet, $operatingSystemTablet, $chipTablet,
                $frontCameraTablet, $rearCameraTablet, $pinTablet, $chargerTablet,
                $brandPC, $cpuPC, $ramPC, $hardDriverPC, $graphicsCardPC, $usageNeedPC, $sizePC, $weightPC,
                $brandWatch, $typeWatch, $faceShapeWatch, $bandMaterialWatch, $screenWatch, $sizeScreenWatch,
                $batteryLifeWatch, $sizeBatteryWatch,
                $typeAccessory, $typeProductOfAccessory, $brandAccessory, $compatibleAccessory, $sizeAccessory,
                $weightAccessory, $brandTelevision, $sizeScreenTelevision, $resolutionTelevision, $typeTelevision,
                $operatingSystemTelevision, $sizeTelevision,
                $brandRefrigerator, $typeRefrigerator, $useCapacityRefrigerator, $freezerCapacityRefrigerator,
                $coolCompartmentRefrigerator, $powerConsumptionRefrigerator, $energySavingTechnologyRefrigerator,
                $coolTechnologyRefrigerator, $anti_odorTechnologyRefrigerator,
                $foodPreservationTechnologyRefrigerator, $sizeRefrigerator, $massRefrigerator,
                $productID);
        $message = "Thêm thông tin sản phẩm thành công";
    }

    include '../View/admin/addProductDetail.php';
} else if ($action == 'manageOrder') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $countOrder = $orderDB->getOrders();
    
    if (isset($_POST['applyOrderNumber'])) {
        $orderNumber = filter_input(INPUT_POST, 'orderNumber');
    }
    if (empty($orderNumber)) {
        $orderNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $orderNumber;
    $orders = $orderDB->getOrdersPagination($orderNumber, $offset);
    $totalPage = ceil(count($countOrder) / $orderNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    if(isset($_POST['viewOrder'])){
        $orderID = filter_input(INPUT_GET, 'orderID');
        $viewProductsByOrder = $orderDB->viewProductsByOrder($orderID);
    }
    
    
    
    include '../View/admin/manageOrder.php';
}else if($action == "changeState"){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $state = filter_input(INPUT_GET, 'state');
    $orderID = filter_input(INPUT_GET, 'orderID');
    $orderDB->changeState($state, $orderID);
    header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageOrder"); 
} 
else if($action == 'filterOrder'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $state = filter_input(INPUT_GET, 'state');
    
    if (isset($_POST['applyOrderNumber'])) {
        $orderNumber = filter_input(INPUT_POST, 'orderNumber');
    }
    if (empty($orderNumber)) {
        $orderNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $orderNumber;
    if(empty($state)){
        $countOrder = $orderDB->getOrders();
        $orders = $orderDB->getOrdersPagination($orderNumber, $offset);
    }else{
        $countOrder = $orderDB->filterOrderNotByAccount($state);
        $orders = $orderDB->filterOrderNotByAccountPagination($state, $orderNumber, $offset);
    }
    $totalPage = ceil(count($countOrder) / $orderNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageOrder.php';
}
else if($action == 'search_order'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $contentOrder = filter_input(INPUT_GET, 'contentOrder');
    if (isset($_POST['applyOrderNumber'])) {
        $orderNumber = filter_input(INPUT_POST, 'orderNumber');
    }
    if (empty($orderNumber)) {
        $orderNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $orderNumber;
    if(empty($contentOrder)){
        $countOrder = $orderDB->getOrders();
        $orders = $orderDB->getOrdersPagination($orderNumber, $offset);
    }else{
        $countOrder = $orderDB->searchOrder($contentOrder);
        $orders = $orderDB->searchOrderPagination($contentOrder, $orderNumber, $offset);
    }
    $totalPage = ceil(count($countOrder) / $orderNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageOrder.php';
    
}else if ($action == 'manageMember') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $countMember = $memberDB->getMembers();
    
    if (isset($_POST['applyMemberNumber'])) {
        $memberNumber = filter_input(INPUT_POST, 'memberNumber');
    }
    if (empty($memberNumber)) {
        $memberNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $memberNumber;
    $members = $memberDB->getMembersPagination($memberNumber, $offset);
    $totalPage = ceil(count($countMember) / $memberNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    if(isset($_POST['deleteMember'])){
        $memberID = filter_input(INPUT_POST, 'memberID');
        $memberDB->deleteMembers($memberID);
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageMember");
    }
    
    include '../View/admin/manageMember.php';
}  else if($action == 'search_member'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $contentMember = filter_input(INPUT_GET, 'contentMember');
    if (isset($_POST['applyMemberNumber'])) {
        $memberNumber = filter_input(INPUT_POST, 'memberNumber');
    }
    if (empty($memberNumber)) {
        $memberNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $memberNumber;
    if(empty($contentMember)){
        $countMember = $memberDB->getMembers();
        $members = $memberDB->getMembersPagination($memberNumber, $offset);
    }else{
        $countMember = $memberDB->searchMember($contentMember);
        $members = $memberDB->searchMemberPagination($contentMember, $memberNumber, $offset);
    }
    $totalPage = ceil(count($countMember) / $memberNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageMember.php';
    
}else if ($action == 'manageRateOrComment') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $countRate = $rateDB->getRates();
    
    if (isset($_POST['applyRateNumber'])) {
        $rateNumber = filter_input(INPUT_POST, 'rateNumber');
    }
    if (empty($rateNumber)) {
        $rateNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $rateNumber;
    $rates = $rateDB->getRatesPagination($rateNumber, $offset);
    $totalPage = ceil(count($countRate) / $rateNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageRateOrComment.php';
} else if($action == 'search_rate_or_comment'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $contentRate = filter_input(INPUT_GET, 'contentRate');
    if (isset($_POST['applyRateNumber'])) {
        $rateNumber = filter_input(INPUT_POST, 'rateNumber');
    }
    if (empty($rateNumber)) {
        $rateNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $rateNumber;
    if(empty($contentRate)){
        $countRate = $rateDB->getRates();
        $rates = $rateDB->getRatesPagination($rateNumber, $offset);
    }else{
        $countRate = $rateDB->searchRateOrComment($contentRate);
        $rates = $rateDB->searchRateOrCommentPagination($contentRate, $rateNumber, $offset);
    }
    $totalPage = ceil(count($countRate) / $rateNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageRateOrComment.php';
}else if ($action == 'manageFlashSale') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $countFlashSale = $flashsaleDB->getFlashsales();
    
    if (isset($_POST['applySaleNumber'])) {
        $saleNumber = filter_input(INPUT_POST, 'saleNumber');
    }
    if (empty($saleNumber)) {
        $saleNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $saleNumber;
    $flashSales = $flashsaleDB->getFlashsalesPagination($saleNumber, $offset);
    $totalPage = ceil(count($countFlashSale) / $saleNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    if (isset($_POST['deleteFlashSale'])) {
        $flashSaleID = filter_input(INPUT_POST, 'flashSaleID');
        $flashsaleDB->deleteFlashsale($flashSaleID);
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageFlashSale");
    }
    include '../View/admin/manageFlashSale.php';
} else if($action == 'search_flash_sale'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $contentSale = filter_input(INPUT_GET, 'contentSale');
    if (isset($_POST['applySaleNumber'])) {
        $saleNumber = filter_input(INPUT_POST, 'saleNumber');
    }
    if (empty($saleNumber)) {
        $saleNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $saleNumber;
    if(empty($contentSale)){
        $countSale = $flashsaleDB->getFlashsales();
        $flashSales = $flashsaleDB->getFlashsalesPagination($saleNumber, $offset);
    }else{
        $countSale = $flashsaleDB->searchFlashSale($contentSale);
        $flashSales = $flashsaleDB->searchFlashSalePagination($contentSale, $saleNumber, $offset);
    }
    $totalPage = ceil(count($countSale) / $saleNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageFlashSale.php';
}else if($action == 'edit_flash_sale'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $flashSaleID = filter_input(INPUT_GET, 'flashSaleID');
    $sale = $flashsaleDB->getFlashSaleByID($flashSaleID);
    if(isset($_POST['UpdateSale'])){
        $discountSale = filter_input(INPUT_POST, 'discountSale');
        $finalPriceSale = $sale['price'] - ($sale['price'] * $discountSale / 100);
        if(empty($discountSale)){
            $message = "Vui lòng nhập đầy đủ thông tin cập nhật sản phẩm";
        }else{
            $flashsaleDB->updateFlashSale($flashSaleID, $sale['productID'], $discountSale, $finalPriceSale);
               $message = "Cập nhật sản phẩm trong Flash Sale thành công";
        }
    }
    include '../View/admin/addFlashSale.php';
}else if ($action == 'add_flash_sale') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $getProductsNotInFlashSale = $flashsaleDB->getProductsNotInFlashSale();
    //    add product to table flash sale
    if (isset($_POST['addFlashSale'])) {
        $productID = filter_input(INPUT_POST, 'productID');
        if (empty($productID)) {
            $message = "Vui lòng chọn sản phẩm";
        } else {
            $flashSaleID = filter_input(INPUT_POST, 'flashSaleID');
            $discountSale = filter_input(INPUT_POST, 'discountSale');
            if (empty($discountSale)) {
                $message = "Phần trăm giảm giá trong Sale không được trống";
            } else {
                $product = $productDB->getProductByProductID($productID);
                $price = $product->getPrice();
                $finalPriceSale = $price - ($price * $discountSale / 100);
                $flashsaleDB->addProductFlashSale($flashSaleID, $productID, $discountSale, $finalPriceSale);
                $message = "Thêm sản phẩm vào Flash Sale thành công";
            }
        }
    }

    include '../View/admin/addFlashSale.php';
}else if ($action == 'manageDiscountCode') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $countDiscountCode = $discountCodeDB->getDiscountCodes();
    
    if (isset($_POST['applyDiscountCodeNumber'])) {
        $discountCodeNumber = filter_input(INPUT_POST, 'discountCodeNumber');
    }
    if (empty($discountCodeNumber)) {
        $discountCodeNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $discountCodeNumber;
    $discountCodes = $discountCodeDB->getDiscountCodesPagination($discountCodeNumber, $offset);
    $totalPage = ceil(count($countDiscountCode) / $discountCodeNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    if (isset($_POST['deleteDiscountCode'])) {
        $discountCodeID = filter_input(INPUT_POST, 'discountCodeID');
        $discountCodeDB->deleteDiscountCode($discountCodeID);
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=manageDiscountCode");
    }
    include '../View/admin/manageDiscountCode.php'; 
} else if($action == 'search_discount_code'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $contentDiscountCode = filter_input(INPUT_GET, 'contentDiscountCode');
    
    if (isset($_POST['applyDiscountCodeNumber'])) {
        $discountCodeNumber = filter_input(INPUT_POST, 'discountCodeNumber');
    }
    if (empty($discountCodeNumber)) {
        $discountCodeNumber = 5;
    }
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $discountCodeNumber;
    if(empty($contentDiscountCode)){
        $countDiscountCode = $discountCodeDB->getDiscountCodes();
        $discountCodes = $discountCodeDB->getDiscountCodesPagination($discountCodeNumber, $offset);
    }else{
        $countDiscountCode = $discountCodeDB->searchDiscountCode($contentDiscountCode);
        $discountCodes = $discountCodeDB->searchDiscountCodePagination($contentDiscountCode, $discountCodeNumber, $offset);
    }
    $totalPage = ceil(count($countDiscountCode) / $discountCodeNumber);
    $firstPage = 1;
    $endPage = $totalPage;
    
    include '../View/admin/manageDiscountCode.php';
}else if($action == 'edit_discount_code'){
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    $discountCodeID = filter_input(INPUT_GET, 'discountCodeID');
    $discountCode = $discountCodeDB->getDiscountCodeByID($discountCodeID);
    if(isset($_POST['UpdateDiscountCode'])){
        $valueDiscount = filter_input(INPUT_POST, 'valueDiscount');
        if(empty($valueDiscount) || $valueDiscount == 0){
            $message = "Vui lòng nhập đầy đủ thông tin cập nhật mã giảm giá";
        }else{
            $discountCodeDB->updateDiscountCode($discountCodeID, $discountCode['discountCode'], $valueDiscount);
            $message = "Cập nhật mã giảm giá thành công";
        }
    }
    include '../View/admin/addDiscountCode.php';
}else if ($action == 'add_discount_code') {
    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=login_page_admin");
    }
    if (isset($_POST['addDiscountCode'])) {
        $discountCodeID = filter_input(INPUT_POST, 'discountCodeID');
        $discountCode = filter_input(INPUT_POST, 'discountCode');
        $valueDiscount = filter_input(INPUT_POST, 'valueDiscount');
        if (empty($discountCode) || empty($valueDiscount)) {
            $message = "Vui lòng thêm đầy đủ thông tin thêm mã giảm giá";
        } else {
            $discountCodeDB->addDiscountCode($discountCodeID, $discountCode, $valueDiscount);
            $message = "Thêm mã giảm giá thành công";
        }
    }

    include '../View/admin/addDiscountCode.php';
}else if ($action == "login_page_admin") {
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
                    $account = $accountDB->getAccount($_SESSION['email']);
                    if($account->getRoles() == "admin"){
                        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/AdminTechnologyController.php?action=dashboard");
                    }else if($account->getRoles() == "user"){
                        header("Location: http://localhost/ex_solutions/Tu&TanTechnology/Controller/TechnologyController.php?action=home_page");
                    }
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
}else if ($action == "logout_page_admin") {
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