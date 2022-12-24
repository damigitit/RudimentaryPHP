<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: for_loop.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>For Loop</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	
	<?php
	
		/* at each iteration of the loop, increment the birth_year and display the birth_year */
		$i = 0;
		for($birth_year = 1972; $birth_year <= 1983; ++$birth_year) {
			echo "<p>" . $birth_year . "</p>\n";
			++$i;
		}
		// outside the for loop, display the number of years displayed
		echo "<p>You have displayed " . $i . " years.</p>\n";
	?>
	
</body>
</html>