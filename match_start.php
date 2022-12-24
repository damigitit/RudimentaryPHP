<!-- 
	Student Name: Damian Archer
	File Name: match_start.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//example URL entered by user
$string = "http://cis.uma.edu";
//example ZIP Code entered by user
//String must contain upper and lowercase Letters and a space
$pattern = "/^https/";
$alt_string = "https://cis.uma.edu";

//checks for pattern in $string
$match_found = preg_match($pattern, $string);

if ($match_found)
{
	echo '<div style = "color: green">' . $string . '<strong> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $string . '<stron> does not satisfy the pattern ' . $pattern;
}

//checks for pattern in $alt_string
$match_found = preg_match($pattern, $alt_string);

if ($match_found)
{
	echo '<div style = "color: green">' . $alt_string . '<stron> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $alt_string . '<strong> does not satisfy the pattern ' . $pattern;
}

?>