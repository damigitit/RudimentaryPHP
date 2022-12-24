<!-- 
	Student Name: Damian Archer
	File Name: sub_string.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//declare and initialize a string that will be split into substrings
$filename = "bootstrap_logo.png";
//split $filename string into two substrings - image and extension
$image = substr($filename, 0, -4);//start at the beginning and omit the last four characters
$extension = substr($filename, -4);//start 4 characters from the end

echo "<p>The filename, " .$filename . ", has a name of " . $image . ".</p>\n";
echo "<p>The filename, " . $filename . ", has an extension of " . $extension . ".</p>\n";

if ($extension == '.jpg' OR $extension == '.png' OR $extension == '.gif')
{
	echo "<p>" . $filename . " has an extension of <strong>" . $extension . "</strong> so it is Web friendly.</p>\n";
}
else
{
	echo "<p>" . $filename . " has an extension of <strong>" . $extension . "</strong> so it is NOT Web friendly.</p>\n";
}
?>