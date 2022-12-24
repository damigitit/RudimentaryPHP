<!-- 
	Student Name: Damian Archer
	File Name: interest_array.php
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
		$interest_rate1 = .0725;
		$interest_rate2 = .0750;
		$interest_rate3 = .0775;
		$interest_rate4 = .0800;
		$interest_rate5 = .0825;
		$interest_rate6 = .0850;
		$interest_rate7 = .0875;
	
	$rates_array = array($interest_rate1, $interest_rate2, $interest_rate3, $interest_rate4, $interest_rate4, $interest_rate5, $interest_rate6, $interest_rate7);
	
	echo "<pre>";
	print_r($rates_array);
	echo "</pre>";
	?>
	
	
	
</body>
</html>