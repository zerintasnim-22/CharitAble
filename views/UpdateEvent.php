<?php
session_start();
if ($_SESSION['username']==NULL) {
header("Location:../views/login.php");
  }

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Events</title>
    <link rel="stylesheet" type="text/css" href="../views/css/CreateEvent.css">
	<script type="text/javascript" src="script/UpdateEvent.js"></script>
	<?php include('templates/header.php')  ?>
	<br><br>
	<h1>Update Event</h1>

	</head>


<body>
	


	<fieldset>		
		<br>
			<div class="search">
				<form action="../controller/SearchAction.php" method="GET" onsubmit="validateEventSearch(this); return false;">
					<div class="center">
					<input type="text" name="s" id="s">
					<span id="errh"></span>
					<input type="submit" name="submit" value="search">
					<span id="hint"></span>



				</form>
			</div>

			<br><br><br><br>
<form action="../controller/UpdateEventAction.php" method="POST" novalidate enctype="application/x-www-form-urlencoded" onsubmit="return validupdate(this);">

			<label for="ename">Event Name:</label>
			
			<input type="text" name="ename" id="ename">
			<span id="uperr1"></span>

			<br><br>
			<label for="etype">Event Type:</label>
	        <select name="etype" id="etype">
	        	
	    	    <option value="fund">Fund Raising</option>
	    	    <option value="sports">Sports</option>
	    	    <option value="seminar">Seminar</option>
	    	    <span id="uperr2"></span>

	    	    

	    	</select>
			
			<br><br>

			<label for="doe">Date of Event</label>
			<input type="date" name="doe" id="doe" value="doe">
			<span id="uperr3"></span>


			<br><br>
			
            <label for="efee">Entry Fee:</label>
	        <select name="efee" id="efee">
	        	<option value="select">Select</option>
	    	    <option value="200">200</option>
	    	    <option value="500">500</option>
	    	    <option value="1000">1000</option>
	    	    <span id="uperr4"></span>

	    	</select>
			<br><br>

			
			<input type="submit" name="submit" value="Submit">
			<a href="">
</div>
			</fieldset>

			<br><br>
			<div class='Back'>  
			<a href="../views/ManageEvent.php">Go back</a>
		</div>

    
    </form>
<script src="../views/script/UpdateEvent.js"></script>
</body>
	<?php include('templates/footer.php')  ?>
</html>