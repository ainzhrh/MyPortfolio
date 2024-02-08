
<html>
  <head>
    <title>Home</title>
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
        <li class=""><a href="#">Home</a></li>
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
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="account.php">Profile</a></li>
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
  <body >

    <div class="container" style="width:700px;">  
                <h3 align="center">Menu</h3><br />
                <div align="center">
             
              <button class="button" onclick="location.href='insert-menu.php';"><a >Insert new menu</a></button>
              <br>
              <br>

              </div>

                <div class="col-md-4">  
                   <!--   <form method="post" action="update-menu.php?id=<?php //echo $row['ProductID']?>';">   -->
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">

                          


                               <h4 class="text-info"></h4>

                               <!--display price-->
                               <h4 class="text-danger">RM 10</h4>
    


                               <button onclick="location.href='update-menu.php?id=5';">Update</button> 
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />   
               
                <br>
               
           </div>

          
           <br />  
      </body>  
 </html>


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
