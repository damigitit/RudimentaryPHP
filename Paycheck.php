<?php
ob_start(); //the is a output buffer stores all user content in a buffer until you are ready to display it
//declares an errorcount variable to track errors - initially there are no errors 
$errorcount = 0;
//declares a boolean variable with an initial value of false -- no bonus
$bonus = false;
//if the submit button has been pressed - must be the same as name value for submit
if (isset($_POST['submit']))
	{
	/*troubleshooting statement */
	//echo "<p>The submit button has been pressed.</p>\n";
		
	    //assign the values the user enters in the form to variables
		$wage = $_POST['wage'];
		$hours = $_POST['hours'];
		/*troubleshooting statements */
		//echo "<p><strong>Weekly Salary: " . $salary . "</strong></p>\n";
		//echo "<p><strong>Number of Cars Sold This Week: " . $cars . "</strong></p>\n";
		
		//if the value the user enters in the salary text box is a number
		if (is_numeric($hours))
			{
				if ($hours > 0)
				{
				    //assign the posted value to a weekly_salary variable
					$weekly_hours = $hours;
					
				}
				else
				{
				    //if the value the user enters is not a number
					//increase the errorcount variable by one and display error message
					++$errorcount;
					echo "<p>Weekly hours must be greater than 0</p>\n";
				}

					
			}
		else
		    //if the value the user enters for salary is not a number
			{
			    //increase the errorcount variable by one and display error message
				++$errorcount;
				echo "<p>You must enter a number for the weekly hours</p>\n"; 
				/*troubleshooting statement */
				//echo "<p>Error Count: " . $errorcount . "</p>\n";
			}
	}
	
/* Same type of statements for the cars */
if (isset($_POST['submit']))
	{
	//echo "<p>The submit button has been pressed.</p>\n";
if (is_numeric($wage))
	{
		if($wage > 0)
		{
			$weekly_wage = $wage;

		}
		else
		{
		++$errorcount;
		echo "<p>Wage must be greater than 0.</p>\n";
		}
	}
	else
	{
		++$errorcount;
		echo "<p>The value for Wage must be a number</p>\n";		
	}
}
/* check if calculations should be done or form should be displayed */
//if there are no errors and the submit button has been pressed
if ($errorcount == 0 && isset($_POST['submit']))
 {
	//Perform calculations
    //if the value of the $bonus variable is true it has a value of 1 - false would be 0
	if ($weekly_hours > 40)
	{
		$regular_hours = 40;
		$overtime_hours = $weekly_hours-40;
		
		$overtime_pay = (1.5*$weekly_wage)*$overtime_hours;
		$regular_pay = $weekly_wage*$regular_hours;
		
		$weekly_pay = $regular_pay + $overtime_pay;
	}
	else
	{	
		$overtime_pay = 0;
		$regular_pay = $weekly_hours*$weekly_wage;
		$weekly_pay = $regular_pay;
	

  
	}
	
		  //display the salary information using number_format
	  echo "<p>Regular Pay= $" . number_format($regular_pay, 2) . ".</p>\n";
	  echo "<p>Overtime Pay = $" . number_format($overtime_pay, 2) . ".</p>\n";
	  echo "<p>Your total Weekly Pay is $" . number_format($weekly_pay, 2) . ".</p>\n";
	  echo "<p><a href = 'Paycheck.html'>Calculate another paycheck</a></p>\n";
 /*display form if there are errors or the viewer opened the process_car_sales1.php file directly */
 }
else
 {
    //include the form
	include ("Paycheck.html");
 }//ends else to display form
?>
