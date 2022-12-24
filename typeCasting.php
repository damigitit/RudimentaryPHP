<!DOCTYPE html>
<!-- 
	Student Name: 
	File Name: template.php
	Today's Date:  
	Purpose:  
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
		//declare a variable and assign it a numeric value
		$Ten = 10;
		//declare a variable and assign it a string value
		$StringTen = "10 dollars";
		
		//add the numeric value and string value and save in $Result variable
		$Result = $Ten + $StringTen;
		$Result1 = $Ten + (int)$StringTen;
		
		//display the results
		echo "<p>The result of the calculation not explicitly cast is: " . $Result . "</p>\n";
		echo "<p>The result of the calculation explicity cast is: " . $Result1 . "</p>\n";
	?>
	
</body>
</html>