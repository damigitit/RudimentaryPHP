<!DOCTYPE html>
<html>
	<head>
	<title>Clyde's Cheap Cars</title>
	<!--
	Author:				Diana Kokoska
	Date:				March 1, 2016
	Purpose:			Salesman Pay Report
	Supporting Files:   process_CarSales1.php.php
	-->
	</head>
	<body>
	<h2 style="text-align:center">Clydes Cheap Cars</h2>
	
	<!-- action is the path and filename of the file that will process the form -->
	<!-- the method is post -->
	
	<form name = "CarSales" id = "CarSales" action="process_CarSales1.php" method="post">
	
	<!--the value is what keeps the user's values if the form is redisplayed -->
	
	<p>Weekly Salary:  <input type="text" name="salary" id = "salary" value="<?php if(isset($_POST['salary'])) echo $_POST['salary'];?>" /></p>
	<p>Number of Cars Sold This Week: <input type="text" name="cars" id = "cars" value="<?php if(isset($_POST['cars'])) echo $_POST['cars'];?>" /></p>
	
	<!-- the name value is the one used when checking to see if the Submit button has been pressed -->
	<p><input type="submit" name="submit" id = "submit" value="Submit"></p>
	
	</form>
	</body>
</html>