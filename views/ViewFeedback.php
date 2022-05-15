<?php 
	session_start();	
	
		?>
		<!DOCTYPE html>
		<html>
			<title>View Feedbacks</title>
			<link rel="stylesheet" type="text/css" href="../views/css/ViewFeedback.css">			
			<?php include('templates/header.php'); ?>
			<h2 align="center">Feedbacks</h2>			
	<?php 
		
		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "employee";			
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error)
			{
			  die("Connection failed: " . $conn->connect_error);
			}
			else
			{
				$sql = "SELECT * FROM feedback";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) 
				{		
					$count = 0;							  
					while($row = $result->fetch_assoc())
					{
						$count++;
						echo "Serial: " . $count . "<br><br>" ;
					    echo "Username: " . $row["Username"]. "<br><br>" . "Subject: " . $row["Subject"]. "<br><br>Feedback: " . $row["feedback"] . "<br><br>";
					    echo "<br>               <br>";
					}
				}
				else 
				{
				  echo "No event found";
				}
				$conn->close();	
			}
	
	?>			
			
			<br>
			<div class='Back'> 
			<a href="../views/Dashboard.php">Go Back</a>
		</div>
		
	 
		
	<?php include('templates/footer.php')  ?>
	</html>