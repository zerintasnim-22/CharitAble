<?php
	session_start();
	if ($_SESSION['username']==NULL) {
	header("Location:../views/login.php");
	  }
	require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
	<title>View Donation Information</title>
	<?php include('templates/header.php');?>

	<link rel="stylesheet" type="text/css" href="../views/css/viewDonation.css">

	<br><br>
	<body>
			
	<form action="" method="POST" novalidate enctype="application/x-www-form-urlencoded">

		<div class='background'>
		<br>
		<legend><b>View Donation Information</b></legend>		
				
		<?php

		$query = "SELECT donerName, DonationDate, DonationAmount FROM donation";
		$result = mysqli_query($conn, $query);
		?>
		<table border ="1" cellspacing="0" cellpadding="10">
		  <tr>
		    <th>Serial No</th>
		    <th>DONER NAME</th>
		    <th>DONATION DATE</th>
		    <th>DONATION AMOUNT</th>
		  </tr>
		<?php
		if (mysqli_num_rows($result) > 0) {
		  $sn=1;
		  while($data = mysqli_fetch_assoc($result)) {
		 ?>
		 <tr>
		   <td><?php echo $sn; ?> </td>
		   <td><?php echo $data['donerName']; ?> </td>
		   <td><?php echo $data['DonationDate']; ?> </td>
		   <td><?php echo $data['DonationAmount']; ?> </td>
		 <tr>
		 <?php
		  $sn++;}} else { ?>
		    <tr>
		     <td colspan="8">No data found</td>
		    </tr>

		 <?php } ?>
		 </table>

	</div>


	<br>
	<div class="Back">   
	<a href="../views/ManageFinance.php">Go Back</a>
	</div>
</body>
	<?php include('templates/footer.php')  ?>
</html>