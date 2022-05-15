<?php 
session_start(); 
require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
<?php include('../views/templates/header.php')?>

<h1>Delete Event</h1>	
	
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
				$sql = "DELETE FROM event WHERE ename='$ename'";
				
			}	
			
			if ($conn->query($sql) === TRUE) {
			  echo "Delete successfully";
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

