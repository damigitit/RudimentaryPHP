<!-- 
	Student Name: Damian Archer
	File Name: reverse_string.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//declare and initialize a string
$string = "Where it is chic to be geek";
//reverse the string
$reversed_string= strrev($string);
//display the reverse of $string
echo "<p>When you apply the <em>sttrev() function</em> to <strong> " . $string . "</strong>, it becomes <strong>" . $reversed_string. ".</strong></p>\n";
?>