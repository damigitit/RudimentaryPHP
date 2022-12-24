<!-- 
	Student Name: Damian Archer
	File Name: DaysArray.php
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
		$Days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
		
		echo "The days of the week in English are: " . "<pre>";
		print_r($Days);
		echo "</pre>";
		
		$Days[0] = "Lundi";
		$Days[1] = "Mardi";
		$Days[2] = "Mercedi";
		$Days[3] = "Jeudi";
		$Days[4] = "Vendredi";
		$Days[5] = "Samedi";
		$Days[6] = "Dimanche";
		
		echo "The days of the week in French are: " . "<pre>";
		print_r($Days);
		echo "</pre>";
	?>
	
	
	
</body>
</html>