<?php 
	
	session_start();
	require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password</title>
</head>
<body>
	<h1>Forgot Password Action</h1>	
	
	<?php

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
	
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{

			$username = test($_POST['username']);
			$npassword = test($_POST['npassword']);
			$cpassword = test($_POST['cpassword']);

			/*var_dump($_POST['username']);
			var_dump($_POST['npassword']);
			var_dump($_POST['cpassword']);*/

            
            if (empty($_POST['npassword']) || empty($_POST['cpassword']) || empty($username))
			{
					echo "Fill up the form properly";
					echo "<br>";

				}
					
			else
			{		
				$sql = "SELECT * FROM registration WHERE username='$username'";
				$rr= mysqli_query($conn, $sql);

					if (mysqli_num_rows($rr) === 1) 
        			{

           				$row = mysqli_fetch_assoc($rr);

            			if ($row['username'] === $username) 
            			{		
							$nsql= "UPDATE registration SET password = '$npassword', confirmpassword = '$cpassword' WHERE username= '$username'";
							$r = mysqli_query($conn, $nsql);
						}
						header("Location: ../views/login.php");

}
					else
					{ 
						echo "Invalid Username or Password";
						header("Location: ../views/ForgotPassword.php");
					}
						
			}
		}
	
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
		$conn->close();
	?>
	<br><br>
	<a href="../views/ForgotPassword.php">Go Back</a>
</body>
</html>