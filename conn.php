<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "kjhosp"; 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}
?>