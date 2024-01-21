

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Order History</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
        <li class=""><a href="home-staff.php">Home</a></li>
        
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Menu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="menu.php">All</a></li>
          <li><a href="staff-pasta.php">Pasta</a></li>
          <li><a href="staff-asiancuisine.php">Asian Cuisine</a></li>
          <li><a href="staff-beverages.php">Beverages</a></li>
        </ul>
      </li>

      <li class=""><a href="orders.php">Order List</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">Profile</a></li>
          <!-- <li><a href="#">Payment Information</a></li>
          <li><a href="#">Wishlist</a></li> -->
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
                <h3 align="center">Order Details</h3><br /> 
               <!--  <form method="post" action="purchase.php"> -->
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          
                <div style="clear:both"></div>  
                <br />  
               

                <!-- <form method="post" action="orders.php"> -->
                <div class="table-responsive">  
                  <div>

                    <label>Customer: </label>
                    <br>
                    <label>Address: </label>
                     <br>
                    <label>Phone No:</label>
                    <?php
                         //      }
                         // }
                         ?>
                  </div>
                     <table class="table table-bordered">  
                          <tr>
                            <!-- <th width="10%">Order ID</th> -->
                               <!-- <th width="10%"></th>   -->
                              <!--  <th width="20%">Address</th>   -->
                               <th width="15%">Item</th>
                                <th width="2%" style="text-align:center">Quantity</th> 
                                <th width="2%" style="text-align:center">Price</th> 
                               <!-- <th width="5%">Status</th> -->
                              <!--  <th width="15%">Order Date</th>
                               <th width="15%">Order Time</th> -->
                               <!-- <th colspan="2" style="text-align:center;">Action</th> -->
                             
                          </tr>

                        

                         <tr>
             
                              <td></td>
                              <td style="text-align:center"></td>
                              <td style="text-align:center">RM 60</td>
                            </tr>
                           
                       
            
                          <tr>
                              <td colspan="2" align="right">Grand Total</td> 
            
                               <td align="center">RM 50</td>
                            </tr>
                             
                     </table>  
                </div>
                 
                <br>
               

       
                
           </div>

           <div align="center"> 
          
           </div> 
           <br />  
      </body>  
 </html>

