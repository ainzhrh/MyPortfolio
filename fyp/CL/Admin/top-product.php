<?php
  include('../config/connection.php');
  session_start();
  //if user enter this page without login success, jump back to login page
  if(isset($_SESSION['admin']))
  {

?>

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

    <div class="col-sm-8 text-left">
      <h2>Top 3 Products Sold</h2>

  <form method="POST" action="top-product.php">
   <div class="input-group">
    <select name="product_year" required>
    <option>Year</option>
    <?php $results = mysqli_query($conn, "SELECT year(OrderedTime) as Year, OrderedTime FROM order_details GROUP BY year(OrderedTime)"); ?>
    <?php while ($row = mysqli_fetch_array($results)) { ?>  
    <option value="<?php echo $row['Year'];?>">
      <?php echo $row['Year']; ?>
    </option>

   <?php } ?>
    </select>
    <select name="product_month" required>
    <option>Month</option>
    <?php $results = mysqli_query($conn, "SELECT MonthName(OrderedTime) as Month,  year(OrderedTime) as Year FROM order_details GROUP BY month order by Month(OrderedTime)"); ?>
    <?php while ($row = mysqli_fetch_array($results)) { ?>  
    <option value="<?php echo $row['Month'];?>">
      <?php echo $row['Month']; ?>
    </option>

     
     <?php } ?>   
    </select>
    </div>
    <div class="input-group">
    <select name="category" required>
    <option>Category</option>
    <?php $results = mysqli_query($conn, "SELECT * FROM product GROUP BY category"); ?>
    <?php while ($row = mysqli_fetch_array($results)) { ?>  
    <option value="<?php echo $row['category'];?>">
      <?php echo $row['category']; ?>
    </option>
    <?php } ?>  
    </select>
    <!-- <button type="submit" class="button_view" name="product_sales"><b>View</b></button> -->
    <button type="submit" class="button_rm" name="product_unit"><b>In Units</b></button>
    
    </div>
  </form>
  <form method="POST" action="top-product-rm.php">
    <input type="button" class="button_unit" name="product_RM" onclick="location.href='top-product-rm.php'" value="In RM"><b></b></button>
  </form>
  <br>
    </div>

    

  </div>
</div>
<?php
  if (isset($_POST['product_unit'])) 
  {
    $product_year = $_POST['product_year'];
    $product_month = $_POST['product_month'];
    $category = $_POST['category'];
    //include('annual_sales.php');

  $dataPoints = array();        
  $link = new \PDO(   'mysql:host=localhost;dbname=coffeeloca;charset=utf8mb4','root','', 
            array(
              \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              \PDO::ATTR_PERSISTENT => false
            )
          );
  $handle = $link->prepare("SELECT p.name, p.category, SUM(o.Qty) AS totalUnitSold FROM product p JOIN order_details o ON p.ProductID= o.ProductID WHERE year(o.OrderedTime)='$product_year' and MonthName(o.OrderedTime)='$product_month' and p.category='$category' GROUP BY p.name ORDER BY totalUnitSold desc limit 3");

  
  $handle->execute(); 
  $result = $handle->fetchAll(\PDO::FETCH_OBJ);
    
 foreach($result as $row){
    array_push($dataPoints, array("label"=> $row->name, "y"=> $row->totalUnitSold));
    
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
    text: "Top 3 Product Sold for "+<?php echo json_encode($category); ?>+" in "+<?php echo json_encode($product_month); ?>+" "+<?php echo json_encode($product_year); ?>,
    fontColor: "#666666",
    fontFamily: "arial",
    fontStyle: "bold",
    margin: 50,
  },
  data: [{
    type: "column",
    yValueFormatString: " #,## units",
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
<br>
<br>
<footer>
  <h5>Copyright <span class="glyphicon glyphicon-copyright-mark">Ain Zahirah Binti Abdul Karim </h5>
    </footer>
</html>


<?php
    
}
else {
  echo "<script>alert('Please Login');</script>";
  echo "<script>window.location.assign('../login.php')</script>";
}
?>
