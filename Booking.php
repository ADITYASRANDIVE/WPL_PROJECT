<!DOCTYPE html>
<html>
<head>
  <title>Blood Test Booking</title>
  <link rel="stylesheet" type="text/css" href="style5.css">
<link href='https://fonts.googleapis.com/css?family=DM Serif Text' rel='stylesheet'>

<script>
function validateform()
{  
var name=document.book.username.value;
var address=document.book.address.value; 
var Date = document.book.date.value; 
var male=document.book.gender[0].checked;
var female=document.book.gender[1].checked;
var other=document.book.gender[2].checked;


  
if (name==null || name==""){  
  alert("Error !!! No Name Found \n Name can't be empty/null");  
  return false;  
}

if (address==null || address==""){  
  alert("Error !!! No Address Written.\n Address Field can't be empty/null");  
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

}
</script>
</head>
<body>
<hr>
  <div class="header">
  	<h2>Blood Test Booking</h2>
  </div>
	
  <form name="book" form method="post" action="bookact.php" onsubmit="return validateform()">
  	
  	<div class="input-group">
  	  <label>Full Name </label>
  	  <input type="text" name="username" value="Enter Name">
  	</div>
<br>
<div class="input-group">
  	  <label>Address </label>
  	  <input type="text" name="address" value="Enter Address">
  	</div>
<br>
<div class="input-group">
 <label for="Test">Choose a Test</label>
  <select name="test" id="test">
    <option value="COVID ANTIBODY TOTAL- ELISA 250"> COVID ANTIBODY TOTAL- ELISA / Rs. 250</option>
    <option value="ANTI HEPATITIS B CORE ANTIGEN (AHBC) 450"> ANTI HEPATITIS B CORE ANTIGEN (AHBC) / Rs. 450</option>
    <option value="FULL BODY CHECKUP 999"> FULL BODY CHECKUP / 999RS</option>
    <option value="CBC 1999"> CBC / 1999RS</option>
    <option value=" DETAILED DIABETIS 579"> DETAILED DIABETIS / 579RS</option>
    <option value="HEART DETAILED 4500"> HEART DETAILED  / 4500RS</option>
    <option value="JAUNDICE-HEPATITIS TEST 2000"> JAUNDICE-HEPATITIS TEST  / 2000RS</option>
    <option value=" RTPCR COVID TEST 800"> RTPCR COVID TEST  / 800RS</option>
    <option value="KIDNEY DETAILED TEST 1800"> KIDNEY DETAILED TEST  / 800RS</option>
    <option value="THYRIOD TEST 1500"> THYRIOD TEST  / 800RS</option>
  </select>
</div>

<br>
	<p>Date</p>
 	<input type="date" name="date" placeholder="dd-mm-yyyy" value="dd-mm-yyyy">
  	</div>
<br>
<br>
<div class="input-group">
 <label for="Timeslot">Choose a Timeslot</label>
  <select name="timeslot" id="timing">
    <option value="8 - 9 AM">  8 - 9 AM</option>
    <option value="9 - 10 AM">  9 - 10 AM</option>
    <option value="10 - 11 AM"> 10 - 11 AM</option>
    <option value="11 - 12 PM"> 11 - 12 PM</option>
    <option value="12 - 1 PM"> 12 - 1 PM</option>
    <option value="1 - 2 PM"> 1 - 2 PM</option>
    <option value="2 - 3 PM"> 2 - 3 PM </option>
    <option value="3 - 4 PM"> 3 - 4 PM </option>
    <option value="4 - 5 PM"> 4 - 5 PM </option>
  </select>
</div>
  <br>
<br>
<div>
<label for="phone">Phone Number:</label><br>
  <input type="tel" id="phone" name="phone" placeholder="1234567890" pattern="[0-9]{10}" required>
</div>
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
<center>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Book</button>
	<button type="reset" class="btn" name="reset">Reset</button>
  	</div>
</center>  	
  </form>
<hr>
</body>
</html>
 