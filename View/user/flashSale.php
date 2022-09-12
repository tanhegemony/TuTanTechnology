<!doctype html>
<html lang="en">

<head>
    <title>Flash Sale</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../images/fontawesome-free-5.15.4-web/css/all.min.css" />
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/user/flashSale.css"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/flashSaleResponsive.css"; ?>
        
    </style>
</head>

<body>
    <div class="container">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/header.php"; ?>
    </div>
    <hr style="background-color: #223464;height: 1rem;margin-top: -1rem; border: 1px solid #223464;">
    <hr style="background-color: #ad0000;height: 1rem;margin-top: -1rem;">
    <div class="container-fluid" style="background-color: #ad0000;margin-top: -1rem;">
        <div class="row">
            <div class="col text-center">
                <img class="img-fluid " src="../images/flashsale.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="sub-cat">
                    <p id="demo"></p>
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
        <div class="row justify-content-center">
            <div class="col-2 fl">
                <div class="card">
                    <a href="#"><img class="card-img-top img-fluid" src="../images/flashsale/box1.png" alt=""></a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Apple</h5>
                        <p class="card-text">Lì xì đến <span>3.5 triệu</span></p>
                    </div>
                </div>
            </div>
            <div class="col-2 fl">
                <div class="card">
                    <a href="#"><img class="card-img-top img-fluid" src="../images/flashsale/box2.png" alt=""></a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Điện thoại</h5>
                        <p class="card-text">Lì xì đến <span>9 triệu</span></p>
                    </div>
                </div>
            </div>
            <div class="col-2 fl">
                <div class="card">
                    <a href="#"><img class="card-img-top img-fluid" src="../images/flashsale/box3.png" alt=""></a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text">Lì xì đến <span>4 triệu</span></p>
                    </div>
                </div>
            </div>
            <div class="col-2 fl">
                <div class="card">
                    <a href="#"><img class="card-img-top img-fluid" src="../images/flashsale/box4.png" alt=""></a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Gia dụng</h5>
                        <p class="card-text">Lì xì đến <span>7 triệu</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-9 imgFL">
                <img class="img-fluid" src="../images/flashsale/slideshow1.jpg" alt="">
            </div>
            <div class="col-3 mt-4 sort">
                <div class="form-inline float-right">
                    <label for="">Sắp xếp: </label>
                    <select class="form-control ml-2" name="" id="">
                        <option>Bán chạy nhất</option>
                        <option>Trả góp 0%</option>
                        <option>Giá từ thấp đến cao</option>
                        <option>Giá từ cao đến thấp</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row flashsale12 mt-5">
            <?php foreach ($getProductsFlashSalePagination as $getProductFlashSalePagination) : ?>
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
                            <a href="?action=product_detail&productName=<?php echo $getProductFlashSalePagination['productName']; ?>&categoryID=<?php echo $getProductFlashSalePagination['categoryID']; ?>">
                                <img class="card-img-top" 
                                    src="<?php echo '../images/productimage/' . $getProductFlashSalePagination['productName'] . '.jpg'; ?>"
                                    alt="">
                            </a>
                        </div>
                    </div>
                   <div class="row">
                       <div class="col text-center productName">
                            <a href="#" class="productname">
                                <h6 class="card-title">
                                    <?php echo $getProductFlashSalePagination['productName']; ?>
                                </h6>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col productPrice text-center">
                            <p class="card-text price"><span>Giá :</span>
                                <?php echo number_format($getProductFlashSalePagination['price'], 0, ',', '.'); ?>đ
                            </p>
                            <p class="text-center finalprice"><span>Sale còn :</span>
                                <?php echo number_format($getProductFlashSalePagination['finalPriceSale'], 0, ',', '.'); ?>đ
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="danhgia">
                                <div class="rate">
                                    <?php
                                            if (isset($getProductFlashSalePagination['productName'])) {
                                                $rateProducts = $productDB->getRateStarProduct($getProductFlashSalePagination['productName']);
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
                                -<?php echo $getProductFlashSalePagination['discountSale']; ?>%
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col quantity">
                            <p>Số lượng còn lại:
                                <span style="color: red;font-style: italic;">
                                    <?php if($getProductFlashSalePagination['quantity'] == 0){
                                                    echo "Hết hàng";
                                                  }else {
                                                    echo $getProductFlashSalePagination['quantity'];
                                                  }
                                            ?>

                                </span></p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <ul class="list-group">
                                    <?php if ($getProductFlashSalePagination['categoryID'] == "01") : ?>
                                    <li>Ram & ROM:
                                        <?php echo $getProductFlashSalePagination['ramSmartphone']; ?> ,
                                        <?php echo $getProductFlashSalePagination['internalMemorySmartphone']; ?>
                                    </li>
                                    <li>Pin & Sạc:
                                        <?php echo $getProductFlashSalePagination['sizeBatterySmartphone']; ?>
                                        ,
                                        <?php echo $getProductFlashSalePagination['chargerSmartphone']; ?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if ($getProductFlashSalePagination['categoryID'] == "02") : ?>
                                    <li>Ram & Ổ cứng:
                                        <?php echo $getProductFlashSalePagination['ramLaptop']; ?> ,
                                        <?php echo $getProductFlashSalePagination['hardDriverLaptop']; ?>
                                    </li>
                                    <li>CPU: <?php echo $getProductFlashSalePagination['cpuLaptop']; ?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if ($getProductFlashSalePagination['categoryID'] == "03") : ?>
                                    <li>Ram & ROM:
                                        <?php echo $getProductFlashSalePagination['ramTablet']; ?> ,
                                        <?php echo $getProductFlashSalePagination['internalMemoryTablet']; ?>
                                    </li>
                                    <li>Pin & Sạc:
                                        <?php echo $getProductFlashSalePagination['pinTablet']; ?> ,
                                        <?php echo $getProductFlashSalePagination['chargerTablet']; ?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if ($getProductFlashSalePagination['categoryID'] == "04") : ?>
                                    <li>Ram & Ổ cứng:
                                        <?php echo $getProductFlashSalePagination['ramPC']; ?> ,
                                        <?php echo $getProductFlashSalePagination['hardDriverPC']; ?>
                                    </li>
                                    <li>CPU: <?php echo $getProductFlashSalePagination['cpuPC']; ?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if ($getProductFlashSalePagination['categoryID'] == "05") : ?>
                                    <li>Màn hình:
                                        <?php echo $getProductFlashSalePagination['screenWatch']; ?> ,
                                        <?php echo $getProductFlashSalePagination['sizeScreenWatch']; ?>
                                    </li>
                                    <li>Sử dụng:
                                        <?php echo $getProductFlashSalePagination['batteryLifeWatch']; ?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if ($getProductFlashSalePagination['categoryID'] == "06") : ?>
                                    <li>Hãng:
                                        <?php echo $getProductFlashSalePagination['brandAccessory']; ?>
                                    </li>
                                    <li>Loại phụ kiện:
                                        <?php echo $getProductFlashSalePagination['typeAccessory']; ?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if ($getProductFlashSalePagination['categoryID'] == "07") : ?>
                                    <li>Hãng:
                                        <?php echo $getProductFlashSalePagination['brandTelevision']; ?>
                                    </li>
                                    <li>Màn hình:
                                        <?php echo $getProductFlashSalePagination['sizeScreenTelevision']; ?>
                                        ,
                                        <?php echo $getProductFlashSalePagination['resolutionTelevision']; ?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if ($getProductFlashSalePagination['categoryID'] == "08") : ?>
                                    <li>Hãng:
                                        <?php echo $getProductFlashSalePagination['brandRefrigerator']; ?>
                                    </li>
                                    <li>Dung tích sử dụng:
                                        <?php echo $getProductFlashSalePagination['useCapacityRefrigerator']; ?>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="addCart text-center mt-2">
                                    <?php if($timeOut > $now) : ?>
                                    <?php if($getProductFlashSalePagination['quantity'] == 0) : ?>
                                    <button class='btn disableButton' disabled><img class='img-fluid'
                                            src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                        hàng</button>
                                    <?php else: ?>
                                    <a class='btn'
                                        href="?action=addCart&productName=<?php echo $getProductFlashSalePagination['productName']; ?>"><img
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
        <!-- phân trang -->
        <div class="row mt-2">
            <div class="col">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php if($currentPage == 1) : ?>
                        <li class="page-item ">
                            <a class="page-link" disabled>Đầu</a>
                        </li>
                        <?php else: ?>
                        <li class="page-item">
                            <a class="page-link" href="?action=Show_Flash_Sale&page=<?php echo $firstPage; ?>">Đầu</a>
                        </li>

                        <?php endif; ?>
                        <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                        <?php if ($currentPage != $i) : ?>
                        <li class="page-item">
                            <a class="page-link" href="?action=Show_Flash_Sale&page=<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </a>
                        </li>
                        <?php else : ?>
                        <li class="page-item active">
                            <a class="page-link" style="background-color: #223464;" disabled>
                                <?php echo $i; ?>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($currentPage == $totalPage) : ?>
                        <li class="page-item ">
                            <a class="page-link" disabled>Cuối</a>
                        </li>
                        <?php else: ?>
                        <li class="page-item">
                            <a class="page-link" href="?action=Show_Flash_Sale&page=<?php echo $endPage; ?>">Cuối</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <hr style="border: 5px solid #223464;">
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/footer.php"; ?>