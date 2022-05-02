<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "kjhosp"; 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
$sql ="INSERT INTO register (username,date,gender,email,phone,password) 
VALUES('$_POST[username]','$_POST[date]','$_POST[gender]','$_POST[email]','$_POST[phone]',md5('$_POST[password]'));"; 
if ($conn->multi_query($sql) == TRUE) { 
echo "Your data is recorded in DB successfully"; 
} else { 
echo "Error: " . $sql . "<br>" . $conn->error; 
}
 $conn->close(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup Message</title>
 <style>
h1{text-align: center}
h1{font-family:Impact; }
h2{font-family: Times New Roman}
h2,footer{text-align: center}
a {text-decoration:none;}

</style>
</head>
<body>

<div align="center">
<img src="Input.gif"; ></div>

<?php
echo "<center>";
echo "<h2>";
echo($_POST["username"].", You have been Registered in Successfully !!!");
echo "</h2>";
echo "</center>";
?>
<footer><h2><b>&reg; KJ HOSPITAL </b></h2>
<hr>
<div align="center"><a href="index.html"><h3 style="color:white;background-color:black;">Back To The Home Page</h3></a></div></footer>

</body>
</html>