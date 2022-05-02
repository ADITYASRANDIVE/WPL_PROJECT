<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if(!$conn)
die("Connection failed".mysqli_connect_error());
else
//echo "Successfully connected with database";
$query = "CREATE DATABASE kjhosp";
if (mysqli_query($conn, $query)) {
echo "Database created successfully with the name kjhosp";
} else {
echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>