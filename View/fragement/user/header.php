
<?php 
    if(isset($_SESSION['email'])){
        $account = $accountDB->getAccount($_SESSION['email']);
    }
    // show category
    $typeCategories = $categoryDB->getTypeCategories();
?>
<style>
<?php include 'header.css'; ?>
<?php include 'headerResponsive.css'; ?>  
</style>
<!-- name và menu1 -->
<div class="row">
    <div class="col-1 imglogo text-center mt-2">
        <a href="?action=home_page"><img class="img-fluid" src="../images/logo.gif" width="100%" alt=""></a>
    </div>
    <div class="col-3 mt-1 name">
        <h3>Tự&TấnTechnology</h3>
        <h6>
            Trang thương mại điện từ và thương mại gia dụng
        </h6>
    </div>
    <div class="col-8 menu mt-1">
        <div class="row menu1">
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="?action=home_page" 
                            <?php if($action == null || $action == "home_page"){echo 'style="color: red;"';}else{echo '';} ?> >
                            <i class="fas fa-home"></i> Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=introduction"
                            <?php if($action == "introduction"){echo 'style="color: red;"';}else{echo '';} ?>><i class="fas fa-lightbulb"></i> Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> Tư vấn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-hands-helping"></i> Tuyển dụng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-phone-volume"></i> Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-burn"></i> Tin Hot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-percent"></i> Tin Khuyến mãi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users"></i> Chính sách thành viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img class="img-fluid" src="../images/menu/vietnam.png"
                                                          alt=""> Tiếng Việt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img class="img-fluid" src="../images/menu/american.png"
                                                          alt=""> Tiếng Anh</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- menu2 -->
<div class="row mt-2 menu2">
    <div class="col">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll text-center">
                    <li class="nav-item dmsp">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bars"></i> Danh mục sản phẩm <i
                                    class="fas fa-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php foreach ($typeCategories as $typeCategory) : ?>
                                    <?php $typeCategoryID = $typeCategory['typeCategoryID'];
                                            $typeCategoryName = $typeCategory['typeCategoryName']; 
                                            $categories = $categoryDB->getCategories($typeCategoryID);
                                    ?>
                                    <span class="dropdown-item-text"><?php echo $typeCategoryName; ?></span>
                                    <?php foreach ($categories as $category): ?>
                                        <?php if($categoryID == $category['categoryID']) : ?>
                                            <a class="dropdown-item" style="background-color: #6c757d; color: white;" href="?action=productsByCategory&categoryID=<?php echo $category['categoryID']; ?>">
                                                <?php echo $category['categoryName']; ?>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($categoryID != $category['categoryID']) : ?>
                                            <a class="dropdown-item" href="?action=productsByCategory&categoryID=<?php echo $category['categoryID']; ?>">
                                                <?php echo $category['categoryName']; ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="?action=Show_Flash_Sale" <?php if($action == "Show_Flash_Sale"){echo 'style="color: red;"';}else{echo '';} ?> ><img class="img-fluid" src="../images/menu/fire.png" alt="">
                            Flash sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=shoppingCart"><img class="img-fluid" src="../images/menu/carts.png" alt="">
                            Giỏ hàng 
                            <span class="badge badge-danger">
                                <?php if(isset($_SESSION['cart'])){ 
                                            echo count($_SESSION['cart']); 
                                    }else{
                                        echo "0";
                                    }
                                ?>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img class="img-fluid" src="../images/menu/bell.png" alt="">
                            Thông báo <span class="badge badge-danger">4</span></a>
                    </li>
                    <?php if (empty($_SESSION['email'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=login_page"> 
                            <img class="img-fluid" src="../images/icon/login.png" alt=""> Đăng nhập</a>
                    </li> 
                    <?php elseif(isset($_SESSION['email'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nameAccount" href="#" id="navbarScrollingDropdown" role="button"
                           data-toggle="dropdown" aria-expanded="false" style="color: red;font-style: italic;">
                               <?php echo $_SESSION['email']; ?>
                        </a>
                        <ul class="dropdown-menu" style="width: 15rem;" aria-labelledby="navbarScrollingDropdown">
                                <?php if($account->getRoles() == 'admin') : ?>
                            
                            <li>
                                <form action="../Controller/AdminTechnologyController.php" method="post">
                                    <button class="dropdown-item" formtarget="AdminTechnologyController">Admin Control</button>
                                </form>
                            </li>
                                <?php endif; ?>
                                <li><a class="dropdown-item" href="?action=Customer_Profile&contentNav=CustomerProfile">Thông tin của bạn</a></li>
                                <li><a class="dropdown-item" href="?action=Customer_Profile&contentNav=MyOrder">Đơn hàng của bạn</a></li>
                                <li><a class="dropdown-item" href="?action=Customer_Profile&contentNav=ChangePassword"">Thay đổi mật khẩu</a></li>
                                <li><a class="dropdown-item" href="?action=logout_page">Đăng xuất</a></li>
                         </ul>
                    </li>
                    <?php endif; ?>
                </ul>
                <div class="box">
                    <form class="sbox" action="" method="get">
                        <input type="hidden" name="action"
                                                        value="search_product">
                        <input class="stext" type="text" name="content" value="<?php if(isset($content)){ echo $content; }?>" placeholder="Tìm kiếm nội dung...">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
    </div>
</div>