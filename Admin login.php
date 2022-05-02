<!DOCTYPE html>
<html>
<head>

<style>
</style>
 <link rel="stylesheet" type="text/css" href="style1.css">
 <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<script>


</script>
</head>
<body>
<?php
// define variables and set to empty values
$usernameErr = $passwordErr = "";
$username = $password ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["username"])) {
$usernameErr = "Name is required";
} else {
$uname = test_input($_POST["username"]);
}
}

 
if (empty($_POST["password"])) {
$pswErr = "Password cannot be empty";
} else {
$psw = test_input($_POST["password"]);
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data); return $data;
}
?>

<div class="header">
  	<h2>Login</h2>
  </div>
<form name="adm" form action="Booking access.php" method="post" onsubmit="return validate()">
<center>
<br>
 <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
<br>
<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
<br>
<div class="input-group">
  	  <button type="submit" class="btn" name="login">Login</button>
	<button type="reset" class="btn" name="reset">Reset</button>
  	</div>

</center>
<br>

</form>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center"><a href="index.html"><h3 style="color:black;background-color:#DCDCDC;">Back To The Home Page</h3></a></div></footer>

</body>
</html>