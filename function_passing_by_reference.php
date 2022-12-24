<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: function_passing_by_reference.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Defining a function that Passes Arguements by Reference</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	 /* Defining a PHP function */
	 function add_ten($int) {
		 $int += 10;
	 }
	 function add_twenty(&$int) {
		 $int += 20;
	 }
	 ?>
	 
</head>



<body>

<?php

	/* call a PHP function */
	$start_value = 5;
	
	//passing without reference
	add_ten($start_value);
	echo "<p>The Start Value is " . $start_value . "</p>";
	
	// passing with reference
	add_twenty($start_value);
	echo "<p>The Start Value is now " . $start_value . "</p>";
	
?>
</body>
</html>