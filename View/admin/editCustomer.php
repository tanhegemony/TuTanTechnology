<!doctype html>
<html lang="en">

<head>
    <title>Chỉnh sửa khách hàng</title>
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
                                    <h3>Chỉnh sửa khách hàng</h3>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="customerID">
                                </div>

                                <div class="row accountProfile">
                                    <div class="col-3 imageCustomer">
                                        <script>
                                            function chooseFile(fileInput) {
                                                if (fileInput.files && fileInput.files[0]) {
                                                    var reader = new FileReader();

                                                    reader.onload = function (e) {
                                                        $('#image').attr('src', e.target.result);
                                                    }

                                                    reader.readAsDataURL(fileInput.files[0]);
                                                }
                                            }
                                        </script>
                                        <img class="img-fluid" id="customerImage"
                                            src="<?php if(empty($customer['customerImage'])){echo '../images/userdangnhap.jpg';}else{ echo '../images/'.$customer['customerImage'];}  ?>"
                                            width="50%">
                                        <div class="form-group">
                                            <label for="customerImage" class="form-check-inline">Customer Image:
                                            </label>
                                            <input type="file" onchange="chooseFile(this)" class="form-control-file"
                                                name="customerImage" id="customerImage">
                                        </div>
                                    </div>
                                    <div class="col-9 contentCustomer">
                                        <div class="row accountProfile">
                                            <div class="col-6 customerName">
                                                <div class="form-group">
                                                    <label for="customerName">CustomerName: </label>
                                                    <input type="text" class="form-control" name="customerName"
                                                        id="customerName"
                                                        value="<?php if(isset($customer['customerName'])){ echo $customer['customerName'];}else{echo '';} ?>"
                                                        placeholder="Nhập tên khách hàng">
                                                </div>
                                            </div>
                                            <div class="col-6 customerPhone">
                                                <div class="form-group">
                                                    <label for="customerPhone">CustomerPhone: </label>
                                                    <input type="text" class="form-control" name="customerPhone"
                                                        id="customerPhone" aria-describedby="customerPhoneHid"
                                                        value="<?php if(isset($customer['customerPhone'])){ echo $customer['customerPhone'];}else{echo '';} ?>"
                                                        placeholder="Nhập số điện thoại khách hàng">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row accountProfile">
                                            <div class="col-6 customerEmail">
                                                <div class="form-group">
                                                    <label for="customerEmail">CustomerEmail: </label>
                                                    <input type="text" class="form-control" name="customerEmail"
                                                        id="customerEmail" aria-describedby="customerEmailHid"
                                                        value="<?php if(isset($customer['customerEmail'])){ echo $customer['customerEmail'];}else{echo '';} ?>"
                                                        placeholder="Nhập email khách hàng" readonly>
                                                </div>
                                            </div>
                                            <div class="col-6 customerAddress">
                                                <div class="form-group">
                                                    <label for="customerAddress">CustomerAddress: </label>
                                                    <input type="text" class="form-control" name="customerAddress"
                                                        id="customerAddress" aria-describedby="customerAddressHid"
                                                        value="<?php if(isset($customer['customerAddress'])){ echo $customer['customerAddress'];}else{echo '';} ?>"
                                                        placeholder="Nhập địa chỉ khách hàng">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row accountProfile">
                                            <div class="col-9 customerNameAddress">
                                                <div class="form-group">
                                                    <p>Lựa chọn địa chỉ thường dùng: </p>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                name="customerNameAddress" id="customerNameAddress"
                                                                value="congty" <?php if(isset($customer['customerNameAddress']) && $customer['customerNameAddress'] == "congty"){
                                                                               echo "checked";
                                                                           }else{echo '';}  ?>/ checked> Công ty / Cơ
                                                            quan
                                                            <input class="form-check-input ml-5" type="radio"
                                                                name="customerNameAddress" <?php if(isset($customer['customerNameAddress']) && $customer['customerNameAddress'] == "nharieng"){
                                                                          echo "checked";
                                                                      }else{echo '';}  ?> id="customerNameAddress"
                                                                value="nharieng"> Nhà riêng
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                        <button type="submit" name="UpdateCustomer" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Cập nhật khách hàng</button>
                                        <button type="reset" class="btn btn-dark"><img class="img-fluid"
                                                src="../images/icon/reset.png" alt=""> Reset</button>
                                        <button formaction="?action=manageCustomer" class="btn btn-danger"><i
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