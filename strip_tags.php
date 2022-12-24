<!-- 
	Student Name: Damian Archer
	File Name: strip_tags.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//declare and initialize a variable
$string = '<p>My comment.</p><!-- Comment --><a href = "#">Link</a>';
echo "<p>" . $string . "<p>\n";
$stripped_string = strip_tags($string, '<p><a>');
echo "<p>" . $stripped_string . "</p>\n";
?>