<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About</title>
	<link rel="stylesheet" href="css/new.css">
	<link rel="stylesheet" href="css/About.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="overlay">


		<?php include('inc/header.php'); ?>


		

		

		<div class="Container">
		<h1>About Us</h1>
		<div class="What-are-we">
			<h2>What are we and what we want to do?</h2>
			<p>We are a company that wants to promote IOT all around the globe and make it accessible to everyone. At IOT world you will get everything that you need to make your dreams and creativity work together to make it to the future. <br> Together we can make it work.</p>
		</div>



		<div class="Different">
			<h2>What makes us different?</h2>
			<img src="images/Question.png" alt="Man thinking" class="Question">
			<ol>
				<li>Integrity</li>
				<li>Quality</li>
				<li>Mutual Respect Recognition</li>
				<li>Innovativeness</li>
				<li>Passion</li>
				<li>Commitment</li>
			</ol>
		</div>
			

		<div class="client">
			<h2>Client Culture</h2>
			<p>
				These values drive everything we set out to achieve. Being part of IOT World means that, as a  team, we personally subscribe to and share these values. Satisfaction is our keyword. We are constantly motivated to satisfy our clients and do everything that is possible to achieve our aim.

				Youth and vitality characterize our team and each and every extra-curricular activity organized by our  Committee is one more occasion for our employees to blossom and to strengthen bonds.

			</p>
		</div>

		
		<div class="location">
			<h2>Location</h2>
			

			<p class="address" align="center">
				Telecom Tower, <br>
				10th floor, <br>
				Edith Cavell St, Port Louis, <br>
				Mauritius
			
			</p>

		</div>
	<footer class="foot">
				<h4 style=" text-align: left;">Contact Us</h4>
				
				<form action="" class="Contact-Form" method="get">
			
					<div class="left">
					<input type="text" placeholder="Name" name="Name" class="name" size="30">
					<br>
					<input type="email" placeholder="Email-Address" name="email" class="email" size="30">				
								</div>
							
					 <textarea name="Message" id="Message" cols="30" rows="3" placeholder="Message"></textarea>
					 <input type="submit" placeholder="Send" name="send" value="Send">
					</form>

					<a href="https://facebook.com/"class="facebook"><i class="fa fa-facebook" style="font-size: 30px; color: blue;" ></i></a>
					<a href="https://twitter.com/"class="twitter"><i class="fa fa-twitter" style="font-size: 30px; color: #00ACED;" ></i></a>

				
				<h5 style="margin-left: 5px; text-align: center;">&copy; Copyright IOT World </h5>

			</footer>

		</div>


</div>


<script>
	$(".navigation a").mouseover(function(){
		$(".navigation a").removeClass('selected');
		$(this).addClass('selected');
	})


</script>


</body>
</html>