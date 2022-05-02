<?php if(isset($_FILES['image'])){
$errors= array();
$file_name = $_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
$expensions= array("jpeg","jpg", "png"); if(in_array($file_ext, $expensions) === false) {
$errors []="extension not allowed, please choose a JPEG or PNG file.";
}
if($file_size > 2097152) {
$errors[]='File size must be excately 2 MB';
}
if(move_uploaded_file($file_tmp, "images/" .$file_name))
{
 echo "Success"; 
}
else{
echo "Error"; 
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration and Sign-up Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Eczar' rel='stylesheet'>
<script>  
function validateform(){  
var name=document.Reg.username.value;  
var password=document.Reg.password.value;  
var password2=document.Reg.password1.value; 
var male=document.Reg.gender[0].checked;
var female=document.Reg.gender[1].checked;
var other=document.Reg.gender[2].checked;
var Date = document.Reg.date.value;
  
if (name==null || name==""){  
  alert("Error !!! No Name Found \n Name can't be empty/null");  
  return false;  
}

if ( Date== null || Date== '')
{
    alert('Date of Birth Should not be empty \n Please Enter your Date of Birth');
    return false;
} 

if (male==false && female==false && other==false)
{
alert("Please choose your Gender! [ Male or Female or Other ] ");
return false;
}

if(password.length<8){  
  alert("Password must be at least 8 characters long.");  
  return false;  
  }
  else if(password != password2) 
{
 alert("Password doesn't match!");  
  return false;  
  }
}

</script>  
</head>
<body>
<hr>

  <div class="header">
  	<h2>Registration</h2>
  </div>
	
  <form name="Reg" form method="post" action="dba.php" onsubmit="return validateform()">
  	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="Enter Name" onkeypress="myFunction()">
  	</div>
<br>
	<p>Date of Birth</p>
 	<input type="date" name="date" placeholder="dd-mm-yyyy" value="dd-mm-yyyy">
  	</div>
<br>
<br>
	<p> Gender</p>
  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label><br>
  <input type="radio" id="others" name="gender" value="Others">
  <label for="others">Others</label>
<br>
<br>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="Enter Email">
  	</div>
<br>
<label for="phone">Phone Number:</label><br><br>

  <input type="tel" id="phone" name="phone" placeholder="1234567890" pattern="[0-9]{10}" required><br><br>
<br>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
<br>
<br>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password1">
  	</div>
<br>
 <center> 	
<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
	<button type="reset" class="btn" name="reset">Reset</button>
  	</div>
</center>  	
  </form>
<hr>
</body>
</html>