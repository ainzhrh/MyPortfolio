

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
 
  </style>
</head>
<body height="2000px">

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
          <li><a href="../Staff/staff-pasta.php">Pasta</a></li>
          <li><a href="../Staff/staff-asiancuisine.php">Asian Cuisine</a></li>
          <li><a href="../Staff/staff-beverages.php">Beverages</a></li>
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


<div class="container-fluid text-center">
  <div class="row">
    <br>
    <form method="POST" action="totalProductSold.php">
      <label>Filter: </label> <select name="category">
    <option>Category</option>

    <option value="Option1">

    </option>
    </select>
    <button type="submit" class="button_view" name="filter"><b>View</b></button>
    </form>

  <br><br>

  </div>
</div>
<?php
  if (isset($_POST['filter'])) 
  {
    $category = $_POST['category'];
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
$link = new \PDO(   'mysql:host=localhost;dbname=coffeeloca;charset=utf8mb4','root','',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
  
    $handle = $link->prepare("SELECT order_details.ProductID, sum(order_details.Qty) as Total_Sold, product.name as Name FROM order_details JOIN product on product.ProductID = order_details.ProductID and product.category='$category' group by order_details.ProductID"); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
    
    foreach($result as $row)
    {
        array_push($dataPoints, array("label"=> $row->Name, "y"=> $row->Total_Sold));
    }
  $link = null;
}

catch(\PDOException $ex){
    print($ex->getMessage());
}
  }
?>
</body> 
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "light1", 
  title:{
    text: "Total Products ("+<?php echo json_encode($category); ?>+") Sold"
  },
  data: [{
    type: "column", 
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br>
<br>
<footer>
  <h5>Copyright <span class="glyphicon glyphicon-copyright-mark">Ain Zahirah Binti Abdul Karim </h5>
    </footer>


<?php
    
}
else {
  echo "<script>alert('Please Login');</script>";
  echo "<script>window.location.assign('../login.php')</script>";
}

?>
</body>
</html>   
