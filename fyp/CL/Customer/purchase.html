<?php
session_start();

include ('../config/connection.php');


  if(isset($_POST['purchase']))
{
    
// $Cust_Id=$_SESSION["Cust_Id"];
     $CustID=$_SESSION["CustID"];
     $Address=$_POST["Address"];

     //$queryTotal="INSERT INTO `cust_order`( 'Total_Price') VALUES ('$total')";     
     //$query_run=mysqli_query($con,$queryTotal);

     $query="INSERT INTO cust_orders(CustID, Address) VALUES ('$CustID','$Address')";   
     $query_run=mysqli_query($conn,$query);


     if(!empty($_SESSION["shopping_cart"]))  
    {  
   // $total = 0;  
   foreach($_SESSION["shopping_cart"] as $keys => $values)  
   {  

     $Cust_Order=$values["item_id"];
     $Qty=$values["item_quantity"];
     $Price=$values["item_price"];

     if($query_run == TRUE)
     {
          $query = $conn->query("select * from cust_orders where CustID='$CustID'") or die(mysqli_error());  //order_cart tu array



               while($f_query = $query->fetch_array())
               {
                    $acc_query = $conn->query("select max(OrderID) as ORDER_ID_NEW from cust_orders") or die(mysqli_error());
                    $acc_fetch = $acc_query->fetch_array();
                    
                    $Order_Id=$acc_fetch['ORDER_ID_NEW'];
                    $Product_Id=$values['item_id'];
                    $Qty = $values['item_quantity'];
                    $Price=$values["item_price"];
                    
                    // $custom=$f_query['Custom'];
               
                    $Total = ($values["item_quantity"] * $values["item_price"]);  


                    $sql = mysqli_query($conn,"INSERT INTO order_details (OrderID,ProductID,Qty,price) VALUES ('$Order_Id','$Product_Id','$Qty','$Price')");

                    
                     // $sql1 ="INSERT INTO order_list(Order_Id,Product_Id,Quantity) VALUES ('$Order_Id','$item_id','$item_quantity')";
                         

                    if($sql == TRUE)
                    {
                         $sql2 = mysqli_query($conn,"INSERT INTO delivery_details (Address,OrderID) VALUES ('$Address','$Order_Id'-)");
     
                    // $queryTotal="INSERT INTO cust_orders( TotalPrice) VALUES ('$Total') where OrderID='$Order_ID'";  
                    // $query_runTotal=mysqli_query($con,$queryTotal);
                              // $sqlTotal= "UPDATE cust_order SET Total_Price='$total' WHERE Cust_Id='$Cust_Id' ORDER BY DESC limit 1 ";

                              //update cust_order set total price=total where custid = session cust id  order by orderid desc limit 1


                              

                                   echo '<script language="javascript">';
                                   echo 'alert("Successfuly purchased!");';
                                   echo 'window.location.href="history.php"';
                                   echo '</script>';

                         }

                         else
                         {
                               echo '<script language="javascript">';
                               echo 'alert("failed '.mysqli_error($conn).'");';
                               echo 'window.location.href="cart.php"';
                               echo '</script>';
                         }

               }

          
     }
}

     // else

     // {
     //   // echo'<script type="text/javascript">';
     //   // echo'alert(" Fail! Failed");';
     //   // echo'window.location.href="Purchase.php";';
     //   // echo'</script>';
     // }

     // $Order_Id=mysqli_insert_id($con);
     // $query2="INSERT INTO `order_list`( `Product_Id`, `Quantity`) VALUES ('$Cust_Order','$Quantity')";
     // $result=mysqli_query($con,$query2);
     // if($result)
     // {
     //   echo'<script type="text/javascript">';
     //   echo'alert("Success ");';
     //   echo'window.location.href="naewCart.php";';
     //   echo'</script>';
     // }
     // else

     // {
     //   echo'<script type="text/javascript">';
     //   echo'alert(" Fail! Failed");';
     //   echo'window.location.href="Purchase.php";';
     //   echo'</script>';
     // }

}
    }  



  
?>