<?php   
 session_start();  
  require 'config/connection.php';
 
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["Product_Id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["Product_Id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                echo '<script>alert("Item Added")</script>';  
                echo '<script>window.location="naewCart.php"</script>'; 
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="naewCart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["Product_Id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  


      }  

     

 }  
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
           <title>CHOOCOJERR ORDER</title>  
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
        <li><a href="#">LOGOUT</a></li>
      </ul>

  </header>
           <br />  
           <div class="container" style="width:950px;">  
                <h3 align="center">CHOCOJERR ORDER PAGE</h3><br />  
               <?php
        require 'config/connection.php';
            $query = "SELECT * FROM product ORDER BY Product_Id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-4">

                        <form method="post" action="naewCart.php?Product_Id=<?=$row['Product_Id']?>">

                            <div class="product">
                                <?php echo '<img src="data:image;base64,'.base64_encode($row['Product_Image']).'"alt="Image" style="width: 200px; height:150px;  >"';?><p>
                                  <h5 class="text-info"><?php echo $row["Product_Id"]; ?></h5>
                                <h5 class="text-info"><?php echo $row["Product_Name"]; ?></h5>
                                <h5 class="text-danger">RM<?php echo $row["Product_Price"]; ?>.00</h5>
                                <input type="number" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["Product_Name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["Product_Price"]; ?>">
                                <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

               
           <br />  
      </body>  
 </html>