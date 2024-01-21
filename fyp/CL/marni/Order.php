<?php

if(isset($_POST['add'])){
        $_SESSION['cart'][] = array(
            'id' => rand(100,10000),
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'quan' => $_POST['quan'],
            // 'img' => $_POST['img'],
        );
    }


if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Order.php"</script>';
                }
            }
        }
    }

      ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 30px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
        body,html
{
	margin: 0;
	padding: 0;
	background-color: #0000;
}

header
{
	width: 100%;
	height: 70px;
	background-color: #252574;

}
.welcome-text
{
	position: absolute;
	width: 600px;
	height: 300px;
	margin:20% 30%;
	text-align: center;
}

.welcome-text h1
{
	position: absolute;
	padding: 3px;
	float: left;
	margin-left: 50%;
	margin-top: 10px;
	font-family: 'Alfa Slab One',cursive;
	color: #252574;
	text-align: center;

}

ul
{
	width: auto;
	float: right;
	margin-top: 8px;


}

li
{
	display: inline-block;
	padding: 15px 30px;
}

a
{
	text-align: right;
	color: #fff;
	text-decoration: none;
	font-family: 'Open Sans', san-serif;
	font-size:1.2vw;

}

a:hover
{
	color: #F0c330;
	transition: 0.5s;

}

img
{
	width: 100%;
	margin-top: -16px;
}

td
{
	background-color: #252574;
	color:white;
/*	width: 30%;
	height: 10%;*/
	text-align: center;


}
/*td
{
	background-color: #252574;
	color:white;
	width: 10%;
	text-align: center;
}*/

.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #252574;
  border: none;
  border-radius: 5px;
}
button:hover{
  opacity: .7;
}
.input-group {
  margin: 10px 10px 10px 10px;
}
.input-group label {
  display: block;
  text-align: center;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 10px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}

/*.output-group {
  margin: 10px 10px 10px 10px;
}
.output-group label {
  display: block;
  text-align: center;
  margin: 3px;
}
.output-group output {
  height: 30px;
  width: 93%;
  padding: 10px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}*/
    </style>
</head>
<body>

	<header>
		<div class="welcome-text">    
		
		</div>
			<ul class="nav-area">
				 <li><a href="CustomerProfile.php">PROFILE</a></li>
				<!-- <li><a href="ProductPage.php">PRODUCT</a></li>
				<li><a href="Admin_CustomerList.php">CUSTOMER</a></li> -->
				<li><a href="myCart.php">ORDER CHOCOJERR</a></li>
				<li><a href="myCart.php" class="btn btn-outline-success">MY CART (0)</a></li>
				<li><a href="#">LOGOUT</a></li>
			</ul>

	</header>
<!--  -->

    <div class="container" style="width: 65%">
        <h2>ORDER CHOCOJERR PRODUCT</h2>
        <?php
        require 'config/connection.php';
            $query = "SELECT * FROM product ORDER BY Product_Id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-4">

                        <form method="post" action="Order.php">

                            <div class="product">
                                <?php echo '<img src="data:image;base64,'.base64_encode($row['Product_Image']).'"alt="Image" style="width: 200px; height:150px;  >"';?><p>
                                <h5  class="text-info"><?php echo $row["Product_Name"]; ?></h5>
                                <h5 class="text-danger">RM<?php echo $row["Product_Price"]; ?>.00</h5>
                                <input type="text" name="quan" class="form-control" value="1">
                                <input type="hidden" name="name" value="<?php echo $row["Product_Name"]; ?>">
                                <input type="hidden" name="price" value="<?php echo $row["Product_Price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>


                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        
<div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php

            require 'config/connection.php';

                if(!empty($_SESSION['cart'])){
                    $total = 0;

                    foreach ($_SESSION['cart'] as $key => $value) {
                        ?>
                        <tr>

                            <td><?php echo $value["name"]; ?></td>
                            <td><?php echo $value["quan"]; ?></td>
                            <td>$ <?php echo $value["price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["quan"] * $value["price"], 2); ?></td>
                            <td><a href="Order.php?action=delete&id=<?php echo $value["Product_Id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>


                        </tr>
                        <?php
                        $total = $total + ($value["quan"] * $value["price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>

    </div>

</body>
</html>