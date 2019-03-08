<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home|welcome</title>
	<link rel="stylesheet" href="css/new.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="lib/typed.min.js"></script>
</head>
<body>
	
	<section>
		
		
		<?php include('inc/header.php'); ?>

		
		<div class="place">
			<div id="typed-strings">
		    <p>Welcome to the IOT World.</p>
		    <p>It is where we help you bring your creativity to life.</p>
		    <p>So lets get started,shall we?</p>
		</div>
		<span id="typed"></span>
		</div>

		
		<p class="welcome-text">We have everything you need to get you started , so don't worry about anything.</p>
	</section>



<script>
 var typed = new Typed('#typed', {
    stringsElement: '#typed-strings'
  })


</script>


	
	<script type="text/javascript">
		$('section').mousemove(function(e){
			var moveX = (e.pageX * -1/15);
			var moveY = (e.pageY *  -1/15);
			$(this).css('background-position',moveX + 'px ' + moveY + 'px ')

		})
	</script>



<script>
	$(".navigation a").mouseover(function(){
		$(".navigation a").removeClass('selected');
		$(this).addClass('selected');
	})


</script>


</body>
</html>