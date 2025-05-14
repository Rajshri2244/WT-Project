<?php
   SESSION_START();
   if(!isset($_SESSION['$email']))
   {
	   if(isset($_REQUEST['login']))
	   {
		   $_SESSION['$email']="admin@gmail.com";
		   $_SESSION['$pass']="Admin";
		   $email= $_SESSION['$email'];
		   $pass=$_SESSION['$pass'];
		   if($_REQUEST['email']==$email and ($_REQUEST['pass']==$pass and $cpass=$_REQUEST['cpass']=="Admin"))
		   {
			   echo "<script>alert('Login successfully!!!!!');</script>";
		  	   echo "<script>window.location.href='showbooking details.php';</script>";
		   }
		   else
		   {
			   echo "<script>alert('Login Fail!!! Please try again');</script>";
			   session_unset();
			   echo "<script>window.location.href='loginSS.php';</script>";

		   }
	   }
    }
   else{
    echo "<script>location.href='showbooking details.php'</script>";
   }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="room.css">
</head>
<body>
    <nav>
		<div class="left">
		  <span>SkyLight</span>
		</div>
		<div class="right">
		  <ul>
     <li><a class="a1" href="index.html">Home</a></li>
	 
      <li><a class="a1" href="index.html">Back</a></li>
      
		  </ul>
		</div>
	  </nav>
      <h1 style="font-size: 50px; font-family: Arial, sans-serif; ">Admin Panel</h1>
	<div class="container">
		<h1>Login</h1>
		<form action="" method="GET">
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="password">Password:</label>
			<input type="password" id="pass" name="pass" required>

			<label for="confirm-password">Confirm Password:</label>
			<input type="password" id="cpass" name="cpass" required>

			<input type="submit" value="Login" name="login">
		</form>
	</div>
</body>
</html>
<style>
    * {
	box-sizing: border-box;
}

body {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}

.container {
	margin: 50px auto;
	padding: 20px;
	max-width: 600px;
	background-color: #f2f2f2;
	border-radius: 10px;
	box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

h1 {
	text-align: center;
	margin-bottom: 30px;
}

form label {
	display: block;
	margin-bottom: 10px;
}

form input {
	display: block;
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: none;
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0 0 5px rgba(0,0,0,0.1);
    font-size: 20px;
}

form input[type="submit"] {
	background-color: #29a3c8;
	color: #fff;
	cursor: pointer;
}

form input[type="submit"]:hover {
	background-color: #023864;
}

@media screen and (max-width: 600px) {
	.container {
		margin: 20px;
	}
}

</style>