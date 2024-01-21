
 
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

        <li class=""><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> [2] Cart</a></li>
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
          <li class=""><a href="history.php">Order History</a></li>
        </ul>
      </li>
        <li><a href="logout.php" onClick="return confirm('Are you sure?')">
          <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

         
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Receipt</h3><br /> 
              
                <div style="clear:both"></div>  
                <br />  
                <h3></h3>

                  <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>
                               <th width="10%">Order ID</th>  
                               <!-- <th width="10%">Quantity</th>   -->
                               <th width="20%">Item Name</th>  
                               <!-- <th width="15%">Date Ordered</th>   -->
                               <th width="5%">Status</th>
                               <th width="5%">Details</th>
                               <!-- <th width="5%">Action</th>  -->
                               
                          </tr>


                         <tr>
                             

                         <td> </td>
                       
                         <td></td>
                             
                         <td></td>

                         <td><button onclick="location.href='details.php?id=';">Details</button> </td>

                  
                         
                         <?php
                              }
                         }
                         ?>

                         </tr>
                         
                     </table>  
                
               </form>
          </div>
                 
                <br>
              
                
           </div>

           <div align="center"> 
          
           </div> 
           <br />  
      </body>  
 </html>

 
