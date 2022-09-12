<!doctype html>
<html lang="en">

<head>
    <title>Quản lý chương trình Flash Sale</title>
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
                                    Quản lý chương trình Flash Sale
                                </div>
                                <div class="card-body">
                                    <form action="" method="get">
                                        <div class="form-inline">
                                            <input type="hidden" name="action" value="search_flash_sale">
                                            <input type="text" class="col form-control ml-2"
                                                value="<?php if(isset($contentSale)){echo $contentSale;} ?>"
                                                name="contentSale"
                                                placeholder="Nhập tên sản phẩm đang sale cần tìm kiếm">
                                            <button type="submit" class="btn btn-primary ml-2"><i
                                                    class="fas fa-search"></i></button>
                                            <a href="?action=manageFlashSale" class="btn btn-info ml-2">Tất cả</a>
                                        </div>
                                    </form>
                                    <div class="row mb-2 mt-2">
                                        <div class="col-6 showNumber">
                                            <form action="?action=<?php if($action == "manageFlashSale"){
                                        echo "manageFlashSale";
                                     }else if($action == "search_flash_sale"){
                                         echo "search_flash_sale&contentSale=$contentSale";
                                     }
                                     ?>" method="post">
                                                <div class="form-inline float-left">
                                                    <label for="saleNumber" class="ml-2">Số sản phẩm hiển thị: </label>
                                                    <select id="saleNumber" class="form-control ml-2" name="saleNumber">
                                                        <option value="5" <?php if ($saleNumber == 5) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>5 sản phẩm</option>
                                                        <option value="10" <?php if ($saleNumber == 10) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>10 sản phẩm</option>
                                                        <option value="15" <?php if ($saleNumber == 15) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>15 sản phẩm</option>
                                                        <option value="20" <?php if ($saleNumber == 20) {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>20 sản phẩm</option>
                                                    </select>
                                                    <button type="submit" name="applySaleNumber"
                                                        class="btn btn-primary ml-2">Áp dụng</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 add">
                                            <div class="addCategory">
                                                <a href="?action=add_flash_sale"
                                                    class="btn btn-outline-dark float-right">Thêm Sản phẩm vào chương
                                                    trình Flash Sale</a>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table table-light text-center table-responsive tableaccount">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="spFlashSale" style="width: 50%;">Product</th>
                                                <th>Discount Sale</th>
                                                <th>FinalPrice Sale</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if(empty($flashSales)) : ?>
                                            <tr>
                                                <td colspan="5" class="text-center"
                                                    style="color: red;font-weight: bolder;font-size: 25px;">Không tìm
                                                    thấy sản phẩm</td>
                                            </tr>

                                            <?php else: ?>
                                            <?php foreach ($flashSales as $flashSale):?>
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-5 imgcartsp">
                                                            <img src="<?php echo '../images/productimage/' . $flashSale['productName'] . '.jpg'; ?>"
                                                                width="100%" alt="">
                                                        </div>
                                                        <div class="col-7 sp">
                                                            <h6><?php echo $flashSale['productName']; ?></h6>
                                                            <p class="card-text price1">
                                                                <span>Giá :</span>
                                                                <?php echo number_format($flashSale['price'], 0, ',', '.'); ?>đ
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?php echo $flashSale['discountSale'];?></td>
                                                <td><?php echo number_format($flashSale['finalPriceSale'], 0, ',', '.'); ?>đ
                                                </td>
                                                <td class="thaotac">
                                                    <form action="" method="post">
                                                        <input type="hidden" name="flashSaleID"
                                                            value="<?php echo $flashSale['flashSaleID'];?>">
                                                        <button type="submit"
                                                            formaction="?action=edit_flash_sale&flashSaleID=<?php echo $flashSale['flashSaleID'];?>"
                                                            class="btn"
                                                            style="color: white;background-color: #223464;">Edit</button>
                                                        <button type="submit"
                                                            onclick="return confirm('Bạn có muốn xoá sản phẩm trong flash sale có tên <?php echo $flashSale['productName'];?>')"
                                                            name="deleteFlashSale"
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
                                                        <a class="page-link" href="?action=<?php if($action == "manageFlashSale"){
                                                echo "manageFlashSale";
                                            }else if($action == "search_flash_sale"){
                                                echo "search_flash_sale&contentSale=$contentSale";
                                            }?>&page=<?php echo $firstPage; ?>">Đầu</a>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php for ($i=1;$i<=$totalPage;$i++) : ?>
                                                    <?php if($currentPage != $i) : ?>
                                                    <li class="page-item">
                                                        <a class="page-link" href="?action=<?php if($action == "manageFlashSale"){
                                                echo "manageFlashSale";
                                            }else if($action == "search_flash_sale"){
                                                echo "search_flash_sale&contentSale=$contentSale";
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
                                                        <a class="page-link" href="?action=<?php if($action == "manageFlashSale"){
                                                echo "manageFlashSale";
                                            }else if($action == "search_flash_sale"){
                                                echo "search_flash_sale&contentSale=$contentSale";
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