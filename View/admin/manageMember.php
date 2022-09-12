<!doctype html>
<html lang="en">

<head>
    <title>Quản lý thành viên</title>
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
                                    Quản lý thành viên
                                </div>
                                <div class="card-body">
                                    <form action="" method="get">
                                        <div class="form-inline">
                                            <input type="hidden" name="action" value="search_member">
                                            <input type="text" class="col form-control ml-2"
                                                value="<?php if(isset($contentMember)){echo $contentMember;} ?>"
                                                name="contentMember" placeholder="Nhập thành viên cần tìm kiếm">
                                            <button type="submit" class="btn btn-primary ml-2"><i
                                                    class="fas fa-search"></i></button>
                                            <a href="?action=manageMember" class="btn btn-info ml-2">Tất cả</a>
                                        </div>
                                    </form>
                                    <div class="row mb-2 mt-2">
                                        <div class="col">
                                            <p style="font-size: 25px;">Hiển thị:
                                                <span style="color: red;font-style: italic;font-weight: bolder;">
                                                    <?php echo count($members); ?></span> thành viên
                                                <span
                                                    style="color: #223464;font-style: italic;font-weight: bolder;"><?php if(isset($contentMember)){echo "với giá trị tìm kiếm $contentMember";} ?></span>
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
                                                <th>MemberID</th>
                                                <th>EmailMember</th>
                                                <th>AccountID</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if(empty($members)) : ?>
                                            <tr>
                                                <td colspan="5" class="text-center"
                                                    style="color: red;font-weight: bolder;font-size: 25px;">Không tìm
                                                    thấy thành viên</td>
                                            </tr>
                                            <?php else: ?>
                                            <?php foreach ($members as $member):?>
                                            <tr>
                                                <td><?php echo $member['memberID'];?></td>
                                                <td><?php echo $member['emailMember'];?></td>
                                                <td><?php echo $member['accountID'];?></td>
                                                <td class="thaotac">
                                                    <form action="" method="post">
                                                        <input type="hidden" name="memberID"
                                                            value="<?php echo $member['memberID'];?>">
                                                        <button type="submit"
                                                            onclick="return confirm('Bạn có muốn xoá thành viên có tên email thành viên <?php echo $member['emailMember'];?>')"
                                                            name="deleteMember" class="btn btn-danger">Delete</button>
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
                                                        <a class="page-link" href="?action=<?php if($action == "manageMember"){
                                                echo "manageMember";
                                            }else if($action == "search_member"){
                                                echo "search_member&contentMember=$contentMember";
                                            }?>&page=<?php echo $firstPage; ?>">Đầu</a>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php for ($i=1;$i<=$totalPage;$i++) : ?>
                                                    <?php if($currentPage != $i) : ?>
                                                    <li class="page-item">
                                                        <a class="page-link" href="?action=<?php if($action == "manageMember"){
                                                echo "manageMember";
                                            }else if($action == "search_member"){
                                                echo "search_member&contentMember=$contentMember";
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
                                                        <a class="page-link" href="?action=<?php if($action == "manageMember"){
                                                echo "manageMember";
                                            }else if($action == "search_member"){
                                                echo "search_member&contentMember=$contentMember";
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