<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: conditional_statement.php
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
	<p>If Else Statement</p>
	<?php
	
	$year = 2010;
	$zodiac_sign = "";
	if ($year == 2010)
	{
		
		$zodiac_sign = "<p>This is the year of the Tiger.</p>\n";
	}
	else
	{
		$zodiac_sign = "<p>This is not the year of the Tiger.</p>\n";
	}
	
	echo $zodiac_sign;
		
	?>
	
	<p>Conditional Operator</p>
	<?php
	
	$year = 2010;
	$zodiac_sign = "";
	($year == 2010) ? $zodiac_sign = "<p>This is the year of the Tiger.</p>\n" : "<p>This is not the year of the Tiger.</p>\n";
	echo $zodiac_sign;
	?>
	
</body>
</html>