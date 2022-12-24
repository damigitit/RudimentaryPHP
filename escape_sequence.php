<!-- 
	Student Name: Damian Archer
	File Name: escape_sequence.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->
<?php

	echo "<h2>Escape Sequencs</h2>\n";
	//escape sequence are not recognized with single quotes
	echo '<p>This is a text string.</p>\n';
	//escape sequences are recognized with double quotes
	echo "<p>This is a text string.</p>\n";
	
	//double quoted string with escaped double quotes
	echo "<p>This is \"awesome\", isn't it?</p>\n";
	//single quoted string with escaped single quotes
	echo '<p>This is "awesome", isn\'t it?</p>';

?>