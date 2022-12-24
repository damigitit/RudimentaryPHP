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
	<p>If Else Statement</p>
	<?php
	
	$Year = 2010;
	$ZodiacSign = "";
	if ($Year == 2010)
	{
		
		$ZodiacSign = "<p>This is the year of the Tiger.</p>\n";
	}
	else
	{
		$ZodiacSign = "<p>This is not the year of the Tiger.</p>\n";
	}
	
	echo $ZodiacSign;
		
	?>
	
	<p>Conditional Operator</p>
	<?php
	
	$Year = 2010;
	$ZodiacSign = "";
	($Year == 2010) ? $ZodiacSign = "<p>This is the year of the Tiger.</p>\n" : "<p>This is not the year of the Tiger.</p>\n";
	echo $ZodiacSign;
	?>
	
</body>
</html>