<!doctype html>
<html lang="en">

<head>
    <title><?php if($action == "add_flash_sale"){echo "Thêm sản phẩm vào Flash Sale";}else if($action == "edit_flash_sale"){echo "Chỉnh sửa sản phẩm trong Flash Sale";} ?></title>
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
                                <input type="hidden" name="action" value="add_flash_sale">
                                <div class="text-center mt-2 nameForm">
                                    <h3><?php if($action == "add_flash_sale"){echo "Thêm sản phẩm vào Flash Sale";}else if($action == "edit_flash_sale"){echo "Chỉnh sửa sản phẩm trong Flash Sale";} ?>
                                    </h3>
                                </div>
                                <input type="hidden" name="flashSaleID">
                                <div class="form-group">
                                    <label for="productID">Sản phẩm: </label>
                                    <select class="form-control" name="productID" id="productID">

                                        <?php if($action == "add_flash_sale") : ?>
                                        <option value="">Chọn sản phẩm muốn thêm vào Flash Sale</option>
                                        <?php foreach ($getProductsNotInFlashSale as $getProductNotInFlashSale) : ?>
                                        <option value="<?php echo $getProductNotInFlashSale['productID']; ?>">
                                            <?php echo $getProductNotInFlashSale['productName']; ?></option>
                                        <?php endforeach; ?>
                                        <?php elseif($action == "edit_flash_sale"): ?>
                                        <option value="<?php echo $sale['productID']; ?>" selected="true"
                                            disabled="true"><?php echo $sale['productName']; ?></option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="input-group mb-4 discountSale">
                                    <label for="discountSale" class="mt-1">DiscountSale: </label>
                                    <input type="text" class="form-control ml-3" name="discountSale" id="discountSale"
                                           value="<?php if(isset($sale['discountSale'])){ echo  $sale['discountSale'];}else{echo '';} ?>"
                                        placeholder="Nhập % giảm giá của sản phẩm trong Flash Sale"
                                        aria-describedby="basic-addon1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">%</span>
                                    </div>
                                </div>
                                <div class="message">
                                    <p class="text-center">
                                        <?php if (isset($message)) {
                        echo $message;
                    } ?>
                                    </p>
                                </div>
                                <div class="row text-center mt-2 mb-5">
                                    <div class="col">
                                        <?php if($action == "add_flash_sale"): ?>
                                        <button type="submit" name="addFlashSale" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Thêm vào Flash Sale</button>
                                        <?php elseif($action == "edit_flash_sale"): ?>
                                        <button type="submit" name="UpdateSale" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Cập nhật Flash Sale</button>
                                        <?php endif; ?>

                                        <button type="reset" class="btn btn-dark"><img class="img-fluid"
                                                src="../images/reset.png" alt=""> Reset</button>
                                        <button formaction="?action=manageFlashSale" class="btn btn-danger"><i
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