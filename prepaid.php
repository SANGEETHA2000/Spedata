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

    <div class="bradcam_area breadcam_bg overlay2">
    <h3>Choose your Pre Paid plan</h3>
    </div>
        <?php
                $dbhost='localhost';
                $username='root';
                $password='';
                $name = 'spedata';
                $connection=mysqli_connect("$dbhost","$username","$password","$name");
                $temp=0;
                $sql = "CALL prepaidcount();";
                $result = mysqli_query($connection,$sql);
                if(!$result)
                {
                    echo('error :::: '.mysqli_error($connection));
                }
                else
                {
                    $temp=mysqli_fetch_array($result);
                    $itr=$temp['CNT'];
                }
        ?>
    <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>
                            Pre Paid Plans
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                $flag=0;
                $dbhost='localhost';
                $username='root';
                $password='';
                $name = 'spedata';
                $connection=mysqli_connect("$dbhost","$username","$password","$name");
                for( $i = 0; $i<$itr; $i++ )
                {
                    $result = mysqli_query($connection,"SELECT * FROM prepaid LIMIT $i,1");
                    if(!$result)
                    {
                        echo('error :::: '.mysqli_error($connection));
                    }
                    else
                    {
                        $temp=mysqli_fetch_array($result);
                        echo '<div class="col-xl-3 col-md-6 col-lg-6"> <div class="single_prising"> <h3>';
                        echo 'Plan ',$i+1;
                        echo '</h3> <p class="prising_text">Unlimited Talktime <br>';
                        echo $temp['Sms'],' SMS per day.';
                        echo "<br>";
                        echo $temp['Dataperday'],' GB per day.';
                        echo "<br>";
                        echo $temp['Validity'],' days validity.';
                        echo "<br>";
                        echo '<p class="prise">Amount: <span>';
                        echo $temp['Amount'],' /-';
                        echo '</span></p>';
                        echo '<a href="#test-form" class="boxed_btn_green2 login popup-with-form">Get pack</a></div></div>';
                    }
                }
            ?>
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
                <p class="doen_have_acc">Don’t have an account? <a href="newconnection.php">Sign Up</a>
                <p class="doen_have_acc">Admin or Employee? <a href="#test-form2" class="login popup-with-form">Click here</a></p>
                </p>
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