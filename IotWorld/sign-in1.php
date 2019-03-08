<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign-In</title>
	<link rel="stylesheet" href="css/stylesign.css">
	<link rel="stylesheet" href="css/new.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>

	<div class="overlay">
	

		<?php include('inc/header.php'); ?>


	<div class="loginbox">
		<img src="images/shapes.ico" alt="" class="avatar">
		<h1>Login here</h1>
		<form action="">
			<p>Username</p>
			<input type="text" name="" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="" placeholder="Enter password">
			<input type="submit" name="" value="login">
			<a href="#">Forgot your password?</a> 
			<br>
			<a href="sign-up.html">Don't have an account?</a>
		</form>
	</div>
</div>


<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>


<script>
	
	$(".navigation a").mouseover(function(){
		$(".navigation a").removeClass('selected');
		$(this).addClass('selected');
	})


</script>

</body>
</html>