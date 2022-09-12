<!doctype html>
<html lang="en">

<head>
    <title>Giỏ hàng của bạn</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../images/fontawesome-free-5.15.4-web/css/all.min.css" />
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/user/shoppingCart.css"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/shoppingCartResponsive.css"; ?>
        
    </style>
</head>

<body>
    <div class="container">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/header.php"; ?>
        <!-- title -->
        <div class="row">
            <div class="col">
                <h3 class="title-comm"><span class="title-holder">GIỎ HÀNG CỦA BẠN</span></h3>
            </div>
        </div>
        <div class="row">
            <!-- count sản phẩm có trong giỏ -->
            <div class="col-6 countsp">
                <h6>
                    Có: <span><?php
                            if (isset($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            };
                            ?></span> sản phẩm trong giỏ hàng của bạn
                </h6>
            </div>
            <!-- mua thêm sản phẩm -->
            <div class="col-6 muathemsanpham">
                <a href="?action=home_page" class="float-right"><i class="fas fa-chevron-left"></i> Mua thêm sản
                    phẩm</a>
            </div>
        </div>
        <!-- table sản phẩm -->
        <div class="row">
            <table class="table table-responsive table-hover">
                <thead class="text-center">
                    <tr>
                        <th class="selectcolumn">Lựa chọn</th>
                        <th colspan="2" class="spcolumn">Sản phẩm</th>
                        <th class="quantitycolumn">Số lượng</th>
                        <th class="totalproductcolumn">Thành tiền</th>
                        <th class="operatingcolumn">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($message)) : ?>
                    <tr>
                        <td colspan="6" style="text-align: center; color: red;font-size: 25px;"><?php echo $message; ?>
                        </td>
                    </tr>

                    <?php else : ?>
                    <form action="" method="post">
                        <?php foreach ($_SESSION['cart'] as $productName => $cart_item) : ?>
                        <tr>
                            <td class="text-center"><input type="checkbox" name="" id=""></td>
                            <td colspan="2" class="infospcart">
                                <div class="row">
                                    <div class="col-4 imgcartsp">
                                        <a
                                            href="?action=product_detail&productName=<?php echo $cart_item['productName']; ?>&categoryID=<?php echo $categoryID; ?>">

                                            <img src="<?php echo '../images/productimage/' . $cart_item['productName'] . '.jpg'; ?>"
                                                width="100%" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 sp">
                                        <a href="#">
                                            <h6><?php echo $cart_item['productName']; ?></h6>
                                        </a>
                                        <p class="card-text price1">
                                            <span>Giá :</span>
                                            <?php echo number_format($cart_item['price'], 0, ',', '.'); ?>đ
                                        </p>
                                        <?php $getProductInFlashSale = $flashsaleDB->getProductInFlashSale($cart_item['productName']); ?>
                                        <?php if($timeOut>$now) : ?>
                                        <?php if(isset($getProductInFlashSale['productName'])): ?>
                                        <p class="card-text finalprice1"><span>Sale còn :</span>
                                            <?php echo number_format($cart_item['finalPrice'], 0, ',', '.'); ?>đ</p>
                                        <p>Sale giảm: <span class="mgg1">-<?php echo $cart_item['discount'] ?>%</span>
                                        </p>
                                        <?php else: ?>
                                        <p class="card-text finalprice1"><span>Chỉ còn :</span>
                                            <?php echo number_format($cart_item['finalPrice'], 0, ',', '.'); ?>đ</p>
                                        <p>Giảm giá: <span class="mgg1">-<?php echo $cart_item['discount'] ?>%</span>
                                        </p>
                                        <?php endif; ?>
                                        <?php else: ?>
                                        <p class="card-text finalprice1"><span>Chỉ còn :</span>
                                            <?php echo number_format($cart_item['finalPrice'], 0, ',', '.'); ?>đ</p>
                                        <p>Giảm giá: <span class="mgg1">-<?php echo $cart_item['discount'] ?>%</span>
                                        </p>
                                        <?php endif; ?>


                                    </div>
                                </div>
                            </td>
                            <td class="quantity input-group">
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend sub">
                                        <button
                                            formaction="?action=update_cart&SUB_QUANTITY&productName=<?php echo $productName; ?>"
                                            name="sub_quantity" class="btn btn-dark">-</button>
                                    </div>
                                    <input type="number" name="quantity[<?php echo $productName; ?>]"
                                        class="form-control text-center" min="1"
                                        max="<?php echo $cart_item['quantity_product']; ?>"
                                        value="<?php echo $cart_item['quantity']; ?>">
                                    <div class="input-group-append plus">
                                        <button
                                            formaction="?action=update_cart&PLUS_QUANTITY&productName=<?php echo $productName; ?>"
                                            name="plus_quantity" class="btn btn-dark">+</button>
                                    </div>
                                </div>
                            </td>

                            <td class="text-center pricecart">
                                <?php echo number_format($cart_item['quantity'] * $cart_item['finalPrice'], 0, ',', '.'); ?>đ
                            </td>
                            <td class="text-center buttoncrud">
                                <button
                                    onclick="return confirm('Bạn có muốn xóa sản phẩm <?php echo $cart_item['productName']; ?> trong giỏ hàng?')"
                                    name="delete"
                                    formaction="?action=addCart&UPDATE_CART&productName=<?php echo $cart_item['productName']; ?>"
                                    class="btn btn-danger">
                                    Xóa
                                </button>
                                <button name="update"
                                    formaction="?action=update_cart&productName=<?php echo $cart_item['productName']; ?>"
                                    type="submit" class="btn btn-dark">Cập nhật</button> <br>
                                    <a href="?action=search_product&content=<?php echo $cart_item['categoryName']; ?>" class="tksptt">Tìm kiếm sản phẩm tương tự <i
                                        class="fas fa-sort-down"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </form>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <!-- thao tác thanh toán -->
        <div class="row thaotacthanhtoan">
            <div class="col-8 thaotac mt-5">
                <div class="row">
                    <div class="col-3 checkall text-center">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="" id="">
                                Chọn tất cả
                            </label>
                        </div>
                    </div>
                    <div class="col-3 deleteall text-center">
                        <a onclick="return confirm('Bạn có muốn xóa tất cả sản phẩm trong giỏ hàng?')"
                            href="?action=empty_cart">Xóa tất cả</a>
                    </div>
                    <div class="col-6 nhapmagiamgia">
                        <form action="?action=shoppingCart" method="post">
                            <div class="form-group">
                                <label for="contentDiscountCode">Mã giảm giá: </label>
                                <input type="text" class="form-control" name="contentDiscountCode"
                                    id="contentDiscountCode"
                                    value="<?php if(isset($contentDiscountCode)){ echo $contentDiscountCode;} ?>"
                                    placeholder="Nhập mã giảm giá" />
                                <button name="discountCode" class="btn btn-danger mt-2">Áp dụng</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4 thanhtoan">
                <div class="row float-right">
                    <table class="table ">
                        <tr>
                            <th>Tổng tiền: </th>
                            <?php
                                $subtotal = 0;
                                if(empty($contentDiscountCode)){
                                     $discountCode = 0;
                                }else{
                                    $discountCode = $getDiscountCodeByContent['valueDiscount'];
                                }
                                
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $cart) {
                                        $subtotal += $cart['quantity'] * $cart['finalPrice'];
                                    }
                                } else {
                                    $_SESSION['cart'] = array();
                                }
                                $total = 0;
                                $total = $subtotal - $discountCode;
                                ?>
                            <td>
                                <?php echo number_format($subtotal, 0, ',', '.'); ?>đ
                            </td>
                        </tr>
                        <tr>
                            <th>Giảm: </th>
                            <td>-<?php echo number_format($discountCode, 0, ',', '.'); ?>đ</td>
                        </tr>
                        <tr>
                            <th>Cần thanh toán: </th>
                            <td class="ctt"><?php echo number_format($total, 0, ',', '.'); ?>đ</td>
                        </tr>
                        <tr>
                            <form action="" method="post">
                                <td class="buttonthanhtoan" colspan="2">
                                    <?php if(empty($_SESSION['cart'])): ?>
                                    <button formaction="?action=check_out" class="btn" disabled="true">Thanh
                                        toán</button>
                                    <?php else: ?>
                                    <button formaction="?action=check_out" class="btn">Thanh toán</button>
                                    <?php endif; ?>

                                </td>
                            </form>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- có thể bạn sẽ thích -->
        <?php 
            // you can like
            $getProductsYouLikeFirst = $cartDB->getProductsRandomFirst();
            $getProductsYouLikeSecond = $cartDB->getProductsRandomSecond();
            
            ?>
        <div class="row">
            <div class="col">
                <h3 class="title-comm"><span class="title-holder">CÓ THỂ BẠN CŨNG THÍCH</span></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="like" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row likesp12">
                                <?php foreach ($getProductsYouLikeFirst as $getProductYouLike) : ?>
                                <div class="col-2 sanpham likesp1">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col">
                                                <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col imgProduct">
                                                <a href="?action=product_detail&productName=<?php echo $getProductYouLike['productName']; ?>&categoryID=<?php echo $getProductYouLike['categoryID']; ?>">
                                                    <img class="card-img-top" 
                                                        src="<?php echo '../images/productimage/' . $getProductYouLike['productName'] . '.jpg'; ?>"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col text-center productName">
                                                <a href="#" class="productname">
                                                    <h6 class="card-title">
                                                        <?php echo $getProductYouLike['productName']; ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col productPrice text-center">
                                                <p class="card-text price"><span>Giá :</span>
                                                    <?php echo number_format($getProductYouLike['price'], 0, ',', '.'); ?>đ
                                                </p>
                                                <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                    <?php echo number_format($getProductYouLike['finalPrice'], 0, ',', '.'); ?>đ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="danhgia">
                                                    <div class="rate">
                                                        <?php
                                                                if (isset($getProductYouLike['productName'])) {
                                                                    $rateProducts = $productDB->getRateStarProduct($getProductYouLike['productName']);
                                                                    $countRateProduct = count($rateProducts);
                                                                    if ($countRateProduct != 0) {
                                                                        $rateStar = 0;
                                                                        foreach ($rateProducts as $rateProduct) {
                                                                            $rateStar += $rateProduct['rateStarNumber'];
                                                                        }
                                                                        $rateStarProduct = $rateStar / $countRateProduct;
                                                                    } else {
                                                                        $rateMessage1 = "Chưa có đánh giá";
                                                                    }
                                                                }
                                                                ?>
                                                        <?php if (isset($rateMessage1)) : ?>
                                                            <?php echo "<p class='rateMessage'>$rateMessage1</p>"; ?>
                                                        <?php else: ?>
                                                            <?php for ($i = 0; $i < round($rateStarProduct); $i++) : ?>
                                                            <label for="star<?php echo $i; ?>">
                                                                <?php echo $i; ?>star
                                                            </label>
                                                            <?php endfor; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <p class="float-right mgg">
                                                    -<?php echo $getProductYouLike['discount']; ?>%
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col quantity">
                                                <p>Số lượng còn lại:
                                                    <span style="color: red;font-style: italic;">
                                                        <?php if($getProductYouLike['quantity'] == 0){
                                                                        echo "Hết hàng";
                                                                      }else {
                                                                        echo $getProductYouLike['quantity'];
                                                                      }
                                                                ?>

                                                    </span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="addCart text-center mt-2">
                                                        <?php if($getProductYouLike['quantity'] == 0) : ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
                                                        <?php else: ?>
                                                        <a class='btn'
                                                            href="?action=addCart&productName=<?php echo $getProductYouLike['productName']; ?>"><img
                                                                class='img-fluid' src='../images/menu/carts.png' alt=''> Thêm
                                                            vào giỏ hàng</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row likesp12">
                                <?php foreach ($getProductsYouLikeSecond as $getProductYouLike) : ?>
                                <div class="col-2 sanpham likesp1">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col">
                                                <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col imgProduct">
                                                <a href="?action=product_detail&productName=<?php echo $getProductYouLike['productName']; ?>&categoryID=<?php echo $getProductYouLike['categoryID']; ?>">
                                                    <img class="card-img-top" 
                                                        src="<?php echo '../images/productimage/' . $getProductYouLike['productName'] . '.jpg'; ?>"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col text-center productName">
                                                <a href="#" class="productname">
                                                    <h6 class="card-title">
                                                        <?php echo $getProductYouLike['productName']; ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col productPrice text-center">
                                                <p class="card-text price"><span>Giá :</span>
                                                    <?php echo number_format($getProductYouLike['price'], 0, ',', '.'); ?>đ
                                                </p>
                                                <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                    <?php echo number_format($getProductYouLike['finalPrice'], 0, ',', '.'); ?>đ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="danhgia">
                                                    <div class="rate">
                                                        <?php
                                                                if (isset($getProductYouLike['productName'])) {
                                                                    $rateProducts = $productDB->getRateStarProduct($getProductYouLike['productName']);
                                                                    $countRateProduct = count($rateProducts);
                                                                    if ($countRateProduct != 0) {
                                                                        $rateStar = 0;
                                                                        foreach ($rateProducts as $rateProduct) {
                                                                            $rateStar += $rateProduct['rateStarNumber'];
                                                                        }
                                                                        $rateStarProduct = $rateStar / $countRateProduct;
                                                                    } else {
                                                                        $rateMessage1 = "Chưa có đánh giá";
                                                                    }
                                                                }
                                                                ?>
                                                        <?php if (isset($rateMessage1)) : ?>
                                                            <?php echo "<p class='rateMessage'>$rateMessage1</p>"; ?>
                                                        <?php else: ?>
                                                            <?php for ($i = 0; $i < round($rateStarProduct); $i++) : ?>
                                                            <label for="star<?php echo $i; ?>">
                                                                <?php echo $i; ?>star
                                                            </label>
                                                            <?php endfor; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <p class="float-right mgg">
                                                    -<?php echo $getProductYouLike['discount']; ?>%
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col quantity">
                                                <p>Số lượng còn lại:
                                                    <span style="color: red;font-style: italic;">
                                                        <?php if($getProductYouLike['quantity'] == 0){
                                                                        echo "Hết hàng";
                                                                      }else {
                                                                        echo $getProductYouLike['quantity'];
                                                                      }
                                                                ?>

                                                    </span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="addCart text-center mt-2">
                                                        <?php if($getProductYouLike['quantity'] == 0) : ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
                                                        <?php else: ?>
                                                        <a class='btn'
                                                            href="?action=addCart&productName=<?php echo $getProductYouLike['productName']; ?>"><img
                                                                class='img-fluid' src='../images/menu/carts.png' alt=''> Thêm
                                                            vào giỏ hàng</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#like" data-slide="prev" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-left"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#like" data-slide="next" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <?php // products view Today
            if(isset($_SESSION['email'])){
                $getProductsViewTodayFirst = $cartDB->getProductsViewTodayFirst($_SESSION['email']);
                $getProductsViewTodaySecond = $cartDB->getProductsViewTodaySecond($_SESSION['email']);
            } 
        ?>
        <!-- có thể bạn sẽ thích -->
        <div class="row">
            <div class="col">
                <h3 class="title-comm"><span class="title-holder">BẠN VỪA XEM SẢN PHẨM HÔM NAY</span></h3>
            </div>
        </div>
        <?php if (isset($_SESSION['email']) &&( !empty($getProductsViewTodayFirst) || !empty($getProductsViewTodaySecond))) : ?>
        <div class="row">
            <div class="col">
                <div id="viewProductToday" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row viewsp12">
                                <?php foreach ($getProductsViewTodayFirst as $getProductViewTodayFirst) : ?>
                                <div class="col-2 sanpham viewsp1">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col">
                                                <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col imgProduct">
                                                <a href="?action=product_detail&productName=<?php echo $getProductViewTodayFirst['productName']; ?>&categoryID=<?php echo $getProductViewTodayFirst['categoryID']; ?>">
                                                    <img class="card-img-top" 
                                                        src="<?php echo '../images/productimage/' . $getProductViewTodayFirst['productName'] . '.jpg'; ?>"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col text-center productName">
                                                <a href="#" class="productname">
                                                    <h6 class="card-title">
                                                        <?php echo $getProductViewTodayFirst['productName']; ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col productPrice text-center">
                                                <p class="card-text price"><span>Giá :</span>
                                                    <?php echo number_format($getProductViewTodayFirst['price'], 0, ',', '.'); ?>đ
                                                </p>
                                                <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                    <?php echo number_format($getProductViewTodayFirst['finalPrice'], 0, ',', '.'); ?>đ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="danhgia">
                                                    <div class="rate">
                                                        <?php
                                                                if (isset($getProductViewTodayFirst['productName'])) {
                                                                    $rateProducts = $productDB->getRateStarProduct($getProductViewTodayFirst['productName']);
                                                                    $countRateProduct = count($rateProducts);
                                                                    if ($countRateProduct != 0) {
                                                                        $rateStar = 0;
                                                                        foreach ($rateProducts as $rateProduct) {
                                                                            $rateStar += $rateProduct['rateStarNumber'];
                                                                        }
                                                                        $rateStarProduct = $rateStar / $countRateProduct;
                                                                    } else {
                                                                        $rateMessage1 = "Chưa có đánh giá";
                                                                    }
                                                                }
                                                                ?>
                                                        <?php if (isset($rateMessage1)) : ?>
                                                            <?php echo "<p class='rateMessage'>$rateMessage1</p>"; ?>
                                                        <?php else: ?>
                                                            <?php for ($i = 0; $i < round($rateStarProduct); $i++) : ?>
                                                            <label for="star<?php echo $i; ?>">
                                                                <?php echo $i; ?>star
                                                            </label>
                                                            <?php endfor; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <p class="float-right mgg">
                                                    -<?php echo $getProductViewTodayFirst['discount']; ?>%
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col quantity">
                                                <p>Số lượng còn lại:
                                                    <span style="color: red;font-style: italic;">
                                                        <?php if($getProductViewTodayFirst['quantity'] == 0){
                                                                        echo "Hết hàng";
                                                                      }else {
                                                                        echo $getProductViewTodayFirst['quantity'];
                                                                      }
                                                                ?>

                                                    </span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="addCart text-center mt-2">
                                                        <?php if($getProductViewTodayFirst['quantity'] == 0) : ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
                                                        <?php else: ?>
                                                        <a class='btn'
                                                            href="?action=addCart&productName=<?php echo $getProductViewTodayFirst['productName']; ?>"><img
                                                                class='img-fluid' src='../images/menu/carts.png' alt=''> Thêm
                                                            vào giỏ hàng</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php if (!empty($getProductsViewTodaySecond)) : ?>
                        <div class="carousel-item">
                            <div class="row viewsp12">
                                <?php foreach ($getProductsViewTodaySecond as $getProductViewTodaySecond) : ?>
                                <div class="col-2 viewsp1 sanpham">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col">
                                                <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col imgProduct">
                                                <a href="?action=product_detail&productName=<?php echo $getProductViewTodaySecond['productName']; ?>&categoryID=<?php echo $getProductViewTodaySecond['categoryID']; ?>">
                                                    <img class="card-img-top" 
                                                        src="<?php echo '../images/productimage/' . $getProductViewTodaySecond['productName'] . '.jpg'; ?>"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col text-center productName">
                                                <a href="#" class="productname">
                                                    <h6 class="card-title">
                                                        <?php echo $getProductViewTodaySecond['productName']; ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col productPrice text-center">
                                                <p class="card-text price"><span>Giá :</span>
                                                    <?php echo number_format($getProductViewTodaySecond['price'], 0, ',', '.'); ?>đ
                                                </p>
                                                <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                    <?php echo number_format($getProductViewTodaySecond['finalPrice'], 0, ',', '.'); ?>đ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="danhgia">
                                                    <div class="rate">
                                                        <?php
                                                                if (isset($getProductViewTodaySecond['productName'])) {
                                                                    $rateProducts = $productDB->getRateStarProduct($getProductViewTodaySecond['productName']);
                                                                    $countRateProduct = count($rateProducts);
                                                                    if ($countRateProduct != 0) {
                                                                        $rateStar = 0;
                                                                        foreach ($rateProducts as $rateProduct) {
                                                                            $rateStar += $rateProduct['rateStarNumber'];
                                                                        }
                                                                        $rateStarProduct = $rateStar / $countRateProduct;
                                                                    } else {
                                                                        $rateMessage1 = "Chưa có đánh giá";
                                                                    }
                                                                }
                                                                ?>
                                                        <?php if (isset($rateMessage1)) : ?>
                                                            <?php echo "<p class='rateMessage'>$rateMessage1</p>"; ?>
                                                        <?php else: ?>
                                                            <?php for ($i = 0; $i < round($rateStarProduct); $i++) : ?>
                                                            <label for="star<?php echo $i; ?>">
                                                                <?php echo $i; ?>star
                                                            </label>
                                                            <?php endfor; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <p class="float-right mgg">
                                                    -<?php echo $getProductViewTodaySecond['discount']; ?>%
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col quantity">
                                                <p>Số lượng còn lại:
                                                    <span style="color: red;font-style: italic;">
                                                        <?php if($getProductViewTodaySecond['quantity'] == 0){
                                                                        echo "Hết hàng";
                                                                      }else {
                                                                        echo $getProductViewTodaySecond['quantity'];
                                                                      }
                                                                ?>

                                                    </span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="addCart text-center mt-2">
                                                        <?php if($getProductViewTodaySecond['quantity'] == 0) : ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
                                                        <?php else: ?>
                                                        <a class='btn'
                                                            href="?action=addCart&productName=<?php echo $getProductViewTodaySecond['productName']; ?>"><img
                                                                class='img-fluid' src='../images/menu/carts.png' alt=''> Thêm
                                                            vào giỏ hàng</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <a class="carousel-control-prev" href="#viewProductToday" data-slide="prev" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-left"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#viewProductToday" data-slide="next" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <?php else : ?>
        <div class="row mt-5 mb-5">
            <div class="col">
                <div id="viewProductToday" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row likesp12">
                                <div class="col text-center">
                                    <h6
                                        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color: red;font-weight: bolder;font-style: italic;">
                                        Bạn chưa xem sản phẩm nào trong hôm nay</h6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row likesp12">
                                <div class="col text-center">
                                    <h6
                                        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color: red;font-weight: bolder;font-style: italic;">
                                        Bạn chưa xem sản phẩm nào trong hôm nay</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#viewProductToday" data-slide="prev" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-left"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#viewProductToday" data-slide="next" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>

    <hr style="border: 5px solid #223464;">
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/footer.php"; ?>