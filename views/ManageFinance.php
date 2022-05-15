<?php
session_start();
if ($_SESSION['username']==NULL) {
header("Location:../views/login.php");
  }

?>
<!DOCTYPE html>
<html>
<title>Manage Finance</title>
<link rel="stylesheet" type="text/css" href="../views/css/ManageEvent.css">
<?php include("templates/header.php") ?>
<body>
<h1>Manage Finance</h1>
<fieldset>
		<legend>Operation</legend>
			<br><br>
			<div class="tabs">
			<div class="tabs-container">
			<a href="../views/AddDonation.php">Add Donation Information</a>
			<br><br>
			<a href="../views/ViewDonation.php">View Donation Information</a>		
			<br><br>
			</div>
	</div>		
	</fieldset>
<br><br>
<div class="Back">
<a href="../views/Dashboard.php">Go Back</a>
</div>
<br>
<?php include('templates/footer.php')  ?>
</html>