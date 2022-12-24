<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: echo.php
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
		echo "This is PHP statement using standard script delimeters";
	?>
	<?php
	$first_name = "Joe";
	$last_name = "Smith";
	define ("UNIVERSITY", "University of Maine");
	echo "<br />";
	//This will display my first name is Joe.
	echo "My first name is $first_name";
	echo "<br />";
	//This will display my first_name is $first_name
	echo 'My first name ios $first_name';
	echo "<br /><br />";
	//This will display variables in an echo statement using a period to concatenate
	echo "<p>My name is " . $first_name . " " . $last_name . " and I go to school at the " . UNIVERSITY. ".</p>";
	?>
</body>
</html>