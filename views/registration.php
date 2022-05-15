<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="../views/css/registration.css">
</head>
<body>
<h1>Registration Form</h1>

<div class="registration-page">
	<div class="form">
		<form class="registration-form" action="../Controller/RegistrationAction.php" method="POST" novalidate enctype="application/x-www-form-urlencoded" onsubmit="return(validateForm (this));">
		<fieldset>
		<legend>Basic Information:</legend>
		<br>
		<label for= "firstname">First Name:</label>
		<input type="text" name="firstname" id="firstname">
		<span id="regerr1"></span>
		<br><br>
		<label for= "lastname">Last Name:</label>
		<input type="text" name="lastname" id="lastname">
		<span id="regerr2"></span>
		<br><br>
		<label>Gender:</label>
		<input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
		<input type="radio" name="gender" id="female" value="female"><label for="female">Female</label>
		<input type="radio" name="gender" id="other" value="other"><label for="other">Other</label>
		<br><br>
		<label for="dob">Date of Birth:</label>
	    <input type="date" name="dob" id="dob" > 
	    <span id="regerr3"></span>
	    <br><br>
	    <label for="religion">Religion:</label>
	    <select name="religion" id="religion">
	    	<option value="None"></option>
	    	<option value="islam">Islam</option>
	    	<option value="hindu">Hindu</option>
	    	<option value="buddha">Buddha</option>
	    	<option value="christian">Christian</option>
          </select>
	    	<br><br>
	    </fieldset>
<br> 
	<fieldset>
		<legend>Contact Information</legend>
		<br>
		<label for="present_address">Present Address:</label>
		<input type="text" name="present_address" id="present_address">
		<span id="regerr4"></span>
		<br><br>
        <label for="permanent_address">Permanent Address:</label>
		<input type="text" name="permanent_address" id="permanent_address">
		<span id="regerr5"></span>
		<br><br>
		<label for="tel">Phone:</label>
		<input type="text" name="tel" id="tel">
		<span id="regerr6"></span>
		<br><br>
		<label for="email">Email:</label>
		<input type="text" name="email" id="email">
		<span id="regerr7"></span>
	</select>
	<br><br>
	</fieldset>
	<br>
	<fieldset>
		<legend>Credentials</legend>
		<br>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<span id="regerr8"></span>
		<br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		<span id="regerr9"></span>
		<br><br>
		<label for="confirmpassword">Confirm Password:</label>
		<input type="password" name="confirmpassword" id="confirmpassword">
		<span id="regerr10"></span>
	</select>
	<br><br>
	</fieldset>
	<br>
	<div class="submit">
	<button>Submit</button>
	</div>

	<br>
	<div class="Back">
	<a href="../views/Login.php">Go Back</a>
	</div>
	<br>
</form>
</div>
</div>
<script src="../views/script/registration.js"></script>
</body>
<?php include('templates/footer.php') ?> 
</html>