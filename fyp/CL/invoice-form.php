<?php
include ('config/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Invoice</title>

</head>
<body>

	<form method="POST" action="invoice-db.php">
		<select name="invoiceID">
			<?php
			$query = mysqli_query($conn,"SELECT * FROM cust_orders");
			while ($invoice =mysqli_fetch_array($query)) 
			{
				echo "<option value='".$invoice['OrderID']."'>".$invoice['OrderID']."</option>";
			}
			?>
		</select>
		<input type="submit" value="Generate" name="generate">
	</form>

</body>
</html>
<?php 
if (isset($_GET['OrderID']))
{
  $orderID = $_GET['OrderID'];
}

 ?>