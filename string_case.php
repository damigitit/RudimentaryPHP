<!-- 
	Student Name: Damian Archer
	File Name: string_case.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php

//declare and initialize string
$string = "anger is only ONE letter short of danger";
//upercase all characters in the string
$upper_string = strtoupper($string);
echo "<p>When you apply the <em>strtoupper() function</em> to <strong> " . $string . "</strong>, it becomes <strong>" . $upper_string . ".</strong></p>\n";

//Lowercase all characters in the string
$lower_string = strtolower($string);
echo "<p>When you apply the <em>strtolower() function</em> to <strong> " . $string . "</strong>, it becomes <strong>" . $lower_string . "</strong></p>\n";
//capitalize the first letter of each word
$cap_words = ucwords($string);
echo "<p>When you apply the <em>ucwords() function</em> to <strong> " . $string . "</strong>, it becomes <strong>" . $cap_words . ".</strong></p>\n";

//capitalizes the first letter of a string
$cap_first = ucfirst($string);
echo "<p>When you apply the <em>ucfirst() function</em> to <strong> " . $string . "</strong>, it becomes <strong>" . $cap_first . ".</strong></p>\n";

?>