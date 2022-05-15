<?php 

	session_start();
?>

<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../views/css/login.css">

</head>

<body>
<h1>CharitAble</h1>
<div class="login-page">
  <div class="form">
    <form class="login-form" name="login" method="POST" action="../Controller/LoginAction.php" onsubmit="return(validateForm (this));">
    <input type="text" placeholder="username" name="username"/>
    <span id="err1"></span>
    <input type="password" placeholder="password" name="password"/>
    <span id="err2"></span>
    <button>login</button>
    <div class="ForgotPassword">
	<a href="ForgotPassword.php">Forgot Password</a>
	</div>
    </select>
    <p class="sign-up">Not a Member Yet? <a href="registration.php">Sign Up</a></p>
    </form>
  </div>
</div>
<script src="../views/script/login.js"></script>
</body>

<?php include('templates/footer.php')  ?>

</html>