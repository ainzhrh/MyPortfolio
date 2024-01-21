<?php
  include('connection.php');

  $username = $_POST["username"];
  $SPassword = $_POST["SPassword"]; //amek from index.php

  $login = mysqli_query($con, "SELECT * FROM staff WHERE username='$username' AND SPassword = '$SPassword'");
  $row = mysqli_fetch_array($login);

 if(isset($row))
  {
    $SPosition = $row['SPosition'];
    
    if($SPosition=='Manager')
    {
      session_start();
      $_SESSION['username']=$username;
      session_write_close();
      echo '<script language="javascript">';
      echo 'alert("Login Success");';
      echo 'window.location.href="home-sys.php";';
      echo '</script>';
    }

    else
    {
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['SPosition'] = $SPosition;
      session_write_close();
      echo '<script language="javascript">';
      echo 'alert("Login Success");';
      echo 'window.location.href="home-staff.php";';
      echo '</script>';
    }
 }
  else
    {
      echo '<script language="javascript">';
      echo 'alert("Login Error");';
      echo 'window.location.href="loginstaff.php";';
      echo '</script>';
    }


  mysqli_close($con);

  ?>