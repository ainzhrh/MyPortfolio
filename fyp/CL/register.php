
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register Account</title>
  <style type="text/css">
  body {
  margin: 0;
  padding: 0;
  font-family : sans-serif;
  font-size: 20px;
  background: var(color-grey);
  background-image: linear-gradient(
      115deg,
      rgba(157,160,168, 0.3),
      rgba(168,108,108, 0.4)
    ),
    url(img/background.jpg);
  background-size: cover;
 
}

.box
{
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 500px;
  padding: 40px;
  background-color: rgba(192,192,192,0.9);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.7);
  border-radius: 10px;
  
}

#title
{ 
  margin: 0px 0 20px;
  padding: 0px 0;
  color: black;
  text-align: center;
}

#description {
  font-family: Londrina Solid;
  text-align: center;
  font-style: italic;
  padding: 5px;
  color: #d7c9ac;
   text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  
}

.box .inputBox
{
  position: relative;
}

.box .inputBox input 
{
  width: 90%;
  padding: 10px 0;
  font-size: 16px;
  color: black;
  margin-bottom: 15px;
  border: none;
  border-bottom: 1px solid black;
  outline: none;
  background: transparent;
  
}
.box .inputBox label
{
  color: black;
}

button
{
  background: transparent;
  border: none;
  outline: none;
  color: #fff;
  background: #4791d0;
  margin: auto;
  padding: 10px 30px;
  cursor: pointer;
  border-radius: 5px;
}

 button:hover {
    animation-name: background-color;
    animation-duration: 500ms;
    animation-fill-mode:forwards ;
    
  }
  @keyframes background-color {
    100% {
      background-color: #03a9f4;
    }
  }

  h3{
    color: black;
  }
a 
{
  color: black; 
  text-decoration: none;

}

</style>
<link href="https://fonts.googleapis.com/css?family=Londrina+Solid" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="box">
   <form action="register.php" style="" method="POST" >
    
        <h2 align="center">Register</h2>

        <div class="inputBox">
        <label>Full Name : </label>
        <input type="text" name="CustName" oninvalid="alert('Please fill up the details!');" pattern=".{8,}" title="Please enter your full name" required>
        </div>

        <div class="inputBox">
        <label>Address : </label>
        <input type="text" name="Address" pattern=".{8,}" title="Please enter your full address" required>
        </div>

        <div class="inputBox">
        <label>Phone No. : </label>
        <input type="text" name="PhoneNo" pattern="[0]{1}[1]{1}[0-9]{4}[0-9]{4}" title="0123456789" required>
        </div>

        <div class="inputBox">
        <label>E-Mail : </label>
        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="255">
        </div>

        <div class="inputBox">
        <label>Password : </label>
        <input type="password" name="CPassword" pattern=".{8,}" title="Your password must be eight or more characters" required>
        </div>

<div align="center">
        <button class="button" type="submit" name="register">Register</button>
      </div>
  </form>
    
</div>

</body>
</html>
      </main>
