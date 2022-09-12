<!doctype html>
<html lang="en">

<head>
    <title>Chi tiết sản phẩm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../images/fontawesome-free-5.15.4-web/css/all.min.css" />
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/user/productDetail.css"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/productDetailResponsive.css"; ?>
        
    </style>
</head>

<body>
    <div class="container">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/header.php"; ?>
        <!-- đường dẫn -->
        <form action="" method="post">
            <input type="hidden" value="<?php echo $_GET['productName']; ?>">
            <div class="row mt-2">
                <div class="col duongdan">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?action=home_page">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm :
                                <?php echo $productView->getProductName(); ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <!-- Nội dung sản phẩm -->
                <div class="col-9 ndsp">
                    <div class="row">
                        <div class="col-6 slidectsp">
                            <div id="ctsp" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#ctsp" data-slide-to="0" aria-current="location">
                                    </li>
                                    <li data-target="#ctsp" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner text-center">
                                    <div class="carousel-item active">
                                        <img class="img-fluid"
                                            src="<?php echo '../images/productimage/' . $productView->getProductName() . '.jpg'; ?>"
                                            alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid"
                                            src="<?php echo '../images/productimage/' . $productView->getProductName() . '.jpg'; ?>"
                                            alt="">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#ctsp" data-slide="prev" role="button">
                                    <span class="carousel-control" aria-hidden="true"><i
                                            class="fas fa-chevron-circle-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#ctsp" data-slide="next" role="button">
                                    <span class="carousel-control" aria-hidden="true"><i
                                            class="fas fa-chevron-circle-right"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 ctsp">
                            <div class="row productname">
                                <div class="col">
                                    <h1><?php echo $productView->getProductName(); ?></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <?php if($timeOut > $now) : ?>
                                    <?php if(empty($getProductInFlashSale)) : ?>
                                    <p>Giá: <?php echo number_format($productView->getFinalPrice(), 0, ',', '.'); ?>đ
                                        <span
                                            class="productprice"><?php echo number_format($productView->getPrice(), 0, ',', '.'); ?>đ</span>
                                        <span class="giamgia">-<?php echo $productView->getDiscount(); ?>%</span>
                                    </p>
                                    <?php else: ?>
                                    <p>Sale:
                                        <?php echo number_format($getProductInFlashSale['finalPriceSale'], 0, ',', '.'); ?>đ
                                        <span
                                            class="productprice"><?php echo number_format($productView->getPrice(), 0, ',', '.'); ?>đ</span>
                                        <span
                                            class="giamgia">-<?php echo $getProductInFlashSale['discountSale']; ?>%</span>
                                    </p>
                                    <?php endif; ?>
                                    <?php else: ?>
                                    <p>Giá: <?php echo number_format($productView->getFinalPrice(), 0, ',', '.'); ?>đ
                                        <span
                                            class="productprice"><?php echo number_format($productView->getPrice(), 0, ',', '.'); ?>đ</span>
                                        <span class="giamgia">-<?php echo $productView->getDiscount(); ?>%</span>
                                    </p>
                                    <?php endif; ?>


                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: 12px;font-weight: bolder;">Số lượng còn lại:
                                        <span style="color: red;font-style: italic;">
                                            <?php if($productView->getQuantity() == 0){
                                                                            echo "Hết hàng";
                                                                          }else {
                                                                            echo $productView->getQuantity();
                                                                          }
                                                                    ?>

                                        </span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="">Chọn số lượng: </label>
                                    <?php if($productView->getQuantity() == 0) : ?>
                                    <input type="number" name="quantity[<?php echo $productView->getProductName(); ?>]"
                                        id="quantity" min="1" max="<?php echo $productView->getQuantity(); ?>" value="1"
                                        readonly="true">
                                    <?php else: ?>
                                    <input type="number" name="quantity[<?php echo $productView->getProductName(); ?>]"
                                        id="quantity" min="1" max="<?php echo $productView->getQuantity(); ?>"
                                        value="1">
                                    <?php endif; ?>



                                </div>
                            </div>
                            <div class="row mt-2 buttonmuahang">
                                <div class="col">
                                    <?php if($productView->getQuantity() == 0) : ?>
                                    <button name="buyNow" class="btn btn-success" disabled="true"><img class="img-fluid"
                                            src="../images/buy.png" alt=""> Mua
                                        ngay</button>
                                    <button name="addToCart" class="btn btn-success" disabled="true"><img
                                            class="img-fluid" src="../images/menu/carts.png" alt=""> Thêm vào giỏ
                                        hàng</button>
                                    <?php else: ?>
                                    <button name="buyNow" class="btn btn-success"><img class="img-fluid"
                                            src="../images/buy.png" alt=""> Mua
                                        ngay</button>
                                    <button name="addToCart" class="btn btn-success"><img class="img-fluid"
                                            src="../images/menu/carts.png" alt=""> Thêm vào giỏ hàng</button>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <p><i class="fas fa-phone-volume"></i> Gọi đặt mua tại <a href="tel:0376160960"
                                            style="color: red;">0376160960</a> hoặc <a href="tel:0795768338"
                                            style="color: red;">0795768338</a></p>
                                    <p><img class="img-fluid" src="../images/working.png" alt=""> Làm việc từ 7h30 đến
                                        21h30
                                        các ngày từ Thứ Hai đến Chủ Nhật</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 thongtinkhac">
                    <p><img class="img-fluid" src="../images/charge.png" alt=""> Phí giao hàng: <span
                            style="font-weight: bolder;">26.000đ</span></p>
                    <p><i class="fas fa-map-marked-alt"></i> Giao hàng tới Phường Hương Văn, Huyện Hương Trà, Thừa Thiên
                        Huế
                        <a href="#" style="color: red;"><i class="fas fa-exchange-alt"></i> Đổi địa điểm giao hàng</a>
                    </p>
                    <h6>Chính sách bán hàng</h6>
                    <p><i class="fas fa-check-circle"></i> Cam kết hàng chính hãng 100%</p>
                    <p><i class="fas fa-shipping-fast"></i> Miễn phí giao hàng từ 1000k</p>
                    <p><img class="img-fluid" src="../images/exchange.png" alt=""> Đổi trả miễn phí trong 10 ngày</p>
                    <h6>Dịch vụ khác</h6>
                    <p><i class="fas fa-cog"></i> Sửa chữa đồng giá 150.000đ</p>
                    <p><img class="img-fluid" src="../images/shield.png" alt=""> Bảo hành tại nhà</p>
                </div>
            </div>
            <div class="row mt-5">
                <!-- Mô tả và đánh giá sản phẩm -->
                <div class="col-6 mtanddanhgia">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="mota-tab" data-toggle="tab" href="#mota" role="tab"
                                aria-controls="mota" aria-selected="true">Mô tả sản phẩm</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="danhgia-tab" data-toggle="tab" href="#danhgia" role="tab"
                                aria-controls="danhgia" aria-selected="false">Đánh giá sản phẩm <span
                                    class="badge badge-info"><?php echo $countRate; ?></span></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="mota" role="tabpanel" aria-labelledby="mota-tab">
                            <?php echo $productView->getDescription(); ?>
                        </div>
                        <div class="tab-pane fade" id="danhgia" role="tabpanel" aria-labelledby="danhgia-tab">
                            <?php foreach ($rates as $rate) : ?>
                            <div class="row">
                                <div class="col-9 contentRate">
                                    <img src="../images/userdanhgia/1.jpg" class="rounded mr-2 img-fluid" width="5%"
                                    alt="...">
                                    <strong class="mr-auto" style="width: 100%;">
                                        <?php echo $rate['email']; ?>
                                    </strong>
                                    <strong class="rateOrComment">
                                        <div class="rate1">
                                            <?php for ($i = 0; $i< $rate['rateStarNumber']; $i++) : ?>
                                            <label for="star<?php echo $i; ?>">
                                                <?php echo $i; ?>star
                                            </label>
                                            <?php endfor; ?>
                                        </div>
                                    </strong>
                                     <?php echo $rate['content']; ?>
                                </div>
                                <div class="col-3 timeRate">
                                     <small><?php echo $rate['timeRate']; ?></small>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <div class="row dangbaidanhgia">
                                <div class="col">
                                    <input type="hidden" name="rateID">
                                    <label for="">Viết bài đánh giá của bạn : </label>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rateStarNumber" value="5" />
                                        <label for="star5" title="Tuyệt vời">5 stars</label>
                                        <input type="radio" id="star4" name="rateStarNumber" value="4" />
                                        <label for="star4" title="Tốt">4 stars</label>
                                        <input type="radio" id="star3" name="rateStarNumber" value="3" />
                                        <label for="star3" title="Tạm được">3 stars</label>
                                        <input type="radio" id="star2" name="rateStarNumber" value="2" />
                                        <label for="star2" title="Tệ">2 stars</label>
                                        <input type="radio" id="star1" name="rateStarNumber" value="1" />
                                        <label for="star1" title="Quá tệ">1 star</label>
                                    </div>
                                    <textarea name="content" id="content" cols="70"></textarea>
                                    <button name="rateButton" class="btn btn-info">Đăng bài</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cấu hình điện thoại -->
                <div class="col-6 ch">
                    <div class="row cauhinh">
                        <div class="col">
                            <p>Cấu hình <?php echo $productView->getProductName(); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table table-active">
                                <tbody>
                                    <?php if ($productView->getCategoryID() == "01") : ?>
                                    <tr>
                                        <th>Hãng: </th>
                                        <td><?php echo $productView->getBrandSmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Loại điện thoại :</th>
                                        <td><?php echo $productView->getTypeSmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Màu sắc điện thoại :</th>
                                        <td><?php echo $productView->getColorSmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình :</th>
                                        <td><?php echo $productView->getScreenTechnologySmartphone(); ?>,
                                            <?php echo $productView->getSizeScreenSmartphone(); ?>,
                                            <?php echo $productView->getDesignSmartphone(); ?>,
                                            <?php echo $productView->getScreenSmartphone(); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Hệ điều hành :</th>
                                        <td><?php echo $productView->getOperatingSystemSmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Chức năng Camera :</th>
                                        <td><?php echo $productView->getCameraSmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Camera sau :</th>
                                        <td><?php echo $productView->getRearCameraSmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Camera trước :</th>
                                        <td><?php echo $productView->getFrontCameraSmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Chip & Cấu hình điện thoại:</th>
                                        <td>
                                            <?php echo $productView->getChipSmartphone(); ?> ,
                                            <?php echo $productView->getConfigurationSmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>RAM :</th>
                                        <td><?php echo $productView->getRamSmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Bộ nhớ trong :</th>
                                        <td><?php echo $productView->getInternalMemorySmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>SIM :</th>
                                        <td><?php echo $productView->getSimSmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>PIN & Sạc :</th>
                                        <td><?php echo $productView->getSizeBatterySmartphone(); ?> ,
                                            <?php echo $productView->getChargerSmartphone(); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Công nghệ PIN :</th>
                                        <td><?php echo $productView->getBatteryTechnologySmartphone(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Chức năng :</th>
                                        <td><?php echo $productView->getFunctionSmartphone(); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if ($productView->getCategoryID() == "02") : ?>
                                    <tr>
                                        <th>Hãng: </th>
                                        <td><?php echo $productView->getBrandLaptop(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Loại Laptop: </th>
                                        <td><?php echo $productView->getUsageNeedLaptop(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>CPU: </th>
                                        <td><?php echo $productView->getCpuLaptop(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>RAM :</th>
                                        <td><?php echo $productView->getRamLaptop(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng :</th>
                                        <td><?php echo $productView->getHardDriverLaptop(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình :</th>
                                        <td><?php echo $productView->getSizeScreenLaptop(); ?>,
                                            <?php echo $productView->getScreenResolutionLaptop(); ?>,
                                            <?php echo $productView->getSweepFrequencyLaptop(); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Card đồ họa :</th>
                                        <td><?php echo $productView->getGraphicsCardLaptop(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Hệ điều hành :</th>
                                        <td><?php echo $productView->getOperatingSystemLaptop(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kích thước & Trọng lượng :</th>
                                        <td><?php echo $productView->getSizeLaptop(); ?> -
                                            <?php echo $productView->getWeightLaptop(); ?>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if ($productView->getCategoryID() == "03") : ?>
                                    <tr>
                                        <th>Hãng: </th>
                                        <td><?php echo $productView->getBrandTablet(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Hệ điều hành :</th>
                                        <td><?php echo $productView->getOperatingSystemTablet(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Chip: </th>
                                        <td><?php echo $productView->getChipTablet(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>RAM :</th>
                                        <td><?php echo $productView->getRamTablet(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Bộ nhớ trong :</th>
                                        <td><?php echo $productView->getInternalMemoryTablet(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình :</th>
                                        <td><?php echo $productView->getScreenTablet(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Camera trước :</th>
                                        <td><?php echo $productView->getRearCameraTablet(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Camera sau :</th>
                                        <td><?php echo $productView->getFrontCameraTablet(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>PIN & Sạc :</th>
                                        <td><?php echo $productView->getPinTablet(); ?>,
                                            <?php echo $productView->getChargerTablet(); ?>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if ($productView->getCategoryID() == "04") : ?>
                                    <tr>
                                        <th>Hãng: </th>
                                        <td><?php echo $productView->getBrandPC(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Loại PC :</th>
                                        <td><?php echo $productView->getUsageNeedPC(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>CPU :</th>
                                        <td><?php echo $productView->getCpuPC(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>RAM :</th>
                                        <td><?php echo $productView->getRamPC(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng :</th>
                                        <td><?php echo $productView->getHardDriverPC(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Card đồ họa :</th>
                                        <td><?php echo $productView->getGraphicsCardPC(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kích thước & Trọng lượng :</th>
                                        <td><?php echo $productView->getSizePC(); ?>,
                                            <?php echo $productView->getWeightPC(); ?>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if ($productView->getCategoryID() == "05") : ?>
                                    <tr>
                                        <th>Hãng: </th>
                                        <td><?php echo $productView->getBrandWatch(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Loại đồng hồ :</th>
                                        <td><?php echo $productView->getTypeWatch(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình :</th>
                                        <td><?php echo $productView->getScreenWatch(); ?>,
                                            <?php echo $productView->getSizeScreenWatch(); ?>,
                                            Mặt đồng hồ theo hình <?php echo $productView->getFaceShapeWatch(); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Chất liệu dây :</th>
                                        <td><?php echo $productView->getBandMaterialWatch(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Thời lượng PIN :</th>
                                        <td><?php echo $productView->getBatteryLifeWatch(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Dung lượng PIN :</th>
                                        <td><?php echo $productView->getSizeBatteryWatch(); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if ($productView->getCategoryID() == "06") : ?>
                                    <tr>
                                        <th>Hãng: </th>
                                        <td><?php echo $productView->getBrandAccessory(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Loại phụ kiện :</th>
                                        <td><?php echo $productView->getTypeAccessory(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Loại sản phẩm :</th>
                                        <td><?php echo $productView->getTypeProductOfAccessory(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Thích ứng :</th>
                                        <td><?php echo $productView->getCompatibleAccessory(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kích thước & Trọng lượng :</th>
                                        <td><?php echo $productView->getSizeAccessory(); ?> -
                                            Nặng <?php echo $productView->getWeightAccessory(); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if ($productView->getCategoryID() == "07") : ?>
                                    <tr>
                                        <th>Hãng: </th>
                                        <td><?php echo $productView->getBrandTelevision(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình :</th>
                                        <td><?php echo $productView->getSizeScreenTelevision(); ?>,
                                            <?php echo $productView->getResolutionTelevision(); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Loại TV :</th>
                                        <td><?php echo $productView->getTypeTelevision(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Hệ điều hành :</th>
                                        <td><?php echo $productView->getOperatingSystemTelevision(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kích thước :</th>
                                        <td><?php echo $productView->getSizeTelevision(); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if ($productView->getCategoryID() == "08") : ?>
                                    <tr>
                                        <th>Hãng: </th>
                                        <td><?php echo $productView->getBrandRefrigerator(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kiểu tủ :</th>
                                        <td><?php echo $productView->getTypeRefrigerator(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Dung tích sử dụng :</th>
                                        <td><?php echo $productView->getUseCapacityRefrigerator(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Dung tích ngăn đá :</th>
                                        <td><?php echo $productView->getFreezerCapacityRefrigerator(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Dung tích ngăn lạnh :</th>
                                        <td><?php echo $productView->getCoolCompartmentRefrigerator(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Công nghệ tiết kiện điện :</th>
                                        <td><?php echo $productView->getEnergySavingTechnologyRefrigerator(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Công suất tiêu thụ :</th>
                                        <td><?php echo $productView->getPowerConsumptionRefrigerator(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Công nghệ làm lạnh :</th>
                                        <td><?php echo $productView->getCoolTechnologyRefrigerator(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Công nghệ kháng khuẩn khử mùi :</th>
                                        <td><?php echo $productView->getAnti_odorTechnologyRefrigerator(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Công nghệ bảo quản thực phẩm :</th>
                                        <td><?php echo $productView->getFoodPreservationTechnologyRefrigerator(); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kích thước & Trọng lượng :</th>
                                        <td><?php echo $productView->getSizeRefrigerator(); ?> -
                                            <?php echo $productView->getMassRefrigerator(); ?>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- xem thêm điện thoại khác -->
        <div class="row">
            <div class="col">
                <div id='nz-div-2'>
                    <h3 class="tde">
                        <span>Xem thêm <?php echo $productView->getCategoryName(); ?> khác</span>
                    </h3>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="smartphoneother" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row smartphoneother12">
                                <?php foreach ($productOfCategoryOther1s as $productOfCategoryOther1) : ?>
                                <input type="hidden" name="viewProductID">
                                <div class="col-2 sanpham smartphoneother1">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col">
                                                <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col imgProduct">
                                                <a href="?action=product_detail&productName=<?php echo $productOfCategoryOther1['productName']; ?>&categoryID=<?php echo $productOfCategoryOther1['categoryID']; ?>">
                                                    <img class="card-img-top" 
                                                        src="<?php echo '../images/productimage/' . $productOfCategoryOther1['productName'] . '.jpg'; ?>"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col text-center productName">
                                                <a href="#" class="productname">
                                                    <h6 class="card-title">
                                                        <?php echo $productOfCategoryOther1['productName']; ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col productPrice text-center">
                                                <p class="card-text price"><span>Giá :</span>
                                                    <?php echo number_format($productOfCategoryOther1['price'], 0, ',', '.'); ?>đ
                                                </p>
                                                <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                    <?php echo number_format($productOfCategoryOther1['finalPrice'], 0, ',', '.'); ?>đ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="danhgia">
                                                    <div class="rate1">
                                                        <?php
                                                                if (isset($productOfCategoryOther1['productName'])) {
                                                                    $rateProducts = $productDB->getRateStarProduct($productOfCategoryOther1['productName']);
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
                                                    -<?php echo $productOfCategoryOther1['discount']; ?>%
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col quantity">
                                                <p>Số lượng còn lại:
                                                    <span style="color: red;font-style: italic;">
                                                        <?php if($productOfCategoryOther1['quantity'] == 0){
                                                                        echo "Hết hàng";
                                                                      }else {
                                                                        echo $productOfCategoryOther1['quantity'];
                                                                      }
                                                                ?>

                                                    </span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <ul class="list-group">
                                                        <?php if ($productOfCategoryOther1['categoryID'] == "01") : ?>
                                                        <li>Ram & ROM:
                                                            <?php echo $productOfCategoryOther1['ramSmartphone']; ?> ,
                                                            <?php echo $productOfCategoryOther1['internalMemorySmartphone']; ?>
                                                        </li>
                                                        <li>Pin & Sạc:
                                                            <?php echo $productOfCategoryOther1['sizeBatterySmartphone']; ?>
                                                            ,
                                                            <?php echo $productOfCategoryOther1['chargerSmartphone']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther1['categoryID'] == "02") : ?>
                                                        <li>Ram & Ổ cứng:
                                                            <?php echo $productOfCategoryOther1['ramLaptop']; ?> ,
                                                            <?php echo $productOfCategoryOther1['hardDriverLaptop']; ?>
                                                        </li>
                                                        <li>CPU: <?php echo $productOfCategoryOther1['cpuLaptop']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther1['categoryID'] == "03") : ?>
                                                        <li>Ram & ROM:
                                                            <?php echo $productOfCategoryOther1['ramTablet']; ?> ,
                                                            <?php echo $productOfCategoryOther1['internalMemoryTablet']; ?>
                                                        </li>
                                                        <li>Pin & Sạc:
                                                            <?php echo $productOfCategoryOther1['pinTablet']; ?> ,
                                                            <?php echo $productOfCategoryOther1['chargerTablet']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther1['categoryID'] == "04") : ?>
                                                        <li>Ram & Ổ cứng:
                                                            <?php echo $productOfCategoryOther1['ramPC']; ?> ,
                                                            <?php echo $productOfCategoryOther1['hardDriverPC']; ?>
                                                        </li>
                                                        <li>CPU: <?php echo $productOfCategoryOther1['cpuPC']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther1['categoryID'] == "05") : ?>
                                                        <li>Màn hình:
                                                            <?php echo $productOfCategoryOther1['screenWatch']; ?> ,
                                                            <?php echo $productOfCategoryOther1['sizeScreenWatch']; ?>
                                                        </li>
                                                        <li>Sử dụng:
                                                            <?php echo $productOfCategoryOther1['batteryLifeWatch']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther1['categoryID'] == "06") : ?>
                                                        <li>Hãng:
                                                            <?php echo $productOfCategoryOther1['brandAccessory']; ?>
                                                        </li>
                                                        <li>Loại phụ kiện:
                                                            <?php echo $productOfCategoryOther1['typeAccessory']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther1['categoryID'] == "07") : ?>
                                                        <li>Hãng:
                                                            <?php echo $productOfCategoryOther1['brandTelevision']; ?>
                                                        </li>
                                                        <li>Màn hình:
                                                            <?php echo $productOfCategoryOther1['sizeScreenTelevision']; ?>
                                                            ,
                                                            <?php echo $productOfCategoryOther1['resolutionTelevision']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther1['categoryID'] == "08") : ?>
                                                        <li>Hãng:
                                                            <?php echo $productOfCategoryOther1['brandRefrigerator']; ?>
                                                        </li>
                                                        <li>Dung tích sử dụng:
                                                            <?php echo $productOfCategoryOther1['useCapacityRefrigerator']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="addCart text-center mt-2">
                                                        <?php if($productOfCategoryOther1['quantity'] == 0) : ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
                                                        <?php else: ?>
                                                        <a class='btn'
                                                            href="?action=addCart&productName=<?php echo $productOfCategoryOther1['productName']; ?>"><img
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
                            <div class="row smartphoneother12">
                                <?php foreach ($productOfCategoryOther2s as $productOfCategoryOther2) : ?>
                                <input type="hidden" name="viewProductID">
                                <div class="col-2 sanpham smartphoneother1">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col">
                                                <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col imgProduct">
                                                <a href="?action=product_detail&productName=<?php echo $productOfCategoryOther2['productName']; ?>&categoryID=<?php echo $productOfCategoryOther2['categoryID']; ?>">
                                                    <img class="card-img-top" 
                                                        src="<?php echo '../images/productimage/' . $productOfCategoryOther2['productName'] . '.jpg'; ?>"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col text-center productName">
                                                <a href="#" class="productname">
                                                    <h6 class="card-title">
                                                        <?php echo $productOfCategoryOther2['productName']; ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col productPrice text-center">
                                                <p class="card-text price"><span>Giá :</span>
                                                    <?php echo number_format($productOfCategoryOther2['price'], 0, ',', '.'); ?>đ
                                                </p>
                                                <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                    <?php echo number_format($productOfCategoryOther2['finalPrice'], 0, ',', '.'); ?>đ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="danhgia">
                                                    <div class="rate1">
                                                        <?php
                                                                if (isset($productOfCategoryOther2['productName'])) {
                                                                    $rateProducts = $productDB->getRateStarProduct($productOfCategoryOther2['productName']);
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
                                                    -<?php echo $productOfCategoryOther2['discount']; ?>%
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col quantity">
                                                <p>Số lượng còn lại:
                                                    <span style="color: red;font-style: italic;">
                                                        <?php if($productOfCategoryOther2['quantity'] == 0){
                                                                        echo "Hết hàng";
                                                                      }else {
                                                                        echo $productOfCategoryOther2['quantity'];
                                                                      }
                                                                ?>

                                                    </span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <ul class="list-group">
                                                        <?php if ($productOfCategoryOther2['categoryID'] == "01") : ?>
                                                        <li>Ram & ROM:
                                                            <?php echo $productOfCategoryOther2['ramSmartphone']; ?> ,
                                                            <?php echo $productOfCategoryOther2['internalMemorySmartphone']; ?>
                                                        </li>
                                                        <li>Pin & Sạc:
                                                            <?php echo $productOfCategoryOther2['sizeBatterySmartphone']; ?>
                                                            ,
                                                            <?php echo $productOfCategoryOther2['chargerSmartphone']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther2['categoryID'] == "02") : ?>
                                                        <li>Ram & Ổ cứng:
                                                            <?php echo $productOfCategoryOther2['ramLaptop']; ?> ,
                                                            <?php echo $productOfCategoryOther2['hardDriverLaptop']; ?>
                                                        </li>
                                                        <li>CPU: <?php echo $productOfCategoryOther2['cpuLaptop']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther2['categoryID'] == "03") : ?>
                                                        <li>Ram & ROM:
                                                            <?php echo $productOfCategoryOther2['ramTablet']; ?> ,
                                                            <?php echo $productOfCategoryOther2['internalMemoryTablet']; ?>
                                                        </li>
                                                        <li>Pin & Sạc:
                                                            <?php echo $productOfCategoryOther2['pinTablet']; ?> ,
                                                            <?php echo $productOfCategoryOther2['chargerTablet']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther2['categoryID'] == "04") : ?>
                                                        <li>Ram & Ổ cứng:
                                                            <?php echo $productOfCategoryOther2['ramPC']; ?> ,
                                                            <?php echo $productOfCategoryOther2['hardDriverPC']; ?>
                                                        </li>
                                                        <li>CPU: <?php echo $productOfCategoryOther2['cpuPC']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther2['categoryID'] == "05") : ?>
                                                        <li>Màn hình:
                                                            <?php echo $productOfCategoryOther2['screenWatch']; ?> ,
                                                            <?php echo $productOfCategoryOther2['sizeScreenWatch']; ?>
                                                        </li>
                                                        <li>Sử dụng:
                                                            <?php echo $productOfCategoryOther2['batteryLifeWatch']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther2['categoryID'] == "06") : ?>
                                                        <li>Hãng:
                                                            <?php echo $productOfCategoryOther2['brandAccessory']; ?>
                                                        </li>
                                                        <li>Loại phụ kiện:
                                                            <?php echo $productOfCategoryOther2['typeAccessory']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther2['categoryID'] == "07") : ?>
                                                        <li>Hãng:
                                                            <?php echo $productOfCategoryOther2['brandTelevision']; ?>
                                                        </li>
                                                        <li>Màn hình:
                                                            <?php echo $productOfCategoryOther2['sizeScreenTelevision']; ?>
                                                            ,
                                                            <?php echo $productOfCategoryOther2['resolutionTelevision']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if ($productOfCategoryOther2['categoryID'] == "08") : ?>
                                                        <li>Hãng:
                                                            <?php echo $productOfCategoryOther2['brandRefrigerator']; ?>
                                                        </li>
                                                        <li>Dung tích sử dụng:
                                                            <?php echo $productOfCategoryOther2['useCapacityRefrigerator']; ?>
                                                        </li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="addCart text-center mt-2">
                                                        <?php if($productOfCategoryOther2['quantity'] == 0) : ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
                                                        <?php else: ?>
                                                        <a class='btn'
                                                            href="?action=addCart&productName=<?php echo $productOfCategoryOther2['productName']; ?>"><img
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
                    <a class="carousel-control-prev" href="#smartphoneother" data-slide="prev" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-left"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#smartphoneother" data-slide="next" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- xem thêm sản phẩm khác -->
    <div class="container mt-2">
        <div class="row muathem">
            <div class="col">
                <h2>Mua thêm sản phẩm khác</h2>
            </div>
        </div>
        <div class="row mb-3 xemthem">
            <div class="col">
                <p><span style="font-weight: bolder;">Xem nhanh:</span>
                    <?php foreach ($getProductsInterest as $getProductInterest) : ?>
                    <a class="btn btn-dark"
                        href="?action=product_detail&productName=<?php echo $getProductInterest['productName']; ?>&categoryID=<?php echo $getProductInterest['categoryID']; ?>"><?php echo $getProductInterest['productName']; ?></a>
                    <?php endforeach; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="sanphamkhac" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row sanphamkhac12">
                                <?php foreach ($productOther1s as $productOther1) : ?>
                                <input type="hidden" name="viewProductID">
                                <div class="col-2 sanpham sanphamkhac1">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col">
                                                <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col imgProduct">
                                                <a href="?action=product_detail&productName=<?php echo $productOther1['productName']; ?>&categoryID=<?php echo $productOther1['categoryID']; ?>">
                                                    <img class="card-img-top" 
                                                        src="<?php echo '../images/productimage/' . $productOther1['productName'] . '.jpg'; ?>"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col text-center productName">
                                                <a href="#" class="productname">
                                                    <h6 class="card-title">
                                                        <?php echo $productOther1['productName']; ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col productPrice text-center">
                                                <p class="card-text price"><span>Giá :</span>
                                                    <?php echo number_format($productOther1['price'], 0, ',', '.'); ?>đ
                                                </p>
                                                <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                    <?php echo number_format($productOther1['finalPrice'], 0, ',', '.'); ?>đ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="danhgia">
                                                    <div class="rate1">
                                                        <?php
                                                                if (isset($productOther1['productName'])) {
                                                                    $rateProducts = $productDB->getRateStarProduct($productOther1['productName']);
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
                                                    -<?php echo $productOther1['discount']; ?>%
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col quantity">
                                                <p>Số lượng còn lại:
                                                    <span style="color: red;font-style: italic;">
                                                        <?php if($productOther1['quantity'] == 0){
                                                                        echo "Hết hàng";
                                                                      }else {
                                                                        echo $productOther1['quantity'];
                                                                      }
                                                                ?>

                                                    </span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="addCart text-center mt-2">
                                                        <?php if($productOther1['quantity'] == 0) : ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
                                                        <?php else: ?>
                                                        <a class='btn'
                                                            href="?action=addCart&productName=<?php echo $productOther1['productName']; ?>"><img
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
                            <div class="row sanphamkhac12">
                                <?php foreach ($productOther2s as $productOther2) : ?>
                                <input type="hidden" name="viewProductID">
                                <div class="col-2 sanpham sanphamkhac1">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col">
                                                <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col imgProduct">
                                                <a href="?action=product_detail&productName=<?php echo $productOther2['productName']; ?>&categoryID=<?php echo $productOther2['categoryID']; ?>">
                                                    <img class="card-img-top" 
                                                        src="<?php echo '../images/productimage/' . $productOther2['productName'] . '.jpg'; ?>"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col text-center productName">
                                                <a href="#" class="productname">
                                                    <h6 class="card-title">
                                                        <?php echo $productOther2['productName']; ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col productPrice text-center">
                                                <p class="card-text price"><span>Giá :</span>
                                                    <?php echo number_format($productOther2['price'], 0, ',', '.'); ?>đ
                                                </p>
                                                <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                    <?php echo number_format($productOther2['finalPrice'], 0, ',', '.'); ?>đ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="danhgia">
                                                    <div class="rate1">
                                                        <?php
                                                                if (isset($productOther2['productName'])) {
                                                                    $rateProducts = $productDB->getRateStarProduct($productOther2['productName']);
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
                                                    -<?php echo $productOther2['discount']; ?>%
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col quantity">
                                                <p>Số lượng còn lại:
                                                    <span style="color: red;font-style: italic;">
                                                        <?php if($productOther2['quantity'] == 0){
                                                                        echo "Hết hàng";
                                                                      }else {
                                                                        echo $productOther2['quantity'];
                                                                      }
                                                                ?>

                                                    </span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="addCart text-center mt-2">
                                                        <?php if($productOther2['quantity'] == 0) : ?>
                                                        <button class='btn disableButton' disabled><img class='img-fluid'
                                                                src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                            hàng</button>
                                                        <?php else: ?>
                                                        <a class='btn'
                                                            href="?action=addCart&productName=<?php echo $productOther2['productName']; ?>"><img
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
                    <a class="carousel-control-prev" href="#sanphamkhac" data-slide="prev" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-left"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sanphamkhac" data-slide="next" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr style="border: 5px solid #223464;">
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/footer.php"; ?>