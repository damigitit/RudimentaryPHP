<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: make_array.php
	Today's Date:  6/16/2022
	Purpose: Ch1 Exercises
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
		//Cat will be modified later
		$zodiac_signs = array(
			"Rat",
			"Ox",
			"Tiger",
			"Rabbit",
			"Dragon",
			"Snake",
			"Horse",
			"Sheep",
			"Monkey",
			"Rooster",
			"Dog",
			"Cat"
		);
	/*Troubleshooting technique to display elements in the $zodiac_signs array */
	/*
	echo "<pre>";
		print_r($zodiac_signs);
	echo "</pre>";
	*/
	$zodiac_signs[11] = "Pig";
	//display elements in array with echo
	echo "<p>" . $zodiac_signs[0] . "</p>\n";
	echo "<p>" . $zodiac_signs[1] . "</p>\n";
	echo "<p>" . $zodiac_signs[2] . "</p>\n";
	echo "<p>" . $zodiac_signs[3] . "</p>\n";
	echo "<p>" . $zodiac_signs[4] . "</p>\n";
	echo "<p>" . $zodiac_signs[5] . "</p>\n";
	echo "<p>" . $zodiac_signs[6] . "</p>\n";
	echo "<p>" . $zodiac_signs[7] . "</p>\n";
	echo "<p>" . $zodiac_signs[8] . "</p>\n";
	echo "<p>" . $zodiac_signs[9] . "</p>\n";
	echo "<p>" . $zodiac_signs[10] . "</p>\n";
	echo "<p>" . $zodiac_signs[11] . "</p>\n";


	?>
	
	
</body>
</html>