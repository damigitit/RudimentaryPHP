<!--Web form with four fields and placeholder text -->
<div class="container">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>Feedback Form</h3>
<p>Please provide your feedback/suggestions on the form below:</p>
</div>
<!-- Feedback Form Starts Here-->
<form action="process_email.php" id="form" method="post" name="form">
<input name="name" placeholder="Your Name" type="text" value = "<?php if(isset($_POST['name']))echo $_POST['name']; ?>" />
<input name="email" placeholder="Your Email" type="text" value = "<?php if(isset($_POST['email']))echo $_POST['email']; ?>" />
<input name="subject" placeholder="Subject" type="text" value = "<?php if(isset($_POST['subject']))echo $_POST['subject']; ?>" />
<label>Your Suggestions/Feedback</label>
<textarea name="msg" placeholder="Type your message here..."><?php if(isset($_POST['msg'])) echo $_POST['msg']; ?></textarea>
<input id="send" name="submit" type="submit" value="Send Feedback">
</form>
</div>
<!-- Feedback Form Ends Here -->
</div>