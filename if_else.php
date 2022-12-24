<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: if_else.php
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
		$birth_year = 1972;
		// if birth_year is equal to 1972 is true, display the if statement
		// if birth_year is equal to 1972 is false, display the else statement
		
		if($birth_year == 1972)
		{
			echo "<p>You were born under the sign of the Rat.</p>\n";
		}
		else
		{
			echo "<p>You were born in " . $birth_year . "<br />You were NOT born under the sign of the Rat.</p>\n";
		}
	?>
	
</body>
</html>