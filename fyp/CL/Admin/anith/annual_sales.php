<?php
	if (!isset($_SESSION['username'])) 
	// if user enter this page without login success, jump back to login page
	{
		header('location: login.php');
	}
	
	$dataPoints = array();        
	$link = new \PDO(   'mysql:host=localhost;dbname=mobile_store;charset=utf8mb4','root','', 
						array(
							\PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
							\PDO::ATTR_PERSISTENT => false
						)
					);
	$handle = $link->prepare("SELECT month_name, SUM(amount_price) AS total FROM sales WHERE sales_year='$year' GROUP BY sales_month"); 
	$handle->execute(); 
	$result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
	foreach($result as $row){
		array_push($dataPoints, array("label"=> $row->month_name, "y"=> $row->total));
	}
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1",
	title:{
		text: "Annual Sales Income in Year "+<?php echo $year; ?>,
		fontColor: "#666666",
		fontFamily: "arial",
		fontStyle: "bold",
		margin: 50,
	},
	data: [{
		type: "column",
		yValueFormatString: "RM #,##0.##",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              