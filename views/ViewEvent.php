<?php
	session_start();
	if ($_SESSION['username']==NULL) {
	header("Location:../views/login.php");
	  }
	require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
	<title>View Event</title>
	<?php include('templates/header.php');?>

	<link rel="stylesheet" type="text/css" href="../views/css/ViewEvent.css">

	<br><br>
	<body>
		
	
	<form action="" method="POST" novalidate enctype="application/x-www-form-urlencoded">
	
		<div class='background'>
		<br>
		<legend><b>View Events Information</b></legend>		
				
		<?php

		$query = "SELECT ename, etype, doe, efee FROM event";
		$result = mysqli_query($conn, $query);
		?>
		<table border ="1" cellspacing="0" cellpadding="10">
		  <tr>
		    <th>Serial No</th>
		    <th>Event Name</th>
		    <th>Event Type</th>
		    <th>Date of Event</th>
		    <th>Event Fee</th>
		  </tr>
		<?php
		if (mysqli_num_rows($result) > 0) {
		  $sn=1;
		  while($data = mysqli_fetch_assoc($result)) {
		 ?>
		 <tr>
		   <td><?php echo $sn; ?> </td>
		   <td><?php echo $data['ename']; ?> </td>
		   <td><?php echo $data['etype']; ?> </td>
		   <td><?php echo $data['doe']; ?> </td>
		   <td><?php echo $data['efee']; ?> </td>
		 <tr>
		 <?php
		  $sn++;}} else { ?>
		    <tr>
		     <td colspan="8">No data found</td>
		    </tr>

		 <?php } ?>
		 </table>

	</div>
	
	<div class='Back'>  
	<a href="../views/ManageEvent.php">Go Back</a>
</div>
	
</body>
	<?php include('templates/footer.php')  ?>
</html>