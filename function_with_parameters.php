<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: function_with_parameters.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Defining a Function with Parameters</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php
	//Define a PHP function with parameters
	function multiply_integers($int1, $int2) {
		$result = $int1 * $int2;
		echo "<p>The result of multiplying the two integers is " .
		$result . ".</p>";
	}
	?>
</head>



<body>

<?php

	// call the php function
	// send the values 10 as the argument for $int1 and 3 as the value for $int2
	multiply_integers(10,3);

?>
</body>
</html>