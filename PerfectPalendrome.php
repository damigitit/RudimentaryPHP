<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: PerfectPalendrome.php
	Today's Date:  8/2/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Perfect Palendrome</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>Perfect Palendrome</h1><hr />

	
	<?php
		$word = "racecar";
		echo "<p>Word is <strong> $word </strong>";
		$isPerfectPalendrome = $word == strrev($word);
		
		if ($isPerfectPalendrome)
			echo "<p>" . $word . " is a perfect palendrome.";
		else
			echo "<p>" . $word . " is not a perfect palendrome.";


	?>
	

</body>
</html>