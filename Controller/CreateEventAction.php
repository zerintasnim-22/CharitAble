<?php 
	session_start(); 
	require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
<?php include('../views/templates/header.php')?>

<h1>New Event Information</h1>	
	
	<?php

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
	?>
	<fieldset>
		<legend>Event</legend>		
	<?php 

		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{			
			$ename = test($_POST['ename']);	
			$etype= test($_POST['etype']);	
			$doe = test($_POST['doe']);
			$efee = test($_POST['efee']);
				
			if (empty($ename) or empty($etype) or !isset($_POST['doe']) or empty($efee)) 
			{
				echo "Fill up the form properly";
				echo "<br><br>";
				?>
				<p><b>Event creation Failed</b></p>
				<?php								
			}				
			else
			{	
				echo "Event Name: " . $ename;
				echo "<br><br>";
				echo "Event Type: " . $etype;
				echo "<br><br>";
				echo "Date of Event: " . $doe;
				echo "<br><br>";
				echo "Event Fee: " . $efee;
				echo "<br><br>";
			}			
		

		$sql = "INSERT INTO event VALUES('sn', '$ename','$etype','$doe','$efee')";
			

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
			echo "Can not process GET REQUEST METHOD";
		}
	?>
	</fieldset>
	<br><br>
    <a href="../views/ViewEvent.php">Back</a> 

<?php include('../views/templates/footer.php') ?>


</html>