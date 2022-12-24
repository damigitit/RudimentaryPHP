<!-- 
	Student Name: Damian Archer
	File Name: single_family_home.php
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
		$single_family_home = 399500;
		$single_family_home_display = number_format($single_family_home, 2);
		echo "<p>The current median price of a single family home in Pleasanton, CA is
		$$single_family_home_display.</p>";
	?>
	
	
	
</body>
</html>