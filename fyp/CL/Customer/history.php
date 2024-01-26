
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Order History</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

           <style type="text/css">
                textarea
                {
                    resize: none;
                }

                
           </style>

           <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Coffeeloca</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="home.php"><span class="glyphicon glyphicon-home"> Home</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-menu-hamburger"></span> Menu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="menu.php">All</a></li>
          <li><a href="menu-pasta.php">Pasta</a></li>
          <li><a href="menu-asiancuisine.php">Asian Cuisine</a></li>
          <li><a href="menu-beverages.php">Beverages</a></li>
        </ul>
        <li class=""><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        
      </li>  
      </ul>

      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="account.php">Profile</a></li>
          <!-- <li><a href="#">Payment Information</a></li> -->
          <li class=""><a href="history.php">Order History</a></li>
          <!-- <li><a href="#">Wishlist</a></li> -->
        </ul>
      </li>
        <li><a href="logout.php" onClick="return confirm('Are you sure?')">
          <span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>

    </div>

  </div>

</nav>
   
      </head>  

      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Order History</h3><br /> 
                <form method="post" action="">
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> 
                <?php  
                ?>    

                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>

                <form method="post" action="">
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>
                               <th width="10%">Order ID</th>  
                               <!-- <th width="10%">Quantity</th>   -->
                               <th width="20%">Address</th>  
                               <!-- <th width="15%">Date Ordered</th>   -->
                               <th width="5%">Status</th>
                               <th width="5%">Subtotal</th>

                               <!-- <th width="5%">Action</th>  -->
                               
                          </tr>


                         <tr>
                             

                         <td>489FDFCDS65</td>
                             <!--  <td></td> -->
                             <td>Jusco Seremban 2 Shopping Centre 112 Persiaran S2 B1,<br> 22652 Selangor<br> Malaysia</td>
                             
                         <td>PENDING</td>

                         <td>RM 78.00</td>
                         
               

                         </tr>
                         
                     </table>  
                
               </form>

               
                <form method="post" action="">
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                         <tr>   

                <div style="clear:both"></div>  
               <h3>Completed Order</h3>
                <form method="post" action="">
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>
                               <th width="10%">Order ID</th>  
                               <th width="20%">Item</th>
                               <th width="20%">Address</th> 
                               <!-- <th width="5%">Quantity</th>
                               <th width="5%">Price</th> -->
                               <th width="5%" >Status</th>
                               <!-- <th width="5%" >Details</th> -->

                    
                               
                          </tr>


                         <tr>
                             
                         <td>232323XNFJSHBR</td>
                         
                         <td>Chocolate Cake</td>
                         
                         <td>Jusco Seremban 2 Shopping Centre 112 Persiaran S2 B1,<br> 22652 Selangor<br> Malaysia</td>
                        <!--  <td></td>
                             
                         <td></td> -->

                         <td>DELIVERED</td>

                         <!-- <td><button onclick="location.href='details.php?id=">Details</button></td> -->


                         </tr>

                        

                      

                     </table>  
                
               </form>
          </div>

                </div>
                 
              
      </body>  
 </html>

   <?php  
                //      }  
                // }  
                ?> 
