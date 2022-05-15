<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Action</title>
	<link rel="stylesheet" type="text/css" href="../views/css/registration.css">
	
</head>
<body>
<div class= 'banner'>
	
	<h1 style="text-align: left; color:white;">Registration Information</h1>	
	<br>
	<?php
		function test($data)	
		{
			$date = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
	?>
	<fieldset>
		<legend> Basic Information</legend>
		<br>		
	<?php 
	   

		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{			
			$firstname = test($_POST['firstname']);
			$lastname = test($_POST['lastname']);
			$gender = test($_POST['gender']);
			$dob = $_POST['dob'];
			$religion = test($_POST['religion']);
			$count=0;
			
         
			if (empty($firstname)){
				echo " Please Fill up your Fisrt name";
				echo "<br><br>";
			}
			else{
				echo "First Name: " . $firstname;
				echo "<br><br>";
				$count++;
			}

			if (empty($lastname)){
				echo " Please Fill up your Last name";
				echo "<br><br>";
			}
			else{
				echo "Last Name: " . $lastname;
				echo "<br><br>";
				$count++;
			}

			if(!isset($gender)){
				echo " Please Fill up your Gender";
				echo "<br><br>";
			}
			else{
				echo "Gender: " . $gender;
				echo "<br><br>";
				$count++;
			}

			if(empty('$dob')){
				echo " Please Fill up your Date Of Birth";
				echo "<br><br>";
			}
			else{
				echo "Date of Birth: " . $dob;
				echo "<br><br>";
				$count++;
			}

			if(!isset($religion)){
				echo " Please Fill up your Religion";
				echo "<br><br>";
			}
			else{

				echo "Religion: " . $religion;
				$count++;
			}

					
		}	
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
	?>
	</fieldset>
	<br>
	<fieldset>
		<legend> Contact Information</legend>
		<br>
	<?php


		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{
			$present_address = test($_POST['present_address']);
			$permanent_address = test($_POST['permanent_address']);
			$email = test($_POST['email']);
            $phone = test($_POST['tel']);
			
			
			if (empty($present_address) ) 
			{	
				echo "Fill up your Present Address";
				echo "<br><br>";
				
			}
			else{
				echo "Present address: " . $present_address;
				echo "<br><br>";
				$count++;
			}

			if (empty($permanent_address) ) 
			{	
							
			}
			else{
				echo "Permanent address: " . $permanent_address;
				echo "<br><br>";
				
			}

			if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) 
			{	
				echo "Fill up a valid Email Address";
				echo "<br><br>";
				
			}
			else{
				echo "Email: " . $email;
				echo "<br><br>";
				$count++;
			}

			if (empty($phone)) 
				{
					
				}
				else
				{
					
					echo "Phone: " . $phone;
					echo "<br><br>";			
				}

				
			
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
	?>
	</fieldset>
	<br>
	<fieldset>
		<legend><b> Credentials</b></legend>
		<br>
	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$user = test($_POST['username']);
			$pass=test($_POST['password']);
			if (empty($user) )
			{
				echo "Fill up Username";				
				echo "<br><br>";
			}
			else
			{	
				if(strlen($user) <5) {
					echo "Please fill up a user name upto 5 character";
					echo "<br><br>";
					$count++;
				}	
				else{		
				echo "username: " . $user;
				echo "<br><br>";
				$count++;
				}					
				
			}	
			if (empty($pass) )
			{
				echo "Fill up password";				
				echo "<br><br>";
			}
			else{
				echo "password: " . $pass;
				echo "<br><br>";
				$count++;
			}
			
			$confirmpassword=$_POST['confirmpassword'];
			if (empty($confirmpassword))
			{
				echo "Fill up confirm password";				
				echo "<br><br>";
			}
			else
			{						
					if($pass == $confirmpassword)	{
						echo "Password matched";
						echo "<br><br>";
						$count++;
					}		
					else{
						echo "Please enter a valid Password";
						echo "<br><br>";
					}			
			}
			
			require '../model/db_connection.php';
            

			$sql = "INSERT INTO registration VALUES('$firstname','$lastname','$gender','$dob','$religion','$present_address','$permanent_address','$phone','$email', '$user','$pass','$confirmpassword')";
			

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
	<br>
	<div class="Back">
	<a href="../views/login.php">Go Back</a>
</div>
	</div>
</body>

<?php include('../views/templates/footer.php') ?>
</html>