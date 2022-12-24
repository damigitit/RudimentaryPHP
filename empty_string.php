<!-- 
	Student Name: Damian Archer
	File Name: empty_string.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//declare and initialize a string
$string = "0";
//check to see if the string is empty using the empty function
if(empty($string))
{
	echo '<p>$string is empty.</p>';
}
else
{
	echo '<p>$string is NOT empty.</p>';
}

//declare and initialize a string
$string1 = "   ";
//check to see if the string is empty
if(!isset($string1) || trim($string1) == "")
{
	echo '<p>$string1 is empty.</p>';
}
else
{
	echo '<p>$string1 is NOT empty</p>';
}

?>