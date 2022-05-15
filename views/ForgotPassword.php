<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password</title>
	<script src="../views/script/ForgotPassword.js"></script>
	<link rel="stylesheet" type="text/css" href="../views/css/ForgotPassword.css">
	<h1>CharitAble</h1>
</head>
<body>	
	<div class="ForgotPassword">
		<div class="form">
	<h2>Reset Password</h2>
 	<form class="login-form" action="../controller/ForgotPasswordAction.php" method="POST" onsubmit="return (validateForgotPassword(this));">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<span id="err1"></span>
		<br>
		<label for="password">New Password:</label>
		<input type="password" name="npassword" id="npassword">
		<span id="err2"></span>
		<br>
		<label for="cpassword">Confirm Password:</label>
		<input type="password" name="cpassword" id="cpassword">
		<span id="err3"></span>
		<br>
		<button button type="submit">Reset</button>
	</form>
	</div>
	</div>
	<div class="Back">
	<a href="login.php">Go Back</a>
	</div>
</body>
	<?php include('templates/footer.php');?>
</html>