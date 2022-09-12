<!doctype html>
<html lang="en">

<head>
    <title><?php if($action == "add_product_detail"){echo "Thêm thông tin chi tiết sản phẩm";}else if($action == "edit_product_detail"){echo "Chỉnh sửa thông tin chi tiết sản phẩm";} ?></title>
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
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/admin/add.css"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/admin/addResponsive.css"; ?>
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/header.php"; ?>
        <div class="row">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/menu.php"; ?>
            <div class="col-9 content mt-2">
                <div class="tab-content" id="v-pills-tabContent">
                    <form action="" method="post" class="mt-3 mb-3 addForm">
                        <div class="row">
                            <div class="form-group">
                                <input type="hidden" name="productDetailID">
                            </div>
                            <div class="col-4 offset-4 nameform">
                                <div class="text-center mt-2 nameForm">
                                    <h3><?php if($action == "add_product_detail"){echo "Thêm thông tin chi tiết sản phẩm";}else if($action == "edit_product_detail"){echo "Chỉnh sửa thông tin chi tiết sản phẩm";} ?>
                                    </h3>
                                </div>
                                <div class="form-group">
                                    <label for="productID">Sản phẩm: </label>
                                    <select class="form-control" name="productID">
                                        <?php if($action == "add_product_detail") : ?>
                                        <option value="">Chọn sản phẩm</option>
                                        <?php foreach ($products as $product): ?>
                                        <option value="<?php echo $product['productID']; ?>">
                                            <?php echo $product['productName']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                        <?php elseif($action == "edit_product_detail") : ?>
                                        <option value="<?php echo $productInProductDetail['productID']; ?>"
                                            selected="true" disabled="true">
                                            <?php echo $productInProductDetail['productName']; ?>
                                        </option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="text-center">
                                        <label style="font-weight: bolder;font-style: italic;">Chọn loại danh mục sản
                                            phẩm: </label> <br>
                                        <input type="radio" onclick="javascript:yesnoCheck();" name="typeCategoryID" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 1 || $productInProductDetail['categoryID'] == 2 || 
                                       $productInProductDetail['categoryID'] == 3 || $productInProductDetail['categoryID'] == 4 ||
                                       $productInProductDetail['categoryID'] == 5 || $productInProductDetail['categoryID'] == 6){
                                   echo "checked";
                               }else{
                                   echo "disabled";
                               }
                            }?> id="yesCheck" />
                                        Điện tử
                                        <input class="ml-3" type="radio" onclick="javascript:yesnoCheck();"
                                            name="typeCategoryID" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 7 || $productInProductDetail['categoryID'] == 8){
                                   echo "checked";
                               }else{
                                   echo "disabled";
                               }
                            }?> id="noCheck" />
                                        Gia dụng
                                    </div>
                                    <br>
                                    <div id="ifYes" class="typeProduct mt-1" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 1 || $productInProductDetail['categoryID'] == 2 || 
                                       $productInProductDetail['categoryID'] == 3 || $productInProductDetail['categoryID'] == 4 ||
                                       $productInProductDetail['categoryID'] == 5 || $productInProductDetail['categoryID'] == 6){
                                   echo 'style="display:block"';
                               }else{
                                   echo 'style="display:none"';
                               }
                            }?>>
                                        <div class="text-center">
                                            <label style="font-weight: bolder;font-style: italic;">Chọn loại sản phẩm:
                                            </label> <br>
                                            <input type="radio" onclick="javascript:yesnoCheck();" name="categoryID"
                                                value="01" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 1){
                                   echo "checked";
                               }else{
                                   echo "disabled";
                               }
                            }?> id="yesCheck1" />
                                            Điện thoại
                                            <input class="ml-3" type="radio" onclick="javascript:yesnoCheck();"
                                                name="categoryID" value="02" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 2){
                                   echo "checked";
                               }else{
                                   echo "disabled";
                               }
                            }?> id="yesCheck2" /> Laptop
                                            <input class="ml-3" type="radio" onclick="javascript:yesnoCheck();"
                                                name="categoryID" value="03" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 3){
                                   echo "checked";
                               }else{
                                   echo "disabled";
                               }
                            }?> id="yesCheck3" /> Tablet
                                            <input class="ml-3" type="radio" onclick="javascript:yesnoCheck();"
                                                name="categoryID" value="04" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 4){
                                   echo "checked";
                               }else{
                                   echo "disabled";
                               }
                            }?> id="yesCheck4" /> PC
                                            <input class="ml-3" type="radio" onclick="javascript:yesnoCheck();"
                                                name="categoryID" value="05" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 5){
                                   echo "checked";
                               }else{
                                   echo "disabled";
                               }
                            }?> id="yesCheck5" /> Watch
                                            <input class="ml-3" type="radio" onclick="javascript:yesnoCheck();"
                                                name="categoryID" value="06" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 6){
                                   echo "checked";
                               }else{
                                   echo "disabled";
                               }
                            }?> id="yesCheck6" /> Phụ kiện
                                        </div>
                                    </div>
                                    <div id="ifNo" class="typeProduct mt-1" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 7 || $productInProductDetail['categoryID'] == 8){
                                   echo 'style="display:block"';
                               }else{
                                   echo 'style="display:none"';
                               }
                            }?>>
                                        <div class="text-center">
                                            <label style="font-weight: bolder;font-style: italic;">Chọn loại sản phẩm:
                                            </label> <br>
                                            <input type="radio" onclick="javascript:yesnoCheck();" name="categoryID"
                                                value="07" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 7){
                                   echo "checked";
                               }else{
                                   echo "disabled";
                               }
                            }?> id="yesCheck7" /> TV
                                            <input class="ml-3" type="radio" onclick="javascript:yesnoCheck();"
                                                name="categoryID" value="08" <?php if($action == "edit_product_detail"){ 
                               if($productInProductDetail['categoryID'] == 8){
                                   echo "checked";
                               }else{
                                   echo "disabled";
                               }
                            }?> id="yesCheck8" /> Tủ lạnh
                                        </div>
                                    </div>
                                    <!-- if Yes -->
                                    <div id="ifYes1" class="elementProduct" style="display:none">
                                        <p class="text-center mt-3"
                                            style="font-weight: bolder;font-variant: small-caps;color: red;">Các thông
                                            tin
                                            khác</p>
                                        <div class="row">
                                            <div class="col-6 detail1">
                                                <div class="form-group">
                                                    <label for="brandSmartphone">Hãng: </label>
                                                    <select class="form-control" name="brandSmartphone"
                                                        id="brandSmartphone">
                                                        <option value="">Chọn hãng điện thoại</option>
                                                        <option value="Apple"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Apple"){echo "selected";}else{echo "";} ?>>
                                                            Apple</option>
                                                        <option value="Samsum"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Samsum"){echo "selected";}else{echo "";} ?>>
                                                            Samsum</option>
                                                        <option value="Oppo"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Oppo"){echo "selected";}else{echo "";} ?>>
                                                            Oppo</option>
                                                        <option value="Xiaomi"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Xiaomi"){echo "selected";}else{echo "";} ?>>
                                                            Xiaomi</option>
                                                        <option value="Realme"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Realme"){echo "selected";}else{echo "";} ?>>
                                                            Realme</option>
                                                        <option value="Vivo"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Vivo"){echo "selected";}else{echo "";} ?>>
                                                            Vivo</option>
                                                        <option value="One Plus"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "One Plus"){echo "selected";}else{echo "";} ?>>
                                                            One Plus</option>
                                                        <option value="Vsmart"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Vsmart"){echo "selected";}else{echo "";} ?>>
                                                            Vsmart</option>
                                                        <option value="Itel"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Itel"){echo "selected";}else{echo "";} ?>>
                                                            Itel</option>
                                                        <option value="Nokia"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Nokia"){echo "selected";}else{echo "";} ?>>
                                                            Nokia</option>
                                                        <option value="Masstel"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Masstel"){echo "selected";}else{echo "";} ?>>
                                                            Masstel</option>
                                                        <option value="Mobel"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Mobel"){echo "selected";}else{echo "";} ?>>
                                                            Mobel</option>
                                                        <option value="Energizer"
                                                            <?php if(isset($productInProductDetail['brandSmartphone']) && $productInProductDetail['brandSmartphone'] == "Energizer"){echo "selected";}else{echo "";} ?>>
                                                            Energizer</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="typeSmartphone">Loại điện thoại: </label>
                                                    <select class="form-control" name="typeSmartphone"
                                                        id="typeSmartphone">
                                                        <option value="">Chọn loại điện thoại</option>
                                                        <option value="Android" <?php if(isset($productInProductDetail['typeSmartphone']) 
                                                && $productInProductDetail['typeSmartphone'] == "Android")
                                                {echo "selected";}else{echo "";} ?>>Android</option>
                                                        <option value="iOS" <?php if(isset($productInProductDetail['typeSmartphone']) 
                                                && $productInProductDetail['typeSmartphone'] == "iOS")
                                                {echo "selected";}else{echo "";} ?>>iOS</option>
                                                        <option value="Điện thoại phổ thông" <?php if(isset($productInProductDetail['typeSmartphone']) 
                                                && $productInProductDetail['typeSmartphone'] == "Điện thoại phổ thông")
                                                {echo "selected";}else{echo "";} ?>>Điện thoại phổ thông</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="functionSmartphone">Chức năng:</label>
                                                    <select class="form-control" name="functionSmartphone"
                                                        id="functionSmartphone">
                                                        <option value="">Chọn chức năng</option>
                                                        <option value="Chơi game" <?php if(isset($productInProductDetail['functionSmartphone']) 
                                                && $productInProductDetail['functionSmartphone'] == "Chơi game")
                                                {echo "selected";}else{echo "";} ?>>Chơi game</option>
                                                        <option value="Văn phòng" <?php if(isset($productInProductDetail['functionSmartphone']) 
                                                && $productInProductDetail['functionSmartphone'] == "Văn phòng")
                                                {echo "selected";}else{echo "";} ?>>Văn phòng</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="configurationSmartphone">Loại cấu hình: </label>
                                                    <select class="form-control" name="configurationSmartphone"
                                                        id="configurationSmartphone">
                                                        <option value="">Chọn loại cấu hình: </option>
                                                        <option value="Cấu hình cao" <?php if(isset($productInProductDetail['configurationSmartphone']) 
                                                && $productInProductDetail['configurationSmartphone'] == "Cấu hình cao")
                                                {echo "selected";}else{echo "";} ?>>Cấu hình cao</option>
                                                        <option value="Cấu hình trung bình" <?php if(isset($productInProductDetail['configurationSmartphone']) 
                                                && $productInProductDetail['configurationSmartphone'] == "Cấu hình trung bình")
                                                {echo "selected";}else{echo "";} ?>>Cấu hình trung bình</option>
                                                        <option value="Cấu hình thấp" <?php if(isset($productInProductDetail['configurationSmartphone']) 
                                                && $productInProductDetail['configurationSmartphone'] == "Cấu hình thấp")
                                                {echo "selected";}else{echo "";} ?>>Cấu hình thấp</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="batteryTechnologySmartphone">Công nghệ PIN: </label>
                                                    <select class="form-control" name="batteryTechnologySmartphone"
                                                        id="batteryTechnologySmartphone">
                                                        <option value="">Chọn công nghệ PIN</option>
                                                        <option value="Sạc pin nhanh" <?php if(isset($productInProductDetail['batteryTechnologySmartphone']) 
                                                && $productInProductDetail['batteryTechnologySmartphone'] == "Sạc pin nhanh")
                                                {echo "selected";}else{echo "";} ?>>Sạc pin nhanh</option>
                                                        <option value="Sạc không dây" <?php if(isset($productInProductDetail['batteryTechnologySmartphone']) 
                                                && $productInProductDetail['batteryTechnologySmartphone'] == "Sạc không dây")
                                                {echo "selected";}else{echo "";} ?>>Sạc không dây</option>
                                                        <option value="Tiết kiệm pin" <?php if(isset($productInProductDetail['batteryTechnologySmartphone']) 
                                                && $productInProductDetail['batteryTechnologySmartphone'] == "Tiết kiệm pin")
                                                {echo "selected";}else{echo "";} ?>>Tiết kiệm pin</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizeBatterySmartphone">Dung lượng pin: </label>
                                                    <input type="text" class="form-control" name="sizeBatterySmartphone"
                                                        value="<?php if(isset($productInProductDetail['sizeBatterySmartphone']))
                                                {echo $productInProductDetail['sizeBatterySmartphone'];} ?>"
                                                        id="sizeBatterySmartphone"
                                                        aria-describedby="sizeBatterySmartphoneHid"
                                                        placeholder="Nhập dung lượng PIN">
                                                    <small id="sizeBatterySmartphoneHid"
                                                        class="form-text text-muted">Dung lượng PIN không được để
                                                        trống!!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="chargerSmartphone">Sạc: </label>
                                                    <input type="text" class="form-control" name="chargerSmartphone"
                                                        id="chargerSmartphone" value="<?php if(isset($productInProductDetail['chargerSmartphone']))
                                                {echo $productInProductDetail['chargerSmartphone'];} ?>"
                                                        aria-describedby="chargerSmartphoneHid"
                                                        placeholder="Nhập thông tin sạc">
                                                    <small id="chargerSmartphoneHid" class="form-text text-muted">Sạc
                                                        không được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ramSmartphone">RAM: </label>
                                                    <select class="form-control" name="ramSmartphone"
                                                        id="ramSmartphone">
                                                        <option value="">Chọn dung lượng RAM</option>
                                                        <option value="1GB" <?php if(isset($productInProductDetail['ramSmartphone']) 
                                                && $productInProductDetail['ramSmartphone'] == "1GB")
                                                {echo "selected";}else{echo "";} ?>>1GB</option>
                                                        <option value="2GB" <?php if(isset($productInProductDetail['ramSmartphone']) 
                                                && $productInProductDetail['ramSmartphone'] == "2GB")
                                                {echo "selected";}else{echo "";} ?>>2GB</option>
                                                        <option value="3GB" <?php if(isset($productInProductDetail['ramSmartphone']) 
                                                && $productInProductDetail['ramSmartphone'] == "3GB")
                                                {echo "selected";}else{echo "";} ?>>3GB</option>
                                                        <option value="4GB" <?php if(isset($productInProductDetail['ramSmartphone']) 
                                                && $productInProductDetail['ramSmartphone'] == "4GB")
                                                {echo "selected";}else{echo "";} ?>>4GB</option>
                                                        <option value="6GB" <?php if(isset($productInProductDetail['ramSmartphone']) 
                                                && $productInProductDetail['ramSmartphone'] == "6GB")
                                                {echo "selected";}else{echo "";} ?>>6GB</option>
                                                        <option value="8GB" <?php if(isset($productInProductDetail['ramSmartphone']) 
                                                && $productInProductDetail['ramSmartphone'] == "8GB")
                                                {echo "selected";}else{echo "";} ?>>8GB</option>
                                                        <option value="12GB" <?php if(isset($productInProductDetail['ramSmartphone']) 
                                                && $productInProductDetail['ramSmartphone'] == "12GB")
                                                {echo "selected";}else{echo "";} ?>>12GB</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="internalMemorySmartphone">Bộ nhớ trong: </label>
                                                    <select class="form-control" name="internalMemorySmartphone"
                                                        id="internalMemorySmartphone">
                                                        <option value="">Chọn dung lượng bộ nhớ trong</option>
                                                        <option value="8GB" <?php if(isset($productInProductDetail['internalMemorySmartphone']) 
                                                && $productInProductDetail['internalMemorySmartphone'] == "8GB")
                                                {echo "selected";}else{echo "";} ?>>8GB</option>
                                                        <option value="16GB" <?php if(isset($productInProductDetail['internalMemorySmartphone']) 
                                                && $productInProductDetail['internalMemorySmartphone'] == "16GB")
                                                {echo "selected";}else{echo "";} ?>>16GB</option>
                                                        <option value="32GB" <?php if(isset($productInProductDetail['internalMemorySmartphone']) 
                                                && $productInProductDetail['internalMemorySmartphone'] == "32GB")
                                                {echo "selected";}else{echo "";} ?>>32GB</option>
                                                        <option value="64GB" <?php if(isset($productInProductDetail['internalMemorySmartphone']) 
                                                && $productInProductDetail['internalMemorySmartphone'] == "64GB")
                                                {echo "selected";}else{echo "";} ?>>64GB</option>
                                                        <option value="128GB" <?php if(isset($productInProductDetail['internalMemorySmartphone']) 
                                                && $productInProductDetail['internalMemorySmartphone'] == "128GB")
                                                {echo "selected";}else{echo "";} ?>>128GB</option>
                                                        <option value="256GB" <?php if(isset($productInProductDetail['internalMemorySmartphone']) 
                                                && $productInProductDetail['internalMemorySmartphone'] == "256GB")
                                                {echo "selected";}else{echo "";} ?>>256GB</option>
                                                        <option value="512GB" <?php if(isset($productInProductDetail['internalMemorySmartphone']) 
                                                && $productInProductDetail['internalMemorySmartphone'] == "512GB")
                                                {echo "selected";}else{echo "";} ?>>512GB</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="designSmartphone">Thiết kế: </label>
                                                    <select class="form-control" name="designSmartphone"
                                                        id="designSmartphone">
                                                        <option value="">Chọn loại thiết kế</option>
                                                        <option value="Tràn viền" <?php if(isset($productInProductDetail['designSmartphone']) 
                                                && $productInProductDetail['designSmartphone'] == "Tràn viền")
                                                {echo "selected";}else{echo "";} ?>>Tràn viền</option>
                                                        <option value="Mỏng nhẹ" <?php if(isset($productInProductDetail['designSmartphone']) 
                                                && $productInProductDetail['designSmartphone'] == "Mỏng nhẹ")
                                                {echo "selected";}else{echo "";} ?>>Mỏng nhẹ</option>
                                                        <option value="Mặt lưng kính" <?php if(isset($productInProductDetail['designSmartphone']) 
                                                && $productInProductDetail['designSmartphone'] == "Mặt lưng kính")
                                                {echo "selected";}else{echo "";} ?>>Mặt lưng kính</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="colorSmartphone">Màu sắc: </label>
                                                    <input type="text" class="form-control" name="colorSmartphone"
                                                        id="colorSmartphone" value="<?php if(isset($productInProductDetail['colorSmartphone']))
                                                {echo $productInProductDetail['colorSmartphone'];} ?>"
                                                        aria-describedby="colorSmartphoneHid"
                                                        placeholder="Nhập màu sắc điện thoại">
                                                    <small id="colorSmartphoneHid" class="form-text text-muted">Màu sắc
                                                        không được để trống!!</small>
                                                </div>

                                            </div>
                                            <div class="col-6 detail2">
                                                <div class="form-group">
                                                    <label for="chipSmartphone">Chip: </label>
                                                    <input type="text" class="form-control" name="chipSmartphone"
                                                        id="chipSmartphone" value="<?php if(isset($productInProductDetail['chipSmartphone']))
                                                {echo $productInProductDetail['chipSmartphone'];} ?>"
                                                        aria-describedby="chipSmartphoneHid"
                                                        placeholder="Nhập thông tin chip">
                                                    <small id="chipSmartphoneHid" class="form-text text-muted">Chip
                                                        không được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="simSmartphone">SIM: </label>
                                                    <input type="text" class="form-control" name="simSmartphone"
                                                        id="simSmartphone" value="<?php if(isset($productInProductDetail['simSmartphone']))
                                                {echo $productInProductDetail['simSmartphone'];} ?>"
                                                        aria-describedby="simSmartphoneHId"
                                                        placeholder="Nhập dữ liệu SIM">
                                                    <small id="simSmartphoneHId" class="form-text text-muted">SIM không
                                                        được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="screenSmartphone">Màn hình: </label>
                                                    <select class="form-control" name="screenSmartphone"
                                                        id="screenSmartphone">
                                                        <option value="">Chọn tính năng màn hinh</option>
                                                        <option value="Nhỏ gọn dễ cầm" <?php if(isset($productInProductDetail['screenSmartphone']) 
                                                && $productInProductDetail['screenSmartphone'] == "Nhỏ gọn dễ cầm")
                                                {echo "selected";}else{echo "";} ?>>Nhỏ gọn dễ cầm</option>
                                                        <option value="Màn hình gập" <?php if(isset($productInProductDetail['screenSmartphone']) 
                                                && $productInProductDetail['screenSmartphone'] == "Màn hình gập")
                                                {echo "selected";}else{echo "";} ?>>Màn hình gập</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="screenTechnologySmartphone">Công nghệ màn hình: </label>
                                                    <input type="text" class="form-control"
                                                        name="screenTechnologySmartphone" value="<?php if(isset($productInProductDetail['screenTechnologySmartphone']))
                                                {echo $productInProductDetail['screenTechnologySmartphone'];} ?>"
                                                        id="screenTechnologySmartphone"
                                                        aria-describedby="screenTechnologySmartphoneHid"
                                                        placeholder="Nhập thông tin công nghệ phần mềm">
                                                    <small id="screenTechnologySmartphoneHid"
                                                        class="form-text text-muted">Công nghệ màn hình không
                                                        được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizeScreenSmartphone">Kích thước màn hình: </label>
                                                    <input type="text" class="form-control" name="sizeScreenSmartphone"
                                                        id="sizeScreenSmartphone" value="<?php if(isset($productInProductDetail['sizeScreenSmartphone']))
                                                {echo $productInProductDetail['sizeScreenSmartphone'];} ?>"
                                                        aria-describedby="sizeScreenSmartphoneHid"
                                                        placeholder="Kích thước màn hình">
                                                    <small id="sizeScreenSmartphoneHid"
                                                        class="form-text text-muted">Kích thước màn hình không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="operatingSystemSmartphone">Hệ điều hành: </label>
                                                    <input type="text" class="form-control"
                                                        name="operatingSystemSmartphone" value="<?php if(isset($productInProductDetail['operatingSystemSmartphone']))
                                                {echo $productInProductDetail['operatingSystemSmartphone'];} ?>"
                                                        id="operatingSystemSmartphone"
                                                        aria-describedby="operatingSystemSmartphoneHid"
                                                        placeholder="Nhập thông tin hệ điều hành, phiên bản">
                                                    <small id="operatingSystemSmartphoneHid"
                                                        class="form-text text-muted">Hệ điều hành không được để
                                                        trống</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cameraSmartphone">Camera</label>
                                                    <select class="form-control" name="cameraSmartphone"
                                                        id="cameraSmartphone">
                                                        <option value="">Chọn loại Camera</option>
                                                        <option value="Chụp cận cảnh" <?php if(isset($productInProductDetail['cameraSmartphone']) 
                                                && $productInProductDetail['cameraSmartphone'] == "Chụp cận cảnh")
                                                {echo "selected";}else{echo "";} ?>>Chụp cận cảnh</option>
                                                        <option value="Chụp góc rộng" <?php if(isset($productInProductDetail['cameraSmartphone']) 
                                                && $productInProductDetail['cameraSmartphone'] == "Chụp góc rộng")
                                                {echo "selected";}else{echo "";} ?>>Chụp góc rộng</option>
                                                        <option value="Chụp xóa phông" <?php if(isset($productInProductDetail['cameraSmartphone']) 
                                                && $productInProductDetail['cameraSmartphone'] == "Chụp xóa phông")
                                                {echo "selected";}else{echo "";} ?>>Chụp xóa phông</option>
                                                        <option value="Chụp zoom xa" <?php if(isset($productInProductDetail['cameraSmartphone']) 
                                                && $productInProductDetail['cameraSmartphone'] == "Chụp zoom xa")
                                                {echo "selected";}else{echo "";} ?>>Chụp zoom xa</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="frontCameraSmartphone">Camera trước: </label>
                                                    <input type="text" class="form-control" name="frontCameraSmartphone"
                                                        id="frontCameraSmartphone" value="<?php if(isset($productInProductDetail['frontCameraSmartphone']))
                                                {echo $productInProductDetail['frontCameraSmartphone'];} ?>"
                                                        aria-describedby="frontCameraSmartphoneHid "
                                                        placeholder="Nhập thông tin camera trước">
                                                    <small id="frontCameraSmartphoneHid"
                                                        class="form-text text-muted">Camera trước không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rearCameraSmartphone">Camera sau: </label>
                                                    <input type="text" class="form-control" name="rearCameraSmartphone"
                                                        id="rearCameraSmartphone" value="<?php if(isset($productInProductDetail['rearCameraSmartphone']))
                                                {echo $productInProductDetail['rearCameraSmartphone'];} ?>"
                                                        aria-describedby="rearCameraSmartphoneHid"
                                                        placeholder="Nhập thông tin Camera sau">
                                                    <small id="rearCameraSmartphoneHid"
                                                        class="form-text text-muted">Camera sau không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="specialFeaturesSmartphone">Tính năng đặc biệt: </label>
                                                    <select class="form-control" name="specialFeaturesSmartphone"
                                                        id="special_features_smartphone">
                                                        <option value="">Chọn tính năng</option>
                                                        <option value="Hỗ trợ 5G" <?php if(isset($productInProductDetail['specialFeaturesSmartphone']) 
                                                && $productInProductDetail['specialFeaturesSmartphone'] == "Hỗ trợ 5G")
                                                {echo "selected";}else{echo "";} ?>>Hỗ trợ 5G</option>
                                                        <option value="Bảo mật khuông mặt" <?php if(isset($productInProductDetail['specialFeaturesSmartphone']) 
                                                && $productInProductDetail['specialFeaturesSmartphone'] == "Bảo mật khuông mặt")
                                                {echo "selected";}else{echo "";} ?>>Bảo mật khuông mặt</option>
                                                        <option value="Bảo mật vân tay" <?php if(isset($productInProductDetail['specialFeaturesSmartphone']) 
                                                && $productInProductDetail['specialFeaturesSmartphone'] == "Bảo mật vân tay")
                                                {echo "selected";}else{echo "";} ?>>Bảo mật vân tay</option>
                                                        <option value="Kháng nước và bụi" <?php if(isset($productInProductDetail['specialFeaturesSmartphone']) 
                                                && $productInProductDetail['specialFeaturesSmartphone'] == "Kháng nước và bụi")
                                                {echo "selected";}else{echo "";} ?>>Kháng nước và bụi</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="ifYes2" class="elementProduct" style="display:none">
                                        <p class="text-center mt-3"
                                            style="font-weight: bolder;font-variant: small-caps;color: red;">Các thông
                                            tin
                                            khác</p>
                                        <div class="row">
                                            <div class="col-6 detail1">
                                                <div class="form-group">
                                                    <input type="hidden" name="laptopID">
                                                </div>
                                                <div class="form-group">
                                                    <label for="brandLaptop">Hãng: </label>
                                                    <select class="form-control" name="brandLaptop" id="brandLaptop">
                                                        <option value="">Chọn hãng laptop</option>
                                                        <option value="Asus" <?php if(isset($productInProductDetail['brandLaptop']) 
                                                && $productInProductDetail['brandLaptop'] == "Asus")
                                                {echo "selected";}else{echo "";} ?>>Asus</option>
                                                        <option value="Acer" <?php if(isset($productInProductDetail['brandLaptop']) 
                                                && $productInProductDetail['brandLaptop'] == "Acer")
                                                {echo "selected";}else{echo "";} ?>>Acer</option>
                                                        <option value="Lenovo" <?php if(isset($productInProductDetail['brandLaptop']) 
                                                && $productInProductDetail['brandLaptop'] == "Lenovo")
                                                {echo "selected";}else{echo "";} ?>>Lenovo</option>
                                                        <option value="MSI" <?php if(isset($productInProductDetail['brandLaptop']) 
                                                && $productInProductDetail['brandLaptop'] == "MSI")
                                                {echo "selected";}else{echo "";} ?>>MSI</option>
                                                        <option value="Apple" <?php if(isset($productInProductDetail['brandLaptop']) 
                                                && $productInProductDetail['brandLaptop'] == "Apple")
                                                {echo "selected";}else{echo "";} ?>>Apple(Macbook)</option>
                                                        <option value="Dell" <?php if(isset($productInProductDetail['brandLaptop']) 
                                                && $productInProductDetail['brandLaptop'] == "Dell")
                                                {echo "selected";}else{echo "";} ?>>Dell</option>
                                                        <option value="HP" <?php if(isset($productInProductDetail['brandLaptop']) 
                                                && $productInProductDetail['brandLaptop'] == "HP")
                                                {echo "selected";}else{echo "";} ?>>HP</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cpuLaptop">CPU: </label>
                                                    <select class="form-control" name="cpuLaptop" id="cpuLaptop">
                                                        <option value="">Chọn CPU</option>
                                                        <option value="Intel Core i7" <?php if(isset($productInProductDetail['cpuLaptop']) 
                                                && $productInProductDetail['cpuLaptop'] == "Intel Core i7")
                                                {echo "selected";}else{echo "";} ?>>Intel Core i7</option>
                                                        <option value="Intel Core i5" <?php if(isset($productInProductDetail['cpuLaptop']) 
                                                && $productInProductDetail['cpuLaptop'] == "Intel Core i5")
                                                {echo "selected";}else{echo "";} ?>>Intel Core i5</option>
                                                        <option value="Intel Core i3" <?php if(isset($productInProductDetail['cpuLaptop']) 
                                                && $productInProductDetail['cpuLaptop'] == "Intel Core i3")
                                                {echo "selected";}else{echo "";} ?>>Intel Core i3</option>
                                                        <option value="Intel Celeron" <?php if(isset($productInProductDetail['cpuLaptop']) 
                                                && $productInProductDetail['cpuLaptop'] == "Intel Celeron")
                                                {echo "selected";}else{echo "";} ?>>Intel Celeron</option>
                                                        <option value="Intel Pentium" <?php if(isset($productInProductDetail['cpuLaptop']) 
                                                && $productInProductDetail['cpuLaptop'] == "Intel Pentium")
                                                {echo "selected";}else{echo "";} ?>>Intel Pentium</option>
                                                        <option value="AMD" <?php if(isset($productInProductDetail['cpuLaptop']) 
                                                && $productInProductDetail['cpuLaptop'] == "AMD")
                                                {echo "selected";}else{echo "";} ?>>AMD</option>
                                                        <option value="Apple M1" <?php if(isset($productInProductDetail['cpuLaptop']) 
                                                && $productInProductDetail['cpuLaptop'] == "Apple M1")
                                                {echo "selected";}else{echo "";} ?>>Apple M1</option>
                                                        <option value="Apple M1 Pro" <?php if(isset($productInProductDetail['cpuLaptop']) 
                                                && $productInProductDetail['cpuLaptop'] == "Apple M1 Pro")
                                                {echo "selected";}else{echo "";} ?>>Apple M1 Pro</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ramLaptop">RAM: </label>
                                                    <select class="form-control" name="ramLaptop" id="ramLaptop">
                                                        <option value="">Chọn dung lượng RAM</option>
                                                        <option value="4GB" <?php if(isset($productInProductDetail['ramLaptop']) 
                                                && $productInProductDetail['ramLaptop'] == "4GB")
                                                {echo "selected";}else{echo "";} ?>>4GB</option>
                                                        <option value="8GB" <?php if(isset($productInProductDetail['ramLaptop']) 
                                                && $productInProductDetail['ramLaptop'] == "8GB")
                                                {echo "selected";}else{echo "";} ?>>8GB</option>
                                                        <option value="16GB" <?php if(isset($productInProductDetail['ramLaptop']) 
                                                && $productInProductDetail['ramLaptop'] == "16GB")
                                                {echo "selected";}else{echo "";} ?>>16GB</option>
                                                        <option value="32GB" <?php if(isset($productInProductDetail['ramLaptop']) 
                                                && $productInProductDetail['ramLaptop'] == "32GB")
                                                {echo "selected";}else{echo "";} ?>>32GB</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="hardDriverLaptop">Ổ cứng: </label>
                                                    <select class="form-control" name="hardDriverLaptop" id="">
                                                        <option value="">Chọn dung lượng ổ cứng</option>
                                                        <option value="SSD 128GB" <?php if(isset($productInProductDetail['hardDriverLaptop']) 
                                                && $productInProductDetail['hardDriverLaptop'] == "SSD 128GB")
                                                {echo "selected";}else{echo "";} ?>>SSD 128GB</option>
                                                        <option value="SSD 256GB" <?php if(isset($productInProductDetail['hardDriverLaptop']) 
                                                && $productInProductDetail['hardDriverLaptop'] == "SSD 256GB")
                                                {echo "selected";}else{echo "";} ?>>SSD 256GB</option>
                                                        <option value="SSD 512GB" <?php if(isset($productInProductDetail['hardDriverLaptop']) 
                                                && $productInProductDetail['hardDriverLaptop'] == "SSD 512GB")
                                                {echo "selected";}else{echo "";} ?>>SSD 512GB</option>
                                                        <option value="SSD 1TB" <?php if(isset($productInProductDetail['hardDriverLaptop']) 
                                                && $productInProductDetail['hardDriverLaptop'] == "SSD 1TB")
                                                {echo "selected";}else{echo "";} ?>>SSD 1TB</option>
                                                        <option value="SSD 2TB" <?php if(isset($productInProductDetail['hardDriverLaptop']) 
                                                && $productInProductDetail['hardDriverLaptop'] == "SSD 2TB")
                                                {echo "selected";}else{echo "";} ?>>SSD 2TB</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="graphicsCardLaptop">Card đồ họa: </label>
                                                    <select class="form-control" name="graphicsCardLaptop"
                                                        id="graphicsCardLaptop">
                                                        <option value="">Chọn loại card</option>
                                                        <option value="Radeon RX" <?php if(isset($productInProductDetail['graphicsCardLaptop']) 
                                                && $productInProductDetail['graphicsCardLaptop'] == "Radeon RX")
                                                {echo "selected";}else{echo "";} ?>>Radeon RX</option>
                                                        <option value="GeForce Quadro" <?php if(isset($productInProductDetail['graphicsCardLaptop']) 
                                                && $productInProductDetail['graphicsCardLaptop'] == "GeForce Quadro")
                                                {echo "selected";}else{echo "";} ?>>GeForce Quadro</option>
                                                        <option value="GeForce MX" <?php if(isset($productInProductDetail['graphicsCardLaptop']) 
                                                && $productInProductDetail['graphicsCardLaptop'] == "GeForce MX")
                                                {echo "selected";}else{echo "";} ?>>GeForce MX</option>
                                                        <option value="GeForce RTX" <?php if(isset($productInProductDetail['graphicsCardLaptop']) 
                                                && $productInProductDetail['graphicsCardLaptop'] == "GeForce RTX")
                                                {echo "selected";}else{echo "";} ?>>GeForce RTX</option>
                                                        <option value="GeForce GTX" <?php if(isset($productInProductDetail['graphicsCardLaptop']) 
                                                && $productInProductDetail['graphicsCardLaptop'] == "GeForce GTX")
                                                {echo "selected";}else{echo "";} ?>>GeForce GTX</option>
                                                        <option value="Card tích hợp" <?php if(isset($productInProductDetail['graphicsCardLaptop']) 
                                                && $productInProductDetail['graphicsCardLaptop'] == "Card tích hợp")
                                                {echo "selected";}else{echo "";} ?>>Card tích hợp</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizeScreenLaptop">Màn hình: </label>
                                                    <input type="text" class="form-control" name="sizeScreenLaptop"
                                                        id="sizeScreenLaptop" value="<?php if(isset($productInProductDetail['sizeScreenLaptop']))
                                                {echo $productInProductDetail['sizeScreenLaptop'];} ?>"
                                                        aria-describedby="sizeScreenLaptopHid"
                                                        placeholder="Nhập kích thước màn hình">
                                                    <small id="sizeScreenLaptopHid" class="form-text text-muted">Màn
                                                        hình không được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="screenResolutionLaptop">Độ phân giải: </label>
                                                    <select class="form-control" name="screenResolutionLaptop"
                                                        id="screenResolutionLaptop">
                                                        <option value="">Chọn độ phân giải màn hình</option>
                                                        <option value="HD" <?php if(isset($productInProductDetail['screenResolutionLaptop']) 
                                                && $productInProductDetail['screenResolutionLaptop'] == "HD")
                                                {echo "selected";}else{echo "";} ?>>HD</option>
                                                        <option value="Full HD" <?php if(isset($productInProductDetail['screenResolutionLaptop']) 
                                                && $productInProductDetail['screenResolutionLaptop'] == "Full HD")
                                                {echo "selected";}else{echo "";} ?>>Full HD</option>
                                                        <option value="Retina" <?php if(isset($productInProductDetail['screenResolutionLaptop']) 
                                                && $productInProductDetail['screenResolutionLaptop'] == "Retina")
                                                {echo "selected";}else{echo "";} ?>>Retina</option>
                                                        <option value="2K" <?php if(isset($productInProductDetail['screenResolutionLaptop']) 
                                                && $productInProductDetail['screenResolutionLaptop'] == "2K")
                                                {echo "selected";}else{echo "";} ?>>2K</option>
                                                        <option value="4K" <?php if(isset($productInProductDetail['screenResolutionLaptop']) 
                                                && $productInProductDetail['screenResolutionLaptop'] == "4K")
                                                {echo "selected";}else{echo "";} ?>>4K</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 detail2">
                                                <div class="form-group">
                                                    <label for="sweepFrequencyLaptop">Tần số quét: </label>
                                                    <input type="text" class="form-control" name="sweepFrequencyLaptop"
                                                        id="sweepFrequencyLaptop" value="<?php if(isset($productInProductDetail['sweepFrequencyLaptop']))
                                                {echo $productInProductDetail['sweepFrequencyLaptop'];} ?>"
                                                        aria-describedby="sweepFrequencyLaptopHid"
                                                        placeholder="Nhập thông tin tần số quét">
                                                    <small id="sweepFrequencyLaptopHid" class="form-text text-muted">Tần
                                                        số quét không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="usageNeedLaptop">Nhu cầu sử dụng: </label>
                                                    <select class="form-control" name="usageNeedLaptop"
                                                        id="usageNeedLaptop">
                                                        <option value="">Chọn nhu cầu</option>
                                                        <option value="Laptop Gaming" <?php if(isset($productInProductDetail['usageNeedLaptop']) 
                                                && $productInProductDetail['usageNeedLaptop'] == "Laptop Gaming")
                                                {echo "selected";}else{echo "";} ?>>Laptop Gaming</option>
                                                        <option value="Học tập - Văn phòng" <?php if(isset($productInProductDetail['usageNeedLaptop']) 
                                                && $productInProductDetail['usageNeedLaptop'] == "Học tập - Văn phòng")
                                                {echo "selected";}else{echo "";} ?>>Học tập - Văn phòng</option>
                                                        <option value="Đồ họa - Kỹ thuật" <?php if(isset($productInProductDetail['usageNeedLaptop']) 
                                                && $productInProductDetail['usageNeedLaptop'] == "Đồ họa - Kỹ thuật")
                                                {echo "selected";}else{echo "";} ?>>Đồ họa - Kỹ thuật</option>
                                                        <option value="Mỏng nhẹ" <?php if(isset($productInProductDetail['usageNeedLaptop']) 
                                                && $productInProductDetail['usageNeedLaptop'] == "Mỏng nhẹ")
                                                {echo "selected";}else{echo "";} ?>>Mỏng nhẹ</option>
                                                        <option value="Cao cấp - Sang trọng" <?php if(isset($productInProductDetail['usageNeedLaptop']) 
                                                && $productInProductDetail['usageNeedLaptop'] == "Cao cấp - Sang trọng")
                                                {echo "selected";}else{echo "";} ?>>Cao cấp - Sang trọng</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="operatingSystemLaptop">Hệ điều hành: </label>
                                                    <input type="text" class="form-control" name="operatingSystemLaptop"
                                                        id="operatingSystemLaptop" value="<?php if(isset($productInProductDetail['operatingSystemLaptop']))
                                                {echo $productInProductDetail['operatingSystemLaptop'];} ?>"
                                                        aria-describedby="operatingSystemLaptopHid"
                                                        placeholder="Nhập thông tin hệ điều hành">
                                                    <small id="operatingSystemLaptopHid" class="form-text text-muted">Hệ
                                                        điều hành không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizeLaptop">Kích thước: </label>
                                                    <input type="text" class="form-control" name="sizeLaptop"
                                                        id="sizeLaptop" value="<?php if(isset($productInProductDetail['sizeLaptop']))
                                                {echo $productInProductDetail['sizeLaptop'];} ?>"
                                                        aria-describedby="sizeLaptopHid" placeholder="Nhập kích thước">
                                                    <small id="sizeLaptopHid" class="form-text text-muted">Kích thước
                                                        không được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="weightLaptop">Trọng lượng: </label>
                                                    <input type="text" class="form-control" name="weightLaptop"
                                                        id="weightLaptop" value="<?php if(isset($productInProductDetail['weightLaptop']))
                                                {echo $productInProductDetail['weightLaptop'];} ?>"
                                                        aria-describedby="weightLaptopHid"
                                                        placeholder="Nhập trọng lượng">
                                                    <small id="weightLaptopHid" class="form-text text-muted">Trọng lượng
                                                        không được để trống!!</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ifYes3" class="elementProduct" style="display:none">
                                        <p class="text-center mt-3"
                                            style="font-weight: bolder;font-variant: small-caps;color: red;">Các thông
                                            tin
                                            khác</p>
                                        <div class="row">
                                            <div class="col-6 detail1">
                                                <div class="form-group">
                                                    <input type="hidden" name="tabletID">
                                                </div>
                                                <div class="form-group">
                                                    <label for="brandTablet">Hãng: </label>
                                                    <select class="form-control" name="brandTablet" id="brandTablet">
                                                        <option value="">Chọn hãng Tablet</option>
                                                        <option value="Apple" <?php if(isset($productInProductDetail['brandTablet']) 
                                                && $productInProductDetail['brandTablet'] == "Apple")
                                                {echo "selected";}else{echo "";} ?>>iPad</option>
                                                        <option value="Samsum" <?php if(isset($productInProductDetail['brandTablet']) 
                                                && $productInProductDetail['brandTablet'] == "Samsum")
                                                {echo "selected";}else{echo "";} ?>>Samsum</option>
                                                        <option value="Xiaomi" <?php if(isset($productInProductDetail['brandTablet']) 
                                                && $productInProductDetail['brandTablet'] == "Xiaomi")
                                                {echo "selected";}else{echo "";} ?>>Xiaomi</option>
                                                        <option value="Lenovo" <?php if(isset($productInProductDetail['brandTablet']) 
                                                && $productInProductDetail['brandTablet'] == "Lenovo")
                                                {echo "selected";}else{echo "";} ?>>Lenovo</option>
                                                        <option value="Huawei" <?php if(isset($productInProductDetail['brandTablet']) 
                                                && $productInProductDetail['brandTablet'] == "Huawei")
                                                {echo "selected";}else{echo "";} ?>>Huawei</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ramTablet">Ram:</label>
                                                    <select class="form-control" name="ramTablet" id="ramTablet">
                                                        <option value="">Chọn ram</option>
                                                        <option value="2GB" <?php if(isset($productInProductDetail['ramTablet']) 
                                                && $productInProductDetail['ramTablet'] == "2GB")
                                                {echo "selected";}else{echo "";} ?>>2GB</option>
                                                        <option value="3GB" <?php if(isset($productInProductDetail['ramTablet']) 
                                                && $productInProductDetail['ramTablet'] == "3GB")
                                                {echo "selected";}else{echo "";} ?>>3GB</option>
                                                        <option value="4GB" <?php if(isset($productInProductDetail['ramTablet']) 
                                                && $productInProductDetail['ramTablet'] == "4GB")
                                                {echo "selected";}else{echo "";} ?>>4GB</option>
                                                        <option value="6GB" <?php if(isset($productInProductDetail['ramTablet']) 
                                                && $productInProductDetail['ramTablet'] == "6GB")
                                                {echo "selected";}else{echo "";} ?>>6GB</option>
                                                        <option value="8GB" <?php if(isset($productInProductDetail['ramTablet']) 
                                                && $productInProductDetail['ramTablet'] == "8GB")
                                                {echo "selected";}else{echo "";} ?>>8GB</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="internalMemoryTablet">Bộ nhớ trong: </label>
                                                    <select class="form-control" name="internalMemoryTablet"
                                                        id="internalMemoryTablet">
                                                        <option value="">Chọn bộ nhớ trong</optionv>
                                                        <option value="8GB" <?php if(isset($productInProductDetail['internalMemoryTablet']) 
                                                && $productInProductDetail['internalMemoryTablet'] == "8GB")
                                                {echo "selected";}else{echo "";} ?>>8GB</option>
                                                        <option value="16GB" <?php if(isset($productInProductDetail['internalMemoryTablet']) 
                                                && $productInProductDetail['internalMemoryTablet'] == "16GB")
                                                {echo "selected";}else{echo "";} ?>>16GB</option>
                                                        <option value="32GB" <?php if(isset($productInProductDetail['internalMemoryTablet']) 
                                                && $productInProductDetail['internalMemoryTablet'] == "32GB")
                                                {echo "selected";}else{echo "";} ?>>32GB</option>
                                                        <option value="64GB" <?php if(isset($productInProductDetail['internalMemoryTablet']) 
                                                && $productInProductDetail['internalMemoryTablet'] == "64GB")
                                                {echo "selected";}else{echo "";} ?>>64GB</option>
                                                        <option value="128GB" <?php if(isset($productInProductDetail['internalMemoryTablet']) 
                                                && $productInProductDetail['internalMemoryTablet'] == "128GB")
                                                {echo "selected";}else{echo "";} ?>>128GB</option>
                                                        <option value="256GB" <?php if(isset($productInProductDetail['internalMemoryTablet']) 
                                                && $productInProductDetail['internalMemoryTablet'] == "256GB")
                                                {echo "selected";}else{echo "";} ?>>256GB</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="screenTablet">Màn hình: </label>
                                                    <input type="text" class="form-control" name="screenTablet"
                                                        id="screenTablet" value="<?php if(isset($productInProductDetail['screenTablet']))
                                                {echo $productInProductDetail['screenTablet'];} ?>"
                                                        aria-describedby="screenTabletHid"
                                                        placeholder="Nhập thông tin màn hình">
                                                    <small id="screenTabletHid" class="form-text text-muted">Màn hình
                                                        không được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="operatingSystemTablet">Hệ điều hành: </label>
                                                    <input type="text" class="form-control" name="operatingSystemTablet"
                                                        id="operatingSystemTablet" value="<?php if(isset($productInProductDetail['operatingSystemTablet']))
                                                {echo $productInProductDetail['operatingSystemTablet'];} ?>"
                                                        aria-describedby="operatingSystemTabletHid"
                                                        placeholder="Nhập hệ điều hành">
                                                    <small id="operatingSystemTabletHid" class="form-text text-muted">Hệ
                                                        điều hành không được để
                                                        trống!!</small>
                                                </div>
                                            </div>
                                            <div class="col-6 detail2">
                                                <div class="form-group">
                                                    <label for="chipTablet">Chip: </label>
                                                    <input type="text" class="form-control" name="chipTablet"
                                                        id="chipTablet" value="<?php if(isset($productInProductDetail['chipTablet']))
                                                {echo $productInProductDetail['chipTablet'];} ?>"
                                                        aria-describedby="chipTabletHid"
                                                        placeholder="Nhập thông tin chip">
                                                    <small id="chipTabletHid" class="form-text text-muted">Chip không
                                                        được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="frontCameraTablet">Camera trước: </label>
                                                    <input type="text" class="form-control" name="frontCameraTablet"
                                                        id="frontCameraTablet" value="<?php if(isset($productInProductDetail['frontCameraTablet']))
                                                {echo $productInProductDetail['frontCameraTablet'];} ?>"
                                                        aria-describedby="frontCameraTabletHid "
                                                        placeholder="Nhập thông tin camera trước">
                                                    <small id="frontCameraTabletHid" class="form-text text-muted">Camera
                                                        trước không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rearCameraTablet">Camera sau: </label>
                                                    <input type="text" class="form-control" name="rearCameraTablet"
                                                        id="rearCameraTablet" value="<?php if(isset($productInProductDetail['rearCameraTablet']))
                                                {echo $productInProductDetail['rearCameraTablet'];} ?>"
                                                        aria-describedby="rearCameraTabletHid"
                                                        placeholder="Nhập thông tin Camera sau">
                                                    <small id="rearCameraTabletHid" class="form-text text-muted">Camera
                                                        sau không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pinTablet">PIN: </label>
                                                    <input type="text" class="form-control" name="pinTablet"
                                                        id="pinTablet" value="<?php if(isset($productInProductDetail['pinTablet']))
                                                {echo $productInProductDetail['pinTablet'];} ?>"
                                                        aria-describedby="pinTabletHid"
                                                        placeholder="Nhập dung lượng PIN">
                                                    <small id="pinTabletHid" class="form-text text-muted">PIN không được
                                                        để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="chargerTablet">Sạc: </label>
                                                    <input type="text" class="form-control" name="chargerTablet"
                                                        id="chargerTablet" value="<?php if(isset($productInProductDetail['chargerTablet']))
                                                {echo $productInProductDetail['chargerTablet'];} ?>"
                                                        aria-describedby="chargerTabletHid"
                                                        placeholder="Nhập thông tin sạc">
                                                    <small id="chargerTabletHid" class="form-text text-muted">Sạc không
                                                        được để trống!!</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ifYes4" class="elementProduct" style="display:none">
                                        <p class="text-center mt-3"
                                            style="font-weight: bolder;font-variant: small-caps;color: red;">Các thông
                                            tin
                                            khác</p>
                                        <div class="row">
                                            <div class="col-6 detail1">
                                                <div class="form-group">
                                                    <input type="hidden" name="PCID">
                                                </div>
                                                <div class="form-group">
                                                    <label for="brandPC">Hãng: </label>
                                                    <select class="form-control" name="brandPC" id="brandPC">
                                                        <option value="">Chọn hãng PC</option>
                                                        <option value="Apple" <?php if(isset($productInProductDetail['brandPC']) 
                                                && $productInProductDetail['brandPC'] == "Apple")
                                                {echo "selected";}else{echo "";} ?>>iMac</option>
                                                        <option value="Lenovo" <?php if(isset($productInProductDetail['brandPC']) 
                                                && $productInProductDetail['brandPC'] == "Lenovo")
                                                {echo "selected";}else{echo "";} ?>>Lenovo</option>
                                                        <option value="HP" <?php if(isset($productInProductDetail['brandPC']) 
                                                && $productInProductDetail['brandPC'] == "HP")
                                                {echo "selected";}else{echo "";} ?>>HP</option>
                                                        <option value="Asus" <?php if(isset($productInProductDetail['brandPC']) 
                                                && $productInProductDetail['brandPC'] == "Asus")
                                                {echo "selected";}else{echo "";} ?>>Asus</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cpuPC">CPU: </label>
                                                    <select class="form-control" name="cpuPC" id="cpuPC">
                                                        <option value="">Chọn CPU</option>
                                                        <option value="Intel Celebron" <?php if(isset($productInProductDetail['cpuPC']) 
                                                && $productInProductDetail['cpuPC'] == "Intel Celebron")
                                                {echo "selected";}else{echo "";} ?>>Intel Celebron</option>
                                                        <option value="Intel Pentium" <?php if(isset($productInProductDetail['cpuPC']) 
                                                && $productInProductDetail['cpuPC'] == "Intel Pentium")
                                                {echo "selected";}else{echo "";} ?>>Intel Pentium</option>
                                                        <option value="Intel Core i3" <?php if(isset($productInProductDetail['cpuPC']) 
                                                && $productInProductDetail['cpuPC'] == "Intel Core i3")
                                                {echo "selected";}else{echo "";} ?>>Itel Core i3</option>
                                                        <option value="Intel Core i5" <?php if(isset($productInProductDetail['cpuPC']) 
                                                && $productInProductDetail['cpuPC'] == "Intel Core i5")
                                                {echo "selected";}else{echo "";} ?>>Itel Core i5</option>
                                                        <option value="Intel Core i7" <?php if(isset($productInProductDetail['cpuPC']) 
                                                && $productInProductDetail['cpuPC'] == "Intel Core i7")
                                                {echo "selected";}else{echo "";} ?>>Itel Core i7</option>
                                                        <option value="AMD Ryzen 3" <?php if(isset($productInProductDetail['cpuPC']) 
                                                && $productInProductDetail['cpuPC'] == "AMD Ryzen 3")
                                                {echo "selected";}else{echo "";} ?>>AMD Ryzen 3</option>
                                                        <option value="AMD Ryzen 5" <?php if(isset($productInProductDetail['cpuPC']) 
                                                && $productInProductDetail['cpuPC'] == "AMD Ryzen 5")
                                                {echo "selected";}else{echo "";} ?>>AMD Ryzen 5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ramPC">RAM: </label>
                                                    <select class="form-control" name="ramPC" id="ramPC">
                                                        <option value="">Chọn RAM</option>
                                                        <option value="4GB" <?php if(isset($productInProductDetail['ramPC']) 
                                                && $productInProductDetail['ramPC'] == "4GB")
                                                {echo "selected";}else{echo "";} ?>>4GB</option>
                                                        <option value="8GB" <?php if(isset($productInProductDetail['ramPC']) 
                                                && $productInProductDetail['ramPC'] == "8GB")
                                                {echo "selected";}else{echo "";} ?>>8GB</option>
                                                        <option value="16GB" <?php if(isset($productInProductDetail['ramPC']) 
                                                && $productInProductDetail['ramPC'] == "16GB")
                                                {echo "selected";}else{echo "";} ?>>16GB</option>
                                                        <option value="32GB" <?php if(isset($productInProductDetail['ramPC']) 
                                                && $productInProductDetail['ramPC'] == "32GB")
                                                {echo "selected";}else{echo "";} ?>>32GB</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="hardDriverPC">Ổ cứng: </label>
                                                    <select class="form-control" name="hardDriverPC" id="hardDriverPC">
                                                        <option value="">Chọn ổ cứng</option>
                                                        <option value="SSD 512GB" <?php if(isset($productInProductDetail['hardDriverPC']) 
                                                && $productInProductDetail['hardDriverPC'] == "SSD 512GB")
                                                {echo "selected";}else{echo "";} ?>>SSD 512GB</option>
                                                        <option value="SSD 256GB" <?php if(isset($productInProductDetail['hardDriverPC']) 
                                                && $productInProductDetail['hardDriverPC'] == "SSD 256GB")
                                                {echo "selected";}else{echo "";} ?>>SSD 256GB</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 detail2">
                                                <div class="form-group">
                                                    <label for="graphicsCardPC">Card đồ họa: </label>
                                                    <select class="form-control" name="graphicsCardPC"
                                                        id="graphicsCardPC">
                                                        <option value="">Chọn loại Card đồ họa</option>
                                                        <option value="Nvidia geforce" <?php if(isset($productInProductDetail['graphicsCardPC']) 
                                                && $productInProductDetail['graphicsCardPC'] == "Nvidia geforce")
                                                {echo "selected";}else{echo "";} ?>>Nvidia geforce</option>
                                                        <option value="AMD Radeon" <?php if(isset($productInProductDetail['graphicsCardPC']) 
                                                && $productInProductDetail['graphicsCardPC'] == "AMD Radeon")
                                                {echo "selected";}else{echo "";} ?>>AMD Radeon</option>
                                                        <option value="Card onboard" <?php if(isset($productInProductDetail['graphicsCardPC']) 
                                                && $productInProductDetail['graphicsCardPC'] == "Card onboard")
                                                {echo "selected";}else{echo "";} ?>>Card onboard</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="usageNeedPC">Nhu cầu sử dụng: </label>
                                                    <select class="form-control" name="usageNeedPC" id="usageNeedPC">
                                                        <option value="">Chọn nhu cầu</option>
                                                        <option value="PC Gaming" <?php if(isset($productInProductDetail['usageNeedPC']) 
                                                && $productInProductDetail['usageNeedPC'] == "PC Gaming")
                                                {echo "selected";}else{echo "";} ?>>PC Gaming</option>
                                                        <option value="PC Văn phòng" <?php if(isset($productInProductDetail['usageNeedPC']) 
                                                && $productInProductDetail['usageNeedPC'] == "PC Văn phòng")
                                                {echo "selected";}else{echo "";} ?>>PC Văn phòng</option>
                                                        <option value="PC Đồ họa" <?php if(isset($productInProductDetail['usageNeedPC']) 
                                                && $productInProductDetail['usageNeedPC'] == "PC Đồ họa")
                                                {echo "selected";}else{echo "";} ?>>PC Đồ họa</option>
                                                        <option value="PC Render 3D" <?php if(isset($productInProductDetail['usageNeedPC']) 
                                                && $productInProductDetail['usageNeedPC'] == "PC Render 3D")
                                                {echo "selected";}else{echo "";} ?>>PC Render 3D</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizePC">Kích thước: </label>
                                                    <input type="text" class="form-control" name="sizePC" id="sizePC"
                                                        aria-describedby="sizePCHid" value="<?php if(isset($productInProductDetail['sizePC']))
                                                {echo $productInProductDetail['sizePC'];} ?>"
                                                        placeholder="Nhập kích thước">
                                                    <small id="sizePCHid" class="form-text text-muted">Kích thước không
                                                        được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="weightPC">Trọng lượng: </label>
                                                    <input type="text" class="form-control" name="weightPC"
                                                        id="weightPC" aria-describedby="weightPC" value="<?php if(isset($productInProductDetail['weightPC']))
                                                {echo $productInProductDetail['weightPC'];} ?>"
                                                        placeholder="Nhập trọng lượng">
                                                    <small id="weightPC" class="form-text text-muted">Trọng lượng không
                                                        được để trống!!</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ifYes5" class="elementProduct" style="display:none">
                                        <p class="text-center mt-3"
                                            style="font-weight: bolder;font-variant: small-caps;color: red;">Các thông
                                            tin
                                            khác</p>
                                        <div class="row">
                                            <div class="col-6 detail1">
                                                <input type="hidden" name="watchID">
                                                <div class="form-group">
                                                    <label for="brandWatch">Hãng Watch: </label>
                                                    <select class="form-control" name="brandWatch" id="brandWatch">
                                                        <option value="">Chọn hãng của Watch</option>
                                                        <option value="Apple" <?php if(isset($productInProductDetail['brandWatch']) 
                                                && $productInProductDetail['brandWatch'] == "Apple")
                                                {echo "selected";}else{echo "";} ?>>Apple Watch</option>
                                                        <option value="Samsum" <?php if(isset($productInProductDetail['brandWatch']) 
                                                && $productInProductDetail['brandWatch'] == "Samsum")
                                                {echo "selected";}else{echo "";} ?>>Samsum</option>
                                                        <option value="Xiaomi" <?php if(isset($productInProductDetail['brandWatch']) 
                                                && $productInProductDetail['brandWatch'] == "Xiaomi")
                                                {echo "selected";}else{echo "";} ?>>Xiaomi</option>
                                                        <option value="Oppo" <?php if(isset($productInProductDetail['brandWatch']) 
                                                && $productInProductDetail['brandWatch'] == "Oppo")
                                                {echo "selected";}else{echo "";} ?>>Oppo</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="typeWatch">Loại Watch: </label>
                                                    <select class="form-control" name="typeWatch" id="typeWatch">
                                                        <option value="">Chọn loại đồng hồ</option>
                                                        <option value="Đồng hồ thông minh" <?php if(isset($productInProductDetail['typeWatch']) 
                                                && $productInProductDetail['typeWatch'] == "Đồng hồ thông minh")
                                                {echo "selected";}else{echo "";} ?>>Đồng hồ thông minh</option>
                                                        <option value="Đồng hồ thể thao chuyên nghiệp" <?php if(isset($productInProductDetail['typeWatch']) 
                                                && $productInProductDetail['typeWatch'] == "Đồng hồ thể thao chuyên nghiệp")
                                                {echo "selected";}else{echo "";} ?>>Đồng hồ thể thao chuyên nghiệp
                                                        </option>
                                                        <option value="Đồng hồ thông minh định vị trẻ em" <?php if(isset($productInProductDetail['typeWatch']) 
                                                && $productInProductDetail['typeWatch'] == "Đồng hồ thông minh định vị trẻ em")
                                                {echo "selected";}else{echo "";} ?>>Đồng hồ thông minh định vị trẻ em
                                                        </option>
                                                        <option value="Đồng hồ thời trang, sành điệu" <?php if(isset($productInProductDetail['typeWatch']) 
                                                && $productInProductDetail['typeWatch'] == "Đồng hồ thời trang, sành điệu")
                                                {echo "selected";}else{echo "";} ?>>Đồng hồ thời trang, sành điệu
                                                        </option>
                                                        <option value="Đồng hồ đa tiện ích" <?php if(isset($productInProductDetail['typeWatch']) 
                                                && $productInProductDetail['typeWatch'] == "Đồng hồ đa tiện ích")
                                                {echo "selected";}else{echo "";} ?>>Đồng hồ đa tiện ích</option>
                                                        <option value="Vòng tay thông minh" <?php if(isset($productInProductDetail['typeWatch']) 
                                                && $productInProductDetail['typeWatch'] == "Vòng tay thông minh")
                                                {echo "selected";}else{echo "";} ?>>Vòng tay thông minh</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="faceShapeWatch">Hình dáng mặt: </label>
                                                    <select class="form-control" name="faceShapeWatch"
                                                        id="faceShapeWatch">
                                                        <option value="">Chọn hình dáng mặt đồng hồ</option>
                                                        <option value="Chữ nhật" <?php if(isset($productInProductDetail['faceShapeWatch']) 
                                                && $productInProductDetail['faceShapeWatch'] == "Chữ nhật")
                                                {echo "selected";}else{echo "";} ?>>Chữ nhật</option>
                                                        <option value="Vuông" <?php if(isset($productInProductDetail['faceShapeWatch']) 
                                                && $productInProductDetail['faceShapeWatch'] == "Vuông")
                                                {echo "selected";}else{echo "";} ?>>Vuông</option>
                                                        <option value="Tròn" <?php if(isset($productInProductDetail['faceShapeWatch']) 
                                                && $productInProductDetail['faceShapeWatch'] == "Tròn")
                                                {echo "selected";}else{echo "";} ?>>Tròn</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bandMaterialWatch">Chất liệu dây: </label>
                                                    <select class="form-control" name="bandMaterialWatch"
                                                        id="bandMaterialWatch">
                                                        <option value="">Chọn chất liệu dây đồng hồ</option>
                                                        <option value="Da" <?php if(isset($productInProductDetail['bandMaterialWatch']) 
                                                && $productInProductDetail['bandMaterialWatch'] == "Da")
                                                {echo "selected";}else{echo "";} ?>>Da</option>
                                                        <option value="Silicone" <?php if(isset($productInProductDetail['bandMaterialWatch']) 
                                                && $productInProductDetail['bandMaterialWatch'] == "Silicone")
                                                {echo "selected";}else{echo "";} ?>>Silicone</option>
                                                        <option value="Thép không gỉ" <?php if(isset($productInProductDetail['bandMaterialWatch']) 
                                                && $productInProductDetail['bandMaterialWatch'] == "Thép không gỉ")
                                                {echo "selected";}else{echo "";} ?>>Thép không gỉ</option>
                                                        <option value="Vải" <?php if(isset($productInProductDetail['bandMaterialWatch']) 
                                                && $productInProductDetail['bandMaterialWatch'] == "Vải")
                                                {echo "selected";}else{echo "";} ?>>Vải</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 detail2">
                                                <div class="form-group">
                                                    <label for="screenWatch">Màn hình: </label>
                                                    <input type="text" class="form-control" name="screenWatch" value="<?php if(isset($productInProductDetail['screenWatch']))
                                                {echo $productInProductDetail['screenWatch'];} ?>" id="screenWatch"
                                                        aria-describedby="screenWatchHid"
                                                        placeholder="Nhập thông tin màn hình Watch">
                                                    <small id="screenWatchHid" class="form-text text-muted">Màn hình
                                                        không được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizeScreenWatch">Kích thước màn hình: </label>
                                                    <input type="text" class="form-control" name="sizeScreenWatch"
                                                        value="<?php if(isset($productInProductDetail['sizeScreenWatch']))
                                                {echo $productInProductDetail['sizeScreenWatch'];} ?>"
                                                        id="sizeScreenWatch" aria-describedby="sizeScreenWatch"
                                                        placeholder="Nhập kích thước màn hình Watch">
                                                    <small id="sizeScreenWatch" class="form-text text-muted">Kích thước
                                                        màn hình không được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="batteryLifeWatch">Thời lượng PIN: </label>
                                                    <input type="text" class="form-control" name="batteryLifeWatch"
                                                        value="<?php if(isset($productInProductDetail['batteryLifeWatch']))
                                                {echo $productInProductDetail['batteryLifeWatch'];} ?>"
                                                        id="batteryLifeWatch" aria-describedby="batteryLifeWatchHid"
                                                        placeholder="Nhập thời lượng PIN sử dụng Watch">
                                                    <small id="batteryLifeWatchHid" class="form-text text-muted">Thời
                                                        lượng PIN không được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizeBatteryWatch">Dung lượng PIN: </label>
                                                    <input type="text" class="form-control" name="sizeBatteryWatch"
                                                        value="<?php if(isset($productInProductDetail['sizeBatteryWatch']))
                                                {echo $productInProductDetail['sizeBatteryWatch'];} ?>"
                                                        id="sizeBatteryWatch" aria-describedby="sizeBatteryWatchHid"
                                                        placeholder="Nhập dung lượng PIN Watch">
                                                    <small id="sizeBatteryWatchHid" class="form-text text-muted">Dung
                                                        lượng PIN không được để trống!!</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ifYes6" class="elementProduct" style="display:none">
                                        <p class="text-center mt-3"
                                            style="font-weight: bolder;font-variant: small-caps;color: red;">Các thông
                                            tin
                                            khác</p>
                                        <div class="row">
                                            <div class="col-6 detail1">
                                                <input type="hidden" name="accessoryID">
                                                <div class="form-group">
                                                    <label for="typeAccessory">Loại phụ kiện: </label>
                                                    <select class="form-control" name="typeAccessory"
                                                        id="typeAccessory">
                                                        <option value="">Chọn loại phụ kiện</option>
                                                        <option value="Di động" <?php if(isset($productInProductDetail['typeAccessory']) 
                                                && $productInProductDetail['typeAccessory'] == "Di động")
                                                {echo "selected";}else{echo "";} ?>>Phụ kiện di động</option>
                                                        <option value="Laptop" <?php if(isset($productInProductDetail['typeAccessory']) 
                                                && $productInProductDetail['typeAccessory'] == "Laptop")
                                                {echo "selected";}else{echo "";} ?>>Phụ kiện laptop</option>
                                                        <option value="PC" <?php if(isset($productInProductDetail['typeAccessory']) 
                                                && $productInProductDetail['typeAccessory'] == "PC")
                                                {echo "selected";}else{echo "";} ?>>Phụ kiện PC</option>
                                                        <option value="Thiết bị âm thanh" <?php if(isset($productInProductDetail['typeAccessory']) 
                                                && $productInProductDetail['typeAccessory'] == "Thiết bị âm thanh")
                                                {echo "selected";}else{echo "";} ?>>Thiết bị âm thanh</option>
                                                        <option value="Thiết bị lưu trữ" <?php if(isset($productInProductDetail['typeAccessory']) 
                                                && $productInProductDetail['typeAccessory'] == "Thiết bị lưu trữ")
                                                {echo "selected";}else{echo "";} ?>>Thiết bị lưu trữ</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="typeProductOfAccessory">Loại sản phẩm của phụ kiện:
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        name="typeProductOfAccessory" value="<?php if(isset($productInProductDetail['typeProductOfAccessory']))
                                                {echo $productInProductDetail['typeProductOfAccessory'];} ?>"
                                                        id="typeProductOfAccessory"
                                                        aria-describedby="typeProductOfAccessoryHid"
                                                        placeholder="Ví dụ: Bàn phím">
                                                    <small id="typeProductOfAccessoryHid"
                                                        class="form-text text-muted">Loại sản phẩm của phụ kiện không
                                                        được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="brandAccessory">Hãng Phụ kiện: </label>
                                                    <select class="form-control" name="brandAccessory"
                                                        id="brandAccessory">
                                                        <option value="">Chọn hãng phụ kiện</option>
                                                        <option value="Apple" <?php if(isset($productInProductDetail['brandAccessory']) 
                                                && $productInProductDetail['brandAccessory'] == "Apple")
                                                {echo "selected";}else{echo "";} ?>>Apple</option>
                                                        <option value="Beats" <?php if(isset($productInProductDetail['brandAccessory']) 
                                                && $productInProductDetail['brandAccessory'] == "Beats")
                                                {echo "selected";}else{echo "";} ?>>Beats</option>
                                                        <option value="Harman/Kardon" <?php if(isset($productInProductDetail['brandAccessory']) 
                                                && $productInProductDetail['brandAccessory'] == "Harman/Kardon")
                                                {echo "selected";}else{echo "";} ?>>Harman / Kardon</option>
                                                        <option value="Samsum" <?php if(isset($productInProductDetail['brandAccessory']) 
                                                && $productInProductDetail['brandAccessory'] == "Samsum")
                                                {echo "selected";}else{echo "";} ?>>Samsum</option>
                                                        <option value="Sony" <?php if(isset($productInProductDetail['brandAccessory']) 
                                                && $productInProductDetail['brandAccessory'] == "Sony")
                                                {echo "selected";}else{echo "";} ?>>Sony</option>
                                                        <option value="Belkin" <?php if(isset($productInProductDetail['brandAccessory']) 
                                                && $productInProductDetail['brandAccessory'] == "Belkin")
                                                {echo "selected";}else{echo "";} ?>>Belkin</option>
                                                        <option value="Anker" <?php if(isset($productInProductDetail['brandAccessory']) 
                                                && $productInProductDetail['brandAccessory'] == "Anker")
                                                {echo "selected";}else{echo "";} ?>>Anker</option>
                                                        <option value="Logitech" <?php if(isset($productInProductDetail['brandAccessory']) 
                                                && $productInProductDetail['brandAccessory'] == "Logitech")
                                                {echo "selected";}else{echo "";} ?>>Logitech</option>
                                                        <option value="JBL" <?php if(isset($productInProductDetail['brandAccessory']) 
                                                && $productInProductDetail['brandAccessory'] == "JBL")
                                                {echo "selected";}else{echo "";} ?>>JBL</option>
                                                        <option value="Xiaomi" <?php if(isset($productInProductDetail['brandAccessory']) 
                                                && $productInProductDetail['brandAccessory'] == "Xiaomi")
                                                {echo "selected";}else{echo "";} ?>>Xiaomi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 detail2">
                                                <div class="form-group">
                                                    <label for="compatibleAccessory">Tương thích: </label>
                                                    <select class="form-control" name="compatibleAccessory"
                                                        id="compatibleAccessory">
                                                        <option value="">Chọn phần mềm tương thích với phụ kiện</option>
                                                        <option value="Android" <?php if(isset($productInProductDetail['compatibleAccessory']) 
                                                && $productInProductDetail['compatibleAccessory'] == "Android")
                                                {echo "selected";}else{echo "";} ?>>Android</option>
                                                        <option value="iOS" <?php if(isset($productInProductDetail['compatibleAccessory']) 
                                                && $productInProductDetail['compatibleAccessory'] == "iOS")
                                                {echo "selected";}else{echo "";} ?>>iOS</option>
                                                        <option value="iPadOS" <?php if(isset($productInProductDetail['compatibleAccessory']) 
                                                && $productInProductDetail['compatibleAccessory'] == "iPadOS")
                                                {echo "selected";}else{echo "";} ?>>iPadOS</option>
                                                        <option value="MacOS" <?php if(isset($productInProductDetail['compatibleAccessory']) 
                                                && $productInProductDetail['compatibleAccessory'] == "MacOS")
                                                {echo "selected";}else{echo "";} ?>>MacOS</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizeAccessory">Kích thước: </label>
                                                    <input type="text" class="form-control" name="sizeAccessory" value="<?php if(isset($productInProductDetail['sizeAccessory']))
                                                {echo $productInProductDetail['sizeAccessory'];} ?>" id="sizeAccessory"
                                                        aria-describedby="sizeAccessoryHid"
                                                        placeholder="Nhập kích thước phụ kiện">
                                                    <small id="sizeAccessoryHid" class="form-text text-muted">Kích thước
                                                        không được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="weightAccessory">Trọng lượng: </label>
                                                    <input type="text" class="form-control" name="weightAccessory"
                                                        value="<?php if(isset($productInProductDetail['weightAccessory']))
                                                {echo $productInProductDetail['weightAccessory'];} ?>"
                                                        id="weightAccessory" aria-describedby="weightAccessoryHid"
                                                        placeholder="Nhập trọng lượng phụ kiện">
                                                    <small id="weightAccessoryHid" class="form-text text-muted">Trọng
                                                        lượng không được để trống!!</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- if No -->
                                    <div id="ifYes7" class="elementProduct" style="display:none">
                                        <p class="text-center mt-3"
                                            style="font-weight: bolder;font-variant: small-caps;color: red;">Các thông
                                            tin
                                            khác</p>
                                        <div class="row">
                                            <div class="col-6 detail1">
                                                <input type="hidden" name="televisionID">
                                                <div class="form-group">
                                                    <label for="brandTelevision">Hãng: </label>
                                                    <select class="form-control" name="brandTelevision"
                                                        id="brandTelevision">
                                                        <option value="">Chọn hãng TV</option>
                                                        <option value="Sony" <?php if(isset($productInProductDetail['brandTelevision']) 
                                                && $productInProductDetail['brandTelevision'] == "Sony")
                                                {echo "selected";}else{echo "";} ?>>Sony</option>
                                                        <option value="Samsum" <?php if(isset($productInProductDetail['brandTelevision']) 
                                                && $productInProductDetail['brandTelevision'] == "Samsum")
                                                {echo "selected";}else{echo "";} ?>>Samsum</option>
                                                        <option value="LG" <?php if(isset($productInProductDetail['brandTelevision']) 
                                                && $productInProductDetail['brandTelevision'] == "LG")
                                                {echo "selected";}else{echo "";} ?>>LG</option>
                                                        <option value="TCL" <?php if(isset($productInProductDetail['brandTelevision']) 
                                                && $productInProductDetail['brandTelevision'] == "TCL")
                                                {echo "selected";}else{echo "";} ?>>TCL</option>
                                                        <option value="Casper" <?php if(isset($productInProductDetail['brandTelevision']) 
                                                && $productInProductDetail['brandTelevision'] == "Casper")
                                                {echo "selected";}else{echo "";} ?>>Casper</option>
                                                        <option value="FFALCON" <?php if(isset($productInProductDetail['brandTelevision']) 
                                                && $productInProductDetail['brandTelevision'] == "FFALCON")
                                                {echo "selected";}else{echo "";} ?>>FFALCON</option>
                                                        <option value="AQUA" <?php if(isset($productInProductDetail['brandTelevision']) 
                                                && $productInProductDetail['brandTelevision'] == "AQUA")
                                                {echo "selected";}else{echo "";} ?>>AQUA</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizeScreenTelevision">Kích cỡ màn hình: </label>
                                                    <input type="text" class="form-control" name="sizeScreenTelevision"
                                                        value="<?php if(isset($productInProductDetail['sizeScreenTelevision']))
                                                {echo $productInProductDetail['sizeScreenTelevision'];} ?>"
                                                        id="sizeScreenTelevision"
                                                        aria-describedby="sizeScreenTelevisionHid"
                                                        placeholder="Nhập kích cỡ màn hình">
                                                    <small id="sizeScreenTelevisionHid"
                                                        class="form-text text-muted">Kích cỡ màn hinh không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="resolutionTelevision">Độ phân giải: </label>
                                                    <select class="form-control" name="resolutionTelevision"
                                                        id="resolutionTelevision">
                                                        <option value="">Chọn độ phân giải TV</option>
                                                        <option value="HD" <?php if(isset($productInProductDetail['resolutionTelevision']) 
                                                && $productInProductDetail['resolutionTelevision'] == "HD")
                                                {echo "selected";}else{echo "";} ?>>HD</option>
                                                        <option value="Full HD" <?php if(isset($productInProductDetail['resolutionTelevision']) 
                                                && $productInProductDetail['resolutionTelevision'] == "Full HD")
                                                {echo "selected";}else{echo "";} ?>>Full HD</option>
                                                        <option value="4K" <?php if(isset($productInProductDetail['resolutionTelevision']) 
                                                && $productInProductDetail['resolutionTelevision'] == "4K")
                                                {echo "selected";}else{echo "";} ?>>4K</option>
                                                        <option value="8K" <?php if(isset($productInProductDetail['resolutionTelevision']) 
                                                && $productInProductDetail['resolutionTelevision'] == "8K")
                                                {echo "selected";}else{echo "";} ?>>8K</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 detail2">
                                                <div class="form-group">
                                                    <label for="typeTelevision">Loại TV: </label>
                                                    <select class="form-control" name="typeTelevision"
                                                        id="typeTelevision">
                                                        <option value="">Chọn loại TV</option>
                                                        <option value="Tivi OLED" <?php if(isset($productInProductDetail['typeTelevision']) 
                                                && $productInProductDetail['typeTelevision'] == "Tivi OLED")
                                                {echo "selected";}else{echo "";} ?>>Tivi OLED</option>
                                                        <option value="Tivi QLED" <?php if(isset($productInProductDetail['typeTelevision']) 
                                                && $productInProductDetail['typeTelevision'] == "Tivi QLED")
                                                {echo "selected";}else{echo "";} ?>>Tivi QLED</option>
                                                        <option value="Tivi Android" <?php if(isset($productInProductDetail['typeTelevision']) 
                                                && $productInProductDetail['typeTelevision'] == "Tivi Android")
                                                {echo "selected";}else{echo "";} ?>>Tivi Android</option>
                                                        <option value="Tivi Mini LED" <?php if(isset($productInProductDetail['typeTelevision']) 
                                                && $productInProductDetail['typeTelevision'] == "Tivi Mini LED")
                                                {echo "selected";}else{echo "";} ?>>Tivi Mini LED</option>
                                                        <option value="Tivi NanoCell" <?php if(isset($productInProductDetail['typeTelevision']) 
                                                && $productInProductDetail['typeTelevision'] == "Tivi NanoCell")
                                                {echo "selected";}else{echo "";} ?>>Tivi NanoCell</option>
                                                        <option value="Tivi thiết kế đặc biệt" <?php if(isset($productInProductDetail['typeTelevision']) 
                                                && $productInProductDetail['typeTelevision'] == "Tivi thiết kế đặc biệt")
                                                {echo "selected";}else{echo "";} ?>>Tivi thiết kế đặc biệt</option>
                                                        <option value="Smart Tivi" <?php if(isset($productInProductDetail['typeTelevision']) 
                                                && $productInProductDetail['typeTelevision'] == "Smart Tivi")
                                                {echo "selected";}else{echo "";} ?>>Smart Tivi</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="operatingSystemTelevision">Hệ điều hành: </label>
                                                    <input type="text" class="form-control"
                                                        name="operatingSystemTelevision" value="<?php if(isset($productInProductDetail['operatingSystemTelevision']))
                                                {echo $productInProductDetail['operatingSystemTelevision'];} ?>"
                                                        id="operatingSystemTelevision"
                                                        aria-describedby="operatingSystemTelevisionHid"
                                                        placeholder="Nhập thông tin hệ điều hành">
                                                    <small id="operatingSystemTelevisionHid"
                                                        class="form-text text-muted">Hệ điều hành không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizeTelevision">Kích thước: </label>
                                                    <input type="text" class="form-control" name="sizeTelevision" value="<?php if(isset($productInProductDetail['sizeTelevision']))
                                                {echo $productInProductDetail['sizeTelevision'];} ?>"
                                                        id="sizeTelevision" aria-describedby="sizeTelevisionHid"
                                                        placeholder="Nhập kích thước TV">
                                                    <small id="sizeTelevisionHid" class="form-text text-muted">Kích
                                                        thước không được để trống!!</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ifYes8" class="elementProduct" style="display:none">
                                        <p class="text-center mt-3"
                                            style="font-weight: bolder;font-variant: small-caps;color: red;">Các thông
                                            tin
                                            khác</p>
                                        <div class="row">
                                            <div class="col-6 detail1">
                                                <input type="hidden" name="refrigeratorID">
                                                <div class="form-group">
                                                    <label for="brandRefrigerator">Hãng: </label>
                                                    <select class="form-control" name="brandRefrigerator"
                                                        id="brandRefrigerator">
                                                        <option value="">Chọn hãng tủ lạnh</option>
                                                        <option value="Panasonic" <?php if(isset($productInProductDetail['brandRefrigerator']) 
                                                && $productInProductDetail['brandRefrigerator'] == "Panasonic")
                                                {echo "selected";}else{echo "";} ?>>Panasonic</option>
                                                        <option value="Samsum" <?php if(isset($productInProductDetail['brandRefrigerator']) 
                                                && $productInProductDetail['brandRefrigerator'] == "Samsum")
                                                {echo "selected";}else{echo "";} ?>>Samsum</option>
                                                        <option value="Toshiba" <?php if(isset($productInProductDetail['brandRefrigerator']) 
                                                && $productInProductDetail['brandRefrigerator'] == "Toshiba")
                                                {echo "selected";}else{echo "";} ?>>Toshiba</option>
                                                        <option value="LG" <?php if(isset($productInProductDetail['brandRefrigerator']) 
                                                && $productInProductDetail['brandRefrigerator'] == "LG")
                                                {echo "selected";}else{echo "";} ?>>LG</option>
                                                        <option value="AQUA" <?php if(isset($productInProductDetail['brandRefrigerator']) 
                                                && $productInProductDetail['brandRefrigerator'] == "AQUA")
                                                {echo "selected";}else{echo "";} ?>>AQUA</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="typeRefrigerator">Kiểu tủ: </label>
                                                    <select class="form-control" name="typeRefrigerator"
                                                        id="typeRefrigerator">
                                                        <option value="">Chọn kiểu tủ lạnh</option>
                                                        <option value="Ngăn đá trên" <?php if(isset($productInProductDetail['typeRefrigerator']) 
                                                && $productInProductDetail['typeRefrigerator'] == "Ngăn đá trên")
                                                {echo "selected";}else{echo "";} ?>>Ngăn đá trên</option>
                                                        <option value="Ngăn đá dưới" <?php if(isset($productInProductDetail['typeRefrigerator']) 
                                                && $productInProductDetail['typeRefrigerator'] == "Ngăn đá dưới")
                                                {echo "selected";}else{echo "";} ?>>Ngăn đá dưới</option>
                                                        <option value="Mini" <?php if(isset($productInProductDetail['typeRefrigerator']) 
                                                && $productInProductDetail['typeRefrigerator'] == "Mini")
                                                {echo "selected";}else{echo "";} ?>>Mini</option>
                                                        <option value="Side by Side" <?php if(isset($productInProductDetail['typeRefrigerator']) 
                                                && $productInProductDetail['typeRefrigerator'] == "Side by Side")
                                                {echo "selected";}else{echo "";} ?>>Side by Side</option>
                                                        <option value="Tủ nhiều cửa" <?php if(isset($productInProductDetail['typeRefrigerator']) 
                                                && $productInProductDetail['typeRefrigerator'] == "Tủ nhiều cửa")
                                                {echo "selected";}else{echo "";} ?>>Tủ nhiều cửa</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="useCapacityRefrigerator">Dung tích sử dụng: </label>
                                                    <input type="text" class="form-control"
                                                        name="useCapacityRefrigerator" value="<?php if(isset($productInProductDetail['useCapacityRefrigerator']))
                                                {echo $productInProductDetail['useCapacityRefrigerator'];} ?>"
                                                        id="useCapacityRefrigerator"
                                                        aria-describedby="useCapacityRefrigeratorHid"
                                                        placeholder="Nhập dung tích sử dụng">
                                                    <small id="useCapacityRefrigeratorHid"
                                                        class="form-text text-muted">Dung tích sử dụng không được để
                                                        trống!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="freezerCapacityRefrigerator">Dung tích ngăn đá: </label>
                                                    <input type="text" class="form-control"
                                                        name="freezerCapacityRefrigerator" value="<?php if(isset($productInProductDetail['freezerCapacityRefrigerator']))
                                                {echo $productInProductDetail['freezerCapacityRefrigerator'];} ?>"
                                                        id="freezerCapacityRefrigerator"
                                                        aria-describedby="freezerCapacityRefrigerator"
                                                        placeholder="Nhập dung tích ngăn đá của tủ lạnh">
                                                    <small id="freezerCapacityRefrigerator"
                                                        class="form-text text-muted">Dung tích ngăn đá không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="coolCompartmentRefrigerator">Dung tích ngăn lạnh:
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        name="coolCompartmentRefrigerator" value="<?php if(isset($productInProductDetail['coolCompartmentRefrigerator']))
                                                {echo $productInProductDetail['coolCompartmentRefrigerator'];} ?>"
                                                        id="coolCompartmentRefrigerator"
                                                        aria-describedby="coolCompartmentRefrigeratorHid"
                                                        placeholder="Nhập dung tích ngăn lạnh của tủ lạnh">
                                                    <small id="coolCompartmentRefrigeratorHid"
                                                        class="form-text text-muted">Dung tích ngăn lạnh không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="powerConsumptionRefrigerator">Công suất tiêu thụ:
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        name="powerConsumptionRefrigerator" value="<?php if(isset($productInProductDetail['powerConsumptionRefrigerator']))
                                                {echo $productInProductDetail['powerConsumptionRefrigerator'];} ?>"
                                                        id="powerConsumptionRefrigerator"
                                                        aria-describedby="powerConsumptionRefrigerator"
                                                        placeholder="Nhập công suất tiêu thụ tủ lạnh">
                                                    <small id="powerConsumptionRefrigerator"
                                                        class="form-text text-muted">Công suất tiêu thụ không được để
                                                        trống!!</small>
                                                </div>
                                            </div>
                                            <div class="col-6 detail2">
                                                <div class="form-group">
                                                    <label for="energySavingTechnologyRefrigerator">Công nghệ tiết kiệm
                                                        điện: </label>
                                                    <input type="text" class="form-control"
                                                        name="energySavingTechnologyRefrigerator"
                                                        value="<?php if(isset($productInProductDetail['energySavingTechnologyRefrigerator']))
                                                {echo $productInProductDetail['energySavingTechnologyRefrigerator'];} ?>" id="energySavingTechnologyRefrigerator"
                                                        aria-describedby="energySavingTechnologyRefrigerator"
                                                        placeholder="Nhập công nghệ tiết kiện điện tủ lạnh">
                                                    <small id="energySavingTechnologyRefrigerator"
                                                        class="form-text text-muted">Công nghệ tiết kiệm điện không được
                                                        để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="coolTechnologyRefrigerator">Công nghệ làm lạnh: </label>
                                                    <input type="text" class="form-control"
                                                        name="coolTechnologyRefrigerator" value="<?php if(isset($productInProductDetail['coolTechnologyRefrigerator']))
                                                {echo $productInProductDetail['coolTechnologyRefrigerator'];} ?>"
                                                        id="coolTechnologyRefrigerator"
                                                        aria-describedby="coolTechnologyRefrigeratorHid"
                                                        placeholder="Nhập công nghệ làm lạnh của tủ lạnh">
                                                    <small id="coolTechnologyRefrigeratorHid"
                                                        class="form-text text-muted">Công nghệ làm lạnh không được để
                                                        trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="anti_odorTechnologyRefrigerator">Công nghệ kháng khuẩn
                                                        khử mùi: </label>
                                                    <input type="text" class="form-control"
                                                        name="anti_odorTechnologyRefrigerator" value="<?php if(isset($productInProductDetail['anti_odorTechnologyRefrigerator']))
                                                {echo $productInProductDetail['anti_odorTechnologyRefrigerator'];} ?>"
                                                        id="anti_odorTechnologyRefrigerator"
                                                        aria-describedby="anti-ordorTechnologyRefrigeratorHid"
                                                        placeholder="Nhập công nghệ kháng khuẩn khử mùi của tủ lạnh">
                                                    <small id="anti-ordorTechnologyRefrigeratorHid"
                                                        class="form-text text-muted">Công nghệ kháng khuẩn khử mùi không
                                                        được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foodPreservationTechnologyRefrigerator">Công nghệ bảo
                                                        quản thực phẩm: </label>
                                                    <input type="text" class="form-control"
                                                        name="foodPreservationTechnologyRefrigerator"
                                                        value="<?php if(isset($productInProductDetail['foodPreservationTechnologyRefrigerator']))
                                                {echo $productInProductDetail['foodPreservationTechnologyRefrigerator'];} ?>"
                                                        id="foodPreservationTechnologyRefrigerator"
                                                        aria-describedby="foodPreservationTechnologyRefrigeratorHid"
                                                        placeholder="Nhập công nghệ bảo quản thực phẩm">
                                                    <small id="foodPreservationTechnologyRefrigeratorHid"
                                                        class="form-text text-muted">Công nghệ bảo quản thực phẩm không
                                                        được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sizeRefrigerator">Kích thước: </label>
                                                    <input type="text" class="form-control" name="sizeRefrigerator"
                                                        value="<?php if(isset($productInProductDetail['sizeRefrigerator']))
                                                {echo $productInProductDetail['sizeRefrigerator'];} ?>"
                                                        id="sizeRefrigerator" aria-describedby="sizeRefrigeratorHid"
                                                        placeholder="Nhập kích thước tủ lạnh">
                                                    <small id="sizeRefrigeratorHid" class="form-text text-muted">Kích
                                                        thước tủ lạnh không được để trống!!</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="massRefrigerator">Khối lượng: </label>
                                                    <input type="text" class="form-control" name="massRefrigerator"
                                                        value="<?php if(isset($productInProductDetail['massRefrigerator']))
                                                {echo $productInProductDetail['massRefrigerator'];} ?>"
                                                        id="massRefrigerator" aria-describedby="massRefrigeratorHid"
                                                        placeholder="Nhập khối lượng tủ lạnh">
                                                    <small id="massRefrigeratorHid" class="form-text text-muted">Khối
                                                        lượng tủ lạnh không được để trống!!</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- chọn loại danh mục sản phẩm -->
                                    <script type="text/javascript">
                                        window.onload = function () {
                                            document.getElementById('ifYes').style.display = 'none';
                                            document.getElementById('ifNo').style.display = 'none';
                                        }

                                        function yesnoCheck() {
                                            if (document.getElementById('yesCheck').checked) {
                                                document.getElementById('ifYes').style.display = 'block';
                                                document.getElementById('ifYes7').style.display = 'none';
                                                document.getElementById('ifYes8').style.display = 'none';
                                                if (document.getElementById('yesCheck1').checked) {
                                                    document.getElementById('ifYes1').style.display = 'block';
                                                    document.getElementById('ifYes2').style.display = 'none';
                                                    document.getElementById('ifYes3').style.display = 'none';
                                                    document.getElementById('ifYes4').style.display = 'none';
                                                    document.getElementById('ifYes5').style.display = 'none';
                                                    document.getElementById('ifYes6').style.display = 'none';
                                                } else if (document.getElementById('yesCheck2').checked) {
                                                    document.getElementById('ifYes1').style.display = 'none';
                                                    document.getElementById('ifYes2').style.display = 'block';
                                                    document.getElementById('ifYes3').style.display = 'none';
                                                    document.getElementById('ifYes4').style.display = 'none';
                                                    document.getElementById('ifYes5').style.display = 'none';
                                                    document.getElementById('ifYes6').style.display = 'none';
                                                } else if (document.getElementById('yesCheck3').checked) {
                                                    document.getElementById('ifYes1').style.display = 'none';
                                                    document.getElementById('ifYes2').style.display = 'none';
                                                    document.getElementById('ifYes3').style.display = 'block';
                                                    document.getElementById('ifYes4').style.display = 'none';
                                                    document.getElementById('ifYes5').style.display = 'none';
                                                    document.getElementById('ifYes6').style.display = 'none';
                                                } else if (document.getElementById('yesCheck4').checked) {
                                                    document.getElementById('ifYes1').style.display = 'none';
                                                    document.getElementById('ifYes2').style.display = 'none';
                                                    document.getElementById('ifYes3').style.display = 'none';
                                                    document.getElementById('ifYes4').style.display = 'block';
                                                    document.getElementById('ifYes5').style.display = 'none';
                                                    document.getElementById('ifYes6').style.display = 'none';
                                                } else if (document.getElementById('yesCheck5').checked) {
                                                    document.getElementById('ifYes1').style.display = 'none';
                                                    document.getElementById('ifYes2').style.display = 'none';
                                                    document.getElementById('ifYes3').style.display = 'none';
                                                    document.getElementById('ifYes4').style.display = 'none';
                                                    document.getElementById('ifYes5').style.display = 'block';
                                                    document.getElementById('ifYes6').style.display = 'none';
                                                } else if (document.getElementById('yesCheck6').checked) {
                                                    document.getElementById('ifYes1').style.display = 'none';
                                                    document.getElementById('ifYes2').style.display = 'none';
                                                    document.getElementById('ifYes3').style.display = 'none';
                                                    document.getElementById('ifYes4').style.display = 'none';
                                                    document.getElementById('ifYes5').style.display = 'none';
                                                    document.getElementById('ifYes6').style.display = 'block';
                                                }
                                                document.getElementById('ifNo').style.display = 'none';
                                            } else if (document.getElementById('noCheck').checked) {
                                                document.getElementById('ifYes').style.display = 'none';
                                                document.getElementById('ifYes1').style.display = 'none';
                                                document.getElementById('ifYes2').style.display = 'none';
                                                document.getElementById('ifYes3').style.display = 'none';
                                                document.getElementById('ifYes4').style.display = 'none';
                                                document.getElementById('ifYes5').style.display = 'none';
                                                document.getElementById('ifYes6').style.display = 'none';
                                                document.getElementById('ifNo').style.display = 'block';
                                                if (document.getElementById('yesCheck7').checked) {
                                                    document.getElementById('ifYes7').style.display = 'block';
                                                    document.getElementById('ifYes8').style.display = 'none';
                                                } else if (document.getElementById('yesCheck8').checked) {
                                                    document.getElementById('ifYes7').style.display = 'none';
                                                    document.getElementById('ifYes8').style.display = 'block';
                                                }
                                            }
                                        }
                                    </script>
                                </div>
                                <div class="message">
                                    <p class="text-center mb-5">
                                        <?php if (isset($message)) {
                            echo $message;
                        } ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-6 offset-3 addbutton">
                                <div class="row">
                                    <div class="col">
                                        <?php if($action == "add_product_detail"): ?>
                                        <button type="submit" name="addProductDetail" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Thêm thông tin</button>
                                        <?php elseif($action == "edit_product_detail"): ?>
                                        <button type="submit" name="UpdateProductDetail" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Cập nhật thông tin</button>
                                        <?php endif; ?>
                                        <button type="reset" class="btn btn-dark"><img class="img-fluid"
                                                src="../images/reset.png" alt=""> Reset</button>
                                        <button formaction="?action=add_product_detail" class="btn btn-danger"><i
                                                class="fas fa-hand-point-left"></i> Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/footer.php"; ?>