<!doctype html>
<html lang="en">

<head>
    <title>Quản lý người dùng</title>
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
                                        Quản lý người dùng
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="get">
                                            <div class="form-inline">
                                                <input type="hidden" name="action" value="search_account">
                                                <input type="text" class="col form-control ml-2"
                                                    value="<?php if(isset($contentAccount)){echo $contentAccount;} ?>"
                                                    name="contentAccount"
                                                    placeholder="Nhập tên người dùng cần tìm kiếm">
                                                <button type="submit" class="btn btn-primary ml-2"><i
                                                        class="fas fa-search"></i></button>
                                                <a href="?action=manageAccount" class="btn btn-info ml-2">Tất cả</a>
                                            </div>
                                        </form>
                                        <div class="row mb-2 mt-2">

                                            <div class="col-6 showNumber">
                                                <form action="?action=<?php if($action == "manageAccount"){
                                                    echo "manageAccount";
                                                 }else if($action == "search_account"){
                                                     echo "search_account&contentAccount=$contentAccount";
                                                 }
                                                 ?>" method="post">
                                                    <div class="form-inline float-left">
                                                        <label for="accountNumber" class="ml-2">Số người dùng hiển thị:
                                                        </label>
                                                        <select id="accountNumber" class="form-control ml-2"
                                                            name="accountNumber">
                                                            <option value="5" <?php if ($accountNumber == 5) {
                                                                echo "selected";
                                                                } else {
                                                                echo "";
                                                                } ?>>5 người</option>
                                                            <option value="10" <?php if ($accountNumber == 10) {
                                                                echo "selected";
                                                                } else {
                                                                echo "";
                                                                } ?>>10 người</option>
                                                            <option value="15" <?php if ($accountNumber == 15) {
                                                                echo "selected";
                                                                } else {
                                                                echo "";
                                                                } ?>>15 người</option>
                                                            <option value="20" <?php if ($accountNumber == 20) {
                                                                echo "selected";
                                                                } else {
                                                                echo "";
                                                                } ?>>20 người</option>
                                                        </select>
                                                        <button type="submit" name="applyAccountNumber"
                                                            class="btn btn-primary ml-2">Áp dụng</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-6 add">
                                                <div class="addCategory">
                                                    <a href="?action=add_account"
                                                        class="btn btn-outline-dark float-right">Thêm Account mới</a>
                                                </div>
                                            </div>
                                        </div>

                                        <table class="table table-light text-center table-responsive tableaccount">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Email</th>
                                                    <th>Roles</th>
                                                    <th>RegisterDate</th>
                                                    <th>StateAccount</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(empty($accounts)) : ?>
                                                <tr>
                                                    <td colspan="5" class="text-center"
                                                        style="color: red;font-weight: bolder;font-size: 25px;">Không
                                                        tìm thấy người dùng</td>
                                                </tr>

                                                <?php else: ?>
                                                <?php foreach ($accounts as $account):?>
                                                <tr>
                                                    <td><?php echo $account['email'];?></td>
                                                    <td><?php echo $account['roles'];?></td>
                                                    <td><?php echo $account['registerDate'];?></td>
                                                    <td><?php echo $account['stateAccount'];?></td>
                                                    <td class="thaotac">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="accountID"
                                                                value="<?php echo $account['accountID'];?>">
                                                            <button type="submit"
                                                                formaction="?action=edit_account&accountID=<?php echo $account['accountID'];?>"
                                                                class="btn"
                                                                style="color: white;background-color: #223464;">Edit</button>
                                                            <button type="submit"
                                                                onclick="return confirm('Bạn có muốn xoá người dùng có email <?php echo $account['email'];?>')"
                                                                name="deleteAccount"
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
                                                            <a class="page-link" href="?action=<?php if($action == "manageAccount"){
                                                            echo "manageAccount";
                                                        }else if($action == "search_account"){
                                                            echo "search_account&contentAccount=$contentAccount";
                                                        }?>&page=<?php echo $firstPage; ?>">Đầu</a>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php for ($i=1;$i<=$totalPage;$i++) : ?>
                                                        <?php if($currentPage != $i) : ?>
                                                        <li class="page-item">
                                                            <a class="page-link" href="?action=<?php if($action == "manageAccount"){
                                                            echo "manageAccount";
                                                        }else if($action == "search_account"){
                                                            echo "search_account&contentAccount=$contentAccount";
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
                                                            <a class="page-link" href="?action=<?php if($action == "manageAccount"){
                                                            echo "manageAccount";
                                                        }else if($action == "search_account"){
                                                            echo "search_account&contentAccount=$contentAccount";
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