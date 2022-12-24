<!-- 
	Student Name: Damian Archer
	File Name: temp_conversion.php
	Today's Date:  7/17/2022
	Purpose:  ch2 project
 -->

<?php

	$f = 0;
	while ($f < 101)
	{
		echo "<P>$f fahrenheit is " . ($f-32)*(5/9) . " Celsius.</p>";
		++$f;
	}
?>