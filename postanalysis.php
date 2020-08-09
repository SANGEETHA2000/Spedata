<?php 
    $dbhost='localhost';
    $username='root';
    $password='';
    $name = 'spedata';
    $connection=mysqli_connect("$dbhost","$username","$password","$name");
    $result=mysqli_query($connection,"SELECT Plan_id,COUNT(*) FROM customer WHERE Mode='postpaid' GROUP BY Plan_id");
?>

<!DOCTYPE html>
<html lang="en">
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
	  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Plan ID', 'No. of customers'],
          <?php 
			if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result))
					{
							echo "['".$row["Plan_id"]."','".$row["COUNT(*)"]."'],";
					}
			}
		  ?>
        ]);

        var options = {
		titleTextStyle : { color: 'black' , fontSize: 30 , fontName: "Times",bold:true},
		colors : '#e6693e',
		titlePosition: 'none'
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>

<body>
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
                                        <li><a href="admin.php">Go back</a></li>
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

    <div class="bradcam_area breadcam_bg overlay2">
	<div style="text-align: center;">
    	<br> </br>
        <div id="columnchart_material" style="width:800px;height:500px;display:inline-block;"></div>
	</div>
    </div>
</body>
</html>
