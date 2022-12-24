
<!-- 
	Student Name: Damian Archer
	File Name: string_replace.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//declare and initialize a variable
$ISBN = "9780538745840";
$entered_ISBN = "978-0-538-74584-0";

//apply the str_replace() to replace all dashes with nothing
$modified_ISBN = str_replace("-", "", $entered_ISBN);

if($entered_ISBN == $ISBN)
{
	echo "<p>The entered ISBN# " . $entered_ISBN . " matches the stored ISBN # " . $ISBN . ".</p>\n";
}
else
{
	echo "<p>The entered ISBN# " . $entered_ISBN . " DOES NOT match the stored ISBN# " . $ISBN . ".</p>\n";
}

echo "<p>When you apply the <em>str_replace() function</em> to <strong> " . $entered_ISBN . "</strong>, it becomes <strong>" . $modified_ISBN . "</strong>.</p>\n";

if($modified_ISBN == $ISBN)
{
	echo "<p>The modified ISBN# " . $modified_ISBN . " matches the stored ISBN# " . $ISBN . ".</p>\n";
}
else
{
	echo "<p>The modified ISBN# " . $modified_ISBN . " DOES NOT match the stored ISBN# " . $ISBN . ".</p>\n";
}
?>

 
