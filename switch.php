<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: switch.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Switch Statement</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	
	<?php
	
		// assign 1975 to a birth_year variable
		$birth_year = 1975;
		
		// switch statement to test the birth_year
		switch($birth_year) {
			case 1972:
				echo "<p>You were born under the sign of the Rat.</p>\n";
			break;
			case 1973:
				echo "<p>You were born under the sign of the Ox.</p>\n";
			break;
			case 1974:
				echo "<p>You were born under the sign of the Tiger.</p>\n";
			break;
			default:
				echo "<p>I don't know the Zodiac sign for " . $birth_year . " .</p>\n";
			break;
		}//ends the switch statement
	?>
	
</body>
</html>