<!doctype html>
<html lang="en">

    <head>
        <title>Thanh toán</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/x-icon" href="../images/Favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../images/fontawesome-free-5.15.4-web/css/all.min.css"/>
        <style>
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/user/checkout.css"; ?>
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/checkoutResponsive.css"; ?>
        </style>
    </head>

    <body>
        <div class="container">
             <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/header.php"; ?>
            <div class="row">
                <div class="col">
                    <h3 class="title-comm"><span class="title-holder">THANH TOÁN</span></h3>
                </div>
            </div>
            <?php if(isset($message)) : ?>
            <div class="row">
                <div class="col">
                    <p class="text-center" style="font-size: 15px;color: red;font-style: italic;font-weight: bolder;"><?php echo $message; ?></p>
                </div>
            </div>
            
            <?php endif; ?>
            <?php if(empty($_SESSION['cart'])): ?>
            <div class="container successOrder">
                <div class="row">
                    <div class="col text-center contentSuccessOrder">
                        <h2>Bạn đã đặt hàng thành công! Vui lòng đợi cửa hàng phê duyệt!</h2>
                    </div>
                </div>
                <form action="?action=home_page" method="post">
                    <div class="row" >
                        <div class="col text-center continueOrder">
                            <button type="submit" class="btn btn-light">Tiếp tục mua hàng</button>
                        </div>
                    </div>
                </form>
                
            </div>
            <?php else : ?>
            <div class="container">
                <div class="row">
                    <div class="col-6 productinfo">
                        <div class="row">
                            <div class="col countsp">
                                <h4>Có <span><?php echo count($_SESSION['cart']); ?></span> sản phẩm được chọn thanh toán</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table class="table table-light">
                                    <tr>
                                        <th>STT</th>
                                        <th colspan="2" class="text-center">Sản phẩm</th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <input type="hidden" name="orderID">
                                    <?php foreach ($_SESSION['cart'] as $cart) : ?>
                                        <input type="hidden" name="orderDetailID">
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td colspan="2" class="infospcart">
                                                <div class="row">
                                                    <div class="col-4 imgcartsp">
                                                        <img class="card-img-top" width="100%"
                                                             src="<?php echo '../images/productimage/' . $cart['productName'] . '.jpg'; ?>" alt="">
                                                    </div>
                                                    <div class="col-8 sp">
                                                        <a href="#">
                                                            <h6><?php echo $cart['productName']; ?></h6>
                                                        </a>
                                                        <p class="card-text price1">
                                                            <span>Giá :</span> <?php echo number_format($cart['finalPrice'], 0, ',', '.'); ?>đ
                                                        </p>
                                                        <p>Giảm giá: <span class="mgg1">-<?php echo $cart['discount']; ?>%</span></p>
                                                        <p class="quantity">Số lượng: <span><?php echo $cart['quantity']; ?></span></p>
                                                        <p class="card-text finalprice1">
                                                            <span>Thành tiền :</span> <?php echo number_format($cart['finalPrice'] * $cart['quantity'], 0, ',', '.'); ?>đ
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="3">
                                            <div class="row text-center">
                                                <div class="col total">
                                                    Mã giảm giá đã nhập: <span style="color: #223464;font-weight: bolder;">
                                                        <?php
                                                        foreach ($_SESSION['discountCode'] as $contentDiscountCode){
                                                            if(empty($contentDiscountCode)){
                                                                    echo "Unknown";
                                                                }else{
                                                                    echo $contentDiscountCode;
                                                                }
                                                        }
                                                        ?>
                                                    </span> 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="row text-center">
                                                <div class="col total">
                                                    <?php
                                                    $subtotal = 0;
                                                    foreach ($_SESSION['discountCode'] as $contentDiscountCode){
                                                            if($contentDiscountCode == "Unknown" || empty($contentDiscountCode)){
                                                                    $discountCode = 0;
                                                            }else{
                                                                $getDiscountCodeByContent = $cartDB->getDiscountCodeByContent($contentDiscountCode);
                                                                $discountCode = $getDiscountCodeByContent['valueDiscount'];
                                                            }
                                                    }
                                                   
                                                    
                                                    if (isset($_SESSION['cart'])) {
                                                        foreach ($_SESSION['cart'] as $cart) {
                                                            $subtotal += $cart['quantity'] * $cart['finalPrice'];
                                                        }
                                                    } else {
                                                        $_SESSION['cart'] = array();
                                                    }
                                                    $total = 0;
                                                    $total = $subtotal - $discountCode;
                                                    ?>
                                                    <p>Tổng số tiền cần thanh toán: <span><?php echo number_format($total, 0, ',', '.'); ?>đ</span></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 customerinfo">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col">
                                    <h4>Thông tin khách hàng</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="hidden" name="customerID">
                                    <div class="form-group">
                                        <label for="customerName">Họ và tên:</label>
                                        <input type="text" class="form-control" name="customerName" id="customerName" aria-describedby="customerNameHId"
                                               placeholder="Họ và tên" value="<?php if(isset($customer['customerName'])){echo $customer['customerName'];}else{echo '';}  ?>"
                                               <?php if(isset($customer['customerName'])){echo 'disabled';}else{echo '';}  ?>>
                                        <small id="customerNameHId" class="form-text text-muted">Tên khách hàng không được để
                                            trống!!</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="customerPhone">Số điện thoại:</label>
                                        <input type="text" class="form-control" name="customerPhone" id="customerPhone"
                                               aria-describedby="customerPhoneHId" placeholder="Số điện thoại" value="<?php if(isset($customer['customerPhone'])){echo $customer['customerPhone'];}else{echo '';}  ?>"
                                               <?php if(isset($customer['customerPhone'])){echo 'disabled';}else{echo '';}  ?>>
                                        <small id="customerPhoneHId" class="form-text text-muted">Số điện thoại không được để
                                            trống!!</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="customerEmail">Email:</label>
                                        <input type="text" class="form-control" name="customerEmail" id="customerEmail"
                                               aria-describedby="customerEmailHId" placeholder="Địa chỉ email" value="<?php if(isset($customer['customerEmail'])){echo $customer['customerEmail'];}else{echo '';}  ?>"
                                               <?php if(isset($customer['customerEmail'])){echo 'disabled';}else{echo '';}  ?>>
                                        <small id="customerEmailHId" class="form-text text-muted">Địa chỉ email không được để
                                            trống!!</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="note">Lời nhắn cho cửa hàng: </label>
                                    <input type="text" class="form-control" name="note" id="note"
                                           placeholder="Lời nhắn của bạn">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col">
                                    <h4>Thông tin nhận hàng</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <p style="font-weight: bolder;font-style: italic;">Chọn hình thức nhận hàng: </p>
                                        <input type="radio"  name="typeShip" id="typeShip" value="Giao hàng tận nơi" />
                                        Giao hàng tận nơi
                                        <input class="ml-3" type="radio" " name="typeShip" id="typeShip" value="Nhận tại cửa hàng" /> 
                                        Nhận tại cửa hàng
                                        <br>
                                        <p class="text-center mt-3 elementaddress">Nhập địa chỉ nhận hàng</p>
                                        <div class="form-group">
                                            <label for="address">Địa chỉ: </label>
                                            <input type="text" class="form-control" name="customerAddress" id="customerAddress"
                                                  value="<?php if(isset($customer['customerAddress'])){echo $customer['customerAddress'];}else{echo '';}  ?>" aria-describedby="customerAddressHid" placeholder="Số nhà, Đường, Thôn, Phường/Xã, ...">
                                            <small id="customerAddressHid" class="form-text text-muted">Địa chỉ không
                                                được để trống!!</small>
                                        </div>
                                        <div class="form-group">
                                            <p>Lựa chọn địa chỉ thường dùng: </p>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="customerNameAddress"
                                                           id="customerNameAddress" value="congty" 
                                                               <?php if(isset($customer['customerNameAddress']) && $customer['customerNameAddress'] == "congty"){
                                                                   echo "checked";
                                                               }else{echo '';}  ?>/> Công ty / Cơ quan
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
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <p style="font-weight: bolder;font-style: italic;">Chọn hình thức thanh toán: </p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typePay" id="r1" value="Trả tiền mặt khi nhận hàng" checked>
                                            <label class="form-check-label" for="r1">
                                                Trả tiền mặt khi nhận hàng
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typePay" id="r2" value="ATM nội địa/QR Code/ Internet Banking">
                                            <label class="form-check-label" for="r2">
                                                ATM nội địa/QR Code/ Internet Banking
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typePay" id="r3" value="Thanh toán bằng thẻ quốc tế Visa, Master, JCB, AMEX">
                                            <label class="form-check-label" for="r3">
                                                Thanh toán bằng thẻ quốc tế Visa, Master, JCB, AMEX
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typePay" id="r4" value="Trả góp 0%">
                                            <label class="form-check-label" for="r4">
                                                Trả góp 0%
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col buttonhoantat">
                                    <button name="checkout" class="btn btn-danger">Hoàn tất đặt hàng</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <hr style="border: 5px solid #223464;">
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/footer.php"; ?>

