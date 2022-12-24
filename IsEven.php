<!-- 
	Student Name: Damian Archer
	File Name: IsEven.php
	Today's Date:  6/17/22
	Purpose:  Ch1 Exercises
 -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" 
      content="text/html; charset=utf-8">
</head>
<body>

	<?php
		$x = 1.2;
		$y = 5;
		$z = "zee";
		
		if (is_numeric(round($x)))
		{
			echo "<p>$x is numeric</p>";
		}
		if (is_numeric($y))
		{
			echo "<p>$y is numeric</p>";
		}
		if (is_numeric($z))
		{
			echo "<p>$z is numeric</p>";
		}
		else
		{
			echo "<p>$z is not numeric</p>";
		}
	?>
	
	
	
</body>
</html>