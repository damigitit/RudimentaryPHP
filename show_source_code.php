<!DOCTYPE HTML>

<html>

	<head>
		<title>Show Source Code</title>
	</head>

	<body>

		<?php
	if (isset($_GET['source_file'])) {
		$source_file = file_get_contents(
		stripslashes($_GET['source_file']));
		highlight_string($source_file);
	}
	else
		echo "<p>No source file name entered</p>\n";
		?>
	</body>

</html>