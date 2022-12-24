<!-- 
	Student Name: Damian Archer
	File Name: compare_strings.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->
<?php
//declare and initialize two strings
$string1 = "hello";
$string2 = "hello";

//compare the two strings using the == operator
if ($string1 == $string2)
{
	echo '<p>$string1, ' . $string1 . ', matches $string2, ' . $string2 . '.</p>';
}
else
{
	echo '<p>$string1, ' . $string1 . ', does NOT match $string2, ' . $string2 . '.</p>';
}

//declare and initialize two strings
$string_lower = "hello";
$string_upper = "HELLO";

//compare two strings - one lowercase and one uppercase
if ($string_lower == $string_upper)
{
	echo '<p>$string_lower, ' . $string_lower . ', matches $string_upper, ' . $string_upper . '.</p>';
}
else
{
	echo '<p>$string_lower, ' . $string_lower . ', does NOT match $string_upper, ' . $string_upper . '.</p>';
}

//compare two strings = one Lowercase and one uppercase usining strcmp()
if (strcmp($string_lower, $string_upper) == 0)
{
	echo '<p>When comparing with the strcmp() function, $string_lower, ' . $string_lower . ', matches $string_upper, ' . $string_upper . '.</p>';
}
else
{
	echo '<p>When comparing with the strcmp() function, $string_lower, ' . $string_lower . ', does NOT match $string_upper, ' . $string_upper . '.</p>';
}

//compare two strings = one Lowercase and one uppercase using strcasecmp()
if(strcasecmp($string_lower, $string_upper) == 0)
{
	echo '<p>When comparing with the strcasecmp() function, $string_lower, ' . $string_lower . ', matches $string_upper, ' . $string_upper . '.</p>';
}
else 
{
	echo '<p>When comparing with the strcasecmp() function, $string_lower, ' . $string_lower . ', does NOT match $string_upper, ' . $string_upper . '.</p>';
}

?>
