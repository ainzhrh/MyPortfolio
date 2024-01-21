<?php
	// if user enter this page without login success, jump back to login page
	if (!isset($_SESSION['username'])) 
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
	$handle = $link->prepare("SELECT sales_date, SUM(amount_price) AS total FROM sales WHERE sales_date >= '$from_date' AND sales_date <= '$until_date' GROUP BY sales_date"); 
	$handle->execute(); 
	$result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
	foreach($result as $row){
		array_push($dataPoints, array("label"=> $row->sales_date, "y"=> $row->total));
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
		text: "Daily Sales Income from "+<?php echo json_encode($from_date); ?>+" to "+<?php echo json_encode($until_date); ?>,
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