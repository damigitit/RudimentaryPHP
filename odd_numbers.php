<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: odd_numbers.php
	Today's Date:  7/17/2022
	Purpose:  ch2 project
 -->
<html lang="en">
<head>
	<title>Odd Numbers</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	
	<?php
		$count = 0;
		while($count <= 100)
		{
			if(!($count%2 == 0))
			{
				echo "$count,";
			}
			$count+=1;
		}
	
	?>
	
</body>
</html>