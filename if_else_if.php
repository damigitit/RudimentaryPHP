<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: if_else_if.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Using the If/Else Statement</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>



<body>

	
	<?php
	
		// assign 1972 to a birth_year variable
		$birth_year = 1975;
		//est if birth_year is equal to 1972 and display if statement is true
		if($birth_year == 1972)
		{
			echo "<p>You were born under the sign of the Rat.</p>\n";
		}
		//if first statement is false, test if birth_year is equal to 1973 and display statement
		elseif($birth_year == 1973)
		{
			echo "<p>You were born under the sign of the Ox.</p>\n";
		}
		//if first and second statement are false, test if birth_year is 1974 and display statement
		elseif($birth_year == 1974)
		{
			echo "<p>You were born under the sign of the Tiger.</p>\n";
		}
		// If the first three statements are false, display this statement
		else
		{
			echo "<p>I do not know the Zodiac sign for " . $birth_year . ". </p>\n";
		}
	?>
	
</body>
</html>