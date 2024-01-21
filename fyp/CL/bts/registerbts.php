<?php
// Include config file
require_once "connection.php";
 
// Define variables and initialize with empty values
$username = $CPassword = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT username FROM customer WHERE username = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["CPassword"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["CPassword"])) < 8){
        $password_err = "Password must have atleast 8 characters.";
    } else{
        $CPassword = trim($_POST["CPassword"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($CPassword != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO customer (username, CPassword) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($CPassword, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
               echo '<script language="javascript">';
               echo 'alert("Successfully registered. Please update your profile information);';
               echo 'window.location.href="account.php";';
               echo '</script>';
            } 
            
            else
            {
                echo '<script language="javascript">';
               echo 'alert("Oops! Something went wrong, please try again");';
               echo 'window.location.href="register.php";';
               echo '</script>';
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
		<title>Menu</title>
			<link rel="stylesheet" type="text/css" href="cs.css">
			<link rel="stylesheet" type="text/css" href="dropdown.css">
			<style type="text/css">

body { 
  font: 14px sans-serif; 
}

.wrapper { 
  width: 350px; padding: 20px; 
}

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


				<div align="center" style="background-color:#161616;padding:10px;height:950px">
				<h2 align="center" style="color: #f9cd01">Menu</h2>
						
				<div class="wrapper">
        <h2 style="color: white">Sign Up</h2>
        <p style="color: white">Please fill this form to create an account.</p>

       <!-- class="form-control <?php //echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php //echo $password; ?>">
                <span class="invalid-feedback"><?php //echo $password_err; ?></span>-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<!--
          <div class="form-group">
                <label style="color: #f9cd01">Full Name</label>
                <input type="text" name="CustName" required>  
          </div>

           <div class="form-group">
                <label style="color: #f9cd01">Phone Number</label>
                <input type="text" name="phoneNo" required>  
            </div> 

            <div class="form-group">
                <label style="color: #f9cd01">E-Mail</label>
                <input type="text" name="email" required>  
            </div>  
-->            
            <div class="form-group">
                <label style="color: #f9cd01">Username</label>
                <input type="text" name="username" class="form-control <?php //echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php //echo $username; ?>">
                <span class="invalid-feedback"><?php //echo $username_err; ?></span>
            </div> 

            <div class="form-group">
                <label style="color: #f9cd01">Password</label>
                <input type="password" name="CPassword" required>
            </div>

            <div class="form-group">
                <label style="color: #f9cd01">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php //echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php //echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php //echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>

            <p style="color: white">Already have an account? <a href="login.php" style="color: white">Login here</a>.</p>

        </form>
    </div>    
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