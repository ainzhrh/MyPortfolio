<?php
  include('connection.php');

  $username = $_POST["username"];
  $CPassword = $_POST["CPassword"]; //amek from index.php
//$CustID = $_POST["CustID"];
  $login = mysqli_query($con, "SELECT * FROM customer WHERE username='$username' AND CPassword = '$CPassword'");
  $row = mysqli_fetch_array($login);

  if(isset($row))
  {
      session_start();
      $_SESSION['username']=$username;
      session_write_close();
      echo '<script language="javascript">';
      echo 'alert("Welcome '.$username.'!");';
      echo 'window.location.href="menu.php";';
      echo '</script>';
    }

   
  else
    {
      echo '<script language="javascript">';
      echo 'alert("Invalid username/password. Please try again");';
      echo 'window.location.href="login.php";';
      echo '</script>';
    }

  mysqli_close($con);

  ?>