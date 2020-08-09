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
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>
                                    <span>log in</span>
                                </a>
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


    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>About Us</h3>
    </div>
    <!-- bradcam_area_end -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="about_title text-center">
                        Our Vision <br>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="about_title text-center">
                        Create world class digital experiences to connect and inspire every Indian to build a better tomorrow <br>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="about_title text-center">
                        At a glance <br>
                    </h3>
                </div>
            </div>
            <div class="row mb-60">
                <div class="col-xl-6">
                    <p> The Company provides pan India Voice and Data services across 2G, 3G and 4G platform. With the 
                        large spectrum portfolio to support the growing demand for data and voice, the company is committed to 
                        deliver delightful customer experiences and contribute towards creating a truly 'Digital India' by enabling
                        millions of citizens to connect and build a better tomorrow. </p>
                </div>
                <div class="col-xl-6">
                    <p>The Company is developing infrastructure to introduce newer and smarter technologies, making
                        both retail and enterprise customers future ready with innovative offerings, conveniently accessible 
                        through an ecosystem of digital channels as well as extensive on-ground presence. The Company is listed 
                        on National Stock Exchange (NSE) and Bombay Stock Exchange (BSE) in India.</p>
                </div>

            </div>
            <div class="row justify-content-between">
                <div class="col-xl-3">
                    <div class="about_info">
                        <h3>Great place to work</h3>
                        <p>One of the Best Companies to Work For in India. Spedata India ranked 20th in the LinkedIn 
                            Top Attractors 2017 Award- The only telecom service provider to be featured.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="about_info">
                        <h3>Brand Leadership</h3>
                        <p>Recognised as one of the Most Trusted Brands in India. Spedata India amongst the 
                            Top 10 Most Trusted Brands in India by Brand Trust Report 2018.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="about_info">
                        <h3>CIO Choice 2018</h3>
                        <p>CIO Choice 2018 Award winner. Spedata Business Services recognised as the chosen 
                           leader for Telecom Carrier - Leased Lines & Mobile Access ( fourth year in a row)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about_gallery_wrap_start -->
    <div class="about_gallery_wrap">
        <div class="container">
                <div class="row align-items-center mb-80">
                        <div class="col-xl-6">
                            <div class="service_wrap">
                                <div class="thumb-1">
                                    <img src="img/about/1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about_wrap_text_1">
                                <h3>
                                    Technology
                                </h3>
                                <p>Step into the future of unlimited broadband plans with Spedata fibernet technology. 
                                   Experience the high-speed internet on our existing Fiber broadband connection across multiple devices.
                                   Spedata Xstream Fiber offers you with Fiber optic internet connection transforming your daily broadband 
                                   connection experience with high-speed internet. Spedata allows you to enjoy the fastest network which means
                                   once you connect to Spedata, you will get faster network. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <div class="about_wrap_text_1">
                                <h3>
                                    SuperNet 4G
                                </h3>
                                <p>We're here to support you as you go about achieving all your dreams. Our fastest ever 4G network - Spedata SuperNet 
                                    4G will let you enjoy everything you love and need. Whether it's catching up with family, friends or just work on group video calls, 
                                    binging on series or movies, sharing photos and videos and doing everything you love and more. Together the possibilities are endless. So get 
                                    free 4G SIM upgrade for prepaid or postpaid connection & stay connected on Data Strong Network. </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="service_wrap">
                                <div class="thumb-1">
                                    <img src="img/about/2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <!-- about_gallery_wrap_end -->


    <div class="about_boxes">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_box">
                        <h3>278390</h3>
                        <p>Customers around the World</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_box">
                        <h3>200</h3>
                        <p>Dedicated team</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_box">
                        <h3>1000</h3>
                        <p>New connections every minute</p>
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

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide" method="POST">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Sign in</h3>
                <form method="POST">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input id="usernum" name="usernum" required="required" type="text" placeholder="Enter registered number"/>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input id="password" name="password" required="required" type="password" placeholder="Password"/>
                        </div>
                        <div class="col-xl-12">
                            <input type="submit" class="boxed_btn_green" name=loginbutton value="Sign In"/>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">Don’t have an account? <a href="newconnection.php">Sign Up</a></p>
                <p class="doen_have_acc">Admin or Employee? <a href="#test-form2" class="login popup-with-form">Click here</a></p>
            </div>
        </div>
    </form>
    <?php
        $dbhost='localhost';
        $username='root';
        $password='';
        $name = 'spedata';
        $connection=mysqli_connect("$dbhost","$username","$password","$name");
        if ($connection -> connect_errno) {
            echo "Failed to connect to MySQL: " . $connection -> connect_error;
            exit();             
        }                     
        if(isset($_POST["loginbutton"]))
        {
            session_start();
            $usernum = $_POST["usernum"];                                
            $pwd =$_POST["password"];
            $sql = "CALL logincheck('".$_POST["usernum"]."','".$_POST["password"]."');";
            $result = mysqli_query($connection,$sql);
            if(!$result)
            {
                echo('error :::: '.mysqli_error($connection));
            }
            if(mysqli_num_rows($result)==1)
            {
                mysqli_free_result($result);
                $_SESSION["usernum"]=$usernum;
                echo "<script>window.location.href='user.php'</script>";
            }
            else{
                echo '<script type="text/javascript"> alert("MOBILE NUMBER OR PASSWORD IS INCOREECT!")</script>';
            }
        }
    ?>
    <!-- form itself end -->

    <!--Admin form --> 
    <form id="test-form2" class="white-popup-block mfp-hide" method="POST">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Sign in</h3>
                <form method="POST">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input id="userid" name="userid" required="required" type="text" placeholder="Enter user ID"/>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input id="pass" name="pass" required="required" type="password" placeholder="Password"/>
                        </div>
                        <div class="col-xl-12">
                            <input type="submit" class="boxed_btn_green" name=adminbutton value="Sign In"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <?php
        $dbhost='localhost';
        $username='root';
        $password='';
        $name = 'spedata';
        $connection=mysqli_connect("$dbhost","$username","$password","$name");
        if ($connection -> connect_errno) {
            echo "Failed to connect to MySQL: " . $connection -> connect_error;
            exit();             
        }                     
        if(isset($_POST["adminbutton"]))
        {
            session_start();
            $userid = $_POST["userid"];                                
            $pwrd =$_POST["pass"];
            if($userid=='amirsan' and $pwrd=='amirsan')
            {
                $_SESSION["userid"]=$userid;
                echo "<script>window.location.href='admin.php'</script>";
            }
            else
            {
                $sql = "CALL empcheck('$userid','$pwrd');";
                $result = mysqli_query($connection,$sql);
                if(!$result)
                {
                    echo('error :::: '.mysqli_error($connection));
                }
                if(mysqli_num_rows($result)==1)
                {
                    mysqli_free_result($result);
                    $_SESSION["userid"]=$userid;
                    echo "<script>window.location.href='employee.php'</script>";
                }
                else{
                    echo '<script type="text/javascript"> alert("USER ID OR PASSWORD IS INCOREECT!")</script>';
                }
            }
        }
    ?>
    <!--Admin form end-->

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