<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: while_loop.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Using the While Loop</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	
	<?php
	
		// declare and initialize a variable for year
		$year = 1972;
		$counter = 0;
		while($year <= 1983) {
			//if true display $year
			echo "<p>" . $year . "</p>\n";
			//adds one to the $year counter variable and starts the loop again
			++$year;
			++$counter;
		}// ends the while loop
		
		// what is outside the loop displays only once when the loop is through iterating
			echo "<p> You have displayed " . $counter . " years.</p>\n";
	?>
	
</body>
</html>