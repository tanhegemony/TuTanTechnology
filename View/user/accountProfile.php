<!doctype html>
<html lang="en">

<head>
    <title>Thông tin khách hàng</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../images/fontawesome-free-5.15.4-web/css/all.min.css" />
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/user/accountProfile.css"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/accountProfileResponsive.css"; ?>
        
    </style>
</head>

<body>
    <div class="container">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/header.php"; ?>
    </div>
    <hr style="background-color: #223464;height: 1rem;margin-top: -1rem; border: 1px solid #223464;">
    <div class="container-fluid">
        <div class="row" style="margin-top: -1rem;">
            <div class="col-3 headerNav">
                <div class="nav flex-column nav-pills mt-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link
                    <?php
                    if ($contentNav == "CustomerProfile") {
                        echo "active";
                    } else {
                        echo "";
                    }
                    ?> " id="v-pills-customerProfile-tab" data-toggle="pill" href="#v-pills-customerProfile" role="tab"
                        aria-controls="v-pills-customerProfile" aria-selected="true">Thông tin khách hàng</a>
                    <a class="nav-link
                    <?php
                    if ($contentNav == "MyOrder") {
                        echo "active";
                    } else {
                        echo "";
                    }
                    ?> " id="v-pills-myorder-tab" data-toggle="pill" href="#v-pills-myorder" role="tab"
                        aria-controls="v-pills-myorder" aria-selected="false">Đơn hàng của bạn</a>

                    <a class="nav-link
                    <?php
                    if ($contentNav == "ChangePassword") {
                        echo "active";
                    } else {
                        echo "";
                    }
                    ?> " id="v-pills-changePassword-tab" data-toggle="pill" href="#v-pills-changePassword" role="tab"
                        aria-controls="v-pills-changePassword" aria-selected="false">Thay đổi mật khẩu</a>
                </div>
            </div>
            <div class="col-9 contentNav">
                <div class="tab-content mt-2" id="v-pills-tabContent">
                    <div class="tab-pane fade
                    <?php
                    if ($contentNav == "CustomerProfile") {
                        echo "show active";
                    } else {
                        echo "";
                    }
                    ?> " id="v-pills-customerProfile" role="tabpanel" aria-labelledby="v-pills-customerProfile-tab">
                        <div class="row">
                            <div class="col nameContentNav">
                                <h2>Hồ Sơ của bạn</h2>
                                <h6>Quản lý thông tin khách hàng của bạn</h6>
                            </div>
                        </div>
                        <hr>
                        <form action="?action=Customer_Profile&contentNav=CustomerProfile" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <input type="hidden" name="customerID">
                                        </div>
                                    </div>
                                    <div class="row accountProfile">
                                        <div class="col-3">
                                            <script>
                                                function chooseFile(fileInput){
                                                    if(fileInput.files && fileInput.files[0]){
                                                        var reader = new FileReader();

                                                        reader.onload = function(e){
                                                            $('#image').attr('src', e.target.result);
                                                        }

                                                        reader.readAsDataURL(fileInput.files[0]);
                                                    }
                                                }
                                            </script>
                                            <img class="img-fluid" id="customerImage" 
                                                 src="<?php if(empty($customer['customerImage'])){echo '../images/userdangnhap.jpg';}else{ echo '../images/'.$customer['customerImage'];}  ?>"  width="50%">
                                            <div class="form-group">
                                                <label for="customerImage" class="form-check-inline">Customer Image:
                                                </label>
                                                <input type="file" onchange="chooseFile(this)" 
                                                       class="form-control-file" 
                                                name="customerImage" id="customerImage">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="row accountProfile">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="customerName">CustomerName: </label>
                                                        <input type="text" class="form-control" name="customerName" id="customerName"
                                                               value="<?php if(isset($customer['customerName'])){ echo $customer['customerName'];}else{echo '';} ?>" placeholder="Nhập tên khách hàng">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="customerPhone">CustomerPhone: </label>
                                                        <input type="text" class="form-control" name="customerPhone" id="customerPhone"
                                                            aria-describedby="customerPhoneHid"
                                                            value="<?php if(isset($customer['customerPhone'])){ echo $customer['customerPhone'];}else{echo '';} ?>"
                                                            placeholder="Nhập số điện thoại khách hàng">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row accountProfile">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="customerEmail">CustomerEmail: </label>
                                                        <input type="text" class="form-control" name="customerEmail" id="customerEmail"
                                                            aria-describedby="customerEmailHid"
                                                            value="<?php echo $_SESSION['email']; ?>"
                                                            placeholder="Nhập email khách hàng" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="customerAddress">CustomerAddress: </label>
                                                        <input type="text" class="form-control" name="customerAddress" id="customerAddress"
                                                            aria-describedby="customerAddressHid"
                                                            value="<?php if(isset($customer['customerAddress'])){ echo $customer['customerAddress'];}else{echo '';} ?>"
                                                            placeholder="Nhập địa chỉ khách hàng">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row accountProfile">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <p>Lựa chọn địa chỉ thường dùng: </p>
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="customerNameAddress"
                                                                       id="customerNameAddress" value="congty" 
                                                                           <?php if(isset($customer['customerNameAddress']) && $customer['customerNameAddress'] == "congty"){
                                                                               echo "checked";
                                                                           }else{echo '';}  ?>/ checked> Công ty / Cơ quan
                                                                <input class="form-check-input ml-5" type="radio" name="customerNameAddress"
                                                                      <?php if(isset($customer['customerNameAddress']) && $customer['customerNameAddress'] == "nharieng"){
                                                                          echo "checked";
                                                                      }else{echo '';}  ?> id="customerNameAddress" value="nharieng"> Nhà riêng
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="message">
                                        <p class="text-center mt-2">
                                            <?php if (isset($messageAccount)) {
echo $messageAccount;
} ?>
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col buttonSave mb-2">
                                            <?php if(empty($customer)) : ?>
                                                <button name="saveCustomer" class="btn save">Thêm</button>
                                            <?php elseif(isset($customer)): ?>
                                                <button name="updateCustomer" class="btn save">Cập nhật</button>
                                            <?php endif; ?>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade
                                <?php
                                if ($contentNav == "MyOrder") {
                                echo "show active";
                                } else {
                                echo "";
                                }
                                ?>" id="v-pills-myorder" role="tabpanel" aria-labelledby="v-pills-myorder-tab">
                        <?php if(!isset($_POST['viewOrder'])) : ?>
                        <div class="row">
                            <div class="col nameContentNav">
                                <h2>Đơn hàng của bạn</h2>
                                <h6>Bạn có thể quan sát tất cả đơn hàng của bạn</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form action="?action=<?php if($action == "Customer_Profile"){
                                                            echo "Customer_Profile";
                                                       }else if($action == "filterOrder"){
                                                           echo "filterOrder&state=$state";
                                                       }
                                               ?>&contentNav=MyOrder" method="post">
                                    <div class="form-inline">
                                        <label for="orderNumber">Hiển thị: </label>
                                        <select id="productNumber" class="form-control ml-2" name="orderNumber">
                                            <option value="5" <?php if ($orderNumber == 5) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>5 đơn hàng gần nhất</option>
                                            <option value="10" <?php if ($orderNumber == 10) {
                                                        echo "selected";
                                                        } else {
                                                        echo "";
                                                        } ?>>10 đơn hàng gần nhất</option>
                                            <option value="15" <?php if ($orderNumber == 15) {
                                                        echo "selected";
                                                        } else {
                                                        echo "";
                                                        } ?>>15 đơn hàng gần nhất</option>
                                        </select>
                                        <button name="applyOrderNumber" class="btn btn-danger ml-5">Áp dụng</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3" style="color: white;">
                                <a style="font-size: 12px;" href="?action=filterOrder&contentNav=MyOrder" class="btn btn-dark"><i
                                        class="fas fa-border-all"></i> Tất cả đơn hàng</a>
                                <a style="font-size: 12px;" href="?action=filterOrder&contentNav=MyOrder&state=Đã duyệt" class="btn btn-success"><i
                                        class="fas fa-check-circle"></i> Đơn hàng đã duyệt</a>
                                <a href="?action=filterOrder&contentNav=MyOrder&state=Đang chờ duyệt"
                                    style="color: white;background-color: #223464; font-size: 12px;" class="btn"><i
                                        class="fas fa-pause-circle"></i> Đơn hàng đang chờ duyệt</a>
                                        <a style="font-size: 12px;" href="?action=filterOrder&contentNav=MyOrder&state=Đang giao"
                                    class="btn btn-primary"><i
                                        class="fas fa-pause-circle"></i> Đơn hàng đang giao</a>
                                        <a style="font-size: 12px;" href="?action=filterOrder&contentNav=MyOrder&state=Đã giao"
                                     class="btn btn-secondary"><i
                                        class="fas fa-pause-circle"></i> Đơn hàng đã giao</a>
                                <a style="font-size: 12px;" href="?action=filterOrder&contentNav=MyOrder&state=Đã hủy" class="btn btn-danger"><i
                                        class="fas fa-window-close"></i> Đơn hàng đã hủy</a>

                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col">
                                <table class="table table-responsive table-light">
                                    <thead class="thead-light text-center">
                                        <tr>
                                            <th>Đơn hàng số</th>
                                            <th>Thành tiền</th>
                                            <th>Địa chỉ</th>
                                            <th style="width: 17.55%;">Ghi chú</th>
                                            <th>Ngày đặt</th>
                                            <th>Trạng thái</th>
                                            <th class="text-center" colspan="2">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(empty($getOrdersByAccountPagination)) : ?>
                                        <tr>
                                            <td style="text-align: center;color: red;font-weight: bolder;font-style: italic;font-size: 25px;"
                                                colspan="7">Không có hóa đơn</td>
                                        </tr>

                                        <?php else: ?>
                                        <?php foreach ($getOrdersByAccountPagination as $getOrderByAccountPagination) : ?>
                                        <tr>
                                            <td>
                                                <?php echo $getOrderByAccountPagination['orderID']; ?>
                                            </td>
                                            <td><?php echo number_format($getOrderByAccountPagination['total'], 0, ',', '.'); ?>đ
                                            </td>
                                            <td><?php echo $getOrderByAccountPagination['customerAddress']; ?></td>
                                            <td><?php echo $getOrderByAccountPagination['note']; ?></td>
                                            <td><?php echo $getOrderByAccountPagination['buyDate']; ?></td>
                                            <td><?php echo $getOrderByAccountPagination['state']; ?></td>
                                            <td>
                                                <form
                                                    action="?action=Customer_Profile&contentNav=MyOrder&orderID=<?php echo $getOrderByAccountPagination['orderID']; ?>&orderNumber=<?php echo $orderNumber; ?>&page=<?php echo $currentPage; ?>"
                                                    method="post">
                                                    <input type="hidden" name="orderID"
                                                        value="<?php echo $getOrderByAccountPagination['orderID']; ?>">
                                                    <button name="viewOrder" class="btn"
                                                        style="color: white;background-color: #223464;">Xem</button>
                                                </form>

                                            </td>
                                            <td>
                                                <form
                                                    action="?action=<?php if($action == "Customer_Profile"){
                                                            echo "Customer_Profile";
                                                       }else if($action == "viewOrderBrowseWait"){
                                                           echo "viewOrderBrowseWait";
                                                       }
                                               ?>&contentNav=MyOrder&orderID=<?php echo $getOrderByAccountPagination['orderID']; ?>"
                                                    method="post">
                                                    <input type="hidden" name="orderID"
                                                        value="<?php echo $getOrderByAccountPagination['orderID']; ?>">
                                                    <button name="cancelOrder" class="btn btn-danger"
                                                        <?php if($getOrderByAccountPagination['state'] == "Đã hủy" || $getOrderByAccountPagination['state'] == "Đã duyệt" || $getOrderByAccountPagination['state'] == "Đã giao" || $getOrderByAccountPagination['state'] == "Đang giao"){echo "disabled";}else{echo "";} ?>>Hủy</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- phân trang -->
                        <div class="row mt-2">
                            <div class="col">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <?php if ($currentPage == 1) : ?>
                                        <li class="page-item ">
                                            <a class="page-link" disabled>Đầu</a>
                                        </li>
                                        <?php else: ?>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="?action=<?php if($action == "Customer_Profile"){
                                                            echo "Customer_Profile";
                                                       }else if($action == "filterOrder"){
                                                           echo "filterOrder&state=$state";
                                                       }
                                               ?>&contentNav=MyOrder&orderNumber=<?php echo $orderNumber; ?>&page=<?php echo $firstPage; ?>">Đầu</a>
                                        </li>

                                        <?php endif; ?>
                                        <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                                        <?php if ($currentPage != $i) : ?>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="?action=<?php if($action == "Customer_Profile"){
                                                            echo "Customer_Profile";
                                                       }else if($action == "filterOrder"){
                                                           echo "filterOrder&state=$state";
                                                       }
                                               ?>&contentNav=MyOrder&orderNumber=<?php echo $orderNumber; ?>&page=<?php echo $i; ?>">
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
                                        <?php if ($currentPage == $totalPage) : ?>
                                        <li class="page-item ">
                                            <a class="page-link" disabled>Cuối</a>
                                        </li>
                                        <?php else: ?>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="?action=<?php if($action == "Customer_Profile"){
                                                            echo "Customer_Profile";
                                                       }else if($action == "filterOrder"){
                                                           echo "filterOrder&state=$state";
                                                       }
                                               ?>&contentNav=MyOrder&orderNumber=<?php echo $orderNumber; ?>&page=<?php echo $endPage; ?>">Cuối</a>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(isset($_POST['viewOrder'])) : ?>
                        <div class="row">
                            <div class="col nameContentNav">
                                <!-- đường dẫn -->
                                <div class="row mt-2">
                                    <div class="col duongdan">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a
                                                        href="?action=Customer_Profile&contentNav=MyOrder"
                                                        style="color: black;font-weight: bolder;">Đơn hàng của bạn</a>
                                                </li>
                                                <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng
                                                    : số <?php echo $orderID; ?></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <h2>
                                    Chi tiết đơn hàng</h2>
                                <h6>Hiển thị: <span
                                        style="color: red;font-weight: bolder;font-style: italic;"><?php echo count($viewProductsByOrder); ?></span>
                                    sản phẩm trong hóa đơn số <?php echo $orderID; ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <table class="table table-responsive table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="sp" style="width: 40%;">Sản phẩm</th>
                                            <th>Đơn giá</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($viewProductsByOrder as $viewProductByOrder) : ?>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-3 imgsp">
                                                        <a
                                                            href="?action=product_detail&productName=<?php echo $viewProductByOrder['productName']; ?>&categoryID=<?php echo $viewProductByOrder['categoryID']; ?>">
                                                            <img class="card-img-top" width="100%"
                                                                src="<?php echo '../images/productimage/' . $viewProductByOrder['productName'] . '.jpg'; ?>"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-9 namesp">
                                                        <?php echo $viewProductByOrder['productName']; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo number_format($viewProductByOrder['finalPrice'], 0, ',', '.'); ?>đ
                                            </td>
                                            <td><?php echo $viewProductByOrder['quantity_order']; ?></td>
                                            <td><?php echo number_format($viewProductByOrder['subtotal'], 0, ',', '.'); ?>đ
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php endif; ?>

                    </div>
                    <div class="tab-pane fade
                                        <?php
                                        if ($contentNav == "ChangePassword") {
                                            echo "show active";
                                        } else {
                                            echo "";
                                        }
                                        ?>" id="v-pills-changePassword" role="tabpanel"
                        aria-labelledby="v-pills-changePassword-tab">
                        <div class="row">
                            <div class="col nameContentNav">
                                <h2>Thay đổi mật khẩu đăng nhập</h2>
                            </div>
                        </div>
                        <hr>
                        <form action="?action=Customer_Profile&contentNav=ChangePassword" method="post">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="password_old">Mật khẩu cũ: </label>
                                        <input type="password" class="form-control" name="password_old"
                                            id="password_old" aria-describedby="password_oldHid"
                                            placeholder="Nhập lại mật khẩu cũ">
                                        <?php if (isset($messagePO)) : ?>
                                        <small id="password_oldHid"
                                            class="form-text text-danger"><?php echo $messagePO; ?></small>
                                        <?php endif; ?>
                                        <?php if (isset($messageVO)) : ?>
                                        <small id="password_oldHid"
                                            class="form-text text-danger"><?php echo $messageVO; ?></small>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password_new">Mật khẩu mới: </label>
                                        <input type="password" class="form-control" name="password_new"
                                            id="password_new" aria-describedby="password_newHid"
                                            placeholder="Nhập mật khẩu mới">
                                        <?php if (isset($messagePN)) : ?>
                                        <small id="password_newHid"
                                            class="form-text text-danger"><?php echo $messagePN; ?></small>
                                        <?php endif; ?>

                                    </div>
                                    <div class="form-group">
                                        <label for="re_password_new">Nhập lại mật khẩu mới: </label>
                                        <input type="password" class="form-control" name="re_password_new"
                                            id="re_password_new" aria-describedby="re_password_newHid"
                                            placeholder="Nhập lại mật khẩu mới đã tạo">
                                        <?php if (isset($messageRPN)) : ?>
                                        <small id="re_password_newHid"
                                            class="form-text text-danger"><?php echo $messageRPN; ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="message">
                                <p class="text-center mt-2">
                                    <?php if (isset($messageP)) {
echo $messageP;
} ?>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col buttonSave mb-2">
                                    <button name="savePasswordNew" class="btn save">Lưu</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="border: 5px solid #223464; margin-top: 0rem;">
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/footer.php"; ?>