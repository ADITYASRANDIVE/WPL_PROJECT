
<!DOCTYPE html>
<html>
<head>

<style>
</style>
 <link rel="stylesheet" type="text/css" href="style1.css">
 <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<script>
function login() {
  alert("Login Form Loaded Successfully !!!");
}


function validateForm() {
  let x = document.forms["log"]["username"].value;
  if (x == "") {
    alert("Error !!! No Name Found \n Please Enter Username");
    return false;
  }
function Blur() {
  let a = document.forms["log"]["username"].value;
  a.value = a.value.toUpperCase();
}

 let y = document.forms["log"]["password"].value;
  if (y == "") {
    alert("Password Cannot be Empty");
    return false;
  }
else if(y.length<8){  
  alert("Password must be at least 8 characters long \n Please Re-Enter Your Password");  
  return false;  
  }

if(x != "" && y != "")
{
alert("You are Successfully Logged in !!!!");
}

}

function color(z) {
  z.style.background = "HotPink";
}
</script>

</head>
<body onload="login()">
<div class="header">
  	<h2>Login</h2>
  </div>
<form name="log" form action="cookies.php" method="post" onsubmit="return validateForm()">
<center>
  <div class="imgcontainer">
    <img src="login.png" alt="Login Photo" class="Login Photo" width="250" height="250">
  </div>
<br>
</center>
  <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" 
  	</div>
<br>
<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" onfocus="color(this)">
  	</div>
<br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
<center>
<div class="input-group">
  	  <button type="submit" class="btn" name="login">Login</button>
	<button type="reset" class="btn" name="reset">Reset</button>
  	</div>
</center>
<br>
<div align="center"><a href="forgot.html"><h4>Forgot Password?</h4></a></div> 
<br>
 <div align="center"><a href="register.html"><h4>Dont Have an Account? Register Now</h4></a></div> 

</form>
<br>
<div align="center"><a href="index.html"><h3 style="color:black;background-color:#DCDCDC;">Back To The Home Page</h3></a></div></footer>

</body>
</html>