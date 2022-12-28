<!DOCTYPE HTML>
<html>
<head>
<title>Birth-Year Switch</title>
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
			<form name="birth_year_form" action="birth_year_switch.php" method="post">
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
				
			echo "<p>You were born in the year of the " . $zodiac_array[($number%-1912)%12] . "</p>\n";
			echo "<img src='images/" . $zodiac_array[($number%-1912)%12] . ".png' />";
			
			$filename = $zodiac_array[($number-1912)%12];
			if (file_exists("statistics/" . $filename . ".txt"))
			{
				switch ($filename)
				{
					case 'rat':
						$count = file_get_contents("statistics/rat.txt");
						break;
					case 'ox':
						$count = file_get_contents("statistics/ox.txt");
						break;
					case 'tiger':
						$count = file_get_contents("statistics/tiger.txt");
						break;				
					case 'rabbit':
						$count = file_get_contents("statistics/rabbit.txt");
						break;				
					case 'dragon':
						$count = file_get_contents("statistics/dragon.txt");
						break;				
					case 'snake':
						$count = file_get_contents("statistics/snake.txt");
						break;				
					case 'horse':
						$count = file_get_contents("statistics/horse.txt");
						break;				
					case 'goat':
						$count = file_get_contents("statistics/goat.txt");
						break;				
					case 'monkey':
						$count = file_get_contents("statistics/monkey.txt");
						break;				
					case 'rooster':
						$count = file_get_contents("statistics/rooster.txt");
						break;				
					case 'dog':
						$count = file_get_contents("statistics/dog.txt");
						break;				
					case 'pig':
						$count = file_get_contents("statistics/pig.txt");
						break;
				}
				++$count;
				
				
			} else {
				$count = 1;

			echo "<p>You are visitor number $count to enter $number.</p>";
			if (file_put_contents("statistics/" . $filename . ".txt", $count)) {
				echo "<p>The counter file has been updated</p>\n";
			} else {
				$file = fopen("statistics/" . $filename . ".txt", "w") or die("Couln't open!");
				fwrite("statistics/" . $filename . ".txt", $count);
				echo "$count written to file";
				
				}

			}
		}
	?>	
</body>

</html>