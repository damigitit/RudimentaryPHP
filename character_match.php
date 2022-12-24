<!-- 
	Student Name: Damian Archer
	File Name: character_match.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//example ZIP Code entered by user
$string = "015";
//example ZIP Code entered by user
$alt_string = "01562";
//string must contain upper and lowercase Letters and a space
$pattern = '/...../';

//checks for pattern in string
$match_found = preg_match($pattern, $string);

if ($match_found)
{
	echo '<div style = "color: green">' . $string . '<strong> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $string . '<strong> does not satisfy the pattern ' . $pattern;
}

// checks for pattern in alt_string
$match_found = preg_match($pattern, $alt_string);

if ($match_found)
{
	echo '<div style = "color: green">' . $alt_string . '<strong> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $alt_string . '<strong> does not satisfy the pattern ' . $pattern;
}
?>