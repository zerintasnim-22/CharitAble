<?php
session_start();
if ($_SESSION['username']==NULL) {
header("Location:../views/login.php");
  }
require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
	<?php include('templates/header.php')  ?>
	<title>Create Event</title>
	<link rel="stylesheet" type="text/css" href="../views/css/CreateEvent.css">
	<br><br>
	<h1>Create Event Form</h1>	
	<form action="../controller/CreateEventAction.php" method="POST" novalidate enctype="application/x-www-form-urlencoded" onsubmit="return(validateForm (this));">

	<fieldset>
	<div class="center">		
		<br>

			<label for="ename">Event Name:</label>
			<input type="text" name="ename" id="ename">
			<span id="ceerr1"></span>

			<br><br>
			<label for="etype">Event Type:</label>
	        <select name="etype" id="etype">
	        	<option value="fund_raising">Fund Raising</option>
	    	    <option value="sports">Sports</option>
	    	    <option value="seminar">Seminar</option>
	    	</select>
	    	<span id="ceerr2"></span>
			
			<br><br>

			<label for="doe">Date of Event</label>
			<input type="date" name="doe" id="doe" value="doe">
			<span id="ceerr3"></span>

			<br><br>
            
            <label for="efee">Entry Fee:</label>
	        <select name="efee" id="efee">
	    	    <option value="200">200</option>
	    	    <option value="500">500</option>
	    	    <option value="1000">1000</option>
	    	</select>
			<span id="ceerr4"></span>
	
            <br><br>
			<input type="submit" name="submit" value="Submit">
			<a href="">
			</div>
			</fieldset>
			<div class='Back'>  
			<a href="../views/ManageEvent.php">Go back</a>
		</div>

	</form>
<script src="../views/script/CreateEvent.js"></script>
<?php include('templates/footer.php') ?>
</html>