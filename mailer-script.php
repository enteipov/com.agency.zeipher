<?php
	echo 'statement started';
	if ( is_empty(
			$_POST['fname'] ||
			$_POST['lname'] ||
			$_POST['email'] ||
			$_POST['phone'] ||
			$_POST['message']
			echo 'entered if statement';
		){
			echo 'enter sanitization';
			$fname = filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
			$lname = filter_var($_POST['lname'],FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
			$phone = filter_var($_POST['phone'],FILTER_SANITIZE_STRING);
			$message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
		
			echo 'entered variable assignment';
			$recipient = 'lanceander@gmail.com';
			$subject = 'Zeipher Agency Inquiry [' + $fname + ' ' + $lname + ']';
			$headers = "From: Zeipher Agency <donotreply@zeipher.com>" . "\r\n";
			$headers .= "Cc: lanceander@gmail.com" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$timeStamp = date("Y-m-d h:i:sa");
			
			echo 'began creating message';
			//START OF MSG
			$msg =  <<<EOD
			<br>
			Name: $fname $lname <br>
			Email: $email <br>
			Phone: $phone <br>
			Message: $message <br>
			<br>
			<br>
			<br>
			<br>
			$timeStamp
EOD;
//END OF MSG
		
			mail($recipient, $subject, $msg, $headers);
			echo 'Your request was sent. We will be contacting you shortly.';
			
		} else {
			
			die('Your Message Was Not Sent. All fields are required; please resubmit your request.');
			
		} 

?>