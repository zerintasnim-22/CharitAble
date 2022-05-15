<?php
$Month = 2592000 + time();
$date = new DateTime(null, new DateTimeZone('Asia/Dhaka'));



//this adds 30 days to the current time
setcookie("UserVisit", $date->format("F jS - g:i a"), $Month);
if(isset($_COOKIE['UserVisit']))
{
$last = $_COOKIE['UserVisit'];
echo "Welcome back! <br> You last visited on ". $last;
}
else
{
echo "Welcome to our site!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="../views/css/homepagestyle.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <ul>
                <li> <a href="login.php">Login</a></li>
                <span>&nbsp;</span>
                <li><a href="registration.php" target="_self">Registration</a></li> 
            </ul>
        </div>
        <div class="content">
            <h1 style="font-family: sans-serif">Welcome to CharitAble</h1>
            <p style="font-family: sans-serif">Charity, Faith & Hope - Donate Now</p>
        </div> 
        
    </div>
</body>
 

</html>