
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

                a
                {
                    text-decoration: none;
                    color: red;
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

           <div class="container" style="width:700px;">  
                <h3 align="center">Lists of Staff</h3><br /> 
                <form method="post" action="">
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> 
                <?php  
                ?>    

                <div style="clear:both"></div>   
           
                <div class="table-responsive">  
                    <form action="remove-staff.php" method="post">
                     <table class="table table-bordered">  
                          <tr>
                               <th width="10%">Staff ID</th>  
                               <!-- <th width="10%">Quantity</th>   -->
                               <th width="20%">Staff Name</th>  
                               <!-- <th width="15%">Date Ordered</th>   -->
                               <th width="5%">Position</th>
                               <th width="5%">Email</th>

                               <th width="15%">Action</th> 
                               
                          </tr>

                         <tr>
                             

                         <td> </td>
                         <td></td>
                             
                         <td></td>

                         <td></td>

                         <td align="center"><a href="remove-staff.php?id="onClick="return confirm('Are you sure to remove this staff?')">Remove Staff</a><br></td>
             

                         </tr>
                         
                     </table>  
                
               </form>  

                     </table>  
                

          </div>

                </div>
                 
              
      </body>  
 </html>


