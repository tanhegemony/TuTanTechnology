<!doctype html>
<html lang="en">

<head>
    <title>Sản phẩm của Danh Mục</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../images/fontawesome-free-5.15.4-web/css/all.min.css" />
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/user/productsByCategory.css"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/productsByCategoryResponsive.css"; ?>
        
    </style>
</head>

<body>
    <div class="container">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/header.php"; ?>
        <!-- đường dẫn -->
        <div class="row mt-2">
            <div class="col duongdan">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?action=home_page">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản phẩm theo danh mục :
                            <?php echo $getCategoryByCategoryID->getCategoryName(); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- slideshow -->
        <div class="row text-center">
            <div class="col">
                <div id="slideshow" class="carousel slide" data-ride="carousel">
                    <?php if($getCategoryByCategoryID->getCategoryName()=="Điện thoại") : ?>
                    <ol class="carousel-indicators slideshow">
                        <li class="active" data-target="#slideshowdienthoai" data-slide-to="0" aria-current="location">
                        </li>
                        <li data-target="#slideshowdienthoai" data-slide-to="1"></li>
                        <li data-target="#slideshowdienthoai" data-slide-to="2"></li>
                        <li data-target="#slideshowdienthoai" data-slide-to="3"></li>
                        <li data-target="#slideshowdienthoai" data-slide-to="4"></li>
                        <li data-target="#slideshowdienthoai" data-slide-to="5"></li>
                        <li data-target="#slideshowdienthoai" data-slide-to="6"></li>
                        <li data-target="#slideshowdienthoai" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="../images/dienthoai/slideshow/1.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/dienthoai/slideshow/2.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/dienthoai/slideshow/3.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/dienthoai/slideshow/4.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/dienthoai/slideshow/5.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/dienthoai/slideshow/6.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/dienthoai/slideshow/7.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/dienthoai/slideshow/8.png" alt="">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName()=="Laptop") : ?>
                    <ol class="carousel-indicators slideshow">
                        <li class="active" data-target="#slideshowlaptop" data-slide-to="0" aria-current="location">
                        </li>
                        <li data-target="#slideshowlaptop" data-slide-to="1"></li>
                        <li data-target="#slideshowlaptop" data-slide-to="2"></li>
                        <li data-target="#slideshowlaptop" data-slide-to="3"></li>
                        <li data-target="#slideshowlaptop" data-slide-to="4"></li>
                        <li data-target="#slideshowlaptop" data-slide-to="5"></li>
                        <li data-target="#slideshowlaptop" data-slide-to="6"></li>
                        <li data-target="#slideshowlaptop" data-slide-to="7"></li>
                        <li data-target="#slideshowlaptop" data-slide-to="8"></li>
                        <li data-target="#slideshowlaptop" data-slide-to="9"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="../images/laptop/slideshow/1.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/laptop/slideshow/2.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/laptop/slideshow/3.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/laptop/slideshow/4.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/laptop/slideshow/5.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/laptop/slideshow/6.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/laptop/slideshow/7.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/laptop/slideshow/8.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/laptop/slideshow/9.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/laptop/slideshow/10.png" alt="">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName()=="Tablet") : ?>
                    <ol class="carousel-indicators slideshow">
                        <li class="active" data-target="#slideshowtablet" data-slide-to="0" aria-current="location">
                        </li>
                        <li data-target="#slideshowtablet" data-slide-to="1"></li>
                        <li data-target="#slideshowtablet" data-slide-to="2"></li>
                        <li data-target="#slideshowtablet" data-slide-to="3"></li>
                        <li data-target="#slideshowtablet" data-slide-to="4"></li>
                        <li data-target="#slideshowtablet" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="../images/tablet/slideshow/1.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tablet/slideshow/2.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tablet/slideshow/3.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tablet/slideshow/4.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tablet/slideshow/5.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tablet/slideshow/6.png" alt="">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName()=="PC") : ?>
                    <ol class="carousel-indicators slideshow">
                        <li class="active" data-target="#slideshowpc" data-slide-to="0" aria-current="location"></li>
                        <li data-target="#slideshowpc" data-slide-to="1"></li>
                        <li data-target="#slideshowpc" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="../images/pc/slideshow/1.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/pc/slideshow/2.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/pc/slideshow/3.png" alt="">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName()=="Watch") : ?>
                    <ol class="carousel-indicators slideshow">
                        <li class="active" data-target="#slideshowwatch" data-slide-to="0" aria-current="location"></li>
                        <li data-target="#slideshowwatch" data-slide-to="1"></li>
                        <li data-target="#slideshowwatch" data-slide-to="2"></li>
                        <li data-target="#slideshowwatch" data-slide-to="3"></li>
                        <li data-target="#slideshowwatch" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="../images/watch/slideshow/1.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/watch/slideshow/2.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/watch/slideshow/3.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/watch/slideshow/4.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/watch/slideshow/5.png" alt="">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName()=="Phụ kiện") : ?>
                    <ol class="carousel-indicators slideshow">
                        <li class="active" data-target="#slideshowpk" data-slide-to="0" aria-current="location"></li>
                        <li data-target="#slideshowpk" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="../images/phukien/slideshow/1.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/phukien/slideshow/2.png" alt="">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName()=="TV") : ?>
                    <ol class="carousel-indicators slideshow">
                        <li class="active" data-target="#slideshowtv" data-slide-to="0" aria-current="location"></li>
                        <li data-target="#slideshowtv" data-slide-to="1"></li>
                        <li data-target="#slideshowtv" data-slide-to="2"></li>
                        <li data-target="#slideshowtv" data-slide-to="3"></li>
                        <li data-target="#slideshowtv" data-slide-to="4"></li>
                        <li data-target="#slideshowtv" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="../images/tv/slideshow/1.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tv/slideshow/2.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tv/slideshow/3.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tv/slideshow/4.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tv/slideshow/5.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tv/slideshow/6.png" alt="">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName()=="Tủ lạnh") : ?>
                    <ol class="carousel-indicators slideshow">
                        <li class="active" data-target="#slideshowtulanh" data-slide-to="0" aria-current="location">
                        </li>
                        <li data-target="#slideshowtulanh" data-slide-to="1"></li>
                        <li data-target="#slideshowtulanh" data-slide-to="2"></li>
                        <li data-target="#slideshowtulanh" data-slide-to="3"></li>
                        <li data-target="#slideshowtulanh" data-slide-to="4"></li>
                        <li data-target="#slideshowtulanh" data-slide-to="5"></li>
                        <li data-target="#slideshowtulanh" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="../images/tulanh/slideshow/1.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tulanh/slideshow/2.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tulanh/slideshow/3.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tulanh/slideshow/4.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tulanh/slideshow/5.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tulanh/slideshow/6.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="../images/tulanh/slideshow/7.png" alt="">
                        </div>
                    </div>
                    <?php endif; ?>
                    <a class="carousel-control-prev" href="#slideshow" data-slide="prev" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-left"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slideshow" data-slide="next" role="button">
                        <span class="carousel-control" aria-hidden="true"><i
                                class="fas fa-arrow-circle-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-5 bolocsanpham">
            <!-- bộ lọc sản phẩm -->
            <div class="col-3 blsp">
                <div class="row">
                    <div class="col">
                        <div id='nz-div-3'>
                            <h3 class="tde">
                                <span><i class="fas fa-filter"></i> Bộ lọc</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="blsp">
                    <?php if($getCategoryByCategoryID->getCategoryName() == "Điện thoại") : ?>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hãng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseOne"
                                class="collapse  <?php if(isset($brandSmartphone) || $action=="productsByCategory"){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingOne" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Apple" <?php if(isset($brandSmartphone) && $brandSmartphone == "Apple"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Apple</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Samsum" <?php if(isset($brandSmartphone) && $brandSmartphone == "Samsum"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Samsum</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Oppo" <?php if(isset($brandSmartphone) && $brandSmartphone == "Oppo"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Oppo</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Xiaomi" <?php if( isset($brandSmartphone) && $brandSmartphone == "Xiaomi"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Xiaomi</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Realme" <?php if(isset($brandSmartphone) && $brandSmartphone == "Realme"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Realme</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Vivo" <?php if(isset($brandSmartphone) && $brandSmartphone == "Vivo"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Vivo</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=OnePlus" <?php if(isset($brandSmartphone) && $brandSmartphone == "OnePlus"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>One Plus</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Vsmart" <?php if(isset($brandSmartphone) && $brandSmartphone == "Vsmart"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Vsmart</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Itel" <?php if(isset($brandSmartphone) && $brandSmartphone == "Itel"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Itel</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Nokia" <?php if(isset($brandSmartphone) && $brandSmartphone == "Nokia"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Nokia</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Masstel" <?php if(isset($brandSmartphone) && $brandSmartphone == "Masstel"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Masstel</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Mobel" <?php if(isset($brandSmartphone) && $brandSmartphone == "Mobel"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Mobel</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&brandSmartphone=Energizer" <?php if(isset($brandSmartphone) && $brandSmartphone == "Energizer"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Energizer</a> <br>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Giá <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseTwo"
                                class="collapse <?php if(isset($startPrice) && isset($endPrice) || isset($lastMaxPrice)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingTwo" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=1&startPrice=0&endPrice=2000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 0 && $endPrice == 2000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Dưới 2 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&startPrice=2000000&endPrice=4000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 2000000 && $endPrice == 4000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 2 triệu - 4 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&startPrice=4000000&endPrice=7000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 4000000 && $endPrice == 7000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 4 triệu - 7 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&startPrice=7000000&endPrice=13000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 7000000 && $endPrice == 13000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 7 triệu - 13 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&startPrice=13000000&endPrice=20000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 13000000 && $endPrice == 20000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 13 triệu - 20 triệu</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=1&lastMaxPrice=20000000" <?php if(isset($lastMaxPrice) && $lastMaxPrice == 20000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Trên 20 triệu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Loại điện thoại <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseThree"
                                class="collapse <?php if(isset($typeSmartphone)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingThree" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=1&typeSmartphone=Android" <?php if(isset($typeSmartphone) && $typeSmartphone == "Android"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Android</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&typeSmartphone=iOS" <?php if(isset($typeSmartphone) && $typeSmartphone == "iOS"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>iOS</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&typeSmartphone=Điện thoại phổ thông" <?php if(isset($typeSmartphone) && $typeSmartphone == "Điện thoại phổ thông"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Điện thoại phổ thông</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Hiệu năng & PIN <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFour"
                                class="collapse <?php if((isset($functionSmartphone) && isset($configurationSmartphone)) || isset($sizeBatterySmartphone) || isset($batteryTechnologySmartphone)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFour" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&functionSmartphone=Chơi game&configurationSmartphone=Cấu hình cao" <?php if(isset($functionSmartphone) && isset($configurationSmartphone) && $functionSmartphone == "Chơi game" && $configurationSmartphone == "Cấu hình cao"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Chơi game / Cấu hình cao</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&sizeBatterySmartphone=5000 mAh" <?php if(isset($sizeBatterySmartphone) && $sizeBatterySmartphone == "5000 mAh"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Pin khủng trên 5000 mAh</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&batteryTechnologySmartphone=Sạc pin nhanh" <?php if(isset($batteryTechnologySmartphone) && $batteryTechnologySmartphone == "Sạc pin nhanh"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Sạc pin nhanh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                RAM <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFive"
                                class="collapse <?php if(isset($ramSmartphone)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFive" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=1&ramSmartphone=1GB" <?php if(isset($ramSmartphone) && $ramSmartphone == "1GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>1GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&ramSmartphone=2GB" <?php if(isset($ramSmartphone) && $ramSmartphone == "2GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>2GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&ramSmartphone=3GB" <?php if(isset($ramSmartphone) && $ramSmartphone == "3GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>3GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&ramSmartphone=4GB" <?php if(isset($ramSmartphone) && $ramSmartphone == "4GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>4GB</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=1&ramSmartphone=6GB" <?php if(isset($ramSmartphone) && $ramSmartphone == "6GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>6GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&ramSmartphone=8GB" <?php if(isset($ramSmartphone) && $ramSmartphone == "8GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>8GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&ramSmartphone=12GB" <?php if(isset($ramSmartphone) && $ramSmartphone == "12GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>12GB</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                Bộ nhớ trong <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseSix"
                                class="collapse <?php if(isset($internalMemorySmartphone)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingSix" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=1&internalMemorySmartphone=8GB" <?php if(isset($internalMemorySmartphone) && $internalMemorySmartphone == "8GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>8GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&internalMemorySmartphone=16GB" <?php if(isset($internalMemorySmartphone) && $internalMemorySmartphone == "16GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>16GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&internalMemorySmartphone=32GB" <?php if(isset($internalMemorySmartphone) && $internalMemorySmartphone == "32GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>32GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&internalMemorySmartphone=64GB" <?php if(isset($internalMemorySmartphone) && $internalMemorySmartphone == "64GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>64GB</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=1&internalMemorySmartphone=128GB" <?php if(isset($internalMemorySmartphone) && $internalMemorySmartphone == "128GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>128GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&internalMemorySmartphone=256GB" <?php if(isset($internalMemorySmartphone) && $internalMemorySmartphone == "256GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>256GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&internalMemorySmartphone=512GB" <?php if(isset($internalMemorySmartphone) && $internalMemorySmartphone == "512GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>512GB</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                Camera <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseSeven"
                                class="collapse <?php if(isset($cameraSmartphone)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingSeven" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=1&cameraSmartphone=Chụp cận cảnh" <?php if(isset($cameraSmartphone) && $cameraSmartphone == "Chụp cận cảnh"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Chụp cận cảnh</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&cameraSmartphone=Chụp góc rộng" <?php if(isset($cameraSmartphone) && $cameraSmartphone == "Chụp góc rộng"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Chụp góc rộng</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&cameraSmartphone=Chụp xóa phông" <?php if(isset($cameraSmartphone) && $cameraSmartphone == "Chụp xóa phông"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Chụp xóa phông</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&cameraSmartphone=Chụp zoom xa" <?php if(isset($cameraSmartphone) && $cameraSmartphone == "Chụp zoom xa"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Chụp zoom xa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                Tính năng đặc biệt <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseEight"
                                class="collapse <?php if(isset($specialFeaturesSmartphone)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingEight" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&specialFeaturesSmartphone=Hỗ trợ 5G" <?php if(isset($specialFeaturesSmartphone) && $specialFeaturesSmartphone == "Hỗ trợ 5G"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Hỗ trợ 5G</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&specialFeaturesSmartphone=Bảo mật khuông mặt" <?php if(isset($specialFeaturesSmartphone) && $specialFeaturesSmartphone == "Bảo mật khuông mặt"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Bảo mật khuông mặt</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&specialFeaturesSmartphone=Bảo mật vân tay" <?php if(isset($specialFeaturesSmartphone) && $specialFeaturesSmartphone == "Bảo mật vân tay"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Bảo mật vân tay</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&specialFeaturesSmartphone=Sạc không dây" <?php if(isset($specialFeaturesSmartphone) && $specialFeaturesSmartphone == "Sạc không dây"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Sạc không dây</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&specialFeaturesSmartphone=Kháng nước và bụi" <?php if(isset($specialFeaturesSmartphone) && $specialFeaturesSmartphone == "Kháng nước và bụi"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Kháng nước và bụi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                Thiết kế <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseNine"
                                class="collapse <?php if(isset($designSmartphone)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingNine" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=1&designSmartphone=Tràn viền" <?php if(isset($designSmartphone) && $designSmartphone == "Tràn viền"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Tràn viền</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&designSmartphone=Mỏng nhẹ" <?php if(isset($designSmartphone) && $designSmartphone == "Mỏng nhẹ"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Mỏng nhẹ</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&designSmartphone=Mặt lưng kính" <?php if(isset($designSmartphone) && $designSmartphone == "Mặt lưng kính"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Mặt lưng kính</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                Màn hình <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseTen"
                                class="collapse <?php if(isset($screenSmartphone) || isset($sizeScreenSmartphone)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingTen" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn"
                                            href="?action=filter&categoryID=1&screenSmartphone=Nhỏ gọn dễ cầm" <?php if(isset($screenSmartphone) && $screenSmartphone == "Nhỏ gọn dễ cầm"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Nhỏ gọn dễ cầm</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&sizeScreenSmartphone=6" <?php if(isset($sizeScreenSmartphone) && $sizeScreenSmartphone == "6"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 6 inch trở lên</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=1&screenSmartphone=Màn hình gập" <?php if(isset($screenSmartphone) && $screenSmartphone == "Màn hình gập"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Màn hình gập</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName() == "Laptop") : ?>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hãng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseOne"
                                class="collapse <?php if(isset($brandLaptop) || $action=="productsByCategory"){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingOne" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&brandLaptop=Asus" <?php if(isset($brandLaptop) && $brandLaptop == "Asus"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Asus</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=2&brandLaptop=Acer" <?php if(isset($brandLaptop) && $brandLaptop == "Acer"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Acer</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=2&brandLaptop=Lenovo" <?php if(isset($brandLaptop) && $brandLaptop == "Lenovo"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Lenovo</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=2&brandLaptop=MSI" <?php if(isset($brandLaptop) && $brandLaptop == "MSI"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>MSI</a>

                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&brandLaptop=Apple" <?php if(isset($brandLaptop) && $brandLaptop == "Apple"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Apple (Macbook)</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=2&brandLaptop=Dell" <?php if(isset($brandLaptop) && $brandLaptop == "Dell"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Dell</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=2&brandLaptop=HP" <?php if(isset($brandLaptop) && $brandLaptop == "HP"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>HP</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Giá <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseTwo"
                                class="collapse <?php if(isset($startPrice) && isset($endPrice) || isset($lastMaxPrice)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingTwo" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=2&startPrice=0&endPrice=15000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 0 && $endPrice == 15000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Dưới 15 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=2&startPrice=15000000&endPrice=20000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 15000000 && $endPrice == 20000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 15 triệu - 20 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=2&startPrice=20000000&endPrice=25000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 20000000 && $endPrice == 25000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 20 triệu - 25 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=2&startPrice=25000000&endPrice=30000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 25000000 && $endPrice == 30000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 25 triệu - 30 triệu</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=2&lastMaxPrice=30000000" <?php if(isset($lastMaxPrice) && $lastMaxPrice == 30000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Trên 30 triệu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Nhu cầu sử dụng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseThree"
                                class="collapse <?php if(isset($usageNeedLaptop)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingThree" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&usageNeedLaptop=Laptop Gaming" <?php if(isset($usageNeedLaptop) && $usageNeedLaptop == "Laptop Gaming"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Laptop Gaming</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=2&usageNeedLaptop=Học tập - Văn phòng" <?php if(isset($usageNeedLaptop) && $usageNeedLaptop == "Học tập - Văn phòng"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Học tập - Văn phòng</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=2&usageNeedLaptop=Đồ họa - Kỹ thuật" <?php if(isset($usageNeedLaptop) && $usageNeedLaptop == "Đồ họa - Kỹ thuật"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Đồ họa - Kỹ thuật</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&usageNeedLaptop=Mỏng nhẹ" <?php if(isset($usageNeedLaptop) && $usageNeedLaptop == "Mỏng nhẹ"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Mỏng nhẹ</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=2&usageNeedLaptop=Cao cấp - Sang trọng" <?php if(isset($usageNeedLaptop) && $usageNeedLaptop == "Cao cấp - Sang trọng"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Cao cấp - Sang trọng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Màn hình <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFour"
                                class="collapse <?php if(isset($sizeScreenLaptop)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFour" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=11.6 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "11.6 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>11.6 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=12.3 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "12.3 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>12.3 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=12.4 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "12.4 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>12.4 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=13.3 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "13.3 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>13.3 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=13.4 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "13.4 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>13.4 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=14 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "14 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>14 inch</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=15.6 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "15.6 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>15.6 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=16 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "16 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>16 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=16.1 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "16.1 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>16.1 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=17 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "17 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>17 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sizeScreenLaptop=17.3 inch" <?php if(isset($sizeScreenLaptop) && $sizeScreenLaptop == "17.3 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>17.3 inch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                CPU <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFive"
                                class="collapse <?php if(isset($cpuLaptop)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFive" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=2&cpuLaptop=Intel Core i7" <?php if(isset($cpuLaptop) && $cpuLaptop == "Intel Core i7"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Intel Core i7</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&cpuLaptop=Intel Core i5" <?php if(isset($cpuLaptop) && $cpuLaptop == "Intel Core i5"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Intel Core i5</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&cpuLaptop=Intel Core i3" <?php if(isset($cpuLaptop) && $cpuLaptop == "Intel Core i3"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Intel Core i3</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&cpuLaptop=Intel Celeron" <?php if(isset($cpuLaptop) && $cpuLaptop == "Intel Celeron"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Intel Celeron</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&cpuLaptop=Intel Pentium" <?php if(isset($cpuLaptop) && $cpuLaptop == "Intel Pentium"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Intel Pentium</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&cpuLaptop=AMD" <?php if(isset($cpuLaptop) && $cpuLaptop == "AMD"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>AMD</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                RAM <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseSix"
                                class="collapse <?php if(isset($ramLaptop)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingSix" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&ramLaptop=4GB" <?php if(isset($ramLaptop) && $ramLaptop == "4GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>4GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&ramLaptop=8GB" <?php if(isset($ramLaptop) && $ramLaptop == "8GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>8GB</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&ramLaptop=16GB" <?php if(isset($ramLaptop) && $ramLaptop == "16GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>16GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&ramLaptop=32GB" <?php if(isset($ramLaptop) && $ramLaptop == "32GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>32GB</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                Card đồ họa <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseSeven"
                                class="collapse <?php if(isset($graphicsCardLaptop)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingSeven" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=2&graphicsCardLaptop=GeForce GTX" <?php if(isset($graphicsCardLaptop) && $graphicsCardLaptop == "GeForce GTX"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>GeForce GTX</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&graphicsCardLaptop=GeForce RTX" <?php if(isset($graphicsCardLaptop) && $graphicsCardLaptop == "GeForce RTX"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>GeForce RTX</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&graphicsCardLaptop=GeForce MX" <?php if(isset($graphicsCardLaptop) && $graphicsCardLaptop == "GeForce MX"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>GeForce MX</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=2&graphicsCardLaptop=GeForce Quadro" <?php if(isset($graphicsCardLaptop) && $graphicsCardLaptop == "GeForce Quadro"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>GeForce Quadro</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&graphicsCardLaptop=Radeon RX" <?php if(isset($graphicsCardLaptop) && $graphicsCardLaptop == "Radeon RX"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Radeon RX</a>
                                        <a class="btn"
                                            href="?action=filter&categoryID=2&graphicsCardLaptop=Card tích hợp" <?php if(isset($graphicsCardLaptop) && $graphicsCardLaptop == "Card tích hợp"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Card tích hợp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                Ổ cứng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseEight"
                                class="collapse <?php if(isset($hardDriverLaptop)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingEight" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=2&hardDriverLaptop=SSD 2TB" <?php if(isset($hardDriverLaptop) && $hardDriverLaptop == "SSD 2TB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>SSD 2TB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&hardDriverLaptop=SSD 1TB" <?php if(isset($hardDriverLaptop) && $hardDriverLaptop == "SSD 1TB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>SSD 1TB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&hardDriverLaptop=SSD 512GB" <?php if(isset($hardDriverLaptop) && $hardDriverLaptop == "SSD 512GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>SSD 512GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&hardDriverLaptop=SSD 256GB" <?php if(isset($hardDriverLaptop) && $hardDriverLaptop == "SSD 256GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>SSD 256GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&hardDriverLaptop=SSD 128GB" <?php if(isset($hardDriverLaptop) && $hardDriverLaptop == "SSD 128GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>SSD 128GB</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                Độ phân giải <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseNine"
                                class="collapse <?php if(isset($screenResolutionLaptop)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingNine" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&screenResolutionLaptop=4K" <?php if(isset($screenResolutionLaptop) && $screenResolutionLaptop == "4K"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>4K</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&screenResolutionLaptop=2K" <?php if(isset($screenResolutionLaptop) && $screenResolutionLaptop == "2K"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>2K</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&screenResolutionLaptop=Retina" <?php if(isset($screenResolutionLaptop) && $screenResolutionLaptop == "Retina"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Retina</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&screenResolutionLaptop=Full HD" <?php if(isset($screenResolutionLaptop) && $screenResolutionLaptop == "Full HD"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Full HD</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&screenResolutionLaptop=HD" <?php if(isset($screenResolutionLaptop) && $screenResolutionLaptop == "HD"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>HD</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                Tần số quét <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseTen"
                                class="collapse <?php if(isset($sweepFrequencyLaptop)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingTen" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&sweepFrequencyLaptop=90 Hz" <?php if(isset($sweepFrequencyLaptop) && $sweepFrequencyLaptop == "90 Hz"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>90 Hz</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sweepFrequencyLaptop=120 Hz" <?php if(isset($sweepFrequencyLaptop) && $sweepFrequencyLaptop == "120 Hz"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>120 Hz</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sweepFrequencyLaptop=144 Hz" <?php if(isset($sweepFrequencyLaptop) && $sweepFrequencyLaptop == "144 Hz"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>144 Hz</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sweepFrequencyLaptop=165 Hz" <?php if(isset($sweepFrequencyLaptop) && $sweepFrequencyLaptop == "165 Hz"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>165 Hz</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=2&sweepFrequencyLaptop=240 Hz" <?php if(isset($sweepFrequencyLaptop) && $sweepFrequencyLaptop == "240 Hz"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>240 Hz</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sweepFrequencyLaptop=300 Hz" <?php if(isset($sweepFrequencyLaptop) && $sweepFrequencyLaptop == "300 Hz"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>300 Hz</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=2&sweepFrequencyLaptop=360 Hz" <?php if(isset($sweepFrequencyLaptop) && $sweepFrequencyLaptop == "360 Hz"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>360 Hz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName() == "Tablet") : ?>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hãng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseOne"
                                class="collapse <?php if(isset($brandTablet) || $action=="productsByCategory"){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingOne" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=3&brandTablet=Apple" <?php if(isset($brandTablet) && $brandTablet == "Apple"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>iPad</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=3&brandTablet=Samsum" <?php if(isset($brandTablet) && $brandTablet == "Samsum"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Samsum</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=3&brandTablet=Xiaomi" <?php if(isset($brandTablet) && $brandTablet == "Xiaomi"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Xiaomi</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=3&brandTablet=Lenovo" <?php if(isset($brandTablet) && $brandTablet == "Lenovo"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Lenovo</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=3&brandTablet=Huawei" <?php if(isset($brandTablet) && $brandTablet == "Huawei"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Huawei</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Giá <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseTwo"
                                class="collapse <?php if(isset($startPrice) && isset($endPrice) || isset($lastMaxPrice)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingTwo" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn"
                                            href="?action=filter&categoryID=3&startPrice=3000000&endPrice=8000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 3000000 && $endPrice == 8000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 3 triệu - 8 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=3&startPrice=8000000&endPrice=15000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 8000000 && $endPrice == 15000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 8 triệu - 15 triệu</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=3&lastMaxPrice=15000000" <?php if(isset($lastMaxPrice) && $lastMaxPrice == 15000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Trên 15 triệu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Màn hình <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseThree"
                                class="collapse <?php if(isset($screenTablet1) && isset($screenTablet2) || isset($screenTablet3)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingThree" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn"
                                            href="?action=filter&categoryID=3&screenTablet1=7&screenTablet2=8" <?php if(isset($screenTablet1) && isset($screenTablet2) && $screenTablet1 == 7 && $screenTablet2 == 8){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Khoảng 7 - 8 inch</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=3&screenTablet1=10&screenTablet2=11" <?php if(isset($screenTablet1) && isset($screenTablet2) && $screenTablet1 == 10 && $screenTablet2 == 11){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Khoảng 10 - 11 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=3&screenTablet3=12" <?php if(isset($screenTablet3) && $screenTablet3 == 12){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Khoảng 12 inch trở lên</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                RAM <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFour"
                                class="collapse <?php if(isset($ramTablet)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFour" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=3&ramTablet=2GB" <?php if(isset($ramTablet) && $ramTablet == "2GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>2GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=3&ramTablet=3GB" <?php if(isset($ramTablet) && $ramTablet == "3GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>3GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=3&ramTablet=4GB" <?php if(isset($ramTablet) && $ramTablet == "4GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>4GB</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=3&ramTablet=6GB" <?php if(isset($ramTablet) && $ramTablet == "6GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>6GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=3&ramTablet=8GB" <?php if(isset($ramTablet) && $ramTablet == "8GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>8GB</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                Bộ nhớ trong <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFive"
                                class="collapse <?php if(isset($internalMemoryTablet)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFive" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=3&internalMemoryTablet=8GB" <?php if(isset($internalMemoryTablet) && $internalMemoryTablet == "8GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>8GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=3&internalMemoryTablet=16GB" <?php if(isset($internalMemoryTablet) && $internalMemoryTablet == "16GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>16GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=3&internalMemoryTablet=32GB" <?php if(isset($internalMemoryTablet) && $internalMemoryTablet == "32GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>32GB</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=3&internalMemoryTablet=64GB" <?php if(isset($internalMemoryTablet) && $internalMemoryTablet == "64GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>64GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=3&internalMemoryTablet=128GB" <?php if(isset($internalMemoryTablet) && $internalMemoryTablet == "128GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>128GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=3&internalMemoryTablet=256GB" <?php if(isset($internalMemoryTablet) && $internalMemoryTablet == "256GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>256GB</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName() == "PC") : ?>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hãng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseOne"
                                class="collapse <?php if(isset($brandPC) || $action=="productsByCategory"){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingOne" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=4&brandPC=Apple" <?php if(isset($brandPC) && $brandPC == "Apple"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>iMac</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=4&brandPC=Lenovo" <?php if(isset($brandPC) && $brandPC == "Lenovo"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Lenovo</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=4&brandPC=HP" <?php if(isset($brandPC) && $brandPC == "HP"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>HP</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&brandPC=Asus" <?php if(isset($brandPC) && $brandPC == "Asus"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Asus</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Giá <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseTwo"
                                class="collapse <?php if(isset($startPrice) && isset($endPrice) || isset($lastMaxPrice)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingTwo" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=4&startPrice=0&endPrice=10000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 0 && $endPrice == 10000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Dưới 10 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=4&startPrice=10000000&endPrice=15000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 10000000 && $endPrice == 15000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 10 triệu - 15 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=4&startPrice=15000000&endPrice=20000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 15000000 && $endPrice == 20000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 15 triệu - 20 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=4&startPrice=20000000&endPrice=30000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 20000000 && $endPrice == 30000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 20 triệu - 30 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=4&startPrice=30000000&endPrice=40000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 30000000 && $endPrice == 40000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 30 triệu - 40 triệu</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=4&lastMaxPrice=40000000" <?php if(isset($lastMaxPrice) && $lastMaxPrice == 40000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Trên 40 triệu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                CPU <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseThree"
                                class="collapse <?php if(isset($cpuPC)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingThree" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=4&cpuPC=Intel Celeron" <?php if(isset($cpuPC) && $cpuPC == "Intel Celeron"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Intel Celeron</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&cpuPC=Intel Pentium" <?php if(isset($cpuPC) && $cpuPC == "Intel Pentium"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Intel Pentium</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&cpuPC=Intel Core i3" <?php if(isset($cpuPC) && $cpuPC == "Intel Core i3"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Intel Core i3</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&cpuPC=Intel Core i5" <?php if(isset($cpuPC) && $cpuPC == "Intel Core i5"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Intel Core i5</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&cpuPC=Intel Core i7" <?php if(isset($cpuPC) && $cpuPC == "Intel Core i7"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Intel Core i7</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&cpuPC=AMD Ryzen 3" <?php if(isset($cpuPC) && $cpuPC == "AMD Ryzen 3"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>AMD Ryzen 3</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&cpuPC=AMD Ryzen 5" <?php if(isset($cpuPC) && $cpuPC == "AMD Ryzen 5"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>AMD Ryzen 5</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                RAM <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFour"
                                class="collapse <?php if(isset($ramPC)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFour" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=4&ramPC=4GB" <?php if(isset($ramPC) && $ramPC == "4GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>4GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&ramPC=8GB" <?php if(isset($ramPC) && $ramPC == "8GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>8GB</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=4&ramPC=16GB" <?php if(isset($ramPC) && $ramPC == "16GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>16GB</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&ramPC=32GB" <?php if(isset($ramPC) && $ramPC == "32GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>32GB</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                Ổ cứng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFive"
                                class="collapse <?php if(isset($hardDriverPC)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFive" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=4&hardDriverPC=SSD 512GB" <?php if(isset($hardDriverPC) && $hardDriverPC == "SSD 512GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>SSD 512GB</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=4&hardDriverPC=SSD 256GB" <?php if(isset($hardDriverPC) && $hardDriverPC == "SSD 256GB"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>SSD 256GB</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                Card đồ họa <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseSix"
                                class="collapse <?php if(isset($graphicsCardPC)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingSix" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=4&graphicsCardPC=Nvidia GeForce" <?php if(isset($graphicsCardPC) && $graphicsCardPC == "Nvidia GeForce"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Nvidia GeForce</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&graphicsCardPC=AMD Radeon" <?php if(isset($graphicsCardPC) && $graphicsCardPC == "AMD Radeon"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>AMD Radeon</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&graphicsCardPC=Card onboard" <?php if(isset($graphicsCardPC) && $graphicsCardPC == "Card onboard"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Card onboard</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                Nhu cầu sử dụng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseSeven"
                                class="collapse <?php if(isset($usageNeedPC)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingSeven" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=4&usageNeedPC=PC Gaming" <?php if(isset($usageNeedPC) && $usageNeedPC == "PC Gaming"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>PC Gaming</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&usageNeedPC=PC Văn phòng" <?php if(isset($usageNeedPC) && $usageNeedPC == "PC Văn phòng"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>PC Văn phòng</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&usageNeedPC=PC Đồ họa" <?php if(isset($usageNeedPC) && $usageNeedPC == "PC Đồ họa"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>PC Đồ họa</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=4&usageNeedPC=PC Render 3D" <?php if(isset($usageNeedPC) && $usageNeedPC == "PC Render 3D"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>PC Render 3D</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName() == "Watch") : ?>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hãng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseOne"
                                class="collapse <?php if(isset($brandWatch) || $action=="productsByCategory"){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingOne" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=5&brandWatch=Apple" <?php if(isset($brandWatch) && $brandWatch == "Apple"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Apple Watch</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=5&brandWatch=Samsum" <?php if(isset($brandWatch) && $brandWatch == "Samsum"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Samsum</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=5&brandWatch=Xiaomi" <?php if(isset($brandWatch) && $brandWatch == "Xiaomi"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Xiaomi</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=5&brandWatch=Oppo" <?php if(isset($brandWatch) && $brandWatch == "Oppo"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Oppo</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Giá <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseTwo"
                                class="collapse <?php if(isset($startPrice) && isset($endPrice) || isset($lastMaxPrice)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingTwo" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=5&startPrice=0&endPrice=1000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 0 && $endPrice == 1000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Dưới 1 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&startPrice=1000000&endPrice=2000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 1000000 && $endPrice == 2000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 1 triệu - 2 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&startPrice=2000000&endPrice=4000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 2000000 && $endPrice == 4000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 2 triệu - 4 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&startPrice=4000000&endPrice=7000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 4000000 && $endPrice == 7000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 4 triệu - 7 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&startPrice=7000000&endPrice=10000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 7000000 && $endPrice == 10000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 7 triệu - 10 triệu</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&startPrice=10000000&endPrice=15000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 10000000 && $endPrice == 15000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 10 triệu - 15 triệu</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=5&lastMaxPrice=15000000" <?php if(isset($lastMaxPrice) && $lastMaxPrice == 15000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Trên 15 triệu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Loại Watch <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseThree"
                                class="collapse <?php if(isset($typeWatch)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingThree" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=5&typeWatch=Đồng hồ thông minh" <?php if(isset($typeWatch) && $typeWatch == "Đồng hồ thông minh"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Đồng hồ thông minh</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&typeWatch=Đồng hồ thể thao chuyên nghiệp" <?php if(isset($typeWatch) && $typeWatch == "Đồng hồ thể thao chuyên nghiệp"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Đồng hồ thể thao chuyên nghiệp</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&typeWatch=Đồng hồ thông minh định vị trẻ em" <?php if(isset($typeWatch) && $typeWatch == "Đồng hồ thông minh định vị trẻ em"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Đồng hồ thông minh định vị trẻ em</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&typeWatch=Đồng hồ thời trang, sành điệu" <?php if(isset($typeWatch) && $typeWatch == "Đồng hồ thời trang, sành điệu"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Đồng hồ thời trang, sành điệu</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=5&typeWatch=Đồng hồ đa tiện ích" <?php if(isset($typeWatch) && $typeWatch == "Đồng hồ đa tiện ích"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Đồng hồ đa tiện ích</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=5&typeWatch=Vòng tay thông minh" <?php if(isset($typeWatch) && $typeWatch == "Vòng tay thông minh"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Vòng tay thông minh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Thời lượng PIN <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFour"
                                class="collapse <?php if((isset($batteryLifeWatch1) && isset($batteryLifeWatch2)) || isset($batteryLifeWatch3)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFour" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&batteryLifeWatch1=0&batteryLifeWatch2=2" <?php if(isset($batteryLifeWatch1) && isset($batteryLifeWatch2) && $batteryLifeWatch1 == 0 && $batteryLifeWatch2 == 2){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Dưới 48 giờ</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&batteryLifeWatch1=2&batteryLifeWatch2=5" <?php if(isset($batteryLifeWatch1) && isset($batteryLifeWatch2) && $batteryLifeWatch1 == 2 && $batteryLifeWatch2 == 5){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 2 - 5 ngày</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&batteryLifeWatch1=5&batteryLifeWatch2=7" <?php if(isset($batteryLifeWatch1) && isset($batteryLifeWatch2) && $batteryLifeWatch1 == 5 && $batteryLifeWatch2 == 7){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 5 - 7 ngày</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&batteryLifeWatch1=7&batteryLifeWatch2=14" <?php if(isset($batteryLifeWatch1) && isset($batteryLifeWatch2) && $batteryLifeWatch1 == 7 && $batteryLifeWatch2 == 14){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 7 - 14 ngày</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=5&batteryLifeWatch3=14" <?php if(isset($batteryLifeWatch3) && $batteryLifeWatch3 == 14){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Trên 14 ngày</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                Hình dáng mặt <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFive"
                                class="collapse <?php if(isset($faceShapeWatch)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFive" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=5&faceShapeWatch=Chữ nhật" <?php if(isset($faceShapeWatch) && $faceShapeWatch == "Chữ nhật"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Chữ nhật</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=5&faceShapeWatch=Vuông" <?php if(isset($faceShapeWatch) && $faceShapeWatch == "Vuông"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Vuông</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=5&faceShapeWatch=Tròn" <?php if(isset($faceShapeWatch) && $faceShapeWatch == "Tròn"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Tròn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                Chất liệu dây <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseSix"
                                class="collapse <?php if(isset($bandMaterialWatch)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingSix" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=5&bandMaterialWatch=Da" <?php if(isset($bandMaterialWatch) && $bandMaterialWatch == "Da"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Da</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=5&bandMaterialWatch=Silicone" <?php if(isset($bandMaterialWatch) && $bandMaterialWatch == "Silicone"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Silicone</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=5&bandMaterialWatch=Thép không gỉ" <?php if(isset($bandMaterialWatch) && $bandMaterialWatch == "Thép không gỉ"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Thép không gỉ</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=5&bandMaterialWatch=Vải" <?php if(isset($bandMaterialWatch) && $bandMaterialWatch == "Vải"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Vải</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName() == "Phụ kiện") : ?>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Loại phụ kiện <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseOne"
                                class="collapse <?php if(isset($typeAccessory)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingOne" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=6&typeAccessory=Di động" <?php if(isset($typeAccessory) && $typeAccessory == "Di động"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Phụ kiện di động</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=6&typeAccessory=Laptop" <?php if(isset($typeAccessory) && $typeAccessory == "Laptop"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Phụ kiện Laptop</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=6&typeAccessory=PC" <?php if(isset($typeAccessory) && $typeAccessory == "PC"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Phụ kiện PC</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=6&typeAccessory=Âm thanh" <?php if(isset($typeAccessory) && $typeAccessory == "Âm thanh"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Thiết bị âm thanh</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=6&typeAccessory=Lưu trữ" <?php if(isset($typeAccessory) && $typeAccessory == "Lưu trữ"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Thiết bị lưu trữ</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Hãng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseTwo"
                                class="collapse <?php if(isset($brandAccessory) || $action=="productsByCategory"){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingTwo" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=6&brandAccessory=Apple" <?php if(isset($brandAccessory) && $brandAccessory == "Apple"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Apple</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=6&brandAccessory=Beats" <?php if(isset($brandAccessory) && $brandAccessory == "Beats"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Beats</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=6&brandAccessory=Harman/Kardon" <?php if(isset($brandAccessory) && $brandAccessory == "Harman/Kardon"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Harman/Kardon</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=6&brandAccessory=Samsum" <?php if(isset($brandAccessory) && $brandAccessory == "Samsum"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Samsum</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=6&brandAccessory=Sony" <?php if(isset($brandAccessory) && $brandAccessory == "Sony"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Sony</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=6&brandAccessory=Belkin" <?php if(isset($brandAccessory) && $brandAccessory == "Belkin"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Belkin</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=6&brandAccessory=Anker" <?php if(isset($brandAccessory) && $brandAccessory == "Anker"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Anker</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=6&brandAccessory=Logitech" <?php if(isset($brandAccessory) && $brandAccessory == "Logitech"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Logitech</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=6&brandAccessory=JBL" <?php if(isset($brandAccessory) && $brandAccessory == "JBL"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>JBL</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=6&brandAccessory=Xiaomi" <?php if(isset($brandAccessory) && $brandAccessory == "Xiaomi"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Xiaomi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Tương thích <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseThree"
                                class="collapse <?php if(isset($compatibleAccessory)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingThree" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=6&compatibleAccessory=Android" <?php if(isset($compatibleAccessory) && $compatibleAccessory == "Android"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Android</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=6&compatibleAccessory=iOS" <?php if(isset($compatibleAccessory) && $compatibleAccessory == "iOS"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>iOS</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=6&compatibleAccessory=iPadOS" <?php if(isset($compatibleAccessory) && $compatibleAccessory == "iPadOS"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>iPadOS</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=6&compatibleAccessory=MacOS" <?php if(isset($compatibleAccessory) && $compatibleAccessory == "MacOS"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>MacOS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName() == "TV") : ?>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hãng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseOne"
                                class="collapse <?php if(isset($brandTelevision) || $action=="productsByCategory"){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingOne" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=7&brandTelevision=Sony" <?php if(isset($brandTelevision) && $brandTelevision == "Sony"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Sony</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=7&brandTelevision=Samsum" <?php if(isset($brandTelevision) && $brandTelevision == "Samsum"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Samsum</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&brandTelevision=LG" <?php if(isset($brandTelevision) && $brandTelevision == "LG"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>LG</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&brandTelevision=TCL" <?php if(isset($brandTelevision) && $brandTelevision == "TCL"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>TCL</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=7&brandTelevision=Casper" <?php if(isset($brandTelevision) && $brandTelevision == "Casper"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Casper</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&brandTelevision=FFALCON" <?php if(isset($brandTelevision) && $brandTelevision == "FFALCON"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>FFALCON</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&brandTelevision=AQUA" <?php if(isset($brandTelevision) && $brandTelevision == "AQUA"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>AQUA</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Giá <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseTwo"
                                class="collapse <?php if(isset($startPrice) && isset($endPrice) || isset($lastMaxPrice)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingTwo" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=7&startPrice=0&endPrice=5000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 0 && $endPrice == 5000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Dưới 5 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=7&startPrice=5000000&endPrice=7000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 5000000 && $endPrice == 7000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 5 - 7 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=7&startPrice=7000000&endPrice=10000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 7000000 && $endPrice == 10000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 7 - 10 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=7&startPrice=10000000&endPrice=12000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 10000000 && $endPrice == 12000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 10 - 12 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=7&startPrice=12000000&endPrice=15000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 12000000 && $endPrice == 15000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 12 - 15 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=7&startPrice=15000000&endPrice=20000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 15000000 && $endPrice == 20000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 15 - 20 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=7&startPrice=20000000&endPrice=30000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 20000000 && $endPrice == 30000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 20 - 30 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=7&startPrice=30000000&endPrice=50000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 30000000 && $endPrice == 50000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 30 - 50 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=7&startPrice=50000000&endPrice=85000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 50000000 && $endPrice == 85000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 50 - 85 triệu</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=7&lastMaxPrice=85000000" <?php if(isset($lastMaxPrice) && $lastMaxPrice == 85000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Trên 85 triệu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Kích cỡ màn hình <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseThree"
                                class="collapse <?php if(isset($sizeScreenTelevision)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingThree" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=32 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "32 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>32 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=40 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "40 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>40 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=43 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "43 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>43 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=48 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "48 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>48 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=49 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "49 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>49 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=50 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "50 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>50 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=55 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "55 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>55 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=58 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "58 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>58 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=60 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "60 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>60 inch</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=65 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "65 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>65 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=70 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "70 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>70 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=75 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "75 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>75 inch</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=82 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "82 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>82 inch</a></br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=85 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "85 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>85 inch</a></br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=86 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "86 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>86 inch</a></br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=99 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "99 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>99 inch</a></br>
                                        <a class="btn" href="?action=filter&categoryID=7&sizeScreenTelevision=110 inch" <?php if(isset($sizeScreenTelevision) && $sizeScreenTelevision == "110 inch"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>110 inch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Độ phân giải <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFour"
                                class="collapse <?php if(isset($resolutionTelevision)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFour" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=7&resolutionTelevision=4K" <?php if(isset($resolutionTelevision) && $resolutionTelevision == "4K"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>4K</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&resolutionTelevision=Full HD" <?php if(isset($resolutionTelevision) && $resolutionTelevision == "Full HD"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Full HD</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=7&resolutionTelevision=HD" <?php if(isset($resolutionTelevision) && $resolutionTelevision == "HD"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>HD</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&resolutionTelevision=8K" <?php if(isset($resolutionTelevision) && $resolutionTelevision == "8K"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>8K</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                Loại TV <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFive"
                                class="collapse <?php if(isset($typeTelevision)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFive" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=7&typeTelevision=TiVi OLED" <?php if(isset($typeTelevision) && $typeTelevision == "TiVi OLED"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>TV OLED</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&typeTelevision=TiVi QLED" <?php if(isset($typeTelevision) && $typeTelevision == "TiVi QLED"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>TV QLED</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&typeTelevision=TiVi Android" <?php if(isset($typeTelevision) && $typeTelevision == "TiVi Android"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>TV Android</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&typeTelevision=TiVi Mini LED" <?php if(isset($typeTelevision) && $typeTelevision == "TiVi Mini LED"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>TV Mini LED</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=7&typeTelevision=TiVi NanoCell" <?php if(isset($typeTelevision) && $typeTelevision == "TiVi NanoCell"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>TV NanoCell</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=7&typeTelevision=TiVi Thiết kế đặc biệt" <?php if(isset($typeTelevision) && $typeTelevision == "TiVi Thiết kế đặc biệt"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>TV Thiết kế đặc biệt</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=7&typeTelevision=Smart TiVi" <?php if(isset($typeTelevision) && $typeTelevision == "Smart TiVi"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Smart TV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($getCategoryByCategoryID->getCategoryName() == "Tủ lạnh") : ?>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hãng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseOne"
                                class="collapse <?php if(isset($brandRefrigerator) || $action=="productsByCategory"){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingOne" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=8&brandRefrigerator=Panasonic" <?php if(isset($brandRefrigerator) && $brandRefrigerator == "Panasonic"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Panasonic</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=8&brandRefrigerator=Samsum" <?php if(isset($brandRefrigerator) && $brandRefrigerator == "Samsum"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Samsum</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=8&brandRefrigerator=Toshiba" <?php if(isset($brandRefrigerator) && $brandRefrigerator == "Toshiba"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Toshiba</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn" href="?action=filter&categoryID=8&brandRefrigerator=LG" <?php if(isset($brandRefrigerator) && $brandRefrigerator == "LG"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>LG</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=8&brandRefrigerator=AQUA" <?php if(isset($brandRefrigerator) && $brandRefrigerator == "AQUA"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>AQUA</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Giá <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseTwo"
                                class="collapse <?php if(isset($startPrice) && isset($endPrice) || isset($lastMaxPrice)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingTwo" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=8&startPrice=0&endPrice=5000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 0 && $endPrice == 5000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Dưới 5 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=8&startPrice=5000000&endPrice=8000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 5000000 && $endPrice == 8000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 5 - 8 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=8&startPrice=8000000&endPrice=12000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 8000000 && $endPrice == 12000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 8 - 12 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=8&startPrice=12000000&endPrice=15000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 12000000 && $endPrice == 15000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 12 - 15 triệu</a> <br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=8&startPrice=15000000&endPrice=20000000" <?php if(isset($startPrice) && isset($endPrice) && $startPrice == 15000000 && $endPrice == 20000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 15 - 20 triệu</a> <br>
                                        <a class="btn" href="?action=filter&categoryID=8&lastMaxPrice=20000000" <?php if(isset($lastMaxPrice) && $lastMaxPrice == 20000000){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Trên 20 triệu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Kiểu tủ <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseThree"
                                class="collapse <?php if(isset($typeRefrigerator)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingThree" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn" href="?action=filter&categoryID=8&typeRefrigerator=Ngăn đá trên" <?php if(isset($typeRefrigerator) && $typeRefrigerator == "Ngăn đá trên"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Ngăn đá trên</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=8&typeRefrigerator=Ngăn đá dưới" <?php if(isset($typeRefrigerator) && $typeRefrigerator == "Ngăn đá dưới"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Ngăn đá dưới</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=8&typeRefrigerator=Mini" <?php if(isset($typeRefrigerator) && $typeRefrigerator == "Mini"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Mini</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=8&typeRefrigerator=Side by Side" <?php if(isset($typeRefrigerator) && $typeRefrigerator == "Side by Side"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Side by Side</a> </br>
                                        <a class="btn" href="?action=filter&categoryID=8&typeRefrigerator=Tủ nhiều cửa" <?php if(isset($typeRefrigerator) && $typeRefrigerator == "Tủ nhiều cửa"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Tủ nhiều cửa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block text-center" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Dung tích sử dụng <i class="fas fa-sort"></i>
                            </button>
                            <div id="collapseFour"
                                class="collapse <?php if(isset($useCapacityRefrigerator1) && isset($useCapacityRefrigerator2) || isset($useCapacityRefrigerator3)){echo "show";}else{echo "";} ?>"
                                aria-labelledby="headingFour" data-parent="#blsp">
                                <div class="row text-center">
                                    <div class="col-12">
                                        <a class="btn"
                                            href="?action=filter&categoryID=8&useCapacityRefrigerator1=0 lít&useCapacityRefrigerator2=150 lít" <?php if(isset($useCapacityRefrigerator1) && isset($useCapacityRefrigerator2) && $useCapacityRefrigerator1 == "0 lít" && $useCapacityRefrigerator2 == "150 lít"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Dưới 150 lít</a> </br>
                                        <a class="btn"
                                            href="?action=filter&categoryID=8&useCapacityRefrigerator1=150 lít&useCapacityRefrigerator2=300 lít" <?php if(isset($useCapacityRefrigerator1) && isset($useCapacityRefrigerator2) && $useCapacityRefrigerator1 == "150 lít" && $useCapacityRefrigerator2 == "300 lít"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 150 - 300 lít</a>
                                        <a class="btn"
                                            href="?action=filter&categoryID=8&useCapacityRefrigerator1=301 lít&useCapacityRefrigerator2=400 lít" <?php if(isset($useCapacityRefrigerator1) && isset($useCapacityRefrigerator2) && $useCapacityRefrigerator1 == "301 lít" && $useCapacityRefrigerator2 == "400 lít"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 301 - 400 lít</a>
                                        <a class="btn"
                                            href="?action=filter&categoryID=8&useCapacityRefrigerator1=401 lít&useCapacityRefrigerator2=550 lít" <?php if(isset($useCapacityRefrigerator1) && isset($useCapacityRefrigerator2) && $useCapacityRefrigerator1 == "401 lít" && $useCapacityRefrigerator2 == "550 lít"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Từ 401 - 550 lít</a>
                                        <a class="btn"
                                            href="?action=filter&categoryID=8&useCapacityRefrigerator3=550 lít" <?php if(isset($useCapacityRefrigerator3) && $useCapacityRefrigerator3 == "550 lít"){
                                                   echo 'style="color: white;background-color: #223464;"';
                                                 }else{
                                                     echo '';
                                                 } 
                                               ?>>Trên 550 lít</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-9 sanphamtheodanhmuc">
                <!-- số sản phẩm hiển thị -->
                <div class="row">
                    <div class="col-6 countsanpham">
                        <p>Hiển thị: <span><?php echo count($productsByCategory); ?></span>
                            <?php echo $getCategoryByCategoryID->getCategoryName(); ?>
                            <span style="color: red;"><?php 
                                                if(isset($startPrice) || isset ($endPrice)){
                                                    echo "theo Giá ".$getCategoryByCategoryID->getCategoryName()." từ ". number_format($startPrice,0,',','.')."đ đến ".number_format($endPrice,0,',','.')."đ";
                                                }else if(isset ($lastMaxPrice)){
                                                    echo "theo Giá ".$getCategoryByCategoryID->getCategoryName()." trên ".number_format($lastMaxPrice,0,',','.')."đ";
                                                }
                                                else if(isset($brandSmartphone)){
                                                    echo "theo Hãng điện thoại: ".$brandSmartphone;
                                                } else if(isset ($typeSmartphone)){
                                                    echo "theo Loại điện thoại: ".$typeSmartphone;
                                                }else if(isset ($functionSmartphone) && isset ($configurationSmartphone)){
                                                    echo "theo Hiệu năng và Pin: ".$functionSmartphone."/".$configurationSmartphone;
                                                }else if(isset ($sizeBatterySmartphone)){
                                                    echo "theo Hiệu năng và Pin: Pin khủng trên ".$sizeBatterySmartphone;
                                                }else if(isset ($batteryTechnologySmartphone)){
                                                    echo "theo Hiệu năng và Pin: ".$batteryTechnologySmartphone;
                                                }else if(isset ($ramSmartphone)){
                                                    echo "theo Ram Điện thoại: " .$ramSmartphone; 
                                                }else if(isset ($internalMemorySmartphone)){
                                                    echo "theo Bộ nhớ trong: ".$internalMemorySmartphone;
                                                }else if(isset ($cameraSmartphone)){
                                                    echo "theo Camera điện thoại: ".$cameraSmartphone;
                                                }else if(isset ($specialFeaturesSmartphone)){
                                                    echo "theo Tính năng đặc biệt: ".$specialFeaturesSmartphone;
                                                }else if(isset ($designSmartphone)){
                                                    echo "theo Thiết kế điện thoại: ".$designSmartphone;
                                                }else if(isset ($screenSmartphone)){
                                                    echo "theo Màn hình điện thoại: ".$screenSmartphone;
                                                }else if(isset ($sizeScreenSmartphone)){
                                                    echo "theo Màn hình điện thoại: Từ ".$sizeScreenSmartphone." inch trở lên";
                                                }else if(isset ($brandLaptop)){
                                                    echo "theo Hãng Laptop ".$brandLaptop;
                                                }else if(isset ($usageNeedLaptop)){
                                                    echo "theo Nhu cầu sử dụng: ".$usageNeedLaptop;
                                                }else if(isset ($sizeScreenLaptop)){
                                                    echo "theo Màn hình: ".$sizeScreenLaptop;
                                                }else if(isset ($cpuLaptop)){
                                                    echo "theo CPU: ".$cpuLaptop;
                                                }else if(isset ($ramLaptop)){
                                                    echo "theo RAM: ".$ramLaptop;
                                                }else if(isset ($graphicsCardLaptop)){
                                                    echo "theo Card đồ họa: ".$graphicsCardLaptop;
                                                }else if(isset ($hardDriverLaptop)){
                                                    echo "theo Ổ cứng: ".$hardDriverLaptop;
                                                }else if(isset ($screenResolutionLaptop)){
                                                    echo "theo Độ phân giải: ".$screenResolutionLaptop;
                                                }else if(isset ($sweepFrequencyLaptop)){
                                                    echo "theo Tần số quét: ".$sweepFrequencyLaptop;
                                                }else if(isset ($brandTablet)){
                                                    echo "theo Hãng Tablet: ".$brandTablet;
                                                }else if(isset ($screenTablet1) && isset ($screenTablet2)){
                                                    echo "theo Màn hình Tablet từ ".$screenTablet1." đến ".$screenTablet2;
                                                }else if(isset ($screenTablet3)){
                                                    echo "theo Màn hình Tablet trên ".$screenTablet3;
                                                }else if(isset ($ramTablet)){
                                                    echo "theo RAM Tablet: ".$ramTablet;
                                                }else if(isset ($internalMemoryTablet)){
                                                    echo "theo Bộ nhớ trong Tablet: ".$internalMemoryTablet;
                                                }else if(isset ($brandPC)){
                                                    echo "theo Hãng PC: ".$brandPC;
                                                }else if(isset ($cpuPC)){
                                                    echo "theo CPU: ".$cpuPC;
                                                }else if(isset ($ramPC)){
                                                    echo "theo RAM: ".$ramPC;
                                                }else if(isset ($hardDriverPC)){
                                                    echo "theo Ổ cứng: ".$hardDriverPC;
                                                }else if(isset ($graphicsCardPC)){
                                                    echo "theo Card đồ họa: ".$graphicsCardPC;
                                                }else if(isset ($usageNeedPC)){
                                                    echo "theo Nhu cầu sử dụng: ".$usageNeedPC;
                                                }else if(isset ($brandWatch)){
                                                    echo "theo Hãng Watch: ".$brandWatch;
                                                }else if(isset ($typeWatch)){
                                                    echo "theo Loại Watch: ".$typeWatch;
                                                }else if(isset ($batteryLifeWatch1) && isset ($batteryLifeWatch2)){
                                                    echo "theo Thời lượng PIN từ ".$batteryLifeWatch1." đến ".$batteryLifeWatch2;
                                                }else if(isset ($batteryLifeWatch3)){
                                                    echo "theo Thời lượng PIN trên ".$batteryLifeWatch3;
                                                }else if(isset ($faceShapeWatch)){
                                                    echo "theo Hình dáng mặt: ".$faceShapeWatch;
                                                }else if(isset ($bandMaterialWatch)){
                                                    echo "theo Chất liệu dây: ".$bandMaterialWatch;
                                                }else if(isset ($typeAccessory)){
                                                    echo "theo Loại phụ kiện: ".$typeAccessory;
                                                }else if(isset ($brandAccessory)){
                                                    echo "theo Hãng phụ kiện: ".$brandAccessory;
                                                }else if(isset ($compatibleAccessory)){
                                                    echo "theo Tương thích: ".$compatibleAccessory;
                                                }else if(isset ($brandTelevision)){
                                                    echo "theo Hãng TV: ".$brandTelevision;
                                                }else if(isset ($sizeScreenTelevision)){
                                                    echo "theo Kích cỡ màn hình: ".$sizeScreenTelevision;
                                                }else if(isset ($resolutionTelevision)){
                                                    echo "theo Độ phân giải: ".$resolutionTelevision;
                                                }else if(isset ($typeTelevision)){
                                                    echo "theo Loại TV: ".$typeTelevision;
                                                }else if(isset ($brandRefrigerator)){
                                                    echo "theo Hãng Tủ lạnh: ".$brandRefrigerator;
                                                }else if(isset ($typeRefrigerator)){
                                                    echo "theo Kiểu tủ: ".$typeRefrigerator;
                                                }else if(isset ($useCapacityRefrigerator1) && isset ($useCapacityRefrigerator2)){
                                                    echo "theo Dung tích sử dụng từ ".$useCapacityRefrigerator1." đến ".$useCapacityRefrigerator2;
                                                }else if(isset ($useCapacityRefrigerator3)){
                                                    echo "theo Dung tích sử dụng trên ".$useCapacityRefrigerator3;
                                                }else if($action == "productsByCategory"){
                                                    echo "";
                                                }
                                            ?></span>
                        </p>
                    </div>
                    <div class="col-6 sort">
                        <form action="?action=productsByCategory&categoryID=<?php echo $categoryID; ?>" method="post">
                            <div class="form-inline float-right">
                                <label for="contentShow">Sắp xếp: </label>
                                <select class="form-control ml-2" name="contentShow" id="contentShow">
                                    <option value="All" <?php if ($contentShow == "All") {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>Tất cả</option>
                                    <option value="BestSelling" <?php if ($contentShow == "BestSelling") {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>Bán chạy nhất</option>
                                    <option value="ascPrice" <?php if ($contentShow == "ascPrice") {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>Giá từ thấp đến cao</option>
                                    <option value="descPrice" <?php if ($contentShow == "descPrice") {
                                                    echo "selected";
                                                    } else {
                                                    echo "";
                                                    } ?>>Giá từ cao đến thấp</option>
                                </select>
                                <button type="submit" name="applyContentShow" class="btn btn-danger ml-5">Áp
                                    dụng</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- search nhanh -->
                <div class="row">
                    <div class="col searchflash">
                        <p>
                            <h6 style="font-size: 15px;">
                                <span>Tìm kiếm nhanh: </span>
                                <?php foreach ($productsInterestByCategory as $productInterestByCategory) : ?>
                                <a class="btn btn-light"
                                    href="?action=product_detail&productName=<?php echo $productInterestByCategory['productName']; ?>&categoryID=<?php echo $productInterestByCategory['categoryID']; ?>"><?php echo $productInterestByCategory['productName']; ?></a>
                                <?php endforeach; ?>
                            </h6>
                        </p>
                    </div>
                </div>
                <!-- slideshow hãng điện thoại -->
                <div class="row">
                    <div class="col timkiemnhanhhang">
                        <div id="timkiemnhanhhang" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php if($getCategoryByCategoryID->getCategoryName()== "Điện thoại") : ?>
                                <div
                                    class="carousel-item <?php if($brandSmartphone == "Apple" || $brandSmartphone == "Masstel" || 
                                            $brandSmartphone == "Nokia" || $brandSmartphone == "Oppo" || $brandSmartphone == "Realme" ||
                                            $brandSmartphone == "Samsum" || $action == "productsByCategory" || $categoryID == 1){echo "active";}else{echo '';} ?>">
                                    <div class="row timkiemnhanhhang12">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=1&brandSmartphone=Apple"><img
                                                    class="img-fluid" src="../images/dienthoai/boloc/iphone.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=1&brandSmartphone=Masstel"><img
                                                    class="img-fluid" src="../images/dienthoai/boloc/masstel.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=1&brandSmartphone=Nokia"><img
                                                    class="img-fluid" src="../images/dienthoai/boloc/mokia.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=1&brandSmartphone=Oppo"><img
                                                    class="img-fluid" src="../images/dienthoai/boloc/oppo.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=1&brandSmartphone=Realme"><img
                                                    class="img-fluid" src="../images/dienthoai/boloc/realme.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=1&brandSmartphone=Samsum"><img
                                                    class="img-fluid" src="../images/dienthoai/boloc/samsum.jpg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item <?php if($brandSmartphone == "Vivo" || $brandSmartphone == "Vsmart" || 
                                            $brandSmartphone == "Xiaomi"){echo "active";}else{echo '';} ?>">
                                    <div class="row timkiemnhanhhang12">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=1&brandSmartphone=Vivo"><img
                                                    class="img-fluid" src="../images/dienthoai/boloc/vivo.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=1&brandSmartphone=Vsmart"><img
                                                    class="img-fluid" src="../images/dienthoai/boloc/vsmart.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=1&brandSmartphone=Xiaomi"><img
                                                    class="img-fluid" src="../images/dienthoai/boloc/xiaomi.jpg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($getCategoryByCategoryID->getCategoryName()== "Laptop") : ?>
                                <div
                                    class="carousel-item <?php if($brandLaptop == "Apple" || $brandLaptop == "Acer" || 
                                            $brandLaptop == "Asus" || $brandLaptop == "Dell" || $brandLaptop == "HP" || 
                                            $brandLaptop == "Lenovo" || $action == "productsByCategory" || $categoryID == 2){echo "active";}else{echo '';} ?>">
                                    <div class="row timkiemnhanhhang12">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=2&brandLaptop=Apple"><img
                                                    class="img-fluid" src="../images/laptop/boloc/macbook.png"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=2&brandLaptop=Acer"><img
                                                    class="img-fluid" src="../images/laptop/boloc/acer.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=2&brandLaptop=Asus"><img
                                                    class="img-fluid" src="../images/laptop/boloc/asus.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=2&brandLaptop=Dell"><img
                                                    class="img-fluid" src="../images/laptop/boloc/dell.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=2&brandLaptop=HP"><img class="img-fluid"
                                                    src="../images/laptop/boloc/hp.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=2&brandLaptop=Lenovo"><img
                                                    class="img-fluid" src="../images/laptop/boloc/lenovo.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="carousel-item <?php if($brandLaptop == "MSI" ){echo "active";}else{echo '';} ?>">
                                    <div class="row timkiemnhanhhang12">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=2&brandLaptop=MSI"><img class="img-fluid"
                                                    src="../images/laptop/boloc/msi.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($getCategoryByCategoryID->getCategoryName()== "Tablet") : ?>
                                <div class="carousel-item active">
                                    <div class="row timkiemnhanhhang12 justify-content-center">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=3&brandTablet=Apple"><img
                                                    class="img-fluid" src="../images/tablet/boloc/iPad.jpg" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=3&brandTablet=Lenovo"><img
                                                    class="img-fluid" src="../images/tablet/boloc/lenovo.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=3&brandTablet=Huawei"><img
                                                    class="img-fluid" src="../images/tablet/boloc/huawei.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=3&brandTablet=Samsum"><img
                                                    class="img-fluid" src="../images/tablet/boloc/samsum.png"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=3&brandTablet=Xiaomi"><img
                                                    class="img-fluid" src="../images/tablet/boloc/xiaomi.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($getCategoryByCategoryID->getCategoryName()== "PC") : ?>
                                <div class="carousel-item active">
                                    <div class="row timkiemnhanhhang12 justify-content-center">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=4&brandPC=Apple"><img class="img-fluid"
                                                    src="../images/pc/boloc/iMac.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=4&brandPC=Asus"><img class="img-fluid"
                                                    src="../images/pc/boloc/asus.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=4&brandPC=HP"><img class="img-fluid"
                                                    src="../images/pc/boloc/hp.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=4&brandPC=Lenovo"><img class="img-fluid"
                                                    src="../images/pc/boloc/lenovo.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($getCategoryByCategoryID->getCategoryName()== "Watch") : ?>
                                <div class="carousel-item active">
                                    <div class="row timkiemnhanhhang12 justify-content-center">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=5&brandWatch=Apple"><img
                                                    class="img-fluid" src="../images/watch/boloc/apple watch.png"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=5&brandWatch=Samsum"><img
                                                    class="img-fluid" src="../images/watch/boloc/samsum.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=5&brandWatch=Xiaomi"><img
                                                    class="img-fluid" src="../images/watch/boloc/xiaomi.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=5&brandWatch=Oppo"><img class="img-fluid"
                                                    src="../images/watch/boloc/oppo.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($getCategoryByCategoryID->getCategoryName()== "Phụ kiện") : ?>
                                <div
                                    class="carousel-item <?php if($brandAccessory == "Apple" || $brandAccessory == "Anker" ||
                                            $brandAccessory == "Beats" || $brandAccessory == "Belkin" || $brandAccessory == "Harman/Kardon" || 
                                            $brandAccessory == "JBL" || $action == "productsByCategory" || $categoryID == 6){echo "active";}else{echo "";} ?>">
                                    <div class="row timkiemnhanhhang12">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=6&brandAccessory=Apple"><img
                                                    class="img-fluid" src="../images/phukien/boloc/apple.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=6&brandAccessory=Anker"><img
                                                    class="img-fluid" src="../images/phukien/boloc/anker.png"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=6&brandAccessory=Beats"><img
                                                    class="img-fluid" src="../images/phukien/boloc/beats.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=6&brandAccessory=Belkin"><img
                                                    class="img-fluid" src="../images/phukien/boloc/belkin.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=6&brandAccessory=Harman/Kardon"><img
                                                    class="img-fluid" src="../images/phukien/boloc/harmankardon.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=6&brandAccessory=JBL"><img
                                                    class="img-fluid" src="../images/phukien/boloc/jbl.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="carousel-item <?php if($brandAccessory == "Logitech" || $brandAccessory == "Samsum" ||
                                            $brandAccessory == "Sony" || $brandAccessory == "Xiaomi"){echo "active";}else{echo "";} ?>">
                                    <div class="row timkiemnhanhhang12">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=6&brandAccessory=Logitech"><img
                                                    class="img-fluid" src="../images/phukien/boloc/logitech.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=6&brandAccessory=Samsum"><img
                                                    class="img-fluid" src="../images/phukien/boloc/samsum.png"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=6&brandAccessory=Sony"><img
                                                    class="img-fluid" src="../images/phukien/boloc/sony.jpg" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=6&brandAccessory=Xiaomi"><img
                                                    class="img-fluid" src="../images/phukien/boloc/xiaomi.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($getCategoryByCategoryID->getCategoryName()== "TV") : ?>
                                <div
                                    class="carousel-item <?php if($brandTelevision == "Sony" || $brandTelevision == "AQUA" ||
                                            $brandTelevision == "Casper" || $brandTelevision == "FFALCON" || $brandTelevision == "LG" || 
                                            $brandTelevision == "Samsum" || $action == "productsByCategory" || $categoryID == 7){echo "active";}else{echo "";} ?>">
                                    <div class="row timkiemnhanhhang12">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=7&brandTelevision=Sony"><img
                                                    class="img-fluid" src="../images/tv/boloc/sony.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=7&brandTelevision=AQUA"><img
                                                    class="img-fluid" style="width: 65%;"
                                                    src="../images/tv/boloc/aqua.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=7&brandTelevision=Casper"><img
                                                    class="img-fluid" src="../images/tv/boloc/casper.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=7&brandTelevision=FFALCON"><img
                                                    class="img-fluid" src="../images/tv/boloc/ffalcon.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=7&brandTelevision=LG"><img
                                                    class="img-fluid" src="../images/tv/boloc/lg.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=7&brandTelevision=Samsum"><img
                                                    class="img-fluid" src="../images/tv/boloc/samsum.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="carousel-item <?php if($brandTelevision == "TCL"){echo "active";}else{echo "";} ?>">
                                    <div class="row timkiemnhanhhang12">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=7&brandTelevision=TCL"><img
                                                    class="img-fluid" src="../images/tv/boloc/tcl.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($getCategoryByCategoryID->getCategoryName()== "Tủ lạnh") : ?>
                                <div class="carousel-item active">
                                    <div class="row timkiemnhanhhang12 justify-content-center">
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=8&brandRefrigerator=Panasonic"><img
                                                    class="img-fluid" src="../images/tulanh/boloc/panasonic.png"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=8&brandRefrigerator=AQUA"><img
                                                    class="img-fluid" style="width: 65%;"
                                                    src="../images/tulanh/boloc/aqua.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=8&brandRefrigerator=LG"><img
                                                    class="img-fluid" style="width: 30%;"
                                                    src="../images/tulanh/boloc/lg.png" alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=8&brandRefrigerator=Samsum"><img
                                                    class="img-fluid" src="../images/tulanh/boloc/samsum.png"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-2">
                                            <a href="?action=filter&categoryID=8&brandRefrigerator=Toshiba"><img
                                                    class="img-fluid" src="../images/tulanh/boloc/toshiba.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <a class="carousel-control-prev slidepre" href="#timkiemnhanhhang" data-slide="prev"
                                role="button">
                                <span class="carousel-control" aria-hidden="true"><i
                                        class="fas fa-chevron-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next slidenext" href="#timkiemnhanhhang" data-slide="next"
                                role="button">
                                <span class="carousel-control" aria-hidden="true"><i
                                        class="fas fa-chevron-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- sản phẩm -->
                <div class="row mt-2">
                    <div class="col sanphambycategory">
                        <?php if(!empty($getProductsPagination)) : ?>
                        <div class="row sanphamtheodanhmuc12">
                            <?php foreach ($getProductsPagination as $getProductPagination) : ?>
                            <input type="hidden" name="viewProductID">
                            <div class="col-2 sanpham sanphamtheodanhmuc1">
                                <div class="card">
                                    <div class="row">
                                        <div class="col">
                                            <p class="float-left hottitle"><i class="fab fa-hotjar"></i> Hot</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col imgProduct">
                                            <a href="?action=product_detail&productName=<?php echo $getProductPagination['productName']; ?>&categoryID=<?php echo $getProductPagination['categoryID']; ?>">
                                                <img class="card-img-top" 
                                                    src="<?php echo '../images/productimage/' . $getProductPagination['productName'] . '.jpg'; ?>"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                   <div class="row">
                                       <div class="col text-center productName">
                                            <a href="#" class="productname">
                                                <h6 class="card-title">
                                                    <?php echo $getProductPagination['productName']; ?>
                                                </h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col productPrice text-center">
                                            <p class="card-text price"><span>Giá :</span>
                                                <?php echo number_format($getProductPagination['price'], 0, ',', '.'); ?>đ
                                            </p>
                                            <p class="text-center finalprice"><span>Chỉ còn :</span>
                                                <?php echo number_format($getProductPagination['finalPrice'], 0, ',', '.'); ?>đ
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="danhgia">
                                                <div class="rate">
                                                    <?php
                                                            if (isset($getProductPagination['productName'])) {
                                                                $rateProducts = $productDB->getRateStarProduct($getProductPagination['productName']);
                                                                $countRateProduct = count($rateProducts);
                                                                if ($countRateProduct != 0) {
                                                                    $rateStar = 0;
                                                                    foreach ($rateProducts as $rateProduct) {
                                                                        $rateStar += $rateProduct['rateStarNumber'];
                                                                    }
                                                                    $rateStarProduct = $rateStar / $countRateProduct;
                                                                } else {
                                                                    $rateMessage1 = "Chưa có đánh giá";
                                                                }
                                                            }
                                                            ?>
                                                    <?php if (isset($rateMessage1)) : ?>
                                                        <?php echo "<p class='rateMessage'>$rateMessage1</p>"; ?>
                                                    <?php else: ?>
                                                        <?php for ($i = 0; $i < round($rateStarProduct); $i++) : ?>
                                                        <label for="star<?php echo $i; ?>">
                                                            <?php echo $i; ?>star
                                                        </label>
                                                        <?php endfor; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <p class="float-right mgg">
                                                -<?php echo $getProductPagination['discount']; ?>%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col quantity">
                                            <p>Số lượng còn lại:
                                                <span style="color: red;font-style: italic;">
                                                    <?php if($getProductPagination['quantity'] == 0){
                                                                    echo "Hết hàng";
                                                                  }else {
                                                                    echo $getProductPagination['quantity'];
                                                                  }
                                                            ?>

                                                </span></p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <ul class="list-group">
                                                    <?php if ($getProductPagination['categoryID'] == "01") : ?>
                                                    <li>Ram & ROM:
                                                        <?php echo $getProductPagination['ramSmartphone']; ?> ,
                                                        <?php echo $getProductPagination['internalMemorySmartphone']; ?>
                                                    </li>
                                                    <li>Pin & Sạc:
                                                        <?php echo $getProductPagination['sizeBatterySmartphone']; ?>
                                                        ,
                                                        <?php echo $getProductPagination['chargerSmartphone']; ?>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php if ($getProductPagination['categoryID'] == "02") : ?>
                                                    <li>Ram & Ổ cứng:
                                                        <?php echo $getProductPagination['ramLaptop']; ?> ,
                                                        <?php echo $getProductPagination['hardDriverLaptop']; ?>
                                                    </li>
                                                    <li>CPU: <?php echo $getProductPagination['cpuLaptop']; ?>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php if ($getProductPagination['categoryID'] == "03") : ?>
                                                    <li>Ram & ROM:
                                                        <?php echo $getProductPagination['ramTablet']; ?> ,
                                                        <?php echo $getProductPagination['internalMemoryTablet']; ?>
                                                    </li>
                                                    <li>Pin & Sạc:
                                                        <?php echo $getProductPagination['pinTablet']; ?> ,
                                                        <?php echo $getProductPagination['chargerTablet']; ?>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php if ($getProductPagination['categoryID'] == "04") : ?>
                                                    <li>Ram & Ổ cứng:
                                                        <?php echo $getProductPagination['ramPC']; ?> ,
                                                        <?php echo $getProductPagination['hardDriverPC']; ?>
                                                    </li>
                                                    <li>CPU: <?php echo $getProductPagination['cpuPC']; ?>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php if ($getProductPagination['categoryID'] == "05") : ?>
                                                    <li>Màn hình:
                                                        <?php echo $getProductPagination['screenWatch']; ?> ,
                                                        <?php echo $getProductPagination['sizeScreenWatch']; ?>
                                                    </li>
                                                    <li>Sử dụng:
                                                        <?php echo $getProductPagination['batteryLifeWatch']; ?>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php if ($getProductPagination['categoryID'] == "06") : ?>
                                                    <li>Hãng:
                                                        <?php echo $getProductPagination['brandAccessory']; ?>
                                                    </li>
                                                    <li>Loại phụ kiện:
                                                        <?php echo $getProductPagination['typeAccessory']; ?>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php if ($getProductPagination['categoryID'] == "07") : ?>
                                                    <li>Hãng:
                                                        <?php echo $getProductPagination['brandTelevision']; ?>
                                                    </li>
                                                    <li>Màn hình:
                                                        <?php echo $getProductPagination['sizeScreenTelevision']; ?>
                                                        ,
                                                        <?php echo $getProductPagination['resolutionTelevision']; ?>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php if ($getProductPagination['categoryID'] == "08") : ?>
                                                    <li>Hãng:
                                                        <?php echo $getProductPagination['brandRefrigerator']; ?>
                                                    </li>
                                                    <li>Dung tích sử dụng:
                                                        <?php echo $getProductPagination['useCapacityRefrigerator']; ?>
                                                    </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="addCart text-center mt-2">
                                                    <?php if($getProductPagination['quantity'] == 0) : ?>
                                                    <button class='btn disableButton' disabled><img class='img-fluid'
                                                            src='../images/menu/carts.png' alt=''> Thêm vào giỏ
                                                        hàng</button>
                                                    <?php else: ?>
                                                    <a class='btn'
                                                        href="?action=addCart&productName=<?php echo $getProductPagination['productName']; ?>"><img
                                                            class='img-fluid' src='../images/menu/carts.png' alt=''> Thêm
                                                        vào giỏ hàng</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php else: ?>
                        <div class="row mt-5">
                            <div class="col text-center">
                                <h6>Không có sản phẩm thuộc
                                    <span style="color: red; font-style: italic;font-weight: bolder;">
                                        <?php 
                                                if(isset($startPrice) || isset ($endPrice)){
                                                    echo "Giá ".$getCategoryByCategoryID->getCategoryName()." từ ". number_format($startPrice,0,',','.')."đ đến ".number_format($endPrice,0,',','.')."đ";
                                                }else if(isset ($lastMaxPrice)){
                                                    echo "Giá ".$getCategoryByCategoryID->getCategoryName()." trên ".number_format($lastMaxPrice,0,',','.')."đ";
                                                }
                                                else if(isset($brandSmartphone)){
                                                    echo "Hãng điện thoại: ".$brandSmartphone;
                                                } else if(isset ($typeSmartphone)){
                                                    echo "Loại điện thoại: ".$typeSmartphone;
                                                }else if(isset ($functionSmartphone) && isset ($configurationSmartphone)){
                                                    echo "Hiệu năng và Pin: ".$functionSmartphone."/".$configurationSmartphone;
                                                }else if(isset ($sizeBatterySmartphone)){
                                                    echo "Hiệu năng và Pin: Pin khủng trên ".$sizeBatterySmartphone;
                                                }else if(isset ($batteryTechnologySmartphone)){
                                                    echo "Hiệu năng và Pin: ".$batteryTechnologySmartphone;
                                                }else if(isset ($ramSmartphone)){
                                                    echo "Ram Điện thoại: " .$ramSmartphone; 
                                                }else if(isset ($internalMemorySmartphone)){
                                                    echo "Bộ nhớ trong: ".$internalMemorySmartphone;
                                                }else if(isset ($cameraSmartphone)){
                                                    echo "Camera điện thoại: ".$cameraSmartphone;
                                                }else if(isset ($specialFeaturesSmartphone)){
                                                    echo "Tính năng đặc biệt: ".$specialFeaturesSmartphone;
                                                }else if(isset ($designSmartphone)){
                                                    echo "Thiết kế điện thoại: ".$designSmartphone;
                                                }else if(isset ($screenSmartphone)){
                                                    echo "Màn hình điện thoại: ".$screenSmartphone;
                                                }else if(isset ($sizeScreenSmartphone)){
                                                    echo "Màn hình điện thoại: Từ ".$sizeScreenSmartphone." inch trở lên";
                                                }else if(isset ($brandLaptop)){
                                                    echo "Hãng Laptop ".$brandLaptop;
                                                }else if(isset ($usageNeedLaptop)){
                                                    echo "Nhu cầu sử dụng: ".$usageNeedLaptop;
                                                }else if(isset ($sizeScreenLaptop)){
                                                    echo "Màn hình: ".$sizeScreenLaptop;
                                                }else if(isset ($cpuLaptop)){
                                                    echo "CPU: ".$cpuLaptop;
                                                }else if(isset ($ramLaptop)){
                                                    echo "RAM: ".$ramLaptop;
                                                }else if(isset ($graphicsCardLaptop)){
                                                    echo "Card đồ họa: ".$graphicsCardLaptop;
                                                }else if(isset ($hardDriverLaptop)){
                                                    echo "Ổ cứng: ".$hardDriverLaptop;
                                                }else if(isset ($screenResolutionLaptop)){
                                                    echo "Độ phân giải: ".$screenResolutionLaptop;
                                                }else if(isset ($sweepFrequencyLaptop)){
                                                    echo "Tần số quét: ".$sweepFrequencyLaptop;
                                                }else if(isset ($brandTablet)){
                                                    echo "Hãng Tablet: ".$brandTablet;
                                                }else if(isset ($screenTablet1) && isset ($screenTablet2)){
                                                    echo "Màn hình Tablet từ ".$screenTablet1." đến ".$screenTablet2;
                                                }else if(isset ($screenTablet3)){
                                                    echo "Màn hình Tablet trên ".$screenTablet3;
                                                }else if(isset ($ramTablet)){
                                                    echo "RAM Tablet: ".$ramTablet;
                                                }else if(isset ($internalMemoryTablet)){
                                                    echo "Bộ nhớ trong Tablet: ".$internalMemoryTablet;
                                                }else if(isset ($brandPC)){
                                                    echo "Hãng PC: ".$brandPC;
                                                }else if(isset ($cpuPC)){
                                                    echo "CPU: ".$cpuPC;
                                                }else if(isset ($ramPC)){
                                                    echo "RAM: ".$ramPC;
                                                }else if(isset ($hardDriverPC)){
                                                    echo "Ổ cứng: ".$hardDriverPC;
                                                }else if(isset ($graphicsCardPC)){
                                                    echo "Card đồ họa: ".$graphicsCardPC;
                                                }else if(isset ($usageNeedPC)){
                                                    echo "Nhu cầu sử dụng: ".$usageNeedPC;
                                                }else if(isset ($brandWatch)){
                                                    echo "Hãng Watch: ".$brandWatch;
                                                }else if(isset ($typeWatch)){
                                                    echo "Loại Watch: ".$typeWatch;
                                                }else if(isset ($batteryLifeWatch1) && isset ($batteryLifeWatch2)){
                                                    echo "Thời lượng PIN từ ".$batteryLifeWatch1." đến ".$batteryLifeWatch2;
                                                }else if(isset ($batteryLifeWatch3)){
                                                    echo "Thời lượng PIN trên ".$batteryLifeWatch3;
                                                }else if(isset ($faceShapeWatch)){
                                                    echo "Hình dáng mặt: ".$faceShapeWatch;
                                                }else if(isset ($bandMaterialWatch)){
                                                    echo "Chất liệu dây: ".$bandMaterialWatch;
                                                }else if(isset ($typeAccessory)){
                                                    echo "Loại phụ kiện: ".$typeAccessory;
                                                }else if(isset ($brandAccessory)){
                                                    echo "Hãng phụ kiện: ".$brandAccessory;
                                                }else if(isset ($compatibleAccessory)){
                                                    echo "Tương thích: ".$compatibleAccessory;
                                                }else if(isset ($brandTelevision)){
                                                    echo "Hãng TV: ".$brandTelevision;
                                                }else if(isset ($sizeScreenTelevision)){
                                                    echo "Kích cỡ màn hình: ".$sizeScreenTelevision;
                                                }else if(isset ($resolutionTelevision)){
                                                    echo "Độ phân giải: ".$resolutionTelevision;
                                                }else if(isset ($typeTelevision)){
                                                    echo "Loại TV: ".$typeTelevision;
                                                }else if(isset ($brandRefrigerator)){
                                                    echo "Hãng Tủ lạnh: ".$brandRefrigerator;
                                                }else if(isset ($typeRefrigerator)){
                                                    echo "Kiểu tủ: ".$typeRefrigerator;
                                                }else if(isset ($useCapacityRefrigerator1) && isset ($useCapacityRefrigerator2)){
                                                    echo "Dung tích sử dụng từ ".$useCapacityRefrigerator1." đến ".$useCapacityRefrigerator2;
                                                }else if(isset ($useCapacityRefrigerator3)){
                                                    echo "Dung tích sử dụng trên ".$useCapacityRefrigerator3;
                                                }
                                            ?>
                                    </span>
                                </h6>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- phân trang -->
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
                                    <a class="page-link"
                                        href="?action=productsByCategory&categoryID=<?php echo $categoryID; ?>&page=<?php echo $firstPage; ?>">Đầu</a>
                                </li>
                                <?php endif; ?>
                                <?php for ($i=1;$i<=$totalPage;$i++) : ?>
                                <?php if($currentPage != $i) : ?>
                                <li class="page-item">
                                    <a class="page-link"
                                        href="?action=productsByCategory&categoryID=<?php echo $categoryID; ?>&page=<?php echo $i; ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                                <?php else : ?>
                                <li class="page-item active">
                                    <a class="page-link" style="background-color: #223464;" disabled>
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
                                    <a class="page-link"
                                        href="?action=productsByCategory&categoryID=<?php echo $categoryID; ?>&page=<?php echo $endPage; ?>">Cuối</a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="border: 5px solid #223464;">
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/user/footer.php"; ?>