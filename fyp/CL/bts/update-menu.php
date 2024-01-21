 <?php
 include('admin-nav.php');

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'coffeeloca');

if (isset($_POST['update']))
{
	$id = $_POST['ProductID'];
	$file = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
	$name= $_POST['name'];
	$price= $_POST['price'];
	$category = $_POST['category'];
  $qty = $_POST['qty'];
	$info= $_POST['info'];
	
$update=mysqli_query($connection, "UPDATE product SET img = '$file', name ='$name',price ='$price',category ='$category', qty ='$qty', info ='$info'  WHERE ProductID='$id'");



if ($update){
	echo '<script language="javascript">';
	echo 'alert ("Update Success.'.mysqli_error($connection).'");';
	echo 'window.location.href="home-staff.php";';
	echo '</script>';
}else{
	echo '<script language="javascript">';
	echo 'alert ("Update Failed.Please try again '.mysqli_error($connection).'");';
	echo 'window.location.href="update-menu.php?id='.$ProductID.' ";';
	echo '</script>';
}

}
?>

<html>
	<head>
		<title>Menu</title>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			
	</head>
	<body>
		<h1 style="color: black;">Update Menu</h1>

<?php
session_start();
				        $acc_query = $connection->query("SELECT * FROM product WHERE ProductID = '$_REQUEST[id]'") or die(mysqli_error());
      $acc_fetch = $acc_query->fetch_array();
				?>

		<form action="update-menu.php" method="POST" enctype="multipart/form-data" style="color: black;">
			
		
			<div class="inputBox">
			<label>Current Image</label>
			</div>

			<div class="inputBox">
			<input  name = "ProductID" type = "hidden" value = "<?php echo $acc_fetch['ProductID']?>" class = "form-control" readonly />
			</div>

			<?php echo '<img src="data:image;base64,'.base64_encode($acc_fetch['img']).'" style="width:200px; height:150px;">'?>

			<div class="inputBox">
			<label>Choose a new image: </label>
			<input type="file" name="img" id="image"></input>
			</div>

			<div class="inputBox">
			<label>Name: </label>
			<input type="text" name="name" value="<?php echo $acc_fetch['name']?>" />
			</div>

			<div class="inputBox">
			<label>Price: RM </label>
			<input type="number" name="price" step="any" />
			</div>

      <div class="inputBox">
      <label>Category: </label>
      <select name="category">
        <option>Pasta</option>
        <option>Asian Cuisine</option>
        <option>Beverages</option>
      </select>
      </div>

      <div class="inputBox">
      <label>Quantity: </label>
      <input type="number" name="qty"  />
      </div>

			<div class="inputBox">
			<label>Description: </label>
			<input type="text" name="info" />
			</div>

			<button onclick="goBack()" id="back-button">Back</button>
			<script>
			function goBack() 
			{
  			window.history.back();
			}
			</script>

			<button class="button" type="submit" name="update">Update</button>
			<br>



	
		</form>

</div>
<br>
<div id="footer" style="background-color: black;color: black">
 									Copyright © Ain Zahirah Abdul Karim, 2021
								</div>
					</div>
		</div>
	</body>
</html>
