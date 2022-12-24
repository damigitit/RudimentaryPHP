<!-- 
	Student Name: Damian Archer
	File Name: zip_code.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//example ZIP Codes entered by user
$string = "12345";
$string2 = "12345-1234";
$string3 = "12345 1234";

//String must contain upper and lowercase Letters and a space
$pattern = "/^[0-9]{5}([\-]?)(\s)?([0-9]{4})?$/";

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