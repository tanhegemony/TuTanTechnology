<!doctype html>
<html lang="en">

<head>
    <title>Xem tất cả sản phẩm
        <?php if($action == "viewAllProductOrder"){echo "bán chạy";}else if($action == "viewAllProductInterest"){echo "quan tâm";}else if($action=="viewAllProductAppliances"){echo "gia dụng";}; ?>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../images/fontawesome-free-5.15.4-web/css/all.min.css" />
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/user/productsBySearch.css"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/productsBySearchResponsive.css"; ?>
        
    </style>
</head>

<body>
    <div class="container">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/header.php"; ?>
        <!-- đường dẫn -->
        <div class="row mt-2">
            <div class="col duongdan">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?action=home_page">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Xem tất cả sản phẩm :
                            <?php if($action == "viewAllProductOrder"){echo "bán chạy";}else if($action == "viewAllProductInterest"){echo "quan tâm";}else if($action=="viewAllProductAppliances"){echo "gia dụng";}; ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-6 countsanpham">
                <p>Hiển thị: <span><?php echo count($getProductsByOrderPagination); ?></span> sản phẩm
                    <?php if($action == "viewAllProductOrder"){echo "bán chạy";}else if($action == "viewAllProductInterest"){echo "quan tâm";}else if($action=="viewAllProductAppliances"){echo "gia dụng";}; ?>
                </p>
            </div>
            <div class="col-6 sort">
                <div class="form-inline float-right">
                    <label for="">Sắp xếp: </label>
                    <select class="form-control ml-2" name="" id="">
                        <option>Giá từ thấp đến cao</option>
                        <option>Giá từ cao đến thấp</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- sản phẩm -->
        <div class="row mt-2">
            <div class="col">
                <div class="row sanphamtheoketquatimkiem12">
                    <?php foreach ($getProductsByOrderPagination as $getProductByOrderPagination) : ?>
                    <input type="hidden" name="viewProductID">
                    <div class="col-2 sanpham sanphamtheoketquatimkiem1 mb-2">
                        <div class="card">
                            <div class="row">
                                <div class="col">
                                    <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col imgProduct">
                                    <a href="?action=product_detail&productName=<?php echo $getProductByOrderPagination['productName']; ?>&categoryID=<?php echo $getProductByOrderPagination['categoryID']; ?>">
                                        <img class="card-img-top" 
                                            src="<?php echo '../images/productimage/' . $getProductByOrderPagination['productName'] . '.jpg'; ?>"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                           <div class="row">
                               <div class="col text-center productName">
                                    <a href="#" class="productname">
                                        <h6 class="card-title">
                                            <?php echo $getProductByOrderPagination['productName']; ?>
                                        </h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col productPrice text-center">
                                    <p class="card-text price"><span>Giá :</span>
                                        <?php echo number_format($getProductByOrderPagination['price'], 0, ',', '.'); ?>đ
                                    </p>
                                    <p class="text-center finalprice"><span>Chỉ còn :</span>
                                        <?php echo number_format($getProductByOrderPagination['finalPrice'], 0, ',', '.'); ?>đ
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="danhgia">
                                        <div class="rate">
                                            <?php
                                                    if (isset($getProductByOrderPagination['productName'])) {
                                                        $rateProducts = $productDB->getRateStarProduct($getProductByOrderPagination['productName']);
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
                                        -<?php echo $getProductByOrderPagination['discount']; ?>%
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col quantity">
                                    <p>Số lượng còn lại:
                                        <span style="color: red;font-style: italic;">
                                            <?php if($getProductByOrderPagination['quantity'] == 0){
                                                            echo "Hết hàng";
                                                          }else {
                                                            echo $getProductByOrderPagination['quantity'];
                                                          }
                                                    ?>

                                        </span></p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <ul class="list-group">
                                            <?php if ($getProductByOrderPagination['categoryID'] == "01") : ?>
                                            <li>Ram & ROM:
                                                <?php echo $getProductByOrderPagination['ramSmartphone']; ?> ,
                                                <?php echo $getProductByOrderPagination['internalMemorySmartphone']; ?>
                                            </li>
                                            <li>Pin & Sạc:
                                                <?php echo $getProductByOrderPagination['sizeBatterySmartphone']; ?>
                                                ,
                                                <?php echo $getProductByOrderPagination['chargerSmartphone']; ?>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($getProductByOrderPagination['categoryID'] == "02") : ?>
                                            <li>Ram & Ổ cứng:
                                                <?php echo $getProductByOrderPagination['ramLaptop']; ?> ,
                                                <?php echo $getProductByOrderPagination['hardDriverLaptop']; ?>
                                            </li>
                                            <li>CPU: <?php echo $getProductByOrderPagination['cpuLaptop']; ?>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($getProductByOrderPagination['categoryID'] == "03") : ?>
                                            <li>Ram & ROM:
                                                <?php echo $getProductByOrderPagination['ramTablet']; ?> ,
                                                <?php echo $getProductByOrderPagination['internalMemoryTablet']; ?>
                                            </li>
                                            <li>Pin & Sạc:
                                                <?php echo $getProductByOrderPagination['pinTablet']; ?> ,
                                                <?php echo $getProductByOrderPagination['chargerTablet']; ?>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($getProductByOrderPagination['categoryID'] == "04") : ?>
                                            <li>Ram & Ổ cứng:
                                                <?php echo $getProductByOrderPagination['ramPC']; ?> ,
                                                <?php echo $getProductByOrderPagination['hardDriverPC']; ?>
                                            </li>
                                            <li>CPU: <?php echo $getProductByOrderPagination['cpuPC']; ?>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($getProductByOrderPagination['categoryID'] == "05") : ?>
                                            <li>Màn hình:
                                                <?php echo $getProductByOrderPagination['screenWatch']; ?> ,
                                                <?php echo $getProductByOrderPagination['sizeScreenWatch']; ?>
                                            </li>
                                            <li>Sử dụng:
                                                <?php echo $getProductByOrderPagination['batteryLifeWatch']; ?>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($getProductByOrderPagination['categoryID'] == "06") : ?>
                                            <li>Hãng:
                                                <?php echo $getProductByOrderPagination['brandAccessory']; ?>
                                            </li>
                                            <li>Loại phụ kiện:
                                                <?php echo $getProductByOrderPagination['typeAccessory']; ?>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($getProductByOrderPagination['categoryID'] == "07") : ?>
                                            <li>Hãng:
                                                <?php echo $getProductByOrderPagination['brandTelevision']; ?>
                                            </li>
                                            <li>Màn hình:
                                                <?php echo $getProductByOrderPagination['sizeScreenTelevision']; ?>
                                                ,
                                                <?php echo $getProductByOrderPagination['resolutionTelevision']; ?>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($getProductByOrderPagination['categoryID'] == "08") : ?>
                                            <li>Hãng:
                                                <?php echo $getProductByOrderPagination['brandRefrigerator']; ?>
                                            </li>
                                            <li>Dung tích sử dụng:
                                                <?php echo $getProductByOrderPagination['useCapacityRefrigerator']; ?>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="addCart text-center mt-2">
                                            <?php if($getProductByOrderPagination['quantity'] == 0) : ?>
                                            <button class='btn disableButton' disabled><img class='img-fluid'
                                                    src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                hàng</button>
                                            <?php else: ?>
                                            <a class='btn'
                                                href="?action=addCart&productName=<?php echo $getProductByOrderPagination['productName']; ?>"><img
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
                            <a class="page-link" href="?action=<?php if($action == "viewAllProductOrder"){
                                        echo "viewAllProductOrder";
                                    }else if($action == "viewAllProductInterest"){
                                        echo "viewAllProductInterest";
                                    }else if($action=="viewAllProductAppliances"){
                                        echo "viewAllProductAppliances";
                                    }
                                    ?>&page=<?php echo $firstPage; ?>">Đầu</a>
                        </li>

                        <?php endif; ?>
                        <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                        <?php if ($currentPage != $i) : ?>
                        <li class="page-item">
                            <a class="page-link" href="?action=<?php if($action == "viewAllProductOrder"){
                                        echo "viewAllProductOrder";
                                    }else if($action == "viewAllProductInterest"){
                                        echo "viewAllProductInterest";
                                    }else if($action=="viewAllProductAppliances"){
                                        echo "viewAllProductAppliances";
                                    }
                                    ?>&page=<?php echo $i; ?>">
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
                            <a class="page-link" href="?action=<?php if($action == "viewAllProductOrder"){
                                        echo "viewAllProductOrder";
                                    }else if($action == "viewAllProductInterest"){
                                        echo "viewAllProductInterest";
                                    }else if($action=="viewAllProductAppliances"){
                                        echo "viewAllProductAppliances";
                                    }
                                    ?>&page=<?php echo $endPage; ?>">Cuối</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <hr style="border: 5px solid #223464;">
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/footer.php"; ?>