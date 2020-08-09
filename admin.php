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
        .addpre{}
        .addpost{}
        .addbroad{}
        .delpre{}
        .delpost{}
        .delbroad{}
        .uppre{}
        .uppost{}
        .upbroad{}
        .addemp{}
        .upemp{}
        .delemp{}
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script> 
        function addprepaidfun() {
            var inputValue="addpre";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function addpostpaidfun() {
            var inputValue="addpost";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function addbroadbandfun() {
            var inputValue="addbroad";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function delprepaidfun() {
            var inputValue="delpre";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function delpostpaidfun() {
            var inputValue="delpost";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function delbroadbandfun() {
            var inputValue="delbroad";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function upprepaidfun() {
            var inputValue="uppre";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function uppostpaidfun() {
            var inputValue="uppost";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function upbroadbandfun() {
            var inputValue="upbroad";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function addempfun() {
            var inputValue="addemp";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function upempfun() {
            var inputValue="upemp";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
        function delempfun() {
            var inputValue="delemp";
            var targetBox=$("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        }
    </script>
</head>

<body>
    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
    <!--?php session_start(); ?>-->
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
                                        <li><a href="fullanalysis.php">Complete Analysis</a></li>
                                        <li><a href="preanalysis.php">Prepaid Analysis</a></li>
                                        <li><a href="postanalysis.php">Postpaid Analysis</a></li>
                                        <li><a href="broadanalysis.php">Broadband Analysis</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="index.php"class="login"> 
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
        <h3>Hi Admin! What you would like to do?</h3> <br> <br> <br> <br>
        <div class="row">
                <div class="col-xl-0 col-md-4 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="addpre" onclick="addprepaidfun()">Add a new prepaid plan</button>
                </div>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="uppre" onclick="upprepaidfun()">Update existing prepaid plans</button>
                </div>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="delpre" onclick="delprepaidfun()">Delete an existing prepaid plan</button>
                </div>  <br> <br> <br> <br>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="addpost" onclick="addpostpaidfun()">Add a new postpaid plan</button>
                </div>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="uppost" onclick="uppostpaidfun()">Update existing postpaid plans</button>
                </div>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="delpost" onclick="delpostpaidfun()">Delete an existing postpaid plan</button>
                </div>  <br> <br> <br> <br>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="addbroad" onclick="addbroadbandfun()">Add a new broadband plan</button>
                </div>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="upbroad" onclick="upbroadbandfun()">Update existing broadband plans</button>
                </div>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="delbroad" onclick="delbroadbandfun()">Delete an existing broadband plan</button>
                </div>  <br> <br> <br> <br>
                <div class="col-xl-4 col-md-0 col-lg-0">  
                    <button type="button" class="boxed_btn_green2" value="addemp" onclick="addempfun()">Add a new employee</button>
                </div>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="upemp" onclick="upempfun()">Update existing employee details</button>
                </div>
                <div class="col-xl-4 col-md-0 col-lg-0">
                    <button type="button" class="boxed_btn_green2" value="delemp" onclick="delempfun()">Delete an employee</button>
                </div>
        </div>
    </div>

    <div class="addpre box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Add a prepaid plan </h1> <br>
                <p>
                    &emsp; &ensp;
                    <label for="newpreid">New Prepaid plan ID:</label>
                    <input type="text" id="newpreid" name="newpreid" value="<?php 
                        $dbhost='localhost';
                        $username='root';
                        $password='';
                        $name = 'spedata';
                        $connection=mysqli_connect("$dbhost","$username","$password","$name");
                        $row=0;
                        $result = mysqli_query($connection,"CALL generateID('prepaid')");
                        if(!$result)
                        {
                            echo('error :::: '.mysqli_error($connection));
                        }
                        $row=mysqli_fetch_array($result);
                        echo 'PR',$row['id'];
                        ?>" readonly/>
                </p>
			    <p>
                    &emsp; &emsp; &emsp; &ensp;
                    <label for="newpreamnt">Enter amount:</label> 
                    <input type="text" id="newpreamnt" name="newpreamnt" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; &emsp; &ensp;
                    <label for="newpretalk">Enter talktime:</label> 
                    <input type="text" id="newpretalk" name="newpretalk" required="required"/>
			    </p>
                <p>
                    <label for="newpredata">Enter data per day(in GB):</label> 
                    <input type="text" id="newpredata" name="newpredata" required="required"/>
			    </p>
                <p>
                    &emsp; 
                    <label for="newpredays">Enter validity(in days):</label> 
                    <input type="text" id="newpredays" name="newpredays" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; 
                    <label for="newpresms">Enter SMS per day:</label> 
                    <input type="text" id="newpresms" name="newpresms" required="required"/>
			    </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="newprebutton" value="Submit"/> 
			    </p>
            </form>
                    <?php
                        $id=$_POST['newpreid'];
                        $amnt=$_POST['newpreamnt'];
                        $talk=$_POST['newpretalk'];
                        $data=$_POST['newpredata'];
                        $days=$_POST['newpredays'];
                        $sms=$_POST['newpresms'];
                        if(isset($_POST['newprebutton']))
                        {
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $result = mysqli_query($connection,"CALL addPrepaid('$id','$amnt','$talk','$data','$days','$sms')");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                echo "<script>window.location.href='admin.php'</script>";
                            }
                        }
                    ?>
        </div>
    </div>
    
    <div class="addpost box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Add a postpaid plan </h1> <br>
                <p>
                    &emsp; &emsp; &ensp;
                    <label for="newpostid">New Postpaid plan ID:</label>
                    <input type="text" id="newpostid" name="newpostid" value="<?php 
                        $dbhost='localhost';
                        $username='root';
                        $password='';
                        $name = 'spedata';
                        $connection=mysqli_connect("$dbhost","$username","$password","$name");
                        $row=0;
                        $result = mysqli_query($connection,"CALL generateID('postpaid')");
                        if(!$result)
                        {
                            echo('error :::: '.mysqli_error($connection));
                        }
                        $row=mysqli_fetch_array($result);
                        echo 'PP',$row['id'];
                        ?>" readonly/>
                </p>
			    <p>
                    &emsp; &emsp; &emsp; &emsp; &emsp;
                    <label for="newpostamnt">Enter amount:</label> 
                    <input type="text" id="newpostamnt" name="newpostamnt" required="required"/>
			    </p>
                <p>
                    <label for="newpostconnect">Enter number of connections:</label> 
                    <input type="text" id="newpostconnect" name="newpostconnect" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; &emsp; &ensp;
                    <label for="newpostdata">Enter data(in GB):</label> 
                    <input type="text" id="newpostdata" name="newpostdata" required="required"/>
			    </p>
                <p>
                    &emsp;
                    <label for="newpostroll">Enter rollover data(in GB):</label> 
                    <input type="text" id="newpostroll" name="newpostroll" required="required"/>
			    </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="newpostbutton" value="Submit"/> 
			    </p>
            </form>
                    <?php
                        $id=$_POST['newpostid'];
                        $amnt=$_POST['newpostamnt'];
                        $connect=$_POST['newpostconnect'];
                        $data=$_POST['newpostdata'];
                        $roll=$_POST['newpostroll'];
                        if(isset($_POST['newpostbutton']))
                        {
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $result = mysqli_query($connection,"CALL addPostpaid('$id','$amnt','$connect','$data','$roll')");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                echo "<script>window.location.href='admin.php'</script>";
                            }
                        }
                    ?>
        </div>
    </div>

    <div class="addbroad box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Add a broadband plan </h1> <br>
                <p>
                    &emsp; &emsp; &ensp;
                    <label for="newbroadid">New Broadband plan ID:</label>
                    <input type="text" id="newbroadid" name="newbroadid" value="<?php 
                        $dbhost='localhost';
                        $username='root';
                        $password='';
                        $name = 'spedata';
                        $connection=mysqli_connect("$dbhost","$username","$password","$name");
                        $row=0;
                        $result = mysqli_query($connection,"CALL generateID('broadband')");
                        if(!$result)
                        {
                            echo('error :::: '.mysqli_error($connection));
                        }
                        $row=mysqli_fetch_array($result);
                        echo 'BB',$row['id'];
                        ?>" readonly/>
                </p>
			    <p>
                    &emsp; &emsp; &emsp; &emsp; &emsp; &ensp;
                    <label for="newbroadamnt">Enter amount:</label> 
                    <input type="text" id="newbroadamnt" name="newbroadamnt" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; &emsp;
                    <label for="newbroaddur">Enter duration(in days):</label> 
                    <input type="text" id="newbroaddur" name="newbroaddur" required="required"/>
			    </p>
                <p>
                    <label for="newbroadspeed">Enter maximum speed(in Mbps):</label> 
                    <input type="text" id="newbroadspeed" name="newbroadspeed" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; &emsp; &emsp; &ensp;
                    <label for="newbroaddata">Enter data(in GB):</label> 
                    <input type="text" id="newbroaddata" name="newbroaddata" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; &emsp; &emsp; &ensp;
                    <label for="newbroadname">Enter plan name:</label> 
                    <input type="text" id="newbroadname" name="newbroadname" required="required"/>
			    </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="newbroadbutton" value="Submit"/> 
			    </p>
            </form>
                    <?php
                        $id=$_POST['newbroadid'];
                        $amnt=$_POST['newbroadamnt'];
                        $dur=$_POST['newbroaddur'];
                        $speed=$_POST['newbroadspeed'];
                        $data=$_POST['newbroaddata'];
                        $pname=$_POST['newbroadname'];
                        if(isset($_POST['newbroadbutton']))
                        {
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $result = mysqli_query($connection,"CALL addBroadband('$id','$amnt','$dur','$speed','$data','$pname')");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                echo "<script>window.location.href='admin.php'</script>";
                            }
                        }
                    ?>
        </div>
    </div>

    <div class="delpre box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Delete a prepaid plan </h1> <br>
                <p>
                    <label for="delpreid">Enter the prepaid plan ID:</label>
                    <input type="text" id="delpreid" name="delpreid"/>
                </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="delprebutton" value="OK"/> 
			    </p>
            </form>
            <?php
                $id=$_POST['delpreid'];
                if(isset($_POST['delprebutton']))
                {
                    $dbhost='localhost';
                    $username='root';
                    $password='';
                    $name = 'spedata';
                    $connection=mysqli_connect("$dbhost","$username","$password","$name");
                    mysqli_query($connection,"DELETE FROM prepaid where Plan_id='$id'");
                }
            ?>
        </div>
    </div>

    <div class="delpost box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Delete a postpaid plan </h1> <br>
                <p>
                    <label for="delpostid">Enter the postpaid plan ID:</label>
                    <input type="text" id="delpostid" name="delpostid"/>
                </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="delpostbutton" value="OK"/> 
			    </p>
            </form>
            <?php
                $id=$_POST['delpostid'];
                if(isset($_POST['delpostbutton']))
                {
                    $dbhost='localhost';
                    $username='root';
                    $password='';
                    $name = 'spedata';
                    $connection=mysqli_connect("$dbhost","$username","$password","$name");
                    mysqli_query($connection,"DELETE FROM postpaid where Plan_id='$id'");
                }
            ?>
        </div>
    </div>

    <div class="delbroad box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Delete a broadband plan </h1> <br>
                <p>
                    <label for="delbroadid">Enter the broadband plan ID:</label>
                    <input type="text" id="delbroadid" name="delbroadid"/>
                </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="delbroadbutton" value="OK"/> 
			    </p>
            </form>
            <?php
                $id=$_POST['delbroadid'];
                if(isset($_POST['delbroadbutton']))
                {
                    $dbhost='localhost';
                    $username='root';
                    $password='';
                    $name = 'spedata';
                    $connection=mysqli_connect("$dbhost","$username","$password","$name");
                    mysqli_query($connection,"DELETE FROM broadband where Plan_id='$id'");
                }
            ?>
        </div>
    </div>
                
    <div class="uppre box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Update a prepaid plan </h1> <br>
                <p>
                    <label for="uppreid">Enter the prepaid plan ID:</label>
                    <input type="text" id="uppreid" name="uppreid" required="required"/>
                </p>
			    <p>
                    &emsp; &emsp; &emsp; &ensp;
                    <label for="uppreamnt">New Amount:</label> 
                    <input type="text" id="uppreamnt" name="uppreamnt" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; &emsp; &ensp;
                    <label for="uppretalk">New Talktime:</label> 
                    <input type="text" id="uppretalk" name="uppretalk" required="required"/>
			    </p>
                <p>
                    <label for="uppredata">New Data per day(in GB):</label> 
                    <input type="text" id="uppredata" name="uppredata" required="required"/>
			    </p>
                <p>
                    &emsp;
                    <label for="uppredays">New Validity(in days):</label> 
                    <input type="text" id="uppredays" name="uppredays" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp;
                    <label for="uppresms">New SMS per day:</label> 
                    <input type="text" id="uppresms" name="uppresms" required="required"/>
			    </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="upprebutton" value="Submit"/> 
			    </p>
            </form>
                    <?php
                        $id=$_POST['uppreid'];
                        $amnt=$_POST['uppreamnt'];
                        $talk=$_POST['uppretalk'];
                        $data=$_POST['uppredata'];
                        $days=$_POST['uppredays'];
                        $sms=$_POST['uppresms'];
                        if(isset($_POST['upprebutton']))
                        {
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $result = mysqli_query($connection,"CALL updatePrepaid('$id','$amnt','$talk','$data','$days','$sms')");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                echo "<script>window.location.href='admin.php'</script>";
                            }
                        }
                    ?>
        </div>
    </div>

    <div class="uppost box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Update a postpaid plan </h1> <br>
                <p>
                    <label for="uppostid">Enter the postpaid plan ID:</label>
                    <input type="text" id="uppostid" name="uppostid" required="required"/>
                </p>
			    <p>
                    &emsp; &emsp; &emsp; &emsp; 
                    <label for="uppostamnt">New Amount:</label> 
                    <input type="text" id="uppostamnt" name="uppostamnt" required="required"/>
			    </p>
                <p>
                    &ensp;
                    <label for="uppostconnect">New no. of connections:</label> 
                    <input type="text" id="uppostconnect" name="uppostconnect" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; &emsp;
                    <label for="uppostdata">New data(in GB):</label> 
                    <input type="text" id="uppostdata" name="uppostdata" required="required"/>
			    </p>
                <p>
                    &ensp;
                    <label for="uppostroll">New rollover data(in GB):</label> 
                    <input type="text" id="uppostroll" name="uppostroll" required="required"/>
			    </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="uppostbutton" value="Submit"/> 
			    </p>
            </form>
                    <?php
                        $id=$_POST['uppostid'];
                        $amnt=$_POST['uppostamnt'];
                        $connect=$_POST['uppostconnect'];
                        $data=$_POST['uppostdata'];
                        $roll=$_POST['uppostroll'];
                        if(isset($_POST['uppostbutton']))
                        {
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $result = mysqli_query($connection,"CALL updatePostpaid('$id','$amnt','$connect','$data','$roll')");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                echo "<script>window.location.href='admin.php'</script>";
                            }
                        }
                    ?>
        </div>
    </div>

    <div class="upbroad box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Update a broadband plan </h1> <br>
                <p>
                    &emsp;
                    <label for="upbroadid">Enter the broadband plan ID:</label>
                    <input type="text" id="upbroadid" name="upbroadid" required="required"/>
                </p>
			    <p>
                    &emsp; &emsp; &emsp; &emsp; &emsp; &ensp;
                    <label for="upbroadamnt">New Amount:</label> 
                    <input type="text" id="upbroadamnt" name="upbroadamnt" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; &emsp;
                    <label for="upbroaddur">New Duration(in days):</label> 
                    <input type="text" id="upbroaddur" name="upbroaddur" required="required"/>
			    </p>
                <p>
                    <label for="upbroadspeed">New Maximum Speed(in Mbps):</label> 
                    <input type="text" id="upbroadspeed" name="upbroadspeed" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; &emsp; &emsp; &ensp;
                    <label for="upbroaddata">New Data(in GB):</label> 
                    <input type="text" id="upbroaddata" name="upbroaddata" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp; &emsp; &emsp; &ensp;
                    <label for="upbroadpname">New Plan name:</label> 
                    <input type="text" id="upbroadpname" name="upbroadpname" required="required"/>
			    </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="upbroadbutton" value="Submit"/> 
			    </p>
            </form>
                    <?php
                        $id=$_POST['upbroadid'];
                        $amnt=$_POST['upbroadamnt'];
                        $dur=$_POST['upbroaddur'];
                        $speed=$_POST['upbroadspeed'];
                        $data=$_POST['upbroaddata'];
                        $pname=$_POST['upbroadpname'];
                        if(isset($_POST['upbroadbutton']))
                        {
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $result = mysqli_query($connection,"CALL updateBroadband('$id','$amnt','$dur','$speed','$data','$pname')");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                echo "<script>window.location.href='admin.php'</script>";
                            }
                        }
                    ?>
        </div>
    </div>

    <div class="addemp box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Add a new employee </h1> <br>
                <p>
                    &emsp; &emsp; &emsp;
                    <label for="newempid">New Employee ID:</label>
                    <input type="text" id="newempid" name="newempid" value="<?php 
                        $dbhost='localhost';
                        $username='root';
                        $password='';
                        $name = 'spedata';
                        $connection=mysqli_connect("$dbhost","$username","$password","$name");
                        $row=0;
                        $result = mysqli_query($connection,"CALL generateID('employee')");
                        if(!$result)
                        {
                            echo('error :::: '.mysqli_error($connection));
                        }
                        $row=mysqli_fetch_array($result);
                        echo 'E',$row['id'];
                        ?>" readonly/>
                </p>
			    <p>
                    &emsp; &emsp;
                    <label for="newempname">Enter employee name:</label> 
                    <input type="text" id="newempname" name="newempname" required="required"/>
			    </p>
                <p>
                    &emsp; &ensp;
                    <label for="newempemail">Enter employee email ID:</label> 
                    <input type="text" id="newempemail" name="newempemail" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp;
                    <label for="newempsalary">Enter employee salary:</label> 
                    <input type="text" id="newempsalary" name="newempsalary" required="required"/>
			    </p>
                <p>
                    <label for="newempdesig">Enter employee designation:</label> 
                    <input type="text" id="newempdesig" name="newempdesig" required="required"/>
			    </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="newempbutton" value="Submit"/> 
			    </p>
            </form>
                    <?php
                        $id=$_POST['newempid'];
                        $ename=$_POST['newempname'];
                        $email=$_POST['newempemail'];
                        $salary=$_POST['newempsalary'];
                        $desig=$_POST['newempdesig'];
                        if(isset($_POST['newempbutton']))
                        {
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $result = mysqli_query($connection,"CALL addEmployee('$id','$ename','$email','$salary','$desig')");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                echo "<script>window.location.href='admin.php'</script>";
                            }
                        }
                    ?>
        </div>
    </div>

    <div class="upemp box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Update employee details </h1> <br>
                <p>
                    &emsp;
                    <label for="upempid">Enter Employee ID:</label>
                    <input type="text" id="upempid" name="upempid" required="required"/>
                </p>
			    <p>
                    &emsp; &emsp;
                    <label for="upempname">Employee name:</label> 
                    <input type="text" id="upempname" name="upempname" required="required"/>
			    </p>
                <p>
                    &emsp;
                    <label for="upempemail">Employee email ID:</label> 
                    <input type="text" id="upempemail" name="upempemail" required="required"/>
			    </p>
                <p>
                    &emsp; &emsp;
                    <label for="upempsalary">Employee salary:</label> 
                    <input type="text" id="upempsalary" name="upempsalary" required="required"/>
			    </p>
                <p>
                    <label for="upempdesig">Employee designation:</label> 
                    <input type="text" id="upempdesig" name="upempdesig" required="required"/>
			    </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="upempbutton" value="Submit"/> 
			    </p>
            </form>
                    <?php
                        $id=$_POST['upempid'];
                        $ename=$_POST['upempname'];
                        $email=$_POST['upempemail'];
                        $salary=$_POST['upempsalary'];
                        $desig=$_POST['upempdesig'];
                        if(isset($_POST['upempbutton']))
                        {
                            $dbhost='localhost';
                            $username='root';
                            $password='';
                            $name = 'spedata';
                            $connection=mysqli_connect("$dbhost","$username","$password","$name");
                            $result = mysqli_query($connection,"CALL updateEmployee('$id','$ename','$email','$salary','$desig')");
                            if(!$result)
                            {
                                echo('error :::: '.mysqli_error($connection));
                            }
                            else
                            {
                                echo "<script>window.location.href='admin.php'</script>";
                            }
                        }
                    ?>
        </div>
    </div>

    <div class="delemp box">
        <div style="text-align:center" id="register" class="animate form" class="col-12">
		    <form style="text-align:center" autocomplete="on" method ="post"> <br> <br>
                <h1> Remove an employee </h1> <br>
                <p>
                    <label for="delempid">Enter the employee ID:</label>
                    <input type="text" id="delempid" name="delempid"/>
                </p>
                <p class="signin button">
                    <input type="submit" class="boxed_btn_green" name="delempbutton" value="OK"/> 
			    </p>
            </form>
            <?php
                $id=$_POST['delempid'];
                if(isset($_POST['delempbutton']))
                {
                    $dbhost='localhost';
                    $username='root';
                    $password='';
                    $name = 'spedata';
                    $connection=mysqli_connect("$dbhost","$username","$password","$name");
                    mysqli_query($connection,"CALL delEmp('$id')");    
                }
            ?>
        </div>
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