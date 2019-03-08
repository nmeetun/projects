<?php 
	$Uname = $_POST["Username"];
	$pass = $_POST["Password"];

	$users = "Ishwaree";
	$pws = "Accenture";
	

	if ($Uname == $users && $pass == $pws){
		echo "Success";
	} 
	else if($Uname == $users && $pass != $pws){
		echo "password incorrect";

	} else{
		echo "Username incorrect";
	}


	/*
	echo "$Uname";
	echo "<br>";
	echo "$pass";*/




 ?>

