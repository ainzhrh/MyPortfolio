<?php
include('connection.php');

// Initialize the session

  session_start();
  if(isset($_SESSION['SPosition']))
  {

?>

<?php
    
}
else {
  echo "<script>alert('Please Login');</script>";
  echo "<script>window.location.assign('loginstaff.php')</script>";
}
?>
<html>
  <head>
    <title>Home</title>
      <link rel="stylesheet" type="text/css" href="cs.css">
      <link rel="stylesheet" type="text/css" href="dropdown.css">
      <style type="text/css">
        .navbar {
  width: 100%;
  background-color: #f9cd01;
  overflow: auto;
}

.navbar a {
  float: right;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.navbar a:hover {
  background-color: #f9cd01;
}

.active {
  background-color: #f9cd01;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

.dropdown-content {

  position: absolute;
  background-color: white;
  min-width: 80px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #f9cd01;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.inputBox
{
  position: relative;
}

.inputBox input 
{
  width: 20%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 15px;
  border: none;
  border-bottom: 1px solid #eee;
  outline: none;
  background: transparent;
  
}

.inputBox label

{
  color: #f9cd01;
}

table a:link, a:visited {
  
  color: black;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
      </style>
      
  </head>
  <body style="background-color:black">
    <div id="wrapper">
      <div id="header" style="background-color: black">
        <h1 align="center" style="color: #f9cd01">Coffeeloca</h1>
      </div>

      
          <div class="navbar" style="background-color: #f9cd01">
  
<a href="logout-staff.php" onClick="return confirm('Are you sure?')"><i class="fas fa-sign-out-alt"></i>Logout</a>
  <div class="dropdown">
    <button class="dropbtn">Menu 
      <i class="fa fa-caret-down"></i>
    </button>
    
    <div class="dropdown-content">
      <a href="staff-pasta.php">Pasta</a>
      <a href="staff-asiancuisine.php">Asian Cuisine</a>
      <a href="staff-beverages.php">Beverages</a>
    </div>
    </div>

 
  
  <a class="" href="about-us.php"><i class="fa fa-fw fa-home"></i>Home</a> 
  
</div>
        </div>

        <div align="center" style="background-color:#161616;padding:10px;height:950px">
       
        <h2 align="center" style="color: #f9cd01">Home</h2>
        <h2 class="my-5" style="color: #f9cd01">Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h2>

         <div align="center">
             
              <button class="button" onclick="location.href='insert-menu.php';"><a >Insert new menu</a></button>
              </div>
            
              <h3 align="center" style="color: #f9cd01" >Come quench your thrist and satisfy your cravings with our spectaculous menu!</h3>
            
        <table align="center" style="border: 1px #f9cd01;color: #f9cd01">
                  <tr>
                    <th>Menu</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    

                    <th></th>

                    </tr>

                 
                  <?php

      $conn = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($conn, 'coffeeloca');

      $query = "SELECT * FROM product where category='Pasta'";
      $query_run = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_array($query_run)) 
      {
        ?>
        <tr>
        
          <td><?php echo '<img src="data:image;base64,'.base64_encode($row['img']).'" alt="image" style="width:200px; height:150px;">'; ?> </td>-
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td><?php echo $row['info']; ?></td>
          <td><?php echo $row['qty']; ?></td>

          <td><button onclick="location.href='update-menu.php?id=<?php echo $row['ProductID']?>';">Update</button></td>
           
        </tr>

        <?php
      }

      ?>
              </table>
              <br>
              <div align="center">
             
             
              </div>
              <br>
            </div>
              
                <div id="footer" style="background-color: black;color: #f9cd01">
                  Copyright © Ain Zahirah Abdul Karim, 2021
                </div>
          </div>
    </div>
  </body>
</html>
