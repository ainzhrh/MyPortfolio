 <?php

    $con = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con, 'coffeeloca');


if (isset($_POST['submit'])) 
  {
    $ProductID = $_POST['ProductID'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $info= $_POST['info'];

    $sql = "INSERT INTO orders (ProductID) VALUES ('$ProductID');";
    $insert = mysqli_query($con,$sql);

    if ($insert) //keluarkan pop up to indicate success
    {
      echo '<script language="javascript">';
      echo 'alert("Adding successful");';
      echo 'window.location.href="cart.php";';
      echo '</script>';
    }

    else
    {
      echo '<script language="javascript">';
      echo 'alert("Failed to add to cart.Please try again.");';
      echo 'window.location.href="menu.php";';
      echo '</script>';

    }

    mysqli_close($con);
  }
?>

<html>
	<head>
		<title>Menu</title>
			<link rel="stylesheet" type="text/css" href="cs.css">
			<link rel="stylesheet" type="text/css" href="dropdown.css">
			<style type="text/css">
				.navbar {
  width: 100%;
  background-color: #f9cd01;
  overflow: auto;
}

.navbar a {
  float: right;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: #f9cd01;
}

.active {
  background-color: #f9cd01;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

.dropdown-content {

  position: absolute;
  background-color: white;
  min-width: 80px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #f9cd01;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.inputBox
{
  position: relative;
}

.inputBox input 
{
  width: 20%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 15px;
  border: none;
  border-bottom: 1px solid #eee;
  outline: none;
  background: transparent;
  
}

.inputBox label
{
  color: #f9cd01;
}
			</style>
			
	</head>
	<body style="background-color:black">
		<div id="wrapper">
			<div id="header" style="background-color: black">
				<h1 align="center" style="color: #f9cd01">Coffeeloca</h1>
			</div>

			
  			   	<div class="navbar" style="background-color: #f9cd01">
  
  <a href="logout.php" onClick="return confirm('Are you sure?')"><i class="fas fa-sign-out-alt"></i>Logout</a>
  
  <div class="dropdown">
    
    <button class="dropbtn">Menu 
      <i class="fa fa-caret-down"></i>
    </button>
    
    <div class="dropdown-content">
      <a href="menu.php">Pasta</a>
      <a href="menu.php">Asian Cuisine</a>
      <a href="menu.php">Beverages</a>
    </div>

  </div>

  <a href="account.php"><i class="fa fa-book"></i>Account</a> 
 
  <a class="" href="about-us.php"><i class="fa fa-fw fa-home"></i>Home</a> 
  <div id="cart_count">
   <a href="cart.php"><i class="fa fa-book"></i>Cart</a>
   <?php
   ?>
</div>
  
</div>
				</div>

				<div align="center" style="background-color:#161616;padding:10px;height:550px">

		<h1 style="color: #f9cd01">Order</h1>

<?php
session_start();
				        $acc_query = $con->query("SELECT * FROM product WHERE ProductID = '$_REQUEST[id]'") or die(mysqli_error());
      $acc_fetch = $acc_query->fetch_array();
				?>

		<form action="order.php" method="POST" enctype="multipart/form-data" style="color: #f9cd01;">
			
		
			<div class="inputBox">

			<label>Menu</label>
			</div>

			<div class="inputBox">
			<input  name = "ProductID" type = "hidden" value = "<?php echo $acc_fetch['ProductID']?>" class = "form-control" readonly />
			</div>

			<?php echo '<img src="data:image;base64,'.base64_encode($acc_fetch['img']).'" style="width:200px; height:150px;">'?>

			<div class="inputBox">

			<!--<label>Choose a new image: </label>
			<input type="file" name="img" id="image" required></input>
			</div>-->

			<div class="inputBox">
			<label>Name: </label>
			<input type="text" name="name" value="<?php echo $acc_fetch['name']?>" />
			</div>

			<div class="inputBox">
			<label>Price: </label>
			<input type="text" name="price" value="<?php echo $acc_fetch['price']?>" />
			</div>

			<div class="inputBox">
			<label>Description: </label>
			<input type="text" name="info" value="<?php echo $acc_fetch['info']?>" />
			</div>

			<button class="button" type="submit" name="submit">Add to Cart</button>

	
		</form>

</div>
<br>
<div id="footer" style="background-color: black;color: #f9cd01">
 									Copyright © Ain Zahirah Abdul Karim, 2021
								</div>
					</div>
		</div>
	</body>
</html>
