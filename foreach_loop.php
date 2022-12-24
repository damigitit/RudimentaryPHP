<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: foreach_loop.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Foreach Loop</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	
	<?php
	
		// declare an array with for elements
		$zodiac_signs = array(
			"Rat",
			"Ox",
			"Tiger",
			"Rabbit"
		);
		
		// loop through the array and display each elements
		// you must create an instance of the array and use that
		
		foreach($zodiac_signs as $signs) {
			echo "<p>" . $signs . "</p>\n";
		}
		// You can use the count() function to count elements in an array
		echo "<p>You have displayed " . count($zodiac_signs) . " signs.</p>\n";
		
	?>
	
</body>
</html>