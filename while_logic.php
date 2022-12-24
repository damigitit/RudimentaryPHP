<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: while_logic.php
	Today's Date:  8/2/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>While Logic</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	
	<?php
		$Count = 0;
		while ($Count < 100) 
		{
			$numbers[$Count] = $Count;
			++$Count;
		}
		foreach ($numbers as $current_num)
		{
			echo "<p>$current_num</p>";
		}
	?>
	
</body>
</html>