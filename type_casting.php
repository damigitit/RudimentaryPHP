<!DOCTYPE html>
<!-- 
	Student Name: Damian Arher
	File Name: type_casting.php
	Today's Date:  6/17/2022
	Purpose:  Ch1 Exercises
 -->
<html lang=en">
<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" conTENt="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php
		//declare a variable and assign it a numeric value
		$TEN = 10;
		//declare a variable and assign it a string value
		$string_ten = "10 dollars";
		
		//add the numeric value and string value and save in $result variable
		$result = $TEN + $string_ten;
		$result1 = $TEN + (int)$string_ten;
		
		//display the results
		echo "<p>The result of the calculation not explicitly cast is: " . $result . "</p>\n";
		echo "<p>The result of the calculation explicity cast is: " . $result1 . "</p>\n";
	?>
	
</body>
</html>