<!doctype html>
<html lang="en">

<head>
    <title><?php if($action == "add_discount_code"){echo "Thêm mã giảm giá";}else if($action == "edit_discount_code"){echo "Chỉnh sửa mã giảm giá";} ?></title>
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
                    <form action="" method="post" class="mb-3">
                        <div class="row">
                            <div class="col-10 offset-1 addForm">
                                <div class="text-center mt-2 nameForm">
                                    <h3><?php if($action == "add_discount_code"){echo "Thêm mã giảm giá";}else if($action == "edit_discount_code"){echo "Chỉnh sửa mã giảm giá";} ?>
                                    </h3>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="discountCodeID">
                                </div>
                                <div class="form-group">
                                    <label for="discountCode">DiscountCode: </label>
                                    <input type="text" class="form-control" name="discountCode" id="discountCode"
                                        aria-describedby="discountCodeHid" placeholder="Nhập mã giảm giá" value="<?php if($action == "edit_discount_code"){ 
                            echo $discountCode['discountCode'];
                            }?>" <?php if($action == "edit_discount_code"){ 
                            echo "disabled";
                            }else{
                                echo "";
                            }
                            ?>>
                                    <small id="discountCodeHid" class="form-text text-muted">Mã giảm giá không được để
                                        trống!!</small>
                                </div>
                                <div class="form-group">
                                    <label for="valueDiscount">ValueDiscount: </label>
                                    <input type="text" class="form-control" name="valueDiscount" id="valueDiscount"
                                        aria-describedby="valueDiscountHid" value="<?php if($action == "edit_discount_code"){ 
                            echo $discountCode['valueDiscount'];
                            }?>" placeholder="Nhập giá trị giảm giá">
                                    <small id="valueDiscountHid" class="form-text text-muted">Giá trị giảm giá không
                                        được để trống!!</small>
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
                                        <?php if($action == "add_discount_code"): ?>
                                        <button type="submit" name="addDiscountCode" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Thêm mã giảm giá</button>
                                        <?php elseif($action == "edit_discount_code"): ?>
                                        <button type="submit" name="UpdateDiscountCode" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Cập nhật mã giảm giá</button>
                                        <?php endif; ?>

                                        <button type="reset" class="btn btn-dark"><img class="img-fluid"
                                                src="../images/icon/reset.png" alt=""> Reset</button>
                                        <button formaction="?action=manageDiscountCode" class="btn btn-danger"><i
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