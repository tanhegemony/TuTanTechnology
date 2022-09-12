
<?php 
    $account = $accountDB->getAccount($_SESSION['email']);
?>
<style>
    <?php include 'menuResponsive.css'; ?>
</style>
<div class="col-3 menu">
        <div class="btn-group mt-2 dropleft userdangnhap">
          <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img class="img-fluid" width="10%" style="border-radius: 100%;" src="../images/z3069509505251_67cac08dbd03b3e5dd51b7738f0065de.gif" alt="">
              <p><?php echo $account->getEmail(); ?></p>
          </button>
          <div class="dropdown-menu logout">
              <a class="dropdown-item" href="?action=logout_page_admin">
              Logout
                </a>
              <input type="hidden" name="action" formaction="/Controller/TechnologyController.php?action=logout_page">
          </div>
        </div>
        <p class="chuMenu"><i class="fas fa-bars"></i> Menu</p>
        <div class="nav text-center flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
               href="?action=dashboard" <?php if($action == "dashboard"){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>  > Dashboard</a>
          </li>
         <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
               href="?action=manageAccount" <?php if($action == "manageAccount" || $action == "add_account" || $action == "edit_account"){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>>Quản lý người dùng</a>
          </li>
           <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
               href="?action=manageCustomer" <?php if($action == "manageCustomer" || $action == "edit_customer"){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>>Quản lý Khách hàng</a>
          </li>
          <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
            href="?action=manageCategory" <?php if($action == "manageCategory" || $action == "add_category" || $action == "edit_category"){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>> Quản lý Danh mục</a>
          </li>
          <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
            href="?action=manageTypeCategory" <?php if($action == "manageTypeCategory" ){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>> Quản lý Loại Danh mục</a>
          </li>
          <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
            href="?action=manageProduct" <?php if($action == "manageProduct" || $action == "add_product" || $action == "edit_product"){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>> Quản lý Sản phẩm</a>
          </li>
          <li class="nav-item mt-1">
              <a class="btn-light nav-link" <?php if($action == "manageProductDetail" || $action == "search_product_detail" || $action == "add_product_detail" || $action == "edit_product_detail"){echo "style='background-color:  #223464; color: white;border-radius:10px 10px 0px 0px;'";}else{echo "style='border: 1px solid #223464;border-radius:10px 10px 0px 0px;'";} ?> type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Quản lý Chi tiết sản phẩm
              </a>
              <div class="accordion " id="accordionExample" style="border: 1px solid #223464;border-radius: 0px 0px 10px 10px;">
                <div id="collapseOne" class="collapse mt-1 mb-1 <?php if($action == "manageProductDetail" || $action == "search_product_detail" || $action == "add_product_detail" || $action == "edit_product_detail"){echo "show";}else{echo "";} ?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <a class="btn nav-item mt-1 " style="width: 80%;<?php if(isset($categoryID) && $categoryID == 1){echo "background-color:  #223464; color: white;";}else{echo '';} ?>"  href="?action=manageProductDetail&categoryID=1"> Quản lý Điện thoại</a>
                    <a class="btn nav-item mt-1" style="width: 80%;<?php if(isset($categoryID) && $categoryID == 2){echo "background-color:  #223464; color: white;";}else{echo '';} ?>" href="?action=manageProductDetail&categoryID=2"> Quản lý Laptop</a>
                    <a class="btn nav-item mt-1" style="width: 80%;<?php if(isset($categoryID) && $categoryID == 3){echo "background-color:  #223464; color: white;";}else{echo '';} ?>" href="?action=manageProductDetail&categoryID=3"> Quản lý Tablet</a>
                    <a class="btn nav-item mt-1" style="width: 80%;<?php if(isset($categoryID) && $categoryID == 4){echo "background-color:  #223464; color: white;";}else{echo '';} ?>" href="?action=manageProductDetail&categoryID=4"> Quản lý PC</a>
                    <a class="btn nav-item mt-1" style="width: 80%;<?php if(isset($categoryID) && $categoryID == 5){echo "background-color:  #223464; color: white;";}else{echo '';} ?>" href="?action=manageProductDetail&categoryID=5"> Quản lý Watch</a>
                    <a class="btn nav-item mt-1" style="width: 80%;<?php if(isset($categoryID) && $categoryID == 6){echo "background-color:  #223464; color: white;";}else{echo '';} ?>" href="?action=manageProductDetail&categoryID=6"> Quản lý Phụ kiện</a>
                    <a class="btn nav-item mt-1" style="width: 80%;<?php if(isset($categoryID) && $categoryID == 7){echo "background-color:  #223464; color: white;";}else{echo '';} ?>" href="?action=manageProductDetail&categoryID=7"> Quản lý TV</a>
                    <a class="btn nav-item mt-1" style="width: 80%;<?php if(isset($categoryID) && $categoryID == 8){echo "background-color:  #223464; color: white;";}else{echo '';} ?>" href="?action=manageProductDetail&categoryID=8"> Quản lý Tủ lạnh</a>
                </div>
              </div>
          </li>
          <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
            href="?action=manageOrder" <?php if($action == "manageOrder"){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>> Quản lý Đơn hàng</a>
          </li>
          <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
            href="?action=manageMember" <?php if($action == "manageMember"){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>> Quản lý Thành viên</a>
          </li>
          <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
            href="?action=manageRateOrComment" <?php if($action == "manageRateOrComment"){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>> Quản lý Đánh giá / Bình Luận</a>
          </li>
          <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
            href="?action=manageFlashSale" <?php if($action == "manageFlashSale" || $action == "add_flash_sale" || $action == "edit_flash_sale"){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>> Quản lý Chương trình Flash Sale</a>
          </li>
          <li class="nav-item mt-1">
            <a class="btn-light nav-link" 
            href="?action=manageDiscountCode" <?php if($action == "manageDiscountCode" || $action == "add_discount_code" || $action == "edit_discount_code"){echo "style='background-color:  #223464; color: white;'";}else{echo '';} ?>> Quản lý Mã giảm giá</a>
          </li>
        </div>
      </div>