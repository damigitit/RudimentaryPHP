<!-- 
	Student Name: Damian Archer
	File Name: days_array.php
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
		$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
		
		echo "The days of the week in English are: " . "<pre>";
		print_r($days);
		echo "</pre>";
		
		$days[0] = "Lundi";
		$days[1] = "Mardi";
		$days[2] = "Mercedi";
		$days[3] = "Jeudi";
		$days[4] = "Vendredi";
		$days[5] = "Samedi";
		$days[6] = "Dimanche";
		
		echo "The days of the week in French are: " . "<pre>";
		print_r($days);
		echo "</pre>";
	?>
	
	
	
</body>
</html>