<!DOCTYPE html>
<html>
	<head>
	<title>Clyde's Cheap Cars</title>
	<!--
	Author:				Diana Kokoska
	Date:				March 1, 2016
	Purpose:			Salesman Pay Report
	Supporting Files:   CarSalesFunction.php
	-->
	</head>
<title>Clyde's Cheap Cars</title>
<meta http-equiv="content-type"
	content="text/html; charset=iso-8859-1" />
</head>
<body>
<h2 style = "text-align:center">Clydes Cheap Cars</h2>
		<form action = "CarSalesFunction.php" method = "post">
		<p>Weekly Salary:  <input type="text" name = "salary" value = "<?php if(isset($_POST['salary']))echo $salary; ?>"/> </p>

		<p>Number of Cars Sold This Week: <input type="text" name = "cars" value = "<?php if(isset($_POST['cars']))echo $cars; ?>"/></p>
		<p><input type = "submit" name= "submit" value= "Submit" /></p>
		</form>
</body>
</html>
