<?php   
 session_start();  
 require 'config/connection.php';
 //if (isset($_SESSION['Cust_Id']) && isset($_SESSION['Cust_Password'])) {
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="naewCart.php"</script>';  
                }  
           }  
      }  
 }  

 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>CHOCOJERR ORDER CART DETAILS</title>  
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
             
           </script>  
           <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
/*  width: 30%;
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
        <li><a href="naewCart.php">ORDER CHOCOJERR</a></li>
        <?php 

        $count=0;
        if (isset($_SESSION['shopping_cart']))
        {

          $count=count($_SESSION['shopping_cart']);
        }


         ?>
        <li><a href="myCart.php"  class="fas fa-shopping-cart" >MY CART(<?php echo $count;?>)</a></li>
        <li><a href="Logout.php">LOGOUT</a></li>
      </ul>

  </header>
           <br />   

                <div style="clear:both"></div>  
                <br />  
                <h3 style="text-align: center;">ORDER DETAILS</h3>  <p></p>
                <div class="table-responsive">  
                     <table class="table table-bordered" style="width: 70%;" align="center">  
                          <tr> 
                               <th width="15%">Product Id</th>  
                               <th width="15%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="10%">Price</th>  
                               <th width="10%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>
                          <form method='post' action='Purchase.php'>
                            <td><?php echo $values["item_id"]; ?></td> 
                                 
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>RM <?php echo $values["item_price"]; ?></td>  
                               <td>RM <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="naewCart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]); 
                                   
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">RM <?php echo number_format($total, 2); ?></td>  
                             <!--  <td><button class="btn" type="submit" name="submit" value="submit">PURCHASE</button></td>
 -->

                          </tr>  
                          <?php  
                          }  
                          ?>                               

                     </table>  
                </div>  
           </div>  
           <br />  
            </div> 
                  <div class="header">
                    <h2>ORDER DETAILS</h2>
                  </div>

                   <?php

               $cust = mysqli_query($con, "SELECT * FROM customer WHERE email='".$_SESSION["customer"]."'");
               $row=mysqli_fetch_array($cust);
                    ?>

                  <form style="align-self: center;" align="center" method="post" enctype="multipart/form-data" action="myCart.php" >    

                    <div class="input-group" >
                       <label >CUSTOMER ID</label>
                      <?php echo $row['CustID'];?> 
                    </div>
                    <div class="input-group">
                      <label>ADDRESS</label>
                      <!-- <input  type="text" name="Address"> -->
                      <textarea style="font-family: 'Open Sans', san-serif; font-size: 16px;  width: 96%;text-transform: uppercase;" rows="4" cols="50" name="Address"></textarea>
                    </div>
                    <!-- <div class="input-group" >
                      <label>DELIVERY METHOD</label>
                      <input  type="text" name="Cust_Name">
                    </div> -->
                    <div style="text-align: center;">
                      <button type="submit" class="btn" name="purchase_btn">PURCHASE</button>
                    </div>               
              </form>                
  
  </form>


      </body>  


      <?php 
// } 
// else{
//   header("Location: CustomerLogin.php");
//         exit();
// }
?>
 