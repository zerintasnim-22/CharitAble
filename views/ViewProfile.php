<?php
		session_start();
		if ($_SESSION['username']==NULL) {
		header("Location:../views/login.php");
  }

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../views/css/ViewProfile.css">

	<?php include('templates/header.php');
	 require '../model/db_connection.php';
	
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM registration where username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$gender = $row['Gender'];
	$dob = $row['dob'];
	$religion = $row['religion'];
	$present_address = $row['present_address'];
	$permanent_address = $row['permanent_address'];
	$phone= $row['phone'];
	$email= $row['email'];
	$user= $row['username'];
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<h4 style="text-align:center">User Information</h4>
<br>
<div style="background:linear-gradient(to right, #5493ff, #01073d); width:50%; margin:auto; padding:10px">

	

<?php

echo "<br>";
		echo 'Username: ' . $user;
		echo "<br><br>";			
		echo 'firstname: ' . $firstname;
		echo "<br><br>";
		echo 'lastname: ' . $lastname;
		echo "<br><br>";
		echo 'gender: ' . $gender;
		echo "<br><br>";				 			
		echo "Date of Birth: " . $dob;
		echo "<br><br>";				
		echo "religion: " . $religion;
		echo "<br><br>";
		echo 'present_address: ' . $present_address;
		echo "<br><br>";
		echo 'permanent_address: ' . $permanent_address;
		echo "<br><br>";
		echo 'phone: ' . $phone;
		echo "<br><br>";			
		echo "email: " . $email;
		echo "<br><br>";

?>
</div>

	<br> 
	<div style="width:50%; margin:auto; padding:10px;">  
	<div class='Back'> 
	<a href="../views/Dashboard.php">Go Back</a> 
</div>
</div>

</body>
	<?php include('templates/footer.php')  ?>
</html>