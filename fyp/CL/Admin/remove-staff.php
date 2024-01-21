<?php
include('../config/connection.php');
//include('cust-nav.php);

// Initialize the session

 
?>

<?php

  //$staffID = $_GET['StaffID'];

  $query = mysqli_query($conn,"DELETE FROM staff WHERE StaffID='$_REQUEST[id]'");
    //$query = ("DELETE FROM staff WHERE StaffID= '.$_REQUEST[id].' ");

    if ($query) //keluarkan pop up to indicate success
    {
      echo '<script language="javascript">';
      echo 'alert("Successfully removing this staff.");';
      echo 'window.location.href="staff-list.php";';
      echo '</script>';
    } 

    else
    {
      echo '<script language="javascript">';
      echo 'alert("Failed to remove this staff. Please try again.");'; //mysqli_error($conn) will tell what the error is
      echo 'window.location.href="staff-list.php";';
      echo '</script>';

    }

    mysqli_close($conn);


  ?>
