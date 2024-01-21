
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Menu</title>  
           
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
        <li class=""><a href="index.php"><span class="glyphicon glyphicon-home"> Home</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="menu-public.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Menu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="menu.php">All</a></li>
          <li><a href="menu-pasta.php">Pasta</a></li>
          <li><a href="menu-asiancuisine.php">Asian Cuisine</a></li>
          <li><a href="menu-beverages.php">Beverages</a></li>
        </ul>
    
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">
          <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Menu</h3><br />  

                
                <div class="col-md-4">  
                     <form method="post" action="login.php">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">


                               <h4 class="text-info">test1</h4>

                               <!--display price-->
                               <h4 class="text-danger">RM 21</h4>

                               <input type="number" name="quantity" class="form-control" value="1" min="1" max="10" />

                               <input type="hidden" name="hidden_name" value="Name" />

                               <input type="hidden" name="hidden_price" value="Price" />

                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" href="login.php" onClick="return confirm('To order, please login first')" />  
                          </div>  
                     </form>  
                </div>  
     
                <div style="clear:both"></div>  
                <br />   
               
                <br>
               
           </div>

          
           <br />  
      </body>  
 </html>

