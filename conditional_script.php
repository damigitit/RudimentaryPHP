<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: conditional_script.php
	Today's Date:  8/2/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Conditional Script</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	
	<?php
	$int_variable = 75;
	if($int_variable > 100)
	{
		$result = '$int_variable is greater than 100'
	}
	else
	{
		$result = '$int_variable is less than or equal to 100';
	}
	echo "<p>$result</p>";
	?>
	
</body>
</html>