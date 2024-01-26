
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Menu - Pasta</title>  
           
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

        <li class=""><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart (5)</a></li>
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
                <h3 align="center">Pasta</h3><br />  

                <div class="col-md-4">  
                     <form method="post" action="menu.php?action=add&ProductID=">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                               <h4 class="text-info"></h4>
                               <img src="../img/carbonara beef.jpeg" alt="image" style="width:170px; height:150px;">
                                                              <h4 class="text-danger">RM 15</h4>

                               <input type="number" name="quantity" class="form-control" value="1" min="1" max="10" />

                               <input type="hidden" name="hidden_name" value="+" />

                               <input type="hidden" name="hidden_price" value="+" />

                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" onclick="alert('Item has added into cart')" />  
                          </div>                          <br>                    

                  <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                  <img src="../img/beef bolognese.jpeg" alt="image" style="width:170px; height:150px;">

                               <h4 class="text-info"></h4>
                               <!--display price-->
                               <h4 class="text-danger">RM 16</h4>

                               <input type="number" name="quantity" class="form-control" value="1" min="1" max="10" />

                               <input type="hidden" name="hidden_name" value="+" />

                               <input type="hidden" name="hidden_price" value="+" />

                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" onclick="alert('Item has added into cart')" />  
                          </div>  
                     </form>  
                </div>  
                <div class="col-md-4">  
                     <form method="post" action="menu.php?action=add&ProductID=">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                          <img src="../img/carbonara.jpeg" alt="image" style="width:170px; height:150px;">

                               <h4 class="text-info"></h4>
                               <!--display price-->
                               <h4 class="text-danger">RM 17</h4>

                               <input type="number" name="quantity" class="form-control" value="1" min="1" max="10" />

                               <input type="hidden" name="hidden_name" value="+" />

                               <input type="hidden" name="hidden_price" value="+" />

                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" onclick="alert('Item has added into cart')" />  
                          </div>                              <br>                    
                        <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                        <img src="../img/prawnpesto.jpeg" alt="image" style="width:170px; height:150px;">

                               <h4 class="text-info"></h4>
                               <!--display price-->
                               <h4 class="text-danger">RM 18</h4>

                               <input type="number" name="quantity" class="form-control" value="1" min="1" max="10" />

                               <input type="hidden" name="hidden_name" value="+" />

                               <input type="hidden" name="hidden_price" value="+" />

                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" onclick="alert('Item has added into cart')" />  
                          </div>  
                     </form>  
                </div>  
                <div class="col-md-4">  
                     <form method="post" action="menu.php?action=add&ProductID=">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                               <h4 class="text-info"></h4>
                               <img src="../img/cappucino.jpg" alt="image" style="width:170px; height:150px;">

                               <!--display price-->
                               <h4 class="text-danger">RM 19</h4>

                               <input type="number" name="quantity" class="form-control" value="1" min="1" max="10" />

                               <input type="hidden" name="hidden_name" value="+" />

                               <input type="hidden" name="hidden_price" value="+" />

                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" onclick="alert('Item has added into cart')" />  
                          </div>                               <br>                    
                       <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                               <h4 class="text-info"></h4>
                               <!--display price-->
                               <img src="../img/cofe.jpg" alt="image" style="width:170px; height:150px;">

                               <h4 class="text-danger">RM 20</h4>

                               <input type="number" name="quantity" class="form-control" value="1" min="1" max="10" />

                               <input type="hidden" name="hidden_name" value="+" />

                               <input type="hidden" name="hidden_price" value="+" />

                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" onclick="alert('Item has added into cart')" />  
                          </div>  <br>
                     </form>  
                </div>                                               
                                                           
             
                <div style="clear:both"></div>  
                <br />   
               
                <br>
               
           </div>

          
           <br />  
      </body>  
 </html>

