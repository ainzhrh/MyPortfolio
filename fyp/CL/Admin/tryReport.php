<?php
 
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
$link = new \PDO(   'mysql:host=localhost;dbname=cl;charset=utf8mb4','root','',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
	
    $handle = $link->prepare("SELECT order_details.ProductID, sum(order_details.Qty) as Total_Sold, product.name as Name FROM order_details JOIN product on product.ProductID = order_details.ProductID group by order_details.ProductID"); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result as $row)
    {
        array_push($dataPoints, array("label"=> $row->Name, "y"=> $row->Total_Sold));
    }
	$link = null;
}

catch(\PDOException $ex){
    print($ex->getMessage());
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
		text: "Total Products Sold"
	},
	data: [{
		type: "column", 
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