<!doctype html>
<html lang="en">

<head>
    <title><?php if($action == "add_product"){echo "Thêm sản phẩm";}else if($action == "edit_product"){echo "Chỉnh sửa sản phẩm";} ?></title>
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
                    <form action="" method="post" class="mt-3 mb-3">
                        <div class="row">
                            <div class="col-10 offset-1 addForm">
                                <div class="text-center mt-2 nameForm">
                                    <h3><?php if($action == "add_product"){echo "Thêm sản phẩm";}else if($action == "edit_product"){echo "Chỉnh sửa sản phẩm";} ?>
                                    </h3>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="productID">
                                </div>
                                <div class="form-group">
                                    <label for="productName">ProductName: </label>
                                    <input type="text" class="form-control" name="productName" id="productName" value="<?php if($action == "edit_product"){ 
                            echo $product->getProductName();
                            }?>" aria-describedby="productNameHid" placeholder="Nhập tên sản phẩm">
                                    <small id="productNameHid" class="form-text text-muted">ProductName không được để
                                        trống!!</small>
                                </div>
                                <div class="input-group mb-4">
                                    <label for="price" class="mt-1">Price: </label>
                                    <input type="text" class="form-control ml-3" name="price" id="price"
                                        placeholder="Nhập giá của sản phẩm" aria-describedby="basic-addon1" value="<?php if($action == "edit_product"){ 
                            echo $product->getPrice();
                            }?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">đồng</span>
                                    </div>
                                </div>
                                <div class="input-group mb-4">
                                    <label for="discount" class="mt-1">Discount: </label>
                                    <input type="text" class="form-control ml-3" name="discount" id="discount" value="<?php if($action == "edit_product"){ 
                            echo $product->getDiscount();
                            }?>" placeholder="Nhập % giảm giá của sản phẩm" aria-describedby="basic-addon1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">%</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity: </label>
                                    <input type="text" class="form-control" name="quantity" id="quantity" value="<?php if($action == "edit_product"){ 
                            echo $product->getQuantity();
                            }?>" aria-describedby="quantityHid" placeholder="Nhập số lượng sản phẩm nhập kho">
                                    <small id="quantityHid" class="form-text text-muted">Quantity không được để
                                        trống!!</small>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description: </label>
                                    <textarea name="description" id="description" style="width: 100%;" cols="30"
                                        placeholder="Mô tả sản phẩm"><?php if($action == "edit_product"){ 
                            echo $product->getDescription();
                            }?></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        <label style="font-weight: bolder;font-style: italic;">Chọn loại danh mục sản
                                            phẩm: </label> <br>
                                        <input type="radio" onclick="javascript:yesnoCheck();" name="typeCategoryID" <?php if($action == "edit_product"){ 
                               if($product->getCategoryID() == 1 || $product->getCategoryID() == 2 || 
                                       $product->getCategoryID() == 3 || $product->getCategoryID() == 4 ||
                                       $product->getCategoryID() == 5 || $product->getCategoryID() == 6){
                                   echo "checked";
                               }else{
                                   echo "";
                               }
                            }?> id="yesCheck" />
                                        Điện tử
                                        <input class="ml-3" type="radio" onclick="javascript:yesnoCheck();"
                                            name="typeCategoryID" <?php if($action == "edit_product"){ 
                               if($product->getCategoryID() == 7 || $product->getCategoryID() == 8){
                                   echo "checked";
                               }else{
                                   echo "";
                               }
                            }?> id="noCheck" />
                                        Gia dụng
                                    </div>
                                    <br>
                                    <div id="ifYes" class="typeProduct mt-1" style="display:none">
                                        <div class="text-center">
                                            <label style="font-weight: bolder;font-style: italic;">Chọn loại sản phẩm:
                                            </label> <br>
                                            <input type="radio" name="categoryID" value="01" <?php if($action == "edit_product"){ 
                               if($product->getCategoryID() == 1){
                                   echo "checked";
                               }else{
                                   echo "";
                               }
                            }?> /> Điện thoại
                                            <input class="ml-3" type="radio" name="categoryID" value="02" <?php if($action == "edit_product"){ 
                               if($product->getCategoryID() == 2){
                                   echo "checked";
                               }else{
                                   echo "";
                               }
                            }?> /> Laptop
                                            <input class="ml-3" type="radio" name="categoryID" value="03" <?php if($action == "edit_product"){ 
                               if($product->getCategoryID() == 3){
                                   echo "checked";
                               }else{
                                   echo "";
                               }
                            }?> /> Tablet
                                            <input class="ml-3" type="radio" name="categoryID" value="04" <?php if($action == "edit_product"){ 
                               if($product->getCategoryID() == 4){
                                   echo "checked";
                               }else{
                                   echo "";
                               }
                            }?> /> PC
                                            <input class="ml-3" type="radio" name="categoryID" value="05" <?php if($action == "edit_product"){ 
                               if($product->getCategoryID() == 5){
                                   echo "checked";
                               }else{
                                   echo "";
                               }
                            }?> /> Watch
                                            <input class="ml-3" type="radio" name="categoryID" value="06" <?php if($action == "edit_product"){ 
                               if($product->getCategoryID() == 6){
                                   echo "checked";
                               }else{
                                   echo "";
                               }
                            }?> /> Phụ kiện
                                        </div>
                                    </div>
                                    <div id="ifNo" class="typeProduct mt-1" style="display:none">
                                        <div class="text-center">
                                            <label style="font-weight: bolder;font-style: italic;">Chọn loại sản phẩm:
                                            </label> <br>
                                            <input type="radio" onclick="javascript:yesnoCheck();" name="categoryID"
                                                value="07" id="yesCheck7" <?php if($action == "edit_product"){ 
                               if($product->getCategoryID() == 7){
                                   echo "checked";
                               }else{
                                   echo "";
                               }
                            }?> /> TV
                                            <input class="ml-3" type="radio" onclick="javascript:yesnoCheck();"
                                                name="categoryID" value="08" id="yesCheck8" <?php if($action == "edit_product"){ 
                               if($product->getCategoryID() == 8){
                                   echo "checked";
                               }else{
                                   echo "";
                               }
                            }?> /> Tủ lạnh
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
                                                document.getElementById('ifNo').style.display = 'none';
                                            } else if (document.getElementById('noCheck').checked) {
                                                document.getElementById('ifYes').style.display = 'none';
                                                document.getElementById('ifNo').style.display = 'block';
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
                            <div class="col-10 offset-1 addbutton">
                                <div class="row">
                                    <div class="col">
                                        <?php if($action == "add_product"): ?>
                                        <button type="submit" name="addProduct" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Thêm sản phẩm</button>
                                        <button formaction="?action=add_product_detail" class="btn btn-info"><i
                                                class="fas fa-plus"></i> Thêm các thông tin khác</button>
                                        <?php elseif($action == "edit_product"): ?>
                                        <button type="submit" name="UpdateProduct" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Cập nhật sản phẩm</button>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="reset" class="btn btn-dark"><img class="img-fluid"
                                                src="../images/icon/reset.png" alt=""> Reset</button>
                                        <button formaction="?action=manageProduct" class="btn btn-danger"><i
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