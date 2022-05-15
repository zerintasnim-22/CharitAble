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
	<title>Add Donation Information</title>
	<link rel="stylesheet" type="text/css" href="../views/css/AddDonation.css">
	<script src="../views/script/AddDonation.js"></script>
	<h1>Add Donation Information</h1>
<body>
<div class="donation-page">
	<div class="form">
	<form class="donation-form" name="login" action="AddDonation.php" method="POST" novalidate enctype="application/x-www-form-urlencoded" onsubmit="return(validateForm (this));">
	<label for="donerName">Doner Name:</label>
	<input type="text" name="donerName" id="donerName">
	<span id="aderr1"></span>
	<label for="DonationDate">Donation Date:</label>
	<input type="date" name="DonationDate" id="DonationDate" >
	<span id="aderr2"></span>
	<label for="DonationAmount">Donation Amount:</label>
	<input type="text" name="DonationAmount" id="DonationAmount">
	<span id="aderr3"></span>
	<button>SUBMIT</button>
	</form>
	</div>
	

	<div class="confarmation">
		<h3>Donation Information</h3>

<?php

	function test($data)	
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}		
?>

		<?php 

		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{			
			$donerName= test($_POST['donerName']);	
			$DonationDate= test($_POST['DonationDate']);	
			$DonationAmount= test($_POST['DonationAmount']);

			if (empty($donerName) or !isset($DonationDate) or empty($_POST['DonationAmount'])) 
			{
				echo " <font color=white> Fill up the form properly";
				echo "<br><br>";
				?>
				<p font color=white ><b>Event creation Failed</b></p>
				<?php								
			}				
			else
			{	
				echo " <font color=black> Event Name:  ". $donerName;
				echo "<br><br>";
				echo "Event Type: " . $DonationDate;
				echo "<br><br>";
				echo "Date of Event: " . $DonationAmount;
				echo "<br><br>";
			}			

		$sql = "INSERT INTO donation VALUES('$donerName','$DonationDate','$DonationAmount')";
			

			if ($conn->query($sql) === TRUE) {
			  echo "created successfully";
			  echo "<br><br>";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}	
		else
		{
			echo "";
		}
	?>
	</div>
</div>
</div>
<div class="Back">
<a href="../views/ManageFinance.php">Go Back</a>
</div>

</body>
<?php include('templates/footer.php') ?> 
</html>



