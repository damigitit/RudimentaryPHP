<!DOCTYPE html>
<html lang = "en">

<head>
<title>Sign Guest Book</title>
</head>

<body>
<?php
	if (empty($_POST['first_name']) || empty($_POST['last_name']))
		echo "<p>You must enter your first and last name. Click your browser's back button to return to the Guest Book.</p>\n";
	else
	{
		$first_name = addslashes($_POST['first_name']);
		$last_name = addslashes($_POST['last_name']);
		$guest_book = fopen("guest_book.txt", "ab");
		if (is_writeable("guest_book.txt")) {
			if (fwrite($guest_book, $last_name . ", " . $first_name . "\n"))
				echo "<p>Thank you for signing our guest book!</p>\n";
			else
				echo "<p>Cannot add your name to the guest book.</p>\n";
			
		}
		else
			echo "<p>Cannot write to the file.</p>\n";
		fclose($guest_book);
	}
?>


</body>
</html>