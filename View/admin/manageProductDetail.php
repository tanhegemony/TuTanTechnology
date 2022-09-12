<!doctype html>
<html lang="en">

<head>
    <title><?php if(isset($_POST['viewProductDetail'])): ?>
                                        Xem chi tiết sản phẩm <?php echo $productInProductDetail['productName']; ?>
                                        thuộc danh mục <?php echo $category->getCategoryName(); ?>
                                        <?php else:?>
                                        Quản lý chi tiết sản phẩm thuộc danh mục <?php echo $category->getCategoryName(); ?>
                                        <?php endif; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../images/fontawesome-free-5.15.4-web/css/all.min.css" />
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/admin/manage.css"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/admin/manageResponsive.css"; ?>
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/header.php"; ?>
        <div class="row">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/menu.php"; ?>
            <div class="col-9 content mt-2">
                <div class="tab-content" id="v-pills-tabContent">
                        <div class="row mt-2">
                            <div class="col management">
                                <div class="card">
                                    <div class="card-header text-center" >
                                        <?php if(isset($_POST['viewProductDetail'])): ?>
                                        Xem chi tiết sản phẩm <span
                                            style="color: red;"><?php echo $productInProductDetail['productName']; ?></span>
                                        thuộc danh mục <span
                                            style="color: red;"><?php echo $category->getCategoryName(); ?></span>
                                        <?php else:?>
                                        Quản lý chi tiết sản phẩm thuộc danh mục <span
                                            style="color: red;"><?php echo $category->getCategoryName(); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(isset($_POST['viewProductDetail'])):  ?>
                                    <div class="row">
                                        <div class="col nameContentNav">
                                            <!-- đường dẫn -->
                                            <div class="row mt-2">
                                                <div class="col duongdan">
                                                    <nav aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a
                                                                    href="?action=manageProductDetail&categoryID=<?php echo $categoryID; ?>"
                                                                    style="color: black;font-weight: bolder;">Quản lý
                                                                    chi tiết sản phẩm thuộc danh mục <span
                                                                        style="color: red;"><?php echo $category->getCategoryName(); ?></span></a>
                                                            </li>
                                                            <li class="breadcrumb-item active" aria-current="page">Chi
                                                                tiết sản phẩm <span
                                                                    style="color: red;"><?php echo $productInProductDetail['productName']; ?></span>
                                                            </li>
                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 viewImg">
                                            <div class="row">
                                                <div class="col imgcartsp">
                                                    <img src="<?php echo '../images/productimage/' . $productInProductDetail['productName'] . '.jpg'; ?>"
                                                        width="100%" alt="">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col sp text-center">
                                                    <h6><?php echo $productInProductDetail['productName']; ?></h6>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col text-center">
                                                    <form action="" method="post">
                                                        <button
                                                            formaction="?action=edit_product_detail&categoryID=<?php echo $categoryID ?>&productDetailID=<?php echo $productDetailID; ?>"
                                                            type="submit" class="btn btn-primary ml-2">Edit</button>
                                                        <button
                                                            formaction="?action=manageProductDetail&categoryID=<?php echo $categoryID; ?>"
                                                            class="btn btn-danger"><i
                                                                class="fas fa-hand-point-left"></i> Back</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9 viewDetail">
                                            <?php if($categoryID == 1) : ?>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Hãng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['brandSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Loại: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['typeSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Chức năng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['functionSmartphone']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Loại cấu hình: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['configurationSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Công nghệ PIN: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['batteryTechnologySmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Dung lượng PIN: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizeBatterySmartphone']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Sạc: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['chargerSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>RAM: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['ramSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Bộ nhớ trong: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['internalMemorySmartphone']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Thiết kế: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['designSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Màu: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['colorSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Chip: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['chipSmartphone']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>SIM : <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['simSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Màn hình: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['screenSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Công nghệ màn hình: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['screenTechnologySmartphone']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Kích thước màn hình: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizeScreenSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Hệ điều hành: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['operatingSystemSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Camera: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['cameraSmartphone']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Camera trước: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['frontCameraSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Camera sau: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['rearCameraSmartphone']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Tính năng đặc biệt: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['specialFeaturesSmartphone']; ?></span></label>
                                                </div>
                                            </div>
                                            <?php elseif($categoryID == 2) : ?>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Hãng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['brandLaptop']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>CPU: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['cpuLaptop']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>RAM: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['ramLaptop']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Ổ cứng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['hardDriverLaptop']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Card đồ họa: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['graphicsCardLaptop']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Màn hình: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizeScreenLaptop']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Độ phân giải: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['screenResolutionLaptop']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Tần số quét: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sweepFrequencyLaptop']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Nhu cầu sử dụng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['usageNeedLaptop']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Hệ điều hành: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['operatingSystemLaptop']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Kích thước: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizeLaptop']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Trọng lượng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['weightLaptop']; ?></span></label>
                                                </div>
                                            </div>
                                            <?php elseif($categoryID == 3) : ?>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Hãng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['brandTablet']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>RAM: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['ramTablet']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Bộ nhớ trong: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['internalMemoryTablet']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Màn hình: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['screenTablet']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Hệ điều hành: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['operatingSystemTablet']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Chip: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['chipTablet']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Camera trước: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['frontCameraTablet']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Camera sau: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['rearCameraTablet']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>PIN: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['pinTablet']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Sạc: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['chargerTablet']; ?></span></label>
                                                </div>
                                            </div>
                                            <?php elseif($categoryID == 4) : ?>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Hãng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['brandPC']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>CPU: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['cpuPC']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>RAM: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['ramPC']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Ổ cứng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['hardDriverPC']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Card đồ họa: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['graphicsCardPC']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Nhu cầu sử dụng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['usageNeedPC']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Kích thước: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizePC']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Trọng lượng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['weightPC']; ?></span></label>
                                                </div>
                                            </div>
                                            <?php elseif($categoryID == 5) : ?>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Hãng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['brandWatch']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Loại: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['typeWatch']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Hình dáng mặt: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['faceShapeWatch']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Chất liệu dây: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['bandMaterialWatch']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Màn hình: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['screenWatch']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Kích thước màn hình: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizeScreenWatch']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Thời lượng PIN: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['batteryLifeWatch']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Dung lượng PIN: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizeBatteryWatch']; ?></span></label>
                                                </div>
                                            </div>
                                            <?php elseif($categoryID == 6) : ?>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Hãng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['brandAccessory']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Loại: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['typeAccessory']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Loại sản phẩm: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['typeProductOfAccessory']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Tương thích: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['compatibleAccessory']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Kích thước: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizeAccessory']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Trọng lượng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['weightAccessory']; ?></span></label>
                                                </div>
                                            </div>
                                            <?php elseif($categoryID == 7) : ?>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Hãng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['brandTelevision']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Kích cỡ màn hình: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizeScreenTelevision']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Độ phân giải: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['resolutionTelevision']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Loại: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['typeTelevision']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Hệ điều hành: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['operatingSystemTelevision']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Kích thước: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizeTelevision']; ?></span></label>
                                                </div>
                                            </div>
                                            <?php elseif($categoryID == 8) : ?>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Hãng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['brandRefrigerator']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Kiểu tủ: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['typeRefrigerator']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Dung tích sử dụng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['useCapacityRefrigerator']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Dung tích ngăn đá: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['freezerCapacityRefrigerator']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Dung tích ngăn lạnh: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['coolCompartmentRefrigerator']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Công suất tiêu thụ: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['powerConsumptionRefrigerator']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Công nghệ tiết kiệm điện: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['energySavingTechnologyRefrigerator']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Công nghệ làm lạnh: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['coolTechnologyRefrigerator']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Công nghệ kháng khuẩn, khử mùi: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['anti_odorTechnologyRefrigerator']; ?></span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Công nghệ bảo quản thực phẩm: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['foodPreservationTechnologyRefrigerator']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Kích thước: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['sizeRefrigerator']; ?></span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label>Khối lượng: <span
                                                            style="color: red;font-style: italic;font-weight: 400;"><?php echo $productInProductDetail['massRefrigerator']; ?></span></label>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                    <?php elseif(!isset($_POST['viewProductDetail'])) : ?>
                                    <div class="card-body">
                                        <form action="" method="get">
                                            <div class="form-inline">
                                                <input type="hidden" name="action" value="search_product_detail">
                                                <input type="hidden" name="categoryID"
                                                    value="<?php echo $categoryID; ?>">
                                                <input type="text" class="col form-control ml-2"
                                                    value="<?php if(isset($contentProductDetail)){echo $contentProductDetail;} ?>"
                                                    name="contentProductDetail"
                                                    placeholder="Nhập tên sản phẩm cần tìm kiếm">
                                                <button type="submit" class="btn btn-primary ml-2"><i
                                                        class="fas fa-search"></i></button>
                                                <a href="?action=manageProductDetail&categoryID=<?php echo $categoryID; ?>"
                                                    class="btn btn-info ml-2">Tất cả</a>
                                            </div>
                                        </form>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-6 showNumber">
                                                <form action="?action=<?php if($action == "manageProductDetail"){
                                        echo "manageProductDetail";
                                     }else if($action == "search_product_detail"){
                                         echo "search_product_detail&contentProductDetail=$contentProductDetail";
                                     }
                                     ?>&categoryID=<?php echo $categoryID; ?>" method="post">
                                                    <div class="form-inline float-left">
                                                        <label for="productNumber" class="ml-2">Số sản phẩm hiển thị:
                                                        </label>
                                                        <select id="productNumber" class="form-control ml-2"
                                                            name="productNumber">
                                                            <option value="5" <?php if ($productNumber == 5) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>5 sản phẩm</option>
                                                            <option value="10" <?php if ($productNumber == 10) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>10 sản phẩm</option>
                                                            <option value="15" <?php if ($productNumber == 15) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>15 sản phẩm</option>
                                                            <option value="20" <?php if ($productNumber == 20) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>20 sản phẩm</option>
                                                        </select>
                                                        <button type="submit" name="applyProductNumber"
                                                            class="btn btn-primary ml-2">Áp dụng</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-6 add">
                                                <div class="addCategory">
                                                    <a href="?action=add_product_detail"
                                                        class="btn btn-outline-dark float-right">Thêm Chi tiết sản phẩm
                                                        mới</a>
                                                </div>
                                            </div>
                                        </div>

                                        <table class="table table-light text-center table-responsive tableaccount">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>ProductDetailID</th>
                                                    <th class="product">Product</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(empty($productsInProductDetail)) : ?>
                                                <tr>
                                                    <td colspan="5" class="text-center"
                                                        style="color: red;font-weight: bolder;font-size: 25px;">Không
                                                        tìm thấy sản phẩm thuộc danh mục
                                                        <?php echo $category->getCategoryName(); ?></td>
                                                </tr>

                                                <?php else: ?>
                                                <?php foreach ($productsInProductDetail as $productInProductDetail):?>
                                                <tr>
                                                    <td><?php echo $productInProductDetail['productDetailID'];?></td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-3 imgcartsp">
                                                                <img src="<?php echo '../images/productimage/' . $productInProductDetail['productName'] . '.jpg'; ?>"
                                                                    width="100%" alt="">
                                                            </div>
                                                            <div class="col-9 sp">
                                                                <h6><?php echo $productInProductDetail['productName']; ?>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="thaotac">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="productDetailID"
                                                                value="<?php echo $productInProductDetail['productDetailID'];?>">
                                                            <button type="submit" name="viewProductDetail"
                                                                formaction="?action=manageProductDetail&productDetailID=<?php echo $productInProductDetail['productDetailID']; ?>&categoryID=<?php echo $categoryID; ?>"
                                                                class="btn"
                                                                style="color: white;background-color: #223464;">View</button>
                                                            <button type="submit"
                                                                onclick="return confirm('Bạn có muốn xoá chi tiết sản phẩm có tên <?php echo $productInProductDetail['productName'];?>')"
                                                                name="deleteProductInProductDetail"
                                                                class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php endforeach;?>
                                                <?php endif; ?>


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <div class="row mt-2">
                                            <div class="col">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-center">
                                                        <?php if($currentPage == 1) : ?>
                                                        <li class="page-item">
                                                            <a class="page-link" disable>Đầu</a>
                                                        </li>
                                                        <?php else: ?>
                                                        <li class="page-item">
                                                            <a class="page-link"
                                                                href="?action=<?php if($action == "manageProductDetail"){
                                                echo "manageProductDetail";
                                            }else if($action == "search_product_detail"){
                                                echo "search_product_detail&contentProductDetail=$contentProductDetail";
                                            }?>&categoryID=<?php echo $categoryID; ?>&page=<?php echo $firstPage; ?>">Đầu</a>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php for ($i=1;$i<=$totalPage;$i++) : ?>
                                                        <?php if($currentPage != $i) : ?>
                                                        <li class="page-item">
                                                            <a class="page-link" href="?action=<?php if($action == "manageProductDetail"){
                                                echo "manageProductDetail";
                                            }else if($action == "search_product_detail"){
                                                echo "search_product_detail&contentProductDetail=$contentProductDetail";
                                            }?>&categoryID=<?php echo $categoryID; ?>&page=<?php echo $i; ?>">
                                                                <?php echo $i; ?>
                                                            </a>
                                                        </li>
                                                        <?php else : ?>
                                                        <li class="page-item active">
                                                            <a class="page-link" style="background-color: #223464;"
                                                                disabled>
                                                                <?php echo $i; ?>
                                                            </a>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php endfor; ?>
                                                        <?php if($currentPage == $totalPage || $totalPage == 0): ?>
                                                        <li class="page-item">
                                                            <a class="page-link" disable>Cuối</a>
                                                        </li>
                                                        <?php else: ?>
                                                        <li class="page-item">
                                                            <a class="page-link"
                                                                href="?action=<?php if($action == "manageProductDetail"){
                                                echo "manageProductDetail";
                                            }else if($action == "search_product_detail"){
                                                echo "search_product_detail&contentProductDetail=$contentProductDetail";
                                            }?>&categoryID=<?php echo $categoryID; ?>&page=<?php echo $endPage; ?>">Cuối</a>
                                                        </li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>

                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                
                </div>
            </div>
        </div>
    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/footer.php"; ?>