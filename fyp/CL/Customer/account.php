
<!-- include('../config/connection.php');
//include('cust-nav.php');

// Initialize the session

  session_start();
  if(isset($_SESSION['customer']))
  { -->


 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Order History</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
      <a class="navbar-brand" href="home.php">Coffeeloca</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="home.php"><span class="glyphicon glyphicon-home"> Home</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Menu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="menu.php">All</a></li>
          <li><a href="menu-pasta.php">Pasta</a></li>
          <li><a href="menu-asiancuisine.php">Asian Cuisine</a></li>
          <li><a href="menu-beverages.php">Beverages</a></li>
        </ul>

        <!-- $count=0;
        if (isset($_SESSION['shopping_cart']))
        {

          $count=count($_SESSION['shopping_cart']);
        } -->


        <li class=""><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart (5)</a></li>
      </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="account.php">Profile</a></li>
          <li class=""><a href="history.php">Order History</a></li>
        </ul>
      </li>
      <li><a href="../login.php" onClick="return confirm('Are you sure?')">
          <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

         
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Profile</h3><br /> 
              
                <div style="clear:both"></div>  
                <br />  
                <h3></h3>

                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          

      
      <!-- //$username = $_POST["username"];
    //   $cust = mysqli_query($conn, "SELECT * FROM customer WHERE email='".$_SESSION["customer"]."'");
    //    $row=mysqli_fetch_array($cust);

    $query = ("SELECT * FROM customer where CustID='".$row["CustID"]."'");
                          $queryresult = mysqli_query($conn, $query);
                          //$orders = mysqli_fetch_array($query);

                          if (mysqli_num_rows($queryresult) > 0) 
                          {
                               while($profile = mysqli_fetch_array($queryresult))
                               {
                            -->
                    <tr>
                      <th>Name</th>
                    </tr>
                    <tr>
                      <td>John Doe</td>
                    </tr>
                    
                    <!-- tr>
                      <th>Address</th>
                    </tr>
                    <tr>
                      <td> echo $orders['Address']; ?></td>
                    </tr> -->
                    
                    <tr>
                      <th>Phone No</th>
                    </tr>
                    <tr>
                      <td>0123456789</td>
                    </tr>
                              
                    <tr>
                      <th>Address</th>
                    </tr>
                    <tr>
                      <td>Jusco Seremban 2 Shopping Centre 112 Persiaran S2 B1,<br> 22652 Selangor<br> Malaysia</td>
                    </tr>

                    <tr>
                      <th>Email</th>
                    </tr>
                    <tr>
                      <td>johndoe@mailnator.com</td></tr>
                    
                     
             
                     </table>  
                </div>
                 
                <br>
               

       
                
           </div>

           <div align="center"> 
          
           </div> 
           <br />  
      </body>  
 </html>

 
                

<!-- }
else {
  echo "<script>alert('Please Login');</script>";
  echo "<script>window.location.assign('../login.php')</script>";
} -->
