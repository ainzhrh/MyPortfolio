<?php

include ('connection.php');

?>
<html>
  <head>
    <title>Staff Login</title>
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

  <form action="login-staff.php" style="color: #f9cd01;background-color: #161616;padding:10px;height:550px" method="POST" >
    
        <h2 style="color: #f9cd01">Login</h2>

        <div class="inputBox">
        <label>Username : </label>
        <input type="text" name="username">
        </div>


        <div class="inputBox">
        <label>Password : </label>
        <input type="password" name="SPassword">
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