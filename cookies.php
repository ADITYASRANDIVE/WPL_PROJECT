<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$conn = new mysqli
($servername, $username, $password,'kjhosp'); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
$sql ="INSERT INTO login(username,password) 
VALUES('$_POST[username]',md5('$_POST[password]'));"; 
if ($conn->multi_query($sql) == TRUE) { 
echo ""; 
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
echo "<h2>";
echo("Welcome !!! , ".$_POST["username"]);
echo("<br>");
echo("<br>");
echo("<br>");
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 500);
	setcookie ("password",$_POST["password"],time()+ 500);
	echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}


echo "</h2>";
?>

<footer><h2><b>&reg; KJ HOSPITAL </b></h2>
<hr>
<div align="center"><a href="index.html"><h3 style="color:white;background-color:black;">Back To The Home Page</h3></a></div></footer>

</body>
</html>

