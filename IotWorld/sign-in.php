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
		<form method="post" action="signSuccessful.php"  name="myForm">

			<p>Username</p>
				<input type="text" name="Username" placeholder="Enter Username" id="Username"/>

			<p>Password</p>
				<input type="password" name="Password" placeholder="Enter password" name="password" id="password" />

				<input type="submit" name="" value="submit">

			<a href="#">Forgot your password?</a> 

			<br>

			<a href="sign-up.html">Don't have an account?</a>

		</form>
	</div>
</div>


<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous">
			  	
</script>




<script>

	function validateForm(){
		var Username = document.forms["myForm"]["Username"].value;
		
		var password = document.forms["myForm"]["password"].value;

		if(Username == "" || Username == null){
			alert("Username is  required");
			return false;
		}

		if( Username.length < 3){

			alert("Username needs to be at least 3 characters");
			return false;
		}

		if(password == "" || password == null){
			alert("Password is  required");
			return false;
		}


		if( password.length < 8){

			alert("password needs to be at least 8 characters");
			return false;
		}



	}

	
	$(".navigation a").mouseover(function(){
		$(".navigation a").removeClass('selected');
		$(this).addClass('selected');
	})


</script>

</body>
</html>