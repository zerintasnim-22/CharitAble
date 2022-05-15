<?php
session_start();
if ($_SESSION['username']==NULL) {
header("Location:../views/login.php");
  }
?>
<!DOCTYPE html> 
 
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="../views/css/Dashboard.css">
<?php include('templates/header.php') ?> 
<h1>Dashboard</h1> 
<body>
<div class="dashboard">
	<div class="form">
<fieldset> 
	<legend>Operations</legend> <br><br>
	<div class="tabs"> 
		<div class="tabs-container">
		<a class="tabs-item" href="../views/ViewProfile.php">View Profile</a> <br><br>  
		<a class="tabs-item" href="../views/ManageEvent.php">Manage Event</a> <br><br>
		<a class="tabs-item" href="../views/ManageFinance.php">Manage Finance</a> <br><br>
		<a class="tabs-item" href="../views/ViewFeedback.php">View Feedback</a> <br><br> 
		<a class="tabs-item" href="../views/logout.php">Logout</a> <br><br> 
		</div> 
	</div>
</fieldset> 
</div>
</div>
</body>
<br><br>
<?php include('templates/footer.php') ?> 
</html>