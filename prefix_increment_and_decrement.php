<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: template.php
	Today's Date:  6/16/22
	Purpose:  Ch1 Exercises
 -->
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php
		//declare a numeric variable
		$a = 5;
		//Postfix increment operators
		echo "Value of a: " . ++$a . "<br />\n";
		echo "Value is the same: " . $a . "<br />\n";
		//Postfix decrement operators
		$a = 5;
		echo "Pre-decremented value: " . --$a . "<br />\n";
		echo "Value is the same: " . $a . "<br />\n";
	?>
	
</body>
</html>