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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="slider_text text-center">
                            <p>With the best telecom service provider across the globe,</p>
                            <h3>Experience high speed data connection</h3>
                            <div class="find_dowmain">
                                <form class="find_dowmain_form" method="post">
                                    <input type="text" id="usernum" name="usernum" placeholder="Enter mobile number for quick recharge"/>
                                    <button type="submit" name="rechargebutton">Submit</button>
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
                                    if(isset($_POST["rechargebutton"]))
                                    {
                                        session_start();
                                        $usernum = $_POST["usernum"];                                
                                        $pwd =$_POST["password"];
                                        $sql = "SELECT * FROM customer WHERE Phone_no='$usernum'";
                                        $result = mysqli_query($connection,$sql);
                                        if(!$result)
                                        {
                                            echo('error :::: '.mysqli_error($connection));
                                        }
                                        if(mysqli_num_rows($result)==1)
                                        {
                                            mysqli_free_result($result);
                                            $_SESSION["usernum"]=$usernum;
                                            echo "<script>window.location.href='payment.php'</script>";
                                        }
                                        else{
                                            echo '<script type="text/javascript"> alert("MOBILE NUMBER IS INCOREECT!")</script>';
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
    <!-- slider_area_end -->

    <!-- prising_area_start -->
    <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>
                            Choose your plan
                        </h3>
                        <p>We value every customer and help them choose a plan with ease<br>
                            Here we provide you with the best plans from our company
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $dbhost='localhost';
                    $username='root';
                    $password='';
                    $name = 'spedata';
                    $connection=mysqli_connect("$dbhost","$username","$password","$name");
                    for( $i = 0; $i<4; $i++ )
                    {
                        if($i==0)
                        {
                            $result = mysqli_query($connection,"CALL getBestPrepaid()");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                $temp=mysqli_fetch_array($result);
                                echo '<div class="col-xl-3 col-md-6 col-lg-6"> <div class="single_prising"> <h3>';
                                echo 'Best Prepaid ';
                                echo '</h3> <p class="prising_text">Unlimited Talktime <br>';
                                echo $temp['SMSperday'],' SMS per day';
                                echo "<br>";
                                echo $temp['Dataperday'],' GB per day';
                                echo "<br>";
                                echo $temp['Validity'],' days validity';
                                echo "<br>";
                                echo '<p class="prise">Amount: <span>';
                                echo $temp['Amount'],' /-';
                                echo '</span></p>';
                                echo '<a href="#test-form" class="boxed_btn_green2 login popup-with-form">Get pack</a></div></div>';
                            }
                        }
                        elseif($i==1)
                        {
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $result = mysqli_query($connection,"CALL getBestPostpaid()");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                $temp=mysqli_fetch_array($result);
                                echo '<div class="col-xl-3 col-md-6 col-lg-6"> <div class="single_prising"> <h3>';
                                echo 'Best Postpaid ';
                                echo '</h3> <p class="prising_text">Unlimited Calls <br>';
                                echo 100,' SMS per day';
                                echo "<br>";
                                echo $temp['Connections'],' connections';
                                echo "<br>";
                                echo $temp['Data'],' GB | ',$temp['Rollover'],' GB Rollover';
                                echo "<br>";
                                echo '<p class="prise">Amount: <span>';
                                echo $temp['Amount'],' /-';
                                echo '</span></p>';
                                echo '<a href="#test-form" class="boxed_btn_green2 login popup-with-form">Get pack</a></div></div>';
                            }
                        }
                        elseif($i==2)
                        {
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $result = mysqli_query($connection,"SELECT * FROM broadband WHERE Plan_name='Diamond'");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                $temp=mysqli_fetch_array($result);
                                echo '<div class="col-xl-3 col-md-6 col-lg-6"> <div class="single_prising"> <h3>';
                                echo 'Diamond ';
                                echo '</h3> <p class="prising_text">Unlimited Calls <br>';
                                echo 'Speed upto ',$temp['MaxSpeed'],' Mbps';
                                echo "<br>";
                                echo $temp['Data'],' GB data';
                                echo "<br>";
                                echo $temp['Duration'],' days validity';
                                echo "<br>";
                                echo '<p class="prise">Amount: <span>';
                                echo $temp['Amount'],' /-';
                                echo '</span></p>';
                                echo '<a href="#test-form" class="boxed_btn_green2 login popup-with-form">Get pack</a></div></div>';
                            }
                        }
                        elseif($i==3)
                        {
                            $result = mysqli_query($connection,"SELECT * FROM broadband WHERE Plan_name='Platinum'");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                $temp=mysqli_fetch_array($result);
                                echo '<div class="col-xl-3 col-md-6 col-lg-6"> <div class="single_prising"> <h3>';
                                echo 'Platinum ';
                                echo '</h3> <p class="prising_text">Unlimited Calls <br>';
                                echo 'Speed upto ',$temp['MaxSpeed'],' Mbps';
                                echo "<br>";
                                echo $temp['Data'],' GB data';
                                echo "<br>";
                                echo $temp['Duration'],' days validity';
                                echo "<br>";
                                echo '<p class="prise">Amount: <span>';
                                echo $temp['Amount'],' /-';
                                echo '</span></p>';
                                echo '<a href="#test-form" class="boxed_btn_green2 login popup-with-form">Get pack</a></div></div>';
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- prising_area_end -->

    <!-- benefits_start -->
    <div class="core_features">
        <div class="container">
            <div class="border-bottm">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="featuures_heading">
                            <h3>Loaded Benefits with Spedata</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon"><img src="img/callertune.jpg" alt=""></div>
                                        <div class="features_info">
                                            <h4>
                                                Unlimited Callertunes
                                            </h4>
                                            <p>Over billions of caller tunes at your finger tips. Set your most favourtie with Spedata.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon blue"><img src="img/dataroll.png" alt=""></div>
                                        <div class="features_info">
                                            <h4>
                                                Data Rollover
                                            </h4>
                                            <p>For all postpaid plans, the data left unused gets rolled over to the next month.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon pink"><img src="img/network.jpg" alt=""></div>
                                        <div class="features_info">
                                            <h4>
                                                Strongest Network
                                            </h4>
                                            <p>From anywhere in the world, you can contact your pals all over the world.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon yellow"><img src="img/offer.png" alt=""></div>
                                        <div class="features_info">
                                            <h4>
                                                Unbeleivable Weekly Offers
                                            </h4>
                                            <p>You get weekly offers according to your plan. Extra data without extra money.</p>
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
    <!-- benefits_end -->

    <!-- dedicated_support_start -->
    <div class="dedicated_support support_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-8">
                    <div class="support_info">
                        <h3>24*7 Dedicated Customer Care Support</h3>
                        <p>We are always here to support you. Any complaints or doubts regarding any plan, just post it here.</p>
                        <div class="get_started">
                            <a class="boxed_btn_green login popup-with-form" href="#test-form">
                                <span>Post a complaint</span>
                            </a><br><br><br>
                            <a class="phone_num">
                                Toll free: +123 456 7890 <br><br>
                                Email: customercare@spedata.com
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dedicated_support_end -->

    <!-- faq_area_start -->
    <div class="faq_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="accordion_heading">
                        <h3>Frequently Asked Questions</h3>
                    </div>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="flaticon-info"></i> How can I do a recharge?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    You can do a prepaid recharge via any of the below mentioned methods:<br>
                                    1. Go to home page, enter your mobile number and recharge in just 2 steps.<br>
                                    2. Visit nearest Spedata store.<br>
                                    3. Visit nearest retail store.<br>
                                    4. Recharge using any third party bank app/ wallet like PayTM, Amazon Pay, Phone pe, etc.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="flaticon-info"></i> How can I view my current bill?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                                style="">
                                <div class="card-body">
                                    Go to home page and log in to your account. You can view your current outstanding amount.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="flaticon-info"></i> How can I view my current data plan?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Go to home page and log in to your account. You can view your current data plan.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading_4">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                        <i class="flaticon-info"></i> How do I know my balance and validity?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_4" class="collapse" aria-labelledby="heading_4" data-parent="#accordion">
                                <div class="card-body">
                                    You can view your balance and validity in your account, by logging to your account in our website home page.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading_5">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                        <i class="flaticon-info"></i> How can I make a complaint?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_5" class="collapse" aria-labelledby="heading_5" data-parent="#accordion">
                                <div class="card-body">
                                    You can make a complaint by clicking on the option available on our website home page. Then enter your number and post your complaint description. You can track the complaint status by logging into your account.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq_area_end -->  

    <!-- footer -->
        <p class="copy_right text-center">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </p>
    <!-- footer -->

    <!-- form itself-->
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