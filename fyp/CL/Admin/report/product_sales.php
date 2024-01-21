<?php
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
	$handle = $link->prepare("SELECT p.name, p.category, SUM(o.Qty) AS totalUnitSold FROM product p JOIN order_details o ON p.ProductID= o.ProductID WHERE year(o.OrderedTime)='$product_year' and month(o.OrderedTime)='$product_month' and p.category='$category'GROUP BY p.name ORDER BY totalUnitSold"); 
	//SELECT p.product_name, c.category_name, SUM(s.quantity) AS total FROM product p JOIN category c ON p.category_id= c.category_id JOIN sales s ON s.product_id = p.product_id WHERE s.sales_year='$product_year' and s.month_name='$product_month' and c.category_name='$category' GROUP BY p.product_name ORDER BY total

	//SELECT p.name, p.category, SUM(o.Qty) AS totalUnitSold FROM product p JOIN order_details o ON p.ProductID= o.ProductID WHERE year(o.OrderedTime)='2021' and month(o.OrderedTime)='6' and p.category='Pasta'GROUP BY p.name ORDER BY totalUnitSold

	$handle->execute(); 
	$result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
	foreach($result as $row){
		array_push($dataPoints, array("label"=> $row->name, "y"=> $row->totalUnitSold));
		
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
		text: "Top 10 Sales "+<?php echo json_encode($category); ?>+" in "+<?php echo json_encode($product_month); ?>+" "+<?php echo json_encode($product_year); ?>,
		fontColor: "#666666",
		fontFamily: "arial",
		fontStyle: "bold",
		margin: 50,
	},
	data: [{
		type: "column",
		yValueFormatString: " #,## units",
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