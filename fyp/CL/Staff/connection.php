<?php
  
  $conn = new mysqli('localhost','root','','cl');
  if ($conn -> connect_error) 
  {
  	die("Connection Failed : " . $connect_error);
  }


  ?>