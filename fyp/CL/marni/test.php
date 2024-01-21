<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="Cake/logo.png" type="" sizes="16x16" >
	<link rel="stylesheet" href="bake.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--  -->
	<title>The Konditerskaya Bake Shop</title>
	
</head>
<body>
	<div class="mid">
		<div class="header">
			<table border="0" width="40%" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td align="right" width="30%"><img src="Cake/logo.png" alt="logo"></td>
					<td width="2%"></td>
										
					<td ><h1>Welcome To The Konditerskaya Bake Shop</h1></td>
				</tr>
			</table>
		</div>
		<div class="content">
			<table class="login" border="0" width="25%" align="center" cellpadding="0" cellspacing="0">
				<tr align="center">
					<td></td>
					<td><h1>Login</h1></td>
				</tr>
				<!-- Target Page Function Login.php  -->
				<form action="login2.php" method="post">
				<tr align="center">
					<td></td>
					<td>
						<div class="input-container">
						    <i class="fa fa-user icon"></i>
						    <input class="input-field" type="text" placeholder="IC no." name="Cust_Id" required="required" autofocus>
						</div>
					</td>
				</tr>
				<tr align="center">
					<td></td>
					<td>
						<div class="input-container">
						    <i class="fa fa-key icon"></i>
						    <input class="input-field" type="password" placeholder="Password" name="Cust_Password" required="required">
						</div>
					</td>
				</tr>
				<tr align="center">
					<td></td>
					<td><input class="btn" type="submit" name="submit" value="Login"></td>
				</tr>
				</form>
			</table><br>
			<center><b>No account?</b> <a href="registration.php">Sign up now!</a></center>
			<br><br>
		</div>

		
		<div class="footer"> &#854900; <i class="far fa-registered"></i> The Konditerskaya Bake Shop<br>
				We are open from 0900 - 2200<br>
				<br>
				Contact us at : 0176470755<br>
		</div>
	</div>
</body>
</html>
