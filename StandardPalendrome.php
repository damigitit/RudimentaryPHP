<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: StandardPalendrome.php
	Today's Date:  8/2/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Standard Palendrome</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>Standard Palendrome</h1><hr />

	
	<?php
		$phrase = "Madam I'm Adam";
		$phrase2 = "Madam I'm Bill";
		
		echo "<p>phrase is <strong> <p>$phrase<p>$phrase2 </strong>";
		// remove punctuation
		$phraseStripPunctuation = preg_replace('/[^a-z]+/i', '', $phrase);
		$isStandardPalendrome = strcasecmp($phraseStripPunctuation,strrev($phraseStripPunctuation));
		
		if (!$isStandardPalendrome)
			echo "<p>" . $phrase . " is a standard palendrome.";
		else
			echo "<p>" . $phrase . " is not a standard palendrome.";

		// remove punctuation
		$phraseStripPunctuation = preg_replace('/[^a-z]+/i', '', $phrase2);
		$isStandardPalendrome = strcasecmp($phraseStripPunctuation,strrev($phraseStripPunctuation));

		if (!$isStandardPalendrome)
			echo "<p>" . $phrase2 . " is a standard palendrome.";
		else
			echo "<p>" . $phrase2 . " is not a standard palendrome.";
	?>
	

</body>
</html>