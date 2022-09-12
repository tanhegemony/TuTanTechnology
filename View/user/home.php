<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../images/fontawesome-free-5.15.4-web/css/all.min.css" />
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/user/home.css"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/homeResponsive.css"; ?>
        
    </style>
</head>

<body>
    <div class="container">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/header.php"; ?>
        <!-- slideshow -->
        <div class="row mt-2">
            <div class="col">
                <div id="slideshow1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#slideshow1" data-slide-to="0" aria-current="location"></li>
                        <li data-target="#slideshow1" data-slide-to="1"></li>
                        <li data-target="#slideshow1" data-slide-to="2"></li>
                        <li data-target="#slideshow1" data-slide-to="3"></li>
                        <li data-target="#slideshow1" data-slide-to="4"></li>
                        <li data-target="#slideshow1" data-slide-to="5"></li>
                        <li data-target="#slideshow1" data-slide-to="6"></li>
                        <li data-target="#slideshow1" data-slide-to="7"></li>
                        <li data-target="#slideshow1" data-slide-to="8"></li>
                        <li data-target="#slideshow1" data-slide-to="9"></li>
                        <li data-target="#slideshow1" data-slide-to="10"></li>
                        <li data-target="#slideshow1" data-slide-to="11"></li>
                        <li data-target="#slideshow1" data-slide-to="12"></li>
                        <li data-target="#slideshow1" data-slide-to="13"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" width="100%" src="../images/slideshow/1.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/2.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/3.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/4.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/5.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/6.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/7.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/8.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/9.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/10.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/11.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/12.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/13.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" width="100%" src="../images/slideshow/14.png" alt="">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slideshow1" data-slide="prev" role="button">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slideshow1" data-slide="next" role="button">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- flash sale -->
        <div class="row mt-2">
            <div class="col">
                <div id='nz-div'>
                    <h3 class="tde">
                        <span class="null"><img class="img-fluid" src="../images/menu/fire.png" width="18%" alt="">
                            Flash
                            Sale</span>
                    </h3>
                    <div class="sub-cat">
                        <p id="demo"></p>
                        <?php 
                                $dochtml = new DOMDocument();
                                $demo = $dochtml->getElementById('demo');
                                echo $demo;
                            ?>
                        <script>
                            // Thiết lập thời gian đích mà ta sẽ đếm
                            var countDownDate = new Date("July 15, 2022 15:07:02").getTime();
                            // cập nhập thời gian sau mỗi 1 giây
                            var x = setInterval(function () {

                                // Lấy thời gian hiện tại
                                var now = new Date().getTime();

                                // Lấy số thời gian chênh lệch
                                var distance = countDownDate - now;

                                // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                // HIển thị chuỗi thời gian trong thẻ p
                                document.getElementById("demo").innerHTML = "Thời gian còn lại: " + days +
                                    "Ngày " + hours + "Giờ " +
                                    minutes + "Phút " + seconds + "Giây ";
                                // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
                                if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById("demo").innerHTML = "Flash Sale đã kết thúc";
                                }

                            }, 1000);
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- view all flash sale -->
        <div class="row">
            <div class="col allview">
                <a href="?action=Show_Flash_Sale">Xem tất cả</a>
            </div>
        </div>
        <!-- sản phẩm flash sale -->
        <div class="row">
            <div class="col">
                <div id="flashsale" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row flashsale12 ">
                                <?php foreach ($getProductsFlashSaleFirstSlideShow as $getProductFlashSaleFirstSlideShow) : ?>
                                <input type="hidden" name="viewProductID">
                                <div class="col-2 sanpham flashsale1">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col">
                                                <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                <p class="float-right saletitle"><i class="fab fa-hotjar"></i> Đang sale</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col imgProduct">
                                                <a href="?action=product_detail&productName=<?php echo $getProductFlashSaleFirstSlideShow['productName']; ?>&categoryID=<?php echo $getProductFlashSaleFirstSlideShow['categoryID']; ?>">
                                                    <img class="card-img-top" 
                                                        src="<?php echo '../images/productimage/' . $getProductFlashSaleFirstSlideShow['productName'] . '.jpg'; ?>"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col text-center productName">
                                                <a href="#" class="productname">
                                                    <h6 class="card-title">
                                                        <?php echo $getProductFlashSaleFirstSlideShow['productName']; ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col productPrice text-center">
                                                <p class="card-text price"><span>Giá :</span>
                                                    <?php echo number_format($getProductFlashSaleFirstSlideShow['price'], 0, ',', '.'); ?>đ
                                                </p>
                                                <p class="text-center finalprice"><span>Sale còn :</span>
                                                    <?php echo number_format($getProductFlashSaleFirstSlideShow['finalPriceSale'], 0, ',', '.'); ?>đ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="danhgia">
                                                    <div class="rate">
                                                        <?php
                                                                if (isset($getProductFlashSaleFirstSlideShow['productName'])) {
                                                                    $rateProducts = $productDB->getRateStarProduct($getProductFlashSaleFirstSlideShow['productName']);
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
                                                    -<?php echo $getProductFlashSaleFirstSlideShow['discountSale']; ?>%
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col quantity">
                                                <p>Số lượng còn lại:
                                                    <span style="color: red;font-style: italic;">
                                                        <?php if($getProductFlashSaleFirstSlideShow['quantity'] == 0){
                                                                        echo "Hết hàng";
                                                                      }else {
                                                                        echo $getProductFlashSaleFirstSlideShow['quantity'];
                                                                      }
                                                                ?>

                                                    </span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <ul class="list-group">
                                                        <?php if ($getProductFlashSaleFirstSlideShow['categoryID'] == "01") : ?>
                                                        <li>Ram & ROM:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['ramSmartphone']; ?> ,
                                                            <?php echo $getProductFlashSaleFirstSlideShow['internalMemorySmartphone']; ?>
                                                        </li>
                                                        <li>Pin & Sạc:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['sizeBatterySmartphone']; ?>
                                                            ,
                                                            <?php echo $getProductFlashSaleFirstSlideShow['chargerSmartphone']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleFirstSlideShow['categoryID'] == "02") : ?>
                                                        <li>Ram & Ổ cứng:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['ramLaptop']; ?> ,
                                                            <?php echo $getProductFlashSaleFirstSlideShow['hardDriverLaptop']; ?>
                                                        </li>
                                                        <li>CPU: <?php echo $getProductFlashSaleFirstSlideShow['cpuLaptop']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleFirstSlideShow['categoryID'] == "03") : ?>
                                                        <li>Ram & ROM:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['ramTablet']; ?> ,
                                                            <?php echo $getProductFlashSaleFirstSlideShow['internalMemoryTablet']; ?>
                                                        </li>
                                                        <li>Pin & Sạc:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['pinTablet']; ?> ,
                                                            <?php echo $getProductFlashSaleFirstSlideShow['chargerTablet']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleFirstSlideShow['categoryID'] == "04") : ?>
                                                        <li>Ram & Ổ cứng:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['ramPC']; ?> ,
                                                            <?php echo $getProductFlashSaleFirstSlideShow['hardDriverPC']; ?>
                                                        </li>
                                                        <li>CPU: <?php echo $getProductFlashSaleFirstSlideShow['cpuPC']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleFirstSlideShow['categoryID'] == "05") : ?>
                                                        <li>Màn hình:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['screenWatch']; ?> ,
                                                            <?php echo $getProductFlashSaleFirstSlideShow['sizeScreenWatch']; ?>
                                                        </li>
                                                        <li>Sử dụng:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['batteryLifeWatch']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleFirstSlideShow['categoryID'] == "06") : ?>
                                                        <li>Hãng:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['brandAccessory']; ?>
                                                        </li>
                                                        <li>Loại phụ kiện:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['typeAccessory']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleFirstSlideShow['categoryID'] == "07") : ?>
                                                        <li>Hãng:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['brandTelevision']; ?>
                                                        </li>
                                                        <li>Màn hình:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['sizeScreenTelevision']; ?>
                                                            ,
                                                            <?php echo $getProductFlashSaleFirstSlideShow['resolutionTelevision']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleFirstSlideShow['categoryID'] == "08") : ?>
                                                        <li>Hãng:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['brandRefrigerator']; ?>
                                                        </li>
                                                        <li>Dung tích sử dụng:
                                                            <?php echo $getProductFlashSaleFirstSlideShow['useCapacityRefrigerator']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="addCart text-center mt-2">
                                                        <?php if($timeOut > $now) : ?>
                                                        <?php if($getProductFlashSaleFirstSlideShow['quantity'] == 0) : ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
                                                        <?php else: ?>
                                                        <a class='btn'
                                                            href="?action=addCart&productName=<?php echo $getProductFlashSaleFirstSlideShow['productName']; ?>"><img
                                                                class='img-fluid' src='../images/menu/carts.png' alt=''> Thêm
                                                            vào giỏ hàng</a>
                                                        <?php endif; ?>
                                                        <?php else: ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
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
                        <?php if(!empty($getProductsFlashSaleSecondSlideShow)) : ?>
                        <div class="carousel-item">
                            <div class="row flashsale12 ">
                                <?php foreach ($getProductsFlashSaleSecondSlideShow as $getProductFlashSaleSecondSlideShow) : ?>
                                <input type="hidden" name="viewProductID">
                                <div class="col-2 sanpham flashsale1">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col">
                                                <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                <p class="float-right saletitle"><i class="fab fa-hotjar"></i> Đang sale</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col imgProduct">
                                                <a href="?action=product_detail&productName=<?php echo $getProductFlashSaleSecondSlideShow['productName']; ?>&categoryID=<?php echo $getProductFlashSaleSecondSlideShow['categoryID']; ?>">
                                                    <img class="card-img-top" 
                                                        src="<?php echo '../images/productimage/' . $getProductFlashSaleSecondSlideShow['productName'] . '.jpg'; ?>"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col text-center productName">
                                                <a href="#" class="productname">
                                                    <h6 class="card-title">
                                                        <?php echo $getProductFlashSaleSecondSlideShow['productName']; ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col productPrice text-center">
                                                <p class="card-text price"><span>Giá :</span>
                                                    <?php echo number_format($getProductFlashSaleSecondSlideShow['price'], 0, ',', '.'); ?>đ
                                                </p>
                                                <p class="text-center finalprice"><span>Sale còn :</span>
                                                    <?php echo number_format($getProductFlashSaleSecondSlideShow['finalPriceSale'], 0, ',', '.'); ?>đ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="danhgia">
                                                    <div class="rate">
                                                        <?php
                                                                if (isset($getProductFlashSaleSecondSlideShow['productName'])) {
                                                                    $rateProducts = $productDB->getRateStarProduct($getProductFlashSaleSecondSlideShow['productName']);
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
                                                    -<?php echo $getProductFlashSaleSecondSlideShow['discountSale']; ?>%
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col quantity">
                                                <p>Số lượng còn lại:
                                                    <span style="color: red;font-style: italic;">
                                                        <?php if($getProductFlashSaleSecondSlideShow['quantity'] == 0){
                                                                        echo "Hết hàng";
                                                                      }else {
                                                                        echo $getProductFlashSaleSecondSlideShow['quantity'];
                                                                      }
                                                                ?>

                                                    </span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <ul class="list-group">
                                                        <?php if ($getProductFlashSaleSecondSlideShow['categoryID'] == "01") : ?>
                                                        <li>Ram & ROM:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['ramSmartphone']; ?> ,
                                                            <?php echo $getProductFlashSaleSecondSlideShow['internalMemorySmartphone']; ?>
                                                        </li>
                                                        <li>Pin & Sạc:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['sizeBatterySmartphone']; ?>
                                                            ,
                                                            <?php echo $getProductFlashSaleSecondSlideShow['chargerSmartphone']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleSecondSlideShow['categoryID'] == "02") : ?>
                                                        <li>Ram & Ổ cứng:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['ramLaptop']; ?> ,
                                                            <?php echo $getProductFlashSaleSecondSlideShow['hardDriverLaptop']; ?>
                                                        </li>
                                                        <li>CPU: <?php echo $getProductFlashSaleSecondSlideShow['cpuLaptop']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleSecondSlideShow['categoryID'] == "03") : ?>
                                                        <li>Ram & ROM:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['ramTablet']; ?> ,
                                                            <?php echo $getProductFlashSaleSecondSlideShow['internalMemoryTablet']; ?>
                                                        </li>
                                                        <li>Pin & Sạc:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['pinTablet']; ?> ,
                                                            <?php echo $getProductFlashSaleSecondSlideShow['chargerTablet']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleSecondSlideShow['categoryID'] == "04") : ?>
                                                        <li>Ram & Ổ cứng:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['ramPC']; ?> ,
                                                            <?php echo $getProductFlashSaleSecondSlideShow['hardDriverPC']; ?>
                                                        </li>
                                                        <li>CPU: <?php echo $getProductFlashSaleSecondSlideShow['cpuPC']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleSecondSlideShow['categoryID'] == "05") : ?>
                                                        <li>Màn hình:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['screenWatch']; ?> ,
                                                            <?php echo $getProductFlashSaleSecondSlideShow['sizeScreenWatch']; ?>
                                                        </li>
                                                        <li>Sử dụng:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['batteryLifeWatch']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleSecondSlideShow['categoryID'] == "06") : ?>
                                                        <li>Hãng:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['brandAccessory']; ?>
                                                        </li>
                                                        <li>Loại phụ kiện:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['typeAccessory']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleSecondSlideShow['categoryID'] == "07") : ?>
                                                        <li>Hãng:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['brandTelevision']; ?>
                                                        </li>
                                                        <li>Màn hình:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['sizeScreenTelevision']; ?>
                                                            ,
                                                            <?php echo $getProductFlashSaleSecondSlideShow['resolutionTelevision']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($getProductFlashSaleSecondSlideShow['categoryID'] == "08") : ?>
                                                        <li>Hãng:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['brandRefrigerator']; ?>
                                                        </li>
                                                        <li>Dung tích sử dụng:
                                                            <?php echo $getProductFlashSaleSecondSlideShow['useCapacityRefrigerator']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="addCart text-center mt-2">
                                                        <?php if($timeOut > $now) : ?>
                                                        <?php if($getProductFlashSaleSecondSlideShow['quantity'] == 0) : ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
                                                        <?php else: ?>
                                                        <a class='btn'
                                                            href="?action=addCart&productName=<?php echo $getProductFlashSaleSecondSlideShow['productName']; ?>"><img
                                                                class='img-fluid' src='../images/menu/carts.png' alt=''> Thêm
                                                            vào giỏ hàng</a>
                                                        <?php endif; ?>
                                                        <?php else: ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
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
                </div>
                <a class="carousel-control-prev" href="#flashsale" data-slide="prev" role="button">
                    <span class="carousel-control" aria-hidden="true"><i class="fas fa-arrow-circle-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#flashsale" data-slide="next" role="button">
                    <span class="carousel-control" aria-hidden="true"><i class="fas fa-arrow-circle-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- sản phẩm bán chạy -->
        <div class="container-fluid mt-4 spbc">
            <div class="row mt-2 mb-2">
                <div class="col title">
                    <h2>
                        <img class="img-fluid" src="../images/banner/selling.png" alt="">
                        Sản phẩm bán chạy</h2>
                </div>
            </div>
            <div class="row">
                <div class="col allview">
                    <a href="?action=viewAllProductOrder">Xem tất cả</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="spbanchay" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row spbanchay12 ">
                                    <?php foreach ($getProductsByOrderFirst as $getProductByOrderFirst) : ?>
                                    <input type="hidden" name="viewProductID">
                                    <div class="col-2 sanpham spbanchay1">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col imgProduct">
                                                    <a href="?action=product_detail&productName=<?php echo $getProductByOrderFirst['productName']; ?>&categoryID=<?php echo $getProductByOrderFirst['categoryID']; ?>">
                                                        <img class="card-img-top" 
                                                            src="<?php echo '../images/productimage/' . $getProductByOrderFirst['productName'] . '.jpg'; ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           <div class="row">
                                               <div class="col text-center productName">
                                                    <a href="#" class="productname">
                                                        <h6 class="card-title">
                                                            <?php echo $getProductByOrderFirst['productName']; ?>
                                                        </h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col productPrice text-center">
                                                    <p class="card-text price"><span>Giá :</span>
                                                        <?php echo number_format($getProductByOrderFirst['price'], 0, ',', '.'); ?>đ
                                                    </p>
                                                    <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                        <?php echo number_format($getProductByOrderFirst['finalPrice'], 0, ',', '.'); ?>đ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="danhgia">
                                                        <div class="rate">
                                                            <?php
                                                                    if (isset($getProductByOrderFirst['productName'])) {
                                                                        $rateProducts = $productDB->getRateStarProduct($getProductByOrderFirst['productName']);
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
                                                        -<?php echo $getProductByOrderFirst['discount']; ?>%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col quantity">
                                                    <p>Số lượng còn lại:
                                                        <span style="color: red;font-style: italic;">
                                                            <?php if($getProductByOrderFirst['quantity'] == 0){
                                                                            echo "Hết hàng";
                                                                          }else {
                                                                            echo $getProductByOrderFirst['quantity'];
                                                                          }
                                                                    ?>

                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="list-group">
                                                            <?php if ($getProductByOrderFirst['categoryID'] == "01") : ?>
                                                            <li>Ram & ROM:
                                                                <?php echo $getProductByOrderFirst['ramSmartphone']; ?> ,
                                                                <?php echo $getProductByOrderFirst['internalMemorySmartphone']; ?>
                                                            </li>
                                                            <li>Pin & Sạc:
                                                                <?php echo $getProductByOrderFirst['sizeBatterySmartphone']; ?>
                                                                ,
                                                                <?php echo $getProductByOrderFirst['chargerSmartphone']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderFirst['categoryID'] == "02") : ?>
                                                            <li>Ram & Ổ cứng:
                                                                <?php echo $getProductByOrderFirst['ramLaptop']; ?> ,
                                                                <?php echo $getProductByOrderFirst['hardDriverLaptop']; ?>
                                                            </li>
                                                            <li>CPU: <?php echo $getProductByOrderFirst['cpuLaptop']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderFirst['categoryID'] == "03") : ?>
                                                            <li>Ram & ROM:
                                                                <?php echo $getProductByOrderFirst['ramTablet']; ?> ,
                                                                <?php echo $getProductByOrderFirst['internalMemoryTablet']; ?>
                                                            </li>
                                                            <li>Pin & Sạc:
                                                                <?php echo $getProductByOrderFirst['pinTablet']; ?> ,
                                                                <?php echo $getProductByOrderFirst['chargerTablet']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderFirst['categoryID'] == "04") : ?>
                                                            <li>Ram & Ổ cứng:
                                                                <?php echo $getProductByOrderFirst['ramPC']; ?> ,
                                                                <?php echo $getProductByOrderFirst['hardDriverPC']; ?>
                                                            </li>
                                                            <li>CPU: <?php echo $getProductByOrderFirst['cpuPC']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderFirst['categoryID'] == "05") : ?>
                                                            <li>Màn hình:
                                                                <?php echo $getProductByOrderFirst['screenWatch']; ?> ,
                                                                <?php echo $getProductByOrderFirst['sizeScreenWatch']; ?>
                                                            </li>
                                                            <li>Sử dụng:
                                                                <?php echo $getProductByOrderFirst['batteryLifeWatch']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderFirst['categoryID'] == "06") : ?>
                                                            <li>Hãng:
                                                                <?php echo $getProductByOrderFirst['brandAccessory']; ?>
                                                            </li>
                                                            <li>Loại phụ kiện:
                                                                <?php echo $getProductByOrderFirst['typeAccessory']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderFirst['categoryID'] == "07") : ?>
                                                            <li>Hãng:
                                                                <?php echo $getProductByOrderFirst['brandTelevision']; ?>
                                                            </li>
                                                            <li>Màn hình:
                                                                <?php echo $getProductByOrderFirst['sizeScreenTelevision']; ?>
                                                                ,
                                                                <?php echo $getProductByOrderFirst['resolutionTelevision']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderFirst['categoryID'] == "08") : ?>
                                                            <li>Hãng:
                                                                <?php echo $getProductByOrderFirst['brandRefrigerator']; ?>
                                                            </li>
                                                            <li>Dung tích sử dụng:
                                                                <?php echo $getProductByOrderFirst['useCapacityRefrigerator']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="addCart text-center mt-2">
                                                            <?php if($getProductByOrderFirst['quantity'] == 0) : ?>
                                                            <button class='btn disableButton' disabled><img class='img-fluid'
                                                                    src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                hàng</button>
                                                            <?php else: ?>
                                                            <a class='btn'
                                                                href="?action=addCart&productName=<?php echo $getProductByOrderFirst['productName']; ?>"><img
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
                            
                            <?php if(!empty($getProductsByOrderSecond)) : ?>
                            <div class="carousel-item">
                                <div class="row spbanchay12 ">
                                    <?php foreach ($getProductsByOrderSecond as $getProductByOrderSecond) : ?>
                                    <input type="hidden" name="viewProductID">
                                    <div class="col-2 sanpham spbanchay1">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col imgProduct">
                                                    <a href="?action=product_detail&productName=<?php echo $getProductByOrderSecond['productName']; ?>&categoryID=<?php echo $getProductByOrderSecond['categoryID']; ?>">
                                                        <img class="card-img-top" 
                                                            src="<?php echo '../images/productimage/' . $getProductByOrderSecond['productName'] . '.jpg'; ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           <div class="row">
                                               <div class="col text-center productName">
                                                    <a href="#" class="productname">
                                                        <h6 class="card-title">
                                                            <?php echo $getProductByOrderSecond['productName']; ?>
                                                        </h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col productPrice text-center">
                                                    <p class="card-text price"><span>Giá :</span>
                                                        <?php echo number_format($getProductByOrderSecond['price'], 0, ',', '.'); ?>đ
                                                    </p>
                                                    <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                        <?php echo number_format($getProductByOrderSecond['finalPrice'], 0, ',', '.'); ?>đ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="danhgia">
                                                        <div class="rate">
                                                            <?php
                                                                    if (isset($getProductByOrderSecond['productName'])) {
                                                                        $rateProducts = $productDB->getRateStarProduct($getProductByOrderSecond['productName']);
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
                                                        -<?php echo $getProductByOrderSecond['discount']; ?>%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col quantity">
                                                    <p>Số lượng còn lại:
                                                        <span style="color: red;font-style: italic;">
                                                            <?php if($getProductByOrderSecond['quantity'] == 0){
                                                                            echo "Hết hàng";
                                                                          }else {
                                                                            echo $getProductByOrderSecond['quantity'];
                                                                          }
                                                                    ?>

                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="list-group">
                                                            <?php if ($getProductByOrderSecond['categoryID'] == "01") : ?>
                                                            <li>Ram & ROM:
                                                                <?php echo $getProductByOrderSecond['ramSmartphone']; ?> ,
                                                                <?php echo $getProductByOrderSecond['internalMemorySmartphone']; ?>
                                                            </li>
                                                            <li>Pin & Sạc:
                                                                <?php echo $getProductByOrderSecond['sizeBatterySmartphone']; ?>
                                                                ,
                                                                <?php echo $getProductByOrderSecond['chargerSmartphone']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderSecond['categoryID'] == "02") : ?>
                                                            <li>Ram & Ổ cứng:
                                                                <?php echo $getProductByOrderSecond['ramLaptop']; ?> ,
                                                                <?php echo $getProductByOrderSecond['hardDriverLaptop']; ?>
                                                            </li>
                                                            <li>CPU: <?php echo $getProductByOrderSecond['cpuLaptop']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderSecond['categoryID'] == "03") : ?>
                                                            <li>Ram & ROM:
                                                                <?php echo $getProductByOrderSecond['ramTablet']; ?> ,
                                                                <?php echo $getProductByOrderSecond['internalMemoryTablet']; ?>
                                                            </li>
                                                            <li>Pin & Sạc:
                                                                <?php echo $getProductByOrderSecond['pinTablet']; ?> ,
                                                                <?php echo $getProductByOrderSecond['chargerTablet']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderSecond['categoryID'] == "04") : ?>
                                                            <li>Ram & Ổ cứng:
                                                                <?php echo $getProductByOrderSecond['ramPC']; ?> ,
                                                                <?php echo $getProductByOrderSecond['hardDriverPC']; ?>
                                                            </li>
                                                            <li>CPU: <?php echo $getProductByOrderSecond['cpuPC']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderSecond['categoryID'] == "05") : ?>
                                                            <li>Màn hình:
                                                                <?php echo $getProductByOrderSecond['screenWatch']; ?> ,
                                                                <?php echo $getProductByOrderSecond['sizeScreenWatch']; ?>
                                                            </li>
                                                            <li>Sử dụng:
                                                                <?php echo $getProductByOrderSecond['batteryLifeWatch']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderSecond['categoryID'] == "06") : ?>
                                                            <li>Hãng:
                                                                <?php echo $getProductByOrderSecond['brandAccessory']; ?>
                                                            </li>
                                                            <li>Loại phụ kiện:
                                                                <?php echo $getProductByOrderSecond['typeAccessory']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderSecond['categoryID'] == "07") : ?>
                                                            <li>Hãng:
                                                                <?php echo $getProductByOrderSecond['brandTelevision']; ?>
                                                            </li>
                                                            <li>Màn hình:
                                                                <?php echo $getProductByOrderSecond['sizeScreenTelevision']; ?>
                                                                ,
                                                                <?php echo $getProductByOrderSecond['resolutionTelevision']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getProductByOrderSecond['categoryID'] == "08") : ?>
                                                            <li>Hãng:
                                                                <?php echo $getProductByOrderSecond['brandRefrigerator']; ?>
                                                            </li>
                                                            <li>Dung tích sử dụng:
                                                                <?php echo $getProductByOrderSecond['useCapacityRefrigerator']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="addCart text-center mt-2">
                                                            <?php if($getProductByOrderSecond['quantity'] == 0) : ?>
                                                            <button class='btn disableButton' disabled><img class='img-fluid'
                                                                    src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                hàng</button>
                                                            <?php else: ?>
                                                            <a class='btn'
                                                                href="?action=addCart&productName=<?php echo $getProductByOrderSecond['productName']; ?>"><img
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
                        <a class="carousel-control-prev" href="#spbanchay" data-slide="prev" role="button">
                            <span class="carousel-control" aria-hidden="true"><i
                                    class="fas fa-arrow-circle-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#spbanchay" data-slide="next" role="button">
                            <span class="carousel-control" aria-hidden="true"><i
                                    class="fas fa-arrow-circle-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- sản phẩm đang được quan tâm -->
        <div class="container-fluid spddqt">
            <div class="row mt-3">
                <div class="col-9 title">
                    <h2>Sản phẩm được quan tâm nhất</h2>
                </div>
                <div class="col-3">
                    <div class="all float-right">
                        <a href="?action=viewAllProductInterest">Xem tất cả</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="spquantam" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row spquantam12 ">
                                    <?php foreach ($firstSlideShowInterestOfProducts as $firstSlideShowInterestOfProduct) : ?>
                                    <input type="hidden" name="viewProductID">
                                    <div class="col-2 sanpham spquantam1">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col imgProduct">
                                                    <a href="?action=product_detail&productName=<?php echo $firstSlideShowInterestOfProduct['productName']; ?>&categoryID=<?php echo $firstSlideShowInterestOfProduct['categoryID']; ?>">
                                                        <img class="card-img-top" 
                                                            src="<?php echo '../images/productimage/' . $firstSlideShowInterestOfProduct['productName'] . '.jpg'; ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           <div class="row">
                                               <div class="col text-center productName">
                                                    <a href="#" class="productname">
                                                        <h6 class="card-title">
                                                            <?php echo $firstSlideShowInterestOfProduct['productName']; ?>
                                                        </h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col productPrice text-center">
                                                    <p class="card-text price"><span>Giá :</span>
                                                        <?php echo number_format($firstSlideShowInterestOfProduct['price'], 0, ',', '.'); ?>đ
                                                    </p>
                                                    <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                        <?php echo number_format($firstSlideShowInterestOfProduct['finalPrice'], 0, ',', '.'); ?>đ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="danhgia">
                                                        <div class="rate">
                                                            <?php
                                                                    if (isset($firstSlideShowInterestOfProduct['productName'])) {
                                                                        $rateProducts = $productDB->getRateStarProduct($firstSlideShowInterestOfProduct['productName']);
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
                                                        -<?php echo $firstSlideShowInterestOfProduct['discount']; ?>%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col quantity">
                                                    <p>Số lượng còn lại:
                                                        <span style="color: red;font-style: italic;">
                                                            <?php if($firstSlideShowInterestOfProduct['quantity'] == 0){
                                                                            echo "Hết hàng";
                                                                          }else {
                                                                            echo $firstSlideShowInterestOfProduct['quantity'];
                                                                          }
                                                                    ?>

                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="list-group">
                                                            <?php if ($firstSlideShowInterestOfProduct['categoryID'] == "01") : ?>
                                                            <li>Ram & ROM:
                                                                <?php echo $firstSlideShowInterestOfProduct['ramSmartphone']; ?> ,
                                                                <?php echo $firstSlideShowInterestOfProduct['internalMemorySmartphone']; ?>
                                                            </li>
                                                            <li>Pin & Sạc:
                                                                <?php echo $firstSlideShowInterestOfProduct['sizeBatterySmartphone']; ?>
                                                                ,
                                                                <?php echo $firstSlideShowInterestOfProduct['chargerSmartphone']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($firstSlideShowInterestOfProduct['categoryID'] == "02") : ?>
                                                            <li>Ram & Ổ cứng:
                                                                <?php echo $firstSlideShowInterestOfProduct['ramLaptop']; ?> ,
                                                                <?php echo $firstSlideShowInterestOfProduct['hardDriverLaptop']; ?>
                                                            </li>
                                                            <li>CPU: <?php echo $firstSlideShowInterestOfProduct['cpuLaptop']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($firstSlideShowInterestOfProduct['categoryID'] == "03") : ?>
                                                            <li>Ram & ROM:
                                                                <?php echo $firstSlideShowInterestOfProduct['ramTablet']; ?> ,
                                                                <?php echo $firstSlideShowInterestOfProduct['internalMemoryTablet']; ?>
                                                            </li>
                                                            <li>Pin & Sạc:
                                                                <?php echo $firstSlideShowInterestOfProduct['pinTablet']; ?> ,
                                                                <?php echo $firstSlideShowInterestOfProduct['chargerTablet']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($firstSlideShowInterestOfProduct['categoryID'] == "04") : ?>
                                                            <li>Ram & Ổ cứng:
                                                                <?php echo $firstSlideShowInterestOfProduct['ramPC']; ?> ,
                                                                <?php echo $firstSlideShowInterestOfProduct['hardDriverPC']; ?>
                                                            </li>
                                                            <li>CPU: <?php echo $firstSlideShowInterestOfProduct['cpuPC']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($firstSlideShowInterestOfProduct['categoryID'] == "05") : ?>
                                                            <li>Màn hình:
                                                                <?php echo $firstSlideShowInterestOfProduct['screenWatch']; ?> ,
                                                                <?php echo $firstSlideShowInterestOfProduct['sizeScreenWatch']; ?>
                                                            </li>
                                                            <li>Sử dụng:
                                                                <?php echo $firstSlideShowInterestOfProduct['batteryLifeWatch']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($firstSlideShowInterestOfProduct['categoryID'] == "06") : ?>
                                                            <li>Hãng:
                                                                <?php echo $firstSlideShowInterestOfProduct['brandAccessory']; ?>
                                                            </li>
                                                            <li>Loại phụ kiện:
                                                                <?php echo $firstSlideShowInterestOfProduct['typeAccessory']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($firstSlideShowInterestOfProduct['categoryID'] == "07") : ?>
                                                            <li>Hãng:
                                                                <?php echo $firstSlideShowInterestOfProduct['brandTelevision']; ?>
                                                            </li>
                                                            <li>Màn hình:
                                                                <?php echo $firstSlideShowInterestOfProduct['sizeScreenTelevision']; ?>
                                                                ,
                                                                <?php echo $firstSlideShowInterestOfProduct['resolutionTelevision']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($firstSlideShowInterestOfProduct['categoryID'] == "08") : ?>
                                                            <li>Hãng:
                                                                <?php echo $firstSlideShowInterestOfProduct['brandRefrigerator']; ?>
                                                            </li>
                                                            <li>Dung tích sử dụng:
                                                                <?php echo $firstSlideShowInterestOfProduct['useCapacityRefrigerator']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="addCart text-center mt-2">
                                                            <?php if($firstSlideShowInterestOfProduct['quantity'] == 0) : ?>
                                                            <button class='btn disableButton' disabled><img class='img-fluid'
                                                                    src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                hàng</button>
                                                            <?php else: ?>
                                                            <a class='btn'
                                                                href="?action=addCart&productName=<?php echo $firstSlideShowInterestOfProduct['productName']; ?>"><img
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
                            <?php if(!empty($secondSlideShowInterestOfProducts)) : ?>
                            <div class="carousel-item">
                                <div class="row spquantam12 ">
                                    <?php foreach ($secondSlideShowInterestOfProducts as $secondSlideShowInterestOfProduct) : ?>
                                    <input type="hidden" name="viewProductID">
                                    <div class="col-2 sanpham spquantam1">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col imgProduct">
                                                    <a href="?action=product_detail&productName=<?php echo $secondSlideShowInterestOfProduct['productName']; ?>&categoryID=<?php echo $secondSlideShowInterestOfProduct['categoryID']; ?>">
                                                        <img class="card-img-top" 
                                                            src="<?php echo '../images/productimage/' . $secondSlideShowInterestOfProduct['productName'] . '.jpg'; ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           <div class="row">
                                               <div class="col text-center productName">
                                                    <a href="#" class="productname">
                                                        <h6 class="card-title">
                                                            <?php echo $secondSlideShowInterestOfProduct['productName']; ?>
                                                        </h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col productPrice text-center">
                                                    <p class="card-text price"><span>Giá :</span>
                                                        <?php echo number_format($secondSlideShowInterestOfProduct['price'], 0, ',', '.'); ?>đ
                                                    </p>
                                                    <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                        <?php echo number_format($secondSlideShowInterestOfProduct['finalPrice'], 0, ',', '.'); ?>đ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="danhgia">
                                                        <div class="rate">
                                                            <?php
                                                                    if (isset($secondSlideShowInterestOfProduct['productName'])) {
                                                                        $rateProducts = $productDB->getRateStarProduct($secondSlideShowInterestOfProduct['productName']);
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
                                                        -<?php echo $secondSlideShowInterestOfProduct['discount']; ?>%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col quantity">
                                                    <p>Số lượng còn lại:
                                                        <span style="color: red;font-style: italic;">
                                                            <?php if($secondSlideShowInterestOfProduct['quantity'] == 0){
                                                                            echo "Hết hàng";
                                                                          }else {
                                                                            echo $secondSlideShowInterestOfProduct['quantity'];
                                                                          }
                                                                    ?>

                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="list-group">
                                                            <?php if ($secondSlideShowInterestOfProduct['categoryID'] == "01") : ?>
                                                            <li>Ram & ROM:
                                                                <?php echo $secondSlideShowInterestOfProduct['ramSmartphone']; ?> ,
                                                                <?php echo $secondSlideShowInterestOfProduct['internalMemorySmartphone']; ?>
                                                            </li>
                                                            <li>Pin & Sạc:
                                                                <?php echo $secondSlideShowInterestOfProduct['sizeBatterySmartphone']; ?>
                                                                ,
                                                                <?php echo $secondSlideShowInterestOfProduct['chargerSmartphone']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($secondSlideShowInterestOfProduct['categoryID'] == "02") : ?>
                                                            <li>Ram & Ổ cứng:
                                                                <?php echo $secondSlideShowInterestOfProduct['ramLaptop']; ?> ,
                                                                <?php echo $secondSlideShowInterestOfProduct['hardDriverLaptop']; ?>
                                                            </li>
                                                            <li>CPU: <?php echo $secondSlideShowInterestOfProduct['cpuLaptop']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($secondSlideShowInterestOfProduct['categoryID'] == "03") : ?>
                                                            <li>Ram & ROM:
                                                                <?php echo $secondSlideShowInterestOfProduct['ramTablet']; ?> ,
                                                                <?php echo $secondSlideShowInterestOfProduct['internalMemoryTablet']; ?>
                                                            </li>
                                                            <li>Pin & Sạc:
                                                                <?php echo $secondSlideShowInterestOfProduct['pinTablet']; ?> ,
                                                                <?php echo $secondSlideShowInterestOfProduct['chargerTablet']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($secondSlideShowInterestOfProduct['categoryID'] == "04") : ?>
                                                            <li>Ram & Ổ cứng:
                                                                <?php echo $secondSlideShowInterestOfProduct['ramPC']; ?> ,
                                                                <?php echo $secondSlideShowInterestOfProduct['hardDriverPC']; ?>
                                                            </li>
                                                            <li>CPU: <?php echo $secondSlideShowInterestOfProduct['cpuPC']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($secondSlideShowInterestOfProduct['categoryID'] == "05") : ?>
                                                            <li>Màn hình:
                                                                <?php echo $secondSlideShowInterestOfProduct['screenWatch']; ?> ,
                                                                <?php echo $secondSlideShowInterestOfProduct['sizeScreenWatch']; ?>
                                                            </li>
                                                            <li>Sử dụng:
                                                                <?php echo $secondSlideShowInterestOfProduct['batteryLifeWatch']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($secondSlideShowInterestOfProduct['categoryID'] == "06") : ?>
                                                            <li>Hãng:
                                                                <?php echo $secondSlideShowInterestOfProduct['brandAccessory']; ?>
                                                            </li>
                                                            <li>Loại phụ kiện:
                                                                <?php echo $secondSlideShowInterestOfProduct['typeAccessory']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($secondSlideShowInterestOfProduct['categoryID'] == "07") : ?>
                                                            <li>Hãng:
                                                                <?php echo $secondSlideShowInterestOfProduct['brandTelevision']; ?>
                                                            </li>
                                                            <li>Màn hình:
                                                                <?php echo $secondSlideShowInterestOfProduct['sizeScreenTelevision']; ?>
                                                                ,
                                                                <?php echo $secondSlideShowInterestOfProduct['resolutionTelevision']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($secondSlideShowInterestOfProduct['categoryID'] == "08") : ?>
                                                            <li>Hãng:
                                                                <?php echo $secondSlideShowInterestOfProduct['brandRefrigerator']; ?>
                                                            </li>
                                                            <li>Dung tích sử dụng:
                                                                <?php echo $secondSlideShowInterestOfProduct['useCapacityRefrigerator']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="addCart text-center mt-2">
                                                            <?php if($secondSlideShowInterestOfProduct['quantity'] == 0) : ?>
                                                            <button class='btn disableButton' disabled><img class='img-fluid'
                                                                    src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                hàng</button>
                                                            <?php else: ?>
                                                            <a class='btn'
                                                                href="?action=addCart&productName=<?php echo $secondSlideShowInterestOfProduct['productName']; ?>"><img
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
                        <a class="carousel-control-prev" href="#spquantam" data-slide="prev" role="button">
                            <span class="carousel-control" aria-hidden="true"><i
                                    class="fas fa-arrow-circle-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#spquantam" data-slide="next" role="button">
                            <span class="carousel-control" aria-hidden="true"><i
                                    class="fas fa-arrow-circle-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- gia dụng nổi bật -->
        <div class="container-fluid mt-4 gdnb">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="../images/banner/giadung-1200x120.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col allview">
                    <a href="?action=viewAllProductAppliances">Xem tất cả</a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <div id="giadungnoibat" class="carousel slide mb-4" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row giadungnoibat12 ">
                                    <?php foreach ($getAppliancesFirstSlideShow as $getApplianceFirstSlideShow) : ?>
                                    <input type="hidden" name="viewProductID">
                                    <div class="col-2 sanpham giadungnoibat1">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col imgProduct">
                                                    <a href="?action=product_detail&productName=<?php echo $getApplianceFirstSlideShow['productName']; ?>&categoryID=<?php echo $getApplianceFirstSlideShow['categoryID']; ?>">
                                                        <img class="card-img-top" 
                                                            src="<?php echo '../images/productimage/' . $getApplianceFirstSlideShow['productName'] . '.jpg'; ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           <div class="row">
                                               <div class="col text-center productName">
                                                    <a href="#" class="productname">
                                                        <h6 class="card-title">
                                                            <?php echo $getApplianceFirstSlideShow['productName']; ?>
                                                        </h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col productPrice text-center">
                                                    <p class="card-text price"><span>Giá :</span>
                                                        <?php echo number_format($getApplianceFirstSlideShow['price'], 0, ',', '.'); ?>đ
                                                    </p>
                                                    <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                        <?php echo number_format($getApplianceFirstSlideShow['finalPrice'], 0, ',', '.'); ?>đ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="danhgia">
                                                        <div class="rate">
                                                            <?php
                                                                    if (isset($getApplianceFirstSlideShow['productName'])) {
                                                                        $rateProducts = $productDB->getRateStarProduct($getApplianceFirstSlideShow['productName']);
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
                                                        -<?php echo $getApplianceFirstSlideShow['discount']; ?>%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col quantity">
                                                    <p>Số lượng còn lại:
                                                        <span style="color: red;font-style: italic;">
                                                            <?php if($getApplianceFirstSlideShow['quantity'] == 0){
                                                                            echo "Hết hàng";
                                                                          }else {
                                                                            echo $getApplianceFirstSlideShow['quantity'];
                                                                          }
                                                                    ?>

                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="list-group">
                                                            <?php if ($getApplianceFirstSlideShow['categoryID'] == "07") : ?>
                                                            <li>Hãng:
                                                                <?php echo $getApplianceFirstSlideShow['brandTelevision']; ?>
                                                            </li>
                                                            <li>Màn hình:
                                                                <?php echo $getApplianceFirstSlideShow['sizeScreenTelevision']; ?>
                                                                ,
                                                                <?php echo $getApplianceFirstSlideShow['resolutionTelevision']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getApplianceFirstSlideShow['categoryID'] == "08") : ?>
                                                            <li>Hãng:
                                                                <?php echo $getApplianceFirstSlideShow['brandRefrigerator']; ?>
                                                            </li>
                                                            <li>Dung tích sử dụng:
                                                                <?php echo $getApplianceFirstSlideShow['useCapacityRefrigerator']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="addCart text-center mt-2">
                                                            <?php if($getApplianceFirstSlideShow['quantity'] == 0) : ?>
                                                            <button class='btn disableButton' disabled><img class='img-fluid'
                                                                    src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                hàng</button>
                                                            <?php else: ?>
                                                            <a class='btn'
                                                                href="?action=addCart&productName=<?php echo $getApplianceFirstSlideShow['productName']; ?>"><img
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
                                <div class="row giadungnoibat12 ">
                                    <?php foreach ($getAppliancesSecondSlideShow as $getApplianceSecondSlideShow) : ?>
                                    <input type="hidden" name="viewProductID">
                                    <div class="col-2 sanpham giadungnoibat1">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col imgProduct">
                                                    <a href="?action=product_detail&productName=<?php echo $getApplianceSecondSlideShow['productName']; ?>&categoryID=<?php echo $getApplianceSecondSlideShow['categoryID']; ?>">
                                                        <img class="card-img-top" 
                                                            src="<?php echo '../images/productimage/' . $getApplianceSecondSlideShow['productName'] . '.jpg'; ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           <div class="row">
                                               <div class="col text-center productName">
                                                    <a href="#" class="productname">
                                                        <h6 class="card-title">
                                                            <?php echo $getApplianceSecondSlideShow['productName']; ?>
                                                        </h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col productPrice text-center">
                                                    <p class="card-text price"><span>Giá :</span>
                                                        <?php echo number_format($getApplianceSecondSlideShow['price'], 0, ',', '.'); ?>đ
                                                    </p>
                                                    <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                        <?php echo number_format($getApplianceSecondSlideShow['finalPrice'], 0, ',', '.'); ?>đ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="danhgia">
                                                        <div class="rate">
                                                            <?php
                                                                    if (isset($getApplianceSecondSlideShow['productName'])) {
                                                                        $rateProducts = $productDB->getRateStarProduct($getApplianceSecondSlideShow['productName']);
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
                                                        -<?php echo $getApplianceSecondSlideShow['discount']; ?>%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col quantity">
                                                    <p>Số lượng còn lại:
                                                        <span style="color: red;font-style: italic;">
                                                            <?php if($getApplianceSecondSlideShow['quantity'] == 0){
                                                                            echo "Hết hàng";
                                                                          }else {
                                                                            echo $getApplianceSecondSlideShow['quantity'];
                                                                          }
                                                                    ?>

                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="list-group">
                                                            <?php if ($getApplianceSecondSlideShow['categoryID'] == "07") : ?>
                                                            <li>Hãng:
                                                                <?php echo $getApplianceSecondSlideShow['brandTelevision']; ?>
                                                            </li>
                                                            <li>Màn hình:
                                                                <?php echo $getApplianceSecondSlideShow['sizeScreenTelevision']; ?>
                                                                ,
                                                                <?php echo $getApplianceSecondSlideShow['resolutionTelevision']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if ($getApplianceSecondSlideShow['categoryID'] == "08") : ?>
                                                            <li>Hãng:
                                                                <?php echo $getApplianceSecondSlideShow['brandRefrigerator']; ?>
                                                            </li>
                                                            <li>Dung tích sử dụng:
                                                                <?php echo $getApplianceSecondSlideShow['useCapacityRefrigerator']; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="addCart text-center mt-2">
                                                            <?php if($getApplianceSecondSlideShow['quantity'] == 0) : ?>
                                                            <button class='btn disableButton' disabled><img class='img-fluid'
                                                                    src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                hàng</button>
                                                            <?php else: ?>
                                                            <a class='btn'
                                                                href="?action=addCart&productName=<?php echo $getApplianceSecondSlideShow['productName']; ?>"><img
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
                        <a class="carousel-control-prev" href="#giadungnoibat" data-slide="prev" role="button">
                            <span class="carousel-control" aria-hidden="true"><i
                                    class="fas fa-arrow-circle-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#giadungnoibat" data-slide="next" role="button">
                            <span class="carousel-control" aria-hidden="true"><i
                                    class="fas fa-arrow-circle-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- laptop nổi bật -->
        <div class="container-fluid mt-4 ltnb">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="../images/banner/laptop.jpg" style="max-width: 100%;" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col allview">
                    <a href="?action=productsByCategory&categoryID=2">Xem tất cả</a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <div id="laptopbanchay" class="carousel slide mb-4" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row laptopbanchay12 ">
                                    <?php foreach ($getLaptopsFirstSlideShow as $getLaptopFirstSlideShow) : ?>
                                    <input type="hidden" name="viewProductID">
                                    <div class="col-2 sanpham laptopbanchay1">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col imgProduct imgProductLaptop">
                                                    <a href="?action=product_detail&productName=<?php echo $getLaptopFirstSlideShow['productName']; ?>&categoryID=<?php echo $getLaptopFirstSlideShow['categoryID']; ?>">
                                                        <img class="card-img-top" 
                                                            src="<?php echo '../images/productimage/' . $getLaptopFirstSlideShow['productName'] . '.jpg'; ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           <div class="row">
                                               <div class="col text-center productName">
                                                    <a href="#" class="productname">
                                                        <h6 class="card-title">
                                                            <?php echo $getLaptopFirstSlideShow['productName']; ?>
                                                        </h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col productPrice text-center">
                                                    <p class="card-text price"><span>Giá :</span>
                                                        <?php echo number_format($getLaptopFirstSlideShow['price'], 0, ',', '.'); ?>đ
                                                    </p>
                                                    <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                        <?php echo number_format($getLaptopFirstSlideShow['finalPrice'], 0, ',', '.'); ?>đ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="danhgia">
                                                        <div class="rate">
                                                            <?php
                                                                    if (isset($getLaptopFirstSlideShow['productName'])) {
                                                                        $rateProducts = $productDB->getRateStarProduct($getLaptopFirstSlideShow['productName']);
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
                                                        -<?php echo $getLaptopFirstSlideShow['discount']; ?>%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col quantity">
                                                    <p>Số lượng còn lại:
                                                        <span style="color: red;font-style: italic;">
                                                            <?php if($getLaptopFirstSlideShow['quantity'] == 0){
                                                                            echo "Hết hàng";
                                                                          }else {
                                                                            echo $getLaptopFirstSlideShow['quantity'];
                                                                          }
                                                                    ?>

                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="list-group">
                                                            <li>Ram & Ổ cứng:
                                                                <?php echo $getLaptopFirstSlideShow['ramLaptop']; ?> ,
                                                                <?php echo $getLaptopFirstSlideShow['hardDriverLaptop']; ?>
                                                            </li>
                                                            <li>CPU: <?php echo $getLaptopFirstSlideShow['cpuLaptop']; ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="addCart text-center mt-2">
                                                            <?php if($getLaptopFirstSlideShow['quantity'] == 0) : ?>
                                                            <button class='btn disableButton' disabled><img class='img-fluid'
                                                                    src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                hàng</button>
                                                            <?php else: ?>
                                                            <a class='btn'
                                                                href="?action=addCart&productName=<?php echo $getLaptopFirstSlideShow['productName']; ?>"><img
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
                                <div class="row laptopbanchay12 ">
                                    <?php foreach ($getLaptopsSecondSlideShow as $getLaptopSecondSlideShow) : ?>
                                    <input type="hidden" name="viewProductID">
                                    <div class="col-2 sanpham laptopbanchay1">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col imgProduct imgProductLaptop">
                                                    <a href="?action=product_detail&productName=<?php echo $getLaptopSecondSlideShow['productName']; ?>&categoryID=<?php echo $getLaptopSecondSlideShow['categoryID']; ?>">
                                                        <img class="card-img-top" 
                                                            src="<?php echo '../images/productimage/' . $getLaptopSecondSlideShow['productName'] . '.jpg'; ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           <div class="row">
                                               <div class="col text-center productName">
                                                    <a href="#" class="productname">
                                                        <h6 class="card-title">
                                                            <?php echo $getLaptopSecondSlideShow['productName']; ?>
                                                        </h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col productPrice text-center">
                                                    <p class="card-text price"><span>Giá :</span>
                                                        <?php echo number_format($getLaptopSecondSlideShow['price'], 0, ',', '.'); ?>đ
                                                    </p>
                                                    <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                        <?php echo number_format($getLaptopSecondSlideShow['finalPrice'], 0, ',', '.'); ?>đ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="danhgia">
                                                        <div class="rate">
                                                            <?php
                                                                    if (isset($getLaptopSecondSlideShow['productName'])) {
                                                                        $rateProducts = $productDB->getRateStarProduct($getLaptopSecondSlideShow['productName']);
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
                                                        -<?php echo $getLaptopSecondSlideShow['discount']; ?>%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col quantity">
                                                    <p>Số lượng còn lại:
                                                        <span style="color: red;font-style: italic;">
                                                            <?php if($getLaptopSecondSlideShow['quantity'] == 0){
                                                                            echo "Hết hàng";
                                                                          }else {
                                                                            echo $getLaptopSecondSlideShow['quantity'];
                                                                          }
                                                                    ?>

                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="list-group">
                                                            <li>Ram & Ổ cứng:
                                                                <?php echo $getLaptopSecondSlideShow['ramLaptop']; ?> ,
                                                                <?php echo $getLaptopSecondSlideShow['hardDriverLaptop']; ?>
                                                            </li>
                                                            <li>CPU: <?php echo $getLaptopSecondSlideShow['cpuLaptop']; ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="addCart text-center mt-2">
                                                            <?php if($getLaptopSecondSlideShow['quantity'] == 0) : ?>
                                                            <button class='btn disableButton' disabled><img class='img-fluid'
                                                                    src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                hàng</button>
                                                            <?php else: ?>
                                                            <a class='btn'
                                                                href="?action=addCart&productName=<?php echo $getLaptopSecondSlideShow['productName']; ?>"><img
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
                        <a class="carousel-control-prev" href="#laptopbanchay" data-slide="prev" role="button">
                            <span class="carousel-control" aria-hidden="true"><i
                                    class="fas fa-arrow-circle-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#laptopbanchay" data-slide="next" role="button">
                            <span class="carousel-control" aria-hidden="true"><i
                                    class="fas fa-arrow-circle-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- smartphone, tablet và watch nổi bật -->
        <div class="container-fluid mt-4 dtandmtbanddh">
            <div class="row">
                <div class="col-6 img1">
                    <img class="img-fluid" width="100%" src="../images/banner/smartphone.jpg" alt="">
                </div>
                <div class="col-6 img2">
                    <img class="img-fluid" width="100%" src="../images/banner/tablet.jpg" alt="">
                </div>
            </div>
            <div class="row watch">
                <div class="col-3 img3">
                    <img class="img-fluid" width="100%" src="../images/banner/watch.png" alt="">
                </div>
                <div class="col-9 contentPTW">
                    <ul class="nav nav-tabs" style="max-width: 100%;" id="dt_mtb_dh" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="smartphone-tab" data-toggle="tab" href="#smartphone"
                                role="tab" aria-controls="smartphone" aria-selected="true">
                                Smartphone nổi
                                bật</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tablet-tab" data-toggle="tab" href="#tablet" role="tab"
                                aria-controls="tablet" aria-selected="false">Tablet nổi bật</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="watch-tab" data-toggle="tab" href="#watch" role="tab"
                                aria-controls="watch" aria-selected="false">Watch nổi bật</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="dt_mtb_dhContent">
                        <div class="tab-pane fade show active" id="smartphone" role="tabpanel"
                            aria-labelledby="smartphone-tab">
                            <div class="allview">
                                <a href="?action=productsByCategory&categoryID=1">Xem tất cả</a>
                            </div>
                            <div id="smartphoneslide" class="carousel slide mt-2 mb-5" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row smartphoneslide12 ">
                                            <?php foreach ($getSmartphonesFirstSlideShow as $getSmartphoneFirstSlideShow) : ?>
                                            <input type="hidden" name="viewProductID">
                                            <div class="col-3 smartphoneslide1">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col imgProduct">
                                                            <a href="?action=product_detail&productName=<?php echo $getSmartphoneFirstSlideShow['productName']; ?>&categoryID=<?php echo $getSmartphoneFirstSlideShow['categoryID']; ?>">
                                                                <img class="card-img-top" 
                                                                    src="<?php echo '../images/productimage/' . $getSmartphoneFirstSlideShow['productName'] . '.jpg'; ?>"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                   <div class="row">
                                                       <div class="col text-center productName">
                                                            <a href="#" class="productname">
                                                                <h6 class="card-title">
                                                                    <?php echo $getSmartphoneFirstSlideShow['productName']; ?>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col productPrice text-center">
                                                            <p class="card-text price"><span>Giá :</span>
                                                                <?php echo number_format($getSmartphoneFirstSlideShow['price'], 0, ',', '.'); ?>đ
                                                            </p>
                                                            <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                                <?php echo number_format($getSmartphoneFirstSlideShow['finalPrice'], 0, ',', '.'); ?>đ
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="danhgia">
                                                                <div class="rate">
                                                                    <?php
                                                                            if (isset($getSmartphoneFirstSlideShow['productName'])) {
                                                                                $rateProducts = $productDB->getRateStarProduct($getSmartphoneFirstSlideShow['productName']);
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
                                                                -<?php echo $getSmartphoneFirstSlideShow['discount']; ?>%
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col quantity">
                                                            <p>Số lượng còn lại:
                                                                <span style="color: red;font-style: italic;">
                                                                    <?php if($getSmartphoneFirstSlideShow['quantity'] == 0){
                                                                                    echo "Hết hàng";
                                                                                  }else {
                                                                                    echo $getSmartphoneFirstSlideShow['quantity'];
                                                                                  }
                                                                            ?>

                                                                </span></p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col">
                                                                <ul class="list-group">
                                                                    <li>Ram & ROM:
                                                                        <?php echo $getSmartphoneFirstSlideShow['ramSmartphone']; ?> ,
                                                                        <?php echo $getSmartphoneFirstSlideShow['internalMemorySmartphone']; ?>
                                                                    </li>
                                                                    <li>Pin & Sạc:
                                                                        <?php echo $getSmartphoneFirstSlideShow['sizeBatterySmartphone']; ?>
                                                                        ,
                                                                        <?php echo $getSmartphoneFirstSlideShow['chargerSmartphone']; ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="addCart text-center mt-2">
                                                                    <?php if($getSmartphoneFirstSlideShow['quantity'] == 0) : ?>
                                                                    <button class='btn disableButton' disabled><img class='img-fluid'
                                                                            src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                        hàng</button>
                                                                    <?php else: ?>
                                                                    <a class='btn'
                                                                        href="?action=addCart&productName=<?php echo $getSmartphoneFirstSlideShow['productName']; ?>"><img
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
                                        <div class="row smartphoneslide12 ">
                                            <?php foreach ($getSmartphonesSecondSlideShow as $getSmartphoneSecondSlideShow) : ?>
                                            <input type="hidden" name="viewProductID">
                                            <div class="col-3 smartphoneslide1">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col imgProduct">
                                                            <a href="?action=product_detail&productName=<?php echo $getSmartphoneSecondSlideShow['productName']; ?>&categoryID=<?php echo $getSmartphoneSecondSlideShow['categoryID']; ?>">
                                                                <img class="card-img-top" 
                                                                    src="<?php echo '../images/productimage/' . $getSmartphoneSecondSlideShow['productName'] . '.jpg'; ?>"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                   <div class="row">
                                                       <div class="col text-center productName">
                                                            <a href="#" class="productname">
                                                                <h6 class="card-title">
                                                                    <?php echo $getSmartphoneSecondSlideShow['productName']; ?>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col productPrice text-center">
                                                            <p class="card-text price"><span>Giá :</span>
                                                                <?php echo number_format($getSmartphoneSecondSlideShow['price'], 0, ',', '.'); ?>đ
                                                            </p>
                                                            <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                                <?php echo number_format($getSmartphoneSecondSlideShow['finalPrice'], 0, ',', '.'); ?>đ
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="danhgia">
                                                                <div class="rate">
                                                                    <?php
                                                                            if (isset($getSmartphoneSecondSlideShow['productName'])) {
                                                                                $rateProducts = $productDB->getRateStarProduct($getSmartphoneSecondSlideShow['productName']);
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
                                                                -<?php echo $getSmartphoneSecondSlideShow['discount']; ?>%
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col quantity">
                                                            <p>Số lượng còn lại:
                                                                <span style="color: red;font-style: italic;">
                                                                    <?php if($getSmartphoneSecondSlideShow['quantity'] == 0){
                                                                                    echo "Hết hàng";
                                                                                  }else {
                                                                                    echo $getSmartphoneSecondSlideShow['quantity'];
                                                                                  }
                                                                            ?>

                                                                </span></p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col">
                                                                <ul class="list-group">
                                                                    <li>Ram & ROM:
                                                                        <?php echo $getSmartphoneSecondSlideShow['ramSmartphone']; ?> ,
                                                                        <?php echo $getSmartphoneSecondSlideShow['internalMemorySmartphone']; ?>
                                                                    </li>
                                                                    <li>Pin & Sạc:
                                                                        <?php echo $getSmartphoneSecondSlideShow['sizeBatterySmartphone']; ?>
                                                                        ,
                                                                        <?php echo $getSmartphoneSecondSlideShow['chargerSmartphone']; ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="addCart text-center mt-2">
                                                                    <?php if($getSmartphoneSecondSlideShow['quantity'] == 0) : ?>
                                                                    <button class='btn disableButton' disabled><img class='img-fluid'
                                                                            src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                        hàng</button>
                                                                    <?php else: ?>
                                                                    <a class='btn'
                                                                        href="?action=addCart&productName=<?php echo $getSmartphoneSecondSlideShow['productName']; ?>"><img
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
                                <a class="carousel-control-prev" href="#smartphoneslide" data-slide="prev"
                                    role="button">
                                    <span class="carousel-control icon" aria-hidden="true"><i
                                            class="fas fa-arrow-circle-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#smartphoneslide" data-slide="next"
                                    role="button">
                                    <span class="carousel-control icon" aria-hidden="true"><i
                                            class="fas fa-arrow-circle-right"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tablet" role="tabpanel" aria-labelledby="tablet-tab">
                            <div class="allview">
                                <a href="?action=productsByCategory&categoryID=3">Xem tất cả</a>
                            </div>
                            <div id="tabletslide" class="carousel slide mt-2 mb-5" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row tabletslide12 ">
                                            <?php foreach ($getTabletsFirstSlideShow as $getTabletFirstSlideShow) : ?>
                                            <input type="hidden" name="viewProductID">
                                            <div class="col-3 tabletslide1">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col imgProduct">
                                                            <a href="?action=product_detail&productName=<?php echo $getTabletFirstSlideShow['productName']; ?>&categoryID=<?php echo $getTabletFirstSlideShow['categoryID']; ?>">
                                                                <img class="card-img-top" 
                                                                    src="<?php echo '../images/productimage/' . $getTabletFirstSlideShow['productName'] . '.jpg'; ?>"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                   <div class="row">
                                                       <div class="col text-center productName">
                                                            <a href="#" class="productname">
                                                                <h6 class="card-title">
                                                                    <?php echo $getTabletFirstSlideShow['productName']; ?>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col productPrice text-center">
                                                            <p class="card-text price"><span>Giá :</span>
                                                                <?php echo number_format($getTabletFirstSlideShow['price'], 0, ',', '.'); ?>đ
                                                            </p>
                                                            <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                                <?php echo number_format($getTabletFirstSlideShow['finalPrice'], 0, ',', '.'); ?>đ
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="danhgia">
                                                                <div class="rate">
                                                                    <?php
                                                                            if (isset($getTabletFirstSlideShow['productName'])) {
                                                                                $rateProducts = $productDB->getRateStarProduct($getTabletFirstSlideShow['productName']);
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
                                                                -<?php echo $getTabletFirstSlideShow['discount']; ?>%
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col quantity">
                                                            <p>Số lượng còn lại:
                                                                <span style="color: red;font-style: italic;">
                                                                    <?php if($getTabletFirstSlideShow['quantity'] == 0){
                                                                                    echo "Hết hàng";
                                                                                  }else {
                                                                                    echo $getTabletFirstSlideShow['quantity'];
                                                                                  }
                                                                            ?>

                                                                </span></p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col">
                                                                <ul class="list-group">
                                                                    <li>Ram & ROM:
                                                                        <?php echo $getTabletFirstSlideShow['ramTablet']; ?> ,
                                                                        <?php echo $getTabletFirstSlideShow['internalMemoryTablet']; ?>
                                                                    </li>
                                                                    <li>Pin & Sạc:
                                                                        <?php echo $getTabletFirstSlideShow['pinTablet']; ?> ,
                                                                        <?php echo $getTabletFirstSlideShow['chargerTablet']; ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="addCart text-center mt-2">
                                                                    <?php if($getTabletFirstSlideShow['quantity'] == 0) : ?>
                                                                    <button class='btn disableButton' disabled><img class='img-fluid'
                                                                            src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                        hàng</button>
                                                                    <?php else: ?>
                                                                    <a class='btn'
                                                                        href="?action=addCart&productName=<?php echo $getTabletFirstSlideShow['productName']; ?>"><img
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
                                        <div class="row tabletslide12 ">
                                            <?php foreach ($getTabletsSecondSlideShow as $getTabletSecondSlideShow) : ?>
                                            <input type="hidden" name="viewProductID">
                                            <div class="col-3 tabletslide1">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col imgProduct">
                                                            <a href="?action=product_detail&productName=<?php echo $getTabletSecondSlideShow['productName']; ?>&categoryID=<?php echo $getTabletSecondSlideShow['categoryID']; ?>">
                                                                <img class="card-img-top" 
                                                                    src="<?php echo '../images/productimage/' . $getTabletSecondSlideShow['productName'] . '.jpg'; ?>"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                   <div class="row">
                                                       <div class="col text-center productName">
                                                            <a href="#" class="productname">
                                                                <h6 class="card-title">
                                                                    <?php echo $getTabletSecondSlideShow['productName']; ?>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col productPrice text-center">
                                                            <p class="card-text price"><span>Giá :</span>
                                                                <?php echo number_format($getTabletSecondSlideShow['price'], 0, ',', '.'); ?>đ
                                                            </p>
                                                            <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                                <?php echo number_format($getTabletSecondSlideShow['finalPrice'], 0, ',', '.'); ?>đ
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="danhgia">
                                                                <div class="rate">
                                                                    <?php
                                                                            if (isset($getTabletSecondSlideShow['productName'])) {
                                                                                $rateProducts = $productDB->getRateStarProduct($getTabletSecondSlideShow['productName']);
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
                                                                -<?php echo $getTabletSecondSlideShow['discount']; ?>%
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col quantity">
                                                            <p>Số lượng còn lại:
                                                                <span style="color: red;font-style: italic;">
                                                                    <?php if($getTabletSecondSlideShow['quantity'] == 0){
                                                                                    echo "Hết hàng";
                                                                                  }else {
                                                                                    echo $getTabletSecondSlideShow['quantity'];
                                                                                  }
                                                                            ?>

                                                                </span></p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col">
                                                                <ul class="list-group">
                                                                    <li>Ram & ROM:
                                                                        <?php echo $getTabletSecondSlideShow['ramTablet']; ?> ,
                                                                        <?php echo $getTabletSecondSlideShow['internalMemoryTablet']; ?>
                                                                    </li>
                                                                    <li>Pin & Sạc:
                                                                        <?php echo $getTabletSecondSlideShow['pinTablet']; ?> ,
                                                                        <?php echo $getTabletSecondSlideShow['chargerTablet']; ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="addCart text-center mt-2">
                                                                    <?php if($getTabletSecondSlideShow['quantity'] == 0) : ?>
                                                                    <button class='btn disableButton' disabled><img class='img-fluid'
                                                                            src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                        hàng</button>
                                                                    <?php else: ?>
                                                                    <a class='btn'
                                                                        href="?action=addCart&productName=<?php echo $getTabletSecondSlideShow['productName']; ?>"><img
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
                                <a class="carousel-control-prev" href="#tabletslide" data-slide="prev" role="button">
                                    <span class="carousel-control icon" aria-hidden="true"><i
                                            class="fas fa-arrow-circle-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#tabletslide" data-slide="next" role="button">
                                    <span class="carousel-control icon" aria-hidden="true"><i
                                            class="fas fa-arrow-circle-right"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="watch-tab">
                            <div class="allview">
                                <a href="?action=productsByCategory&categoryID=5">Xem tất cả</a>
                            </div>
                            <div id="watchtslide" class="carousel slide mt-2 mb-5" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row watchslide12 ">
                                            <?php foreach ($getWatchesFirstSlideShow as $getWatchFirstSlideShow) : ?>
                                            <input type="hidden" name="viewProductID">
                                            <div class="col-3 watchslide1">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col imgProduct">
                                                            <a href="?action=product_detail&productName=<?php echo $getWatchFirstSlideShow['productName']; ?>&categoryID=<?php echo $getWatchFirstSlideShow['categoryID']; ?>">
                                                                <img class="card-img-top" 
                                                                    src="<?php echo '../images/productimage/' . $getWatchFirstSlideShow['productName'] . '.jpg'; ?>"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                   <div class="row">
                                                       <div class="col text-center productName">
                                                            <a href="#" class="productname">
                                                                <h6 class="card-title">
                                                                    <?php echo $getWatchFirstSlideShow['productName']; ?>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col productPrice text-center">
                                                            <p class="card-text price"><span>Giá :</span>
                                                                <?php echo number_format($getWatchFirstSlideShow['price'], 0, ',', '.'); ?>đ
                                                            </p>
                                                            <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                                <?php echo number_format($getWatchFirstSlideShow['finalPrice'], 0, ',', '.'); ?>đ
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="danhgia">
                                                                <div class="rate">
                                                                    <?php
                                                                            if (isset($getWatchFirstSlideShow['productName'])) {
                                                                                $rateProducts = $productDB->getRateStarProduct($getWatchFirstSlideShow['productName']);
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
                                                                -<?php echo $getWatchFirstSlideShow['discount']; ?>%
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col quantity">
                                                            <p>Số lượng còn lại:
                                                                <span style="color: red;font-style: italic;">
                                                                    <?php if($getWatchFirstSlideShow['quantity'] == 0){
                                                                                    echo "Hết hàng";
                                                                                  }else {
                                                                                    echo $getWatchFirstSlideShow['quantity'];
                                                                                  }
                                                                            ?>

                                                                </span></p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col">
                                                                <ul class="list-group">
                                                                    <li>Màn hình:
                                                                        <?php echo $getWatchFirstSlideShow['screenWatch']; ?> ,
                                                                        <?php echo $getWatchFirstSlideShow['sizeScreenWatch']; ?>
                                                                    </li>
                                                                    <li>Sử dụng:
                                                                        <?php echo $getWatchFirstSlideShow['batteryLifeWatch']; ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="addCart text-center mt-2">
                                                                    <?php if($getWatchFirstSlideShow['quantity'] == 0) : ?>
                                                                    <button class='btn disableButton' disabled><img class='img-fluid'
                                                                            src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                        hàng</button>
                                                                    <?php else: ?>
                                                                    <a class='btn'
                                                                        href="?action=addCart&productName=<?php echo $getWatchFirstSlideShow['productName']; ?>"><img
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
                                        <div class="row watchslide12 ">
                                            <?php foreach ($getWatchesSecondSlideShow as $getWatchSecondSlideShow) : ?>
                                            <input type="hidden" name="viewProductID">
                                            <div class="col-3 watchslide1">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col imgProduct">
                                                            <a href="?action=product_detail&productName=<?php echo $getWatchSecondSlideShow['productName']; ?>&categoryID=<?php echo $getWatchSecondSlideShow['categoryID']; ?>">
                                                                <img class="card-img-top" 
                                                                    src="<?php echo '../images/productimage/' . $getWatchSecondSlideShow['productName'] . '.jpg'; ?>"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                   <div class="row">
                                                       <div class="col text-center productName">
                                                            <a href="#" class="productname">
                                                                <h6 class="card-title">
                                                                    <?php echo $getWatchSecondSlideShow['productName']; ?>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col productPrice text-center">
                                                            <p class="card-text price"><span>Giá :</span>
                                                                <?php echo number_format($getWatchSecondSlideShow['price'], 0, ',', '.'); ?>đ
                                                            </p>
                                                            <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                                <?php echo number_format($getWatchSecondSlideShow['finalPrice'], 0, ',', '.'); ?>đ
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="danhgia">
                                                                <div class="rate">
                                                                    <?php
                                                                            if (isset($getWatchSecondSlideShow['productName'])) {
                                                                                $rateProducts = $productDB->getRateStarProduct($getWatchSecondSlideShow['productName']);
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
                                                                -<?php echo $getWatchSecondSlideShow['discount']; ?>%
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col quantity">
                                                            <p>Số lượng còn lại:
                                                                <span style="color: red;font-style: italic;">
                                                                    <?php if($getWatchSecondSlideShow['quantity'] == 0){
                                                                                    echo "Hết hàng";
                                                                                  }else {
                                                                                    echo $getWatchSecondSlideShow['quantity'];
                                                                                  }
                                                                            ?>

                                                                </span></p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col">
                                                                <ul class="list-group">
                                                                    <li>Màn hình:
                                                                        <?php echo $getWatchSecondSlideShow['screenWatch']; ?> ,
                                                                        <?php echo $getWatchSecondSlideShow['sizeScreenWatch']; ?>
                                                                    </li>
                                                                    <li>Sử dụng:
                                                                        <?php echo $getWatchSecondSlideShow['batteryLifeWatch']; ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="addCart text-center mt-2">
                                                                    <?php if($getWatchSecondSlideShow['quantity'] == 0) : ?>
                                                                    <button class='btn disableButton' disabled><img class='img-fluid'
                                                                            src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                                        hàng</button>
                                                                    <?php else: ?>
                                                                    <a class='btn'
                                                                        href="?action=addCart&productName=<?php echo $getWatchSecondSlideShow['productName']; ?>"><img
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
                                <a class="carousel-control-prev" href="#watchtslide" data-slide="prev" role="button">
                                    <span class="carousel-control icon" aria-hidden="true"><i
                                            class="fas fa-arrow-circle-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#watchtslide" data-slide="next" role="button">
                                    <span class="carousel-control icon" aria-hidden="true"><i
                                            class="fas fa-arrow-circle-right"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hộp thoại đăng ký thành viên -->
    <div class="container-fluid htdktv mt-4">
        <?php if (isset($member)) : ?>
        <div class="row">
            <div class="col member mt-3">
                <h4 class="text-center" style="color: white;">💕 Chào mừng thành viên
                    <b style="color: red;font-style: italic;"><?php echo $member->getEmailMember(); ?></b>
                    đã quay lại với website T&TTechnology của chúng tôi 💕</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-center"><a href="#" style="color: white;">Xem ưu đãi của bạn</a></p>
            </div>
        </div>
        <?php else : ?>
        <div class="row">
            <div class="col nameht">
                <h5 class="text-center mt-5"><i class="fas fa-users"></i> Đăng ký thành viên để nhận được nhiều ưu đãi
                    hấp dẫn đến từ T&TTechnology</h5>
            </div>
        </div>
        <div class="row text-center">
            <div class="col buttontht">
                <a class="btn" href="#">Tìm hiểu thêm <i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col dangkytv">
                <form action="" class="form-inline mt-2 mb-2 " method="post">
                    <input type="hidden" name="memberID">
                    <input type="email" name="emailMember" id="emailMember" class="form-control mr-sm-2"
                        style="width: 50%;" placeholder="Nhập Email mà bạn muốn đăng ký thành viên tại đây !!!">
                    <button class="btn btn-outline-success my-2 my-sm-0" name="addMember" type="submit">Đăng ký</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <p style="color: red;font-style: italic;font-weight: bolder;">
                        <?php
                            if (isset($messageMember)) {
                                echo $messageMember;
                            }
                            ?>
                    </p>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/footer.php"; ?>