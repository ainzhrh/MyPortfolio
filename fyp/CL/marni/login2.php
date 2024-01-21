<?php
  $connect = mysqli_connect("localhost", "root", "", "test");

  $Cust_Id = $_POST["Cust_Id"];
  $password = $_POST["Cust_Password"]; //amek from index.php

  $login = mysqli_query($connect, "SELECT * FROM customer WHERE Cust_Id='$Cust_Id' AND Cust_Password = '$password'");
  $row = mysqli_fetch_array($login);

  if(isset($row))
  {
    // $Role = $row['Role'];
    

    // if($Role=='customer')
    // {
      session_start();
      $_SESSION['Cust_Id']=$Cust_Id;
      session_write_close();
      echo '<script language="javascript">';
      echo 'alert("Login Success");';
      echo 'window.location.href="naewCart (1).php";';
      echo '</script>';
    //}

    // elseif ($Role=='admin') 
    // {
    //   session_start();
    //   $_SESSION['ICno'] = $ICno;
    //   session_write_close();
    //   echo '<script language="javascript">';
    //   echo 'alert("Login Success");';
    //   echo 'window.location.href="home-admin.php";';
    //   echo '</script>';
    // }
 }
  else
    {
      echo '<script language="javascript">';
      echo 'alert("Login Error");';
      //echo 'window.location.href="test.php";';
      echo '</script>';
    }

  mysqli_close($connect);

  ?>