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
        .update{}
        .delete{}
        .mycomplaint{}
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script> 
        function prepaidfun() {
            var inputValue="prepaid";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function postpaidfun() {
            var inputValue="postpaid";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function broadbandfun() {
            var inputValue="broadband";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function updatefun() {
            var inputValue="update";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function deletefun() {
            var inputValue="delete";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function mycomplaintfun() {
            var inputValue="mycomplaint";
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
                                        <li><a href="payment.php">Pay due amount </a></li>
                                        <li><a href="#updateform" onclick="updatefun()" value="update">Update Profile</a></li>
                                        <li><a href="#deleteform" onclick="deletefun()" value="delete">Delete my account</a></li>
                                        <li><a href="#mycomplaintform" onclick="mycomplaintfun()" value="mycomplaint">View my complaints</a></li>
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
		if(isset($_SESSION['usernum']))
		{
			$usernum = $_SESSION['usernum'];
			$results = mysqli_query($connection,"select Customer_name from Customer where Phone_no = '$usernum'");
			if(!$results)
			{
				echo('Invalid Query : ' . mysqli_error($connection));
			}
            $row = mysqli_fetch_array($results);
            echo $row['Customer_name'];
        }			       
   ?>
   <br> Welcome to Spedata
</h3>
</div>

   <div class="about_area">
   <div class="container">
   <div class="row">
   <div class="col-xl-12">
        <h3 class="about_title text-center">
        <span style="color:#f00">
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
			        $results = mysqli_query($connection,"select Customer_id from Customer where Phone_no = '$usernum'");
			        if(!$results)
			        {
				        echo('Invalid Query : ' . mysqli_error($connection));
			        }
                    $row = mysqli_fetch_array($results);
                    $temp=0;
                    $cid=$row['Customer_id'];
                    $sql = "CALL returndue('$cid')"; 
                    $result = mysqli_query($connection,$sql);
                    if(!$result)
                    {
                        echo('error :::: '.mysqli_error($connection));
                    }
                    else
                    {
                        $temp=mysqli_fetch_array($result);
                        echo $temp['Days'];
                    }
                }
        ?>
        days left for plan due date.<br></span>
        Continue enjoying Spedata Plans!!<br><br/><br/>
        <br/>
        </h3>
    </div>
    </div>
    </div>
    </div>
    
    <div style="text-align:center" id="register" class="animate form" class="col-12">
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
			    $results = mysqli_query($connection,"SELECT * FROM customer WHERE Phone_no = '$usernum'");
			    if(!$results)
			    {
    				echo('Invalid Query : ' . mysqli_error($connection));
			    }
                $row = mysqli_fetch_array($results);
            }
        ?>
		<form id="updateform" class="update box" style="text-align:center" autocomplete="on" method ="post"> 
            <h1> Update here </h1>
            <p>
                &emsp; &emsp; &emsp; &emsp; 
                <label for="upuserid">Your customer ID:</label>
                <input type="text" id="upuserid" name="upuserid" value="<?php echo $row['Customer_id'];?>" readonly>
            </p>
            <p> 
                &emsp; &emsp; &emsp; &emsp; &ensp;
                <label for="upusername">Your full name:</label> 
                <input type="text" id="upusername" name="upusername" value="<?php echo $row['Customer_name'];?>"/>
			</p>
			<p>
                &emsp; &emsp; &emsp;
                <label for="updob">Your date of birth:</label>
                <input type="date" id="updob" name="updob" value="<?php echo $row['Dob'];?>" readonly/>
			</p>
			<p> 
                &emsp; &ensp;
                <label for="upresaddr">Your residential address:</label>
                <input type="text" id="upresaddr" name="upresaddr" value="<?php echo $row['CAddress'];?>"/>
			</p>
			<p> 
                &emsp; &emsp; &emsp; &emsp; &emsp;
                <label for="upemail">Your email ID:</label>
                <input type="email" id="upemail" name="upemail" value="<?php echo $row['Email_id'];?>"/>	             
            </p>
            <p>
                &emsp; &emsp; &emsp;
                <label for="upnum">Your mobile number:</label>
                <input type="text" id="upnum" name="upnum" value="<?php echo $row['Phone_no'];?>" readonly/>
            </p>
            <p> 
                <label for="uprecnum">Your recovery mobile number:</label>
                <input type="text" id="uprecnum" name="uprecnum"  value="<?php echo $row['Recovery_no'];?>"/>
            </p>
            <p> 
                &emsp; &emsp; &emsp; &emsp; &ensp;
                <label for="uppassword">Enter password:</label>
                <input type="password" id="uppassword" name="uppassword" required="required"/>
			</p>
			<p> 
                &emsp; &emsp; &emsp; &ensp;
                <label for="upcpassword">Confirm password:</label>
                <input type="password" id="upcpassword" name="upcpassword" required="required"/>
			</p>
            <p class="signin button">
                <input type="submit" class="boxed_btn_green" name="updatebutton" value="Update"/> 
			</p>
        </form>
        <?php
            session_start();
            $uname=$_POST['upusername'];
            $resadd=$_POST['upresaddr'];
            $email=$_POST['upemail'];
            $recnum=$_POST['uprecnum'];
            $pwd=$_POST['uppassword'];
            if(isset($_POST["updatebutton"]) and isset($_SESSION['usernum']))
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
                $usernum = $_SESSION['usernum'];
                if(mysqli_query($connection,"CALL updateuser('$uname','$resadd','$email','$recnum','$pwd','$usernum')"))
                {
                    echo "<script>window.location.href='user.php'</script>";
                }
                else
                    echo "Couldn't update!";
            }
        ?>
    </div>

    <div style="text-align:center" id="register" class="animate form" class="col-12" class="delete box">
		<form id="deleteform" class="delete box" style="text-align:center" autocomplete="on" method ="post"> 
            <h1> Are you sure to delete?:( </h1>
            <p>
                <label for="deluser">Enter phone number:</label>
                <input type="text" id="deluser" name="deluser">
            </p>
            <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="deluserbutton" value="OK"/> 
		    </p>
        </form>
        <?php
            session_start();
            $num=$_POST['deluser'];
            if(isset($_POST['deluserbutton']) and isset($_SESSION['usernum']))
            {
                $usernum = $_SESSION['usernum'];
                if($usernum != $num)
                {
                    $_SESSION["usernum"]=$usernum;
                    echo '<script type="text/javascript"> alert("MOBILE NUMBER IS INCOREECT!")</script>';
                    echo "<script>window.location.href='user.php'</script>";
                }
                else {
                    $dbhost='localhost';
                    $username='root';
                    $password='';
                    $name = 'spedata';
                    $connection=mysqli_connect("$dbhost","$username","$password","$name");
                    $result=mysqli_query($connection,"SELECT Customer_id FROM customer WHERE Phone_no='$num'");
                    $row=mysqli_fetch_array($result);
                    $cid=$row['Customer_id'];
                    mysqli_query($connection,"CALL delCustomer('$num','$cid')");
                    echo "<script>window.location.href='index.php'</script>";
                }
            }
        ?>
    </div>

    <<div style="text-align:center" id="register" class="animate form" class="col-12" class="mycomplaint box">
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
                $result=mysqli_query($connection,"SELECT Customer_id FROM customer WHERE Phone_no = '$usernum'");
                $row1 = mysqli_fetch_array($result);
                $cid=$row1['Customer_id'];
                $results=mysqli_query($connection,"SELECT * FROM complain WHERE Customer_id='$cid'");
			    if(!$results)
			    {
    				echo('Invalid Query : ' . mysqli_error($connection));
                }
                if(mysqli_num_rows($results)==0)
                    echo "<h2 class='mycomplaint box'>You have not posted any complaint so far!</h2>";
                else{
                    echo '<h2 class="mycomplaint box"> Your have posted ',mysqli_num_rows($results),' complaints so far!</h2>';
                    for($i=0;$i<mysqli_num_rows($results);$i++) {
                        $row = mysqli_fetch_array($results);
                        if($row['Status']=='Assigned')
                            $stat="On Progress";
                        elseif($row['Status']=='Solved')
                            $stat="Solved!";
                        else
                            $stat="Pre-pogressing";
                        echo '<form id="mycomplaintform" class="mycomplaint box" style="text-align:center" autocomplete="on" method ="post">';
                        echo '<br><h4>Complaint No: ',$i+1,'</h4>';
                        echo '<p> &emsp; &emsp; &emsp; &emsp; &ensp;';
                        echo '<label for="sub">Subject: </label>';
                        echo '<input type="text" id="sub" name="sub" value="',$row['Subject'],'" readonly/> </p>';
                        echo '<p> &emsp; &emsp; &emsp; &ensp;';
                        echo '<label for="comp">Description: </label>';
                        echo '<input type="text" id="comp" name="comp" value="',$row['Complaint'],'" readonly/> </p>';
                        echo '<p> &emsp; &emsp; &emsp; &emsp; &emsp;';
                        echo '<label for="status">Status: </label>';
                        echo '<input type="text" id="status" name="status" value="',$stat,'" readonly/> </p>'; 
                        echo '<p>'; 
                        echo '<label for="eid">Employee handling(ID): </label>';
                        echo '<input type="text" id="eid" name="eid" value="',$row['Employee_id'],'" readonly/> </p>';
                        echo '</form>';
                    }
                }
            }
        ?>
    </div>

    <div class="slider_text bradcam_area breadcam_bg overlay2">
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
			        $results = mysqli_query($connection,"select Plan_id,Mode from Customer where Phone_no = '$usernum'");
			        if(!$results)
			        {
				        echo('Invalid Query : ' . mysqli_error($connection));
			        }
                    $row = mysqli_fetch_array($results);
                    $pid=$row['Plan_id'];
                    $mode=$row['Mode'];
                }
        ?>
        <p>Your current Plan ID: <?php echo $pid," (",$mode,")"; ?></p>
        <h3>View other plans</h3>
        <br/><br/><br/><br/>
            <div class="row">
                <div class="col-xl-0 col-md-4 col-lg-0">
                    <button type="button" class="boxed_btn_green2" onclick="prepaidfun()">Pre Paid</button>
                </div>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" onclick="postpaidfun()">Post Paid</button>
                </div>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" onclick="broadbandfun()">Broadband</button>
                </div>
            </div>
    </div>

        <div class="prepaid box">
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
            <form style="text-align:center" method="POST">
                <h3>Change plan here if you want to</h3>
                <p><label for="preplanid">Enter new plan ID:</label>
                <input type="text" id="preplanid" name="preplanid"/>
                </p>
                <p class="signin button">
                <input type="submit" class="boxed_btn_green" name="preplanupdate" value="OK"/> 
			    </p>
            </form>
            <?php
            session_start();
            $planid=$_POST['preplanid'];
            $mode='prepaid';
            if(isset($_POST["preplanupdate"]) and isset($_SESSION['usernum']))
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
                $result=mysqli_query($connection,"SELECT Validity,Amount FROM prepaid where Plan_id='$planid'");
                $row=mysqli_fetch_array($result);
                $due=$row['Validity'];
                $dueamnt=$row['Amount'];
                $usernum = $_SESSION['usernum'];
                if(mysqli_query($connection,"CALL updateuserplan('$planid','$mode','$due','$dueamnt','$usernum')"))
                {
                    echo "<script>window.location.href='user.php'</script>";
                }
                else
                    echo "Couldn't change plan!";
            }
            ?>
        </div>

        <div class="postpaid box">
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
            <form style="text-align:center" method="POST">
                <h3>Change plan here if you want to</h3>
                <p><label for="postplanid">Enter new plan ID:</label>
                <input type="text" id="postplanid" name="postplanid"/>
                </p>
                <p class="signin button">
                <input type="submit" class="boxed_btn_green" name="postplanupdate" value="OK"/> 
			    </p>
            </form>
            <?php
            session_start();
            $planid=$_POST['postplanid'];
            $mode='postpaid';
            if(isset($_POST["postplanupdate"]) and isset($_SESSION['usernum']))
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
                $result=mysqli_query($connection,"SELECT Amount FROM postpaid where Plan_id='$planid'");
                $row=mysqli_fetch_array($result);
                $due=30;
                $dueamnt=$row['Amount'];
                $usernum = $_SESSION['usernum'];
                if(mysqli_query($connection,"CALL updateuserplan('$planid','$mode','$due','$dueamnt','$usernum')"))
                {
                    echo "<script>window.location.href='user.php'</script>";
                }
                else
                    echo "Couldn't change plan!";
            }
            ?>
        </div>

        <div class="broadband box">
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
            <form style="text-align:center" method="POST">
                <h3>Change plan here if you want to</h3>
                <p><label for="upplanid">Enter new plan ID:</label>
                <input type="text" id="broadplanid" name="broadplanid"/>
                </p>
                <p class="signin button">
                <input type="submit" class="boxed_btn_green" name="broadplanupdate" value="OK"/> 
			    </p>
            </form>
            <?php
            session_start();
            $planid=$_POST['broadplanid'];
            $mode='broadband';
            if(isset($_POST["broadplanupdate"]) and isset($_SESSION['usernum']))
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
                $result=mysqli_query($connection,"SELECT Duration,Amount FROM broadband where Plan_id='$planid'");
                $row=mysqli_fetch_array($result);
                $due=$row['Duration'];
                $dueamnt=$row['Amount'];
                $usernum = $_SESSION['usernum'];
                if(mysqli_query($connection,"CALL updateuserplan('$planid','$mode','$due','$dueamnt','$usernum')"))
                {
                    echo "<script>window.location.href='user.php'</script>";
                }
                else
                    echo "Couldn't change plan!";
            }
            ?>
        </div>
    
    <br><br><br><br><br>
    <!-- dedicated_support_start -->
    <div class="dedicated_support support_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-8">
                    <div class="support_info">
                        <h3>24*7 Dedicated Customer Care Support</h3>
                        <p>We are always here to support you. Any complaints or doubts regarding any plan, just post it here.</p>
                        <div class="get_started">
                            <a class="boxed_btn_green" href="complaint.php">
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