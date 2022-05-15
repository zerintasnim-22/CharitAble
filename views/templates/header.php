<head>

<style>
	body{
		margin: 0;
		height: fit-content;
		top: 0;
	}
	.banner{
		background-image: url('../views/css/asset/header.jpg'); opacity: .8;
		background-size: cover;
		
	}


	.item{
		 
		list-style-type: none;
		text-align: center;
		margin: 0;
		padding: 0;

	}
	.item h1{
		color: white;
	}
	.item a{
		display: inline-block;
		font-size: 30px;
		padding: 20px;
	}
		
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<!--<link rel="stylesheet" href="../views/css/homepagestyle.css">-->
	<!---<h1 align="center">CharitAble</h1>-->
	
</head>
<body>
	<div class="banner">
	
		<div class="item">

        <h1 align="center">CharitAble</h1>		
		<a href="../views/Dashboard.php">
						
		    <button button type="button">Home</button>
		</a>

		<a href="../views/ViewProfile.php">
			
			<button button type="button">View Profile</button>
		</a>

		<a href="../views/ChangePassword.php">
			
			<button button type="button">Change Password</button>
		</a>

		<a href="../views/logout.php">
			
			<button  button type="button">Log Out</button>
		</a> </div>
		<br><br>
	
</div>
</body>
</head>