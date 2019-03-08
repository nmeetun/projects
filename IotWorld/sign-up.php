<?php 

	// Check For Submit
	/*if (filter_has_var(INPUT_POST, 'submit')) {
		# code...

		$surname = htmlspecialchars($_POST['lastname']);
		$first = htmlspecialchars($_POST['Firstname']);
		$email = htmlspecialchars($_POST['email']);


		if (!empty($surname) && !empty($first) && !empty($email)) {
			# code...
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				echo "please use a valid email";
			}


		} else {
			echo "please fill in all fields";
		}
		//echo "Subitted";

	} */


	 require('config/config.php');
	 require('config/db.php');
    

	if(isset($_POST['submit'])){
		$first = mysqli_real_escape_string($conn,$_POST['Firstname']);
		$last = mysqli_real_escape_string($conn,$_POST['lastname']);
		$pwd = mysqli_real_escape_string($conn,$_POST['password']);
		$Email = mysqli_real_escape_string($conn, $_POST['email']);

		$query = "INSERT INTO signup(FirstName,lastName,Email,Password) VALUES('$first' , '$last' , '$pwd','$Email') ";

		if(mysqli_query($conn,$query)){
			header('location: '.ROOT_URL.'');
		}else{
			echo 'ERROR: '.mysqli_error($conn);
		}

	}



 ?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign-up</title>
	<link rel="stylesheet" href="css/Sign-up.css">
	<link rel="stylesheet" href="css/new.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>

	<div class="overlay">
		

			<?php include('inc/header.php'); ?>

	<div class="sign-Up-Box">
	
			<img src="images/shapes.ico" alt="" class="avatar">
			<h1>Sign-Up Here</h1>

			<form action=" <?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<div class="middle-line"></div>
					<div class="middle-line-bottom"></div>
					<div class="square"></div>

					<p>Surname</p>
					<input type="text" name="lastname" placeholder="Enter last-name"  value="<?php echo isset($_POST['lastname']) ? $surname : ''; ?>">

					<p>First Name</p>
					<input type="text" name="Firstname" placeholder="Enter First-name" value="<?php echo isset($_POST['Firstname']) ? $first : ''; ?>">

					<p>Email-Address</p>
					<input type="email" name="email" placeholder="Enter Email-Address"  value="<?php echo isset($_POST['email']) ? $email : ''; ?>">

					
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter password"  >
					
				<button type="submit" name="submit">Submit</button>


				<div class="wrapper">

				
					<div class="google-button">	
						<input type="submit" name="google" value="sign in with google" class="google" style="background-color: orange; width: 400px; position: absolute; left:-5%; top:20%;">
					</div>
			


					<div class="facebook-button">	
							<input type="submit" name="facebook" value="sign in with facebook" class="facebook" style="background-color: blue; width: 400px; position: absolute; left:-5%; top:30%;">
					</div>


				
				</div>
			
			</form>
	


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