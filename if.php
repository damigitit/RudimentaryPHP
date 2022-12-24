<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: if.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
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
	
		// assign 1972 to a birth_year variable
		$birth_year = 1972;
		// if statement without curly brackets
		if($birth_year == 1972)
			echo "<p>You were born under the sign of the Rat</p>\n";
	?>
	
	<?php
	if ($birth_year == 1972) {
		echo "<p>You were born under the sign of the Rat</p>\n";
	}
	?>
</body>
</html>