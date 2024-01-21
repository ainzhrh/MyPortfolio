<?php
include('connection.php');

// Initialize the session

  session_start();
  if(isset($_SESSION['customer']))
  {
  //  $customer = $_SESSION["customer"];
  //}
 // else
 // {
  //  header("Location:index.php");
 // }

?>

<html>
	<head>
		<title>Menu</title>
			<link rel="stylesheet" type="text/css" href="cs.css">
			<link rel="stylesheet" type="text/css" href="dropdown.css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
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

table a:link, a:visited {
  
  color: black;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

#cart_count
{
  text-align: center;
  padding: 0 0.9rem 0.1rem 0.9rem;
  border-radius: 3rem ;
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
      <a href="menu.php">All</a>
      <a href="menu-pasta.php">Pasta</a>
      <a href="menu-asiancuisine.php">Asian Cuisine</a>
      <a href="menu-beverages.php">Beverages</a>
    </div>

  </div>

<div class="dropdown">
  <button class="dropbtn">Account 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="account.php">Profile</a>
      <a href="#">Payment Information</a>
      <a href="#">Wishlist</a>
    </div>
 
</div> 
  <a class="" href="about-us.php"><i class="fa fa-fw fa-home"></i>Home</a> 
  <div id="cart_count">
   <a href="cart.php"><i class="fa fa-book"></i>Cart</a>
   <?php
   ?>
</div>
  
</div>
				</div>


				<div align="center" style="background-color:#161616;padding:10px;height:950px">

        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["customer"]); ?></b>. Welcome to our site.</h1>

				<h2 align="center" style="color: #f9cd01">Menu</h2>
						
				<h3 align="center" style="color: #f9cd01" >Come quench your thrist and satisfy your cravings with our spectaculous menu!</h3>
						
				<table align="center" style="border: 1px #f9cd01;color: #f9cd01">
                  <tr>
                  	<th>Menu</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Quantity</th>

                    <th></th>

                    </tr>
      <?php

			$conn = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($conn, 'coffeeloca');

			$query = "SELECT * FROM product";
			$query_run = mysqli_query($conn, $query);

			while ($row = mysqli_fetch_array($query_run)) 
			{
				?>


				<tr>
					<td><?php echo '<img src="data:image;base64,'.base64_encode($row['img']).'" alt="image" style="width:200px; height:150px;">'; ?> </td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['price']; ?></td>
          <td><?php echo $row['info']; ?></td>
          <td >
            <!--<input id=demoInput type=number min=1 max=<?php //echo $row['qty']; ?>>
<button onclick="increment()">+</button>
<button onclick="decrement()">-</button>
<script>
   function increment() {
      document.getElementById('demoInput').stepUp();
   }
   function decrement() {
      document.getElementById('demoInput').stepDown();
   }
</script>-->
    </td>
					<td><button onclick="location.href='order.php?id=<?php echo $row['ProductID']?>';">Order</button></td>
				</tr>

			<?php
			}

			?>
              </table>
              <br>
              <div align="center">
             
             
              </div>
              <br>
						</div>
							
								<div id="footer" style="background-color: black;color: #f9cd01">
 									Copyright © Ain Zahirah Abdul Karim, 2021
								</div>
					</div>
		</div>
	</body>
</html>
<?php
    
}
else {
  echo "<script>alert('Please Login');</script>";
  echo "<script>window.location.assign('login.php')</script>";
}
?>

<script type="text/javascript">
$(document).ready(function () {

        $('.increment-btn').click(function (e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value<10){
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }

        });

        $('.decrement-btn').click(function (e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });

    });
</script>