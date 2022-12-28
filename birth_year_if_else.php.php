<!DOCTYPE HTML>
<html>
<head>
<title>Birth-Year If Else</title>
</head>

<body>
	<?php
		$display_form = TRUE;
		$number = "";
		
		if (isset($_POST['Submit'])) {
			$number = $_POST['number'];
			if (is_numeric($number)) {
				$display_form = FALSE;
			} else {
				echo "<p>You need to enter a numeric value.</p>\n";
				$display_form = TRUE;
			}
		}
		
		if ($display_form) {
			?>
			<form name="birth_year_form" action="birth_year_if_else.php" method="post">
			<p>Enter BirthYear: <input type="text" name="number" value="<?php echo $number; ?>" /></p>
			<p><input type="reset" value="Clear Form" />&nbsp;
			&nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
			</form>
			<?php

	
		} else {
			$zodiac_array = 
				array(
				"rat",
				"ox",
				"tiger",
				"rabbit",
				"dragon",
				"snake",
				"horse",
				"goat",
				"monkey",
				"rooster",
				"dog",
				"pig");
				
			echo "<p>You were born in the year of the " . $zodia_array[($number%-1912)%12] . "</p>\n";
			echo "<img src=\"images\/" . $zodia_array[($number%-1912)%12] . ".png' />";
			
			$filename = $zodia_array[($number-1912)%12];
			if (file_exists("statistics/" . $filename . ".txt"))
			{
				$count = file_get_contents("statistics/" . $filename . ".txt");
				++$count;
			} else {
				$count = 1;
			}
			echo "<p>You are visitor number $count to enter $number.</p>";
			if (file_put_contents("statistics/" . $filename . ".txt", $count)) {
				echo "<p>The counter file has been updated</p>\n";
			} else {
				$file = fopen("statistics/" . $filename . ".txt", "w") or die("Couln't open!");
				fwrite("statistics/" . $filename . ".txt", $count);
				echo "$count written to file";
				
			}

		}
	?>	
</body>

</html>