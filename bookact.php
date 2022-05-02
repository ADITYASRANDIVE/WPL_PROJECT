<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "kjhosp"; 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
$sql ="INSERT INTO booking (username,address,test,date,timeslot,phone,gender) 
VALUES('$_POST[username]','$_POST[address]','$_POST[test]','$_POST[date]','$_POST[timeslot]','$_POST[phone]','$_POST[gender]')";  
if ($conn->multi_query($sql) == TRUE) { 
echo "Your data is recorded"; 
} else { 
echo "Error: " . $sql . "<br>" . $conn->error; 
}
 $conn->close(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Message</title>
 <style>
h1{text-align: center}
h1{font-family: Andika New Basic; }
h2{font-family: Times New Roman}
h2,footer{text-align: center}
a {text-decoration:none;}
 body{background-image: url("op1.jpg");
background-size:cover;
  background-repeat: no-repeat;
}

</style>
<script>
      function printFunction() { 
        window.print(); 
      }
    </script>
</head>
<body>

<div align="center">
<br>
<br>
<br>
<br>
<h1>Your Blood Test Slot has been booked Successfully !!!</h1>
<p><h2>
<?php

echo "<h2>";
echo("Greetings , ".$_POST["username"]);
echo "<br>";
echo "<br>";
echo("Your Address : ".$_POST["address"]);
echo "<br>";
echo "<br>";
echo("Test: ".$_POST["test"]);
echo "<br>";
echo "<br>";
echo("Home Visit Date : ".$_POST["date"]);
echo "<br>";
echo "<br>";
echo("Home Visit Timeslot : ".$_POST["timeslot"]);
echo "<br>";
echo "<br>";
echo("Phone Number: ".$_POST["phone"]);
echo "<br>";
echo "<br>";
echo "</h2>";


echo "</center>";
?>

<button onclick="printFunction()">Save As PDF</button>​

<footer><h2><b>&reg; KJ HOSPITAL </b></h2>
<hr>
<div align="center"><a href="index.html"><h3 style="color:white;background-color:black;">Back To The Home Page</h3></a></div></footer>

</body>
</html>