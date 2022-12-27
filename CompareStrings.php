<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: CompareStrings.php
	Today's Date:  8/2/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Compare Strings</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>Compare Strings</h1><hr />

	
	<?php

	$firstString = "Geek2Geek";
	$secondString = "Geezer2Geek";
	
	if ( !empty($firstString) && !empty($secondString)) {
		if ($firstString == $secondString)
			echo "<p>Both strings are the same.</p>";
		else {
			echo "<p>Both strings have " . similar_text($firstString, $secondString) . " character(s) in common.<br />";
			echo "<p>You must change " . levenshtein($firstString, $secondString) . " character(s) to make the strings the same.<br />";
		}
	}
	else
		echo "<p>Either the \$firstString variable or the \$secondString variable does not contain a value so the two strings cannot be compared.</p>";
			?>
	

</body>
</html>