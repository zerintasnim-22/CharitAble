<?php
session_start();
if ($_SESSION['username']==NULL) {
header("Location:../views/login.php");
  }
require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
<title>Manage Event</title>

<?php include("templates/header.php") ?>
<link rel="stylesheet" type="text/css" href="../views/css/ManageEvent.css">

	<br>
	<fieldset>
		<legend>Operation</legend>
			<br><br>
			<div class="tabs"> 
		<div class="tabs-container">
			<div class="tabs">
			<div class="tabs-container">
			<a href="../views/ViewEvent.php">View Event</a>
			<br><br>
			<a href="../views/CreateEvent.php">Create Event</a>		
			<br><br>
			<a href="../views/UpdateEvent.php">Update Event</a>
			<br><br>
			<a href="../views/DeleteEvent.php">Delete Event</a>
			<br><br>

			</div>
	</div>		
	</fieldset>

	<br>
	<div class='Back'>
	<a href="../views/Dashboard.php"><b>Go Back</b></a>
	</div>
	<br><br>

<?php include("templates/footer.php") ?>
</html>