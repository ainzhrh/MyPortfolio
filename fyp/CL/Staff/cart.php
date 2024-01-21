
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Cart</title>  
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
        <li class=""><a href="#">Home</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Menu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="menu.php">All</a></li>
          <li><a href="menu-pasta.php">Pasta</a></li>
          <li><a href="menu-asiancuisine.php">Asian Cuisine</a></li>
          <li><a href="menu-beverages.php">Beverages</a></li>
        </ul>
        <li class=""><a href="cart.php">Cart</a></li>
      </li>
        <!-- <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="account.php">Profile</a></li>
          <li><a href="#">Payment Information</a></li>
          <li><a href="#">Wishlist</a></li>
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
                <h3 align="center">Cart</h3><br />  

   
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>
                               <th width="10%">ID</th>  
                               <th width="40%">Product Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
 
                          <tr>
                               <td></td>  
                               <td></td>  
                               <td></td>  
                               <td>RM </td>  
                               <td>RM </td>  
                               <td><a href="cart.php?action=delete&ProductID="><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                     
                          <tr>  
                               <td colspan="4" align="right">Total</td>  
                               <td align="right">RM 50</td>  
                               <td></td>  
                          </tr>  
                     
                     </table>  
                </div> 
                <br>
                <h3>Delivery Details</h3>
                <form method="post" action="cart.php?action=add&ProductID=">
  
                <div>
                    <label value="" readonly>CustID : </label>
                     <label>Name: <input type="text" name="CustName" value="" readonly/></label>
                     <br>
                     <label>Address: <input type="text" name="Address" value="" /></label>
                     <br>
                     <label>Delivery Method: <input type="text" name="Delivery Method" value="" /></label>
                </div>
               
                </form>
           </div>

           <div align="center"> 
           <button type="submit" name="purchase">Purchase</button>
           </div> 
           <br />  
      </body>  
 </html>

