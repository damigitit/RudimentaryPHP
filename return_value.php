<!DOCTYPE html>
<!-- 
	Student Name: Damian Archer
	File Name: return_value.php
	Today's Date:  7/17/2022
	Purpose:  CIS 333
 -->
<html lang="en">
<head>
	<title>Defining a function with a Return Value</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php
		function add_integers($int1, $int2) {
			$result = $int1 + $int2;
			// return the result to the calling function
			return $result;
		}
	?>
	
</head>



<body>

<?php
	
	//Call a PHP function
	$return_value = add_integers(5, 10);
	echo "<p>The add_integers function returned to this value: " . $return_value . "</p>";
?>

</body>
</html>