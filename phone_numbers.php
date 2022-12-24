<!-- 
	Student Name: Damian Archer
	File Name: phone_numbers.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//Phone Number entered by user
$string = "(207) 942-0713";
$string2 = "207.942.0713";
$string3 = "207 942-0713";

//String must contain upper and lowercase Letters and a space
$pattern = "/^([\(]?)(\d{3})([\)|\.])?([\s]?)(\d{3})([\-|\.])(\d{4})$/";

//checks for pattern in $string
$match_found = preg_match($pattern, $string);

if ($match_found)
{
	echo '<div style = "color: green">' . $string . '<strong> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $string . '<strong> does not satisfy the pattern ' . $pattern;
}

//checks for pattern in $alt_string
$match_found = preg_match($pattern, $string2);

if ($match_found)
{
	echo '<div style = "color: green">' . $string2 . '<strong> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $string2 . '<strong> does not satisfy the pattern ' . $pattern;
}

$match_found = preg_match($pattern, $string3);

if ($match_found)
{
	echo '<div style = "color: green">' . $string3 . '<strong> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $string3 . '<strong> does not satisfy the pattern ' . $pattern;
}


?>