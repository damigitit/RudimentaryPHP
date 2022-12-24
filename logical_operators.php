<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: logical_operators.php
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
		echo "<h2>Testing the AND Operator.</h2>";
		
		$x = 5;
		$y = 10;
		
		if ($x == $y && $y == 10)
		{
			echo "<p>Returns a value of true because both values are true.</p>\n";
		}
		else
		{
			echo "<p>Returns a value of false because both statements are not true.</p>\n";
		}
		
		echo "<h2>Testing the OR Operator.</h2>";
		
		$x = 5;
		$y = 10;
		
		if ($x == $y || $y == 10)
		{
			echo "<p>Returns a value of true because at least one of the statements is true.</p>\n";
		}
		else
		{
			echo "<p>Returns a value of false because neither statement is true.</p>\n";
		}
	?>
	
</body>
</html>