<?php
$username="admin";
$password="root123";

session_start();

if(isset($_SESSION['username'])){
echo "<center>";
echo "<h2> Welcome @".$_SESSION['username']."</h2>";
echo "</center>";
}
else{
if($_POST['username']==$username && $_POST['password']==$password){

$_SESSION['username']=$username;

echo "<script>location.href='admin home.php'</script>";
}
else
{
echo "<script>alert('username or password incorrect !!!')</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
    background-image: url(adm.jpg);
    background-size:cover;
    background-repeat: no-repeat;
  font-family: Verdana, sans-serif;
}
h2
{
   color:#E0FFFF;
   display:inline-block;
   Padding:15px;
   background-color:#1E90FF;
   border:1px;
}

.Anchor{background-color:#E0FFFF;
border: 5px;
}
</style>
</head>
<body>
<br>
<br>

<center>
<h1 style="margin-center: 950px;
    font-family: 'Fjalla One', sans-serif;
    color:blue;">Admin Home</h1> </center>
</div>
</center>
<br>
<div class="Anchor">
<div align="center">
  <pre>  <a href="vaccine access.php"><h2>VACCINATION DETAILS </h2></a>     <a href="Booking Access.php"><h2>BOOKING DETAILS</h2></a>      <a href="Admin login.html"><h2>LOGOUT</h2></a>  </pre>
</div>
</div>

</body>