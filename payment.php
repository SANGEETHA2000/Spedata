<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>Spedata - Prepaid | Postpaid | Broadband</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.jpg">
    
    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <style>
        .box{
            display: none;
        }
        .pay{}
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        function disp(){
            var inputValue="pay";
            var targetBox=$("." + inputValue);
            $(targetBox).show();
        }
    </script>
</head>

<body>
    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
    <?php session_start(); ?>
    <?php ob_start(); ?>

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">Home</a></li>
                                        <li><a href="#">Prepaid <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#test-form" class="login popup-with-form">Recharge</a></li>
                                                <li><a href="newconnection.php">New Prepaid SIM</a></li>
                                                <li><a href="prepaid.php">View Plans</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Postpaid <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#test-form" class="login popup-with-form">Pay Bill</a></li>
                                                <li><a href="newconnection.php">Buy New Connection</a></li>
                                                <li><a href="postpaid.php">View Plans</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Broadband <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#test-form" class="login popup-with-form">Pay Bill</a></li>
                                                <li><a href="newconnection.php">Buy New Connection</a></li>
                                                <li><a href="broadband.php">View Plans</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->


    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="slider_text text-center">
                            <p>You are paying for the number,
                            <?php
                                session_start();
                                $dbhost='localhost';
                                $username='root';
                                $password='';
                                $name = 'spedata';
                                $connection=mysqli_connect("$dbhost","$username","$password","$name");
                                if (mysqli_connect_errno())
		                        {
			                        echo "Connection Error" ;
		                        }
		                        if(isset($_SESSION['usernum']))
		                        {
			                        $usernum = $_SESSION['usernum'];
                                    echo $usernum;
                                }			       
                            ?>                      
                            </p>
                            <h3>Due Amount: Rs 
                            <?php
                                session_start();
                                $dbhost='localhost';
                                $username='root';
                                $password='';
                                $name = 'spedata';
                                $connection=mysqli_connect("$dbhost","$username","$password","$name");
                                if (mysqli_connect_errno())
		                        {
			                        echo "Connection Error" ;
		                        }
		                        if(isset($_SESSION['usernum']))
		                        {
                                    $usernum = $_SESSION['usernum'];
                                    $results = mysqli_query($connection,"select Due_amount from Customer where Phone_no = '$usernum'");
			                        if(!$results)
			                        {
				                        echo('Invalid Query : ' . mysqli_error($connection));
			                        }
                                    $row = mysqli_fetch_array($results);
                                    echo $row['Due_amount'];
                                }			       
                            ?>
                            </h3>

                            <button type="button" class="boxed_btn_green2" onclick="disp()" value="pay">Pay now</button>

                            <div class="pay box">
                                <h3>Paid Successfully!</h3>
                                <?php
                                    session_start();
                                    $dbhost='localhost';
                                    $username='root';
                                    $password='';
                                    $name = 'spedata';
                                    $connection=mysqli_connect("$dbhost","$username","$password","$name");
                                    if (mysqli_connect_errno())
                                    {
                                        echo "Connection Error" ;
                                    }
                                    if(isset($_SESSION['usernum']))
                                    {
                                        $usernum = $_SESSION['usernum'];
                                        $results = mysqli_query($connection,"CALL dueAfterPayment('$usernum')");
                                        if(!$results)
                                        {
                                            echo('Invalid Query : ' . mysqli_error($connection));
                                        }
                                    }			       
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <p class="copy_right text-center">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </p>
    <!-- footer -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>

</body>
</html>