<!DOCTYPE html>
<html>
<head>
<title>Booking Access
</title>
<style>
h1{text-align: center}
h1{font-family: Andika New Basic; }
h3{font-family: Times New Roman}
h2,footer{text-align: center}
a {text-decoration:none;}
 body{background-image: url("bt1.jpg");
 background-size:cover;
  background-repeat: no-repeat;}
</style>
<script>
      function printFunction() { 
        window.print(); 
      }
    </script>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kjhosp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username,address,test,date,timeslot,phone FROM booking";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


// output data of each row
while($row = $result->fetch_assoc()) {
echo "<h3>";
echo "<br> Name: ". $row["username"] ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Address : ". $row["address"]."&nbsp;&nbsp;&nbsp; Test : ".$row["test"]."&nbsp;&nbsp;&nbsp; Date : ".$row["date"]."&nbsp;&nbsp;&nbsp; Timeslot : ".$row["timeslot"]."&nbsp;&nbsp;&nbsp; Phone : ".$row["phone"]. "<br>";
echo "</h3>";}
} else {
echo "0 results";
}

$conn->close();
?>

<button onclick="printFunction()">Save As PDF</button>​
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer><h2><b>&reg; KJ HOSPITAL </b></h2>

<div align="center"><a href="index.html"><h3 style="color:white;background-color:black;">Back To The Home Page</h3></a></div></footer>

</body>
</html>