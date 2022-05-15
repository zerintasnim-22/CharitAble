<?php
session_start();
if ($_SESSION['username']==NULL) {
header("Location:../views/login.php");
  }
require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="../views/css/ChangePassword.css">
	<script type="text/javascript" src="../views/script/ChangePassword.js"></script>
	

</head>
		<?php
			include('../views/templates/header.php');
		?>	
<body>
	<div class=ChangePassword>
        <h2>Change Password</h2>
					

	<form action="../controller/ChangePasswordAction.php" method="POST" onsubmit="return (validChangePassword(this));">
		
			<label for="opass">Old Password</label><br>
			<input type="password" name="opass" id="opass" class="finput" autofocus>
			<span id="err1"></span>
		    <br><br>
			<label for="password">New Password</label><br>
			<input type="password" name="npassword" id="npassword" class="finput">
			<span id="err2"></span>
			<br><br>

			<label for="cpassword">Confirm Password</label><br>
			<input type="password" name="cnpassword" id="cnpassword" class="finput">
			<span id="err3"></span>
			<br><br>

			<button>RESET</button>
		
	</form>
</div>
						
	<?php
		include('../views/templates/footer.php');
	?>	
	
	
</body>
</html>