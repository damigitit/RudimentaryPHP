<!-- 
	Student Name: Damian Archer
	File Name: string_array2.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//comma delimited values entered by user
$elements_string = "water, wood, fire, earth, metal";
//replace the comma space with a comma because user may entere space
$elements_string = str_replace(", ", ",", $elements_string);
//convert string the user entered to an array
$elements_array = explode(",",$elements_string);

//show elements in the indexed array
echo "<pre>";
print_r($elements_array);
echo "</p>";

//convert array back to a string
$elements_string = implode(", ",$elements_array);
echo $elements_string;
?>