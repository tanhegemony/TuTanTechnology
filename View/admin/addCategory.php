<!doctype html>
<html lang="en">

<head>
    <title><?php if($action == "add_category"){echo "Thêm danh mục";}else if($action == "edit_category"){echo "Chỉnh sửa danh mục";} ?></title>
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
                                    <h3><?php if($action == "add_category"){echo "Thêm danh mục";}else if($action == "edit_category"){echo "Chỉnh sửa danh mục";} ?>
                                    </h3>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="categoryID">
                                </div>
                                <div class="form-group">
                                    <label for="categoryName">CategoryName: </label>
                                    <input type="text" class="form-control" name="categoryName" id="categoryName" value="<?php if($action == "edit_category"){ 
                            echo $category->getCategoryName();
                       }?>" aria-describedby="categoryNameHid" placeholder="Nhập tên danh mục">
                                    <small id="categoryNameHid" class="form-text text-muted">CategoryName không được để
                                        trống!!</small>
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        <label style="font-weight: bolder;font-style: italic;">Chọn loại danh mục sản
                                            phẩm: </label> <br>
                                        <input type="radio" name="typeCategoryID" value="1" <?php if($action == "edit_category"){ 
                            if($category->getTypeCategoryID() == 1){
                                echo "checked";
                            }else{
                                echo "";
                            }
                       }else if($action == "add_category"){
                           echo "checked";
                       }?> />
                                        Điện tử
                                        <input class="ml-3" type="radio" name="typeCategoryID" value="2" <?php if($action == "edit_category"){ 
                            if($category->getTypeCategoryID() == 2){
                                echo "checked";
                            }else{
                                echo "";
                            }
                       }else if($action == "add_category"){
                           echo "";
                       }?> />
                                        Gia dụng
                                    </div>
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
                            <div class="col-10  offset-1 addbutton">
                                <div class="row">
                                    <div class="col">
                                        <?php if($action == "add_category"): ?>
                                        <button type="submit" name="addCategory" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Thêm danh mục</button>
                                        <?php elseif($action == "edit_category"): ?>
                                        <button type="submit" name="UpdateCategory" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Cập nhật danh mục</button>
                                        <?php endif; ?>
                                        <button type="reset" class="btn btn-dark"><img class="img-fluid"
                                                src="../images/reset.png" alt=""> Reset</button>
                                        <button formaction="?action=manageCategory" class="btn btn-danger"><i
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