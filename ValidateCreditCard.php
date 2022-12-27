<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: ValidateCreditCard.php
	Today's Date:  8/2/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Validate Credit Card</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	
	<?php
	$CreditCard = array(
	"",
	"8910-1234-5687-6543",
	"0000-9123-4567-0123");
	
	foreach ($CreditCard as $CardNumber) {
		if (empty($CardNumber))
		{
			echo "<p>This Credit Card Number is invalid because it contains an empty string.</p>";
		}
		else
		{
			$CreditCardNumber = $CardNumber;
			$CreditCardNumber = str_replace("-", "", $CreditCardNumber);
			$CreditCardNumber = str_replace(" ", "", $CreditCardNumber);
			if (!is_numeric($CreditCardNumber))
			{
				echo "<p>Credit Card Number " . $CreditCardNumber . " is not a valid Credit Card number because it contains a non-numeric character. </p>";
			}
			else
			{
				echo "<p>Credit Card Number " . $CreditCardNumber . " is a valid Credit Card Number.</p>";
			}
		}
	}
			
			?>
	

</body>
</html>