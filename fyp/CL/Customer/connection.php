<?php
  
  $con = new mysqli('localhost','root','','cl');
  if ($con -> connect_error) 
  {
  	die("Connection Failed : " . $connect_error);
  }


  ?>