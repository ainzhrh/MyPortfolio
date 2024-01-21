
<html>
  <head>
    <title>Menu</title>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      
  </head>
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
  <body>
    <div align="center">
   <h1 style="">New Menu Info</h1>



   <form action="" method="POST" enctype="multipart/form-data" style="padding:10px;height:550px">
      
<div align="center">      

      <div class="inputBox">
      <label>Choose an image</label>
      <input type="file" name="img" id="image" required />
      </div>

      <br>

      <div class="inputBox">
      <label>Menu: </label>
      <input type="text" name="name" placeholder="Product name" pattern=".{8,}" title="Please enter product's full name (min.8 characters)" required />
      </div>

      <br>


      <div class="inputBox">
      <label>Price: RM </label>
      <input type="number" name="price" step="any" min="2" required />
      </div>

      <br>


      <div class="inputBox">
      <label>Category: </label>
      <select name="category" required>
        <option>Pasta</option>
        <option>Asian Cuisine</option>
        <option>Beverages</option>
      </select>
      </div>

      <br>

      <br>


      <button class="button" type="submit" name="upload">Insert</button>

      
    </form>
</div>
</div>
<br>
<br>
<div id="footer" style="background-color: white;color: black" align="center">
                  Copyright © Ain Zahirah Abdul Karim, 2021
                </div>
          </div>
    </div>
  </body>
</html>


        
