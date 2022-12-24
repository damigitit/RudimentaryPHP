<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: gas_prices.php
	Today's Date:  8/2/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Gas Prices</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	
	<?php
	
	$gas_price = 2.57;
	if ($gas_price >= 2 && $gas_price <=3)
	{
		echo "<p>Gas Prices are between $2.00 and $3.00.</p>";
	}
	else
	{
		echo  "<p>Gas prices are not between $2.00 and $3.00</p>";
	}
	?>
	
</body>
</html>