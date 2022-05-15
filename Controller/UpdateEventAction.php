<?php 
	session_start(); 
	require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
<?php include('../views/templates/header.php')?>

<h1>Updated Event</h1>	
	
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

			if (empty($ename)) 
			{
				echo "Fill up the form properly";
				echo "<br><br>";
				?>
				<p><b>Event Update Failed</b></p>
				<?php								
			}				
			else
			{		
				$sql = "SELECT * FROM event WHERE ename='$ename'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				

				$count = mysqli_num_rows($result);
			}	

			if (empty($etype))  
			{
				echo "Fill up the form properly";
				echo "<br><br>";
			}	

			else
			{	
				echo "Event Type: " . $etype;
				echo "<br><br>";
				
			}
			if (!isset($_POST['doe']))
			{
				echo "Fill up the form properly";
				echo "<br><br>";
			}	

			else
			{	
				
				echo "Date of Event: " . $doe;
				echo "<br><br>";
				
			}			
			if (empty($efee)) 
			{
				echo "Fill up the form properly";
				echo "<br><br>";
			}	

			else
			{	
				echo "Event Fee: " . $efee;
				echo "<br><br>";
			}						

		$sql = "UPDATE event SET etype ='$etype', doe = '$doe', efee = '$efee' WHERE ename='$ename'";
			

			if ($conn->query($sql) === TRUE) {
			  echo "Updated successfully";
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
    <a href="../views/ManageEvent.php">Back</a> 

<?php include('../views/templates/footer.php') ?>
</html>