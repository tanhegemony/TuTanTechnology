<!doctype html>
<html lang="en">

<head>
    <title>Quản lý loại danh mục</title>
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
                                        Quản lý loại danh mục
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="get">
                                            <div class="form-inline">
                                                <input type="hidden" name="action" value="search_type_category">
                                                <input type="text" class="col form-control ml-2"
                                                    value="<?php if(isset($contentTypeCategory)){echo $contentTypeCategory;} ?>"
                                                    name="contentTypeCategory"
                                                    placeholder="Nhập loại danh mục cần tìm kiếm">
                                                <button type="submit" class="btn btn-primary ml-2"><i
                                                        class="fas fa-search"></i></button>
                                                <a href="?action=manageTypeCategory" class="btn btn-info ml-2">Tất
                                                    cả</a>
                                            </div>
                                        </form>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-9 showNumber">
                                                <p style="font-size: 25px;">Hiển thị:
                                                    <span style="color: red;font-style: italic;font-weight: bolder;">
                                                        <?php echo count($typeCategories); ?></span> loại danh mục
                                                    <span
                                                        style="color: #223464;font-style: italic;font-weight: bolder;"><?php if(isset($contentTypeCategory)){echo "với giá trị tìm kiếm $contentTypeCategory";} ?></span>
                                                </p>
                                                <div class="message">
                                                    <p class="mb-2">
                                                        <?php if (isset($message)) {
                                                echo $message;
                                            } ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <table class="table table-light text-center table-responsive tableaccount">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>TypeCategoryID</th>
                                                    <th>TypeCategoryName</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(empty($typeCategories)) : ?>
                                                <tr>
                                                    <td colspan="5" class="text-center"
                                                        style="color: red;font-weight: bolder;font-size: 25px;">Không
                                                        tìm thấy loại danh mục</td>
                                                </tr>

                                                <?php else: ?>
                                                <?php foreach ($typeCategories as $typeCategory):?>
                                                <tr>
                                                    <td><?php echo $typeCategory['typeCategoryID'];?></td>
                                                    <td><?php echo $typeCategory['typeCategoryName'];?></td>
                                                </tr>
                                                <?php endforeach;?>
                                                <?php endif; ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                </div>
            </div>
        </div>
    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/footer.php"; ?>