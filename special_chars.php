<!-- 
	Student Name: Damian Archer
	File Name: special_chars.php
	Today's Date:  7/24/2022
	Purpose:  ch3 exercises
 -->

<?php
//declare and initialize a comment variable with a special character
$comment = "An HTML page starts with this tag: <html>";
//display the comment
echo "<p>" . $comment . ".</p>";
//apply a function to convert the special character to its HTML entity
$converted_comment = htmlspecialchars($comment);
$stripped_comment = htmlspecialchars(strip_tags($comment));
$stripped_comment1 = htmlspecialchars(strip_tags($comment, '<html>'));

echo "<p>When you apply the <em>htmlspecialchars() function</em> to <strong> " . $comment . "</strong>, it becomes <strong>" . $converted_comment . ".</strong></p>\n";

echo "<p>When you apply the <em>htmlspecialchars() and strip_tags() functions</em> to <strong> " . $comment . "</strong>, it becomes <strong>" . $stripped_comment . ".</strong></p>\n";

echo "<p>When you apply the <em>htmlspecialchars() and strip_tags() functions</em> (but allow the HTML tag) to <strong> " . $comment . "</strong>, it becomes <strong>" . $stripped_comment1 . ".</strong></p>\n";

?>