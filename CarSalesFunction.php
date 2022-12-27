<?php
//if the submit button has not been pressed, display the form
if(!isset($_POST['submit']))
{
	include("CarSalesFunctionForm.php");
}
else
{
//function that displays error message if the form is submitted with blank fields
//function is called from the validateInput() function if the form is submitted with a blank field
function displayRequired($fieldName) {
     echo "The fieldname " . $fieldName . " is required.<br />\n";
}

//function that receives the values from the form
function validateInput($data,$fieldName)
{
	//global variable that can be accessed by any part of the program
	//the value will be modified in the validateInput() function
	GLOBAL $errorCount;
	if (empty($data))
	{
		//if a blank value is submitted, displayRequired() function is called
		//the value of the name attribute will be passed as a parameter
		displayRequired($fieldName);
		//the global $errorcount variable is increased by 1
		++$errorCount;
		//return a blank value to the calling script
		$retval="";
	}
	else 
	{
		//if a value has been submitted, check to see if the data is a number
		//check to see if it is greater than 0
		if(is_numeric($data) && $data>0)
		     {
			//if true, return the value submitted
			$retval=$data;
		     }
		else 
			{
			//if false, increase the global $errorcount variable by 1
			//return a blank value to the calling script
			++$errorCount;
			$retval="";
			}
	}
	return($retval);
}


function redisplayForm($salary,$cars){
	
	include("CarSalesFunctionForm.php");
}

//process the form+
$salary = $_POST['salary'];
$cars = $_POST['cars'];
$bonus = 0;
$weekly_salary = 0;

//calls the validateInput() function and sends two parameters for data and fieldname
//for data, it sends the user input; for fieldName it sends "Weekly Salary"
$salary=validateInput($salary,"Weekly Salary");


//calls the validateInput() function and sends two parameters for data and fieldname
//for data, it sends the user input; for fieldName it sends "Cars Sold"
$cars=validateInput($cars,"Number of Cars Sold");

//if there is an error in the validation process; $errorcount is not 0
if($errorCount>0)
        {
	echo "Please re-enter the information below.<br />\n";
	
	redisplayForm($salary,$cars);
        } 
 else 
        {
	
	/* Calculations */
	    if ($cars>=10)
	    {
		$bonus = $salary * .05;
		$weekly_salary = $salary + $bonus;
	     } 
	     else 
	     {
		$salary = $salary;
	     }
	?>
	
	<h2>Your Weekly Salary</h2>
	
	<?php
		echo "Your Weekly Salary: $" . number_format($salary,2). "<br />\n";
		echo "Your bonus: $" . number_format($bonus,2) . "<br />\n";
		echo "Weekly Salary Plus Bonus: $" . number_format($weekly_salary,2) . "<br />\n";
        }
}
			
?>
