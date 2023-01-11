<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GOD BREAKER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="vendor/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&display=swap&subset=vietnamese" rel="stylesheet">
    
    <!-- <script type="text/javascript" src="jqueryupload/js/vendor/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="jqueryupload/js/jquery.fileupload.js"></script> -->
    <script type="text/javascript" src="vendor/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="vendor/imagesloaded.pkgd.min.js"></script>
    <link rel="stylesheet" href="vendor/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome.css">
    <link rel="stylesheet" href="1.css">

</head>

<body>
    <div class="topheader">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mangxh float-sm-left text-xs-center text-sm-left">
                        <a href="https://www.facebook.com/vuthanhphat1303/"><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="lienhe">
                        Call for shop: 0981689527
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="lienhe openingtop float-sm-right text-sm-left text-xs-center">
                        Opening Hours : 9:00am - 10:00pm
                    </div>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end topheader -->
    <div class="logovamenu">
        <nav class="navbar navbar-light bg-faded fontroboto">
            <div class="container">
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#mtren">

			</button>
                <div class="collapse navbar-toggleable-xs" id="mtren">
                    <a class="navbar-brand text-xs-center text-sm-left" href="home.html"><img src="./images/logo/download.png" alt="" class="logo"></a>

                    <ul class="nav navbar-nav float-sm-right">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="giohang.php"> Giỏ hàng</a>
                        </li>
                        
                        <li class="nav-item dangnhap">
                            <a class="nav-link btn btn-warning" href="#">Login</a>
                        </li>
                        <li  class="nav-item cart">
                            <a  onclick="showmycart(this)  " class="nav-link"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- end container -->
        </nav>
    </div>
        <?php
            include("godbreaker/admincp/config/config.php");
            include("nhap/main.php");
            
            
        
        ?>
   

    <div class="footertop wow slideInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 cot1">
                    <img class="logo" src="" alt="" style="background-color: none; height: 15px; ">
                    <div class="motdong">
                        <i class="fa fa-paper-plane-o"></i>
                        <span class="textmotdong">Address: 248 Nơ Trang Long, Phường 11 , Quận Bình Thạnh, TPHCM</span>
                    </div>
                    <div class="motdong">
                        <i class="fa fa-phone"></i>
                        <span class="textmotdong">Phone: 0879463004</span>
                    </div>
                    <div class="motdong">
                        <i class="fa fa-envelope-o"></i>
                        <span class="textmotdong">Email: vuphat259@gmail.com</span>
                    </div>
                </div>

                <div class="col-sm-3 cot3">
                    <h2 class="tdfooter">HỖ TRỢ THANH TOÁN</h2>
                    <ul>
                        <li>
                            
                            <p><i class="fa fa-money mr-2"></i>Tiền mặt</p>
                        </li>
                        <li>
                            <p><i class="fa fa-cc-visa mr-2"></i>Visa</p>
                        </li>
                        <li>
                            <p><i class="fa fa-credit-card mr-2"></i>Thẻ tín dụng</p>
                        </li>

                    </ul>
                </div>

                <div class="col-sm-3 cot4">
                    <h2 class="tdfooter">Opening Hours</h2>
                    <div class="opening1">
                        <div class="phai float-xs-right">9:00am - 23:00pm</div>
                        <div class="trai">Mon - Fri</div>
                    </div>
                    <div class="opening1">
                        <div class="phai float-xs-right">10:00am - 22:00pm</div>
                        <div class="trai">Saturday</div>
                    </div>
                    <div class="opening1">
                        <div class="phai float-xs-right">10:00am - 21:00pm</div>
                        <div class="trai">Sunday</div>
                    </div>
                    <!-- <p>Note: JanAuth is closed on holidays.</p> -->
                </div>

            </div>
        </div>
    </div>
    <!-- end footertop -->
    <div class="footerbottom wow slideInUp">
        Copyright © 2020. All Rights Reserved
    </div>
    <!-- end footerbottom -->
    <script type="text/javascript" src="1.js"></script>

</body>


</html>