<!DOCTYPE HTML>
<html>
<head>
<title>Final Quiz</title>
</head>

<body>

<style>
	h1 {background-color: #f00;
		border: solid 2px;}
	section {background-color: white;}
	
	</style>

<hr>
	<?php
		$display_form = TRUE;
		$number = "";
		
		# Array to hold questions
		$questions = file("questions.txt");
		for ($i = 0; $i < 10; $i++)
		{
			$questions[$i] = stripslashes($questions[$i]);
		}
			
		
		
		if (isset($_POST['Submit'])) {
			
			# Array to hold submitted answers to questions
			$answers = array(
				$_POST["Q1"],
				$_POST["Q2"],
				$_POST["Q3"],
				$_POST["Q4"],
				$_POST["Q5"],
				$_POST["Q6"],
				$_POST["Q7"],
				$_POST["Q8"],
				$_POST["Q9"],
				$_POST["Q10"]);
			
			# Counts unanswered questions
			$unanswered = 0;
			for ($a = 0; $a < sizeof($answers); $a++)
			{
				if (!isset($answers[$a]) | ($answers[$a] == ""))
				{
					$unanswered += 1;
				}
			}
			
			# checks that all are set, if not, re-displays form
			for ($a = 0; $a < sizeof($answers); $a++)
			{
				if (!isset($answers[$a]) | $answers[$a] == "")
				{
					$display_form = True;
					break;
				}
				else
				{
					$display_form = False;
				}
			}

			# Displays unanswered questions
			if ($unanswered > 0) { $errors .=  $unanswered . " unanswered questions, please complete form and resubmit.<br/><br/>"; }
			
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
			 //check to see whether user_email field was submitted and the email field is not blank
			 if (isset($_POST['user_email']) && $_POST['user_email'] != "")  
			{
				//remove unwanted characters from the email field
				$user_email = filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL);
				
				//validate the email field to ensure it is in a proper email format
				if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) 
				{
					//concatenate email error message to existing error message
					$errors .= "$user_email is <strong>NOT</strong> a valid email address.<br/><br/>";
					$display_form = True; 
				}
			} 
			else 
			{
				//if the email field is blank, add to errors
				$errors .= 'Please enter your email address.<br/>';
				$display_form = True;
			}
			// check to see that reviewer_email has been submitted and was not blank			
			if (isset($_POST['reviewer_email']) && $_POST['reviewer_email'] != "")  
			{
				//remove unwanted characters from the email field
				$reviewer_email = filter_var($_POST['reviewer_email'], FILTER_SANITIZE_EMAIL);
				
				//validate the email field to ensure it is in a proper email format
				if (!filter_var($reviewer_email, FILTER_VALIDATE_EMAIL)) 
				{
					//concatenate email error message to existing error message
					$errors .= "$reviewer_email is <strong>NOT</strong> a valid email address.<br/><br/>";
					$display_form = True;
				}
					
			} 
			else 
			{
				//if the email field is blank
				$errors .= 'Please enter your email address.<br/>';
				$display_form = True;
				
			}
			
			// Show errors in red.
			echo '<div style="color: red; font-weight: bold">' . $errors . '<br/>';
			echo '</div>';
			
		}

		# display form
		if ($display_form) {
			?>
			
			<!-- begin form -->
			<form name="QuizForm" action="inc_final_project.php" method="post">
			
			<h1 style="text-align: center;">Chinese Zodiac Quiz</h1>
			
			<!-- section for user and reviewer information -->
			<section style="border: solid 2px;padding: 20px;">
				<h2>Please provide the following:</h2>
				<b>Name:</b> <br />
					<input name="name" placeholder="Your Name" type="text" value = "<?php if(isset($_POST['name']))echo $_POST['name']; ?>" /><br />
				<b>Your Email:</b> <br />
					<input name="user_email" placeholder="Your Email" type="text" value = "<?php if(isset($_POST['user_email']))echo $_POST['user_email']; ?>" /><br />
				<b>Reviewer's Email: </b> <br />
					<input name="reviewer_email" placeholder="Reviewer Email" type="text" value = "<?php if(isset($_POST['reviewer_email']))echo $_POST['reviewer_email']; ?>" /><br />
			</section>
			
			<br /> <!-- spacing -->
			
			<!-- begin questions of sticky form -->
			
			<!-- Fill in the blank -->
			<label for="Q1"><strong>Q1)	</strong><?php echo $questions[0];?></label><br />
				<input type="text" name="Q1" value="<?php echo $answers[0]; ?>" /><br /><br />
			
			<!-- Multiple Choice -->
			<label for="Q2"><strong>Q2)	</strong><?php echo $questions[1];?></label><br />
				5 <input label="5" type="radio" name="Q2" value="5"
					<?php if (isset($answers[1]) and $answers[1] == "5") echo ' checked'; ?>/><br />
				9 <input type="radio" name="Q2" value="9"
					<?php if (isset($answers[1]) and $answers[1] == "9") echo ' checked'; ?>/><br />
				12 <input type="radio" name="Q2" value="12" 
					<?php if (isset($answers[1]) and $answers[1] == "12") echo ' checked'; ?>/><br />
				15 <input type="radio" name="Q2" value="15"
					<?php if (isset($answers[1]) and $answers[1] == "15") echo ' checked'; ?>/><br /></p>
			
			<label for="Q3"><strong>Q3)	</strong><?php echo $questions[2];?></label><br />
				Rat, Ox, Tiger, Rabbit <input label="5" type="radio" name="Q3" value="Rat, Ox, Tiger, Rabbit"
					<?php if (isset($answers[2]) and $answers[2] == "Rat, Ox, Tiger, Rabbit") echo ' checked'; ?>/> <br />
				Dragon, Snake, Horse, Goat <input type="radio" name="Q3" value="Dragon, Snake, Horse, Goat"
					<?php if (isset($answers[2]) and $answers[2] == "Dragon, Snake, Horse, Goat") echo ' checked'; ?>/><br />
				Monkey, Goat, Rooster, Dog <input type="radio" name="Q3" value="Monkey, Goat, Rooster, Dog"
					<?php if (isset($answers[2]) and $answers[2] == "Monkey, Goat, Rooster, Dog") echo ' checked'; ?>/><br />
				Pig, Rabbit, Dragon, Snake <input type="radio" name="Q3" value="Pig, Rabbit, Dragon, Snake" 
					<?php if (isset($answers[2]) and $answers[2] == "Pig, Rabbit, Dragon, Snake") echo ' checked'; ?>/><br /><br />
			
			<!-- True or False -->
			<label for="Q4"><strong>Q4)	</strong><?php echo $questions[3];?></label><br /> 
			<select name="Q4" id="Q4">
				<option value="True" 
					<?php if (isset($answers[3]) and $answers[3] == "True") echo ' selected="selected"'; ?>/>True</option>
				<option value="False"
					<?php if (isset($answers[3]) and $answers[3] == "False") echo ' selected="selected"'; echo $answers[3]; ?>/>False</option> 
			</select> <br /> <br />
			
			<label for="Q5"><strong>Q5)	</strong> <?php echo $questions[4];?></label><br /> 
			<select name="Q5" id="Q5">
				<option value="True"
					<?php if (isset($answers[4]) and $answers[4] == "True") echo ' selected="selected"'; ?>/>True</option>
				<option value="False"
					<?php if (isset($answers[4]) and $answers[4] == "False") echo ' selected="selected"'; ?>/>False</option> 
			</select> <br /> <br />
			
			<label for="Q6"><strong>Q6)	</strong><?php echo $questions[5];?> <br /></label><br />
			<input type="text" name="Q6" value="<?php echo $answers[5]; ?>" /><br /><br />
			
			<label for="Q7"><strong>Q7)	</strong><?php echo $questions[6];?></label><br /> 
			<select name="Q7" id="Q7">
				<option value="True" 
					<?php if (isset($answers[6]) and $answers[6] == "True") echo ' selected="selected"'; ?>/>True</option>
				<option value="False"
					<?php if (isset($answers[6]) and $answers[6] == "False") echo ' selected="selected"'; ?>/>False</option> 
			</select> <br /> <br />
			
			<label for="Q8"><strong>Q8)	</strong><?php echo $questions[7];?></label><br />
				Rabbit <input label="5" type="radio" name="Q8" value="Rabbit"
					<?php if (isset($answers[7]) and $answers[7] == "Rabbit") echo ' checked'; ?>/> <br />
				Snake<input type="radio" name="Q8" value="Snake"
					<?php if (isset($answers[7]) and $answers[7] == "Snake") echo ' checked'; ?>/> <br />
				Monkey<input type="radio" name="Q8" value="Monkey" 
					<?php if (isset($answers[7]) and $answers[7] == "Monkey") echo ' checked'; ?>/> <br />
				Pig<input type="radio" name="Q8" value="Pig" 
					<?php if (isset($answers[7]) and $answers[7] == "Pig") echo ' checked'; ?>/> <br /><br />
			
			<label for="Q9"><strong>Q9)	</strong><?php echo $questions[8];?></label><br />
			<select name="Q9" id="Q9">
				<option value="True">True</option>
				<option value="False">False</option>
			</select> <br /> <br />	
			
			<label for="Q10"><strong>Q10)	</strong><?php echo $questions[9];?><br /></label><br />
			<input type="text" name="Q10" value="<?php echo $answers[9]; ?>" /> 
		

			<!-- Buttons -->
			<p><input type="reset" value="Clear Form" />&nbsp;
			&nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
			</form>
			<?php

	
		} else {
			
           

			$tally = 0;
			
			# Array of Correct Answers
			$correctArray = array(
			"ox",
			"12",
			"Rat, Ox, Tiger, Rabbit",
			"True",
			"True",
			"pig",
			"False",
			"Monkey",
			"False",
			"dog",);
			
			# Count correct answers and output whether the user answered correctly or not.
			for ($i = 0; $i < sizeof($answers); $i++)
			{
				if ($correctArray[$i] == $answers[$i]) {
					$tally += 1;
					$results .= $questions[$i] . "<span style='color:green'> Answered $answers[$i]. Correct! </span><br />";
				}
				else
				{
					$results .= $questions[$i] . "<span style='color:red'> Answered $answers[$i] Incorrectly, Correct Answer: " . $correctArray[$i] . "</span><br />";
				}
				$results .= "<br />";
			}
			
			
			// prepare message for email	
			$message = "";
			
			for($i = 0; $i < 10; $i++)
			{
				$message .=  "#" . ($i+1) . " " . $answers[$i];
				
				// if answer is correct answer
				if ($answers[$i] == $correctArray[$i])
				{
					$message .= " Correct!";
				}
				else 
				{
					$message .= " Incorrect! Correct Answer was " . $correctArray[$i];
				}
				$message .= "\n\n";
			}
			
			// Assign a custom message according to score
			if ($tally == 10)
			{
				$message .= "You are a Chinese Zodiac Expert! " . $tally/10*100 . "%";
				$results .= "You really know your Chinese Zodiac facts! " . $tally/10*100 . "%";
			}
			else if ($tally >= 8)
			{
				$message .= "You really know your Chinese Zodiac facts! " . $tally/10*100 . "%";
				$results .= "You really know your Chinese Zodiac facts! " . $tally/10*100 . "%";
			}
			else
			{
				$message .= "You answered $tally correct out of 10 total, and scored a " . $tally/10*100 . "%";
				$results .= "You answered $tally correct out of 10 total, and scored a " . $tally/10*100 . "%";
			}
			
			
			// show results on screen after quiz
			echo $results;
			


			//if there are no errors, prepare the email
			if (!$errors) 
			{
				$to = $reviewer_email;
				
				$subject = "Quiz Results: " . $name;
				
				$headers .= 'Cc:'. $user_email . "\r\n"; // Courtesy copy to Sender
				$headers .= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
				
				
				$output  = 'From: ' . $_POST['name'] . "\n";
				$output .= 'Email: ' . $user_email . "\n";
				$output .= 'Subject: ' . 'Quiz Results' . "\n";
				$output .= "Message:\n\n" . $message . "\n\n";
				
				// Message lines should not exceed 70 characters (PHP rule), so turn on wordwrap
				$message = wordwrap($output, 70);
				
				// mail to the reviewer and user
				mail($to, $subject, $message, $headers);
	 
				// let user know the email was sent successfully
				echo "<br /><br />Your e-mail has been sent successfully! Thank you for your feedback!<br/><br/>";
			} 
			else 
			{
				//if the email could not be sent, display the error messages and redisplay the sticky form
				echo '<div style="color: red; font-weight: bold">' . $errors . '<br/>';
				include ('inc_final_project.php');
				echo '</div>';	
			}
		}
	?>	
</body>

</html>