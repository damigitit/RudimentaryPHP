<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: validate_local_address.php
	Today's Date:  8/2/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Validate Local Address</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>Validate Local Address</h1><hr />

	
	<?php
		$email = array(
		"jsmith123@example.org",
		"john.smith.mail@example.org",
		"john.smith@example.org",
		"john.smith@example",
		"jsmith123@mail.example.org");

		foreach ($email as $emailAddress){
			echo "<p>The email address &ldquo;" . $emailAddress . "&rdquo; ";
			if (preg_match("/^(([A-Za-z]+\d+)|" . 
					"([A-Za-z]+\.[A-Za-z]+))" .
					"@((mail\.)?)example\.org$/i",
					$emailAddress)==1)
				echo "is a valid e-mail address.";
			else
				echo "is not a valid e-mail address.";
		}
	?>
	

</body>
</html>