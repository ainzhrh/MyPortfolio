<!-- include('../config/connection.php');


// Initialize the session

  session_start();
  if(isset($_SESSION['customer']))
  {

?>

    
}
else {
  echo "<script>alert('Please Login');</script>";
  echo "<script>window.location.assign('../login.php')</script>";
} -->

<!DOCTYPE html>
<html lang="en">
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
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .jumbotron {
    background-image: url("../img/background.jpg");
  background-size: cover;
  }
.container h1
{
  animation: color-change 3s infinite;

}

@keyframes color-change 
{
  0% { color: red; }
  50% { color: black; }
  100% { color: red; }
}

  footer {
  text-align: center;
  padding: 3px;
  background-color: #222222;
  color: white;
}
 
  </style>
</head>
<body>

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
<!-- 
        $count=0;
        if (isset($_SESSION['shopping_cart']))
        {

          $count=count($_SESSION['shopping_cart']);
        } -->


         
        <li class=""><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> [php echo $count;] Cart</a></li>
      </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="account.php">Profile</a></li>
         <!--  <li><a href="#">Payment Information</a></li> -->
          <li class=""><a href="history.php">Order History</a></li>
        </ul>
      </li>
        <li><a href="logout.php" onClick="return confirm('Are you sure?')">
          <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:30px">
  <div class="row" height="500px">
    <div class="col-sm-4">
      <h1>Announcements</h1>
      <h3>Payment Method</h3>
      
      <p>For this time being, we only accept Cash-On-Delivery. We apologize for the incovenience. Thank you for your understanding.</p>
      
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>ABOUT US</h2>
      <h3>Dedicated to Quality</h3>
      <p>We pride ourselves on providing organic, fair trade tea and coffee. We work with local dairy suppliers and bakeries to source the freshest, highest quality offerings. </p>

      <h3>Stay Awhile</h3>
      <p>Sunny days guarantee that our patio will be full of guests enjoying a drink or treat. On not-so-sunny days, we also offer comfortable seating inside our cafe with free wifi and plenty of outlets! </p>

      <h3>More than Drinks</h3>
      <p>Although we offer a wide variety of hot and iced drinks, we also provide savory and sweet food options. So whether you're stopping for your morning coffee, lunch, an afternoon snack or even dinner, we've got you covered!</p>
 
      <h2>Contact Us</h2>
      <div id="googleMap" style="width:100%;height:600px;">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.523827516663!2d101.57480104931828!3d2.9520335551479175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb125de63bdb1%3A0x5df59888cea1ae52!2sCoffeeloca!5e0!3m2!1sen!2smy!4v1624380103555!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<h4>Coffeeloca</h4>
<p>NO 25-G, JALAN SP1/1, Bandar Saujana Putra, 42610 Jenjarom, Selangor, Malaysia</p>

<p>Email: enquiry@coffeeloca.com</p>

<br>

<h4>Operation Hours</h4>
<p>Monday - Sunday: 10am - 10pm</p>

</div>

     
    </div>
  </div>
</div>

<br>
<br>
<br>
<!-- <div class="jumbotron text-center" style="margin-bottom:0"> -->
  <footer>
  <h5>Copyright <span class="glyphicon glyphicon-copyright-mark">Ain Zahirah Binti Abdul Karim </h5>
    </footer>
<!-- </div> -->

</body>
</html>
