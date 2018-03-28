<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- External Css -->
    <link rel="stylesheet" href="../css/project.css">


    <title>Hello, world!</title>
</head>

<body>
   <?php 
        include ('header.php');
    ?>
    <!-- End NavBar -->


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <nav class="navbar navbar-light bg-light" style="padding-left: 0px;margin-bottom: 10px">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
                <div class="card text-white bg-primary mb-3" style="width: 18rem;">
                    <div class="card-header">
                        Danh Mục Sản Phẩm
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#com" class="card-link">Cơm</a></li>
                        <li class="list-group-item"><a href="#myxao" class="card-link">Mỳ Xào</a></li>
                        <li class="list-group-item"><a href="#douong" class="card-link">Đồ Uống</a></li>
                        <li class="list-group-item"><a href="#anvat" class="card-link">Ăn Vặt</a></li>
                        <li class="list-group-item"><a href="#ruoubia" class="card-link">Rượu Bia-Thuốc Lá</a></li>
                    </ul>
                </div>
                <div class="card text-white bg-primary mb-3" style="width: 18rem;">
                    <div class="card-header">
                        Mạng Xã Hội
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="https://www.facebook.com/" target="_blank" class="card-link"><span>
                            <img src="../image/fblogo.jpg" alt="fb" style="width: 30px">
                        </span></a> <a href="https://twitter.com/" target="_blank" class="card-link"><span>
                            <img src="../image/twitterlogo.jpg" alt="twitter" style="width: 30px">
                        </span></a><a href="https://www.youtube.com/" target="_blank" class="card-link"><span>
                            <img src="../image/youtubelogo.png" alt="youtube" style="width: 30px">
                        </span></a><a href="https://mail.google.com/" target="_blank" class="card-link"><span>
                            <img src="../image/gmaillogo.png" alt="gmail" style="width: 30px">
                        </span></a></li>
                    </ul>
                </div>
            </div>
            <!-- left-section-bar -->


            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../image/garan.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../image/banhmi.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../image/changa.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../image/nom.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                </div>
            </div>
            <!-- Right section slider -->


        </div>
    </div>
    <!-- End Header Content -->


    <div class="container main-content">
        <div class="row">
            <div class="col-md-12">
                <section>
                    <h3 class="underline" id="com">Cơm</h3>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/comrangduabo.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Cơm Rang Dưa Bò</a></h5>
                                    <p class="card-text text-danger">Giá: 50.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">  <img class="card-img-top img-fluid" src="../image/comcakho.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Cơm Cá Kho</a></h5>
                                    <p class="card-text text-danger">Giá: 50.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#"> <img class="card-img-top" src="../image/comranghaisan.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Cơm Rang Hải Sản</a></h5>
                                    <p class="card-text text-danger">Giá: 55.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#"> <img class="card-img-top" src="../image/comxaocantoi.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Cơm Hải Sản Xào Tỏi</a></h5>
                                    <p class="card-text text-danger">Giá: 55.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Com Section -->


    <div class="container main-content">
        <div class="row">
            <div class="col-md-12">
                <section>
                    <h3 class="underline" id="myxao">Mỳ Xào</h3>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/mixaobo.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Mỳ Xào Bò</a></h5>
                                    <p class="card-text text-danger">Giá: 45.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/mixaohaisan.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Mỳ Xào Hải Sản</a></h5>
                                    <p class="card-text text-danger">Giá: 50.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End My Xao Section -->



    <div class="container main-content">
        <div class="row">
            <div class="col-md-12">
                <section>
                    <h3 class="underline" id="douong">Đồ Uống</h3>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/nuoccamep.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Nước Cam Ép</a></h5>
                                    <p class="card-text text-danger">Giá: 25.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/sinhtoduahau.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Sinh Tố Dưa Hấu</a></h5>
                                    <p class="card-text text-danger">Giá: 25.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/nuocchanh.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Nước Chanh Tươi</a></h5>
                                    <p class="card-text text-danger">Giá: 20.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/suango.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Sữa Ngô</a></h5>
                                    <p class="card-text text-danger">Giá: 15.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Do Uong Section -->


    <div class="container main-content">
        <div class="row">
            <div class="col-md-12">
                <section>
                    <h3 class="underline" id="anvat">Ăn Vặt</h3>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/changaxaot.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Chân Gà Xả Ớt</a></h5>
                                    <p class="card-text text-danger">Giá: 60.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/changarangmuoi.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Chân Gà Rang Muối</a></h5>
                                    <p class="card-text text-danger">Giá: 60.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/trungcutxaome.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Trứng Cút Xào Me</a></h5>
                                    <p class="card-text text-danger">Giá: 40.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/cavienchien.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Cá Viên Chiên</a></h5>
                                    <p class="card-text text-danger">Giá: 25.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End An Vat Section -->


    <div class="container main-content">
        <div class="row">
            <div class="col-md-12">
                <section>
                    <h3 class="underline" id="ruoubia">Rượu Bia - Thuốc Lá</h3>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/chivas.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Chivas</a></h5>
                                    <p class="card-text text-danger">Giá: 500.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/vodka.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Vodka</a></h5>
                                    <p class="card-text text-danger">Giá: 800.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/bia.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Bia</a></h5>
                                    <p class="card-text text-danger">Giá: 100.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <a href="#">   <img class="card-img-top" src="../image/marlboro.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="text-info">Marlboro</a></h5>
                                    <p class="card-text text-danger">Giá: 100.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Ruou Bia - Thuoc La Section -->






    <footer>
        <div class="container" style="margin-top: 25px;padding-bottom: 100px">
            <div class="row">
                <div class="col-md-5">
                    <span class="text-danger font-weight-bold">SHIP ĐỒ ĂN NHANH HKT</span>
                    <span> - 175 Tây Sơn , Đống Đa , Hà Nội</span>
                    <div style="margin-top: 10px;"></div>
                    <span class="text-danger font-weight-bold">HotLine:</span>
                    <span> 0972 888 ***  /</span>
                    <span class="text-danger font-weight-bold">Email:</span>
                    <span> HKT@gmail.com</span>
                </div>
                <div class="col-md-7">
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
