 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
            "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>MySQL Server Information</title>
</head>

<body>


	<h1>MySQL Database Server Information</h1>

<?php

	$db_connect = mysqli_connect("localhost", "student975", "TEV9D2NHYEEY");
	if (!($db_connect))
	{
		die(mysql_error());
	}
	
	echo "<p>MySQL client version: "
		. mysqli_get_client_info() . "</p>\n";
		
	if ($db_connect===FALSE)
		echo "<p>Connection failed.</p>\n";
	else {
		echo "<p>MySQL connection: "
			. mysqli_get_host_info($db_connect) . "</p>\n";
		echo "<p>MySQL protocol version: "
			. mysqli_get_proto_info($db_connect) . "</p>\n";
		echo "<p>MySQL server version: "
			. mysqli_get_server_info($db_connect) . "</p>\n";
	
		mysqli_close($db_connect);
	}
		
	
	
	
	
	
	
	
	
	
	
	


?>
</body>

</html>