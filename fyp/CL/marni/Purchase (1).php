<?php

session_start();

// require 'dbconn.php';
$connect = mysqli_connect("localhost", "root", "", "test");

if(isset($_POST['purchase_btn']))
{

	$Cust_Id=$_SESSION["Cust_Id"];
	$dateorder=Date('Y-m-d');
	$Address=$_POST["Address"];


	
	//$queryTotal="INSERT INTO `cust_order`( 'Total_Price') VALUES ('$total')";	
	//$query_run=mysqli_query($con,$queryTotal);

	$query="INSERT INTO `cust_order`( `Cust_Id`,Date, `Address`) VALUES ('$Cust_Id','$dateorder','$Address')";	
	$query_run=mysqli_query($connect,$query);


	if(!empty($_SESSION["shopping_cart"]))  
   {  
   // $total = 0;  
   foreach($_SESSION["shopping_cart"] as $keys => $values)  
   {  

	$Cust_Order=$values["item_id"];
	$Quantity=$values["item_quantity"];
	$Price=$values["item_price"];
	// $Total_Price=$total ;
	
	if($query_run == TRUE)
	{
		$query = $connect->query("select * from cust_order where Cust_Id='$Cust_Id'") or die(mysqli_error());  //order_cart tu array


			while($f_query = $query->fetch_array())
			{
				$acc_query = $connect->query("select max(Order_Id) as ORDER_ID_NEW from cust_order ") or die(mysqli_error());
				$acc_fetch = $acc_query->fetch_array();
				$Order_Id=$acc_fetch['ORDER_ID_NEW'];
				$Quantity = $values['item_quantity'];
				$Product_Id=$values['item_id'];
				// $custom=$f_query['Custom'];
			
				$Total = ($values["item_quantity"] * $values["item_price"]);  





				$sql = mysqli_query($connect,"INSERT INTO order_list(Order_Id,Product_Id,Quantity,Price) VALUES ('$Order_Id','$Product_Id','$Quantity','$Price')");
				 // $sql1 ="INSERT INTO order_list(Order_Id,Product_Id,Quantity) VALUES ('$Order_Id','$item_id','$item_quantity')";
					

					if($sql == TRUE)
					{

				
				$queryTotal="INSERT INTO `cust_order`( `Total_Price') VALUES ('$Total') where Order_Id='$Order_Id'";	
				$query_runTotal=mysqli_query($connect,$queryTotal);
						// $sqlTotal= "UPDATE cust_order SET Total_Price='$total' WHERE Cust_Id='$Cust_Id' ORDER BY DESC limit 1 ";

						//update cust_order set total price=total where custid = session cust id  order by orderid desc limit 1


						

							echo '<script language="javascript">';
							echo 'alert("insert orderlist Successfuly");';
							echo 'window.location.href="myCart.php"';
							echo '</script>';

					}

					else
					{
						// echo '<script language="javascript">';
						// echo 'alert("failed");';
						// //echo 'window.location.href="stafforder.php"';
						// echo '</script>';
					}

			}

		
	}
}


	// else

	// {
	// 	// echo'<script type="text/javascript">';
	// 	// echo'alert(" Fail! Failed");';
	// 	// echo'window.location.href="Purchase.php";';
	// 	// echo'</script>';
	// }

	// $Order_Id=mysqli_insert_id($con);
	// $query2="INSERT INTO `order_list`( `Product_Id`, `Quantity`) VALUES ('$Cust_Order','$Quantity')";
	// $result=mysqli_query($con,$query2);
	// if($result)
	// {
	// 	echo'<script type="text/javascript">';
	// 	echo'alert("Success ");';
	// 	echo'window.location.href="naewCart.php";';
	// 	echo'</script>';
	// }
	// else

	// {
	// 	echo'<script type="text/javascript">';
	// 	echo'alert(" Fail! Failed");';
	// 	echo'window.location.href="Purchase.php";';
	// 	echo'</script>';
	// }

}
    }  





  ?>


