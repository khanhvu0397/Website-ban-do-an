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
            <?php include ('left.php'); ?>
            <!-- left-section-bar -->


            <?php 
            include ('right.php');
             ?>
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
    </div></br>

     <button type="button" class="btn btn-success" onclick="location.href='com-addToCart.php'" style="margin-left: 120px;padding-left: 10px;">
                Xem Thêm
            </button> 
    <!-- <input type="button" value="Xem Thêm" class="button" onclick="location.href='left.php'"> -->
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




    <?php 
        include ('footer.php');
     ?>

    <!-- End Footer -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
