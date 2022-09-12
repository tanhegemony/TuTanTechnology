<!doctype html>
<html lang="en">

<head>
    <title>Quản lý danh mục</title>
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
                                        Quản lý danh mục
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="get">
                                            <div class="form-inline">
                                                <input type="hidden" name="action" value="search_category">
                                                <input type="text" class="col form-control ml-2"
                                                    value="<?php if(isset($contentCategory)){echo $contentCategory;} ?>"
                                                    name="contentCategory" placeholder="Nhập danh mục cần tìm kiếm">
                                                <button type="submit" class="btn btn-primary ml-2"><i
                                                        class="fas fa-search"></i></button>
                                                <a href="?action=manageCategory" class="btn btn-info ml-2">Tất cả</a>
                                            </div>
                                        </form>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-9 showNumber">
                                                <p style="font-size: 25px;">Hiển thị:
                                                    <span style="color: red;font-style: italic;font-weight: bolder;">
                                                        <?php echo count($categories); ?></span> danh mục
                                                    <span
                                                        style="color: #223464;font-style: italic;font-weight: bolder;"><?php if(isset($contentCategory)){echo "với giá trị tìm kiếm $contentCategory";} ?></span>
                                                </p>
                                                <div class="message">
                                                    <p class="mb-2">
                                                        <?php if (isset($message)) {
                                                echo $message;
                                            } ?>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-3 add">
                                                <div class="addCategory">
                                                    <a href="?action=add_category"
                                                        class="btn btn-outline-dark float-right">Thêm Danh mục mới</a>
                                                </div>
                                            </div>
                                        </div>

                                        <table class="table table-light text-center table-responsive tableaccount">
                                            <thead class="thead-light" >
                                                <tr>
                                                    <th>CategoryID</th>
                                                    <th>CategoryName</th>
                                                    <th>TypeCategoryID</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(empty($categories)) : ?>
                                                <tr>
                                                    <td colspan="5" class="text-center"
                                                        style="color: red;font-weight: bolder;font-size: 25px;">Không
                                                        tìm thấy danh mục</td>
                                                </tr>

                                                <?php else: ?>
                                                <?php foreach ($categories as $category):?>
                                                <tr>
                                                    <td><?php echo $category['categoryID'];?></td>
                                                    <td><?php echo $category['categoryName'];?></td>
                                                    <td><?php echo $category['typeCategoryID'];?></td>
                                                    <td class="thaotac">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="categoryID"
                                                                value="<?php echo $category['categoryID'];?>">
                                                            <button type="submit"
                                                                formaction="?action=edit_category&categoryID=<?php echo $category['categoryID'];?>"
                                                                class="btn"
                                                                style="color: white;background-color: #223464;">Edit</button>
                                                            <button type="submit"
                                                                onclick="return confirm('Bạn có muốn xoá danh mục có tên <?php echo $category['categoryName'];?>')"
                                                                name="deleteCategory"
                                                                class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
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