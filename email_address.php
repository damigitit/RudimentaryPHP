<!-- 
	Student Name: Damian Archer
	File Name: email_address.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php

$string = "example@maine.edu";
$string2 = "examle.email@maine.edu";
$string3 = "example@umit.maine.edu";
$string4 = "examle.email@umit.maine.edu";
$string5 = "@example@maine.edu";

//String must contain upper and lowercase Letters and a space
$pattern = "/^[a-zA-z0-9]+(\.)?([a-zA-z0-9_\W]*)@(umit\.)?(maine\.edu)\$/";

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

$match_found = preg_match($pattern, $string4);

if ($match_found)
{
	echo '<div style = "color: green">' . $string4 . '<stron> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $string4 . '<strong> does not satisfy the pattern ' . $pattern;
}

$match_found = preg_match($pattern, $string5);

if ($match_found)
{
	echo '<div style = "color: green">' . $string5 . '<stron> satisfies the pattern ' . $pattern;
}
else
{
	echo '<div style = "color: red">' . $string5 . '<strong> does not satisfy the pattern ' . $pattern;
}


?>