<!doctype html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/user/loginAndRegistration.css"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/loginAndRegistrationResponsive.css"; ?>
        
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title col text-center">ĐĂNG NHẬP</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="email">Email Address: </label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Địa chỉ email của bạn">
                                        <small class="form-text text-light">Địa chỉ email không được để
                                            trống</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="password">Password: </label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Mật khẩu của bạn">
                                        <small class="form-text text-light">Mật khẩu phải có ít nhất 1 số và độ dài tối thiểu 6 ký tự</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-8">
                                        <input type="checkbox" name="remember" id="remember">
                                        <label for="remember" class="form-check-label">Nhớ mật khẩu ?</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <a href="1">Quên mật khẩu</a>
                                    </div>
                                    <div class="col-6 text-center">
                                        <a href="1">Cần trợ giúp?</a>
                                    </div>
                                </div>
                                <div class="message">
                                    <p class="text-center mt-2">
                                        <?php if(isset($message)){ echo $message;}?>
                                    </p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group col text-center">
                                    <button type="submit" name="login" class="btn btn-default">
                                        <i class="fas fa-save"></i> Đăng nhập
                                    </button>
                                    <a href="?action=registration_page" class="btn btn-default">
                                        <i class="fas fa-pencil-alt"></i> Đăng ký
                                    </a>
                                    <button type="reset" class="btn btn-dark">
                                        Reset
                                    </button>
                                    <button formaction="?action=home_page" class="btn btn-danger" data-dismiss="modal">
                                        <i class="fas fa-times-circle"></i> Hủy
                                    </button>
                                    <div class="icon_link mt-2">
                                        <div class="row">
                                            <div class="col-6 loginnhanh1">
                                                <div class="title float-left">
                                                    <p>Đăng nhập nhanh bằng: </p>
                                                </div>
                                            </div>
                                            <div class="col-6 loginnhanh2">
                                                <a
                                                    href="https://search.yahoo.com/search?fr=mcafee&type=E210US91215G91503&p=fb">
                                                    <i class="fab fa-facebook" data-toggle="tooltip"
                                                        title="Đăng nhập bằng Facebook"></i>
                                                </a>
                                                <a
                                                    href="https://www.google.com/chrome/?brand=PASC&utm_source=bing&utm_medium=cpc&utm_campaign=1009936%20%7C%20Chrome%20Win10%20%7C%20DR%20%7C%20ESS01%20%7C%20GLOBAL%20%7C%20GLOBAL%20%7C%20en%20%7C%20Desk%20%7C%20SEM%20%7C%20BKWS%20-%20EXA%20%7C%20Txt%20~%20Google&utm_term=google&utm_content=Google%20-%20Exact&gclid=ac06f1bbb9bc1c4b2a469139f8bc2a12&gclsrc=3p.ds">
                                                    <i class="fab fa-google" data-toggle="tooltip"
                                                        title="Đăng nhập bằng Google"></i>
                                                </a>
                                                <a href="https://www.instagram.com">
                                                    <i class="fab fa-instagram" data-toggle="tooltip"
                                                        title="Đăng nhập bằng Instagram"></i>
                                                </a>
                                                <a href="">
                                                    <i class="fab fa-twitter" data-toggle="tooltip"
                                                        title="Đăng nhập bằng Twitter"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>