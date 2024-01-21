<?php
include('../../config/connection.php');
	// if user enter this page without login success, jump back to login page
	// if (!isset($_SESSION['username'])) 
	// {
	// 	header('location: login.php');
	// }
	
	$dataPoints = array();        
	$link = new \PDO(   'mysql:host=localhost;dbname=cl;charset=utf8mb4','root','', 
						array(
							\PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
							\PDO::ATTR_PERSISTENT => false
						)
					);
	$handle = $link->prepare("SELECT year(OrderedTime) as Year, month(OrderedTime) as Month, sum(Qty*price) AS total FROM order_details WHERE year(OrderedTime)>='$from_year' AND year(OrderedTime)<='$to_year' GROUP BY OrderID"); 
	$handle->execute(); 
	$result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
	foreach($result as $row){
		array_push($dataPoints, array("label"=> $row->Year, "y"=> $row->total));
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
		text: "Year to Year Sales Income from "+<?php echo $from_year; ?>+" to "+<?php echo $to_year; ?>,
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