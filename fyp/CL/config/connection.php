<?php
  
  $conn = new mysqli('localhost','root','','coffeeloca');
  if ($conn -> connect_error) 
  {
  	die("Connection Failed : " . $connect_error);
  }


  ?>