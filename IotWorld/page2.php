<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" href="css/new.css">
	<link rel="stylesheet" href="css/newPro.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body onload="zeroNumber()">
		

		<div id="box"><p id="number">0</p></div>

	<!--Navigation-->

	<?php include('inc/header.php'); ?>


	<!--Search bar-->

	<div class="Search-bar">
		<form class="example" action="action_page.php">
		  <input type="text" placeholder="Search.." name="search">
		  <button type="submit"><i class="fa fa-search"></i></button>
		</form>
		
	</div>


	<!--Side filter-->
	
	<div class="filter">
	
	<h3 class="filter-title">Filter</h3>

	<div class="Number-of-pins">
		<h4>Number of pins</h4>
		<label for="pins"><input type="checkbox">1</label> <br>
		<label for="pins"><input type="checkbox">2</label> <br>
		<label for="pins"><input type="checkbox">3</label> <br>
		<label for="pins"><input type="checkbox">4</label> <br>
		<label for="pins"><input type="checkbox">5</label> <br>
		<label for="pins"><input type="checkbox">6</label> <br>
		<label for="pins"><input type="checkbox">7</label> <br>
		<label for="pins"><input type="checkbox">8</label> <br>
	</div>	


	<div class="Number-of-holes">
		<h4>Number of holes</h4>
		<label for="holes"><input type="checkbox">170</label> <br>
		<label for="holes"><input type="checkbox">400</label> <br>
		<label for="holes"><input type="checkbox">576</label> <br>
		<label for="holes"><input type="checkbox">700</label> <br>
		<label for="holes"><input type="checkbox">900</label> <br>

	</div>

	<div class="Rated-current">
		<h4>Rated current</h4>
		<label for="current"><input type="checkbox">10 mA</label> <br>
		<label for="current"><input type="checkbox">15 mA</label> <br>
		<label for="current"><input type="checkbox">16 mA</label> <br>
		<label for="current"><input type="checkbox">20 mA</label> <br>

	</div>


	<div class="color">
		<h4>color</h4>
		<label for="color"><input type="checkbox">Red</label> <br>
		<label for="color"><input type="checkbox">Green</label> <br>
		<label for="color"><input type="checkbox">Orange</label> <br>

	</div>


	<div class="Brand">
		<h4>Brand</h4>
		<label for="Brand"><input type="checkbox">Alps</label> <br>
		<label for="color"><input type="checkbox">ATMEL</label> <br>
	</div>


	</div>


	<!--Grid for products-->


	<div class="gridProducts">

		<div class="card" >
		  <a href="#"><img src="images/products/OT-BUZ-36.jpg" alt="" style="width:100%"></a>
		  <h1>Tailored Jeans</h1>
		  <p class="price">$19.99</p>
		  <p>Detail</p>
		  <p><button onclick="increaseNumber()">Add to Cart</button></p>
		</div>


			<div class="card" >
		  <a href="#"><img src="images/products/SE-OP-PC.jpg" alt="" style="width:100%"></a>
		  <h1>Tailored Jeans</h1>
		  <p class="price">$19.99</p>
		  <p>Detail</p>
		  <p><button onclick="increaseNumber()">Add to Cart</button></p>
		</div>

			<div class="card" >
		  <a href="#"><img src="images/products/IC-ATMEGA8A-PU.jpg" alt="" style="width:100%"></a>
		  <h1>Tailored Jeans</h1>
		  <p class="price">$19.99</p>
		  <p>Detail</p>
		  <p><button onclick="increaseNumber()">Add to Cart</button></p>
		</div>


			<div class="card" >
		  <a href="#"><img src="images/products/PA-RP-TR1K.jpg" alt="" style="width:100%"></a>
		  <h1>Tailored Jeans</h1>
		  <p class="price">$19.99</p>
		  <p>Detail</p>
		  <p><button onclick="increaseNumber()">Add to Cart</button></p>
		</div>


			<div class="card" >
		  <a href="#"><img src="images/products/PA-IN-AX10U.jpg" alt="" style="width:100%"></a>
		  <h1>Tailored Jeans</h1>
		  <p class="price">$19.99</p>
		  <p>Detail</p>
		  <p><button onclick="increaseNumber()">Add to Cart</button></p>
		</div>

			<div class="card" >
		  <a href="#"><img src="images/products/LE-5M-GR.jpg" alt="" style="width:100%"></a>
		  <h1>Tailored Jeans</h1>
		  <p class="price">$19.99</p>
		  <p>Detail</p>
		  <p><button onclick="increaseNumber()">Add to Cart</button></p>
		</div>


			<div class="card" >
		  <a href="#"><img src="images/products/LE-5M-GR.jpg" alt="" style="width:100%"></a>
		  <h1>Tailored Jeans</h1>
		  <p class="price">$19.99</p>
		  <p>Detail</p>
		  <p><button onclick="increaseNumber()">Add to Cart</button></p>
		</div>


			<div class="card" >
		  <a href="#"><img src="images/products/LE-5M-GR.jpg" alt="" style="width:100%"></a>
		  <h1>Tailored Jeans</h1>
		  <p class="price">$19.99</p>
		  <p>Detail</p>
		  <p><button onclick="increaseNumber()">Add to Cart</button></p>
		</div>

			<div class="card" >
		  <a href="#"><img src="images/products/LE-5M-GR.jpg" alt="" style="width:100%"></a>
		  <h1>Tailored Jeans</h1>
		  <p class="price">$19.99</p>
		  <p>Detail</p>
		  <p><button onclick="increaseNumber()">Add to Cart</button></p>
		</div>
			
		
		<div class="pagination">
		  <a href="#">&laquo;</a>
		  <a href="newProduct.html">1</a>
		  <a href="page2.html">2</a>
		  <a href="#">3</a>
		  <a href="#">4</a>
		  <a href="#">5</a>
		  <a href="#">6</a>
		  <a href="#">&raquo;</a>
		</div>


	</div>



	
<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
			  
<script src="js/increment.js"></script>

<script>
	$(".navigation a").mouseover(function(){
		$(".navigation a").removeClass('selected');
		$(this).addClass('selected');
	})


</script>



</body>
</html>