

<!DOCTYPE html>
<head>
  <title>Coffeeloca</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 


  <style>
 /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  body
  {
  	max-height: 2000%;
  }
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .jumbotron {
    background-image: url("../img/background.jpg");
  background-size: cover;
  }
  footer {
  text-align: center;
  padding: 3px;
  background-color: #222222;
  color: white;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: center;
  width: 55%;
  padding: 0 0px;
  text-decoration: none;
  text-decoration-color: black;
  color: black;
}

/* Remove extra left and right margins, due to padding in columns */
.row {
  /*margin: 0 0px;*/

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 10px;
  text-decoration: none;
  text-decoration-color: black;
  color: black;
  width: 100%;
  text-align: center;
  background-color: #f1f1f1;
}

a{
  text-decoration: none;
  text-decoration-color: black;
  color: black;
}

a:hover
{
   text-decoration: none;
  color: darkslategrey;
}
/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
 
  </style>
</head>
<body >

<div class="jumbotron text-center" id="h1" style="margin-bottom:0">

  <h1 style="color: white; font-size: 100px; -webkit-text-stroke-width: 2px;-webkit-text-stroke-color: black">Coffeeloca</h1>
 
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home-sys.php">Coffeeloca</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="home-sys.php">Home</a></li>
        <li class=""><a href="dashboard.php">Dashboard</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Menu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="menu.php">All</a></li>
          <li><a href="admin-pasta.php">Pasta</a></li>
          <li><a href="admin-asiancuisine.php">Asian Cuisine</a></li>
          <li><a href="admin-beverages.php">Beverages</a></li>
        </ul>
      </li>

       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Report
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="annualsales.php">Annual Sales</a></li>
          <li><a href="month-to-month_sales.php">Month-To-Month Sales</a></li>
          <li><a href="top-product.php">Top 3 Product Sold</a></li>
          <li><a href="totalProductSold.php">Total Product Sold</a></li>
        </ul>
      </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">Profile</a></li>

        </ul>
      </li>
        <li><a href="logout.php" onClick="return confirm('Are you sure?')">
          <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<!--Start of 3x2 grid-->
<br>
<div class="container" style="padding-left: 22%;">
<div class="row">

  <div class="col-sm-4">

  <div class="card">
   <a href="annualsales.php">

      <span class="glyphicon glyphicon-usd"></span> 
      <h3>Earnings in 2021 </h3>
      <p>RM 1000</p>
      </a>
    </div>
</div>

<div class="col-sm-4" align="">
<div class="card">
  <a href="month-to-month_sales.php">
   

      <span class="glyphicon glyphicon-usd"></span> 
      <h3>Earnings for 5  </h3>
      <p>RM 200</p>  
  </a>
</div>
</div>
</div>

<br>
<div class="row">
  <div class="col-sm-4" align="">
    <div class="card">

      <span class="glyphicon glyphicon-user"></span> 
      <h3>Total Customers</h3>
      <p>30</p>
    </div>
 </div>

 <div class="col-sm-4" align="">
<div class="card">
    <a href="staff-list.php">

      <span class="glyphicon glyphicon-user"></span> 
      <h3>Total Staff</h3>
      <p>60
     </p>
    </a>
 </div>
</div>

</div>

<br>
<div class="row">
  <div class="col-sm-4" align="">
    <div class="card">

      <span class="glyphicon glyphicon-ok"></span> 
      <h3>Completed Orders</h3>
      <p>200
                                             </p>
    </div>
</div>

 <div class="col-sm-4" align="">
    <div class="card">

      <span class="glyphicon glyphicon-list-alt"></span> 
      <h3>Pending Orders</h3>
      <p>6</p>
  </div>
  </div>

  </div>     
  <!--End of 3x2 grid-->    
</div>

</body>
</head>
<br>
<br>
<br>
<br>
<br>
<footer>
  <h5>Copyright <span class="glyphicon glyphicon-copyright-mark">Ain Zahirah Binti Abdul Karim </h5>
    </footer>
</html>

