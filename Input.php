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
echo($_POST["username"].", You have been Logged in Successfully !!!");
echo "</h2>";
echo "</center>";
?>
<footer><h2><b>&reg; KJ HOSPITAL </b></h2>
<hr>
<div align="center"><a href="index.html"><h3 style="color:white;background-color:black;">Back To The Home Page</h3></a></div></footer>

</body>
</html>