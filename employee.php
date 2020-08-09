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
        .update{}
        .complaint{}
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        function updatefun() {
            var inputValue="update";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function complaintfun() {
            var inputValue="complaint";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
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
                                        <li><a href=#complaintform onclick="complaintfun()" value="complaint">View complaint </a></li> &emsp; &emsp;
                                        <li><a href="#updateform" onclick="updatefun()" value="update">Change Password</a></li>
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

    <div class="bradcam_area breadcam_bg overlay2">
    <h3>Hi,
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
		if(isset($_SESSION['userid']))
		{
			$userid = $_SESSION['userid'];
			$results = mysqli_query($connection,"select Employee_name from employee where Employee_id = '$userid'");
			if(!$results)
			{
				echo('Invalid Query : ' . mysqli_error($connection));
			}
            $row = mysqli_fetch_array($results);
            echo $row['Employee_name'];
        }			       
   ?>
   <br> Have a nice day!
</h3>
</div>
<br><br>

<div style="text-align:center" id="register" class="animate form" class="col-12" class="update box">
		<form id="updateform" style="text-align:center" autocomplete="on" method ="post" class="update box"> 
            <h1> Change here </h1>
            <p> 
                <label for="uppassword">Enter new password:</label>
                <input type="password" id="uppassword" name="uppassword" required="required"/>
			</p>    
            <p> 
                <label for="upcpassword">Confirm password:</label>
                <input type="password" id="upcpassword" name="upcpassword" required="required"/>
			</p>
            <p class="signin button">
                <input type="submit" class="boxed_btn_green" name="updatebutton" value="Change"/> 
			</p>
        </form>
        <?php
            session_start();
            $pwd=$_POST['uppassword'];
            if(isset($_POST["updatebutton"]) and isset($_SESSION['userid']))
            {
                $dbhost='localhost';
                $username='root';
                $password='';
                $name = 'spedata';
                $connection=mysqli_connect("$dbhost","$username","$password","$name");
                if (mysqli_connect_errno())
                {
                    echo "Connection Error" ;
                }
                $userid = $_SESSION['userid'];
                if(mysqli_query($connection,"CALL changeEmpPass('$pwd','$userid')"))
                {
                    echo "<script>window.location.href='employee.php'</script>";
                }
                else
                    echo "Couldn't change!";
            }
        ?>
    </div>

    <div style="text-align:center" id="register" class="animate form" class="col-12" class="complaint box">
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
            if(isset($_SESSION['userid']))
		    {
			    $userid = $_SESSION['userid'];
			    $results = mysqli_query($connection,"select Comp_id from employee where Employee_id = '$userid'");
			    if(!$results)
			    {
    				echo('Invalid Query : ' . mysqli_error($connection));
			    }
                $row = mysqli_fetch_array($results);
                $cid=$row['Comp_id'];
                if($cid==NULL)
                    echo "<h3>No complaint is assigned to you! Relax:)</h3>";
            }
        ?>
        <form id="complaintform" class="complaint box" method="POST">
            <h1>Complaint Details</h1>
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
            if(isset($_SESSION['userid']))
		    {
			    $userid = $_SESSION['userid'];
			    $results = mysqli_query($connection,"select * from complain where Employee_id = '$userid'");
			    if(!$results)
			    {
    				echo('Invalid Query : ' . mysqli_error($connection));
			    }
                $row = mysqli_fetch_array($results);
                $cid=$row['Comp_id'];
                $sub=$row['Subject'];
                $comp=$row['Complaint'];
                $status=$row['Status'];
                echo "<br><h4>Complaint ID: ",$cid,"</h4>";
                echo "<h4>Subject: ",$sub,"</h4>";
                echo "<h4>Complaint: ",$comp,"</h4>";
                echo "<h4>Status: ",$status,"<h4><br>";
            }
            ?>
            <p>
                <label for="cstatus">Change complaint status to: </label>
                <input type="text" id="cstatus" name="cstatus" placeholder="Solved or Cannot be solved"/>
            </p>
            <p class="signin button">
                <input type="submit" class="boxed_btn_green" name="statusbutton" value="Change Status"/> 
			</p> 
        </form>
        <?php
            session_start();
            if(isset($_SESSION['userid']) and isset($_POST['statusbutton']))
		    {
                $dbhost='localhost';
                $username='root';
                $password='';
                $name = 'spedata';
                $connection=mysqli_connect("$dbhost","$username","$password","$name");
                if (mysqli_connect_errno())
                {
                    echo "Connection Error" ;
                }
                $userid = $_SESSION['userid'];
                $status=$_POST['cstatus'];
                if(mysqli_query($connection,"CALL changeStatus('$status','$userid','$cid')"))
                    echo "<script>window.location.href='employee.php'</script>";
			    else
    				echo('Invalid Query : ' . mysqli_error($connection));
            }
        ?>
    </div>

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