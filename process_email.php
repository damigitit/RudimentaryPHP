<!DOCTYPE html>
<html>
<head>
<title>FeedBack Form</title>
<link href="email_style.css" rel="stylesheet">
</head>
<!-- Body Starts Here -->
<body>
	<?php
	//declare $errors variable to store validation errors
	$errors = '';
	//check if the submit button has been pressed
	if (isset($_POST['submit'])) {
			//check to see that a name field was submitted and the name field is not blank
			if (isset($_POST['name']) && $_POST['name'] != "") 
			{
				//remove unwanted characters from the name string
				$_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
				//if name field is blank
				if ($_POST['name'] == "") 
				{
					//concatenate new error validation message to existing $errors variable
					$errors .= 'Please enter a valid full name.<br/><br/>';
				}
			} 
			else 
			{
				//if name field is blank
				$errors .= 'Please enter your full name.<br/>';
			}
			 //check to see that an email field was submitted and the email field is not blank
			 if (isset($_POST['email']) && $_POST['email'] != "")  
			{
				//remove unwanted characters from the email field
				$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
				//validate the email field to ensure it is in a proper email format
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
				{
					//concatenate email error message to existing error message
					$errors .= "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
				}
			} 
			else 
			{
				//if the email field is blank
				$errors .= 'Please enter your email address.<br/>';
			}
			 //check to see that a subject field was submitted and the subject field is not blank
			 if (isset($_POST['subject']) && $_POST['subject'] != "")  
			{
				//remove unwanted characters from the subject field
				$_POST['subject'] = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
				if ($_POST['subject'] == "") 
				{
					//concatenate error message
					$errors .= 'Please enter a valid subject line.<br/><br/>';
				}
			} 
			else 
			{
				//if the subject field is blank
				$errors .= 'Please enter a subject line for your email.<br/>';
			}
			 //check to see that a message field was submitted and the message field is not blank
			 if (isset($_POST['msg']) && $_POST['msg'] != "")  
			{
				//remove unwanted characters from the message field
				$_POST['msg'] = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);
				
				//if the message field is blank
				if ($_POST['msg'] == "") 
				{
					//concatenate email error message to existing variable
					$errors .= 'Please enter a message for the email.<br/>';
				}
			} 
			else 
			{
				//if the message field is blank
				$errors .= 'Please enter a message for the email.<br/>';
			}
			//if there are no errors, prepare the email
			if (!$errors) 
			{
				$to = 'dkokoska@maine.edu';
				$subject = $_POST['subject'];
				$headers .= 'Cc:'. $email . "\r\n"; // Courtesy copy to Sender
				$message  = 'From: ' . $_POST['name'] . "\n";
				$message .= 'Email: ' . $email . "\n";
				$message .= 'Subject: ' . $_POST['subject'] . "\n";
				$message .= "Message:\n" . $_POST['msg'] . "\n\n";
				// Message lines should not exceed 70 characters (PHP rule), so turn on wordwrap
				$message = wordwrap($message, 70);
				mail($to, $subject, $message, $headers);
	 
				echo "Your e-mail has been sent successfully ! Thank you for your feedback!<br/><br/>";
			} 
			else 
			{
				//if the email could not be sent, display the error messages and redisplay the sticky form
				echo '<div style="color: red; font-weight: bold">' . $errors . '<br/>';
				include ('email.php');
				echo '</div>';	
			}//ends else
	}//ends if isset
	else
		{
			//if the submit button was not pressed and the user opened the process script directly
			include ("email.php");
		}
	?>
</body>
</html>