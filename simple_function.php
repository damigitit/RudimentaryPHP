<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: simple_function.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Defining a Simple PHP Function</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
	// define a welcome_message Function
	function welcome_message() {
		echo "<p>Welcome to CIS 333 PHP!</p>";
	}
	?>
	
</head>



<body>

<?php

	// call the welcome_message Function
	welcome_message();
	
?>
</body>
</html>