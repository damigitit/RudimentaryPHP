<!-- 
	Student Name: Damian Archer
	File Name: string_array.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//comma delimited values entered by user
$element_string = "water, wood, fire, earth, metal";
//replace the comma space with a comma because user may entere space
$element_string = str_replace(", ", ",", $element_string);
//convert string the user entered to an array
$element_array = explode(",",$element_string);

//show elements in the indexed array
echo "<pre>";
print_r($element_array);
echo "</p>";
?>