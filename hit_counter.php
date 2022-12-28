<!DOCTYPE html>
<html lang = "en">
<head>
<title>Hit Counter</title>
</head>
<body>
<?php
	$counter_file = "hitcount.txt";
	if (file_exists($counter_file)) {
		$hits = file_get_contents($counter_file);
		++$hits;
	}
	else
	{
		$hits = 1;
	}
	echo "<h1>There have been $hits hits to this page. </h1>\n";
	if (file_put_contents($counter_file, $hits))
		echo "<p>The counter file has been updated</p>\n";
	

?>


</body>
</html>