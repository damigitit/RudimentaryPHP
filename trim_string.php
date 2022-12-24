<!-- 
	Student Name: Damian Archer
	File Name: trim_string.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//declare and initialize a string variable
$string1 = "GEEK";
//declare and initialize a string variable with spaces at the beginning
$string2 = "   GEEK";
//declare and initialize a string variable with spaces at the end
$string3 = "GEEK   ";

echo "<h2>Before the trim() function</h2>";
//test if $string1 is equal to $string2
if ($string1 == $string2)
{
	echo '<p> $string1 is equal to $string2.</p>';
}
else
{
	echo '<p> $string1 is NOT equal to $string2.</p>';
}

//test if $string1 is equal to $string3
if ($string1 == $string3)
{
	echo '<p> $string1 is equal to $string3.</p>';
}
else
{
	echo '<p> $string1 is NOT equal to $string3.</p>';
}

$trimmed1 = trim($string1);
$trimmed2 = trim($string2);
$trimmed3 = trim($string3);

echo "<h2>After the trim() function</h2>";

//test if $string1 is equal to $string2
if ($string1 == $trimmed2)
{
	echo '<p> $string1 is equal to $trimmed2.</p>';
}
else
{
	echo '<p> $string1 is NOT equal to $trimmed2.</p>';
}

?>