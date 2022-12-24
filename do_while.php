<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: do_while.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Do While Loop</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	
	<?php
	
		// declare and initialize a variable for year
		$birth_year = 1972;
		$birth_year = 1972;
		/* display the birth_year incrementing the birth_year variable after
		each iteration of the loop */
		do {
			echo "<p>" . $birth_year . "</p>\n";
			//increment the birth_year variable
			++$birth_year;
		}
		/*do this until the value of the birth_year variable is greater than 1983 */
		while ($birth_year <=1983);
	?>
	
</body>
</html>