<?php 
    $dbhost='localhost';
    $username='root';
    $password='';
    $name = 'spedata';
    $connection=mysqli_connect("$dbhost","$username","$password","$name");
    $result=mysqli_query($connection,"SELECT Mode,COUNT(*) FROM customer GROUP BY Mode");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
	  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Connection Mode', 'No. of customers'],
          <?php 
			if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result))
					{
							echo "['".$row["Mode"]."','".$row["COUNT(*)"]."'],";
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
	<div style="text-align: center;">
    	<br> </br>
        <div id="columnchart_material" style="width:800px;height:500px;display:inline-block;"></div>
	</div>
</body>
</html>
