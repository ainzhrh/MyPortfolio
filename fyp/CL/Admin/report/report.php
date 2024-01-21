<?php
	include('../../config/connection.php');
	
	// if user enter this page without login success, jump back to login page
	// if (!isset($_SESSION['admin'])) 
	// {
	// 	header('location: ../login.php');
	// }
	
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.css">

<head>
	<title>Report</title>
</head>

<body>

	<div class="banner" >
	<h2>Report<br></h2>
	</div>
	
	<div class="row">
	<form method="post" action="report.php">
		
		<!--This coding displays form for Annual Sales Report-->
		<div class="input-group">
		<label><b>Annual Sales</b></label>
		</div>
		<div class="input-group">
		<select name="byyear">
		<option>Select Year</option>
		<?php 
			$results = mysqli_query($conn, "SELECT year(OrderedTime) as Year, OrderedTime FROM order_details GROUP BY year(OrderedTime)"); 
		?>
		<?php while ($row = mysqli_fetch_array($results)) 
		{
		 ?>	
		<option value="<?php echo $row['Year'];?>">
		<?php
		   $date = date('Y', strtotime($row['OrderedTime']));
		   echo $date; ?>
		</option>
		<?php 
		} 
		?>  
		</select>
		<button type="submit" class="button_view" name="annual_sales"><b>View</b></button>
		</div>
		<!--End of coding displaying Annual Sales-->

		<p class="border"></p>
		
		<!--Display year to year income-->
		<div class="input-group">
		<label><b>Year to Year Sales Income</b></label>
		</div>

		<div class="input-group">

		<select name="from_year">
		<option>From year</option>
		<?php $results = mysqli_query($conn, "SELECT year(OrderedTime) as Year, OrderedTime FROM order_details GROUP BY year(OrderedTime)"); 
		?>
		<?php while ($row = mysqli_fetch_array($results)) 
		{ 
			$timestamp = $row['OrderedTime'];
			$year = date('Y-M', strtotime($timestamp));
		?>	
		<option value="<?php echo $row['Year'];?>">
		  <?php echo $year; ?>
		</option>
		<?php 
		} 
		?>  -
		</select>

		<select name="to_year">
		<option>To year</option>
		<?php $results = mysqli_query($conn, "SELECT year(OrderedTime) as Year, OrderedTime FROM order_details GROUP BY year(OrderedTime)"); ?>
		<?php 
			while ($row = mysqli_fetch_array($results)) 
				{ 
					$timestamp = $row['OrderedTime'];
					$year = date('Y-M', strtotime($timestamp));
		?>	
		<option value="<?php echo $row['Year'];?>">
		  <?php echo $year; ?>
		</option>
		<?php 
				} 
		?>  
		</select>
		</div>

		<div class="input-group">
		<button type="submit" class="button_view" name="yearly_sales"><b>View</b></button>
		</div>
		<!--End of coding displaying Year To Year Sales-->

		
		<p class="border"></p>
		
		<div class="input-group">
		<label><b>Date to Date Sales Income</b></label>
		From :<input type="text" id="date1" name="date1" placeholder="YYYY-MM-DD">
		<br>
		Until :<input type="text" id="date2" name="date2" placeholder="YYYY-MM-DD">
		</div>
		<div class="input-group">
		<button type="submit" class="button_view" name="daily_sales"><b>View</b></button>
		</div>
		
		<p class="border"></p>

		
		<div class="input-group">
		<label><b>Top 10 Sales Products</b></label>
		</div>
		<div class="input-group">
		<select name="product_year">
		<option>Year</option>
		<?php $results = mysqli_query($conn, "SELECT year(OrderedTime) as Year, OrderedTime FROM order_details GROUP BY year(OrderedTime)"); ?>
		<?php while ($row = mysqli_fetch_array($results)) { ?>	
		<option value="<?php echo $row['Year'];?>">
		  <?php echo $row['Year']; ?>
		</option>
		<?php } ?>  
		</select>
		<select name="product_month">
		<option>Month</option>
		<?php $results = mysqli_query($conn, "SELECT month(OrderedTime) as Month, OrderedTime FROM order_details GROUP BY month(OrderedTime)"); ?>
		<?php while ($row = mysqli_fetch_array($results)) { ?>	
		<option value="<?php echo $row['Month'];?>">
		  <?php echo $row['Month']; ?>
		</option>
		<?php } ?>  
		</select>
		</div>
		<div class="input-group">
		<select name="category">
		<option>Category</option>
		<?php $results = mysqli_query($conn, "SELECT * FROM product GROUP BY category"); ?>
		<?php while ($row = mysqli_fetch_array($results)) { ?>	
		<option value="<?php echo $row['category'];?>">
		  <?php echo $row['category']; ?>
		</option>
		<?php } ?>  
		</select>
		<button type="submit" class="button_view" name="product_sales"><b>View</b></button>
		</div>
	
	</form>
	
	<div class="report"> 
	<?php
	if (isset($_POST['annual_sales'])) 
	{
		$year = $_POST['byyear'];
		include('annual_sales.php');
	} 
	
	else if(isset($_POST['yearly_sales'])) 
	{
		$from_year = $_POST['from_year'];
		$to_year = $_POST['to_year'];
		include('yearly_sales.php');
	}
	
	else if(isset($_POST['daily_sales'])) 
	{
		$from_date = $_POST['date1'];
		$until_date = $_POST['date2'];
		include('daily_sales.php');
	}
	
	else if(isset($_POST['product_sales'])) 
	{
		$product_year = $_POST['product_year'];
		$product_month = $_POST['product_month'];
		$category = $_POST['category'];
		include('product_sales.php');
	}
	
	?>
	</div>
	</div>
</body>