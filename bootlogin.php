<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connected.php';
    $Username = $_POST["username"];
    $Password = $_POST["password"]; 
    

    $sql = "Select * from register where Username='$Username' AND Password='$Password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Username'] = $Username;
        header("location: booking.php");

    } 
    else{
        $showError = "Invalid Credentials";
    
}}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 140%;
  background-image: url(hospreg.jpg);
   background-size:cover;
  background-repeat: no-repeat;
}

.header {
  width: 50%;
  margin: 50px auto 0px;
  color: black;
  background:#EE82EE;
  text-align: center;
  border: 0.5px solid black;
 font-family: 'Fjalla One', sans-serif;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 50%;
  margin: 0px auto;
  padding: 20px;
  font-family: 'Fjalla One', sans-serif;
 border: 0.5px solid black;
 
  background: white;
  border-radius: 0px 0px 10px 10px;
}

input-group {
  margin: 10px 0px 10px 0px;
}
input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
button[name="login"]:hover {
    background-color: #32CD32;
    font-weight: bold;
}

button[name="reset"]:hover {
    background-color: #FF0000;
    font-weight: bold;

#btnlogin,
#btnClear{
    display: inline-block;
    vertical-align: top;
}
}

</style>
</head>
<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Login</li>
  </ol>
</nav>
<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong><p> You are logged in</p>
        
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        
    </div> ';
    }
    ?>
<div class="header">
  	<h2>Login</h2>
  </div>

<form>
<br>
  <div class="form-group row">
    <label for="input" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input" placeholder="Username">
    </div>
  </div>
<br>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div> 
  </fieldset>
<br>
<div class="row">
    <div class="col-sm-12 text-center">
        <button id="btnlogin" class="btn btn-primary btn-md center-block" Style="width: 100px;" OnClick="btnSearch_Click" >Login</button>
         <button id="btnClear" class="btn btn-danger btn-md center-block" Style="width: 100px;" OnClick="btnClear_Click" >Reset</button>
     </div>
</div>
<br>
</form>