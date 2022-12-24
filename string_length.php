<!-- 
	Student Name: Damian Archer
	File Name: string_length.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//declare and initialize a string
$password = "8Chars#";
$password_length = strlen($password);

if ($password_length >= 8)
{
	echo "<p>The password " . $password . " is valid because it contains 8 or more characters.</p>\n";
}
else
{
	echo "<p>The password " . $password . " is NOT valid because it does not contain at least 8 characters.</p>\n";
}

?>