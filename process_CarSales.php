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
		$salary = $_POST['salary'];
		$cars = $_POST['cars'];
		/*troubleshooting statements */
		//echo "<p><strong>Weekly Salary: " . $salary . "</strong></p>\n";
		//echo "<p><strong>Number of Cars Sold This Week: " . $cars . "</strong></p>\n";
		
		//if the value the user enters in the salary text box is a number
		if (is_numeric($salary))
			{
				if ($salary >0)
				{
				    //assign the posted value to a weekly_salary variable
					$weekly_salary = $salary;
				}
				else
				{
				    //if the value the user enters is not a number
					//increase the errorcount variable by one and display error message
					++$errorcount;
					echo "<p>Weekly Salary must to be greater than 0</p>\n";
				}
			}
		else
		    //if the value the user enters for salary is not a number
			{
			    //increase the errorcount variable by one and display error message
				++$errorcount;
				echo "<p>You must enter a number for the salary</p>\n"; 
				/*troubleshooting statement */
				//echo "<p>Error Count: " . $errorcount . "</p>\n";
			}
	}
	
/* Same type of statements for the cars */
if (isset($_POST['submit']))
	{
	//echo "<p>The submit button has been pressed.</p>\n";
if (is_numeric($cars))
	{
		if($cars >= 0)
		{
			if ($cars > 10)
			{
			//changes the value of the bonus variable to true
			$bonus = true;
			//echo "<p>Bonus: " . $bonus . "</p>\n";
			}
		}
		else
		{
		++$errorcount;
		echo "<p>The number of cars sold must be 0 or higher</p>\n";
		}
	}
	else
	{
		++$errorcount;
		echo "<p>The value for Number of Cars Sold must be a number</p>\n";		
	}
}
/* check if calculations should be done or form should be displayed */
//if there are no errors and the submit button has been pressed
if ($errorcount == 0 && isset($_POST['submit']))
 {
	//Perform calculations
    //if the value of the $bonus variable is true it has a value of 1 - false would be 0
	if ($bonus == 1)
	{
		//calculate bonus amount using .20 as a bonus percentage
		$bonus_amt = $weekly_salary * .20;
	}
	else
	{
		$bonus_amt = 0;
	}
	  /* weekly pay is equal to weekly salary + bonus amount */
	  $weekly_pay = $weekly_salary + $bonus_amt;
	  //display the salary information using number_format
	  echo "<p>Weekly Salary= $" . number_format($weekly_salary, 2) . ".</p>\n";
	  echo "<p>Bonus = $" . number_format($bonus_amt, 2) . ".</p>\n";
	  echo "<p>Your total Weekly Pay is $" . number_format($weekly_pay, 2) . ".</p>\n";
	  echo "<p><a href = 'CarSales1.php'>Calculate another paycheck</a></p>\n";
  
 }
 /*display form if there are errors or the viewer opened the process_car_sales1.php file directly */
else
 {
    //include the form
	include ("CarSales.php");
 }//ends else to display form
?>
