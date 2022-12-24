<!-- 
	Student Name: Damian Archer
	File Name: date_format.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//ZIP Code entered by user
$string = "12/12/2016";
$string2 = "9-12-2016";
$string3 = "12/9/16";

//String must contain upper and lowercase Letters and a space
$pattern = "/^\d{1,2}(\-|\/|\.)\d{1,2}(\-|\/|\.)(\d{2}|\d{4})$/";

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
$match_found = preg_match($pattern, $string2);

if ($match_found)
{
	echo '<div style = "color: green">' . $string2 . '<stron> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $string2 . '<strong> does not satisfy the pattern ' . $pattern;
}

$match_found = preg_match($pattern, $string3);

if ($match_found)
{
	echo '<div style = "color: green">' . $string3 . '<stron> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $string3 . '<strong> does not satisfy the pattern ' . $pattern;
}


?>