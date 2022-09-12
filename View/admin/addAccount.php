<!doctype html>
<html lang="en">

<head>
    <title><?php if($action == "add_account"){echo "Thêm người dùng";}else if($action == "edit_account"){echo "Chỉnh sửa người dùng";} ?></title>
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
                                    <h3><?php if($action == "add_account"){echo "Thêm người dùng";}else if($action == "edit_account"){echo "Chỉnh sửa người dùng";} ?>
                                    </h3>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="accountID">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email: </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        aria-describedby="emailHid" placeholder="Nhập email của bạn" value="<?php if($action == "edit_account"){ 
                                        echo $accountEdit->getEmail();
                                        }?>" 
                                        <?php if($action == "edit_account"){ 
                                            echo "disabled";
                                            }else{
                                                echo "";
                                            }
                                            ?>>
                                    <small id="emailHid" class="form-text text-muted">Email không được để
                                        trống!!</small>
                                </div>
                                <?php if($action == "add_account") : ?>
                                <div class="form-group">
                                    <label for="password">Password: </label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        aria-describedby="passwordHid" placeholder="Nhập password của bạn">
                                    <small id="passwordHid" class="form-text text-muted">Password không được để
                                        trống!!</small>
                                </div>
                                <div class="form-group">
                                    <label for="re_password">Repeat Password: </label>
                                    <input type="password" class="form-control" name="re_password" id="re_password"
                                        aria-describedby="re_passwordHid" placeholder="Nhập lại password của bạn">
                                    <small id="re_passwordid" class="form-text text-muted">Repeat Password phải trùng
                                        với Password!!</small>
                                </div>
                                <?php endif; ?>
                                <div class="form-inline">
                                    <label for="roles">Roles: </label>
                                    <div class="form-check">
                                        <input class="form-check-input ml-2" value="user" type="radio" name="roles"
                                            id="roles" <?php if($action == "edit_account"){ 
                                                                    if($accountEdit->getRoles() == "user"){
                                                                        echo "checked";
                                                                    }else{
                                                                        echo "";
                                                                    }
                                                               }else if($action == "add_account"){
                                                                   echo "checked";
                                                               }?>>
                                        <label class="form-check-label" for="roles">
                                            User
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input ml-2" value="admin" type="radio" name="roles"
                                            id="roles" <?php if($action == "edit_account"){ 
                                                        if($accountEdit->getRoles() == "admin"){
                                                            echo "checked";
                                                        }else{
                                                            echo "";
                                                        }
                                                   }else if($action == "add_account"){
                                                       echo "";
                                                   }?>>
                                                                    <label class="form-check-label" for="roles">
                                            Admin
                                        </label>
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
                                        <?php if($action == "add_account"): ?>
                                        <button type="submit" name="addAccount" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Thêm người dùng</button>
                                        <?php elseif($action == "edit_account"): ?>
                                        <button type="submit" name="UpdateAccount" class="btn addProductButton"><i
                                                class="fas fa-plus-circle"></i> Cập nhật người dùng</button>
                                        <?php endif; ?>

                                        <button type="reset" class="btn btn-dark"><img class="img-fluid"
                                                src="../images/icon/reset.png" alt=""> Reset</button>
                                        <button formaction="?action=manageAccount" class="btn btn-danger"><i
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