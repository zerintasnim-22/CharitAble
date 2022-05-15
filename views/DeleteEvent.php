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
	<title>Delete Event</title>
	<link rel="stylesheet" type="text/css" href="../views/css/CreateEvent.css">
	<script type="text/javascript" src="script/DeleteEvent.js"></script>
	<?php include('templates/header.php'); ?>
</head>
<body>

<br><br>
	
	<h1>Delete Event</h1>
	<br>
	<form action="../controller/DeleteEventAction.php" method="POST" onsubmit="return validDeleteForm (this);">
	<fieldset>	
	<div class="center">	
					<br><br>
						<label for="ename">Event Name:</label>
						<br>
						<input type="text" name="ename" id="ename">
						<span id="del"></span>
						<br><br>

			<input type="submit" name="submit" value="Submit">
	</div>					
	</fieldset>

	<br><br>
	<div class='Back'>  
	<a href="../views/ManageEvent.php">Go Back</a> 
</div>
	</form>	
	<script src="../views/script/DeleteEvent.js"></script>
</body>
	
	<?php include('templates/footer.php'); ?>
	</html>