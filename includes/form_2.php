<?php	
	if (empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email2']) && strlen($_POST['email2']) == 0 || empty($_POST['email2']) && strlen($_POST['email2']) == 0 || empty($_POST['email2']) && strlen($_POST['email2']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email2 = $_POST['email2'];
	$email2 = $_POST['email2'];
	$email2 = $_POST['email2'];
	$message = $_POST['message'];
	$optin = $_POST['optin'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail2: $email2 \nEmail2: $email2 \nEmail2: $email2 \nMessage: $message \nOptin: $optin \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email2";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>