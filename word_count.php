<!-- 
	Student Name: Damian Archer
	File Name: word_count.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->


<?php
$string = "Now is the time for all good men to come to the aid of their country.";
$count_words = str_word_count($string);

echo "<p>There are " . $count_words . " words in the string, </em>'" . $string . "'</em></p>\n";
?>
