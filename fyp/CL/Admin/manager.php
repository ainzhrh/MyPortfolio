<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Safyra Hair Salon</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../css/style.css" rel="stylesheet">
<!-- 	<link rel="stylesheet" href="mystyle.css" type="text/css"> -->

</head>
<style type="text/css">

	.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: poppins;
  margin: 0;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.2);
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
  background-color:cornsilk;
}

.dropdown:hover .dropdown-content {
  display: block;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}
img {
   float: left;
}
/* Float four columns side by side */
.column {
  float: left;
  width: 80%;
  padding: 0 10px;
  margin-left: 160px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: lightpink;
  margin-bottom: 30px;
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
<body>
	<div class="box-area">
		<header>
			<?php
      //  					$id = $_SESSION["staff"];
						// $ic = mysqli_query($conn, "SELECT * FROM staff WHERE Staff_email='".$_SESSION["staff"]."'"); 
						// $row = mysqli_fetch_array($ic);
       				?>
			<div style="width: 1400px;" class="wrapper">
				<div class="logo">
					<a href="#">Safyra Hair Salon</a>
				</div>

				<nav>
			<a href="manager.php">Home</a> <a href="staff_record.php">staff</a> <a href="manager_schedule.php">schedule</a> <a href="report.php">report</a> <a href="manager_profile.php">profile</a>  <a href="../logout.php" onclick="return confirm('Are You Sure?')">Logout</a>
          <div class="dropdown">
    <button class="dropbtn">service
      <i class="fa fa-caret-down"></i>
    </button>
          <div class="dropdown-content">
             <a href="manager_hair_color.php">Hair Color</a>
             
            <a href="manager_hair_cut.php">Hair Cut</a>
            <a href="manager_treatment.php">Treatement</a>
        </div>
      </div>
        <div class="dropdown">
    <button class="dropbtn">promotion
      <i class="fa fa-caret-down"></i>
    </button>
          <div class="dropdown-content">
             <a href="manager_student.php">Student Package</a>
            <a href="manager_combines.php">Combine Services</a>



        </div>
				</nav>
			</div>
		</header>
		<div class="banner-area">
			<h2 style="font-size: 40px">Welcome Admin: !</h2>
		</div>
		<div class="content-area">
			<div class="wrapper">
				<br><br><br>
				<div class="row">
					<div class="column">
						<div class="card">
                                      
<h2>RM 2000</h2>
<p style="font-size: 30px">Sales of This Month</p>
			</div>

				<div class="card">

	                                         
<h2>5 Appointment</h2>
<p style="font-size: 30px">Today's Appointment</p>
			</div>

		<div class="card">
                                 
<h2>RM 3000</h2>
<p style="font-size: 30px">Today's Income</p>
			</div>

</div>
</div></div>
	</div>
</body>
</html>
