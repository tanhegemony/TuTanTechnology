<!doctype html>
<html lang="en">

<head>
    <title>Quản lý đơn hàng</title>
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
                                <div class="card-header text-center">
                                    Quản lý đơn hàng
                                </div>
                                <div class="card-body">
                                    <form action="" method="get">
                                        <div class="form-inline">
                                            <input type="hidden" name="action" value="search_order">
                                            <input type="text" class="col form-control ml-2"
                                                value="<?php if(isset($contentOrder)){echo $contentOrder;} ?>"
                                                name="contentOrder" placeholder="Nhập đơn hàng cần tìm kiếm">
                                            <button type="submit" class="btn btn-primary ml-2"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                    <div class="row mb-2 mt-2">
                                        <div class="col">
                                            <form action="?action=<?php if($action == "manageOrder"){
                                        echo "manageOrder";
                                     }else if($action == "search_order"){
                                         echo "search_order&contentOrder=$contentOrder";
                                     }
                                     ?>" method="post">
                                                <div class="form-inline float-left">
                                                    <label for="orderNumber" class="ml-2">Số đơn hàng hiển thị: </label>
                                                    <select id="accountNumber" class="form-control ml-2"
                                                        name="orderNumber">
                                                        <option value="5" <?php if ($orderNumber == 5) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>5 đơn hàng</option>
                                                        <option value="10" <?php if ($orderNumber == 10) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>10 đơn hàng</option>
                                                        <option value="15" <?php if ($orderNumber == 15) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>15 đơn hàng</option>
                                                        <option value="20" <?php if ($orderNumber == 20) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>20 đơn hàng</option>
                                                    </select>
                                                    <button type="submit" name="applyOrderNumber"
                                                        class="btn btn-primary ml-2">Áp dụng</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col filterOrder" style="color: white;">
                                            <a href="?action=manageOrder" class="btn btn-dark"><i
                                                    class="fas fa-border-all"></i> Tất cả đơn hàng</a>
                                            <a href="?action=filterOrder&state=Đã duyệt" class="btn btn-success"><i
                                                    class="fas fa-check-circle"></i> Đơn hàng đã duyệt</a>
                                            <a href="?action=filterOrder&state=Đang chờ duyệt"
                                                style="color: white;background-color: #223464;" class="btn"><i
                                                    class="fas fa-pause-circle"></i> Đơn hàng đang chờ duyệt</a>
                                            <a href="?action=filterOrder&state=Đang giao" class="btn btn-primary"><i
                                                    class="fas fa-pause-circle"></i> Đơn hàng đang giao</a>
                                            <a href="?action=filterOrder&state=Đã giao" class="btn btn-secondary"><i
                                                    class="fas fa-pause-circle"></i> Đơn hàng đã giao</a>
                                            <a href="?action=filterOrder&state=Đã hủy" class="btn btn-danger"><i
                                                    class="fas fa-window-close"></i> Đơn hàng đã hủy</a>

                                        </div>
                                    </div>

                                    <table class="table table-light text-center table-responsive tableaccount">
                                        <?php if(isset($_POST['viewOrder'])) : ?>
                                        <div class="row">
                                            <div class="col nameContentNav">
                                                <!-- đường dẫn -->
                                                <div class="row mt-2">
                                                    <div class="col duongdan">
                                                        <nav aria-label="breadcrumb">
                                                            <ol class="breadcrumb">
                                                                <li class="breadcrumb-item"><a
                                                                        href="?action=manageOrder"
                                                                        style="color: black;font-weight: bolder;">Quản
                                                                        lý đơn hàng</a>
                                                                </li>
                                                                <li class="breadcrumb-item active" aria-current="page">
                                                                    Chi tiết đơn hàng
                                                                    : số <?php echo $orderID; ?></li>
                                                            </ol>
                                                        </nav>
                                                    </div>
                                                </div>
                                                <h2>Chi tiết đơn hàng</h2>
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
                                                            <th class="spOrder" style="width: 40%;">Sản phẩm</th>
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
                                                                        <img class="card-img-top" width="100%"
                                                                            src="<?php echo '../images/productimage/' . $viewProductByOrder['productName'] . '.jpg'; ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="col-9 namesp">
                                                                        <h6><?php echo $viewProductByOrder['productName']; ?>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><?php echo number_format($viewProductByOrder['finalPrice'], 0, ',', '.'); ?>đ
                                                            </td>
                                                            <td><?php echo $viewProductByOrder['quantity_order']; ?>
                                                            </td>
                                                            <td><?php echo number_format($viewProductByOrder['subtotal'], 0, ',', '.'); ?>đ
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <?php else: ?>
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Đơn hàng số</th>
                                                <th>Thành tiền</th>
                                                <th>Địa chỉ</th>
                                                <th style="width: 17.55%;">Ghi chú</th>
                                                <th>Ngày đặt</th>
                                                <th>Trạng thái</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if(empty($orders)) : ?>
                                            <tr>
                                                <td colspan="5" class="text-center"
                                                    style="color: red;font-weight: bolder;font-size: 25px;">Không tìm
                                                    thấy đơn hàng</td>
                                            </tr>

                                            <?php else: ?>
                                            <?php foreach ($orders as $order):?>
                                            <tr>
                                                <td><?php echo $order['orderID'];?></td>
                                                <td><?php echo number_format($order['total'], 0, ',', '.'); ?>đ</td>
                                                <td><?php echo $order['customerAddress'];?></td>
                                                <td><?php echo $order['note'];?></td>
                                                <td><?php echo $order['buyDate'];?></td>
                                                <td><?php echo $order['state'];?></td>
                                                <td class="thaotac">
                                                    <form action="" method="post">
                                                        <input type="hidden" name="orderID"
                                                            value="<?php echo $order['orderID'];?>">
                                                        <button type="submit" name="viewOrder"
                                                            formaction="?action=manageOrder&orderID=<?php echo $order['orderID'];?>"
                                                            class="btn"
                                                            style="color: white;background-color: #223464;">View</button>
                                                        <?php if($order['state'] == "Đang chờ duyệt") :?>
                                                        <button type="submit"
                                                            formaction="?action=changeState&state=Đã duyệt&orderID=<?php echo $order['orderID'];?>"
                                                            class="btn btn-success">Duyệt</button>
                                                        <button type="submit"
                                                            formaction="?action=changeState&state=Đã hủy&orderID=<?php echo $order['orderID'];?>"
                                                            class="btn btn-danger">Hủy</button>
                                                        <?php elseif($order['state'] == "Đã duyệt") : ?>
                                                        <button type="submit"
                                                            formaction="?action=changeState&state=Đang giao&orderID=<?php echo $order['orderID'];?>"
                                                            class="btn btn-primary">Đang giao hàng</button>
                                                        <?php elseif($order['state'] == "Đang giao") : ?>
                                                        <button type="submit"
                                                            formaction="?action=changeState&state=Đã giao&orderID=<?php echo $order['orderID'];?>"
                                                            class="btn btn-secondary">Đã giao hàng</button>
                                                        <?php endif; ?>

                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                            <?php endif; ?>


                                        </tbody>
                                        <?php endif; ?>
                                    </table>
                                </div>
                                <?php if(!isset($_POST['viewOrder'])) : ?>
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
                                                        <a class="page-link" href="?action=<?php if($action == "manageOrder"){
                                                echo "manageOrder";
                                            }else if($action == "search_order"){
                                                echo "search_order&contentOrder=$contentOrder";
                                            }else if($action == "filterOrder"){
                                                echo "filterOrder&state=$state";
                                            }
                                            ?>&page=<?php echo $firstPage; ?>">Đầu</a>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php for ($i=1;$i<=$totalPage;$i++) : ?>
                                                    <?php if($currentPage != $i) : ?>
                                                    <li class="page-item">
                                                        <a class="page-link" href="?action=<?php if($action == "manageOrder"){
                                                echo "manageOrder";
                                            }else if($action == "search_order"){
                                                echo "search_order&contentOrder=$contentOrder";
                                            }else if($action == "filterOrder"){
                                                echo "filterOrder&state=$state";
                                            }?>&page=<?php echo $i; ?>">
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
                                                        <a class="page-link" href="?action=<?php if($action == "manageOrder"){
                                                echo "manageOrder";
                                            }else if($action == "search_order"){
                                                echo "search_order&contentOrder=$contentOrder";
                                            }else if($action == "filterOrder"){
                                                echo "filterOrder&state=$state";
                                            }?>&page=<?php echo $endPage; ?>">Cuối</a>
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
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/footer.php"; ?>