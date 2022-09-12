<!doctype html>
<html lang="en">

<head>
    <title>Quản lý khách hàng</title>
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
                                        Quản lý khách hàng
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="get">
                                            <div class="form-inline">
                                                <input type="hidden" name="action" value="search_customer">
                                                <input type="text" class="col form-control ml-2"
                                                    value="<?php if(isset($contentCustomer)){echo $contentCustomer;} ?>"
                                                    name="contentCustomer"
                                                    placeholder="Nhập tên khách hàng cần tìm kiếm">
                                                <button type="submit" class="btn btn-primary ml-2"><i
                                                        class="fas fa-search"></i></button>
                                                <a href="?action=manageCustomer" class="btn btn-info ml-2">Tất cả</a>
                                            </div>
                                        </form>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-6 showNumber">
                                                <form action="?action=<?php if($action == "manageCustomer"){
                                        echo "manageCustomer";
                                     }else if($action == "search_customer"){
                                         echo "search_customer&contentCustomer=$contentCustomer";
                                     }
                                     ?>" method="post">
                                                    <div class="form-inline float-left">
                                                        <label for="customerNumber" class="ml-2">Số khách hàng hiển thị:
                                                        </label>
                                                        <select id="customerNumber" class="form-control ml-2"
                                                            name="customerNumber">
                                                            <option value="5" <?php if ($customerNumber == 5) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>5 người</option>
                                                            <option value="10" <?php if ($customerNumber == 10) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>10 người</option>
                                                            <option value="15" <?php if ($customerNumber == 15) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>15 người</option>
                                                            <option value="20" <?php if ($customerNumber == 20) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>20 người</option>
                                                        </select>
                                                        <button type="submit" name="applyCustomerNumber"
                                                            class="btn btn-primary ml-2">Áp dụng</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <table class="table table-light table-responsive text-center tableaccount">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th style="width: 15%;">Image</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>AccountID</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(empty($customers)) : ?>
                                                <tr>
                                                    <td colspan="5" class="text-center"
                                                        style="color: red;font-weight: bolder;font-size: 25px;">Không
                                                        tìm thấy người dùng</td>
                                                </tr>

                                                <?php else: ?>
                                                <?php foreach ($customers as $customer):?>
                                                <tr>
                                                    <td>
                                                        <img class="img-fluid" id="customerImage"
                                                            src="<?php if(empty($customer['customerImage'])){echo '../images/userdangnhap.jpg';}else{ echo '../images/'.$customer['customerImage'];}  ?>"
                                                            width="50%">
                                                    </td>
                                                    <td><?php echo $customer['customerName'];?></td>
                                                    <td><?php echo $customer['customerPhone'];?></td>
                                                    <td><?php echo $customer['customerEmail'];?></td>
                                                    <td><?php echo $customer['customerAddress'];?></td>
                                                    <td><?php echo $customer['accountID'];?></td>
                                                    <td class="thaotac">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="customerID"
                                                                value="<?php echo $customer['customerID'];?>">
                                                            <button type="submit"
                                                                formaction="?action=edit_customer&customerID=<?php echo $customer['customerID'];?>"
                                                                class="btn"
                                                                style="color: white;background-color: #223464;">Edit</button>
                                                            <button type="submit"
                                                                onclick="return confirm('Bạn có muốn xoá khách hàng có tên <?php echo $customer['customerName'];?>')"
                                                                name="deleteCustomer"
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
                                                            <a class="page-link" href="?action=<?php if($action == "manageCustomer"){
                                                echo "manageCustomer";
                                            }else if($action == "search_customer"){
                                                echo "search_customer&contentCustomer=$contentCustomer";
                                            }?>&page=<?php echo $firstPage; ?>">Đầu</a>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php for ($i=1;$i<=$totalPage;$i++) : ?>
                                                        <?php if($currentPage != $i) : ?>
                                                        <li class="page-item">
                                                            <a class="page-link" href="?action=<?php if($action == "manageCustomer"){
                                                echo "manageCustomer";
                                            }else if($action == "search_customer"){
                                                echo "search_customer&contentCustomer=$contentCustomer";
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
                                                            <a class="page-link" href="?action=<?php if($action == "manageCustomer"){
                                                echo "manageCustomer";
                                            }else if($action == "search_customer"){
                                                echo "search_customer&contentCustomer=$contentCustomer";
                                            }?>&page=<?php echo $endPage; ?>">Cuối</a>
                                                        </li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/footer.php"; ?>