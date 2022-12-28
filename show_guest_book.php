<?php

echo "<h1>Using the readfile() function</h1>";
$filename = 'guestbook.txt';
if (file_exists($filename))
{
	echo "<pre>";
    readfile(($filename));
    echo "</pre>";
}

?>