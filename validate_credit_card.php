<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: validate_credit_card.php
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
	$credit_card = array(
	"",
	"8910-1234-5687-6543",
	"0000-9123-4567-0123");
	
	foreach ($credit_card as $card_number) {
		if (empty($card_number))
		{
			echo "<p>This Credit Card Number is invalid because it contains an empty string.</p>";
		}
		else
		{
			$credit_card_number = $card_number;
			$credit_card_number = str-replace("-", "", $credit_card_number);
			$credit_card_number = str_replace(" ", "", $credit_card_number);
			if (!is_numeric($credit_card_number))
			{
				echo "<p>Credit Card Number " . $credit_card_number . " is not a valid Credit Card number because it contains a non-numeric character. </p>";
			}
			else
			{
				echo "<p>Credit Card Number " . $credit_card_number . " is a valid Credit Card Number.</p>";
			}
	?>
	
</body>
</html>