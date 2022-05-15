<?php 
	
	session_start();
	require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	
</head>

<body>

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
			$password = test($_POST['password']);
            
            if (empty($username) or empty($password)) 
			{
					echo "Fill up the form properly";
					echo "<br>";
					echo "Go back to Login Page and Try again with valid username or password";
			}
			else
			{		
				$sql = "SELECT * FROM registration WHERE username='$username' and password='$password'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$active = $row['active'];

				$count = mysqli_num_rows($result);

				    if($count===1)			
					{
						$_SESSION['username'] = $username;
						$_SESSION['pass'] = $password;
						header("Location: ../views/Dashboard.php");
					}
					else
					{ 
						echo "Invalid Username or Password";
						header("Location: ../views/Login.php");
					}
						
			}
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
	?>

</body>

</html>

        	