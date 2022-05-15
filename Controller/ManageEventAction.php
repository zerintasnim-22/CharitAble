<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<?php include('../views/templates/header.php')?>

<h1>Manage Event Action</h1>	
	
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
		<legend>Basic Information</legend>		
	<?php 

		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{			
			$ename = test($_POST['ename']);	
			$etype= test($_POST['etype']);	
			$doe = test($_POST['doe']);
			$efee = test($_POST['efee']);
				
			if (empty($ename) or !isset($_POST['etype']) or !isset($_POST['doe']) or empty($eef)) 
			{
				echo "Fill up the form properly";
				echo "<br><br>";
				?>
				<p><b>Event creation Failed</b></p>
				<?php								
			}				
			else
			{	
				echo "Event Successfully Created";
				header("Location: ../views/ManageEvent.php");
			}			
		}	
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
	?>
	</fieldset>
		
    <br><br>
    <a href="../views/CreateEvent.php">Back</a> 

<?php include('../views/templates/footer.php') ?>


</html>