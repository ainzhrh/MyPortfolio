<?php
	include('connection.php');
	
	// if user enter this page without login success, jump back to login page
	if (!isset($_SESSION['username'])) 
	{
		header('location: login.php');
	}
	
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.css">

<head>
	<title>Report</title>
</head>

<body>

	<?php include ('navigation_bar.php'); ?>
	<div class="banner" >
	<h2>Report<br></h2>
	</div>
	
	<div class="row">
	<form method="post" action="report.php">
		
		<div class="input-group">
		<label><b>Annual Sales Income</b></label>
		</div>
		<div class="input-group">
		<select name="year">
		<option>Select Year</option>
		<?php $results = mysqli_query($connect, "SELECT * FROM sales GROUP BY sales_year"); ?>
		<?php while ($row = mysqli_fetch_array($results)) { ?>	
		<option value="<?php echo $row['sales_year'];?>">
		  <?php echo $row['sales_year']; ?>
		</option>
		<?php } ?>  
		</select>
		<button type="submit" class="button_view" name="annual_sales"><b>View</b></button>
		</div>
		
		<p class="border"></p>
		
		<div class="input-group">
		<label><b>Year to Year Sales Income</b></label>
		</div>
		<div class="input-group">
		<select name="from_year">
		<option>From year</option>
		<?php $results = mysqli_query($connect, "SELECT * FROM sales GROUP BY sales_year"); ?>
		<?php while ($row = mysqli_fetch_array($results)) { ?>	
		<option value="<?php echo $row['sales_year'];?>">
		  <?php echo $row['sales_year']; ?>
		</option>
		<?php } ?>  
		</select>
		<select name="to_year">
		<option>To year</option>
		<?php $results = mysqli_query($connect, "SELECT * FROM sales GROUP BY sales_year"); ?>
		<?php while ($row = mysqli_fetch_array($results)) { ?>	
		<option value="<?php echo $row['sales_year'];?>">
		  <?php echo $row['sales_year']; ?>
		</option>
		<?php } ?>  
		</select>
		</div>
		<div class="input-group">
		<button type="submit" class="button_view" name="yearly_sales"><b>View</b></button>
		</div>
		
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
		<?php $results = mysqli_query($connect, "SELECT * FROM sales GROUP BY sales_year"); ?>
		<?php while ($row = mysqli_fetch_array($results)) { ?>	
		<option value="<?php echo $row['sales_year'];?>">
		  <?php echo $row['sales_year']; ?>
		</option>
		<?php } ?>  
		</select>
		<select name="product_month">
		<option>Month</option>
		<?php $results = mysqli_query($connect, "SELECT * FROM sales GROUP BY month_name"); ?>
		<?php while ($row = mysqli_fetch_array($results)) { ?>	
		<option value="<?php echo $row['month_name'];?>">
		  <?php echo $row['month_name']; ?>
		</option>
		<?php } ?>  
		</select>
		</div>
		<div class="input-group">
		<select name="category">
		<option>Category</option>
		<?php $results = mysqli_query($connect, "SELECT * FROM category GROUP BY category_name"); ?>
		<?php while ($row = mysqli_fetch_array($results)) { ?>	
		<option value="<?php echo $row['category_name'];?>">
		  <?php echo $row['category_name']; ?>
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
		$year = $_POST['year'];
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