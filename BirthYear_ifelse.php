<!DOCTYPE HTML>
<html>
<head>
<title>BirthYear If Else</title>
</head>

<body>
	<?php
		$DisplayForm = TRUE;
		$Number = "";
		
		if (isset($_POST['Submit')) {
			$Number = $_POST['Number'];
			if (is_numeric($Number)) {
				$DisplayForm = FALSE;
			} else {
				echo "<p>You need to enter a numeric value.</p>\n";
				$DisplayForm = TRUE;
			}
		}
		
		if ($DisplayForm) {
			?>
			<form name="BirthYearForm" action="BirthYear_ifelse.php" method="post">
			<p>Enter a number: <input type="text" name="Number" value="<?php echo $Number; ?>" /></p>
			<p><input type="reset" value="Clear Form" />&nbsp;
			&nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
			</form>
			<?php
		}
	?>	
</body>

</html>