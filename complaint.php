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
                                        <li><a href="user.php">Go back to my page</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="index.php" class="login">
                                    <i class="flaticon-user"></i>
                                    <span>log out</span>
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
        <h3>Talk with us</h3>
    </div>
    <!-- bradcam_area_end -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h2 class="contact-title">Post here</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form"  method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="Phoneno" id="Phoneno" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Phone no.'" placeholder="Enter your Phone no.">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email-id">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="complaint" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Write here..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <p class="signin button">
                                <input type="submit" class="boxed_btn_green" name="send" value="Post"/> 
                            </p>
                        </form>
                    </div>
                    <?php
                        session_start();
                        $dbhost='localhost';
                        $username='root';
                        $password='';
                        $name = 'spedata';
                        $connection=mysqli_connect("$dbhost","$username","$password","$name");
                        $Phoneno=$_POST['Phoneno'];
                        $email=$_POST['email'];
                        $subject=$_POST['subject'];
                        $complaint=$_POST['complaint'];
                        if(isset($_POST["send"]))
                        {
                        mysqli_query($connection,"CALL newcomplaint('$Phoneno','$subject','$complaint')");
                        $_SESSION["usernum"]=$Phoneno;
                        echo "<script>window.location.href='user.php'</script>";
                        }
                    ?>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+123 456 7890</h3>
                                <p>24x7 Customer Care</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>customercare@spedata.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->

</body>
</html>