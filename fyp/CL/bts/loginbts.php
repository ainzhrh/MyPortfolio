
<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: menu.php");
    exit;
}
 
// Include config file
require_once "connection.php";
 
// Define variables and initialize with empty values
$username = $CPassword = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["CPassword"]))){
        $password_err = "Please enter your password.";
    } else{
        $CPassword = trim($_POST["CPassword"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT CustID, username, CPassword FROM customer WHERE username = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $CPassword, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($CPassword, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["CPassword"] = $CPassword;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: menu.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($con);
}
?>


<html>
	<head>
		<title>Login</title>
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
				</div>

				 <div id="content-container" align="center" style="background-color:#161616" >
 <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="color: #f9cd01;background-color: #161616;padding:10px;height:550px" method="POST" >
    
        <h2 style="color: #f9cd01">Login</h2>

        <div class="inputBox">
        <label>Username : </label>
        <input type="text" name="username">
        </div>


        <div class="inputBox">
        <label>Password : </label>
        <input type="password" name="CPassword">
        </div>

        <button class="button" type="submit" name="Login">Login</button>
  </form>
</div>
								<div id="footer" style="background-color: black;color: #f9cd01">
 									Copyright © Ain Zahirah Abdul Karim, 2021
								</div>

					</div>
		</div>
	</body>
</html>



