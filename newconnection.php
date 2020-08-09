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
        .prepaid{}
        .postpaid{}
        .broadband{}
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script> 
        $(document).ready(function(){
            $('input[name="mode"]').click(function(){
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });     
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
                        <div class="col-xl-3 col-lg-3">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <li>Already our customer?     Log In</li>
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
        <h3>Hello new customer!</h3>
        <p>Fill your details below and join us!</p>
    </div>
    <br>

    <div style="text-align:center" id="register" class="animate form" class="col-12">
		<form style="text-align:center" autocomplete="on" method ="post"> 
            <h1> Register here </h1> <br>
            <p>
                &emsp; &emsp; &emsp; &emsp;
                <label for="newuserid">Your customer ID:</label>
                <input type="text" id="newuserid" name="newuserid" value="<?php 
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $row=0;
                            $result = mysqli_query($connection,"CALL generateID('customer')");
                            if(!$result)
                            {
                                    echo('error :::: '.mysqli_error($connection));
                            }
                            $row=mysqli_fetch_array($result);
                            echo 'C',$row['id'];
                            ?>" readonly/>
            </p>
			<p> 
                &emsp; &emsp; &emsp; &emsp; &ensp;
                <label for="newusername">Enter full name:</label> 
                <input type="text" id="newusername" name="newusername" required="required" placeholder="Firstname Lastname"/>
			</p>
			<p>
                &emsp; &emsp; &emsp;
                <label for="newdob">Enter date of birth:</label>
                <input type="date" id="newdob" name="newdob" required="required" placeholder="dd/mm/yyyy"/>
			</p>
			<p> 
                &emsp; &ensp;
                <label for="newresaddr">Enter residential address:</label>
                <input type="text" id="newresaddr" name="newresaddr" required="required" placeholder="Door no, Street, City"/>
			</p>
			<p> 
                &emsp; &emsp; &emsp; &emsp; &emsp;
                <label for="newemail">Enter email ID:</label>
                <input type="email" id="newemail" name="newemail" required="required" placeholder="xyz@example.com"/>	             
            </p>
            <p>
                &emsp; &ensp;
                <label for="newnum">Your new mobile number:</label>
                <input type="text" id="newnum" name="newnum" value="<?php 
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $arr=0;
                            $result = mysqli_query($connection,"CALL generatePhoneNo()");
                            if(!$result)
                            {
                                    echo('error :::: '.mysqli_error($connection));
                            }
                            $arr=mysqli_fetch_array($result);
                            echo $arr['RAN'];
                            ?>" readonly/>
            </p>
			<p> 
                <label for="newrecnum">Enter recovery mobile number:</label>
                <input type="text" id="newrecnum" name="newrecnum" required="required" placeholder="1234567890"/>
            </p>
            <p>
                &emsp;
                <label for="newmode">Select one mode:</label> &ensp;
                <input type="radio" id="prepaid" name="mode" value="prepaid"/>
                <label for="prepaid">Prepaid</label> &ensp;
                <input type="radio" id="postpaid" name="mode" value="postpaid"/>
                <label for="postpaid">Postpaid</label> &ensp;
                <input type="radio" id="broadband" name="mode" value="broadband"/>
                <label for="broadband">Broadband</label> &ensp;
                <div class="prepaid box">
                    Choose your favourite <strong>Prepaid Plan</strong> and type the plan ID below<br><br>
                    <div class="prising_area">
                        <div class="container">
                            <div class="row">
                                <?php
                                    $dbhost='localhost';
                                    $username='root';
                                    $password='';
                                    $name = 'spedata';
                                    $connection=mysqli_connect("$dbhost","$username","$password","$name");
                                    $temp=0;
                                    $result = mysqli_query($connection,"SELECT * FROM prepaid");
                                    if(!$result)
                                    {
                                        echo('error :::: '.mysqli_error($connection));
                                    }
                                    else
                                    {
                                        for($i=0;$i<mysqli_num_rows($result);$i++) {
                                            $temp=mysqli_fetch_array($result);
                                            echo '<div class="col-xl-3 col-md-6 col-lg-6"> <div class="single_prising"> <h3>';
                                            echo 'Plan ID: ',$temp['Plan_id'];
                                            echo '</h3> <p class="prising_text">Unlimited Talktime <br>';
                                            echo $temp['SMSperday'],' SMS per day';
                                            echo "<br>";
                                            echo $temp['Dataperday'],' GB per day';
                                            echo "<br>";
                                            echo $temp['Validity'],' days validity';
                                            echo "<br>";
                                            echo '<p class="prise">Amount: <span>';
                                            echo $temp['Amount'],' /-';
                                            echo '</span></p></div></div>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="postpaid box">
                    Choose your favourite <strong>Postpaid Plan</strong> and type the plan ID below<br><br>
                    <strong>Unlimited talktime</strong> in all plans<br>
                    Pay at the end of 30 days for all plans!
                    <div class="prising_area">
                        <div class="container">
                            <div class="row">
                                <?php
                                    $dbhost='localhost';
                                    $username='root';
                                    $password='';
                                    $name = 'spedata';
                                    $connection=mysqli_connect("$dbhost","$username","$password","$name");
                                    $temp=0;
                                    $result = mysqli_query($connection,"SELECT * FROM postpaid");
                                    if(!$result)
                                    {
                                        echo('error :::: '.mysqli_error($connection));
                                    }
                                    else
                                    {
                                        for($i=0;$i<mysqli_num_rows($result);$i++) {
                                            $temp=mysqli_fetch_array($result);
                                            echo '<div class="col-xl-3 col-md-6 col-lg-6"> <div class="single_prising"> <h3>';
                                            echo 'Plan ID: ',$temp['Plan_id'];
                                            echo '</h3> <p class="prising_text">Unlimited Calls <br>';
                                            echo 100,' SMS per day';
                                            echo "<br>";
                                            echo $temp['Connections'],' connections';
                                            echo "<br>";
                                            echo $temp['Data'],' GB | ',$temp['Rollover'],' GB Rollover';
                                            echo "<br>";
                                            echo '<p class="prise">Amount: <span>';
                                            echo $temp['Amount'],' /-';
                                            echo '</span></p></div></div>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="broadband box">
                    Choose your favourite <strong>Broadband Plan</strong> and type the plan ID below<br><br>
                    <div class="prising_area">
                        <div class="container">
                            <div class="row">
                                <?php
                                    $dbhost='localhost';
                                    $username='root';
                                    $password='';
                                    $name = 'spedata';
                                    $connection=mysqli_connect("$dbhost","$username","$password","$name");
                                    $temp=0;
                                    $result = mysqli_query($connection,"SELECT * FROM broadband");
                                    if(!$result)
                                    {
                                        echo('error :::: '.mysqli_error($connection));
                                    }
                                    else
                                    {
                                        for($i=0;$i<mysqli_num_rows($result);$i++) {
                                            $temp=mysqli_fetch_array($result);
                                            echo '<div class="col-xl-3 col-md-6 col-lg-6"> <div class="single_prising"> <h3>';
                                            echo 'Plan ID: ',$temp['Plan_id'];
                                            echo "<br>";
                                            echo $temp['Plan_name'];
                                            echo '</h3> <p class="prising_text">Unlimited Calls <br>';
                                            echo 'Speed upto ',$temp['MaxSpeed'],' Mbps';
                                            echo "<br>";
                                            echo $temp['Data'],' GB data';
                                            echo "<br>";
                                            echo $temp['Duration'],' days validity';
                                            echo "<br>";
                                            echo '<p class="prise">Amount: <span>';
                                            echo $temp['Amount'],' /-';
                                            echo '</span></p></div></div>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </p>
            <p> 
                &emsp; &emsp; &emsp; &emsp; &emsp; &ensp;
                <label for="newplanid">Enter plan ID:</label>
                <input type="text" id="newplanid" name="newplanid" required="required"/>
			</p>
			<p> 
                &emsp; &emsp; &emsp; &emsp; &ensp;
                <label for="newpassword">Enter password:</label>
                <input type="password" id="newpassword" name="newpassword" required="required"/>
			</p>
			<p> 
                &emsp; &emsp; &emsp; &ensp;
                <label for="newcpassword">Confirm password:</label>
                <input type="password" id="newcpassword" name="newcpassword" required="required"/>
			</p>
			<p class="signin button">
                <input type="submit" class="boxed_btn_green" name="signupbutton" value="Sign Up"/> 
			</p>
        </form>
        <?php
            $dbhost='localhost';
            $username='root';
            $password='';
            $name = 'spedata';
            $connection=mysqli_connect("$dbhost","$username","$password","$name");
            $uname=$_POST['newusername'];
            $dob=$_POST['newdob'];
            $resadd=$_POST['newresaddr'];
            $email=$_POST['newemail'];
            $recnum=$_POST['newrecnum'];
            $pwd=$_POST['newpassword'];
            $plan=$_POST['newplanid'];
            $usernum=$_POST['newnum'];
            $userid=$_POST['newuserid'];
            $mode=$_POST['mode'];
            $result=mysqli_query($connection,"CALL getDue('$mode','$plan')");
            $arr=0;
            if(!$result)
            {
                echo('error :::: '.mysqli_error($connection));
            }
            $arr=mysqli_fetch_array($result);
            $due=$arr['Duration'];
            $dueamnt=$arr['Amount'];
            if(isset($_POST["signupbutton"]))
            {
                $dbhost='localhost';
                $username='root';
                $password='';
                $name = 'spedata';
                $connection=mysqli_connect("$dbhost","$username","$password","$name");
                session_start();
                if(mysqli_query($connection,"CALL newuser('$userid','$uname','$usernum','$pwd','$dob','$resadd','$mode','$plan','$due','$dueamnt','$recnum','$email')"))
                {
                    $_SESSION["usernum"]=$usernum;
                    echo "<script>window.location.href='user.php'</script>";
                }
                else
                    echo "Couldn't sign up!!";
            }
        ?>
    </div>

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